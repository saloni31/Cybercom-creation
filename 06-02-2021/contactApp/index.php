<?php
require_once "configuration/core.inc.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title> Sign In</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js">
	</script>
	<script type="text/javascript" src="js/loginValidation.js"></script>
</head>
<body>
	<div class="container mt-5">
		<div class="mb-2 bg-danger w-50 text-center">
			<?php 
			if(isset($_SESSION['loginError'])){
				echo $_SESSION['loginError'];
				unset($_SESSION['loginError']);
			} 
			?>
		</div>
		<div class="card w-50 circle">
			<div class="card-header bg-primary circle">
				<h1 class="text-white"><i class="fa fa-lg fa-lock"></i> Sign In </h1>
			</div>

			<div class="card-body">
				<form action="service/login.php" method="post" class="form" onsubmit="return validate()">
					<div class="mt-1">
						<label for="email">E-mail address</label>
					</div>
					<div class="mt-1">
						<input type="email" name="email" id="email" placeholder="mail@address.com" 
						class="form-control"><br>
						<span class="text-danger" id="emailErr">
							<?php 
							if(isset($_SESSION['emailErr'])){
								echo $_SESSION['emailErr'];
								unset($_SESSION['emailErr']);
							} 
							?>
						</span>
					</div>

					<div class="mt-3">
						<label for="password">Password</label>
					</div>
					<div class="mt-1">
						<input type="password" id="password" name="password" class="form-control"><br>
						<span class="text-danger" id="passwordErr">
							<?php 
							if(isset($_SESSION['passwordErr'])){
								echo $_SESSION['passwordErr'];
								unset($_SESSION['passwordErr']);
							} 
							?>
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