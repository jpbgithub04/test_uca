<!DOCTYPE html>
<html lang="es">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<script type="text/javascript" src="/sistema_uca/public/js/jquery-3.5.1.min.js"></script>

		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

		<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css" />
    	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

		<link rel="stylesheet" type="text/css" href="/sistema_uca/public/css/estilos.css">
		<script type="text/javascript" src="/sistema_uca/public/js/funciones.js"></script>
		<title>Sistema UCA</title>
	</head>
	<body>
		<div class="container">
			<header class="header">
				<h1 class="text-center">Sistema UCA</h1>
			</header>
			<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
			  <a class="navbar-brand" href="#">UCA</a>
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
			    <span class="navbar-toggler-icon"></span>
			  </button>
			  <div class="collapse navbar-collapse" id="navbarNavDropdown">
			    <ul class="navbar-nav">
			      <li class="nav-item active">
			        <a class="nav-link" href="{{ url('/') }}">Inicio</a>
			      </li>			      			      
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          Inscripcion Cursos
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="{{ url('/inscripcion_curso') }}">Carga</a>
			          <a class="dropdown-item" href="{{ url('/listado_icurso') }}">Listado</a>		     
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          ABM Alumnos
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="{{ url('/carga_alumno') }}">Carga</a>
			          <a class="dropdown-item" href="{{ url('/listadoa') }}">Listado</a>		          
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          ABM Profesores
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="{{ url('/carga_profesor') }}">Carga</a>
			          <a class="dropdown-item" href="{{ url('/listadop') }}">Listado</a>			          
			        </div>
			      </li>
			      <li class="nav-item dropdown">
			        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          ABM Cursos
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			          <a class="dropdown-item" href="{{ url('/carga_curso') }}">Carga</a>
			          <a class="dropdown-item" href="{{ url('/listadoc') }}">Listado</a>			          
			        </div>
			      </li>
			    </ul>
			  </div>
			</nav>
			@yield('content')
			<footer class="footer">
				<h3>Universidad Catolica Argentina</h3>
				<h3>2020</h3>
			</footer>
		</div>
	</body>
</html>