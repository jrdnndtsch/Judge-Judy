
// Main nav Drop Down and Slide in
var wp = {}
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
//fade out headers as scrolled
	$(window).on('scroll', function(){
		// wp.windowHeight = $(window).height();
		// wp.scrollHeight = $(window).scrollTop();
		// wp.scrollPercentage =  (wp.scrollHeight / wp.windowHeight);
		console.log($(this).scrollTop());
		if ($(this).scrollTop() > 150) {
		        $('.fadeOut').fadeOut(500);
		    } else {
		        $('.fadeOut').fadeIn(500);
		};
	});

});


