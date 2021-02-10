<?php
require_once "../configuration/core.inc.php";
require "errors.php";

if(isset($_POST['signUp'])){
	if(validateData()){
		 	$keys = ['firstName','lastName','birthDate','gender',
					'country','email','phone','password'];
			$values = getPostData($keys);
			print_r($values);
			if($con->insert("signup",$keys,$values)){
				$_SESSION['success'] = 'You are registered successfully.';
			}
	}
	header('Location: ../index.php');
}