<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>MonSite</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

</head>
<body>
   <div id="app">
       
	   @include('parties.menu')
	   <br>
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
					@include('parties.flash')
				</div>
			</div>
		</div>
		
		
        <main class="py-4">
            @yield('content')
        </main>
    </div>
	
	
	@yield('javascripts')
	
		<footer class="footer mt-auto py-3">
		  <div class="container">
		  <div class="row">
			<span class="text-muted">Place sticky footer content here.</span>
			</div>
		  </div>
		</footer>
	
</body>
</html>
