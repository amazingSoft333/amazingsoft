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
			  <th scope="row">{{\App\Product::where(['id' => request()->product_id])->first()->name}}</th>
			  <td>1</td>
			  <td>${{$x = \App\Product::where(['id' => request()->product_id])->first()->price}}</td>
			</tr>
			<tr>
			  <th scope="row">Domain</th>
			  @if(request()->demo1 == 'One')
			  <td>
							<input type="hidden" name="site" value="{{request()->site}}">
							<input type="hidden" name="doamin_lid" value="{{request()->doamin_lid}}">
							<input type="hidden" name="domain_pass" value="{{request()->domain_pass}}">
							Already have a doamin
			  </td>
			  <td></td>
			  @else
			   <td>
							<input type="hidden" name="cpanel_link" value="{{request()->cpanel_link}}">
							<input type="hidden" name="cpanel_id" value="{{request()->cpanel_id}}">
							<input type="hidden" name="cpanel_pass" value="{{request()->cpanel_pass}}">
							<a href="{{request()->search}}">{{request()->search}}</a>
			   </td>
			  <td>${{request()->domain_cost}}</td>  
			  @endif
			</tr>
			<tr>
			  <th scope="row">Hosting</th>
			  @if(request()->demo2 == 'Three')
			  <td>Already Have a Hosting
				  <input type="hidden" name="cpanel_link" value="{{request()->cpanel_link}}">
				  <input type="hidden" name="cpanel_id" value="{{request()->cpanel_id}}">
				  <input type="hidden" name="cpanel_pass" value="{{request()->cpanel_pass}}"></td>
			  <td></td>
			  @else
			  <td>
				  Need a Hosting
			  </td>
			  <td><input class="my-activity" type="hidden" name="hosting_cost" value="{{request()->hosting_cost}}">${{request()->hosting_cost}}</td>
			  @endif
			</tr>
			<tr>
			  <th scope="row">Content</th>
			  @if(request()->demo4 == 'Six')
			  <td><input type="hidden" name="content_size" value="Content uplode"/>Content upload</td>
			  <td>$<input type="hidden" name="content" value="{{request()->content}}">{{request()->content}}</td>
			  @elseif(request()->demo4 == 'Seven')
			  <td><input type="hidden" name="content" value="Need Content and Upload"/>Need Content and Upload</td>
			  <td>$<input type="hidden" name="content" value="{{request()->content}}">{{request()->content}}</td>
			  @else
			  <td>1 pages</td>
			  <td>33333</td>
			  @endif
			</tr>
			<tr>
			  <th scope="row"></th>
			  <th>Total</th>
			  <td><?php
				$domain_cost = request()->domain_cost;
				$content = request()->content;
				$hosting_cost = request()->hosting_cost;
				$total =$x + $domain_cost + $hosting_cost + $content;
				
				echo '$'.$total;
			  
			  
			  
			  
			  
				?>
			  </td>
			</tr>
		  </tbody>
		</table>
	</div>
	
	
	
	<div class="col-md-6 col-sm-6 col-6">
	<form class="form-horizontal" role="form" method="GET" action="{{ route('userpayment2') }}">
    {{ csrf_field() }}
	<div class="row">
	<div class="col-lg-12">
		<h6>Pay Method By</h6>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="method" id="inlineRadio1" value="card">
			<label class="form-check-label" for="inlineRadio1">Card</label>
		</div>
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="method" id="inlineRadio2" value="paypal">
		  <label class="form-check-label" for="inlineRadio2">Paypal</label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="method" id="inlineRadio1" value="option1">
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
	</form>
	</div>
	
	
	
</div>
</div>
</div>
@endsection


