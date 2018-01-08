 var y = $(window).scrollTop();
	 var delayMillis = 3000; //1 second


if( /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) {
	setTimeout(function() {
 	$("html, body").animate({ scrollTop: y + ($(window).height())*1.5 }, 1200);
}, delayMillis);
}
else{
	setTimeout(function() {
 	$("html, body").animate({ scrollTop: y + $(window).height() }, 1200);
}, delayMillis);
}	

$('.image-product').on('click', function() { // when you click the div

  $(this).css({'pointer-events': 'none'})
	  setTimeout(function() {
	 	$(".image-product").css({'pointer-events': 'auto'});
	}, 2000);	  
});