<!DOCTYPE html>
<html lang="en">
	<head>
		<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<script src='https://www.google.com/recaptcha/api.js'></script>
	</head>
	<body>
		<div class="container">
			<form id="contact-form" method="post" action="contact-form.php">
				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<label for="name">Name</label>
							<input type="text" id="name" name="name" required="required" class="form-control">
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-6">
						<div class="field">
							<label for="email">Email</label>
							<input type="email" id="email" name="email" required="required" class="form-control">
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-8">
						<div class="field">
							<label for="message">Message</label>
							<textarea id="message" name="message" rows="6" required="required" class="form-control"></textarea>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<div class="g-recaptcha" data-sitekey="YOURSITEKEY"></div>
						</div>
					</div>
				</div>
				<br>
				<div class="row">
					<div class="col-md-12">
						<div class="field">
							<button type="submit" class="btn btn-default">Send</button>
						</div>
					</div>
				</div>
			</form>
			<br>
			<div class="row">
				<div class="col-lg-12 col-md-12">
					<div id="form-message"></div>
				</div>
			</div>
		</div>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<script src="contact-form.js"></script>
	</body>
</html>