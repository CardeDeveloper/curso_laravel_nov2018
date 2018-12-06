@extends('layout')

	@section('content')
	<form action="/cursos" method="POST">
		{{csrf_field()}}
		<input name="texto" type="text">
		<input type="submit">

	</form>
	@endsection