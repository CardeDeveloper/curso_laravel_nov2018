@extends('layout')

@section('content')

	{{-- errores --}}
   
	@if(!empty($errors->first()))
		@component('error', ['text' => $errors->first()])
		@endcomponent
		
	@endif
	

		<table>
			{{-- encabezados --}}
			<thead>
				<tr>
					<th>id</th>
					<th>nombre</th>
					<th>apellido</th>
					<th>fecha de nacimiento</th>
					<th>Kardex</th>
					<th>Acciones</th>
				</tr>
			</thead>
			{{-- cuerpo es donde iteran --}}
			<tbody>
			@foreach($students as $student)
				<tr>
					<td>{{$student->id}}</td>
					<td> <a href="">{{$student->name}}</a></td>
					<td>{{$student->lastname}}</td>
					<td>{{$student->birthday}}</td>
					<td><a href="/students/{{$student->id}}/grades">Ver </a> | <a href="/students/{{$student->id}}/grades/pdf"> Descargar </a></td>
					<td>
						<a href="">editar</a>
						<a href="">eliminar</a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
@endsection