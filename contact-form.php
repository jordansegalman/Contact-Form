<?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$name = strip_tags(trim($_POST["name"]));
		$name = str_replace(array("\r","\n"),array(" "," "),$name);
		$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
		$message = trim($_POST["message"]);
		if (isset($_POST['g-recaptcha-response'])) {
			$captcha = $_POST['g-recaptcha-response'];
		}
		if (!$captcha) {
			http_response_code(400);
			echo 'Please check the reCAPTCHA.';
			exit;
		}

		if (empty($name) OR empty($email) OR empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL) OR empty($captcha)) {
			http_response_code(400);
			echo "Oops! There was a problem with your submission. Please complete the form and try again.";
			exit;
		}

		$recipient = "EMAIL";

		$subject = "Contact Form Message";

		$email_content = "Name: $name\n";
		$email_content .= "Email: $email\n\n";
		$email_content .= "Message:\n$message\n";

		function isValid() {
			try {
				$url = 'https://www.google.com/recaptcha/api/siteverify';
				$data = ['secret'   => 'YOURSECRET','response' => $_POST['g-recaptcha-response'],'remoteip' => $_SERVER['REMOTE_ADDR']];
				$options = ['http' => ['header' => "Content-type: application/x-www-form-urlencoded\r\n",'method' => 'POST','content' => http_build_query($data)]];
				$context  = stream_context_create($options);
				$result = file_get_contents($url, false, $context);
				return json_decode($result)->success;
			}
			catch (Exception $e) {
				return null;
			}
		}

		$response = isValid();

		if ($response !== true) {
			http_response_code(400);
			echo "You are a robot!";
		} else {
			if (mail($recipient, $subject, $email_content)) {
			http_response_code(200);
			echo "Thank you! Your message has been sent. I will get back to you as soon as possible.";
			} else {
			http_response_code(500);
			echo "Oops! Something went wrong and we couldn't send your message.";
			}
		}
	} else {
		http_response_code(403);
		echo "There was a problem with your submission, please try again.";
	}
?>
