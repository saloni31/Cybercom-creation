<?php
// if we want to check whether page is available
// and we want to kill the page if file not found
// then use require, it will give fatal error
require 'header.php';

// it will only give warning in case of file not found
include 'header.php';
// $var = "My name is saloni";
echo $var;