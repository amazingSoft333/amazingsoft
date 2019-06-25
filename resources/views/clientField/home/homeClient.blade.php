@extends('clientField.master')
@section('maincontent')
<?php $xx = \App\product_order_model::where(['email' => Auth::user()->email])->get(); ?>
<table class="table table-bordered table-hover table-responsive">
	<thead>
		<tr class="bg-primary">
			<th>Product ID</th>
			<th>Product Name</th>
			<th>Order Id</th>
			@if(empty($x->domain))
			<th>Domain Information</th>
			@elseif($x->domain == 'One')
			<th>Domain Information</th>
			@endif
			@if(empty($x->demo2))
			<th>Hosting Information</th>
			@elseif($x->demo2 == "Three")
			<th>Hosting Information</th>
			@endif
			
			<th>Content Information</th>
			

			<th>Status</th>
		</tr>
	</thead>
	<tbody>
	@foreach($xx as $x)
		<tr>
			<td>{{$x->product_id}}</td>
			<td>{{$x->product_name}}</td>
			<td>{{$x->product_unique_id}}</td>
			@if($x->domain == 'One')
			<td><b>Allready have a Doamin</b></br>
				<b>Site:</b>{{$x->site}}<br>
			<b>Domain Id:</b>{{$x->doamin_lid}}</br>
			<b>Domain Pasword:</b> {{$x->domain_pass}}</td>
			@elseif(empty($x->domain))
			<td><b>Domain Name:</b>{{$x->search}}<br>
				<b>Domain Cost:</b>${{$x->domain_cost}}</td>
			@endif
			
			
			
			@if(empty($x->demo2))
			<td><b>Hosting cost:&nbsp;$</b>{{$x->hosting_cost}}</td>
			@elseif($x->demo2 == "Three")
			<td><b>URL:</b> {{$x->cpanel_link}}
				<b>Cpanel Id:</b>{{$x->cpanel_id}}
				<b>Cpanel Pasword:</b>{{$x->cpanel_pass}}
			</td>
			@endif
			
			
			
			<td>{{$x->content_size}}(${{$x->content}})</td>
			
			@if($x->status == '0')
			<td><span class="label" style="background-color:yellow;">Pending</span></td>
			@else
			<td><span class="label" style="background-color:green;">Confirmed</span></td>
			@endif
			
		</tr>
@endforeach
	</tbody>
</table>
@endsection