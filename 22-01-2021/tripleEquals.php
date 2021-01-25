<?php
$no1 = '1';
$no2 = 1;

// Double Equals
if($no1 == $no2){
	echo "Equals <br>";
}else{
	echo "Not Equals <br>";
}

// Triple Equals
if($no1 === $no2){
	echo "Equals <br>";
}else{
	echo "Not Equals <br>";
}

// Double equals operator do type coersion i.e., 
// Whether one no is string and another no is integer
// It will return true because values are same
// while triple equals to operator match value and its type.