@extends('frontend.master')
@section('maincontent')
<style>
* {box-sizing: border-box}


/* Style the tab */
.tab {
  float: left;
  border: 2px solid #ccc;
  background-color: #f1f1f1;
  width:30%;
  height: 300px;
}

/* Style the buttons inside the tab */
.tab button {
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover {
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active {
	background-color: #0C51A0;
	color:#fff;
}

/* Style the tab content */
.tabcontent {
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height:auto;
}
</style>


    <div class="section-block">
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-12">
                <h2>Categories</h2>


<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'e-commerce')" id="defaultOpen">E-Commerce <span class="pull-right">(10)</span></button>
  <button class="tablinks" onclick="openCity(event, 'pos')">POS <span class="pull-right">(15)</span></button>
  <button class="tablinks" onclick="openCity(event, 'accounting')">Accounting <span class="pull-right">(20)</span></button>
</div>

<div id="e-commerce" class="tabcontent">
<div class="row mt-10">
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-2.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">E-commerce Solution</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-1.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Cash Statement</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-3.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Financial Metrics</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details<a></a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-6.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Project Name</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-5.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Porject Name</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-4.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Project Name</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
						</div>
					</div>
				</div>
			</div>
</div>

<div id="pos" class="tabcontent">
<div class="row mt-10">
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-2.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Project Name</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-1.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Project Name</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-3.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Project Name</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-6.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Business Drivers</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p> 
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-5.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Business Plan</a></h4> 
							<p><a href="{{route('productDetail')}}"></a>Click For Details</p>
							 
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-4.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Planning fallacy</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
							
						</div>
					</div>
				</div>
			</div>
</div>

<div id="accounting" class="tabcontent">
<div class="row mt-10">
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-1.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Strategic Option</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-4.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Cash Statement</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p> 
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-5.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Financial Metrics</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p> 
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-3.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Business Drivers</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-6.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Business Plan</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-4 col-sm-6 col-12">
					<div class="project-grid">
						<div class="project-grid-img">
							<img src="{{asset('frontend/img/projects/pro-2.jpg')}}" alt="img">
						</div>
						<div class="project-grid-overlay">
							<h4><a href="{{route('productDetail')}}">Planning fallacy</a></h4> 
							<p><a href="{{route('productDetail')}}">Click For Details</a></p>
						</div>
					</div>
				</div>
			</div>
</div>

				</div>
				
			</div>
		</div>
	</div>


    <script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
@endsection