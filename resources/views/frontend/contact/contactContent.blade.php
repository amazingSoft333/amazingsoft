@extends('frontend.master')
@section('maincontent')
        @php
				$publishedContactBanner=\App\Contactbanner::first();
				@endphp
<div class="page-title-section" style="background-image:@if(!$publishedContactBanner==null) url({{asset('Image/ContactBannerImage/'.$publishedContactBanner->banner)}})@endif;">
		<div class="container">
			<h1>Contact</h1> 
			<ul>
				<li><a href="index.html">Home</a>
				</li>
				<li><a href="contact.html">Contact</a>
				</li>
			</ul>
		</div>
	</div>

    <div class="section-block">
		<div class="container">
			<div class="row">
				<div class="col-md-7 col-sm-7 col-12">
					<div class="section-heading mt-15">
						<h4>Let's Talk about Your Business</h4> 
						<div class="section-heading-line-left"></div>
					</div>
					<div class="contact-form-box mt-30">
						<form class="contact-form">
							<div class="row">
								<div class="col-md-12">
									<input type="text" name="subject" placeholder="Subject">
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<input type="text" name="name" placeholder="Name">
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<input type="email" name="email" placeholder="E-mail">
								</div>
								<div class="col-md-12">
									<textarea name="message" placeholder="Message"></textarea>
								</div>
								<div class="col-md-12 mb-30">
									<div class="center-holder">
										<button type="submit">Send Message</button>
									</div>
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="col-md-5 col-sm-5 col-12">
					<div class="contact-info-box">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-12">
								<div class="contact-info-section">
									<div class="row">
										<div class="col-md-2 col-sm-2 col-4 center-holder"> <i class="fa fa-phone"></i> 
										</div>
				@php
				$publishedContactNumbers=\App\Contactad::get();
				@endphp
										<div class="col-md-10 col-sm-10 col-8">
											<h4>Call Us</h4> 
											@foreach($publishedContactNumbers as $publishedContactNumber)
											<p>{{$publishedContactNumber->number}}</p>
									  	@endforeach
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-12">
								<div class="contact-info-section">
									<div class="row">
										<div class="col-md-2 col-sm-2 col-4 center-holder"> <i class="fa fa-envelope-open"></i> 
										</div>
				@php
				$publishedContactEmails=\App\Contactad::get();
				@endphp
										<div class="col-md-10 col-sm-10 col-8">
											<h4>Email</h4> 
											@foreach($publishedContactEmails as $publishedContactEmail)
											<p>{{$publishedContactEmail->email}}</p>
											@endforeach
										</div>
									</div>
								</div>
							</div>
				@php
				$publishedContactInfo=\App\Contactinfo::first();
				@endphp
							<div class="col-md-12 col-sm-12 col-12">
								<div class="contact-info-section">
									<div class="row">
										<div class="col-md-2 col-sm-2 col-4 center-holder"> <i class="fa fa-globe"></i> 
										</div>
										<div class="col-md-10 col-sm-10 col-8">
											<h4>Our Location</h4> 
											<p>@if(!$publishedContactInfo==null){{$publishedContactInfo->address}}@endif</p>
											
										</div>
									</div>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-12">
								<div class="contact-info-section">
									<div class="row">
										<div class="col-md-2 col-sm-2 col-4 center-holder"> <i class="fa fa-clock-o"></i> 
										</div>
										<div class="col-md-10 col-sm-10 col-8">
											<h4>Working Hours</h4> 
											<p>@if(!$publishedContactInfo==null){!!$publishedContactInfo->information!!}@endif</p>
											
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div id="map" class="mt-10">
		<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBk25E4mNfVIEt3tNl3K1HwNZVruVoFBlA&amp;callback=initMap">
		</script>
	</div>

@endsection