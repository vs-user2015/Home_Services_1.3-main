<?php 
	include "include/header.inc.php" ; 
	include "include/article.inc.php" ; 
?>

<!-- SECTION -->	
<section>
	<div class="copy_wrapper">
		<div class="left-ribbon"></div>
		<div id="content" class="container">
			<div class="row">
			
				<!-- COPY -->
				<div id="left-content" class="col-sm-8">
					<h1>Your <?php echo ucwords(str_replace("-", " ", $_GET["expansion"])); ?> Plumbing Experts</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean pulvinar in urna consectetur viverra. Pellentesque varius ornare ultrices. Aliquam in diam faucibus, dapibus tortor at, laoreet velit. Maecenas felis lectus, tristique vulputate libero nec, condimentum porta eros. Nam semper mattis mi eu dapibus. Morbi sed rhoncus augue, vel cursus eros. Sed ac varius odio. Fusce viverra pulvinar mollis.</p>
				</div>
				
				<!-- ASIDE -->
				<?php include "include/aside.inc.php" ; ?>
			</div>
		</div>
		<div class="right-ribbon"></div>
		<div class="clear"></div>
	</div>
</section>
		
<!-- FOOTER -->
<?php include "include/footer.inc.php" ; ?>

