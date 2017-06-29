@extends('master')

@section('contenido')
<form action="{{url('/guardarGrupo')}}" method="POST">
	<input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="salon">Salon:</label>
		<input type="text"  class="form-control" name="salon" required>
	</div>
	<div class="form-group">
		<label for="horario">Horario:</label>
		<input type="text"  class="form-control" name="horario" required>
	</div>
	<div class="form-group">
		<label for="maestro">Maestro:</label>
		<select name="maestro" class="form-control">
			@foreach($maestro as $m)
				<option value="{{$m->id}}">{{$m->nombre}}</option>
			@endforeach
		</select>
	</div>
	<div class="form-group">
		<label for="materia">Materia:</label>
		<select name="materia" class="form-control">
			@foreach($materia as $mat)
				<option value="{{$mat->id}}">{{$mat->nombre}}</option>
			@endforeach
		</select>
	</div>
	<div>
		<button type="submit" type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>

</form>
@stop