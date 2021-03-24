<?php

namespace App\Http\Controllers;

use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;
use App\Models\Article;

class SpiderController extends Controller
{
    public function test()
    {
        $pagesCount = 3;
        $linkToPars = 'https://www.30secondsofcode.org/js/t/algorithm/p/';
        $baseUrl = 'https://www.30secondsofcode.org';

        $all_articles_links_in_all_pages = [];

        for($i=1; $i <= $pagesCount; $i++)
        {
            $link = $linkToPars . $i;
            $crawler = $this->create_crawler($link);
            $articleLinks = $this->parse_list($crawler,'.list-card');

            array_push($all_articles_links_in_all_pages, $articleLinks);
        }


        foreach($all_articles_links_in_all_pages as $page)
        {
            foreach ($page as $article)
            {
                $link = $baseUrl . $article['link'];
                $crawler = $this->create_crawler($link);
                $article_content = $this->parse_block($crawler, '.snippet-card');

                Article::create([
                    'title'=> $article['title'],
                    'description'=> $article['descr'],
                    'content'=> $article_content[0],
                    'author_id' => 1
                ]);
            }
        }
    }

    public function create_crawler($link)
    {
        $client = new Client();
        $res = $client->get($link);
        $text = $res->getBody()->getContents();

        return new Crawler($text);
    }

    public function get_all_links($crawler)
    {
        return $crawler->filter('a')->each(function($node) {
            $href  = $node->attr('href');
            $title = $node->text();

            return compact('href', 'title');
        });
    }

    public function parse_list($crawler, $classToFind)
    {
        return $crawler->filter($classToFind)->each(function($node) {
            $link = $node->filter('a')->attr('href');
            $title = $node->filter('.card-title')->text();
            $descr = $node->filter('.card-description')->text();
            $tags = str_getcsv($node->filter('.card-subtitle')->text(), ',');

            return compact('link', 'title', 'descr','tags');
        });
    }

    public function parse_block($crawler, $classToFind)
    {
        $block = $crawler->filter($classToFind)->each(function($node) {
            return $node->html();
        });

        if(!empty($block)) return $block;
    }
}
