@extends('products.layout')

@section('content')
	<div class="row">
		<div class="col-lg-10 margin-tb">
			<div class="pull-left">
				<h2>Add a Product</h2>
			</div>
		</div>
		<div class="col-lg-2">
			<div class="pull-right">
				<a class="btn btn-success" href="{{ route('products.create') }}">Add a Product</a>
			</div>
		</div>
	</div>

	@if($message=Session::get('success'))
	<div class="alert alert-success">
		{{$message}}
	</div>
	@endif

	<table class="table table-bordered">
		<tr>
			<th>ID</th>
			<th>Name</th>
			<th>Price</th>
			<th>Description</th>
			<th>Action</th>
		</tr>
		@foreach($products as $product)
		<tr>
			<td>{{$product->id}}</td>
			<td>{{$product->name}}</td>
			<td>{{$product->price}}</td>
			<td>{{$product->detail}}</td>
			<td>
				<form action="{{ route('products.destroy', $product->id) }}" method="POST">
					<a class="btn btn-success" href="{{ route('products.show',$product->id) }}">Show</a>
					<a class="btn btn-primary" href="{{ route('products.edit',$product->id) }}">Edit</a>
					@csrf
					@method('DELETE')
					<button class="btn btn-danger" type="submit">Delete</button>
				</form>
			</td>
		</tr>
		@endforeach
	</table>
	{{$products->links()}}
@endsection
