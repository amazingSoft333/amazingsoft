@extends('frontend.master')
@section('maincontent')
<style>
.myDiv{
display:none;

}  
#showOne{
color:purple;
border:none;
padding:10px;
}
.myDiv .rocket{
	left:22px;
	
}

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<div class="section-block">
<form class="form-horizontal" role="form" method="GET" action="{{ route('userpayment2') }}">
    {{ csrf_field() }}
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
			  <td>${{$p = \App\Product::where(['id' => request()->product_id])->first()->price}}
				  <input type="hidden" name="product_id" value="{{\App\Product::where(['id' => request()->product_id])->first()->id}}">
				  <input type="hidden" name="product_unique_id" value="AMP{{ rand(000,9999) }}{{\App\Product::where(['id' => request()->product_id])->first()->id}}">
			  </td>
			</tr>
			<tr>
			  <th scope="row">Domain</th>
			  @if(request()->demo1 == 'One')
			  <td>
							<input type="hidden" name="domain" value="Already have a doamin">
							<input type="hidden" name="site" value="{{request()->site}}">
							<input type="hidden" name="doamin_lid" value="{{request()->doamin_lid}}">
							<input type="hidden" name="domain_pass" value="{{request()->domain_pass}}">
							Already have a doamin
			  </td>
			  <td></td>
			  @else
			   <td>
							<a href="{{request()->search}}"><input type="hidden" name="search" value="{{request()->search}}">{{request()->search}}</a>
			   </td>
			  <td><input type="hidden" name="domain_cost" value="{{request()->domain_cost}}">${{request()->domain_cost}}</td>  
			  @endif
			</tr>
			<tr>
			  <th scope="row">Hosting</th>
			  @if(request()->demo2 == 'Three')
			  <td>Already Have a Hosting
				  <input type="hidden" name="demo2" value="Already Have a Hosting">
				  <input type="hidden" name="cpanel_link" value="{{request()->cpanel_link}}">
				  <input type="hidden" name="cpanel_id" value="{{request()->cpanel_id}}">
				  <input type="hidden" name="cpanel_pass" value="{{request()->cpanel_pass}}"></td>
			  <td></td>
			  @else
				<?php $hc = \App\Hostingprice::where(['price' => request()->hosting_cost])->first()->price; ?>
			  <td>
					{{ \App\Hostingprice::where(['price' => request()->hosting_cost])->first()->hosting}}GB
			  </td>
			  <td><input class="my-activity" type="hidden" name="hosting_cost" value="{{ \App\Hostingprice::where(['price' => request()->hosting_cost])->first()->price}}">${{ \App\Hostingprice::where(['price' => request()->hosting_cost])->first()->price}}</td>
			  @endif
			</tr>
			<tr>
			  <th scope="row">Content</th>
			  @if(request()->demo4 == 'Six')
			  @php $x = \App\Contentmanage::where(['price' => request()->content])->where(['publicationType' => 0])->first()->price; @endphp
			  @php $xc = \App\Contentmanage::where(['price' => request()->content])->where(['publicationType' => 0])->first()->content; @endphp
			  <td><input type="hidden" name="content_size" value="Content uplode"/>Content upload &nbsp; ({{$xc}}) &nbsp;pages</td>
			  <td>$<input type="hidden" name="content" value="{{$x}}">{{$x}}</td>
			  @elseif(request()->demo4 == 'Seven')
			  @php $x = \App\Contentmanage::where(['price' => request()->content])->where(['publicationType' => 1])->first()->price; @endphp
			  @php $xcc = \App\Contentmanage::where(['price' => request()->content])->where(['publicationType' => 1])->first()->content; @endphp
			  <td><input type="hidden" name="content_size" value="Need Content and Upload"/>Need Content and Upload &nbsp; ({{$xcc}}) &nbsp; pages</td>
			  <td>$<input type="hidden" name="content" value="{{$x}}">{{$x}}</td>
			  @else
			  <td></td>
			  <td></td>
			  @endif
			</tr>
			<tr>
			  <th scope="row"></th>
			  <th>Total</th>
			  <td><?php
				$domain_cost = request()->domain_cost;
				$content = request()->content;
				$hosting_cost = request()->hosting_cost;
				$total =$p + $domain_cost + $hc + $x;
				
				echo '$'.$total;
			  
			  
			  
			  
			  
				?>
				<input type="hidden" name="total" value="{{$total}}">
			  </td>
			</tr>
		  </tbody>
		</table>
	</div>
	
	
	
	<div class="col-md-6 col-sm-6 col-6">
	<div class="row">
	 <input type="hidden" id="fname" name="u_id" value="{{request()->u_id}}">
	 <input type="hidden" id="fname" name="name" value="{{request()->name}}">
	 <input type="hidden" id="email" name="email" value="{{request()->email}}">
	 <input type="hidden" id="mbNumber" value="{{request()->password}}" name="password">
	 <input type="hidden" id="address" value="{{request()->password_confirmation}}" name="password_confirmation">
	<div class="col-lg-12">
		@if (count($errors) > 0)
			<div class="alert alert-danger">
				<strong></strong>Please Sign in first<br><br>
				<ul>						
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
		<h6>Pay Method By</h6>
		
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="method" id="inlineRadio1" value="card">
			<label class="form-check-label" for="inlineRadio1"><img src="{{asset('frontend/img/payment/1.jpg')}}" style="width:100px;height:20px;"></label>
		</div>
		
		<div class="form-check form-check-inline">
		  <input class="form-check-input" type="radio" name="method" id="inlineRadio2" value="paypal">
		  <label class="form-check-label" for="inlineRadio2"><img src="{{asset('frontend/img/payment/paypal.png')}}" height="140px" width="70px"></label>
		</div>
		<div class="form-check form-check-inline">
			<input class="form-check-input" type="radio" name="method" id="inlineRadio1" value="One">
			<label class="form-check-label" for="inlineRadio1"><img src="{{asset('frontend/img/payment/flag001.png')}}" style="width:35px;height:20px;"></label>
		</div>
		</div>
		<div id="showOne" class="myDiv">
		<div class="row">
	
		<div class="col-lg-12">
		&nbsp;
		<div class="form-check form-check-inline bkash">
			<input class="form-check-input" type="radio" name="content" id="inlineRadio1" value="">
			<label class="form-check-label" for="inlineRadio1"><img src="{{asset('frontend/img/payment/bkash.png')}}" height="140px" width="75px"></label>
		</div>
		
		<div class="form-check form-check-inline rocket">
		  <input class="form-check-input" type="radio" name="content" id="inlineRadio2" value="">
		  <label class="form-check-label" for="inlineRadio2"><img src="{{asset('frontend/img/payment/rocket01.png')}}" style="width:35px;height:20px;"></label>
		</div>

		

  </div>
</div>
<br/>
<br/>
	</div >
		
	<br/>
	
	</div>
	<div class="col-lg-12">
		<button class="btn btn-md btn-primary pull-right">Payment</button>
	</div>
	</div>
	
	
	
</div>
</div>
</form>
</div>

<script>
$(document).ready(function(){
    $('input[type="radio"]').click(function(){
    	var demovalue = $(this).val(); 
        $("div.myDiv").hide();
        $("#show"+demovalue).show();
    });
});


function myFunction() {
  var checkBox = document.getElementById("myCheck");
  var text = document.getElementById("text");
  if (checkBox.checked == true){
    text.style.display = "block";
  } else {
     text.style.display = "none";
  }
}
</script>
@endsection


