<nav>
	<ul class="parent_menu"> 
		<li class="<?php if($title == "about-us") echo "active"; ?>"><a href="about-us.php">About Us</a></li>
		<li class="<?php if($title == "our-services" || in_array($title,$landing_page)) echo "active"; ?>">	
			<a href="our-services.php" class="menu-level-1">Our Services</a><img alt="menu-level-2" class="menu-level-2-1" src="images/menu-level-2.png"/>
			<div id="off-canvas-1">
				<img src="images/<?php echo $company_logo ;?>.png" class="logo img-responsive" alt="logo">
				<ul class="child-menu">
					<li class="<?php if($title == "breakers") echo "active"; ?>"><a href="breakers.php">Breakers</a></li>
					<li class="<?php if($title == "panels") echo "active"; ?>"><a href="panels.php">Panels</a></li>
					<li class="<?php if($title == "surge") echo "active"; ?>"><a href="surge.php">Surge</a></li>
				</ul>
				<div id="slide-overlay" style="display: none;"></div>
			</div>
		</li>
		<li class="<?php if($title == "testimonials") echo "active"; ?>"><a href="testimonials.php">Testimonials</a></li>
	</ul>
</nav>