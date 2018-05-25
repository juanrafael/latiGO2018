
@extends('layouts.app')

@section('content')
	<main id="login">
		<div class="container">
			<div class="row flex-center">
				<div id="formulario" class="col s12">
					<div class="card-panel">
						<div class="center">
							<img src="{{ asset('images/inei.png') }}" alt="inei logo" height="100">
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
						         <input id="username" name="username" type="text" class="validate" value="{{ old('username') }}">
						         <label for="username">Usuario</label>
						         {!! $errors->first('username', '<span class="red-text text-lighten-1">:message</span>') !!}
						      </div>
							</div>
							<div class="row">
								<div class="input-field col s12 {{ $errors->has('password') ? 'errors' : '' }}">
									<i class="fa fa-lock prefix"></i>
						         <input id="password" name="password" type="password" class="validate">
						         <label for="password">Contraseña</label>
						         {!! $errors->first('password', '<span class="red-text text-lighten-1">:message</span>') !!}
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
									<button class="waves-effect waves-light btn btn-large col s12 light-blue darken-2">Ingresar</button>
								</div>								
							</div>
						</form>
						<!--
							FIN DEL FORMULARIO
						-->
					</div>
				</div>
			</div>
		</div>			
	</main>
@endsection