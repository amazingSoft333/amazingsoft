@extends('clientField.master')
@section('maincontent')
<?php $abb= \App\product_order_model::where(['email' => Auth::user()->email])->get();?>
<table class="table table-bordered table-hover">
	<thead>
		<tr class="bg-default table-active">
			<th width="5%">ID</th>
			<th width="10%">Order Id</th>
			<th width="15%">Product Name</th>
			<th width="70%">Amount Total</th>
		</tr>
	</thead>
	<tbody>
@foreach($abb as $ab)
		<tr>
			<td>{{$ab->id}}</td>
			<td>{{$ab->product_unique_id}}</td>
			<td>{{$ab->product_name}}</td>
			<td>$ {{$ab->total}} <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample{{$ab->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
							  Payment Detail
							   </a>
							   	<div class="collapse" id="collapseExample{{$ab->id}}">
								  <div class="card card-body">
											<table class="table table-hover table-border table-responsive">
											  <thead>
												<tr>
												  <th scope="col">Product Name</th>
												  <th scope="col">Quantity</th>
												  <th scope="col">Price</th>
												</tr>
											  </thead>
											  <tbody>
												<tr>
												  <th scope="row">{{$ab->product_name}}</th>
												  <td>1</td>
												  <td>${{$ab->product_price}}</td>
												</tr>										  <tbody>
												<tr>
												  <th scope="row">Domain</th>
												  @if($ab->domain == 'One')
												  <td>Allready have a Doamin</td>
												  <td></td>
												  @elseif(empty($ab->domain))
												  <td>{{$ab->search}}</td>
												  <td>${{$ab->domain_cost}}</td>
												  @endif

												</tr>
												<tr>
												  <th scope="row">Hosting</th>
												  @if(empty($ab->demo2))
												  <td>{{\App\Hostingprice::where(['price'  => $ab->hosting_cost])->first()->hosting}}GB</td>
												  <td>{{$ab->hosting_cost}}</td>
												  @elseif($ab->demo2 == "Three")
												  <td>Allready Have a Hosting</td>
												  <td></td>
												  @endif
												</tr>
												
												<tr>
												  <th scope="row">Content</th>
												  @if(empty($ab->content))
												  <td>No Need Any Content Uplode</td>
												  <td></td>
												  @else
												  <td>{{$ab->content_size}}</td>
												  <td>${{$ab->content}}</td>
												  @endif
												</tr>
												<tr>
												  <th scope="row"></th>
												  <td>Total</td>
												  <td>${{$ab->total}}</td>
												</tr>
											  </tbody>
											</table>
								   </div>
								</div>
			</td>	
										
											</tr>

									</div>
		       @endforeach

	</tbody>
</table>
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})
</script>
@endsection