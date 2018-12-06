@extends('layouts.main')
	@section('title')
		Login 
	@endsection
	@section('content')
	@include('layouts.navbar')
	<div style="display:flex; flex-direction: column;  justify-content: center;  height: 100vh;" class="container">
		<div class="row">
			<div  class="col-md-9 offset-md-1">
				<div class="table-responsive">
  					<table class="table table-hover table-bordered table-dark">
    					<thead>
						    <tr>
						      <th scope="col">#</th>
						      <th scope="col">Brand</th>
						      <th scope="col">Model</th>
						      <th scope="col">Year</th>
						      <th scope="col">Serie</th>
						      <th scope="col">** Actions **</th>
						    </tr>
						 </thead>
						 <tbody>
						    <tr>
						      <th scope="row">1</th>
						      <td>Toyota</td>
						      <td>Prius</td>
						      <td>2018</td>
						      <td>dfdaf-df-daf-</td>
						      <td>
						      	<button class="btn btn-warning">Edit</button>
						      	<button class="btn btn-danger">Delete</button>
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">2</th>
						     <td>Tesla</td>
						      <td>S</td>
						      <td>2018</td>
						      <td>dfdsdf-df-daf-</td>
						      <td>
						      	<button class="btn btn-warning">Edit</button>
						      	<button class="btn btn-danger">Delete</button>
						      </td>
						    </tr>
						    <tr>
						      <th scope="row">3</th>
						      <td>Suzuki</td>
						      <td>Swift</td>
						      <td>2018</td>
						      <td>dfewraf-df-daf-</td>
						      <td>
						      	<button class="btn btn-warning">Edit</button>
						      	<button class="btn btn-danger">Delete</button>
						      </td>
						    </tr>
						 </tbody>
  					</table>
				</div>
			</div>
		</div>
	</div>
	@endsection

	