<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>
        @yield('title')
    </title>
	<!-- Styles -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.23/css/jquery.dataTables.min.css">
    <!-- Scripts -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
	<style>
		
		body 
		{   
		  background: url('https://wallpaperaccess.com/full/388350.png'); 

		}
	@import url('https://fonts.googleapis.com/css2?family=Bebas+Neue&display=swap');
	.container-fluid {
  		height: 50vh;
	}
	table.dataTable td {
  		padding: .5em;
	}
	.jumbotron {
		background-image: url("https://i.imgur.com/S0b3wwy.png");
		background-position: bottom; 
	}
	</style>
</head>
<body>
		<div id="app col-1">
			<nav class="navbar navbar-expand-md navbar-light bg-light shadow-sm">
				<div class="container">
					<a class="navbar-brand" href="{{ url('/') }}">
					<img src="https://lh3.googleusercontent.com/Zz2xGhPAvYSU4-hA0fHacVG0avxaSq6aUZPDJaF3d2siM1Vc_MgcM_sBbFyy9X0ntNtR7gZidu7wYxhA=w1080-h608-p-no-v0" style="height:39px;"> LIBRERÍA PAPELERÍA VOLCÁN
					</a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse" id="navbarSupportedContent">
						<!-- Left Side Of Navbar -->
						<ul class="navbar-nav mr-auto">
						</ul>
						<!-- Right Side Of Navbar -->
						<ul class="navbar-nav ml-auto">
							<!-- Authentication Links -->
							@guest
							@if (Route::has('login'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
							</li>
							@endif
							@if (Route::has('register'))
							<li class="nav-item">
								<a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
							</li>
							@endif
							@else
							<li class="nav-item dropdown">
								<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
								{{ Auth::user()->name }}
								</a>
								<div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
									<a class="dropdown-item" href="{{ route('logout') }}"
									onclick="event.preventDefault();
									document.getElementById('logout-form').submit();">
										{{ __('Logout') }}
									</a>
									<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
										@csrf
									</form>
								</div>
							</li>
							@endguest
						</ul>
					</div>
				</div>
			</nav>
		</div>
	
	
		<br><br>
		@yield('content')	
</body>