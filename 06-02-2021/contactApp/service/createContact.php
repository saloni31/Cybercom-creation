<?php
require '../configuration/core.inc.php';
require 'errors.php';

if(isset($_POST['create'])){
	if(validateData()){
		$key=['name','email','phone','title'];
		$data = getPostData($key);
		if($con->insert('contact_details',$key,$data)){
			$_SESSION['message'] = "Contact created successfully.";
			header('Location: ../create.php');
		}
	}else{
		header('Location: ../create.php');
	}
	
}