<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Sistema de Control Escolar</title>
	<link rel="stylesheet" href="{{asset("css/bootstrap.css")}}">
	<script src="{{asset("js/jquery-3.2.1.js")}}">
	</script>
</head>
<body>
	<nav class="navbar navbar-default">
		  <div class="container-fluid">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      <a class="navbar-brand" href="#">Brand</a>
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li class="active"><a href="#">Link <span class="sr-only">(current)</span></a></li>
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Menu Principal <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="{{url('/registrarAlumno')}}">Registrar Alumno</a></li>
		            <li><a href="{{url('/consultarAlumnos')}}">Consultar Alumnos</a></li>
		            <li class="divider"></li>
		            <li><a href="{{url('/registrarMaestros')}}">Registrar Maestros</a></li>
		            <li><a href="{{url('/consultarMaestros')}}">Consultar Maestros</a></li>
		            <li class="divider"></li>
		            <li><a href="{{url('/registrarMaterias')}}">Registrar Materias</a></li>
		            <li><a href="{{url('/consultarMaterias')}}">Consultar Materias</a></li>
		            <li class="divider"></li>
					<li><a href="{{url('/registrarGrupos')}}">Registrar Grupos</a></li>
		            <li><a href="{{url('/consultarGrupos')}}">Consultar Grupos</a></li>
		            <li class="divider"></li>
					<li><a href="{{url('/registrarAlumnosGrupos')}}">Registrar Alumnos_Grupos</a></li>
		            <li><a href="{{url('/consultarAlumnosGrupos')}}">Consultar Alumnos_Grupos</a></li>
		          </ul>
		        </li>
		      </ul>
		      <form class="navbar-form navbar-left">
		        <div class="form-group">
		          <input type="text" class="form-control" placeholder="Search">
		        </div>
		        <button type="submit" class="btn btn-default">Submit</button>
		      </form>
		      <ul class="nav navbar-nav navbar-right">
		        <li><a href="#">Link</a></li>
		        <li class="dropdown">
		          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Dropdown <span class="caret"></span></a>
		          <ul class="dropdown-menu">
		            <li><a href="#">Action</a></li>
		            <li><a href="#">Another action</a></li>
		            <li><a href="#">Something else here</a></li>
		            <li role="separator" class="divider"></li>
		            <li><a href="#">Separated link</a></li>
		          </ul>
		        </li>
		      </ul>
		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
	</nav>

	<div class="container">
		<div class="row">
			<div class="co-xs-12">@yield('contenido')</div>
		</div>
	</div>

    <footer class="text-center">
    	<hr>2017 Ingenieria Web &copy;
    </footer>

    <script src="{{asset("js/bootstrap.js")}}"></script>
</body>
</html>