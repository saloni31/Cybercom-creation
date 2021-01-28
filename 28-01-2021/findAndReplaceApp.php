<?php
	$offset = 0;
	if(isset($_POST['user_input']) && isset($_POST['search']) && isset($_POST['replace'])){
		$text = $_POST['user_input'];
		$search = $_POST['search'];
		$replace = $_POST['replace'];
		$search_length = strlen($search);

		// $text = str_replace($search, $replace, $text);

		if(!empty($text) && !empty($search) && !empty($replace)){
			while($strpos = strpos($text, $search, $offset)){
				$offset = $strpos + $search_length;
				$text = substr_replace($text, $replace, $strpos, $search_length);
			}
		}else{
			echo "Please fill in all fields.";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title> Find and replace application</title>
</head>
<body>
	<form action="findAndReplaceApp.php" method="post">
		<textarea name="user_input" rows="6" cols="30"><?php if(isset($text)) echo $text ?></textarea> <br><br>

		<label for="search">Search For:</label><br>
		<input type="text" name="search" id="search" value="<?php if(isset($search)) echo $search ?>"><br><br>

		<label for="replace">Replace with:</label><br>
		<input type="text" name="replace" id="replace" value="<?php if(isset($replace)) echo $replace ?>"><br><br>

		<input type="submit" name="submit" value="Find and Replace">
	</form>
</body> 
</html>