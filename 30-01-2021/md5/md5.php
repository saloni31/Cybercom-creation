<?php
if(isset($_POST['submit'])){
	if(isset($_POST['password']) && !empty($_POST['password'])){
		$password = md5($_POST['password']);
		$handle = fopen("hash.txt", "r");
		$file_password = fread($handle, filesize("hash.txt"));
		if(isset($password) && !empty($password)){
			if($password == $file_password){
				echo "Credentials match.";
			}else{
				echo "Password does not match";
			}
		}
	}else{
		echo "Please enter password";
	}
}
?>

<form action="md5.php" method="post">
	Password: <input type="password" name="password"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>