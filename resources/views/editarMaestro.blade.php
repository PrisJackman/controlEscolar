@extends('master')

@section('contenido')
<form action="{{url('/actualizarMaestro')}}/{{$maestro->id}}" method="POST">
	<input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text"  class="form-control" name="nombre" required
		value="{{$maestro->nombre}}">
	</div>
	<div class="form-group">
		<label for="control">Número de Empleado:</label>
		<input type="text"  class="form-control" name="control" required value="{{$maestro->no_empleado}}">
	</div>
	<div class="form-group">
		<label for="edad">Edad:</label>
		<input type="number"  class="form-control" name="edad" required
		value="{{$maestro->edad}}">
	</div>
	<div class="form-group">
		<label for="sexo">Sexo:</label>
		<select name="sexo" class="form-control">
		 @if($maestro->sexo==0)
		 	<option value="0" selected="">Femenino</option>
			<option value="1">Masculino</option>
		@else
			<option value="0">Femenino</option>
			<option value="1" selected="">Masculino</option>
		@endif
		</select>
	</div>
	<div>
		<button type="submit" type="submit" class="btn btn-primary">Registrar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>

</form>
@stop