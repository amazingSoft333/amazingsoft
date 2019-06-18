@extends('frontend.master')
@section('maincontent')
<div class="page-title-section" style="background-image: url({{asset('frontend/img/slider/counter_pic01.jpg')}});">
		<div class="container">
			<h1>Pricing Lists</h1> 
			<ul>
				<li><a href="index.html">Home</a>
				</li>
				<li><a href="pricing-lists.html">Pricing Lists</a>
				</li>
			</ul>
		</div>
	</div>
<div class="section-block-grey">
		<div class="container">
			<div class="section-heading center-holder"> <span>Our Packages</span> 
				<h3>Pick The Best Plan For You</h3> 
				<div class="section-heading-line"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
					<br>incididunt ut labore et dolore magna aliqua.</p>
			</div>
			<div class="row mt-50">
			@foreach($publishedPackages as $publishedPackage)
				<div class="col-md-4 col-sm-4 col-12">
					<div class="price-table">
						<div class="price-table-header">
							<h5>{{$publishedPackage->name}}</h5> 
							<h4><sup>$</sup>{{$publishedPackage->price}}</h4>  <span>Per Month</span> 
						</div>
						<div class="price-table-content">
							
								<p>{!!$publishedPackage->information!!}</p>
								
						
							<div class="center-holder"> <a href="#">Purchase</a> 
							</div>
						</div>
					</div>
				</div>
			@endforeach
			
			</div>
		</div>
	</div>
@endsection