<?php
require 'connection.php';
if(isset($_POST['submit'])){
	$emailErr = $passwordErr ="";
	$email = $password = $success = "";

	if(empty($_POST['email'])){
		$emailErr = "Please enter your email.";
	}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$emailErr = "Please enter appropriate email.";
	}else{
		$email = $_POST['email'];
	}

	if(empty($_POST['password'])){
		$passwordErr = "Please enter your Password.";
	}elseif(!preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/"
		, $_POST['password'])){
		$passwordErr = "password must be more than 6 characters and contains
		 special character, digit and capital letter.";
	}else{
		$password = $_POST['password'];
	}

	if(!empty($email) && !empty($password)){
		if(count(selectByValue("signup","email",$email)) > 0){
			header('Location: listContacts.php');
		}else{
			$success = "Credentials do not match.";
		}
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Sign In</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/signIn.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/signIn.js"></script>
</head>
<body>
	<div class="container mt-5">
		<div class="mb-2 bg-success w-50 text-center">
			<?php if(isset($success)) echo $success ?>
		</div>
		<div class="card w-50 circle">
			<div class="card-header header circle">
				<h1 class="text-white"><i class="fa fa-lg fa-lock"></i> Sign In </h1>
			</div>

			<div class="card-body">
				<form action="signIn.php" method="post" class="form" onsubmit="return validate_form()">
					<div class="mt-1">
						<label for="email">E-mail address</label>
					</div>
					<div class="mt-1">
						<input type="email" name="email" id="email" placeholder="mail@address.com" 
						class="form-control"><br>
						<span class="text-danger" id="email_error">
							<?php if(isset($_POST['emailErr'])) echo $emailErr ?>
						</span>
					</div>

					<div class="mt-3">
						<label for="password">Password</label>
					</div>
					<div class="mt-1">
						<input type="password" id="password" name="password" class="form-control"><br>
						<span class="text-danger" id="password_error">
							<?php if(isset($_POST['passwordErr'])) echo $passwordErr ?>
						</span>
					</div>

					<div class="mt-3 text-center">
						<input type="submit" name="submit" value="Sign In" class="btn btn-success btn-lg">
					</div>
				</form>
			</div>
		</div>

		<?php
		if(!empty($email) && !empty($password)){
		?>
		<div class="card w-50 mt-3 mb-2">
			<div class="card-body">
				<?php
					echo "E-mail: ".$email;
					echo "<br> Password: ".$password;
				?>
			</div>
		</div>
	<?php } ?>

	</div>
</body>
</html>