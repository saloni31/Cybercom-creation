<?php
$str = "This is a string";

if(preg_match("/is/",$str)){
	echo "Match found";
}else{
	echo "No match found";
}