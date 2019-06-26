@extends('clientField.master')
@section('maincontent')
<?php $xx = \App\product_order_model::where(['email' => Auth::user()->email])->get(); ?>
<div class="container">
	<div class="row">
@foreach($xx as $x)
		<div class="col-lg-12">
			@if($x->status == '1')
			<div class="alert alert-success" role="alert">
			  Your Order is approved.<a class="" data-toggle="collapse" href="#collapseExample{{$x->id}}" role="button" aria-expanded="false" aria-controls="collapseExample">
								Click Details
								</a>
									<div class="collapse" id="collapseExample{{$x->id}}">
										<div class="card card-body">
											{!!$x->message!!}
										</div>
									</div>
			  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			  </button>
			</div>
			@else
			<div class="alert alert-danger" role="alert">
			  Your Order is submit....Wait for admin approval<br>
			  <b>Order Id:</b>&nbsp; &nbsp; &nbsp; {{$x->product_unique_id}}
			    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
					<span aria-hidden="true">&times;</span>
				</button>
			</div>
			@endif
		</diV>
@endforeach
	</div>
</diV>











@endsection