<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Ejmplo de Rutas en Laravel 5.2</title>
	<link rel="stylesheet" href="css/bootstrap.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-xs-12">
				<h1>Proyecto en Laravel 5.2</h1>
				<hr>
			</div>
			<div class="col-xs-12">
				<ul class="nav nav-pills">
				  <li role="presentation" class="active"><a href="{{url('/home')}}">Home</a></li>
				  <li role="presentation"><a href="{{ url('/lista') }}">Alumnos</a></li>
				  <li role="presentation"><a href="{{url('/registro')}}">Registro</a></li>
				</ul>
			</div>
			@yield('contacto')
			@yield('home')
			@yield('registro')
			@yield('muestraRegistros');
		</div>
	</div>
</body>
</html>