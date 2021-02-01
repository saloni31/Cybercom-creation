<?php
require 'PHPMailer-5.2.27/PHPMailerAutoload.php';
require 'PHPMailer-5.2.27/class.smtp.php';

if(isset($_POST['submit'])){
	if(isset($_POST['fullName']) && isset($_POST['email']) && isset($_POST['comment'])){
		$name = $_POST['fullName'];
		$email = $_POST['email'];
		$comment = $_POST['comment'];
		if(!empty($name) && !empty($email) && !empty($comment)){

			$mail = new PHPMailer;
			$mail->isSMTP();
			$mail->Host = "smtp.gmail.com";
			$mail->SMTPAuth = true;
			$mail->Username = "donationhub2@gmail.com";
			$mail->Password = "donate123";
			$mail->SMTPSecure = 'tls';
			$mail->Port = 587;
			$mail->addAddress($to);
			$mail->isHTML(true);
			$mail->Body = $name ."\n". $comment;
			$mail->Subject = "Contact form";
			$mail->setFrom("donationhub2@gmail.com", "Donation Hub");
			if (!$mail->send()) {
			    echo "error: " . $mail->ErrorInfo;
			} else {
			    echo "Email sent";
			}
		}else{
		echo "Please fill all the fields.";
		}
	}
}
?>



<!DOCTYPE html>
<html>
<head>
	<title> Index </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container align-items-center mt-5 pl-5">
		<div class="row">
			<div class="col-sm-3"></div>
			<div class="col-sm-6">
				<div class="card border-0">
				<div class="card-header justify-content-center header-img">
					<div class="card-title text-white text-center font-weight-bold"><h2><b> Contact Us </b><h2>
					</div>
				</div>
				<div class="card-body icon-added">
					<form method="post" action="contactUs.php">
						<div class="input-group mt-3 w-75 ml-5">
							<div class="input-group-prepend">
								<span class="input-group-text bg-white"><i class="fa fa-user"></i></span>
							</div>
							<input type="text" class="form-control border border-left-0" name="fullName" id="fullName" placeholder="Full Name">
						</div>

						<div class="input-group mt-3 w-75 ml-5">
							<div class="input-group-prepend">
								<span class="input-group-text bg-white"><i class="fa fa-envelope"></i></span>
							</div>
							<input type="email" class="form-control border border-left-0" name="email" id="email" placeholder="Eg.example@email.com">
						</div>

						<div class="input-group mt-3 w-75 ml-5">
							<div class="input-group-prepend">
								<span class="input-group-text bg-white"><i class="fa fa-comment mb-4"></i></span>
							</div>
							<textarea class="form-control border border-left-0" placeholder="Your comments" name="comment"></textarea>
						</div>

						<div class="mt-3 w-75">
							<input type="submit" name="submit" value="Send now" class="border-0 text-white font-weight-bold round text-uppercase">
						</div>
					</form>
				</div>
		</div>
			</div>
			<div class="col-sm-3"></div>
		</div>
		
	</div>
</body>
</html>