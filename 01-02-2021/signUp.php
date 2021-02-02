<?php
if(isset($_POST['submit'])){
	$firstNameErr = $lastNameErr = $birthdateErr = "";
	$genderErr = $countryErr = $emailErr = "";
	$phoneErr = $passwordErr = $confirmPasswordErr ="";
	$firstName = $lastName = $birthdate ="";
	$gender = $country = $email = $phone = $password = "";

	if(empty($_POST['firstName'])){
		$firstNameErr = "Please enter your first name.";
	}elseif(!preg_match("/^[A-Za-z]{3,10}$/", $_POST['firstName'])){
		$firstNameErr = "First name should be 10 characters long
		and contain only alphabets.";
	}else{
		$firstName = $_POST['firstName'];
	}

	if(empty($_POST['lastName'])){
		$lastNameErr = "Please enter your last name.";
	}elseif(!preg_match("/^[A-Za-z]{3,10}$/", $_POST['lastName'])){
		$lastNameErr = "First name should be 10 characters long
		and contain only alphabets.";
	}else{
		$lastName = $_POST['lastName'];
	}

	if((empty($_POST['date']) || $_POST['date'] == '0')
		&& (empty($_POST['month']) || $_POST['month'] == '0')
		&& (empty($_POST['year']) || $_POST['year'] == '0')){
		$birthdateErr = "Please select your birth date,month and year.";
	}else{
		$birthdate = $_POST['date']." ".$_POST['month']." ".$_POST['year'];
	}

	if(empty($_POST['gender'])){
		$genderErr = "Please select your gender";
	}else{
		$gender = $_POST['gender'];
	}

	if(empty($_POST['country']) || $_POST['country'] == '0'){
		$countryErr = "Please select your country.";
	}else{
		$country = $_POST['country'];
	}

	if(empty($_POST['email'])){
		$emailErr = "Please enter your email.";
	}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$emailErr = "Please enter appropriate email.";
	}else{
		$email = $_POST['email'];
	}

	if(empty($_POST['phone'])){
		$phoneErr = "Please enter your phone number.";
	}elseif (!preg_match("/^[0-9]{10}$/", $_POST['phone'])) {
		$phoneErr = "Phone number should be of 10 digits.";
	}else{
		$phone = $_POST['phone'];
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

	if(empty($_POST['confirmPassword'])){
		$confirmPasswordErr = "Confirm password is required.";
	}elseif($_POST['confirmPassword'] !== $_POST['password']){
		$confirmPasswordErr = "Confirm password should match with password.";
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
							<span id="firstNameError" class="text-danger">
								*<?php if(isset($firstNameErr)) echo $firstNameErr ?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="lastName"> Last Name </label>
						</div>
						<div class="col-sm-7">
							<input type="text" name="lastName" id="lastName" placeholder="Enter Last Name"><br>
							<span id="lastNameError" class="text-danger">
								*<?php if(isset($lastNameErr)) echo $lastNameErr ?>
							</span>
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
							<span class="text-danger" id="dateError">
								*<?php if(isset($birthdateErr)) echo $birthdateErr ?>
							</span>
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
							<span class="text-danger" id="genderError">
								*<?php if(isset($genderErr)) echo $genderErr ?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="country"> Country </label>
						</div>
						<div class="col-sm-7">
							<select name="country" id="country">
								<option value="0">Country</option>
								<option value="India">India</option>
								<option value="Afghanistan">Afghanistan</option>
								<option value="Australia">Australia</option>
								<option value="Canada">Canada</option>
							</select><br>
							<span class="text-danger" id="countryError">
								*<?php if(isset($countryErr)) echo $countryErr ?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="email"> Email </label>
						</div>
						<div class="col-sm-7">
							<input type="email" name="email" id="email" placeholder="Enter E-mail"><br>
							<span class="text-danger" id="emailError">
								*<?php if(isset($emailErr)) echo $emailErr ?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="phone"> Phone </label>
						</div>
						<div class="col-sm-7">
							<input type="text" name="phone" id="phone" placeholder="Enter Phone"><br>
							<span class="text-danger" id="phoneError">
								*<?php if(isset($phoneErr)) echo $phoneErr ?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="password"> Password </label>
						</div>
						<div class="col-sm-7">
							<input type="password" id="password" name="password"><br>
							<span class="text-danger" id="passwordError">
								*<?php if(isset($passwordErr)) echo $passwordErr ?>
							</span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-5">
							<label for="confirmPassword"> Confirm Password </label>
						</div>
						<div class="col-sm-7">
							<input type="password" id="confirmPassword" name="confirmPassword"><br>
							<span class="text-danger" id="confirmPasswordError">
								*<?php if(isset($confirmPasswordErr)) echo $confirmPasswordErr ?>
							</span>
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