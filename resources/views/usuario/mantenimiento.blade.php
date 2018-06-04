@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="card border-secondary mb-3 panel-registro-usuarios">
		  <div class="card-header"><span class="fa fa-user-plus icon"></span> Registro de usuarios</div>
		  <div class="card-body text-secondary">
		  		<!--
					REGISTRO DE USUARIOS
		  		-->
		   	<form id="form-registro-usuarios" action="" method="POST">
		   		<div class="row" id="form-content">
		   			<div class="col-lg-6">
			   			<div class="form-group row">
				   			<label class="col-md-4 col-form-label" for="txtusuario">Nombres :</label>
				   			<input id="txtusuario" class="form-control col-md-8" type="text" name="">
				   		</div>
				   		<div class="form-group row">
				   			<label class="col-md-4 col-form-label" for="txtnomusuario">Usuario :</label>
				   			<input id="txtnomusuario" class="form-control col-md-8" type="text" name="">
				   		</div>
				   		<div class="form-group row">
				   			<label class="col-md-4 col-form-label" for="txtpassword">Contraseña :</label>
				   			<input id="txtpassword" class="form-control col-md-8" type="password" name="">
				   		</div>
				   		<div class="form-group row">
				   			<label class="col-md-4 col-form-label" for="txtcorreo">Email :</label>
				   			<input id="txtcorreo" class="form-control col-md-8" type="email" name="">
				   		</div>
			   		</div>
			   		<div class="col-lg-6">
			   			<div class="form-group row">
				   			<label class="col-md-4 col-form-label" for="txttelefono">Teléfono :</label>
				   			<input id="txttelefono" class="form-control col-md-8" type="text" name="">
				   		</div>
				   		<div class="form-group row">
				   			<label class="col-md-4 col-form-label" for="txtespecialidad">Especialidad :</label>
				   			<input id="txtespecialidad" class="form-control col-md-8" type="text" name="">
				   		</div>
				   		<div class="form-group row">
				   			<label class="col-md-4 col-form-label" for="cbounidad">Unidad :</label>
				   			<select id="cbounidad" class="form-control col-md-8" name="">
				   				<option value="">Seleccione...</option>
				   				<option value="">Encuestas y Registros</option>
				   				<option value="">Unidad 2</option>
				   				<option value="">Unidad 3</option>
				   			</select>
				   		</div>
				   		<div class="form-group row">
				   			<label class="col-md-4 col-form-label" for="cboperfil">Perfil :</label>
				   			<select id="cboperfil" class="form-control col-md-8" name="">
				   				<option value="">Seleccione...</option>
				   				<option value="">Perfil 1</option>
				   				<option value="">Perfil 2</option>
				   				<option value="">Perfil 3</option>
				   			</select>
				   		</div>
			   		</div>
		   		</div>		   		
		   	</form>
		   	<!--
					FIN DEL FORMULARIO
		   	-->
		   	<div class="row form-group d-flex justify-content-between px-3">

		   		<a href="#" class="btn btn-primary">Listar</a>
	   			<button class="btn btn-success">Registrar</button>
	   			
	   		</div>
		  </div>
		  <div class="card-footer">
		  		<table class="table table-hover table-striped">
		  			<thead>
		  				<tr>
		  					<th>Nombres</th>
		  					<th>Perfil</th>
		  					<th>Estado</th>
		  					<th>Email</th>
		  					<th>Teléfono</th>
		  					<th>Especialidad</th>
		  					<th>Unidad</th>
		  				</tr>
		  			</thead>
		  			<tbody>
		  				@foreach($usuarios as $usuario)
		  					<tr>
		  						<td>{{ $usuario->NOMBRE }}</td>
		  						<td>{{ $usuario->ID_PERFIL }}</td>
		  						<td>{{ $usuario->ESTADO }}</td>
		  						<td>{{ $usuario->CORREO }}</td>
		  						<td>{{ $usuario->TELEFONO }}</td>
		  						<td>{{ $usuario->ESPECIALIDAD }}</td>
		  						<td>{{ $usuario->unidad->ID_UNIDAD }}</td>
		  					</tr>
		  				@endforeach
		  			</tbody>
		  		</table>
		  </div>
		</div>
	</div>

@endsection