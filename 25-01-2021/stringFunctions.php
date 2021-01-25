<?php
$str = "This is an example of string functions...";
$str1 = " Where we will learn <img src='image.jpg'> string functions... ";
$str_word_count = str_word_count($str);					// counts the words into the string
echo $str_word_count."<br>";

$str_word_count = str_word_count($str,1);				// counts the words into the string and return index array
print_r($str_word_count);
echo "<br>";

$str_word_count = str_word_count($str,2);				// counts the words into the string and return associative 																array
print_r($str_word_count);
echo "<br>";

$str_word_count = str_word_count($str,1,'.');			// counts the words into the string and return associative 																array and includes fullstop also
print_r($str_word_count);
echo "<br>";

$str_shuffle = str_shuffle($str); 						// Shuffle the string
echo $str_shuffle."<br>";

$half = substr($str_shuffle, 0, strlen($str_shuffle)/2);			// substr gives the substring while strlen returns 																		length
echo $half."<br>";

$reverse = strrev($str);								// Reverse the string
echo $reverse;
echo "<br>";

similar_text($str, $str1, $res);						// Return percentage value how much percent two strings are 															similar
echo "Similarity is: ".$res;
echo "<br>";

$str_trimmed=trim($str1);								// Remove white spaces from beginning and end ofthe string.
echo $str_trimmed."<br>";

$str_slashes=htmlentities(addslashes($str1));			// this will add slashes in the string and usefull for 																	security purpose mostly in sql injection
echo $str_slashes;
echo strip_slashes($str_slashes);						// Used to remove slashed