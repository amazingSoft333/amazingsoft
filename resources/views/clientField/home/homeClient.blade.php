@extends('clientField.master')
@section('maincontent')
<?php $x = \App\product_order_model::where(['email' => Auth::user()->email])->get(); ?>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		<tr class="bg-primary">
			<th>ID</th>
			<th>Product_unique Id</th>
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
			<th>hosting_cost</th>
			@endif
			
			<th>content_size</th>
			<th>content</th>
			
			<th>total</th>
			<th>method</th>
		</tr>
	</thead>
	<tbody>
	@foreach($x as $x)
		<tr>
			<td>{{$x->id}}</td>
			<td>{{$x->product_unique_id}}</td>
			<td>{{$x->email}}</td>
			@if(!empty($x->site))
			<th>Allready have a Doamin</th>
			<td>Site:{{$x->site}}<br>
			Domain Id:{{$x->doamin_lid}}</br>
			Domain Pasword: {{$x->domain_pass}}</td>
			@else
			<td>{{$x->search}}</td>
			<td>{{$x->domain_cost}}</td>
			@endif
			
			@if(!empty($x->demo2))
			<td>URL: {{$x->cpanel_link}}
				Cpanel Id:{{$x->cpanel_id}}
				Cpanel Pasword:{{$x->cpanel_pass}}
			</td>
			@else
			<th>All ready have a hosting</th>
			<td>{{$x->hosting_cost}}</td>
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