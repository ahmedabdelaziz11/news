@extends('admin.layouts.app')

@section('css')
@endsection

@section('title')
Add admins
@stop

@section('content')

<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Admins</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin/dashboard">Dashboard</a></li>
                <li class="breadcrumb-item"><a href="/admin/admins">Admins</a></li>
                <li class="breadcrumb-item active">Add Admins</li>
            </ol>
            </div>
        </div>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12">
                        <div class="card card-primary">
                            <div class="card-header">
                                <h3 class="card-title">Add Admins</h3>
                            </div>

                            <form action="{{ route('admins.update',$user->id) }}" method="post" autocomplete="off">
                                {{ method_field('patch') }}
                                @csrf
                                <input type="hidden" name="id" value="{{$user->id}}">
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" name="name" value="{{$user->name}}" class="form-control"  placeholder="Enter admin name" required>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputName">Email</label>
                                        <input type="email" name="email" value="{{$user->email}}" class="form-control"  placeholder="Enter admin email" required>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="form-group">
                                        <label for="exampleInputName">Password</label>
                                        <input type="password" name="password" class="form-control"  placeholder="Enter admin password" required>
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