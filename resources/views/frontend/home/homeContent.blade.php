@extends('frontend.master')
@section('maincontent')
<style>
* {
  box-sizing: border-box;
}
#thumbnails {
  text-align: center;
  padding: 1em;
}

/* --This container helps the thumbnail behave as if it were an unscaled IMG element */
.thumbnail-container {
  width: calc(1440px * 0.18);
  height: calc(900px * 0.38);
  display: inline-block;
  overflow: hidden;
  position: relative;
  background: #f9f9f9;
}

/* --Image Icon for the Background */
.thumbnail-container::before {
  position: absolute;
  left: ~"calc(50% - 16px)";
  top: ~"calc(50% - 15px)";
  opacity: 0.2;
  display: block;
  -ms-zoom: 2;
  -o-transform: scale(2);
  -moz-transform: scale(2);
  -webkit-transform: scale(2);
  content: url("data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/PjwhRE9DVFlQRSBzdmcgIFBVQkxJQyAnLS8vVzNDLy9EVEQgU1ZHIDEuMS8vRU4nICAnaHR0cDovL3d3dy53My5vcmcvR3JhcGhpY3MvU1ZHLzEuMS9EVEQvc3ZnMTEuZHRkJz48c3ZnIGVuYWJsZS1iYWNrZ3JvdW5kPSJuZXcgMCAwIDMyIDMyIiBoZWlnaHQ9IjMycHgiIGlkPSJMYXllcl8xIiB2ZXJzaW9uPSIxLjEiIHZpZXdCb3g9IjAgMCAzMiAzMiIgd2lkdGg9IjMycHgiIHhtbDpzcGFjZT0icHJlc2VydmUiIHhtbG5zPSJodHRwOi8vd3d3LnczLm9yZy8yMDAwL3N2ZyIgeG1sbnM6eGxpbms9Imh0dHA6Ly93d3cudzMub3JnLzE5OTkveGxpbmsiPjxnIGlkPSJwaG90b18xXyI+PHBhdGggZD0iTTI3LDBINUMyLjc5MSwwLDEsMS43OTEsMSw0djI0YzAsMi4yMDksMS43OTEsNCw0LDRoMjJjMi4yMDksMCw0LTEuNzkxLDQtNFY0QzMxLDEuNzkxLDI5LjIwOSwwLDI3LDB6ICAgIE0yOSwyOGMwLDEuMTAyLTAuODk4LDItMiwySDVjLTEuMTAzLDAtMi0wLjg5OC0yLTJWNGMwLTEuMTAzLDAuODk3LTIsMi0yaDIyYzEuMTAyLDAsMiwwLjg5NywyLDJWMjh6IiBmaWxsPSIjMzMzMzMzIi8+PHBhdGggZD0iTTI2LDRINkM1LjQ0Nyw0LDUsNC40NDcsNSw1djE4YzAsMC41NTMsMC40NDcsMSwxLDFoMjBjMC41NTMsMCwxLTAuNDQ3LDEtMVY1QzI3LDQuNDQ3LDI2LjU1Myw0LDI2LDR6ICAgIE0yNiw1djEzLjg2OWwtMy4yNS0zLjUzQzIyLjU1OSwxNS4xMjMsMjIuMjg3LDE1LDIyLDE1cy0wLjU2MSwwLjEyMy0wLjc1LDAuMzM5bC0yLjYwNCwyLjk1bC03Ljg5Ni04Ljk1ICAgQzEwLjU2LDkuMTIzLDEwLjI4Nyw5LDEwLDlTOS40NCw5LjEyMyw5LjI1LDkuMzM5TDYsMTMuMDg3VjVIMjZ6IE02LDE0LjZsNC00LjZsOC4wNjYsOS4xNDNsMC41OCwwLjY1OEwyMS40MDgsMjNINlYxNC42eiAgICBNMjIuNzQsMjNsLTMuNDI4LTMuOTU1TDIyLDE2bDQsNC4zNzlWMjNIMjIuNzR6IiBmaWxsPSIjMzMzMzMzIi8+PHBhdGggZD0iTTIwLDEzYzEuNjU2LDAsMy0xLjM0MywzLTNzLTEuMzQ0LTMtMy0zYy0xLjY1OCwwLTMsMS4zNDMtMywzUzE4LjM0MiwxMywyMCwxM3ogTTIwLDhjMS4xMDIsMCwyLDAuODk3LDIsMiAgIHMtMC44OTgsMi0yLDJjLTEuMTA0LDAtMi0wLjg5Ny0yLTJTMTguODk2LDgsMjAsOHoiIGZpbGw9IiMzMzMzMzMiLz48L2c+PC9zdmc+");
}

/* --This is a masking container for the zoomed iframe element */
.thumbnail {
  -ms-zoom: 0.25;
  -moz-transform: scale(0.25);
  -moz-transform-origin: 0 0;
  -o-transform: scale(0.25);
  -o-transform-origin: 0 0;
  -webkit-transform: scale(0.25);
  -webkit-transform-origin: 0 0;
}

/* --This is our screen sizing */
.thumbnail, .thumbnail iframe {
  width: 1050px;
  height: 1500px;
}

/* --This facilitates the fade-in transition instead of flicker. It also helps us maintain the illusion that this is an image, since some webpages will have a preloading animation or wait for some images to download */
.thumbnail iframe {
  opacity: 0;
  transition: all 300ms ease-in-out;
}

/* --This pseudo element masks the iframe, so that mouse wheel scrolling and clicking do not affect the simulated "screenshot" */
.thumbnail:after {
  content: "";
  display: block;
  position: absolute;
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
}

</style>
                @php
				$publishedSliders=\App\Slider::get();
				@endphp	
<div class="swiper-main-slider-fade swiper-container">
		<div class="swiper-wrapper">
			@foreach($publishedSliders as $publishedSlider)
			<div class="swiper-slide" style="background-image:url({{asset('Image/SliderImage/'.$publishedSlider->sliderImage)}});">
				<div class="container">
					<div class="slider-content left-holder">
						<h2 class="animated fadeInDown"> {{$publishedSlider->heading01}} </h2> 
						<div class="row">
							<div class="col-md-6 col-sm-12 col-12">
								<p class="animated fadeInDown">{!!$publishedSlider->heading02!!}</p>
							</div>
						</div>
						<div class="animated fadeInUp mt-30"> <a href="#contact" class="dark-button button-md">Contact us</a> 
						</div>
					</div>
				</div>
			</div>
@endforeach
			
		</div>
		<div class="swiper-button-next"></div>
		<div class="swiper-button-prev"></div>
		<div class="swiper-pagination"></div>
	</div>

    	<!----Domain Search---->
<div class="section-block-search">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="box-search">
<h2 style="font-size:38px;text-align:center;">Search Your <span style="color:#0C51A0;">Domain</span> Name</h2>
<form class="example wow fadeInLeft" data-wow-duration="2s" action="/action_page.php">
  <input type="text" placeholder="Search.." name="search">
  <button type="submit"><i class="fa fa-search"></i></button>
</form>
</div>
</div>
</div>
</div>
</div>
				@php
				$publishedHomeabout=\App\Homeabout::first();
				@endphp		
<!-------About us-------->
<div class="section-block">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6 col-12">
					<div class="pr-30-md">
						<div class="section-heading">
							<h4>About Us</h4> 
						</div>
						<div class="section-heading-line-left"></div>
						<div class="text-content-big mt-20">
					<p>@if(!$publishedHomeabout==null){!!$publishedHomeabout->information!!}@endif</p>

						</div>
						
						<div class="mt-15 mb-40"> <a href="" class="primary-button button-md">Read More</a> 
						</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-6 col-12">
					<div class="row">
						<div class="col-md-6 col-sm-6 col-12">
							<div class="feature-flex-square">
								<div class="clearfix">
									<div class="feature-flex-square-icon"> <i class="icon-target"></i> 
									</div>
									<div class="feature-flex-square-content">
										<h4><a href="#">Business Solutions</a></h4> 
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum, nunc ut.</p><a href="#" class="feature-flex-square-content-button">Read More</a> 
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-12">
							<div class="feature-flex-square">
								<div class="clearfix">
									<div class="feature-flex-square-icon"> <i class="icon-diamond"></i> 
									</div>
									<div class="feature-flex-square-content">
										<h4><a href="#">Development Manager</a></h4> 
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum, nunc ut.</p><a href="#" class="feature-flex-square-content-button">Read More</a> 
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-12">
							<div class="feature-flex-square">
								<div class="clearfix">
									<div class="feature-flex-square-icon"> <i class="icon-networking"></i> 
									</div>
									<div class="feature-flex-square-content">
										<h4><a href="#">Global Consumer insights</a></h4> 
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum, nunc ut.</p><a href="#" class="feature-flex-square-content-button">Read More</a> 
									</div>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-12">
							<div class="feature-flex-square">
								<div class="clearfix">
									<div class="feature-flex-square-icon"> <i class="icon-hourglass"></i> 
									</div>
									<div class="feature-flex-square-content">
										<h4><a href="#">Professional Approach</a></h4> 
										<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus bibendum, nunc ut.</p><a href="#" class="feature-flex-square-content-button">Read More</a> 
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	     @php
				$publishedCounters=\App\Homecounter::get();
				@endphp		
    <!-------Counter------>
	<div class="section-block-parallax section-md" style="background-image: url({{asset('frontend/img/slider/counter_pic01.jpg')}});">
		<div class="container">
			<div class="row">
			@foreach($publishedCounters as $publishedCounter)
				<div class="col-md-3 col-sm-6 col-12">
					<div class="counter-box">
						<h3 class="countup">{{$publishedCounter->counter}}</h3> 
						<p>{{$publishedCounter->title}}</p>
					</div>
				</div>
				@endforeach
			</div>
			
		</div>
	</div>

    <!---------Why Choose Us---------->
		    @php
				$publishedChoose=\App\Chooseinfo::first();
				@endphp
	<div class="section-block">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="pr-30-md">
						<div class="section-heading">
							<h4>Why Choose Us</h4> 
						</div>
						<div class="section-heading-line-left"></div>
						<div class="text-content-big mt-20">
							<p>@if(!$publishedChoose==null){!!$publishedChoose->information!!}@endif</p>
						</div>
				@php
				$publishedServiceInfos=\App\Serviceinfo::get();
				@endphp
						<div class="mt-20">
							<ul class="primary-list">
							@foreach($publishedServiceInfos as $publishedServiceInfo)
								<li><i class="fa fa-check-square"></i>{{$publishedServiceInfo->service}}</li>
							@endforeach
							</ul>
						</div>
					</div>
				</div>
				@php
				$publishedEfficiencies=\App\Efficiency::get();
				@endphp		
				<div class="col-md-6">
					<div class="mt-25">
					@foreach($publishedEfficiencies as $publishedEfficiency)
						<div class="progress-text">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-6">{{$publishedEfficiency->title}}</div>
								<div class="col-md-6 col-sm-6 col-6 text-right">{{$publishedEfficiency->number}}%</div>
							</div>
						</div>
						<div class="progress progress-bold">
							<div class="progress-bar custom-bar wow slideInLeft animated" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width:{{$publishedEfficiency->number}}%"></div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>

    <!-----------Product Section----------->
	<div class="section-block-parallax section-md" style="background-image: url({{asset('frontend/img/slider/back_image.jpg')}});">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-12">
					<div class="section-heading white-color mt-15"> 
						<h3>Bye Our Newest Products</h3> 
						<div class="section-heading-line-left-product"></div>
					</div>
					<div class="mt-15 left-holder-md"> <a href="{{route('producthome')}}" class="primary-button-product button-sm mt-15-xs">Show All Products</a> 
					</div>
				</div>
				<div class="col-md-9 col-sm-9 col-12">
					<div class="row">
						<div class="owl-carousel owl-theme mt-25" id="services-carousel-3">
					<div class="service-box-car-2"> 
						<a href="project-detail-2.html"><img src="{{asset('frontend/img/shop/grid/pro-8.jpg')}}" alt="" height="42" width="42"> </a>
					</div>
					<div class="service-box-car-2"> 
						<a href="project-detail-2.html"><img src="{{asset('frontend/img/shop/grid/pro-8.jpg')}}" alt="" height="42" width="42"></a>
					</div>
					<div class="service-box-car-2"> 
						<a href="project-detail-2.html"><img src="{{asset('frontend/img/shop/grid/pro-8.jpg')}}" alt="" height="42" width="42"> </a>
					</div>
					<div class="service-box-car-2"> 
						<a href="project-detail-2.html"><img src="{{asset('frontend/img/shop/grid/pro-8.jpg')}}" alt="" height="42" width="42"></a> 
					</div>
					<div class="service-box-car-2"> 
						<a href="project-detail-2.html"><img src="{{asset('frontend/img/shop/grid/pro-8.jpg')}}" alt="" height="42" width="42"> </a>
					</div>
					<div class="service-box-car-2"> 
						<a href="project-detail-2.html"><img src="{{asset('frontend/img/shop/grid/pro-8.jpg')}}" alt="" height="42" width="42"></a>
					</div>
					
				</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="notice-section-grey notice-section-sm">
		<div class="container">
			<div class="row">
				<div class="col-md-8 col-sm-8 col-12">
					<div class="mt-5">
						<h6>Looking for Professional Approach and Quality Services ?</h6> 
						<div class="section-heading-line-left"></div>
					</div>
				</div>
				<div class="col-md-4 col-sm-4 col-12">
					<div class="mt-10 right-holder-md"> <a href="#" class="primary-button button-sm mt-15-xs">Contact Us Today</a> 
					</div>
				</div>
			</div>
		</div>
	</div>
	      @php
				$publishedPortfolios=\App\Portfolio::get();
				@endphp	
				
				@php
				$publishedBackground=\App\Portbackground::first();
				@endphp		
	<!----Our Portfolio---->
	<div class="section-block-bg" style="background-image:@if(!$publishedBackground==null) url({{asset('Image/PortBackImage/'.$publishedBackground->backgroundImage)}})@endif">
		<div class="container">
			<div class="section-heading center-holder">
				<h2>Our Portfolio</h2> 
				<div class="section-heading-line"></div>
			</div>
			<div class="row center-block" id="thumbnails">
				<div class="owl-carousel owl-theme mt-25" id="services-carousel-2">
				  @foreach($publishedPortfolios as $publishedPortfolio)
				  <div class="col-md-3">
					<div class="thumbnail-container" title="Tribute">
            <a href="{{$publishedPortfolio->weblink}}" target="_blank">
            <div class="thumbnail">
              <iframe src="{{$publishedPortfolio->weblink}}" frameborder="0" onload="this.style.opacity = 1"></iframe>
            </div>
            </a>
          </div>
		  </div>
					
					@endforeach
				</div>
			</div>
			<div class="mt-10 right-holder-md port"> <a href="projects-grid.html" class="primary-button button-sm mt-15-xs">Show All Portfolios</a> 
			</div>
		</div>
	</div>
				@php
				$publishedTestimonials=\App\Testimonial::get();
				@endphp	
	<!----Testimonial----->
    <div class="section-block">
		<div class="container">
			<div class="section-heading center-holder">
				<h3>What Clients Say</h3> 
				<div class="section-heading-line"></div>
			</div>
			<div class="owl-carousel owl-theme mt-30" id="testmonial-item">
			@foreach($publishedTestimonials as $publishedTestimonial)
				<div class="testmonial-item">
					<div class="testmonial-item-bxx">
						<p>{!!$publishedTestimonial->information!!}</p>
						<div class="testmonial-arrow"></div>
					</div>
					<div class="testmonial-item-bxx-img">
						<div class="testmonial-item-img">
							<img src="{{(asset('Image/TestimonialImage/'.$publishedTestimonial->imageTesti))}}" alt="img">
						</div>
						<div class="testmonial-item-name">
							<h4>{{$publishedTestimonial->name}}</h4>  <span>{{$publishedTestimonial->designation}}</span> 
						</div>
					</div>
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
<!------tools-------->
        @php
				$publishedTools=\App\Tool::get();
				@endphp	
	<div class="section-clients border-top border-bottom">
		<div class="container">
			<div class="owl-carousel owl-theme clients" id="clients">
				@foreach($publishedTools as $publishedTool)
				<div class="item">
					<img src="{{(asset('Image/ToolsImage/'.$publishedTool->imageTools))}}" alt="partner-image">
				</div>
				@endforeach
				
			</div>
		</div>
	</div>
@endsection