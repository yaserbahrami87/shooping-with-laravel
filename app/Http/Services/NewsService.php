<?php

namespace App\Http\Services;

use App\news;

class NewsService {

    public function getPartNews()
    {
        $partNews=news::where('category_id','=','1')->limit(12)->get();
        return $partNews;
    }

    public function getTrendingNews()
    {
        $trending = news::where('category_id','=','3')->limit(12)->get();

        return $trending;
    }

    public function getNews()
    {
        $news= news::join('users','users.id','=','news.user_id')
                    ->select('users.*','news.*')
                    ->orderBy('news.created_at','desc')
                    ->paginate(6);
        return $news;
    }

    public function getNewsHeader()
    {
        $header= news::orderBy('news.created_at','desc')->limit(5)->get();
        return $header;
    }
}
