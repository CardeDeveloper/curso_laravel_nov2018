
@extends('layouts.main')
	@section('title')
		Login 
	@endsection
	@section('content')

	{{-- comentario en blade--}}
	<div style="display:flex; flex-direction: column;  justify-content: center;  height: 100vh;" class="container">
		<div class="row">
			<div  class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">LOGIN</div>
					<div class="card-body">
						<form>
						  <div class="form-group">
						    <label for="email1">Email address</label>
						    <input type="email" class="form-control" id="email1" aria-describedby="emailHelp" placeholder="Enter email">
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						  </div>
						  <div class="form-group">
						    <label for="password1">Password</label>
						    <input type="password" class="form-control" id="password1" placeholder="Password">
						  </div>
						  <div class="form-group form-check">
						    <input type="checkbox" class="form-check-input" id="check1">
						    <label class="form-check-label" for="check1">Remember me</label>
						  </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection