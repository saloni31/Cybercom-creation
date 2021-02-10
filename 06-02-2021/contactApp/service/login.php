<?php
require_once "../configuration/core.inc.php";
require "errors.php";

if(isset($_POST['submit'])){
	if(validateLogin()){
		$key = ['email','password'];
		$values = getPostData($key);
		$data = $con->selectByMultipleAndValues("user",$key,$values);
		if(count($data) == 1){
			$_SESSION['name']=$data[0]['name'];
			header('Location: ../home.php');
		}else{
			header('Location: ../index.php');
			$_SESSION['loginError'] = "Credentials do not match.";
		}
	}else{
		header('Location: ../index.php');
	}
}