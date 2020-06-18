<?php

namespace App\Http\Controllers;

use App\news;
use App\Comment;
use Exception;
use Illuminate\Support\Facades\DB;

class SingleNewsController extends BaseController {

     // public function singleNews(news $singleNews)
     public function show($data)
     {
         $singleNews= DB::table('news')
                     ->where('news_id','=',$data)
                     ->get();

        $comments=Comment::join('news','comments.news_id','=','news.news_id')
                            ->join ('users','comments.user_id','=','users.id')
                            ->where('comments.news_id','=',$data)
                            ->orderBy('created_at_comments','desc')
                            ->select('users.*','comments.*','comments.created_at as created_at_comments','news.*')
                            ->paginate(5);
        $countComments=Comment::join('news','comments.news_id','=','news.news_id')
                            ->join ('users','comments.user_id','=','users.id')
                            ->where('comments.news_id','=',$data);
                            // /->get();
        //where('news_id','=',$data)->get();
        //dd($comments);
        if($singleNews->count() === 1){
            $singleNews =$singleNews->first();
        }else{
            throw new Exception('No News found with this ID');
        }

         $cls="single";//for class body

         $modifedPostfooter=$this->modifedPostfooter();
         $mostViewedPost=$this->mostViewedPost();
         $mostPopular=$this->mostPopular();
         $trending=news::where('category_id','=','3')->limit(12)->get();
         return view('single',compact('singleNews','cls','modifedPostfooter','mostViewedPost','mostPopular','trending','comments','countComments'));
     }
}
