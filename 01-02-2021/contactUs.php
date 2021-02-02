<?php
if(isset($_POST['submit'])){
	$nameErr = $emailErr = $subjectErr = $messageErr = "";
	$name = $email = $subject = $message = "";

	if(empty($_POST['name'])){
		$nameErr = "Please enter your name.";	
	}elseif(!preg_match("/^[A-Za-z ]{5,30}$/", $_POST['name'])){
		$nameErr = "Name shoulb be 30 characters long and contains alphabets.";
	}else{
		$name = $_POST['name'];
	}

	if(empty($_POST['email'])){
		$emailErr = "Please enter your email.";
	}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$emailErr = "Please enter appropriate email.";
	}else{
		$email = $_POST['email'];
	}

	if(empty($_POST['subject'])){
		$subjectErr = "Please enter some subject.";
	}else{
		$subject = $_POST['subject'];
	}

	if(empty($_POST['message'])){
		$messageErr = "Please enter some subject.";
	}else{
		$message = $_POST['message'];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>CONTACT US</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/contactUs.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="js/contactUs.js"></script> -->
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
					<input type="submit" name="submit" value="SEND MESSAGE" class="form-control footer font-weight-bold">
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