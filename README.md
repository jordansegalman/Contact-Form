# Contact Form

This is a simple website contact form built with HTML, JavaScript, jQuery, PHP, and Bootstrap. It uses Ajax to asynchronously process form data and invoke the PHP mail() function. Submitted form inputs are validated and sanitized, and Google reCAPTCHA prevents spam and other types of automated abuse.

## Prerequisites

* PHP 5.6.x

## Installation

To incorporate this contact form into your website, add [contact.html](contact.html), [contact-form.js](contact-form.js), and [contact-form.php](contact-form.php) to your website files. You will also need to sign up for a Google reCAPTCHA v2 API key pair. Once you have received your site key and secret key, add the site key to contact.html where the YOURSITEKEY placeholder is and the secret key to contact-form.php where the YOURSECRETKEY placeholder is. Finally, add the recipient email address to contact-form.php where the RECIPIENTEMAIL placeholder is. You should now have a functional website contact form!

## License

This project is licensed under the MIT License. See the [LICENSE.md](LICENSE.md) file for details.
