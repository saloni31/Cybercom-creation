<?php
$script_name = $_SERVER['SCRIPT_NAME'];
?>

<!DOCTYPE html>
<html>
<head>
	<title> Header </title>
</head>
<body>
	<form action="<?php echo $script_name ?>" method="post">
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>