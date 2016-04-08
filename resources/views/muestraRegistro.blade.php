@extends('ejemplo')

@section('muestraRegistros')
	<div class="col-xs-12">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>Edad</th>
					<th>Sexo</th>
					<th>Carrera</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($alumnos as $a)
				<tr>
					<td>{{ $a->id }}</td>
					<td>{{ $a->nombre }}</td>
					<td>{{ $a->edad }}</td>
					<td>{{ $a->sexo }}</td>
					<td>{{ $a->carrera }}</td>
					<td><a href="{{url ('eliminar')}}/{{$a->id}}"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
@stop