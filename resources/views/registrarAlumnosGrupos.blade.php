@extends('master')

@section('contenido')
	<form action="{{url('/guardarAlumnoGrupo')}}" method="POST">
	<input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
	
	<div class="form-group">
		<label for="grupo">Grupo:</label>
		<select name="grupo" class="form-control">
			@foreach($grupo as $g)
				<option value="{{$g->id}}">{{$g->salon}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="alumno">Alumno:</label>
		<select name="alumno" class="form-control">
			@foreach($alumno as $a)
				<option value="{{$a->id}}">{{$a->nombre}}</option>
			@endforeach
		</select>
	</div>
	<div>
		<button type="submit" type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>

</form>
@stop