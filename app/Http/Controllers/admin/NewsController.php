<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::with('category')->get();
        return view('admin.news.index',compact('news'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('admin.news.create',compact('categories'));
    }

    public function store(Request $request)
    {
        $news = News::create([
            'title' => $request->title,
            'body' => $request->body,
            'publisher' => $request->publisher,
            'date' => now(),
            'category_id' => $request->category_id,
        ]);
        if(isset($request->image)){
            $news->image = $this->savePhoto($request->image);
            $news->save(); 
        }
        return redirect('admin/news');
    }

    public function edit(News $news)
    {
        $categories = Category::all();
        return view('admin.news.edit',compact('news','categories'));
    }

    public function update(Request $request,News $news)
    {
        $news->update([
            'title' => $request->title,
            'body' => $request->body,
            'publisher' => $request->publisher,
            'date' => now(),
            'category_id' => $request->category_id,
        ]);


        if(isset($request->image)){
            Storage::delete('/public/logos/'.$news->logo);
            $news->image = $this->savePhoto($request->image);
            $news->save(); 
        }
        return redirect("/admin/news/$news->id/edit");
    }

    public function destroy(News $news)
    {
        $news->delete();
        return redirect('admin/news');
    }

    public function savePhoto($file)
    {
        $logoWithExt = $file->getClientOriginalName();
        $logoName = pathinfo($logoWithExt, PATHINFO_FILENAME);
        $logoExtension = $file->getClientOriginalExtension();

        $logoNameToStore = $logoName.'_'.time().'.'.$logoExtension;
        $file->storeAs('public/logos',$logoNameToStore);

        return $logoNameToStore;
    }
}
