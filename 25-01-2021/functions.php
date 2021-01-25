<?php
function nameFunc()
{
	echo "Saloni";
}

echo "My name is ";
nameFunc();

// function with arguments
function sum($no1, $no2){
	return $no1 + $no2;
}

function divide($no1, $no2){
	return $no1 / $no2;
}

echo "<br>Addiition is ".sum(10,20)."<br>";
echo divide(sum(10,10),sum(5,5))."<br>";

// function which displays date
function displayDate($day, $date, $year){
	echo $day." ".$date." ".$year;
}
displayDate("Monday",25,2021);

$user_ip = $_SERVER['REMOTE_ADDR'];
echo "<br>Your IP address is: ".$user_ip;

function echo_ip(){
	global $user_ip;
	echo "<br>Your IP address is: ".$user_ip;
}
echo_ip();