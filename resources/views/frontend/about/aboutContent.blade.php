@extends('frontend.master')
@section('maincontent')
<!-----
				@php
				$publishedAboutBanner=\App\Aboutbanner::first();
				@endphp
				--------->
<!-------
 <div class="page-title-section" style="background-image:@if(!$publishedAboutBanner==null) url({{asset('Image/BannerImage/'.$publishedAboutBanner->banner)}})@endif;">
		<div class="container">
			<h1>About Us</h1> 
			<ul>
				<li><a href="index.html">Home</a>
				</li>
				<li><a href="team.html">About Us</a>
				</li>
			</ul>
		</div>
	</div> 
	-------->
      	        @php
				$publishedAboutDes=\App\Aboutdescription::first();
				@endphp	
    <div class="section-block">
		<div class="container">
			<div class="section-heading center-holder">
				<h3 class="wow fadeInUp">We Are Amazing Soft</h3> 
				<div class="section-heading-line"></div>
				<p class="wow fadeInUp" data-wow-delay="0.4">@if(!$publishedAboutDes==null){!!$publishedAboutDes->information!!}@endif</p>
			</div>
			<div class="row mt-50">
			  @php
				$publishedDesone=\App\Desone::first();
				@endphp	
				<div class="col-md-4 col-sm-4 col-12 wow fadeInLeft" data-wow-delay="1.8s">
					<div class="feature-box-long"> 
						<h2>We Are Creative</h2> 
						<p>@if(!$publishedDesone==null){!!$publishedDesone->information!!}@endif</p>
					</div>
				</div>
				@php
				$publishedDestwo=\App\Destwo::first();
				@endphp	
				<div class="col-md-4 col-sm-4 col-12 wow fadeInLeft" data-wow-delay="1.4s">
					<div class="feature-box-long">
						<h2>Our Mission</h2> 
							<p>@if(!$publishedDestwo==null){!!$publishedDestwo->information!!}@endif</p>
					</div>
				</div>
				@php
				$publishedDesthree=\App\Desthree::first();
				@endphp	
				<div class="col-md-4 col-sm-4 col-12 wow fadeInLeft" data-wow-delay="0.8s">
					<div class="feature-box-long"> 
						<h2>Our Vision</h2> 
						<p>@if(!$publishedDesthree==null){!!$publishedDesthree->information!!}@endif</p>
					</div>
				</div>
			</div>
		</div>
	</div>

      	@php
				$publishedCeo=\App\Ceo::first();
				@endphp	
    <div class="section-block-ceo">
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-sm-6 col-12">
				<div class="team-box-3">
						<div class="team-box-3-image">
							<div class="wow bounceInLeft" data-wow-duration="3s">
							<img src="@if(!$publishedCeo==null){{(asset('Image/CEOImage/'.$publishedCeo->ceoImage))}}@endif" alt="member" height="400px" width="400px">
							</div>
							<div class="team-box-3-overlay">
								<div class="team-box-3-name">
									<h4>@if(!$publishedCeo==null){{$publishedCeo->name}}@endif</h4> 
									<h5>@if(!$publishedCeo==null){{$publishedCeo->designation}}@endif</h5> 
								</div>
								<div class="team-box-3-content"> <a href="#"><i class="fa fa-facebook-official"></i></a>  <a href="#"><i class="fa fa-twitter"></i></a>  <a href="#"><i class="fa fa-instagram"></i></a>  <a href="#"><i class="fa fa-twitter"></i></a> 
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-6 col-12">
					<div class="pl-30-md">
						<div class="section-heading">
							<h4>Message of CEO</h4> 
						</div>
						<div class="section-heading-line-left"></div>
						<div class="text-content-big mt-20">
							
							<p>@if(!$publishedCeo==null){!!$publishedCeo->information!!}@endif</p>
						</div>
						<div class="ceo pull-right pt-5">
							<h5>@if(!$publishedCeo==null){{$publishedCeo->name}}@endif</h5>
							<p><b>@if(!$publishedCeo==null){{$publishedCeo->designation}}@endif</b></p>
						</div>
					</div>
				</div>
			</div>
			
		</div>
	</div>

    <div class="section-block-grey">
		<div class="container">
			<div class="section-heading center-holder">
				<h3>Meet Our Experts</h3> 
				<div class="section-heading-line"></div>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
					<br>incididunt ut labore et dolore magna aliqua.</p>
			</div>
			  @php
				$publishedEmployees=\App\Teammember::get();
				@endphp	
			
			<div class="row mt-50">
				@foreach($publishedEmployees as $publishedEmployee)
				<div class="col-lg-3 col-md-6 col-12 wow fadeInUp" data-wow-delay="0.4s">
					<div class="team-box-2">
						<div class="team-box-2-image">
							<img src="{{(asset('Image/MemberImage/'.$publishedEmployee->memberImage))}}" alt="member">
							<div class="team-box-2-overlay">
								<div class="team-box-2-name">
									<h4>{{$publishedEmployee->name}}</h4> 
									<h5>{{$publishedEmployee->address}}</h5> 
								</div>
								<div class="team-box-2-content"> <a href="#"><i class="fa fa-facebook-official"></i></a>  <a href="#"><i class="fa fa-twitter"></i></a>  <a href="#"><i class="fa fa-instagram"></i></a>  <a href="#"><i class="fa fa-twitter"></i></a> 
								</div>
							</div>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>

@endsection