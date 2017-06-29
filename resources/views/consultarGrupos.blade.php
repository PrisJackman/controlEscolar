@extends('master')

@section('contenido')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Salon</th>
				<th>Horario</th>
				<th>Maestro</th>
				<th>Materia</th>
				<th>Opciones</th>
			</tr>
			@foreach($grupo as $g)
			<tr>
				<td>{{$g->id}}</td>
				<td>{{$g->salon}}</td>
				<td>{{$g->horario}}</td>
				<td>{{$g->nom_maestro}}</td>
				<td>{{$g->nom_materia}}</td>
				<td>
					<a href="{{url('/editarGrupo')}}/{{$g->id}}" class="btn  btn-primary btn-xs">
						 <span class="glyphicon  glyphicon-pencil" aria-hidden="true"></span>
					</a>
					<a href="{{url('/eliminarGrupo')}}/{{$g->id}}" class="btn btn-danger btn-xs">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</a>
				</td>
			</tr>
			@endforeach
		</thead>
	</table>
@stop