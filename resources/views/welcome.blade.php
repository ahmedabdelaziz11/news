@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('title')
Dashboard
@stop

@section('content')

    <div class="top-news">
        <div class="container">
            <div class="row">
                <div class="col-md-6 tn-left">
                    <div class="row tn-slider">
                        @php
                            $topNewsForSlider = App\Models\News::latest()->take(5)->get();
                        @endphp
                        @foreach($topNewsForSlider as $news)
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img src="{{asset('storage/logos/'.$news->image)}}">
                                    <div class="tn-title">
                                        <a href="/news/{{$news->id}}">{{$news->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-md-6 tn-right">
                    <div class="row">
                        @php
                            $fourNews = App\Models\News::inRandomOrder()
                                            ->limit(4)
                                            ->get();
                        @endphp 
                        @foreach($fourNews as $news)
                            <div class="col-md-6">
                                <div class="tn-img">
                                    <img style="width:100px" src="{{asset('storage/logos/'.$news->image)}}" />
                                    <div class="tn-title">
                                        <a href="/news/{{$news->id}}">{{$news->title}}</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
    @php
        $fourCategories = App\Models\Category::inRandomOrder()
                        ->limit(4)
                        ->get();
    @endphp 
    <!-- Category News Start-->
    <div class="cat-news">
        <div class="container">
            <div class="row">
                @foreach($fourCategories as $category)
                    <div class="col-md-6">
                        <h2>{{$category->name}}</h2>
                        <div class="row cn-slider">
                            @foreach($category->news as $news)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <img src="{{asset('storage/logos/'.$news->image)}}" />
                                        <div class="cn-title">
                                            <a href="/news/{{$news->id}}">{{$news->title}}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Category News End-->

    
    <!-- Tab News Start-->
    <div class="tab-news mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="nav nav-pills nav-justified">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#featured">Featured News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#popular">Popular News</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#latest">Latest News</a>
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
        </div>
    </div>
    <!-- Tab News Start-->
@endsection

@section('js')
@endsection