@extends('frontend.master')
@section('maincontent')
<div class="section-block">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8 col-12">
					<div class="blog-list-left">
						<img src="{{asset('frontend/img/blog/blog-post.jpg')}}" alt="img">
						<div class="data-box">
							<h4>23</h4>  <strong>Mar</strong> 
						</div>
						<div class="blog-title-box">
							<h2>Save Time & Money In Your Business</h2>  <span><i class="fa fa-calendar"></i>Feb 19, 2018</span>  <span><i class="fa fa-list-ul"></i>Business</span> 
						</div>
						<div class="blog-post-content">
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
							<blockquote class="blockquote">
								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries.</p>
								<h4>- Tomas Edison</h4> 
							</blockquote>
							<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. but also the leap into electronic typesetting, remaining essentially unchanged.It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum</p>
							<div class="row mt-30">
								<div class="col-md-6 col-sm-6 col-12">
									<div class="blog-list-img">
										<div class="video-video-box full-width">
											<img src="{{asset('frontend/img/blog/blog-6.jpg')}}" class="rounded-border" alt="img">
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
						<div class="blog-list-left-heading">
							<h4>Categories</h4> 
						</div>
						<div class="blog-categories">
							<ul>
								<li><a href="#">All Topics</a>
								</li>
								<li><a href="#">Business Solutions</a>
								</li>
								<li><a href="#">Finance Services</a>
								</li>
								<li><a href="#">Market Research</a>
								</li>
								<li><a href="#">Professional Planning</a>
								</li>
								<li><a href="#">World of Business</a>
								</li>
							</ul>
						</div>
						
						
					
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection