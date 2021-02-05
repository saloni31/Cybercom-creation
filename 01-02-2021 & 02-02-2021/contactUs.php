<?php
require "connection.php";
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
		<div class="bg-success w-50 mb-2">
			<h5 class="text-center">
				<?php if(isset($success)) echo $success ?>
			</h5>
		</div>
		<div class="card text-center border-0 w-50">
			<div class="card-header header">
				<h2 class="text-white"> CONTACT US! </h2>
			</div>
			<form action="server.php" method="post" class="form"
			 onsubmit="return validate_form()">
				<div class="card-body main">
					<div class="mt-3">
						<input type="text" name="name" id="name" class="form-control field" 
						placeholder="Name..."><br>
						<span class="text-danger" id="nameError">
							<?php if(isset($nameErr)) echo $nameErr ?>
						</span>
					</div>

					<div class="mt-3">
						<input type="email" id="email" name="email" class="form-control field" 
						placeholder="Email..."><br>
						<span class="text-danger" id="emailError">
							<?php if(isset($emailErr)) echo $emailErr ?>
						</span>
					</div>

					<div class="mt-3">
						<input type="text" name="subject" id="subject" 
						class="form-control field" 
						placeholder="Subject..."><br>
						<span class="text-danger" id="subjectError">
							<?php if(isset($subjectErr)) echo $subjectErr ?>
						</span>
					</div>

					<div class="mt-3">
						<textarea placeholder="Message..." 
						class="form-control field" name="message" 
						id="message"></textarea><br>
						<span class="text-danger" id="messageError">
							<?php if(isset($messageErr)) echo $messageErr ?>
						</span>
					</div>
				</div>

				<div class="card-footer p-0">
					<input type="submit" name="contactUs" value="SEND MESSAGE" class="form-control footer font-weight-bold">
				</div>
			</form>
		</div>
		<?php
		if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
		?>
			<div class="card bg-light mt-3 w-50 mb-2">
				<div class="card-body">
					<?php
						echo "Name: ".$name."<br>";
						echo "Email: ".$email."<br>";
						echo "Subject: ".$subject."<br>";
						echo "Message: ".$message."<br>";
					?>
				</div>
			</div>
		</div>
	<?php } ?>
	</div>
</body>
</html>