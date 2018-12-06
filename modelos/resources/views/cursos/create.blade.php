@extends('layout')
	@section('content')
		<form action="/cursos" method="POST">
			{{csrf_field()}}
			<input type="text" name="nombre" placeholder="Nombre">
			<input type="text" name="descripcion" placeholder="Descripcion">
			<input type="submit">
		</form>
	@endsection