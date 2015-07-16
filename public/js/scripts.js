(function(){

	/*Contact Us Message Submit*/

	var submit = $(":button"),
		message = $('p#message');
	
	submit.on('click', function(event){
		message.fadeToggle('slow');		
	});
	
	

/*Go to Top function */

	var top = $('.top');
	top.on('click', function(){
		console.log('jjd');
	})

	$(window).scroll(function(){
		
		var scroll_height = $(this).scrollTop();

		if(scroll_height > 500)
		{
			top.fadeIn();
		}
		else{
			top.fadeOut();
		}
	});

	top.on('click', function(event){
		event.preventDefault();
		$('html, body').animate({scrollTop: 0}, 3000);
		return false;
	});

	top.hover(function(){
		$('p.tip').fadeToggle();
	});


})();