<?php

if(isset($_GET['user_name']) && !empty($_GET['user_name'])){
	if(strtolower($_GET['user_name']) == 'saloni'){
		echo "You are the best<br>";
	}
}

$str = "This is practice session and is for the string functions";
// RETURN THE LENGTH OF THE STRING
$str_len=strlen($str);
echo $str_len."<br>";

// RETURN THE WHOLE STRING IN UPPER CASE
$str_upper = strtoupper($str);
echo $str_upper."<br>";

// RETURN THE WHOLE STRING INTO LOWER CASE
$str_lower = strtolower($str);
echo $str_lower."<br>";

// RETURN THE POSITION OF THE STRING WHICH WE WANT TO SEARCH
$find = "is";
$find_length = strlen($find);
$offset = 0;
while ($string_position = strpos($str,$find,$offset)) {
	echo "<strong>".$find . " </strong> found at ".$string_position."<br>";
	$offset = $string_position + $find_length;
}

// Replace substring
echo substr_replace($str, 'PRACTICE', 8, 8)."<br>";

// replace multiple strings from the string
$find = array("is","PRACTICE");
$replace = array("IS", "practice");
echo str_replace($find, $replace, $str)."<br>";

// splits the string into small tokens
while($token = strtok($str," ")){
	echo "Word: $token <br>";
	$str = substr($str, strlen($token)+1);
	$token = strtok($str," ");
}

// for($i=0; $i<$str_len;$i++){
// 	echo "$str[$i]";
// }
?>

<html>
<body>
	<form method="get">
		<br><br><br>
		User name: <input type="text" name="user_name"><br><br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>