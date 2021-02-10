<?php
require '../configuration/core.inc.php';
require 'errors.php';

if(isset($_POST['name']) && isset($_POST['email']) &&
isset($_POST['phone']) && isset($_POST['title'])){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$title = $_POST['title'];
	if(validateData($name,$email,$phone,$title)){

		$key=['name','email','phone','title'];
		$data = [$name,$email,$phone,$title];
		if($con->insert('contact_details',$key,$data)){
			echo "Contact created successfully.";
			// header("Location: ../create.php");
		}
	}else{
		echo "Wrong data.";

	}	
}