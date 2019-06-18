@extends('frontend.master')
@section('maincontent')
<div class="page-title-section" style="background-image: url({{asset('frontend/img/slider/banner01.jpg')}});">
		<div class="container">
			<h1>Blog Detail</h1> 
			<ul>
				<li><a href="index.html">Home</a>
				</li>
				<li><a href="blog-post.html">Blog Detail</a>
				</li>
			</ul>
		</div>
	</div>

    <div class="section-block">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8 col-12">
					<div class="blog-list-left">
						<img src="{{(asset('Image/BlogImage/'.$blogById->blogImage))}}" alt="img">
						<div class="data-box">
							<h4>23</h4>  <strong>Mar</strong> 
						</div>
						<div class="blog-title-box">
							<h2>{{$blogById->blogTitle}}</h2>  <span><i class="fa fa-calendar"></i>{{$blogById->created_at->format('d:M:Y')}}</span>  <span><i class="fa far fa-user"></i>By Admin</span> 
						</div>
						<div class="blog-post-content">
							<p>{!!$blogById->information!!}</p>
							<div class="row mt-30">
								<div class="col-md-6 col-sm-6 col-12">
									<div class="blog-list-img">
										<div class="video-video-box full-width">
											<img src="{{(asset('Image/BlogImage/'.$blogById->blogImage))}}" class="rounded-border" alt="img">
											<div class="video-video-box-overlay">
												<div class="video-video-box-button">
													<button class="video-video-play-icon" data-toggle="modal" data-target=".video-modal"> <i class="fa fa-play"></i> 
													</button>
												</div>
											</div>
										</div>
										<div class="modal fade video-modal" id="videomodal1" tabindex="-1" role="dialog">
											<div class="modal-dialog modal-lg" role="document">
												<iframe height="415" src="https://www.youtube.com/embed/EWzsJG07vHY" class="full-width round-frame image-shadow" allowfullscreen=""></iframe>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-6 col-sm-6 col-12">
									<div class="blog-list-bottom-text">
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. but also the leap into electronic typesetting, remaining essentially unchanged.It was popularised in the 1960s with Letraset.</p>
									</div>
								</div>
							</div>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. but also the leap into electronic typesetting, remaining essentially unchanged.It was popularised in the 1960s with Letraset.</p>
						
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-4 col-12">
					<div class="blog-list-right">
						<div id="search-input">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search" /> <span class="input-group-btn"><button class="btn" type="button"><i class="glyphicon glyphicon-search"></i></button> </span> 
							</div>
						</div>
				@php
				$publishedBlogCategories=\App\Blogcategory::get();
				@endphp
						<div class="blog-list-left-heading">
							<h4>Categories</h4> 
						</div>
						<div class="blog-categories">
							<ul>
							@foreach($publishedBlogCategories as $publishedBlogCategory)
								<li><a href="#">{{$publishedBlogCategory->category}}</a>
								</li>
							@endforeach
							</ul>
						</div>
						<div class="blog-list-left-heading">
							<h4>Recent News</h4> 
						</div>
						@foreach($publishedRecentNews as $publishedRecentNews)
						<div class="latest-posts">
							<div class="row">
								<div class="col-md-5 col-sm-5 col-4 latest-posts-img">
									<img src="{{(asset('Image/BlogImage/'.$publishedRecentNews->blogImage))}}" alt="blog-img">
								</div>
								<div class="col-md-7 col-sm-7 col-8 latest-posts-text pl-0"> <a href="#">{{$publishedRecentNews->blogTitle}}</a>  <span>{{$publishedRecentNews->created_at->format('d:M:Y')}}</span> 
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection