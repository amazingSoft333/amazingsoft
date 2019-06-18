@extends('frontend.master')
@section('maincontent')
        @php
				$publishedBlogBanner=\App\Blogbanner::first();
				@endphp
<div class="page-title-section" style="background-image:@if(!$publishedBlogBanner==null)url({{asset('Image/BlogBanner/'.$publishedBlogBanner->banner)}})@endif;">
		<div class="container">
			<h1>Blog List</h1> 
			<ul>
				<li><a href="index.html">Home</a>
				</li>
				<li><a href="blog-list-sidebar.html">Blog List</a>
				</li>
			</ul>
		</div>
	</div>

    <div class="section-block">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8 col-12">
				@php
				$publishedBlogs=\App\Blog::paginate(3);
				@endphp	
				@foreach($publishedBlogs as $publishedBlog)
					<div class="blog-list-left">
						<img src="{{(asset('Image/BlogImage/'.$publishedBlog->blogImage))}}" alt="img">
						<div class="blog-title-box">
							<h2>{{$publishedBlog->blogTitle}}</h2><span><i class="fa fa-calendar"></i>{{$publishedBlog->created_at->format('d:M:Y')}}</span>  <span><i class="fa far fa-user"></i>By Admin</span> 
						</div>
						<div class="blog-post-content">
							<p>{!!\Illuminate\Support\Str::words($publishedBlog->information,50,'....')!!}</p>
						</div>
						<div class="mt-15 mb-40"> <a href="{{url('/blogDetail/'.$publishedBlog->id)}}" class="primary-button button-md">Read Article</a> 
						</div>
					</div>
				@endforeach
				
				</div>
				@php
				$publishedBlogCategories=\App\Blogcategory::get();
				@endphp
				<div class="col-md-3 col-sm-4 col-12">
					<div class="blog-list-right">
						<div id="search-input">
							<div class="input-group">
								<input type="text" class="form-control" placeholder="Search" /> <span class="input-group-btn"><button class="btn" type="button"><i class="glyphicon glyphicon-search"></i></button> </span> 
							</div>
						</div>
			
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

				<div  class="col-sm-12 text-right pull-right">
				         <ul class="pagination pagination-sm m-t-none m-b-none pull-right">
				           {{ $publishedBlogs->links() }}

				         </ul>
       				</div>		
			</div>
		</div>
	</div>
@endsection