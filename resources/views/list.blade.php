@extends('layouts.app')
@section('content')
	<div class="container">

	<h1>laravel list</h1>
	<ul>
		<div class="container-fluid">

		@foreach($products as $product)

		<li>
			<h3>{{$product->name}} </h3>
			<span>Price:<small>${{$product->price}}</small></span>
			<p>{{$product->description}}</p>

			@if( !empty('$product->image'))
				<img src="{{$product->image}}" alt="">
			@endif
		</li>

		@endforeach

	</ul>
	</div>
		<div class="text-center">
		{{ $products->links() }}
		</div>

	</div>

@endsection