<?php
	
	/**
	 * The global file produces all the variables and arrays
	 */
	require_once "global/global_variable.php";
  
	/**
	 * Files that are needed to produce coupons, meta keywords,
	 * meta descriptions and the phone number.
	 * 
	 */ 
	require_once "class/coupon.class.php";
	require_once "class/meta.class.php";
	require_once "class/phone.class.php";
?>

<!DOCTYPE html>

<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="description" content="<?php echo Meta::meta_description($title,$meta_descriptions) ; ?>">
		<meta name="keywords" content="<?php echo Meta::meta_keyword($title,$meta_keywords) ; ?>">
		<!--link rel="shortcut icon" href="../../docs-assets/ico/favicon.png"-->

		<title><?php echo $company_name . " | " . title($title) ; ?></title>

		<!-- Bootstrap core CSS -->
		<link href="css/bootstrap.css" rel="stylesheet">

		<!-- Custom styles for this template -->
		<link href="css/vs_style.css" rel="stylesheet">

		<!-- Just for debugging purposes. Don't actually copy this line! -->
		<!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
		<![endif]-->
		
		<!-- JQUERY SOURCE FILE -->
		<script src="js/jquery.1-10-2.min.js" type="text/javascript"></script>
		<script type="text/javascript">
			var random = "907bak-kls78990";
			var ca = document.cookie="_vsref=" + random;
			ca = ca.split("=")[1];
		</script>
		
		<!-- GOOGLE FONTS -->
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	</head>