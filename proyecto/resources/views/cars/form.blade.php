<div style="display:flex; flex-direction: column;  justify-content: center;  height: 100vh;" class="container">
		<div class="row">
			<div  class="col-md-8 offset-md-2">
				<div class="card">
					<div class="card-header">@yield('title-form')</div>
					<div class="card-body">
						<form>
						  <div class="form-group">
						    <label for="model1">Model</label>
						    <input type="text" class="form-control" id="model1"  placeholder="Model">
						    
						  </div>
						  <div class="form-group">
						    <label for="year1">Year</label>
						    <input type="text" class="form-control" id="year1"  placeholder="2018">
						  </div>
						  <div class="form-group">
						    <label for="brand1">Brand</label>
						    <input type="text" class="form-control" id="brand1"  placeholder="Toyota">
						  </div>
						  <div class="form-group">
						    <label for="serie1">Serie</label>
						    <input type="text" class="form-control" id="serie1"  placeholder="xxx--xxx-xxx">
						  </div>
						  <button type="submit" class="btn btn-primary">@yield('btn-form')</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>