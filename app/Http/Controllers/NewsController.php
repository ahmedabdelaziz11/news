<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index(Request $request,$cat_id = null)
    {
        $selectedTitle =  $request->title ?? '';
        $news = News::when($cat_id,function($q,$cat_id){
            $q->where('category_id',$cat_id);
        })
        ->when($selectedTitle,function($q,$selectedTitle){
            $q->where('title','like','%'.$selectedTitle.'%');
        })
        ->take(10)
        ->get();

        return view('news.index',compact('news','selectedTitle'));
    }


    public function show(News $news)
    {
        return view('news.show',compact('news'));
    }
}
