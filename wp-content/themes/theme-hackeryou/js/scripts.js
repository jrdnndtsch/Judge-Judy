
// Main nav Drop Down and Slide in

$(function(){
	
	$('.navicon').on('click', function(){
		$('.naviconIcon').toggleClass('naviconIcon2');
		// $('.sidebar').toggleClass('comeIn');
		// $('.heroImg').toggleClass('moveOver');
		$('.sidebar').toggle('slide', {direction: 'right'}, 500);
	 
	});

	$('.booking').on('click', function(){
		$('.bookingSpace').slideToggle(1000);
	});
});

