<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		@include('admin.layouts.head')
	</head>

	<body class="hold-transition sidebar-mini layout-fixed">
        <div class="wrapper">
            @include('admin.layouts.navbar')		
            @include('admin.layouts.sidebar')		
            <div class="content-wrapper">
                @yield('content')
            </div>
            @include('admin.layouts.footer')
            @include('admin.layouts.footer-scripts')	
        </div>
	</body>
</html>