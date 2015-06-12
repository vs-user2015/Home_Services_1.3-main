<?php 

/**
 * This is company's primary and secondary colors
 * primary #------
 * secondary #-------
 * third #-------
 */

/**
 * This variable is to be used to output the 
 * client's name in the tab.  Change the value
 * to the client's name.
 */
$company_name = "Generic Name, Inc.";

/**
 * This is the client's website URL
 */
$url = "http://metrosewerandplumbing.com/";

/**
 * The client id that is where the coupons are stored
 */
$client_id = "coupon_placeholder";

/**
 * This is the server where the coupon folders exists.
 */
$coupon_staging = "http://elements.vitalstorm.com/elements";

/**
 * This variable is used to output 
 * VitalStorms link on the footer.
 * Do not change it.
 */
$vs_name = "Marketing by <a target='_blank' href='http://vitalstorm.com/'>VitalStorm</a>";

/**
 * This outputs the date.  No need to change it.
 */
$copy = "Copyright &copy; " . date("Y") . " " . $company_name . " <br>All Rights Reserved";

/**
 * This will output the title of the page.
 */
$title = substr(basename($_SERVER["PHP_SELF"]),0,-4);

/**
 * The variable is for the logo on the top left and
 * on the mobile menu overlay.  
 *
 * Insert it into the <img> tag src attribute as a value.
 */
$company_logo = "Drain_Solvers_Logo";

/**
 * Strip dashes or unwanted characters from the page file.
 * 
 * This function is used for the title on the browser tabs.
 *
 */
function title($title){
	$title = ucwords(str_replace("-"," ",$title));
	return $title;
}
		
/**
 * This is for the meta tag keywords.  The variable is used by
 * the meta class file.  Add the key and value for each page file
 * as needed.
 */
$meta_keywords = array(
	"about-us" 			=> "Local plumbers, Drain cleaning, plumbing, local plumbers, plumbing services",
);

/**
 * The city query string that goes into the h1 tags
 */
function city_name(){
	if(isset($_GET["expansion"])){
		return ucwords(str_replace("-", " ", $_GET["expansion"]));
	}else{
		return "";
	}
}

/**
 * This is for the meta tag descriptions.  The variable is used by
 * the meta class file.  Add the key and value for each page file
 * as needed.
 */
$meta_descriptions = array(
	"about-us" 			=> "Drain Solvers is your most trusted residential and commercial plumbing expert. We’re experienced enough to handle all your plumbing problems. From backed up sewer lines to leaky faucets and everything in between. Whatever the job, large or small, Drain Solvers will be there when you need us.",
	
);

/* 
 * Add values in for each coupon as needed.
 *
 * This variable is used by the coupon class
 * in the coupon.class.php file.
 *
 * The coupon values should match the 
 * file name.  Add the neccessary css 
 * to correspond to the file name.
 *
 */
$coupon_name = array(
	"breakers",
	"panels",
	"surge"
);

/* 
 * Add values in for each services page as needed.
 *
 * This variable is used to create an active state 
 * for the navigation in the nav.inc.php file.
 *
 */
$landing_page = array(
	"breakers",
	"panels",
	"surge"
);
