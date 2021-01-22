<?php
// in if condition 1 indicates true so it will be exceute true part 
if(1){
	echo "True <br>";
}else{
	echo "False <br>";
}

// here in if condition 1 is compare with 2
// whether it is true or not
// in below condition it will execute false part
if(1 == 2){
	echo "1 is equals to 1<br>";
}else{
	echo "Not equals<br>";
}


// In below example we will compare two variables
// here also false part will be executed
$a=10;
$b=20;

if($a == $b){
	echo "A is equals to B<br>";
}else{
	echo "A is not equals to B<br>";
}

if($a == $b){
	echo "A is equals to B <br>";
}elseif($a == 10){
	echo "A is equals to 10 <br>";
}else{
	echo "Not equals";
}
?>