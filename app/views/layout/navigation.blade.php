<nav class="top-bar" data-topbar role="navigation">
	<ul class="title-area">
		<li class="name">
			<h1><a href="{{URL::route('home')}}">Imgr</a></h1>
		</li>
		<li class="toggle-topbar menu-icon">
			<a href="#"><span>Menu</span></a>
		</li>
	</ul>
	<section class="top-bar-section">
		<!-- Right Nav Section --> 
		<ul class="right">
			@if(Auth::check())
				<li><a href="{{URL::route('logout')}}">Log out</a></li>
			@else
				<li><a href="{{URL::route('register')}}">Register</a></li>
				<li><a href="{{URL::route('login')}}">Sign in</a></li>
			@endif
		</ul>
		<!-- Left Nav Section -->
		<ul class="left">
			<li class="{{ (currentPage == "categories.php" ? 'active' : '') }}"><a href="categories.php">Upload images</a></li>
			<li class="{{ (currentPage == "images.php" ? 'active' : '') }}"><a href="newimage.php">New Image</a></li>
		</ul>
	</section>
</nav>