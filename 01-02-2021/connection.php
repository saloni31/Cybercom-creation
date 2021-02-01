<?php 
$server = "localhost";
$user = "root";
$password = "";

@mysqli_connect($server,$user,$password) or die("Could not connect");
echo "Connected"
?>