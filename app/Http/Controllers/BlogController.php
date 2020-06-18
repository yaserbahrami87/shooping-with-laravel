<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends BaseController
{
    public function index()
    {
        $mostViewedPost=$this->mostViewedPost();
        $modifedPostfooter =$this->modifedPostfooter();
        $getNews=$this->newsService->getNews();
        $mostPopular=$this->mostPopular();
        $getTrendingNews=$this->newsService->getTrendingNews();
        return view('blog',compact('mostViewedPost','modifedPostfooter','getNews','mostPopular','getTrendingNews'));
    }
}
