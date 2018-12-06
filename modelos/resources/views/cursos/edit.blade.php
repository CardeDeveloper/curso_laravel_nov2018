@extends('layout')
	@section('content')
		<form action="/cursos/{{$curso->id}}" method="POST">
			{{csrf_field()}}
			{{method_field('PUT')}}
			<input value="{{$curso->nombre}}" type="text" name="nombre" placeholder="Nombre">
			<input value="{{$curso->descripcion}}" type="text" name="descripcion" placeholder="Descripcion">
			<input type="submit">
		</form>
	@endsection