<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\news;
class NewsController extends Controller
{
    public function show()
    {
        $news=news::limit(5)->get();
        return view ('welcome',compact('news'));
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
            'category'=>$request['category'],
        ]);
        $check=$check['id'];
        // return Route::redirect($check, '/insertnews', 301);;
        return redirect()->route('insertNews', ['check'=>compact('check')]);
    }
}
