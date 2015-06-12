<?php

/** 
 * This class generates the phone numbers on the 
 * headers and footers.
 */
 
class Phone{

	/* Use this function if there are multiple phone numbers */
	public static function number($title){
		if($title == "water-heater"){
			return ("123-456-7890"); // Enter the number you want if you land on this page
		}else{
			return ("123-456-7890"); // Enter the number if it is not "water-heater"
		}
	}
	
	/* Use this function if there is only a single phone number */
	public static function number_single(){
		return "123-456-7891";
	}
}