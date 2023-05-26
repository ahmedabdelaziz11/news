@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
<link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
@endsection

@section('title')
Dashboard
@stop

@section('content')
<section class="content-header py-4">
    <div class="container-fluid">
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4 col-4">
                        <div class="small-box bg-info">
                            <div class="inner">
                                <h3>{{App\Models\Category::count()}}</h3>
                                <p>Categories count</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-bag"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{App\Models\News::count()}}</h3>
                                <p>News Count</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-stats-bars"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-4">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>{{App\Models\User::where('role','!=','admin')->count()}}</h3>
                                <p>User Registrations</p>
                            </div>
                            <div class="icon">
                            <i class="ion ion-person-add"></i>
                            </div>
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