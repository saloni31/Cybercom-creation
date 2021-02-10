<?php
include_once "configuration/core.inc.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!-- <script type="text/javascript" src="js/validation.js"></script> -->
</head>
<body>
	<div class="container mt-5">
		<div class="card border-0 bg-light shadow w-50">
			<div class="text-center bg-danger">
			<span class="text-dark font-weight-bold">
				<?php
				if(isset($_SESSION['loginErr'])){
					echo $_SESSION['loginErr'];
					unset($_SESSION['loginErr']);
				}
				?>
			</span>
		</div>
			<div class="card-body">
				<h1 class="text-center"> Login </h1>
				<hr>
				<form class="form" method="post" onsubmit="return validateLoginData()" action="server/login.php">
					<div class="row mt-3">
						<div class="col-sm-12">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email">
							<span class="text-danger" id="emailErr">
								<?php
									if(isset($_SESSION['emailErr'])){
									echo $_SESSION['emailErr'];
									unset($_SESSION['emailErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-12">
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
							<span class="text-danger" id="passwordErr">
								<?php
									if(isset($_SESSION['passwordErr'])){
									echo $_SESSION['passwordErr'];
									unset($_SESSION['passwordErr']);
								}
								?>
							</span>
						</div>
					</div>

					<div class="row mt-3 mb-2">
						<div class="col-sm-6">
							<input type="submit" name="login" id="login" value="Login" class="form-control btn btn-primary">
						</div>

						<div class="col-sm-6">
							<a href="register.php" class="form-control btn btn-primary"> Register</a>  
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
</html>