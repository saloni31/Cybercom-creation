<?php
if(isset($_POST['submit'])){
	if(isset($_POST['firstName']) && isset($_POST['lastName']) && isset($_POST['date'])
	&& isset($_POST['month']) && isset($_POST['year']) && isset($_POST['gender'])
	&& isset($_POST['country']) && isset($_POST['email']) && isset($_POST['phone'])
	&& isset($_POST['password'])){
		$firstName = $_POST['firstName'];
		$lastName = $_POST['lastName'];
		$birthdate = $_POST['date']." ".$_POST['month']." ".$_POST['year'];
		$gender = $_POST['gender'];
		$country = $_POST['country'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		$password = $_POST['password'];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/signUp.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/signUp.js"></script>
</head>
<body>
	<div class="container mt-5">
		<div class="card w-50 ">
			<div class="card-header bg-warning">
				<span class="title font-weight-bold"> Sign up </span>
			</div>

			<form action="signUp.php" method="post" onsubmit="return validate_form()">
				<div class="card-body fields">
					<div class="row">
						<div class="col-sm-5">
							<label for="firstName"> First Name </label>
						</div>
						<div class="col-sm-7">
							<input type="text" name="firstName" id="firstName" placeholder="Enter First Name"><br>
							<span id="firstNameError" class="text-danger"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="lastName"> Last Name </label>
						</div>
						<div class="col-sm-7">
							<input type="text" name="lastName" id="lastName" placeholder="Enter Last Name"><br>
							<span id="lastNameError" class="text-danger"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="birthdate"> Date of birth </label>
						</div>
						<div class="col-sm-7">
							<select name="date" id="date">
								<option value="0">Date</option>
								<option value="1">1</option>
								<option value="2">2</option>
								<option value="3">3</option>
								<option value="4">4</option>
								<option value="5">5</option>
								<option value="6">6</option>
								<option value="7">7</option>
								<option value="8">8</option>
								<option value="9">9</option>
								<option value="10">10</option>
								<option value="11">11</option>
								<option value="12">12</option>
								<option value="13">13</option>
								<option value="14">14</option>
								<option value="15">15</option>
							</select>

							<select name="month" id="month">
								<option value="0">Month</option>
								<option value="Jan">Jan</option>
								<option value="Feb">Feb</option>
								<option value="Mar">Mar</option>
								<option value="Apr">Apr</option>
								<option value="May">May</option>
								<option value="Jun">Jun</option>
								<option value="Jul">Jul</option>
								<option value="Aug">Aug</option>
								<option value="Sept">Sept</option>
								<option value="Oct">Oct</option>
								<option value="Nov">Nov</option>
								<option value="Dec">Dec</option>
							</select>

							<select name="year" id="year">
								<option value="0">Year</option>
								<option value="1990">1990</option>
								<option value="1991">1991</option>
								<option value="1992">1992</option>
								<option value="1993">1993</option>
								<option value="1994">1994</option>
								<option value="1995">1995</option>
								<option value="1996">1996</option>
								<option value="1997">1997</option>
								<option value="1998">1998</option>
								<option value="1999">1999</option>
								<option value="2000">2000</option>
							</select><br>
							<span class="text-danger" id="dateError"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="gender"> Gender </label>
						</div>
						<div class="col-sm-7">
							<input type="radio" name="gender" value="Male" class="set-field1">
							<label> Male </label>
							<input type="radio" name="gender" value="Female">
							<label> Female </label><br>
							<span class="text-danger" id="genderError"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="country"> Country </label>
						</div>
						<div class="col-sm-7">
							<select name="country" id="country">
								<option value=" ">Country</option>
								<option value="India">India</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Australia">Australia</option>
								<option value="Canada">Canada</option>
							</select><br>
							<span class="text-danger" id="countryError"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="email"> Email </label>
						</div>
						<div class="col-sm-7">
							<input type="email" name="email" id="email" placeholder="Enter E-mail"><br>
							<span class="text-danger" id="emailError"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="phone"> Phone </label>
						</div>
						<div class="col-sm-7">
							<input type="text" name="phone" id="phone" placeholder="Enter Phone"><br>
							<span class="text-danger" id="phoneError"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="password"> Password </label>
						</div>
						<div class="col-sm-7">
							<input type="password" id="password" name="password"><br>
							<span class="text-danger" id="passwordError"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="confirmPassword"> Confirm Password </label>
						</div>
						<div class="col-sm-7">
							<input type="password" id="confirmPassword" name="confirmPassword"><br>
							<span class="text-danger" id="confirmPasswordError"></span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5"></div>
						<div class="col-sm-7">
							<input type="checkbox" name="terms">
							<label> I agree to the Terms of use</label>
						</div>
					</div>

				</div>

				<div class="card-footer bg-warning">
					<div class="row">
						<div class="col-sm-7"></div>
						<div class="col-sm-5 pull-right">
							<input type="submit" name="submit" value="Submit" class="btn btn-lg btn-success">
							<input type="reset" name="cancel" value="Cancel" class="btn btn-lg btn-danger">
						</div>
					</div>
				</div>
			</form>
		</div>

	<?php
	if(!empty($firstName) && !empty($lastName) && !empty($birthdate) && !empty($gender)
	 && !empty($country) && !empty($email) && !empty($phone) && !empty($password)){
	?>
		<div class="card bg-light mt-3 w-50 mb-2">
			<div class="card-body">
				<?php
					echo "First Name: ".$firstName."<br>";
					echo "Last Name: ".$lastName."<br>";
					echo "BirthDate: ".$birthdate."<br>";
					echo "Gender: ".$gender."<br>";
					echo "Country: ".$country."<br>";
					echo "Email: ".$email."<br>";
					echo "Phone: ".$phone."<br>";
					echo "Password: ".$password."<br>";
				?>
			</div>
		</div>
	</div>
<?php } ?>
</div> 
</body>
</html>