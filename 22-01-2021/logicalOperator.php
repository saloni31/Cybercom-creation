<?php
$no1 = 10;
if($no1 >= 10){
	echo "True <br>";
}else{
	echo "False <br>";
}

// Logical AND operator
$upper = 1000;
$lower = 500;

if($no1 > $lower && $no1 < $upper){
	echo "True <br>";
}else{
	echo "False <br>";
}

// Logical OR operator
$no2 = 20;
$no3 = 10;

if($no1 == $no3 || $no == $no3){
	echo "OK <br>";
}else{
	echo "NOT OK <br>";
}

if(!($no1 == $no3) || ($no2 == $no3)){
	echo "OK <br>";
}else{
	echo "NOT OK <br>";
}

if($no1 == $no3 ||! $no == $no3){
	echo "OK <br>";
}else{
	echo "NOT OK <br>";
}