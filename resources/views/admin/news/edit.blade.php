@extends('admin.layouts.app')

@section('css')
@endsection

@section('title')
Edit News
@stop

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>News</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashbord</a></li>
                <li class="breadcrumb-item"><a href="/admin/news">News</a></li>
                <li class="breadcrumb-item active">Edit News</li>
            </ol>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Edit News</h3>
                            </div>

                            <form action="{{ route('news.update',$news->id) }}" method="post" autocomplete="off" enctype="multipart/form-data">
                                {{ method_field('patch') }}
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputName">Title</label>
                                        <input type="text" name="title" value="{{$news->title}}" class="form-control"  placeholder="Enter title" required>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputName">Body</label>
                                        <textarea class="form-control" name="body" cols="30" rows="10">{{$news->body}}</textarea>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputName">select category</label>
                                        <select name="category_id" class="form-control">
                                            <option value="" selected>select category</option>
                                            @foreach ($categories as $cat)
                                                <option value="{{ $cat->id }}" @if($cat->id == $news->category_id) selected @endif>{{ $cat->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputName">upload Image</label>
                                        <input type="file" class="form-control" name="image">
                                    </div>
                                </div>
                                <div class="card-footer">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</section>

@endsection

@section('js')
@endsection