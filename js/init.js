(function(){
	
	if($(window).width() <= 767){
		var content_2 = $("#content-2");
	
		$("footer").before(content_2);
	}
	
	/* Popup coupon 
	 *
	 * This is for the pop up coupon.
	 *
	 */
	
	var coupon = document.querySelector(".print-button");
	
	coupon.addEventListener("click",openCoupon,false);
	
	function titleOfPage(){
		// Get the pathname of the file that is currently open
		// on the browser
		var pathString = window.location.pathname;
		
		/* Split the path name into array elements using
		 * the (/) as the delimiter to separate each element.
		 */ 
		var pageName = pathString.split("/");
		
		/* Select the last array element, which
         * is the file name.
		 */
		pageName = pageName[pageName.length - 1];
		
		/* Remove the .php extension from the file name. */
		pageName = pageName.substring(0,pageName.length - 4)
		
		return pageName;
	}
	
	function openCoupon(){
		window.open("coupon/specials.php?current_special=" + titleOfPage(),"specials","width=" + screen.width + ",height=" + screen.height + ",fullscreen=yes");
	}
	
	/* Get the day of the week */
	var day = new Date().getDay();
	
	function day_of_week(day){
		switch(day){
			case 1:
				return "Monday";
				break;
			case 2:
				return "Tuesday";
				break;
			case 3:
				return "Wednesday";
				break;
			case 4:
				return "Thursday";
				break;
			case 5:
				return "Friday";
				break;
			case 6:
				return "Saturday";
				break;
			case 7:
				return "Sunday";
				break;
		}
		
		return (day);
	}
	
})();

