<?php

namespace App\Http\Controllers;

use Symfony\Component\DomCrawler\Crawler;
use GuzzleHttp\Client;
use App\Models\Article;

class SpiderController extends Controller
{
    public function index()
    {
        $linkToPars = 'https://www.30secondsofcode.org/js/t/algorithm/p/1';
        $baseUrl = 'https://www.30secondsofcode.org';
        $crawler = $this->create_crawler($linkToPars);

        $links = $this->get_all_links($crawler);
        $algorithmsLinks = [];

        foreach($links as $link)
        {
            if(str_contains($link['href'], 'js') && !str_contains($link['href'], 'http')) {
                array_push($algorithmsLinks, $baseUrl . $link['href']);
            }
        }

        $classToFind = '.snippet-card';
        $allBlocks = [];

        foreach ($algorithmsLinks as $link) {
            $crawler = $this->create_crawler($link);
            $block = $this->get_block_by_class($crawler, $classToFind);
            array_push($allBlocks,$block);
        }

        foreach($allBlocks as $block) {
            if(!is_null($block)) {
                Article::create([
                    'author_id' => 1,
                    'title' => '',
                    'content' => $block[0]
                ]);
            }
        }

        echo 'alldone';
    }

    public function create_crawler($link)
    {
        $client = new Client();
        $res = $client->get($link);
        $text = $res->getBody()->getContents();
        $crawler = new Crawler($text);

        return $crawler;
    }

    public function get_all_links($crawler)
    {
        $links = $crawler->filter('a')->each(function($node) {
            $href  = $node->attr('href');
            $title = $node->text();

            return compact('href', 'title');
        });

        return $links;
    }


    public function get_block_by_class($crawler, $classToFind)
    {
        $block = $crawler->filter($classToFind)->each(function($node) {
            return $node->html();
        });

        if(!empty($block)) return $block;
    }
}
