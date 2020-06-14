<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
use App\User;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
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

    public function show()
    {
        //$news=user::find(1)->news()->orderBy('id','desc')->paginate(6);
        // $news=User::orderBy('id','desc')->paginate(6);
        $news= news::join('users','users.id','=','news.user_id')->orderBy('news.created_at','desc')->paginate(6);
        $header= news::orderBy('news.created_at','desc')->limit(5)->get();
        $trending=news::where('category_id','=','3')->limit(12)->get();
        $partNews=news::where('category_id','=','1')->limit(12)->get();
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

    // public function singleNews(news $singleNews)
    public function singleNews($data)
    {
        $singleNews=DB::table('news')
                    ->where('id_news','=',$data)
                    ->get();

        $cls="single";//for class body
        $singleNews=($singleNews[0]);
        $modifedPostfooter=$this->modifedPostfooter();
        $mostViewedPost=$this->mostViewedPost();
        $mostPopular=$this->mostPopular();
        $trending=news::where('category_id','=','3')->limit(12)->get();
        return view('single',compact('singleNews','cls','modifedPostfooter','mostViewedPost','mostPopular','trending'));
    }
}
