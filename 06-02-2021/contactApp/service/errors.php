<?php
include_once '../configuration/core.inc.php';

function validateData($name,$email,$phone,$title)
{
	$isValidate = true;
	if($name == ""){
		$_SESSION['nameErr'] = "Please enter name.";
		$isValidate = false;
	}elseif (!preg_match("/^[a-zA-Z ]{3,30}$/", $name)) {
		$_SESSION['nameErr'] = "Name should be of 30 characters and contains only characters.";
		$isValidate = false;
	}

	if($email == ""){
		$_SESSION['emailErr'] = "Please enter email.";
		$isValidate = false;
	}elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
		$_SESSION['emailErr'] = "Please enter email in appropriate format.";
		$isValidate = false;
	}

	if($phone == ""){
		$_SESSION['phoneErr'] = "Please enter your phone number.";
		$isValidate = false;
	}elseif(!preg_match("/^[0-9]{10}$/", $phone)){
		$_SESSION['phoneErr'] = "Please enter only 10 digits mobile number.";
		$isValidate = false;
	}

	if($title == ""){
		$_SESSION['titleErr'] = "Please enter title.";
		$isValidate = false;
	}elseif(strlen($title) > 30){
		$_SESSION['titleErr'] = "Title shoulb be of 30 characters.";
		$isValidate = false;
	}

	if($isValidate == false){
		return false;
	}else{
		return true;
	}
}

function validateLogin()
{
	$isValidate = true;
	if(empty($_POST['email'])){
		$_SESSION['emailErr'] = "Please enter your email.";
		$isValidate = false;
	}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$_SESSION['emailErr'] = "Please enter email in appropriate format.";
		$isValidate = false;
	}

	if(empty($_POST['password'])){
		$_SESSION['passwordErr'] = "Please enter your Password.";
		$isValidate = false;
	}elseif(!preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/"
		, $_POST['password'])){
		$_SESSION['passwordErr'] = "password must be more than 6 characters and contains special character, digit and capital letter.";
		$isValidate = false;
	}

	if($isValidate == false){
		return false;
	}else{
		return true;
	}
}