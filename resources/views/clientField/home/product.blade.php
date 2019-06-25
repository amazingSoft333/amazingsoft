@extends('clientField.master')
@section('maincontent')
<?php $xx = \App\product_order_model::where(['email' => Auth::user()->email])->get(); ?>
<table class="table table-bordered table-hover table-responsive text-center">
	<thead>
		<tr class="bg-primary">
			<th width="10%">Product ID</th>
			<th width="10%">Product Name</th>
			<th width="10%">Order Id</th>
			<th width="70%">Manage</th>
		</tr>
	</thead>
	<tbody>
	@foreach($xx as $x)
		<tr>
			<td>{{$x->product_id}}</td>
			<td>{{$x->product_name}}</td>
			<td>{{$x->product_unique_id}}</td>
			<td><a class="btn btn-primary" data-toggle="collapse" href="#collapseExample{{$x->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
					Click Details
				</a>
			<div class="collapse" id="collapseExample{{$x->id}}">
			  <div class="card card-body">
					{!!$x->message!!}
			  </div>
			</div>
			</td>
			
		</tr>
	@endforeach
	</tbody>
</table>
@endsection