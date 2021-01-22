<?php
// print the simple message on web page
print("Hello world");

// we can also write it with single quotes
print('Hello word');

// we can also add html codes
print("<br> <b> Hello World!! </b>");

// we can also create text field within it
print("<br><input type='text' name='name' value='saloni'><br><br>");

// we can write the same statement using sindle quotes
print('<input type="text" name="name" value="saloni"><br>');

// we can also write it with escape character
print("<br><input type=\"text\" name=\"name\" value=\"name\"><br>");

// we can also pass variable within it
$str = "saloni <br>";
print($str);
print("My name is $str");

// we can do the same thing with concatenation also
print("My name is ".$str);

// we cannot pass multiple arguments with print statement
// print("Hello world","My name is $str");

// print statement returns 1 on success and 0 on failure
$i = print("<br>Hello world!!<br>");
print($i);
?>