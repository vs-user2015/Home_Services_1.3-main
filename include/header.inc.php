<?php include "include/head.inc.php" ; ?>
	<body>
		<!-- HEADER -->
		<header>
			<div class="container">
				<div class="col-xs-12 col-sm-5" id="logo">
					<img src="images/<?php echo $company_logo ;?>.png" class="logo img-responsive" alt="logo">
				</div>
				<div class="col-xs-12 col-sm-7" id="right-header">
					<div class="contact_us">
						<p class="title">CALL <a href="tel:<?php echo Phone::number_single() ; ?>"><?php echo Phone::number_single() ; ?></a></p>
						<p class="sub-title">
							<b>Local and Trusted Plumbing Experts</b>
						</p>
					</div>
					
					<!-- NAV -->
					<?php include "include/nav.inc.php" ; ?>
				</div>
			</div>
			
			<!-- BANNER -->
			<div class="coupon-wrapper container">
				<div  class="col-sm-5 col-sm-offset-7">
					<?php echo Coupon::name($title,$coupon_name,$coupon_staging,$client_id) ; ?>
				</div>
			</div>
			<?php include "include/contact-form.php" ; ?>
		</header>