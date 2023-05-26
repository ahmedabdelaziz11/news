@extends('admin.layouts.app')

@section('css')
@endsection

@section('title')
Add Categories
@stop

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Categories</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashbord</a></li>
                <li class="breadcrumb-item"><a href="/admin/categories">Categories</a></li>
                <li class="breadcrumb-item active">Add Categories</li>
            </ol>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Categories</h3>
                            </div>

                            <form action="{{ route('categories.store') }}" method="post" autocomplete="off" enctype="multipart/form-data">
                                @csrf
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" name="name" class="form-control"  placeholder="Enter cateegory name" required>
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