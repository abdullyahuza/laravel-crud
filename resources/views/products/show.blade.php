@extends('products.layout')

@section('content')
	<div class="row">
		<div class="col-lg-10 margin-tb">
			<div class="pull-left">
				<h2>{{$product->name}} - Details</h2>
			</div>
		</div>
		<div class="col-lg-2">
			<div class="pull-right">
				<a class="btn btn-primary" href="{{ route('products.index') }}">Back</a>
			</div>
		</div>
	</div>

	<div class="row">
		<div class="col-xs-3 col-sm-3 col-md-3">
			<div class="form-group">
				<strong>Name: {{$product->name}}</strong>
			</div>
		</div>

		<div class="col-xs-3 col-sm-3 col-md-3">
			<div class="form-group">
				<strong>Price: {{$product->price}}</strong>
			</div>
		</div>

		<div class="col-xs-6 col-sm-6 col-md-6">
			<div class="form-group">
				<strong>Details: {{$product->detail}}</strong>
			</div>
		</div>
	</div>

@endsection
