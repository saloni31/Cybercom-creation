<?php
include_once '../configuration/core.inc.php';
include_once 'errors.php';

if(isset($_POST['register'])){
	if(validateUser()){
		$keys = ['prefix','firstName','lastName','email','mobile','information','password'];
		$data = getPostData($keys);
		if(count($con->selectByValue("user",$keys[3],$data[3])) > 1){
			$_SESSION['emailErr'] = "Email Already register";
			header("Location:../register.php");
		}else{
			$data[count($data)-1] = md5($data[count($data)-1]);
			if($con->insert("user",$keys,$data)){
				header('location: ../index.php');
			}
		}	
	}else{
		header("Location:../register.php");
	}
}