<?php
include_once '../configuration/core.inc.php';

function validateData()
{
	$isValidate = true;
	if($_POST['name'] == ""){
		$_SESSION['nameErr'] = "Please enter name.";
		$isValidate = false;
	}elseif (!preg_match("/^[a-zA-Z ]{3,30}$/", $_POST['name'])) {
		$_SESSION['nameErr'] = "Name should be of 30 characters and contains only characters.";
		$isValidate = false;
	}

	if($_POST['email'] == ""){
		$_SESSION['emailErr'] = "Please enter email.";
		$isValidate = false;
	}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$_SESSION['emailErr'] = "Please enter email in appropriate format.";
		$isValidate = false;
	}

	if($_POST['phone'] == ""){
		$_SESSION['phoneErr'] = "Please enter your phone number.";
		$isValidate = false;
	}elseif(!preg_match("/^[0-9]{10}$/", $_POST['phone'])){
		$_SESSION['phoneErr'] = "Please enter only 10 digits mobile number.";
		$isValidate = false;
	}

	if($_POST['title'] == ""){
		$_SESSION['titleErr'] = "Please enter title.";
		$isValidate = false;
	}elseif(strlen($_POST['title']) > 30){
		$_SESSION['titleErr'] = "Title shoulb be of 30 characters.";
		$isValidate = false;
	}

	if($isValidate == false){
		return false;
	}else{
		return true;
	}
}