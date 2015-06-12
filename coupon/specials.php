<?php
	require_once "../global/global_variable.php";
	require_once "../class/coupon.class.php";
  
	/**
     * Get the coupon name from the query string.
     */
	if(isset($_GET["current_special"])){
		switch($_GET["current_special"]){
			case "":
			case "about-us":
			case "testimonials":
			case "coupons":
				$current_special = "default";
				break;
			default:
				$current_special = $_GET["current_special"];
				break;
		}	
	}
?>

<!doctype html>


<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link href="specials.css" rel="stylesheet" type="text/css">
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
		
	</head>
	<body>
		<section id="coupon-deal">
			<div class="button">
				<img alt="<?php echo $company_name ; ?>" class="logo" src="../images/<?php echo $company_logo ; ?>.png">
				<div class="day-of-week">
					<p><?php echo "Call this <b>" . date("l") . "</b> for" ; ?></p>
				</div>
				<img alt="<?php echo $company_name ; ?>" class="coupon-image" src="<?php echo $coupon_staging . "/" . $client_id . "/" . $current_special ; ?>.png">
				<p class="close">Close</p>
				<p class="print">Print</p>
			</div>
		</section>
		<!-- JQUERY SOURCE FILE -->
		<script src="../js/jquery.1-10-2.min.js" type="text/javascript"></script>
		
		<!-- JQUERY FUNCTIONS -->
		<script src="../js/init.js" type="text/javascript"></script>		
		<script type="text/javascript">
			// Javascript to print the coupon
			var exitCoupon = document.querySelector(".close");
			var selectCoupon = document.querySelector(".print");

			exitCoupon.addEventListener("click",closeCoupon,false);
			selectCoupon.addEventListener("click",printCoupon,false);

			function closeCoupon(){
				window.close();
			}

			function printCoupon(){
				window.print();
			}
		</script>
	</body>
</html>