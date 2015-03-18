// (function(){
// 	$thumb = $('div.portfolio-flex').find('.placeholder');

// 	$thumb.on('mouseover', function() {
// 		$(this).find('span').slideUp();	
// 	});
// 	$thumb.on('mouseleave', function() {
// 		$(this).find('span').slideDown();	
// 	});

// 	$('.skills__info--bar').on('click', function() {
// 		$('.skills__info--text').css({'margin-bottom': '2em'}).slideToggle();
// 	});

// })();

(function() {

	var $placeholder = $('li.placeholder');

	$placeholder.on('click', function(e) {
		e.preventDefault();
		var $popUpWindow = $(this).children('a').attr('href');
		var $windowNumber = $(this).children('a').attr('rel');

		$($popUpWindow).fadeIn(1000);
		
		$( "#modal-window" ).load( "ajax/project-info.html #" + $windowNumber, function() {
			$('.fotorama').fotorama({
	            fit: 'none',
	            thumbwidth: 64,
	            thumbheight: 64
        	});
		});

		$('body').append('<div id="mask"></div>');

		$('#mask').fadeIn(600);
	});

	$closeButton = $('button.close');

	$(document).on('click', 'button.close, #mask', function() {
		
		$('#modal-window').fadeOut(1000);
		$('#mask').fadeOut(1000, function() {
			$('#mask').remove();	
		});		
	})

	$(document).keyup(function(e) {
    if(e.keyCode === 27) {
      $('#mask, #modal-window').fadeOut(400, function() {
         $('#mask').remove() 
      });

    }
  });

})();
