@extends('frontend.master')
@section('maincontent')
<div class="section-block">
<div class="container">
<div class="row">


		<div class="col-md-4 col-sm-4 col-4">
		</div>
		<div class="col-md-4 col-sm-4 col-4">
		
		<form class="form-group" method="POST" id="payment-form"  action="{{route('payment_storeee')}}">
		  {{ csrf_field() }}
		  					<input type="hidden" name="email" value="{{$email}}">	
							<input type="hidden" name="product_id" value="{{request()->product_id}}">
							<input type="hidden" name="product_unique_id" value="{{request()->product_unique_id}}">
							<input type="hidden" name="domain" value="{{request()->site}}">
							<input type="hidden" name="site" value="{{request()->site}}">
							<input type="hidden" name="doamin_lid" value="{{request()->doamin_lid}}">
							<input type="hidden" name="domain_pass" value="{{request()->domain_pass}}">
							<input type="hidden" name="search" value="{{request()->search}}">
							<input type="hidden" name="domain_cost" value="{{request()->domain_cost}}">
							<input type="hidden" name="demo2" value="{{request()->demo2}}">
							<input type="hidden" name="cpanel_link" value="{{request()->cpanel_link}}">
							<input type="hidden" name="cpanel_id" value="{{request()->cpanel_id}}">
							<input type="hidden" name="cpanel_pass" value="{{request()->cpanel_pass}}">
							<input type="hidden" name="hosting_cost" value="{{request()->hosting_cost}}">
							<input type="hidden" name="content_size" value="Content uplode"/>
							<input type="hidden" name="content" value="{{request()->content}}">    
							<input type="hidden" name="method" value="{{request()->method}}">    
		  <input class="from-group" name="amount" value="{{$total}}" type="hidden"></p>      
		  <center>
		  
				<img src="" class="img-fluid" alt="Responsive image"><br>
				<button class="btn btn-lg btn-primary">Confirm Payment</button></p>
				
		  </center>
		</form>

		</div>
		<div class="col-md-4 col-sm-4 col-4">
		</div>
	
	
	
	
	
	
</div>
</div>
</div>
@endsection


