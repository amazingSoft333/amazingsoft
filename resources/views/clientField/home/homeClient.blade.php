@extends('clientField.master')
@section('maincontent')
<?php $x = \App\product_order_model::where(['email' => Auth::user()->email])->get(); ?>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		<tr class="bg-primary">
			<th>Sl. No.</th>
			<th>Order Id</th>
			<th>Product ID</th>
			<th>Email</th>
			@if(!empty($x->site))
			<th>Domain</th>
			<th>Domain Details</th>
			@else
			<th>Domain</th>
			<th>Domain Details</th>
			@endif
			@if(!empty($x->demo2))
			<th>Hosting Information</th>
			@else
			<th>Hosting Information</th>
			@endif
			
			<th>Content size</th>
			<th>content</th>
			
			<th>Total</th>
			<th>method</th>
		</tr>
	</thead>
	<tbody>
	@foreach($x as $x)
		<tr>
			<td>{{$x->id}}</td>
			<td>{{$x->product_unique_id}}</td>
			<td>{{$x->product_id}}</td>
			<td>{{$x->email}}</td>
			@if(!empty($x->site))
			<th>Allready have a Doamin</th>
			<td><b>Site:</b>{{$x->site}}<br>
			<b>Domain Id:</b>{{$x->doamin_lid}}</br>
			<b>Domain Pasword:</b> {{$x->domain_pass}}</td>
			@else
			<td><b>Required Domain:</b>{{$x->search}}</td>
			<td>{{$x->domain_cost}}</td>
			@endif
			
			@if(!empty($x->demo2))
			<td><b>URL:</b> {{$x->cpanel_link}}
				<b>Cpanel Id:</b>{{$x->cpanel_id}}
				<b>Cpanel Pasword:</b>{{$x->cpanel_pass}}
			</td>
			@else
			<td><b>Hosting cost:&nbsp;$</b>{{$x->hosting_cost}}</td>
			@endif
			
			<td>{{$x->content_size}}</td>
			<td>{{$x->content}}</td>
			
			<td>{{$x->total}}</td>
			@if($x->method == 'One')
			<td>{{$x->method }}</td>
			<td>Mobile:{{$x->mobile}}</td>
			<td>Transaction:{{$x->transaction}}</td>
			@else
			<td>Method:{{$x->method }}
			</td>
			@endif
			
		</tr>
@endforeach
	</tbody>
</table>
@endsection