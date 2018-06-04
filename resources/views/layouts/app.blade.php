<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>.::LATIGO:2018::.</title>
		<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
		<link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

		<link rel="stylesheet" href="{{ asset('css/app.css') }}">

		@yield('datatablecss')
	</head>
	<body>

		<section id="menu">
			<div class="barra-de-navegacion">
	            <nav class="navbar navbar-expand-lg navbar-light d-flex">
	                <div class="navbar-brand">
	                    <img src="{{ asset('images/inei.png') }}" height="50" alt="latigo inei">
	                    <a href="#">latiGO</a>
	                </div>                            
	                <div class="">

	                    <ul class="navbar-nav mr-auto">                      
	                      <span class="fa fa-user-circle-o"></span>

	                      <li class="nav-item dropdown">                                              
	                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
	                          {{ Auth::user()->nombre }} | {{ Auth::user()->nom_usuario }}
	                        </a>
	                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
	                          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
	                                     document.getElementById('logout-form').submit();">
	                              cerrar sesion
	                          </a>
	                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
	                            {{ csrf_field() }}
	                        </form>
	                        </div>
	                      </li>
	                      
	                    </ul>
	                </div>
	            </nav>
	        </div>

	        @yield('content')
	        
		</section>		

		<footer class="footer">
			
		</footer>
		<script src="{{ asset('js/jquery.min.js') }}"></script>
		<script src="{{ asset('js/bootstrap.min.js') }}"></script>

		@yield('datatablejs')
	</body>
</html>