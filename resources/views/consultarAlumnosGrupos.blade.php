@extends('master')

@section('contenido')
	<table class="table table-striped">
		<thead>
			<tr>
				<th>ID</th>
				<th>Grupo</th>
				<th>Alumno</th>
				<th>Opciones</th>
			</tr>
			@foreach($alumno_grupo as $ag)
			<tr>
				<td>{{$ag->id}}</td>
				<td>{{$ag->salon_gpo}}</td>
				<td>{{$ag->nom_alumno}}</td>
				<td>
					<a href="{{url('/editarAlumnoGrupo')}}/{{$ag->id}}" class="btn  btn-primary btn-xs">
						 <span class="glyphicon  glyphicon-pencil" aria-hidden="true"></span>
					</a>
					<a href="{{url('/eliminarAlumnoGrupo')}}/{{$ag->id}}" class="btn btn-danger btn-xs">
						<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
					</a>
				</td>
			</tr>
			@endforeach
		</thead>
	</table>
@stop