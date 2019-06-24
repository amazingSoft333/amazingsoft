@extends('clientField.master')
@section('maincontent')
<?php $x = \App\product_order_model::where(['email' => Auth::user()->email])->get(); ?>
<table class="table table-bordered table-hover">
	<thead>
		<tr class="bg-primary">
			<th>ID</th>
			<th>Order No</th>
			<th>Order Value</th>
			<th>Publication Status</th>
			<th>Action</th>

		</tr>
	</thead>
	<tbody>

		<tr>
			<th scope="row"></th>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>

	</tbody>
</table>
@endsection