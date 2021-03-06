@extends('layouts.admin')
@section('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h1 class="page-header">Listado de Grupos y Planteles <button class="btn btn-success">Nuevo</button></a></h1>
		@include('admin.grupoplantel.search')
	</div>	
	
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
            
					<th>Descripcio grupo</th>
					<th>Descripion Plantel</th>
					<th></th>
				</thead>
				@foreach ($grupos as $gru)
				<tr>
					<td>{{ $gru->descripciong}}</td>
					<td>{{ $gru->descripcion}}</td>
					
					<td>	


		<form action="{{route('grupoplantel.destroy', $gru->descripciong, $gru->descripcion)}}" method="POST">
		 		{{ csrf_field() }}
		 			<input type="hidden" name="_method" value="DELETE">
		 			<button type="submit" name="" class="btn btn-danger btn" value="Eliminar">Eliminar</button> 

		 		</form>					 
					</td>
				</tr>
				@endforeach
			</table>
		</div>
		{{$grupos->render()}}
	</div>
</div>

@stop