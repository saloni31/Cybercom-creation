<?php
	if(isset($_POST['password'])){
		$password = $_POST['password'];
		if(!empty($password)){
			$check_password = "admin123";
			if($password === $check_password){
				echo "Password match.";
			}else{
				echo "Password does not match.";
			}
		}else{
			echo "Please fille the field";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="" method="post">
		Password <br> <input type="password" name="password"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>