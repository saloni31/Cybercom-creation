<?php
$nameErr = $emailErr = $timeErr = $classErr = $genderErr = $subjectErr = "";
$name = $email = $time = $class = $gender = $subject = "";

if(isset($_POST['submit'])){
	if(empty($_POST['name'])){
		$nameErr = "Please enter your name";
	}elseif(!preg_match("/^[a-zA-Z ]+$/", $_POST['name'])){
		$nameErr = "Name contains only alphabets and space";
	}else{
		$name = $_POST['name'];
	}

	if(empty($_POST['email'])){
		$emailErr = "Please enter your valid email";
	}else{
		$email = $_POST['email'];
	}

	if(empty($_POST['time'])){
		$timeErr = "Please enter your time slot";
	}else{
		$time = $_POST['time'];
	}

	if(empty($_POST['classes'])){
		$classErr = "Please enter classes";
	}else{
		$class = $_POST['classes'];
	}

	if(empty($_POST['gender'])){
		$genderErr = "Please select your gender";
	}else{
		$gender = $_POST['gender'];
	}

	if(empty($_POST['subjects'])){
		$subjectErr = "Please select youe subjects.";
	}else{
		$subject = $_POST['subjects'];
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
 	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container mt-5">
		<div class="card border-0 shadow bg-light">
			<div class="card-body">
				<form action="registration.php" method="post" class="form">
					<div class="row">
						<div class="col-sm-6">
							<label for="name" class="font-weight-bold">Name:</label><br>
							<input type="text" name="name" class="form-control">
							<span class="text-danger font-weight-bold">* <?php if(isset($nameErr)) echo $nameErr ?></span>
						</div>

						<div class="col-sm-6">
							<label for="email" class="font-weight-bold">Email</label><br>
							<input type="email" name="email" class="form-control">
							<span class="text-danger font-weight-bold">* <?php if(isset($emailErr)) echo $emailErr ?> </span>
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-6">
							<label for="time" class="font-weight-bold">Time:</label><br>
							<input type="text" name="time" class="form-control">
							<span class="text-danger font-weight-bold">*<?php if(isset($timeErr)) echo $timeErr ?></span>
						</div>

						<div class="col-sm-6">
							<label for="gender" class="font-weight-bold">Gender:</label><br>
							<div class="form-check form-check-inline">
								<input type="radio" name="gender" value="Male" class="form-check-input">
								<label class="input-check-label">Male</label>
								<input type="radio" name="gender" value="Female" class="ml-2 form-check-input">
								<label class="input-check-label">Female</label>
							</div><br>
							<span class="text-danger font-weight-bold">*<?php if(isset($genderErr)) echo $genderErr ?></span>
							
						</div>
					</div>

					<div class="row mt-3">
						<div class="col-sm-6">
							<label for="classes" class="font-weight-bold">Classes</label><br>
							<textarea name="classes" rows="4" cols="30" class="form-control"></textarea>
							<span class="text-danger font-weight-bold">*<?php if(isset($classErr)) echo $classErr ?></span>
						</div>

						<div class="col-sm-6">
							<label for="subjects[]" class="font-weight-bold">Subjects</label><br>
							<select name="subjects[]" size="4" class="form-control" multiple>
							<option>Select Subject</option>
							<option value="Android">Android</option>
							<option value="Java">Java</option>
							<option value="C#">C#</option>
							<option value="Database">Database</option>
							<option value="PHP">PHP</option>
							<option value="JS">JS</option>
							</select>
							<span class="text-danger font-weight-bold">*<?php if(isset($subjectErr)) echo $subjectErr ?></span>
						</div>
					</div>

					<div class="form-check mt-2">
						<input type="checkbox" name="agree" class="form-check-input">
						<label class="form-check-label font-weight-bold">Agree</label>
					</div>

					<div class="mt-3">
						<input type="submit" class="form-control btn btn-primary font-weight-bold text-dark" name="submit" value="Submit">
					</div>
				</form>
			</div>
		</div>
	</div>


<?php
if(!empty($name) && !empty($email) && !empty($time) && !empty($class) && !empty($gender) && !empty($subject)){
?>
<div class="container mt-3 mb-3">
	<div class="card shadow border-0 bg-white ">
		<div class="card-body ">
			<?php
				echo "<br><br>Your name: ".$name."<br>";
				echo "Your email: ".$email."<br>";
				echo "Your time: ".$time."<br>";
				echo "Your classes: ".$class."<br>";
				echo "Your gender: ".$gender."<br>";
				echo "Your subjects: ";
				for($i = 0; $i < count($subject); $i++){
					echo $subject[$i];
					if($i != count($subject)-1){
						echo ", ";
					}
				}
			}

			?>
		</div>
	</div>
</div>
</body>
</html>