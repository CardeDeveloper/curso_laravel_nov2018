@extends('layouts.main')
	@section('title')
		Prueba 
	@endsection
	@section('content')
	@foreach($parametros as $parametro)

		@if($parametro == 'oscar')
			<p>{{$parametro}}</p>
		@endif
		

	@endforeach
	@endsection