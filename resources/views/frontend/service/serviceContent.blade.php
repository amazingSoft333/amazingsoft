@extends('frontend.master')
@section('content')
<div class="section-block">
		<div class="container">
			<div class="row">
				<div class="col-md-9 col-sm-8 col-12">
					<div class="blog-list-left">
						<img src="img/blog/blog-post.jpg" alt="img">
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
											<img src="img/blog/blog-6.jpg" class="rounded-border" alt="img">
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
							<div class="blog-comments mt-50">
								<h3 class="mt-0">All Comments:</h3> 
								<div class="blog-comment-user">
									<div class="row mt-20">
										<div class="col-md-1 hidden-sm-down pr-0">
											<img src="img/blog/user.png" alt="user">
										</div>
										<div class="col-md-11 col-12">
											<div class="comment-block">
												<h6>John Doe</h6><strong>07.03.2018</strong> 
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.</p>
											</div>
										</div>
									</div>
								</div>
								<div class="blog-comment-user">
									<div class="row">
										<div class="col-md-1 hidden-sm-down pr-0">
											<img src="img/blog/user2.png" alt="user">
										</div>
										<div class="col-md-11 col-12">
											<div class="comment-block">
												<h6>Emily Watson</h6><strong>10.03.2018</strong> 
												<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus. Donec auctor et urnaLorem ipsum dolor sit amet, consectetur adipiscing elit. Cras lacinia magna vel molestie faucibus.</p>
											</div>
										</div>
									</div>
								</div>
								<h3 class="mt-30">Your Comment:</h3> 
								<form class="comment-form" method="post" autocomplete="off">
									<div class="row">
										<div class="col-6">
											<input name="name" placeholder="Your Name">
										</div>
										<div class="col-6">
											<input name="email" placeholder="E-mail adress" type="email">
										</div>
										<div class="col-12">
											<textarea name="message" placeholder="Your Message"></textarea>
										</div>
									</div>
								</form>
								<div class="mt-10 left-holder"> <a href="#" class="primary-button button-md">Send Comment</a> 
								</div>
							</div>
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
						<div class="blog-list-left-heading">
							<h4>Recent News</h4> 
						</div>
						<div class="latest-posts">
							<div class="row">
								<div class="col-md-5 col-sm-5 col-4 latest-posts-img">
									<img src="img/blog/b-t-1.jpg" alt="blog-img">
								</div>
								<div class="col-md-7 col-sm-7 col-8 latest-posts-text pl-0"> <a href="#">Simply dummy text of the printing</a>  <span>Mar 13, 2018</span> 
								</div>
							</div>
						</div>
						<div class="latest-posts">
							<div class="row">
								<div class="col-md-5 col-sm-5 col-4 latest-posts-img">
									<img src="img/blog/b-t-2.jpg" alt="blog-img">
								</div>
								<div class="col-md-7 col-sm-7 col-8 latest-posts-text pl-0"> <a href="#">Simply dummy text of the printing</a>  <span>Mar 19, 2018</span> 
								</div>
							</div>
						</div>
						<div class="latest-posts">
							<div class="row">
								<div class="col-md-5 col-sm-5 col-4 latest-posts-img">
									<img src="img/blog/b-t-3.jpg" alt="blog-img">
								</div>
								<div class="col-md-7 col-sm-7 col-8 latest-posts-text pl-0"> <a href="#">Simply dummy text of the printing</a>  <span>Mar 27, 2018</span> 
								</div>
							</div>
						</div>
						<div class="blog-list-left-heading">
							<h4>Archives</h4> 
						</div>
						<div class="archives">
							<ul>
								<li><a href="#">January 03</a>  <span>(09)</span>
								</li>
								<li><a href="#">February 17</a>  <span>(13)</span>
								</li>
								<li><a href="#">March 23</a>  <span>(03)</span>
								</li>
								<li><a href="#">April 19</a>  <span>(07)</span>
								</li>
								<li><a href="#">May 07</a>  <span>(16)</span>
								</li>
							</ul>
						</div>
						<div class="blog-list-left-heading">
							<h4>Tags</h4> 
						</div>
						<div class="mt-10"> <a href="#" class="button-tag primary-button">Funding</a>  <a href="#" class="button-tag primary-button">Merchant</a>  <a href="#" class="button-tag primary-button">Job</a>  <a href="#" class="button-tag primary-button">Wallet</a>  <a href="#" class="button-tag primary-button">Technology</a>  <a href="#" class="button-tag primary-button">Coin</a>  <a href="#" class="button-tag primary-button">Funding</a>  <a href="#" class="button-tag primary-button">Transaction</a> 
						</div>
						<div class="blog-list-left-heading">
							<h4>Share Links</h4> 
						</div>
						<div class="blog-share">
							<ul>
								<li><a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
								<li><a href="#"><i class="fa fa-skype"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection