@extends('frontend.master')
@section('maincontent')
<div class="page-title-section" style="background-image: url({{asset('frontend/img/slider/banner01.jpg')}});">
		<div class="container">
			<h1>Shop Single</h1> 
			<ul>
				<li><a href="index.html">Home</a>
				</li>
				<li><a href="shopw-single.html">Shop Single</a>
				</li>
			</ul>
		</div>
	</div>
	<?php $y = \App\Product::where(['id' => request()->id])->first(); ?>

    <div class="section-block">
		<div class="container">
			<div class="row">
				<div class="col-md-6 col-sm-6 col-12">
					<div class="product-images">
						<div class="main-img-slider">
							<figure>
								<a href="#" data-size="1400x1400">
									<img src="{{asset('Image/ProductImage/'.$y->imageProduct)}}" alt="" class="img-thumbnail"/>
								</a>
							</figure>
							
						
							
						</div>
					
					</div>
				</div>
				<div class="col-md-6 col-sm-6 col-12">
					<div class="single-product">
						<h2>{{$y->name}}</h2> 
						
						<div class="single-product-price">
							<h4>Price: $&nbsp;{{$y->price}}</h4> 
						</div>
						<p>{!!$y->information!!}</p>
						<div class="quantity mt-30">
						<div class="pricing-list">
						<div class="pricing-list-button"> <a href="{{route('productRegister',['id'=>$y->id])}}">Buy Now</a>
						</div>
						</div>
						</div>
						<div class="product-categories">
							<div class="display-b"> <span>Category: </span> 
								<ul>
									<li><a href="#">{{\App\Productcat::where(['id' => $y->category])->first()->category}}</a>
									</li>
									<li><a href="#">{{$y->name}}</a>
									</li>
								</ul>
							</div>
							<div class="display-b"> <span>Product Visit Link:</span> 
								<ul>
									<li><a href="{{$y->link}}" target=_blank;>Click Here</a></li>
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
								<p>{!!$y->information!!}</p>
							</div>
							<div id='tab-2' class="clearfix product-tab-body">
								<h3>Product Features</h3> 
								
									{!!$y->feature!!}
									
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection