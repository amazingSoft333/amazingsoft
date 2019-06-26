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
			                    @php
								$publishedServiceGets=\App\Servicecat::get();
								@endphp
					<li><a href="#">Services</a> 
						<ul class="nav-dropdown">
							@foreach($publishedServiceGets as $publishedServiceGet)
							<li><a href="{{url('/serviceContent')}}">{{$publishedServiceGet->category}}</a>
							</li>
							@endforeach
						</ul>
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
					<li><a href="{{route('producthome')}}">Products</a> 

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