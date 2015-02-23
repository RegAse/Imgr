<nav class="top-bar" data-topbar role="navigation">
	<ul class="title-area">
		<li class="name">
			<h1><a href="{{URL::route('home')}}">Imgr</a></h1>
		</li>
		<li class="toggle-topbar menu-icon">
			<a href=""><span>Menu</span></a>
		</li>
	</ul>
	<section class="top-bar-section">
		<!-- Right Nav Section -->
		<ul class="right">
			@if(Auth::check())
				<li class="has-dropdown">
        			<a href="#">{{Auth::user()->username}}</a>
        			<ul class="dropdown">
        				<li><a href="{{URL::route('profile',array(Auth::user()->username))}}">Profile</a></li>
        				<li><a href="{{URL::route('account')}}">Account</a></li>
						<li><a href="{{URL::route('logout')}}">Sign Out</a></li>
        			</ul>
      			</li>
			@else
				<li><a href="{{URL::route('register')}}">Register</a></li>
				<li><a href="{{URL::route('login')}}">Sign in</a></li>
			@endif
		</ul>
		<!-- Left Nav Section -->
		<ul class="left">
			@if(Auth::check())
				<li><a href="{{URL::route('image-upload')}}">Upload Image</a></li>
			@endif
		</ul>
	</section>
</nav>