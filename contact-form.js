$(function() {
	var form = $('#contact-form');
	var formMessage = $('#contact-form-message');

	$(form).submit(function(event) {
		event.preventDefault();

		var formData = $(form).serialize();

		$.ajax({
			type: 'POST',
			url: $(form).attr('action'),
			data: formData
		})
			.done(function(response) {
				document.getElementById('contact-form').reset();
				grecaptcha.reset();
				$(formMessage).removeClass('text-danger');
				$(formMessage).addClass('text-success');
				$(formMessage).text(response);
			})
			.fail(function(data) {
				grecaptcha.reset();
				$(formMessage).removeClass('text-success');
				$(formMessage).addClass('text-danger');
				if (data.responseText !== '') {
					$(formMessage).text(data.responseText);
				} else {
					$(formMessage).text('An error occurred and your message could not be sent.');
				}
			});
	});
});
