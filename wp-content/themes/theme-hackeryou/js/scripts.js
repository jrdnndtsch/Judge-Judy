
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
		// console.log($(this).scrollTop());
		if ($(this).scrollTop() > 150) {
		        $('.fadeOut').fadeOut(500);
		    } else {
		        $('.fadeOut').fadeIn(500);
		};
	});

	// $(window).on('scroll', function(){
	// 	console.log($(window).scrollTop())
	// 	if($(this).scrollTop() > 90){
	// 	 $('.aboutNar').fadeIn(500);	
	// 	 $('.aboutQuote').fadeIn(500);
	// 	}
	// 	else{
	// 		$('.aboutNar').fadeOut(500);
	// 		$('.aboutQuote').fadeOut(500);
	// 	}
	// });

});


