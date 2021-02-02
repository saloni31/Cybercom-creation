<?php
if(isset($_POST['submit'])){
	$nameErr = $passwordErr = $addressErr = $genderErr = "";
	$birthdateErr = $gameErr = $statusErr = "";
	$name = $password = $gender = $birthdate = "";
	$address = $game = $status ="";

	if(empty($_POST['name'])){
		$nameErr = "Please enter your name.";	
	}elseif(!preg_match("/^[A-Za-z ]{5,30}$/", $_POST['name'])){
		$nameErr = "Name shoulb be 30 characters long and contains alphabets.";
	}else{
		$name = $_POST['name'];
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

	if(empty($_POST['gender'])){
		$genderErr = "Please select your gender";
	}else{
		$gender = $_POST['gender'];
	}

	if((empty($_POST['date']) || $_POST['date'] == '0')
		&& (empty($_POST['month']) || $_POST['month'] == '0')
		&& (empty($_POST['year']) || $_POST['year'] == '0')){
		$birthdateErr = "Please select your birth date,month and year.";
	}else{
		$birthdate = $_POST['date']." ".$_POST['month']." ".$_POST['year'];
	}

	if(empty($_POST['address'])){
		$addressErr = "Please enter your address.";
	}else{
		$address = $_POST['address'];
	}

	if(empty($_POST['game'])){
		$gameErr = "Please select your games.";
	}else{
		$game = $_POST['game'];
	}
		
	if(empty($_POST['status'])){
		$statusErr = "Please select your marital status.";
	}else{
		$status = $_POST['status'];
	}		
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Form</title>
	<link rel="stylesheet" type="text/css" href="css/userForm1.css">
	<script type="text/javascript" src="js/userForm1.js"></script>
</head>
<body>
	<div class="container">
		<form method="post" action="userForm1.php" onsubmit="return validate_form()">
			<fieldset>
				<legend class="text-align">User Form</legend>
				<ul>
					<li>
						<label for="name"> ENTER NAME </label>
						<input type="text" name="name" id="name" class="set-field">
						<br>
						<span id="nameError" class="error">
							* <?php if(isset($nameErr)) echo $nameErr ?>
						</span>
					</li>

					<li>
						<label for="password"> ENTER PASSWORD </label>
						<input type="password" name="password" id="password" class="set-field2"><br>
						<span id="passwordError" class="error">
							* <?php if(isset($passwordErr)) echo $passwordErr ?>
						</span>
					</li>

					<li>
						<label for="gender"> GENDER </label>
						<input type="radio" name="gender" value="Male" class="set-field1"> Male
						<input type="radio" name="gender" value="Female"> Female<br>
						<span id="genderError" class="error">
							*<?php if(isset($genderErr)) echo $genderErr ?>
						</span>
					</li>

					<li>
						<label for="address">D.O.B</label>
						<select name="month" id="month" class="set-dob">
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
						<span id="dateError" class="error">
							* <?php if(isset($birthdateErr)) echo $birthdateErr ?>
						</span>
					</li>

					<li>
						<label for="birthdate">ADDRESS</label>
						<textarea name="address" id="address" rows="4" cols="50" class="set-field1"></textarea>
						<br><span id="addressError" class="error">
							*<?php if(isset($addressErr)) echo $addressErr ?>
						</span>
					</li>

					<li>
						<label for="game">SELECT GAMES</label>
						<input type="checkbox" name="game[]" value="Hockey" class="set-field3"> Hockey 
						<input type="checkbox" name="game[]" value="Football"> Football 
						<input type="checkbox" name="game[]" value="Badminton"> Badminton 
						<input type="checkbox" name="game[]" value="Cricket"> Cricket
						<input type="checkbox" name="game[]" value="Volleyball"> Volleyball<br>
						<span id="gameError" class="error">
							*<?php if(isset($gameErr)) echo $gameErr ?>
						</span>
					</li>

					<li>
						<label for="status"> MARITAL STATUS </label>
						<input type="radio" name="status" value="Married" class="set-field2"> Married
						<input type="radio" name="status" value="Unmarried"> Unmarried<br>
						<span id="statusError" class="error">
							*<?php if(isset($statusErr)) echo $statusErr ?>
						</span>
					</li>
				</ul>

				<div class="set-buttons">
					<input type="submit" name="submit" value="Submit" class="button">
					<input type="reset" name="reset" value="Reset" class="button">
				</div>

				<div class="set-agreement">
					<input type="checkbox" name="accept"> I accept this agreement
				</div>

			</fieldset>
		</form>
	</div>
	<?php
	if(!empty($name) && !empty($password) && !empty($address) && !empty($game) && !empty($gender)
	&& !empty($birthdate) && !empty($status)){
	?>
		<div class="container">
				<?php
					echo "Name: ".$name."<br>";
					echo "Password: ".$password."<br>";
					echo "Address: ".$address."<br>";
					echo "Game: ";
					for ($i=0; $i<count($game); $i++) {
						echo $game[$i];
						if($i !== count($game)-1){
							echo ", ";
						}
					}
					echo "<br>Gender: ".$gender."<br>";
					echo "BirthDate: ".$birthdate."<br>";
					echo "Marital status: ".$status;
				?>
		</div>
<?php } ?>
</body>
</html>