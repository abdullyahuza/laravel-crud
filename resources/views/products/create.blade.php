{{-- extend the layout --}}
@extends('products.layout')

{{-- specify the section this template will go into --}}
@section('content')

{{-- This is specific to the create view --}}
	<div class="row">
		<div class="col-lg-10 margin-tb">
			<div class="pull-left">
				<h2>Add a Product</h2>
			</div>
		</div>
		<div class="col-lg-2">
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
			</div>
		</div>
	</div>
	
	@if($errors->any())
	<div class="alert alert-danger">
		<ul>
			@foreach($errors->all() as $error)
				<li>{{$error}}</li>
			@endforeach
		</ul>
	</div>
	@endif

	<form method="POST" action="{{ route('products.store') }}">
		@csrf

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Name:</strong>
					<input type="text" name="name" class="form-control" placeholder="Product Name">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Price:</strong>
					<input type="number" name="price" class="form-control" placeholder="Price">
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12">
				<div class="form-group">
					<strong>Details:</strong>
					<textarea class="form-control" name="detail" placeholder="Detail" style="height: 100px;"></textarea>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 text-center mt-5">
				<button type="submit" class="btn btn-primary">Submit</button>
			</div>
		</div>

	</form>

@endsection	{{-- End of the contend --}}
