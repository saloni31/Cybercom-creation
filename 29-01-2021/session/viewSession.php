<?php
// first statement must be session_start()
session_start();

// display the value of session on web page.
if(isset($_SESSION['name'])){
	echo "Welcome, ".$_SESSION['name']." You are ".$_SESSION['age']."!!";
}else{
	echo "Please log in.";
}