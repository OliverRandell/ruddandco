$(document).ready(function(){
	$('body').on('click', '#contact-form .btn', function(event) {
		event.preventDefault();
		$.post('email.php', $('#contact-form').serialize(), function(data){
			$('#contact-form').hide();
		});
	});
});

