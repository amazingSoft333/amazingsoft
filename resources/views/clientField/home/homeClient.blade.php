@extends('clientField.master')
@section('maincontent')
<?php $x = \App\product_order_model::where(['email' => Auth::user()->email])->get(); ?>
<table class="table table-bordered table-hover">
	<thead>
		<tr class="bg-primary">
			<th>ID</th>
			<th>Product_unique Id</th>
			<th>Email</th>
			

		</tr>
	</thead>
	<tbody>
	@foreach($x as $x)
		<tr>

			<th scope="row"></th>
			<td>{{$x->id}}</td>
			<td>{{$x->product_unique_id}}</td>
			<td>{{$x->email}}</td>
		</tr>
@endforeach
	</tbody>
</table>
@endsection