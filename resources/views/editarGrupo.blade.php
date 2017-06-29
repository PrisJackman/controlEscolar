@extends('master')

@section('contenido')
<form action="{{url('/actualizarGrupos')}}/{{$grupo->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="salon">Salon:</label>
		<input type="text"  class="form-control" name="salon" required value="{{$grupo->salon}}">
	</div>
	<div class="form-group">
		<label for="horario">Horario:</label>
		<input type="text"  class="form-control" name="horario" required  value="{{$grupo->horario}}">
	</div>
	<div class="form-group">
		<label for="maestro">Maestro:</label>
		<select name="maestro" class="form-control">
			<option value="{{$grupo->maestro_id}}">{{$grupo->nom_maestro}}</option>
			@foreach($maestro as $m)
				<option value="{{$m->id}}">{{$m->nombre}}</option>
			@endforeach
		</select>
	</div>

	<div class="form-group">
		<label for="materia">Materia:</label>
		<select name="materia" class="form-control">
			<option value="{{$grupo->materia_id}}">{{$grupo->nom_materia}}</option>
			@foreach($materia as $mat)
				<option value="{{$mat->id}}">{{$mat->nombre}}</option>
			@endforeach
		</select>
	</div>
	<div>
		<button type="submit" class="btn btn-primary">Editar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>

</form>
@stop