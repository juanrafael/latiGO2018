@extends('layouts.app')

@section('datatablecss')
	<link rel="stylesheet" href="{{ asset('css/datatables.min.css') }}">
@endsection

@section('content')
	<div class="container">
		<div class="card border-secondary mb-3 panel-registro-usuarios">
			<div class="card-header d-flex justify-content-between align-items-center">
				<span class="fa fa fa-briefcase icon" style="top: 17px;"></span> Unidad
				<button class="btn btn-success" data-toggle="modal" data-target="#ventanaRegistros">Nueva unidad <span class="fa fa-plus"></span></button>
			</div>
			
			<div class="card-body text-secondary">
				<table id="tableUnidad" class="table">
					<thead>
						<tr>
							<th>Unidades</th>
							<th>&nbsp;</th>
							<th>&nbsp;</th>
						</tr>
					</thead>
					<tbody>
						@foreach($unidades as $unidad)
						<tr>
							<td>{{ $unidad->DESCRIPCION }}</td>
							<td width="30"><button class="btn btn-warning btn-editar-unidad">Editar</button></td>
							<td width="30"><button class="btn btn-danger">Eliminar</button></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>

		</div>
	</div>

	<!--
		VENTANA MODAL PARA AGREGAR
	-->

	<div class="modal fade" id="ventanaRegistros" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="">Agregar Unidad</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form class="" action="{{ route('registroUnidad') }}" method="post">
	        	{{ csrf_field() }}
	        	<div class="form-group d-flex">	        		
        			<label for="txtunidad" class="col-md-3">Unidad :</label>
        			<div class="col-md-9">
        				<input id="txtunidad" class="form-control {{ $errors->has('unidad') ? 'is-invalid' : '' }}" type="text" name="unidad">
        				{!! $errors->first('unidad', '<span class="text-danger">:message</span>') !!}
        			</div>
	        	</div>
	        	<button class="btn btn-primary pull-right">Guardar</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>

	<!--
		VENTANA MODAL PARA EDITAR
	-->
	<div class="modal fade" id="ventanaEditaRegistros" tabindex="-1" role="dialog" aria-labelledby="" aria-hidden="true">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <h5 class="modal-title" id="">Editar Unidad</h5>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	      </div>
	      <div class="modal-body">
	        <form class="" action="{{ route('registroUnidad') }}" method="post">
	        	{{ csrf_field() }}
	        	<div class="form-group d-flex">	        		
        			<label for="recipient-name" class="col-md-3">Unidad :</label>
        			<input id="recipient-name" class="form-control col-md-9" type="text" name="unidad">      			        	
	        	</div>
	        	<button class="btn btn-warning pull-right">Editar</button>
	        </form>
	      </div>
	    </div>
	  </div>
	</div>
@endsection

@section('datatablejs')
	<script src="{{ asset('js/datatables.min.js') }}"></script>
	<script>
		$(document).ready(function()
		{
			$('#tableUnidad').dataTable(
			{
				language: {
					"search" : 			"Buscar :",
					"zeroRecords":    "No hay información",
					"info":           "Mostrando _START_ a _END_ de _TOTAL_ registros",
					"paginate": {
				        "first":      "Primero",
				        "last":       "Último",
				        "next":       "Siguiente",
				        "previous":   "Anterior"
				    },
				    "lengthMenu":     "Mostrando _MENU_ registros",
				}
			});
		});
	</script>
	<script>
		$(document).ready(function()
		{
			$('.btn-editar-unidad').click(function()
			{
				
			});
		});
	</script>
@endsection