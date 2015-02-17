<nav class="top-bar" data-topbar role="navigation">
	<ul class="title-area">
		<li class="name">
			<h1><a href="index.php">My Site</a></h1>
		</li>
		<li class="toggle-topbar menu-icon">
			<a href="#"><span>Menu</span></a>
		</li>
	</ul>
	<section class="top-bar-section">
		<!-- Right Nav Section --> 
		<ul class="right">
			<li class="has-dropdown">
				<a href="#">Right Button Dropdown</a>
				<ul class="dropdown">
					<li><a href="#">First link in dropdown</a></li>
					<li class="active"><a href="#">Active link in dropdown</a></li>
				</ul>
			</li>
		</ul>
		<!-- Left Nav Section -->
		<ul class="left">
			<li class="{{ (currentPage == "index.php" ? 'active' : '') }}"><a href="index.php">Home</a></li>
			<li class="{{ (currentPage == "categories.php" ? 'active' : '') }}"><a href="categories.php">Categories</a></li>
			<li class="{{ (currentPage == "images.php" ? 'active' : '') }}"><a href="newimage.php">New Image</a></li>
		</ul>
	</section>
</nav>