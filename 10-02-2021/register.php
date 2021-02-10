<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-5">
		<div class="card border-0 bg-light shadow w-50">
			<div class="card-body">
				<h1 class="text-center"> Registration </h1>
				<hr>
				<form class="form" method="post">
					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="prefix" class="form-label"> 	Prefix
							</label>
						</div>
						<div class="col-sm-9">
							<select name="prefix" id="prefix" class="form-control">
								<option value="">Select</option>
								<option value="Mr.">Mr.</option>
								<option value="Mrs.">Mrs.</option>
								<option value="Ms.">Ms.</option>
							</select>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="firstName" class="form-label"> 	First Name
							</label>
						</div>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="firstName" id="firstName" placeholder="First Name" >
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="lastName" class="form-label"> 	Last Name
							</label>
						</div>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="lastName" id="lastName" placeholder="Last Name" >
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="email" class="form-label"> 	Email
							</label>
						</div>
						<div class="col-sm-9">
							<input type="email" class="form-control" name="email" id="email" placeholder="somethig@something.com" >
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="mobile" class="form-label"> 	Mobile number
							</label>
						</div>
						<div class="col-sm-9">
							<input type="text" class="form-control" name="mobile" id="mobile" placeholder="Mobile number" >
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="password" class="form-label"> 	Password
							</label>
						</div>
						<div class="col-sm-9">
							<input type="password" class="form-control" name="password" id="password" placeholder="Password">
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="confirmPassword" class="form-label"> 	Confirm Password
							</label>
						</div>
						<div class="col-sm-9">
							<input type="password" class="form-control" name="password" id="password" placeholder="Confirm Password" required>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3">
							<label for="information" class="form-label"> 	Information
							</label>
						</div>
						<div class="col-sm-9">
							<textarea class="form-control" name="information" id="information"></textarea>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-3"></div>
						<div class="col-sm-9">
							<input type="checkbox" id="conditions" class="form-check-input" required>
							<label for="conditions" class="form-check-label"> 
								Hereby, I accept Terms & conditions 
							</label>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-12">
							<input type="submit" name="register" id="register" class="form-control btn btn-primary">
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</body>
<script type="text/javascript" src="assets/js/register.js"></script>
</html>