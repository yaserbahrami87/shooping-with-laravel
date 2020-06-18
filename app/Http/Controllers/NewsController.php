<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use Illuminate\Support\Facades\DB;
use Verta;

class NewsController extends BaseController
{
    public function show()
    {
        //$news=user::find(1)->news()->orderBy('id','desc')->paginate(6);
        // $news=User::orderBy('id','desc')->paginate(6);
        $partNews = $this->newsService->getNews();
        $trending = $this->newsService->getTrendingNews();
        $header = $this->newsService->getNewsHeader();
        $news = $this->newsService->getNews();
        $videos=news::orderBy('news.created_at','desc')->limit(12)->get();
        $modifedPostfooter=$this->modifedPostfooter();
        $mostViewedPost=$this->mostViewedPost();
        $mostPopular=$this->mostPopular();
        return view ('welcome',compact('news','modifedPostfooter','header','trending','partNews','videos','mostViewedPost','mostPopular'));
    }

    public function insert(Request $request)
    {
        $this->validate(request(),
        [
            'titrnews'=>'required|max:200',
            'textnews'=>'required',
            'summary'=>'required',
            'category'=>'required'
        ]);
        $check=news::create([
            'titrnews'=>$request['titrnews'],
            'textnews'=>$request['textnews'],
            'summary'=>$request['summary'],
            'category'=>intval ($request['category']),
        ]);
        $check=$check['id'];
        // return Route::redirect($check, '/insertnews', 301);;
        return redirect()->route('insertNews', ['check'=>compact('check')]);
    }
}
