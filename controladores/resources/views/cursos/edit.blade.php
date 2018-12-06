@extends('layout')
	@section('content')
		<form action="{{'/cursos/'.$id}}" method="POST">
			{{csrf_field()}}
			{{method_field('PUT')}}

			<input name="texto" type="text">
			<input type="submit">
		</form>
	@endsection