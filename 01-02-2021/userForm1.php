<?php
if(isset($_POST['submit'])){
	$name = $_POST['name'];
	$password = $_POST['password'];
	$gender = $_POST['gender'];
	$birthdate = $_POST['date']." ".$_POST['month']." ".$_POST['year'];
	$address = $_POST['address'];
	$game = $_POST['game'];
	$status = $_POST['status'];
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Form</title>
	<link rel="stylesheet" type="text/css" href="css/userForm1.css">
</head>
<body>
	<div class="container">
		<form method="post" action="userForm1.php" onsubmit="validate_form()">
			<fieldset>
				<legend class="text-align">User Form</legend>
				<ul>
					<li>
						<label for="name"> ENTER NAME </label>
						<input type="text" name="name" id="name" class="set-field"><br>
						<span id="nameError" class="error"></span>
					</li>

					<li>
						<label for="password"> ENTER PASSWORD </label>
						<input type="password" name="password" class="set-field2"><br>
						<span id="passwordError" class="error"></span>
					</li>

					<li>
						<label for="gender"> GENDER </label>
						<input type="radio" name="gender" value="Male" class="set-field1"> Male
						<input type="radio" name="gender" value="Female"> Female<br>
						<span id="genderError" class="error"></span>
					</li>

					<li>
						<label for="address">D.O.B</label>
						<select name="month" class="set-dob">
							<option value="">Month</option>
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

						<select name="date">
							<option value="">Date</option>
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

						<select name="year">
							<option value="">Year</option>
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
						</select>
						<span id="dateError" class="error"></span>
					</li>

					<li>
						<label for="birthdate">ADDRESS</label>
						<textarea name="address" rows="4" cols="50" class="set-field1"></textarea>
						<span id="addressError" class="error"></span>
					</li>

					<li>
						<label for="game">SELECT GAMES</label>
						<input type="checkbox" name="game[]" value="Hockey" class="set-field3"> Hockey 
						<input type="checkbox" name="game[]" value="Football"> Football 
						<input type="checkbox" name="game[]" value="Badminton"> Badminton 
						<input type="checkbox" name="game[]" value="Cricket"> Cricket
						<input type="checkbox" name="game[]" value="Volleyball"> Volleyball
						<span id="gameError" class="error"></span>
					</li>

					<li>
						<label for="status"> MARITAL STATUS </label>
						<input type="radio" name="status" value="Married" class="set-field2"> Married
						<input type="radio" name="status" value="Unmarried"> Unmarried
						<span id="statusError" class="error"></span>
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