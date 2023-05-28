@extends('layouts.app')

@section('css')
<link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet"> 

<!-- CSS Libraries -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
@endsection

@section('title')
Dashboard
@stop

@section('content')
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item"><a href="/news">News</a></li>
            <li class="breadcrumb-item active">News details</li>
        </ul>
    </div>
</div>
<div class="single-news">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="sn-container">
                    <div class="sn-img">
                        <img src="{{asset('storage/logos/'.$news->image)}}" />
                    </div>
                    <div class="sn-content">
                        <h1 class="sn-title">{{$news->title}}</h1>
                        <p>{{ $news->body }}</p>
                    </div>
                </div>
                <div class="sn-related">
                    <h2>Related News</h2>
                    <div class="row sn-slider">
                        @php
                            $relatedNews = App\Models\News::where('id','!=',$news->id)
                                            ->where('category_id',$news->category_id)
                                            ->latest()
                                            ->take(4)
                                            ->get();
                        @endphp 
                        @foreach($relatedNews as $news)
                            <div class="col-md-4">
                                <div class="sn-img">
                                    <img src="{{asset('storage/logos/'.$news->image)}}" />
                                    <div class="sn-title">
                                        <a href="/news/{{ $news->id }}">{{$news->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="sidebar">
                    <div class="sidebar-widget">
                        <div class="tab-news">
                            <ul class="nav nav-pills nav-justified">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="pill" href="#featured">Featured</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#popular">Popular</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="pill" href="#latest">Latest</a>
                                </li>
                            </ul>

                            <div class="tab-content">
                                <div id="featured" class="container tab-pane active">
                                    @php
                                        $fourNews = App\Models\News::inRandomOrder()
                                                        ->limit(4)
                                                        ->get();
                                    @endphp 
                                    @foreach($fourNews as $news)
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="{{asset('storage/logos/'.$news->image)}}" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="/news/{{$news->id}}">{{$news->title}}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div id="popular" class="container tab-pane fade">
                                    @php
                                        $fourNews = App\Models\News::inRandomOrder()
                                                        ->limit(4)
                                                        ->get();
                                    @endphp 
                                    @foreach($fourNews as $news)
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="{{asset('storage/logos/'.$news->image)}}" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="/news/{{$news->id}}">{{$news->title}}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div id="latest" class="container tab-pane fade">
                                    @php
                                        $fourNews = App\Models\News::inRandomOrder()
                                                        ->limit(4)
                                                        ->get();
                                    @endphp 
                                    @foreach($fourNews as $news)
                                        <div class="tn-news">
                                            <div class="tn-img">
                                                <img src="{{asset('storage/logos/'.$news->image)}}" />
                                            </div>
                                            <div class="tn-title">
                                                <a href="/news/{{$news->id}}">{{$news->title}}</a>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="sidebar-widget">
                        <h2 class="sw-title">News Category</h2>
                        <div class="category">
                            @php
                                $categories = App\models\Category::limit(10)->get();
                            @endphp
                            <ul>
                                @foreach($categories as $category)
                                    <li><a href="/search/{{$category->id}}">{{$category->name}}</a><span>({{$category->news()->count()}})</span></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>     
                </div>
            </div>
        </div>
    </div>
</div>
@endsection


@section('js')
@endsection