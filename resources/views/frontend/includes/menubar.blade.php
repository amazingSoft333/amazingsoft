				@php
				$publishedLogo=\App\Logo::first();
				@endphp	
<nav id="navigation4" class="container navigation">
			<div class="nav-header">
				<a class="nav-brand" href="{{route('home')}}">
				@if(!$publishedLogo==null)
				<img src="{{asset('Image/LogoImage/'.$publishedLogo->logo)}}" class="main-logo" alt="logo" id="main_logo">
				@endif
				</a>
				<div class="nav-toggle"></div>
			</div>
			<div class="nav-menus-wrapper">
				<ul class="nav-menu align-to-right">
					<li class="active"><a href="{{url('/')}}">Home</a></li>
					 <li><a href="{{route('about')}}">About Us</a></li>
					<li><a href="#">Services</a> 
						<div class="megamenu-panel">
							<div class="megamenu-lists">
								<ul class="megamenu-list list-col-4">
									<li class="megamenu-list-title"><a href="#">Multi Purpose 01</a>
									</li>
									<li><a href="index.html">Home Page 01</a>
									</li>
									<li><a href="home-2.html">Home Page 02</a>
									</li>
									<li><a href="home-3.html">Home Page 03</a>
									</li>
								</ul>
								<ul class="megamenu-list list-col-4">
									<li class="megamenu-list-title"><a href="#">Multi Purpose 02</a>
									</li>
									<li><a href="home-4.html">Home Page 04</a>
									</li>
									<li><a href="home-5.html">Home Page 05</a>
									</li>
									<li><a href="home-6.html">Home Page 06</a>
									</li>
								</ul>
							</div>
						</div>
					</li>
					            @php
								$publishedCategories=\App\Packagecat::get();
								@endphp
					<li><a href="#">Packages</a> 
						<ul class="nav-dropdown">
							@foreach($publishedCategories as $publishedCategory)
							<li><a href="{{url('/packageContent/'.$publishedCategory->id)}}">{{$publishedCategory->category}}</a>
							</li>
							@endforeach
						</ul>
					</li>
					<li><a href="{{route('product')}}">Products</a> 

					</li>
					
					<li><a href="{{route('blog')}}">Blog</a> 

					</li>
					<li><a href="{{route('contact')}}">Contact</a> 
						
					</li>
					@if (Auth::guest())
					<li> <a href="{{url('/login')}}" ><button type="button" class="btn btn-primary btn-sm"><b>Sing In</b></button></a> 
					</li>


					<li> <a href="{{url('/register')}}" ><button type="button" class="btn btn-primary btn-sm"><b>Sing Up</b></button></a> 
					</li>
					@else
					<li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
								<li><a class="dropdown-item" href="{{url('/client/details')}}">Profile Edit</a></li>
									<li><a class="dropdown-item" href="{{route('setting')}}">Setting</a></li>
                                    <li>
                                        <a class="dropdown-item" href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();">
                                         Logout
                                        </a>

                                        <form id="logout-form" action="{{route('logout')}}" method="POST" style="display: none;">
                                            {{csrf_field()}}
                                        </form>
                                    </li>

                                </ul>
                            </li>
							@endif
							
					
				</ul>
				
			</div>
		</nav>