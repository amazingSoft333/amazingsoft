@extends('frontend.master')
@section('maincontent')


    <div class="section-block">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-12">
					<div class="product-images">
						<div class="main-img-slider">
							<figure>
								<a href="#" data-size="1400x1400">
									<img src="{{asset('frontend/img/shop/demoo_product.jpg')}}" alt="" />
								</a>
							</figure>
							
						
							
						</div>
					
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-12">
					<div class="single-product">
						<h2>Effective Finance Solutions</h2> 
						
						<div class="single-product-price">
							<h4>Price: $1.750</h4> 
						</div>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate.</p>
						<div class="quantity mt-30">
						<div class="pricing-list">
						<div class="pricing-list-button"> <a href="{{route('productRegister')}}">Buy Now</a>
						</div>
						</div>
						</div>
						<div class="product-categories">
							<div class="display-b"> <span>Category: </span> 
								<ul>
									<li><a href="#">Books</a>
									</li>
									<li><a href="#">Fiance</a>
									</li>
								</ul>
							</div>
							<div class="display-b"> <span>Product Visit Link: </span> 
								<ul>
									<li>789654</li>
								</ul>
							</div>
						</div>
					
						
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="default-tabs">
						<div class='tabs tabs_animate mt-70'>
							<ul class="tab-menu left-holder">
								<li><a href="#tab-1">Description</a>
								</li>
								<li><a href="#tab-2">Additional Information</a>
								</li>
								
							</ul>
							<div id='tab-1' class="clearfix product-tab-body">
								<h3>Product Description</h3> 
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
								<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
							</div>
							<div id='tab-2' class="clearfix product-tab-body">
								<h3>Product Features</h3> 
								<ul>
									<li><span>Name:</span>Effective Finance Solutions</li>
									<li><span>Category:</span>Book</li>
									<li><span>Size:</span>15x20 cm</li>
									<li><span>Weight:</span>0.55 kg</li>
									<li><span>Material:</span>Paper</li>
									<li><span>Color:</span>White & Red</li>
								</ul>
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection