<?php
$handle = fopen("names.txt","a");
if(isset($_POST['name'])){
	$name = $_POST['name'];
	if(!empty($name)){
		fwrite($handle,$name."\n");
	}
}


?>

<br>
<form action="appendFile.php" method="post">
	Name:<br>
	<input type="text" name="name"><br><br>
	<input type="submit" name="submit" value="Submit">
</form>