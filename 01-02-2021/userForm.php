<?php
	if(isset($_POST['submit'])){
		if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['address'])
		&& isset($_POST['game']) && isset($_POST['gender']) && isset($_POST['age'])){
			$name = $_POST['name'];
			$password = $_POST['password'];
			$address = $_POST['address'];
			$game = $_POST['game'];
			$gender = $_POST['gender'];
			$age = $_POST['age'];
			$filename = $_FILES['file']['name'];
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> User Form </title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/userForm.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/userForm.js"></script>
</head>
<body>
	<div class="container mt-5 mb-5">
		<table border="1" class="shadow w-75">
			<thead class="text-center">
				<tr>
					<td colspan="2"><h1 class="text-danger"> User Form </h1></td>
				</tr>
			</thead>
			<form accept="userForm.php" method="post" class="form"
			onsubmit="return validate_form()" enctype="multipart/form-data">
				<tbody>
					<tr>
						<td>Enter Name </td>
						<td>
							<input type="text" name="name" class="form-control field-color" 
							id="name">
							<span class="text-danger" id="nameError"></span>
						</td>
					</tr>

					<tr>
						<td>Enter Password</td>
						<td><input type="password" name="password" id="password" 
							class="form-control field-color">
							<span class="text-danger" id="passwordError"></span>
						</td>
						
					</tr>

					<tr>
						<td> Enter Address </td>
						<td> 
							<textarea name="address" id="address" rows="4" cols="50" 
							class="form-control field-color"></textarea>
							<span class="text-danger" id="addressError">sdvdnjk</span>
						</td>
					</tr>

					<tr>
						<td>Select Game </td>
						<td> 
							<input type="checkbox" name="game[]" value="Hockey"> Hockey <br>
							<input type="checkbox" name="game[]" value="Football"> Football <br>
							<input type="checkbox" name="game[]" value="Badminton"> Badminton <br>
							<input type="checkbox" name="game[]" value="Cricket"> Cricket<br>
							<input type="checkbox" name="game[]" value="Volleyball"> Volleyball <br>
							<span class="text-danger" id="gameError"></span>
						</td>
					</tr>

					<tr>
						<td> Gender </td>
						<td> 
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female<br>
							<span class="text-danger" id="genderError"></span>
						</td>
					</tr>

					<tr>
						<td> Select ur age </td>
						<td> 
							<select name="age" id="age" class="form-control field-color">
								<option value="0">Select</option>
								<option value="20">20</option>
								<option value="21">21</option>
								<option value="22">22</option>
								<option value="23">23</option>
								<option value="24">24</option>
								<option value="25">25</option>
								<option value="26">26</option>
								<option value="27">27</option>
								<option value="28">28</option>
								<option value="29">29</option>
								<option value="30">30</option>
							</select>
							<span class="text-danger" id="ageError"></span>
						</td>
					</tr>

					<tr class="text-center">
						<td colspan="2">
							<input type="file" id="file" name="file" class="field-color">
							<br><span class="text-danger" id="fileError"></span>
						</td>
					</tr>

					<tr class="text-center">
						<td colspan="2">
							<input type="reset" name="reset" class="btn btn-lg border-dark w-25 field-color" value="Reset">
							<input type="submit" name="submit" class="btn btn-lg border-dark w-25 field-color" value="Submit">
						</td>
					</tr>

				</tbody>
			</form>
		</table>

<?php
	if(!empty($name) && !empty($password) && !empty($address) && !empty($game) && !empty($gender)
	&& !empty($age) && !empty($filename)){
?>
		<div class="card bg-light mt-3 w-75">
			<div class="card-body">
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
					echo "Age: ".$age."<br>";
					echo "File Name: ".$filename;
				?>
			</div>
		</div>
	</div>
<?php } ?>
</div>
</body>
</html>