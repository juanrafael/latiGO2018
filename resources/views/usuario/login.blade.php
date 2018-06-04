<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
		<title>.::LOGIN::.</title>
		<link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
		<link rel="stylesheet" href="{{ asset('css/materialize.css') }}">
		<link rel="stylesheet" href="{{ asset('css/font-awesome.min.css') }}">

		<link rel="stylesheet" href="{{ asset('css/app.css') }}">
	</head>
	<body>
		<main id="login">
			<div class="container">
				<div class="row flex-center">
					<div id="formulario" class="col s12">
						<div class="card-panel">
							<div class="center">
								<img src="{{ asset('images/inei.png') }}" alt="inei logo" height="70">
							</div>
							<h1 class="login-title">latiGO</h1>
							<!--
								FORMULARIO
							-->
							<form class="login-form" action="{{ route('login') }}" method="POST">
								{{ csrf_field() }}
								<div class="row">
									<div class="input-field col s12 {{ $errors->has('username') ? 'errors' : '' }}">
										<i class="fa fa-user-o prefix"></i>
							         <input id="username" name="username" type="text" class="validate">
							         <label for="username">Usuario</label>
							         {!! $errors->first('username', '<span class="red-text text-darken-3">:message</span>') !!}
							      </div>
								</div>
								<div class="row">
									<div class="input-field col s12 {{ $errors->has('password') ? 'errors' : '' }}">
										<i class="fa fa-lock prefix"></i>
							         <input id="password" name="password" type="password" class="validate">
							         <label for="password">Contraseña</label>
							         {!! $errors->first('password', '<span class="red-text text-darken-3">:message</span>') !!}
							      </div>
								</div>
								<div class="row">
									<div class="checkbox-login">						         
							         <label>
							         	<input type="checkbox">
							         	<span>Recordar</span>
							         </label>
							      </div>
								</div>
								<div class="row">
									<div class="input-field col s12">
										<button class="waves-effect waves-light btn btn-small col s12 light-blue darken-2">Ingresar</button>
									</div>								
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>			
		</main>
		<script src="{{ asset('js/materialize.js') }}"></script>
	</body>
</html>