@extends('ejemplo')

@section('page_heading','Registro de Alumnos UAS')

@section('registro')
	<div class="col-xs-12 well">
		<br>
		<form action="registra" method="post">
			<div class="form-group">
				<label for="">Nombre:</label>
				<input name="nombre" type="text" class="form-control" placeholder="Nombre">
			</div>
			<div class="form-group">
				<label for="">Edad:</label>
				<input type="text" name="edad" class="form-control" placeholder="Edad">
			</div>
			<div class="form-group">
				<label for="">Sexo:</label><br>
				<input type="radio" name="sexo" value="Masculino" checked> Masculino <br>
				<input type="radio" name="sexo" value="Femenino" > Femenino
			</div>
			<div class="form-group">
				<label for="">Carrera:</label>
				<input type="text" name="carrera" class="form-control" placeholder="Carrera">
			</div>
			<button type="submit" class="btn btn-success">Registrar</button>
		</form>
	</div>
@stop