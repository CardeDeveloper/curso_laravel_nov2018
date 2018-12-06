@extends('layout')

@section('content')
		<table>
			{{-- encabezados --}}
			<thead>
				<tr>
					<th>id</th>
					<th>nombre</th>
					<th>descripcion</th>
					<th>acciones</th>
				</tr>
			</thead>
			{{-- cuerpo es donde iteran --}}
			<tbody>
			@foreach($cursos as $curso)
				<tr>
					<td>{{$curso['id']}}</td>
					<td> <a href="">{{$curso['nombre']}}</a></td>
					<td>{{$curso['descripcion']}}</td>
					<td>
						<a href="">editar</a>
						<a href="">eliminar</a>
					</td>
				</tr>
			@endforeach
			</tbody>
		</table>
@endsection