<?php

namespace App\Http\Controllers;

use App\Http\Services\NewsService;
use App\news;

class BaseController extends Controller{

    protected $newsService;

    public function __construct(){
        $this->newsService = new NewsService();
    }

    public function modifedPostfooter()
    {
        $lastNews= news::orderBy('news.updated_at','desc')->limit(9)->get();
        return $lastNews;
    }

    public function mostViewedPost()
    {
        $mostViewedPost= news::orderBy('news.views','desc')->limit(3)->get();
        return $mostViewedPost;
    }

    public function mostPopular()
    {
        $mostPopular= news::orderBy('news.likes','desc')->limit(5)->get();
        return $mostPopular;
    }

}
