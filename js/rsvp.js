jQuery(document).ready(function(){

	$('#rsvp-form').submit(function(){
		var action = $(this).attr('action'),
			events = new Array();

		$('#rsvp-form-submit-btn').attr('disabled','disabled').css('opacity', .5);

		$.post(action, {
				name: $('#rsvp-form-name').val(),
				email: $('#rsvp-form-email').val(),
			},
			function(data){
				$('#message').html(data);
				$('#rsvp-form-submit-btn').removeAttr('disabled').css('opacity', 1);
				if(data.match('Thank you') !== null) $('#rsvp-form').slideUp('fast', function(){
					$(window).resize();
				});
			}
		);

		return false;
	});

});