@extends('layout')
	@section('title')
		KARDEX
	@endsection
	@section('head')
		<style>
			#table-kardex{
				font-family: "Trebuchet MS, Arial, Helvetica, sans-serif";
				border-collapse: collapse;
				width: 70%;
				margin-left: 15%;

			}

			#table-kardex td, #table-kardex th{
				border: 1px solid #ddd;
				padding: 8px;
			}
			#table-kardex tr:nth-child(even){
				background-color: #f2f2f2;
			}

			#table-kardex th{
				padding-top:12px;
				padding-bottom: 12px;
				background-color: #4CAFF0;
				color: white; 
			}
		</style>
	@endsection
	@section('content')
	
		<table id="table-kardex">
			<thead>
				<tr>
					<th>id</th>
					<th>materia</th>
					<th>descripcion</th>
					<th>calificacion</th>
				</tr>
			</thead>
			<tbody>
				@foreach($grades as $grade)
				<tr>
					<td>{{$grade->id}}</td>
					<td>{{$grade->subject->name}}</td>
					<td>{{$grade->subject->description}}</td>
					<td>{{$grade->grade}}</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	@endsection