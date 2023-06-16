@extends('admin.layouts.app')

@section('css')
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{URL::asset('assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection

@section('title')
contacting users
@stop

@section('content')

<section class="content-header">
        <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
            <h1>Contacting Users</h1>
            </div>
            <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="/admin/dashbord">Dashbord</a></li>
                <li class="breadcrumb-item active">Contacting Users</li>
            </ol>
            </div>
        </div>
        </div><!-- /.container-fluid -->
</section>

  <!-- Main content -->
<section class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">Contacting Users</h3>
                        <div class="card-tools">
                            <div class="input-group input-group-sm" style="width: 150px;">
        
                                <div class="input-group-append">
                                    Feedbacks Count : {{ App\Models\ContactUs::count() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th style="width: 10px">#</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>subject</th>
                                    <th>message</th>
                                    <th>time</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $Feedbacks = App\Models\ContactUs::all();
                                @endphp
                                @foreach ($Feedbacks as $x)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$x->name}}</td>
                                    <td>{{$x->email}}</td>
                                    <td>{{$x->subject}}</td>
                                    <td>{{$x->message}}</td>
                                    <td>{{$x->created_at}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

@section('js')
<script src="{{URL::asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/jszip/jszip.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{URL::asset('assets/plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
    $(function () {
        $("#example1").DataTable({
            "responsive": true, "lengthChange": false, "autoWidth": false,
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function() {

        $('.delete-form').on('submit', function(e) {
            e.preventDefault();
            alert('are sure of the deleting process');
            e.currentTarget.submit();
        });

    
    });
</script>
@endsection