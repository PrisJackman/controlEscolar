<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Reporte de Alumnos</title>
	<style type="text/css">
	  body{
	  	font-family: 'Heveltica Neue';
	  	font-weight: 200;
	  }
	</style>
</head>
<body>
	<h1>Lista de alumnos</h1>
	<hr class="lista">
	@foreach ($alumnos as $a)
		{{$a->nombre}} <br>
	@endforeach
</body>
</html>