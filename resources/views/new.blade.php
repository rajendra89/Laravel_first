@extends('layouts.app')

@section('content')
	<div class="container">
	<form method="post" action="{{route('save')}}">
		{{ csrf_field() }}
		<h1>Add new Product</h1>

		<div class="form-group">
			<label > Name</label>
			<input type="text" name="name" class="form-control">
		</div>

		<div class="form-group">
			<label > Price</label>
			<input type="text" name="price" class="form-control">
		</div>
		
		<div class="form-group">
		<label > Description</label>
		<textarea name="description" class="form-control" cols="30" rows="10"></textarea>
		</div>

		<div class="">
			<input type="submit" name="save" value="save">
			
		</div>

	</form>
	</div>

@endsection