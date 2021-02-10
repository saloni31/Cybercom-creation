<?php
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script type="text/javascript" src="vendor/jquery/jquery.min.js"></script>
	<script type="text/javascript" src="vendor/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-5">
		<div class="card border-0 bg-light shadow w-50">
			<div class="card-body">
				<h1 class="text-center"> Login </h1>
				<hr>
				<form class="form" method="post">
					<div class="row mt-3">
						<div class="col-sm-12">
							<input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-12">
							<input type="password" class="form-control" name="password" id="password" placeholder="Password" required>
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