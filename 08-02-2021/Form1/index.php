<?php
require "configuration/core.inc.php";
?>

<!DOCTYPE html>
<html>
<head>
	<title> User Form </title>
	<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<script src="vendor/jquery/jquery.min.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/validation.js"></script>
</head>
<body>
	<div class="container mt-5 mb-5">
		<div class="bg-success w-75 mb-2">
			<h5 class="text-center">
				<?php 
				if(isset($_SESSION['success'])){
					echo $_SESSION['success'];
					unset($_SESSION['success']);
				} 
				?>
			</h5>
		</div>
		<table border="1" class="shadow w-75">
			<thead class="text-center">
				<tr>
					<td colspan="2"><h1 class="text-danger"> User Form </h1></td>
				</tr>
			</thead>
			<form action="service/userForm.php" method="post" class="form" onsubmit="return validateForm()" 
			enctype="multipart/form-data">
				<tbody>
					<tr>
						<td>Enter Name </td>
						<td>
							<input type="text" name="name" class="form-control 
							field-color" id="name">
							<span class="text-danger" id="nameError">
								*<?php 
								if(isset($_SESSION['nameErr'])){
								 echo $_SESSION['nameErr'];
								 unset($_SESSION['nameErr']);
								}
								?>
							</span>
						</td>
					</tr>

					<tr>
						<td>Enter Password</td>
						<td><input type="password" name="password" id="password" 
							class="form-control field-color">
							<span class="text-danger" id="passwordError">
								*<?php 
								if(isset($_SESSION['passwordErr'])){ 
									echo $_SESSION['passwordErr'];
									unset($_SESSION['passwordErr']);
								}
								?>
							</span>
						</td>
						
					</tr>

					<tr>
						<td> Enter Address </td>
						<td> 
							<textarea name="address" id="address" rows="4" cols="50" 
							class="form-control field-color"></textarea>
							<span class="text-danger" id="addressError">
								*<?php 
								if(isset($_SESSION['addressErr'])){ 
									echo $_SESSION['addressErr'];
									unset($_SESSION['addressErr']);
								}
								?>
							</span>
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
							<span class="text-danger" id="gameError">
								*<?php 
								if(isset($_SESSION['ageErr'])){
									echo $_SESSION['ageErr'];
									unset($_SESSION['ageErr']);
								}
								?>
							</span>
						</td>
					</tr>

					<tr>
						<td> Gender </td>
						<td> 
							<input type="radio" name="gender" value="Male"> Male
							<input type="radio" name="gender" value="Female"> Female<br>
							<span class="text-danger" id="genderError">
								*<?php
								 if(isset($_SESSION['genderErr'])){
								  echo $_SESSION['genderErr'];
								  unset($_SESSION['genderErr']);
								  }
								  ?>
							</span>
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
							<span class="text-danger" id="ageError">
								*<?php 
								if(isset($_SESSION['ageErr'])){
								 echo $_SESSION['ageErr'];
								 unset($_SESSION['nameErr']);
								 }
								?>
							</span>
						</td>
					</tr>

					<tr class="text-center">
						<td colspan="2">
							<input type="file" id="file" name="file" class="field-color">
							<br><span class="text-danger" id="fileError">
								*<?php
								 if(isset($_SESSION['fileErr'])){
								  echo $_SESSION['fileErr'];
								  unset($_SESSION['fileErr']);
								  }
								 ?>
							</span>
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
	// if(!empty($name) && !empty($password) && !empty($address) && !empty($game) && !empty($gender) && !empty($age) && !empty($filename)){
?>
		<!-- <div class="card bg-light mt-3 w-75">
			<div class="card-body"> -->
				<?php
					// echo "Name: ".$name."<br>";
					// echo "Password: ".$password."<br>";
					// echo "Address: ".$address."<br>";
					// echo "Game: ";
					// for ($i=0; $i<count($game); $i++) {
					// 	echo $game[$i];
					// 	if($i !== count($game)-1){
					// 		echo ", ";
					// 	}
					// }
					// echo "<br>Gender: ".$gender."<br>";
					// echo "Age: ".$age."<br>";
					// echo "File Name: ".$filename;
				?>
			<!-- </div>
		</div>
	</div> -->
<?php 
// } ?>
</div>
</body>
</html>