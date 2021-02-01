<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>CONTACT US</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/contactUs.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/contactUs.js"></script>
</head>
<body>
	<div class="container mt-5">
		<div class="card text-center border-0 w-50">
			<div class="card-header header">
				<h2 class="text-white"> CONTACT US! </h2>
			</div>
			<form action="contactUs.php" method="post" class="form" onsubmit="return validate_form()">
				<div class="card-body main">
					<div class="mt-3">
						<input type="text" name="name" id="name" class="form-control field" 
						placeholder="Name..."><br>
						<span class="text-danger" id="nameError"></span>
					</div>

					<div class="mt-3">
						<input type="email" id="email" name="email" class="form-control field" 
						placeholder="Email..."><br>
						<span class="text-danger" id="emailError"></span>
					</div>

					<div class="mt-3">
						<input type="text" name="subject" id="subject" class="form-control field" 
						placeholder="Subject..."><br>
						<span class="text-danger" id="subjectError"></span>
					</div>

					<div class="mt-3">
						<textarea class="form-control field" name="message" 
						id="message"></textarea><br>
						<span class="text-danger" id="messageError"></span>
					</div>
				</div>

				<div class="card-footer p-0">
					<input type="submit" name="submit" value="SEND MESSAGE" class="form-control footer font-weight-bold">
				</div>
			</form>
		</div>
	</div>
</body>
</html>