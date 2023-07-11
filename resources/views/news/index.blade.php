@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{asset('assets/fontawesome/css/all.min.css')}}">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
<style>
    .cards {
  display: flex;
  flex-wrap: wrap;
  list-style: none;
  margin: 0;
  padding: 0;
}

.cards_item {
  display: flex;
  padding: 1rem;
}

@media (min-width: 40rem) {
  .cards_item {
    width: 50%;
  }
}

@media (min-width: 56rem) {
  .cards_item {
    width: 33.3333%;
  }
}

.card {
  background-color: white;
  border-radius: 0.25rem;
  box-shadow: 0 20px 40px -14px rgba(0, 0, 0, 0.25);
  display: flex;
  flex-direction: column;
  overflow: hidden;
}

.card_content {
  padding: 1rem;
  background: linear-gradient(to bottom left, #EF8D9C 40%, #FFC39E 100%);
}

.card_title {
  color: #ffffff;
  font-size: 1.1rem;
  font-weight: 700;
  letter-spacing: 1px;
  text-transform: capitalize;
  margin: 0px;
}
.sub-img{
      max-width: 350px;
      min-width: 350px;
      max-height: 150px;
      min-height: 150px;
    }
.card_text {
  color: #ffffff;
  font-size: 0.875rem;
  line-height: 1.5;
  margin-bottom: 1.25rem;    
  font-weight: 400;
}
img {
  height: auto;
  max-width: 100%;
  vertical-align: middle;
}

</style>
@endsection

@section('title')
Dashboard
@stop

@section('content')
<div class="breadcrumb-wrap">
    <div class="container">
        <ul class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active">News</li>
        </ul>
    </div>
</div>
<div class="single-news">
    <div class="container">
        <form action="news-search" method="get">
            <div class="row">
                <div class="col-lg-8">
                    <div class="form-group">
                        <label for="title">Tite</label>
                        <input type="text" name="title" class="form-control" value="{{$selectedTitle ?? ''}}">
                    </div>
                </div>
                <div class="col-lg-4">
                    <button class="btn rounded" style="margin-top: 30px;" type="submit">search</button>
                </div>
            </div>
        </form>
        <div class="row"> 
            <div class="main">
                <ul class="cards">
                    @foreach($news as $new)
                        <li class="cards_item">
                            <div class="card">
                            <div class="card_image"><img class="sub-img" src="{{asset('storage/logos/'.$new->image)}}"></div>
                            <div class="card_content">
                                <h2 class="card_title">{{$new->title}} @if($new->is_real == 1)<i class="fa-solid fa-square-check" style="color: #2a511f;"></i>@else <i class="fa-solid fa-rectangle-xmark" style="color: #ec1818;"></i> @endif</h2>
                                <p class="card_text mt-2">{{substr_replace($new->body,"....",60)}}</p>
                                <a href="/news/{{$new->id}}" class="btn card_btn">Read More</a>
                            </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
        </div>

 
    </div>
</div>
@endsection


@section('js')
@endsection