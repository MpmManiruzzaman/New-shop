@extends('frontend.master')

@section('content')

	<div class="banner1">
		<div class="container">
			<h3><a href="{{ url('/') }}">Home</a> / <span>Registered</span></h3>
		</div>
	</div>
	<!--banner-->

	<!--content-->
	<div class="container" style="height: auto;">
		<div class="card">
			<div class="card-body">
				@if (session()->has('success'))
                	<div class="alert alert-success">{{ session()->get('success') }}</div>
            	@endif
				@if (session()->has('error'))
                	<div class="alert alert-danger">{{ session()->get('error') }}</div>
            	@endif
				<div class="col-lg-12 checkout">
					<div class="row">
						<div class="col-md-6">
							<h3>Login</h3>
							<form action="{{ url('/vendor/login') }}" method="post">
								@csrf
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control" placeholder="Enter email"/>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control" placeholder="Enter password"/>
								</div>
								<button type="submit" name="btn" class="btn btn-primary">Login</button>
							</form>
						</div>

						<div class="col-md-6">
							<h3>Register</h3>
							<form action="{{ url('/vendor/registration') }}" method="post" enctype="multipart/form-data">
								@csrf
								<div class="form-group">
									<label>Name</label>
									<input type="name" name="name" class="form-control" placeholder="Enter name"/>
								</div>
								<div class="form-group">
									<label>Email</label>
									<input type="email" name="email" class="form-control" placeholder="Enter email"/>
								</div>
								<div class="form-group">
									<label>Phone</label>
									<input type="tel" name="phone" class="form-control" placeholder="Enter phone number"/>
								</div>
								<div class="form-group">
									<label>Address</label>
									<textarea class="form-control" name="address" rows="5" placeholder="Enter Address"></textarea>
								</div>
								<div class="form-group">
									<label>Password</label>
									<input type="password" name="password" class="form-control" placeholder="Enter password"/>
								</div>
								<div class="form-group">
									<label>Logo/Avatar</label>
									<input type="file" name="logo" class="form-control"/>
								</div>
								<button type="submit" name="btn" class="btn btn-primary">Register</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection