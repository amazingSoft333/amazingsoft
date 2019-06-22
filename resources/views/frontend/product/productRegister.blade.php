@extends('frontend.master')
@section('maincontent')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>

.myDiv{
display:none;
}  
#showOne{
color:red;
border:0px solid red;
padding:10px;
}
#show9{
color:green;
border:0px solid green;
padding:10px;
}
#showThree{
color:blue;
border:0px solid blue;
padding:10px;
}

#showFour{
color:purple;
border:0px solid blue;
padding:10px;
}

#showSix{
color:purple;
border:0px solid blue;
padding:10px;
}

#showSeven{
color:purple;
border:0px solid blue;
padding:10px;
}
/*form css*/
input[type=text], select, textarea {
  width:80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

.amount input[type=text]{
  width:50%;
  padding: 12px;
  border:5px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=email]{
  width:80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

input[type=password]{
  width:80%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}


label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}



.col-25 {
  float: left;
  width: 35%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width:60%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}

.myDiv button {
  float:right;
  width: 20%;
  padding: 10px;
  background: #2196F3;
  color: white;
  font-size: 17px;
  border: 2px solid grey;
  border-left: none;
  cursor: pointer;
  border-radius: 4px;
}

.myDiv button:hover {
  background: #0b7dda;
}


</style>



    
<!--<form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">-->
<form class="form-horizontal" role="form" method="GET" action="{{ route('userpayment') }}">
                        {{ csrf_field() }}
	<input type="hidden" name="product_id" value="{{request()->id}}">
    <div class="section-block">
		<div class="container">
			<div class="section-heading center-holder">
			<form class="contact-form">
<h4><strong>Web Demo (Product Price-${{\App\Product::where(['id' => request()->id])->first()->price}})</strong></h4>
@if(Auth::guard('web')->check())
	<input type="hidden" name="u_id" value="{{Auth::user()->id}}">
@else
<div class="row">
<div class="col-md-6">
<div class="row">

      <div class="col-25">
        <label for="fname">Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Username" required autofocus>
      </div>
    </div>
   

    <div class="row">
      <div class="col-25">
        <label for="address">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="Email address" required autofocus>
      </div>
    </div>
</div>
<br/>
 <div class="col-md-6">
    <div class="row">
      <div class="col-25">
        <label for="address">Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="mbNumber" name="password" placeholder="Password" required>
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="address">Confirm Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="address" name="password_confirmation" placeholder="Password" required>
      </div>
    </div>
    </div>
</div>
@endif
  <br/><br/>
<div class="col-md-12">
<div class="row">
  <div class="col-md-6">
    <div class="row">
      <div class="col-25">
        <label for="address">Have You Any Domain?</label>
      </div>
      <div class="col-75">
    
        <input type="radio" name="demo1" value="One"/> Yes
        <input class="my-activity" type="radio" name="demo1" value="9"/> No

		
      </div>
    </div>
  </div>

  <div class="col-md-6">
	<div class="row">
		  <div class="col-25">
			<label for="address">Have You Any Hosting?</label>
		  </div>
		  <div class="col-75">
		  <input type="radio" name="demo2" value="Three"/> Yes
		  <input type="radio" name="demo2" value="Four"/> No

		  </div>
	</div>
  </div>
</div>

			<!----------------Search your form-------------->
		<div id="showOne" class="myDiv">
		<div class="row">
		<div class="col-lg-2">
		<label>Site URL</label>
		</div>
		<div class="col-lg-10">
			<input type="text" name="site" placeholder=""/></br>
		</div>
		<div class="col-lg-2">
		<label>Login ID</label>
		</div>
		<div class="col-lg-10">
			<input type="text" name="doamin_lid" placeholder=""/></br>
		</div>
		<div class="col-lg-2">
		<label>Login Password</label>
		</div>
		<div class="col-lg-10">
			<input type="password" name="domain_pass" placeholder=""/></br>
		</div>
		</div>
		</div>
		<!----------------Search your form-------------->
		<!----------------Search your form-------------->
		<div id="show9" class="myDiv">
			<div class="row">
			<div class="col-lg-12">
				<p style="font-size:16px;"><strong>Domain Cost- $9</strong></p>
				<input type="hidden" name="domain_cost" value="9">
				<label>Search Your Domain Name</label>
			</div>
			<div class="col-lg-12">
				<input type="text" placeholder="Search.." name="search">
				<button type="submit"><i class="fa fa-search"></i></button>
			</div>
			</div>
		</div>
		<!----------------Search your form-------------->
		
		<!----------------Search your form-------------->
		<div id="showThree" class="myDiv">
		<div class="row">
		<div class="col-lg-2">
			<label>C-Panel Link</label>
		</div>
		<div class="col-lg-10">
				<input type="text" name="cpanel_link" placeholder=""/></br>
		</div>
		<div class="col-lg-2">
			<label>C-Panel ID</label>
		</div>
		<div class="col-lg-10">
				<input type="text" name="cpanel_id" placeholder=""/></br>
		</div>
		<div class="col-lg-2">
			<label>C-Panel Pass</label>
		</div>
		<div class="col-lg-10">
				<input type="password" name="cpanel_pass" placeholder=""/></br>
		</div>
		</div>
		</div>
	    <!----------------Search your form-------------->
	    <!----------------Search your form-------------->
		<div id="showFour" class="myDiv">
			<p><strong>Your Hosting Cost</strong></p><br>
			<div class="row">
			<?php $x = \App\Hostingprice::all(); ?>
				@foreach($x as $data)
				<div class="col-lg-2">
					<input class="my-activity" type="radio" name="hosting_cost" value="{{$data->price}}"> {{$data->hosting}}GB=${{$data->price}}
				</div>
				@endforeach
				<!--<div class="col-lg-2">
					<input class="my-activity" type="radio" name="hosting_cost" value="20"> 2GB=$20
				</div>
				<div class="col-lg-2">
					<input class="my-activity" type="radio" name="hosting_cost" value="30"> 3GB=$30
				</div>
				<div class="col-lg-2">
					<input class="my-activity" type="radio" name="hosting_cost" value="45"> 5GB=$45
				</div>
				<div class="col-lg-2">
					<input class="my-activity" type="radio" name="hosting_cost" value="60"> 10GB=$60
				</div>
				<div class="col-lg-2">
					<input class="my-activity" type="radio" name="hosting_cost" value="90"> 10-Above =$90
				</div>
				<!--<a href=""><span class="label label-primary">Order Now</span></a>-->
			</div>
		</div>
	    <!----------------Search your form-------------->

</div>

<h4><strong> Have Any Content of Website??</strong></h4>
<div class="col-md-12">
<div class="row">
		<div class="col-4">
		<input type="radio" name="demo4" value="Six"/> I have Content but need to upload
		</div>

		<div class="col-4">
		<input type="radio" name="demo4" value="Seven"/> Need Content and Upload
		</div>

		<div class="col-4">
		<input type="radio" name="demo4" value="Five"/> Nothing
		</div>

</div>
		<!----------------Search your form-------------->
		<div id="showSix" class="myDiv">
		  <div class="row">
		  <?php $hp = \App\Contentmanage::where(['publicationType' => 0])->get() ?>
		  @foreach($hp as $hpp)
		  <div class="col-lg-3">
		  <input class="my-activity" type="radio" name="content" value="{{$hpp->price}}">{{$hpp->content}} Page [${{$hpp->price}}]
		  </div>
		  @endforeach
		  <!--
		  <div class="col-lg-3">
		  <input class="my-activity" type="radio" name="content" value="20">6-10 Page-[$20] 
		  </div>
		  <div class="col-lg-3">
		  <input class="my-activity" type="radio" name="content" value="30">11-30 Page-[$30] &nbsp;&nbsp;&nbsp;
		  </div>
		  <div class="col-lg-3">
		  <input class="my-activity" type="radio" name="content" value="50">31-Above Page-[$50]&nbsp;&nbsp;&nbsp;
		  </div>
		  </div>
		  -->
		</div>
		</div>
		<!----------------Search your form-------------->
		
		<!----------------Search your form-------------->
		<div id="showSeven" class="myDiv">
		  <div class="row">
		  <?php $hcp = \App\Contentmanage::where(['publicationType' => 1])->get() ?>
		  @foreach($hcp as $hcpp)
		  <div class="col-lg-3">
		  <input class="my-activity" type="radio" name="content" value="{{$hcpp->price}}">{{$hcpp->content}} Page [${{$hcpp->price}}]<br>
		  </div>
		  @endforeach
		  </div>
		</div>
		<!----------------Search your form-------------->
</div>
<br/>
<br/>

<div class=amount>
<div class="row">
<div class="col-md-3">
<strong>Total Amount (USD)</strong>:
</div>
<div class="col-md-9">
<input type="text" name="amount" value="30" id="amount" />
</div>
</div>
</div>


<br/><br/>
 <div class="pb-10">
  <button type="submit" class="btn btn-primary">Continue &nbsp; <i class="fa fa-angle-double-right" aria-hidden="true"></i></button>
  </div>
</form>
			</div>
	
		</div>
	</div>
</form>

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
<script type="text/javascript">
$(document).ready(function() {        
    $(".my-activity").click(function(event) {
        var total =<?php $x = \App\Product::where(['id' => request()->id])->first()->price; echo  $x; ?>;
        $(".my-activity:checked").each(function() {
            total += parseInt($(this).val());
        });
        
        if (total == 0) {
            $('#amount').val('');
        } else {                
            $('#amount').val(total);
        }
    });
});    
</script>

@endsection


