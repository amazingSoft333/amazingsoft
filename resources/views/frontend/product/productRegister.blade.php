@extends('frontend.master')
@section('maincontent')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<style>

.myDiv{
display:none;
}  
#showOne{
color:red;
border:1px solid red;
padding:10px;
}
#show9{
color:green;
border:1px solid green;
padding:10px;
}
#showThree{
color:blue;
border:1px solid blue;
padding:10px;
}

#showFour{
color:purple;
border:1px solid blue;
padding:10px;
}

#showSix{
color:purple;
border:1px solid blue;
padding:10px;
}

#showSeven{
color:purple;
border:1px solid blue;
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



    
 
    <div class="section-block">
		<div class="container">
			<div class="section-heading center-holder">
			<form class="contact-form">
<h4><strong>Web Demo (Product Price-$30)</strong></h4>
<div class=row>
<div class="col-md-6">
<div class="row">

      <div class="col-25">
        <label for="fname">Username</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="name" placeholder="Your name..">
      </div>
    </div>
   

    <div class="row">
      <div class="col-25">
        <label for="address">Email</label>
      </div>
      <div class="col-75">
        <input type="email" id="email" name="email" placeholder="Your Email ...">
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
        <input type="password" id="mbNumber" name="mbNumber" placeholder="Your password..">
      </div>
    </div>

    <div class="row">
      <div class="col-25">
        <label for="address">Confirm Password</label>
      </div>
      <div class="col-75">
        <input type="password" id="address" name="address" placeholder="Your password..">
      </div>
    </div>
    </div>
    </div>
  <br/><br/>
<div class="row">
  <div class="col-md-6">
    <div class="row">
      <div class="col-25">
        <label for="address">Have You Any Domain?</label>
      </div>
      <div class="col-75">
    
        <input type="radio" name="demo1" value="One"/> Yes
        <input class="my-activity" type="radio" name="demo1" value="9"/> No
<div id="showOne" class="myDiv">
<label>URL</label>
<input type="text" name="name" placeholder=""/></br>
<label>LID</label>
<input type="text" name="lid" placeholder=""/></br>
<label>LPW</label>
<input type="password" name="lpw" placeholder=""/></br>
</div>


<div id="show9" class="myDiv">
<p style="font-size:16px;"><strong>Domain Cost- $9</strong></p>
<label>Search Your Domain Name</label>
<input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>

</div>
      </div>
    </div>
    </div>
 <!----
  <h6>Have You Any Domain?</h6>
  <input type="radio" name="demo1" value="One"/> Yes
<input type="radio" name="demo1" value="Two"/> No
<div id="showOne" class="myDiv">
<label>URL</label>
<input type="text" name="name" placeholder=""/></br>
<label>LID</label>
<input type="text" name="lid" placeholder=""/></br>
<label>LPW</label>
<input type="password" name="lpw" placeholder=""/></br>
</div>
---->
<div class="col-md-6">
<div class="row">
      <div class="col-25">
        <label for="address">Have You Any Hosting?</label>
      </div>
      <div class="col-75">
      <input type="radio" name="demo2" value="Three"/> Yes
<input type="radio" name="demo2" value="Four"/> No
<div id="showThree" class="myDiv">
<label>C-Panel Link</label>
<input type="text" name="cpLink" placeholder=""/></br>
<label>C-Panel ID</label>
<input type="text" name="cpId" placeholder=""/></br>
<label>C-Panel Pass</label>
<input type="password" name="Cppass" placeholder=""/></br>
</div>

<div id="showFour" class="myDiv">
<p><strong>Your Hosting Cost</strong></p>
<input class="my-activity" type="radio" name="hosting" value="10"> 1GB=$10<br>
  <input class="my-activity" type="radio" name="hosting" value="30"> 2GB=$30<br>
  <input class="my-activity" type="radio" name="hosting" value="60"> 10GB=$60<br/>
  <a href=""><span class="label label-primary">Order Now</span></a>
</div>
      </div>
    </div>
    </div>
    </div>
<!--- <h6>Have You Any Hosting?</h6>

<input type="radio" name="demo2" value="Three"/> Yes
<input type="radio" name="demo2" value="Four"/> No
<div id="showThree" class="myDiv">
<label>C-Panel ID</label>
<input type="text" name="name" placeholder=""/></br>
<label>C-Panel Pass</label>
<input type="password" name="pass" placeholder=""/></br>
</div>

<div id="showFour" class="myDiv">
<label><a href="">Order Now</a></label>
</div>
------->
<h4><strong> Have Any Content of Website??</strong></h4>
<div class="row">
<div class="col-4">
<input type="radio" name="demo4" value="Six"/> I have Content but need to upload
<div id="showSix" class="myDiv">

<input class="my-activity" type="radio" name="content" value="10">1-5 Page [$10]<br>
  <input class="my-activity" type="radio" name="content" value="20">6-10 Page-[$20]<br>
  <input class="my-activity" type="radio" name="content" value="30">11-30 Page-[$30]<br/>
  <input class="my-activity" type="radio" name="content" value="50">31-Above Page-[$50]<br/>
  
</div>
</div>

<div class="col-4">
<input type="radio" name="demo4" value="Seven"/> Need Content and Upload
<div id="showSeven" class="myDiv">

<input class="my-activity" type="radio" name="content" value="20">1-5 Page [$20]<br>
  <input class="my-activity" type="radio" name="content" value="40">6-10 Page-[$40]<br>
  <input class="my-activity" type="radio" name="content" value="60">11-30 Page-[$60]<br/>
  <input class="my-activity" type="radio" name="content" value="100">31-Above Page-[$100]<br/>
  
</div>
</div>

<div class="col-4">
<input type="radio" name="demo4" value="Five"/> Nothing
</div>

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
  <button type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
			</div>
	
		</div>
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
<script type="text/javascript">
$(document).ready(function() {        
    $(".my-activity").click(function(event) {
        var total =30;
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


