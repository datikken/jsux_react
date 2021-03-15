<?php

namespace App\Http\Controllers;

use Symfony\Component\DomCrawler\Crawler;
use Illuminate\Http\Request;

class SpiderController extends Controller
{
    public function __construct()
    {
        $this->crawler = new Crawler();
    }
}
