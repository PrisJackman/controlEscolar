@extends('master')

@section('contenido')
<form action="{{url('/actualizarMaterias')}}/{{$materia->id}}" method="POST">
<input id="token" type="hidden" name="_token" value="{{csrf_token()}}">
	<div class="form-group">
		<label for="nombre">Nombre:</label>
		<input type="text"  class="form-control" name="nombre" required value="{{$materia->nombre}}">
	</div>
	<div class="form-group">
		<label for="clave">Clave:</label>
		<input type="text"  class="form-control" name="clave" required  value="{{$materia->clave}}">
	</div>
	<div class="form-group">
		<label for="creditos">Creditos:</label>
		<input type="number"  class="form-control" name="creditos" required value="{{$materia->creditos}}">
	</div>	
	<div>
		<button type="submit" class="btn btn-primary">Editar</button>
		<a href="{{url('/')}}" class="btn btn-danger">Cancelar</a>
	</div>

</form>
@stop