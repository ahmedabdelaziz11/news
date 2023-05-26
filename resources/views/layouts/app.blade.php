<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="News SpotLight" name="keywords">
        <meta content="News SpotLight" name="description">
		@include('layouts.head')
	</head>

	<body>
            @include('layouts.sidebar')
            @include('layouts.navbar')
            @yield('content')
            @include('layouts.footer')
            @include('layouts.footer-scripts')	
        </div>
	</body>
</html>