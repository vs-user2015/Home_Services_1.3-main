<?php
class Coupon{
	public static function name($title,$coupon_name,$coupon_staging,$client_id){
		$coupon_container = "";
		
		if(in_array($title,$coupon_name)){
			$coupon_container .= "<div class='coupon_" . $title . "' style='background: url(" . $coupon_staging . "/" . $client_id . "/" . $title . ".png) no-repeat;background-size: 100%'>";
			$coupon_container .= "<p><img alt='" . $title . "' class='print-button' src='images/print-button.png' title='" . $title . "'>Call this <b>" . date("l"). "</b> for</p>";
			$coupon_container .= "</div>";
		}else{
			$coupon_container .= "<div class='coupon_default' style='background: url(" . $coupon_staging . "/" . $client_id . "/default.png) no-repeat;background-size: 100%'>";
			$coupon_container .= "<p><img alt='print coupon' class='print-button' src='images/print-button.png' title='print coupon'>Call this <b>" . date("l"). "</b> for</p>";
			$coupon_container .= "</div>";
		}
		
		return $coupon_container;
	}
}
