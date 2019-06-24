				@php
				$publishedLogo=\App\Logo::first();
				@endphp
				<nav id="navigation4" class="container navigation">
					<div class="nav-header">
						<a class="nav-brand" href="{{route('home')}}">
							@if(!$publishedLogo==null)
							<img src="{{asset('Image/LogoImage/'.$publishedLogo->logo)}}" class="main-logo" alt="logo"
								id="main_logo">
							@endif
						</a>
						<div class="nav-toggle"></div>
					</div>
					<div class="nav-menus-wrapper">
						<ul class="nav-menu align-to-right">

							@if (Auth::guest())
							<li> <a href="{{url('/login')}}"><button type="button" class="btn btn-primary btn-sm"><b>Sing
											In</b></button></a>
							</li>
							@else
							<li>

								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
									{{ Auth::user()->name }} <span class="caret"></span>
								</a>

								<ul class="dropdown-menu" role="menu">
									<li><a class="dropdown-item" href="{{url('/client/details')}}">Profile Edit</a></li>
									<li><a class="dropdown-item" href="{{route('setting')}}">Setting</a></li>
									<li>
										<a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
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