
$(document).ready(function(){
	
	//slide menu
	$(".menu-level-2-1").click(function () {
		$("#off-canvas-1").animate({
			left: '0'
			}, 'slow', function() {
			//animation complete.
			});
			$('#slide-overlay').fadeIn('slow', function() {
			// Animation complete
			});
		});
			
	$('#slide-overlay,#off-canvas-1 img').click(function() {
		$("#off-canvas-1").animate({
			left: '-=100%'
			}, 'slow', function() {
			//animation complete.
			});
		$('#slide-overlay').fadeOut('slow', function() {
			// Animation complete
		});
	});
});
	