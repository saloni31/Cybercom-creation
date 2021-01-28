<?php
	$find = array('saloni','sonu','komal');
	$replace = array('s****i','s**u','k***l');
	if(isset($_POST['user_input']) && !empty($_POST['user_input'])){
		$user_input = $_POST['user_input'];
		$user_input_new = str_ireplace($find, $replace, $user_input);
		echo $user_input_new;
	}	
?>

<hr>

<!DOCTYPE html>
<html>
<head>
	<title> String functions</title>
</head>
<body>
	<form action="stringFunctions.php" method="post">
		<textarea name="user_input" rows="6" cols="30"><?php if(isset($user_input)) echo $user_input ?></textarea><br><br>
		<input type="submit" name="submit">
	</form>
</body>
</html>