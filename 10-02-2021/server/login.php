<?php
include_once '../configuration/core.inc.php';
include_once 'errors.php';

if(isset($_POST['login'])){
	if(validateLogin()){
		$keys = ['email','password'];
		$data = getPostData($keys);
		$data[count($data)-1] = md5($data[count($data)-1]);
		$result = $con->selectByMultipleAndValues("user",$keys,$data);
		if(count($result) == 1){
			$_SESSION['userId'] = $result[0]['id'];
			header("Location: ../home.php");
		}else{
			$_SESSION['loginErr'] = "Credentials do not match";
			header("Location: ../index.php");
		}
	}else{
		header("Location: ../index.php");
	}
}