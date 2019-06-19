@extends('frontend.master')
@section('maincontent')
<div class="section-block">
<div class="container">
<div class="row serv-section-2">
		<div class="serv-section-2-icon"> <i class="icon-credit-card2"></i> 
		</div>


	<div class="col-md-6 col-sm-6 col-6">
	   <table class="table table-hover table-border">
		  <thead>
			<tr>
			  <th scope="col">Product Name</th>
			  <th scope="col">Quantity</th>
			  <th scope="col">Price</th>
			</tr>
		  </thead>
		  <tbody>
			<tr>
			  <th scope="row">Web/Software</th>
			  <td>1</td>
			  <td>33</td>
			</tr>
			<tr>
			  <th scope="row">Domain</th>
			  <td>1</td>
			  <td>33</td>
			</tr>
			<tr>
			  <th scope="row">Hosting</th>
			  <td>1 GB</td>
			  <td>333</td>
			</tr>
			<tr>
			  <th scope="row">Content</th>
			  <td>1 pages</td>
			  <td>33333</td>
			</tr>
			<tr>
			  <th scope="row"></th>
			  <th>Total</th>
			  <td>333</td>
			</tr>
		  </tbody>
		</table>
	</div>
	
	
	
	<div class="col-md-6 col-sm-6 col-6">
	<div class="row">
	<div class="col-lg-12">
		<h6>Pay Method By</h6>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			<label class="form-check-label" for="inlineRadio1">Card</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
		  <label class="form-check-label" for="inlineRadio2">Paypal</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1">
			<label class="form-check-label" for="inlineRadio1">BD</label>
		</div>
	</div>
		</br>
		</br>
		</br>
	<br>
	<div class="col-lg-12">
		<button class="btn btn-md btn-primary pull-right">Payment</button>
	</div>
	</div>
	</div>
	
	
	
</div>
</div>
</div>
@endsection


