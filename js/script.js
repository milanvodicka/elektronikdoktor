/* Author: Milan Vodicka

*/
$(function(){
	if($.browser.opera){
		// window.vodicka_transition = $.support.transition;
		$.support.transition = false;
		log('opera');
	}
	$('#referencie').carousel({ interval: 2000 });
	$('#featured').carousel({ interval: 5000 });
});



