<?php
// print simple message on web page
echo "Hello World <br>";

// also write html code inside the echo
echo "<input type='text' name='name' value='saloni'><br><br>";

// we can write it within sngle quotes also
echo '<input type="text" name="name" value="saloni"><br>';

// we can also use escape characters within the echo  statement
echo "<br><input type=\"text\" name=\"name\" value=\"name\"><br>";

// we can also pass variables into echo
$str = "saloni <br>";
echo $str;

// we can also pass multiple arguments in echo statements
echo "My name is ".$str;

// also without concatenation we can pass variable within the echo statement
// but it is possible only using double quotes
echo "<br> My name is $str";

// echo statement does not return anything
// $i = echo "Hello world!";
// echo $i;

// we can pass multiple arguments with echo statement
echo "<br>Hello world","My name is $str";
?>