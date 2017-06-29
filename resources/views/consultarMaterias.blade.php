@extends('master')

@section('contenido')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Clave</th>
				<th>Creditos</th>
				<th>Opciones</th>
			</tr>
			@foreach($materias as $ma)
			<tr>
				<td>{{$ma->id}}</td>
				<td>{{$ma->nombre}}</td>
				<td>{{$ma->clave}}</td>
				<td>{{$ma->creditos}}</td>
				<td>
					<a href="{{url('/editarMateria')}}/{{$ma->id}}" class="btn  btn-primary btn-xs">
						 <span class="glyphicon  glyphicon-pencil" aria-hidden="true"></span>
					</a>
					<a href="{{url('/eliminarMateria')}}/{{$ma->id}}" class="btn btn-danger btn-xs">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</a>
				</td>
			</tr>
			@endforeach
		</thead>
	</table>
@stop