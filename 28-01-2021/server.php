<?php
include 'header.php';
if(isset($_POST['submit'])){
	echo "Process 1";
}

// Return the script name i.e the path
$script_name = $_SERVER['SCRIPT_NAME'];

// Return the host name 
$host_name = $_SERVER['HTTP_HOST'];

echo "<br> Script name: ".$script_name;
echo "<br> Host name: ".$host_name;
?>
