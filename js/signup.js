$(document).ready(function(){

	$('.typeBtn').click(function(){
		$('.typeBtn').each(function(){
			$(this).removeClass('activeClass');
		});

		$('.userType').attr('value', $(this).attr('value'));
		$(this).addClass('activeClass');
	});

});