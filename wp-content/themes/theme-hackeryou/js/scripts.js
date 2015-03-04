
// Main nav Drop Down and Slide in

$(function(){
	
	$('.navicon').on('click', function(){
		var options = {direction: "left"};
		$('.sidebar').toggleClass('comeIn');
	 
	});

	$('.booking').on('click', function(){
		$('.bookingSpace').slideToggle(1000);
	});
});

