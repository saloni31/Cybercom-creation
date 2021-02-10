<?php
include_once '../configuration/core.inc.php';
function validateUser()
{
	$isValidate = true;
	if($_POST['prefix'] === " "){
		$_SESSION['prefixErr'] = "Please select prefix";
		$isValidate = false;
	}

	if(empty($_POST['firstName'])){
		$_SESSION['firstNameErr'] = "Please enter first name.";
		$isValidate = false;
	}elseif (!preg_match("/^[a-zA-Z ]{3,20}$/", $_POST['firstName'])) {
		$_SESSION['firstNameErr'] = "First name should be of 20 characters and contains only characters.";
		$isValidate = false;
	}

	if(empty($_POST['lastName'])){
		$_SESSION['lastNameErr'] = "Please enter last name.";
		$isValidate = false;
	}elseif (!preg_match("/^[a-zA-Z ]{3,20}$/", $_POST['lastName'])) {
		$_SESSION['lastNameErr'] = "Last name should be of 20 characters and contains only characters.";
		$isValidate = false;
	}

	if(empty($_POST['email'])){
		$_SESSION['emailErr'] = "Please enter email.";
		$isValidate = false;
	}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$_SESSION['emailErr'] = "Please enter email in appropriate format.";
		$isValidate = false;
	}

	if(empty($_POST['mobile'])){
		$_SESSION['mobileErr'] = "Please enter mobile number.";
		$isValidate = false;
	}else if(!preg_match("/^[0-9]{10}$/", $_POST['mobile'])){
		$_SESSION['mobileErr'] = "Mobile number should be of 10 digits.";
	}

	if(empty($_POST['password'])){
		$_SESSION['passwordErr'] = "Please enter your Password.";
		$isValidate = false;
	}elseif(!preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/"
		, $_POST['password'])){
		$_SESSION['passwordErr'] = "password must be more than 6 characters and contains special character, digit and capital letter.";
		$isValidate = false;
	}

	if(empty($_POST['confirmPassword'])){
		$_SESSION['confirmPasswordErr'] =
		"Please enter confirm password.";
	}else if($_POST['confirmPassword'] !== $_POST['password']){
		$_SESSION['confirmPasswordErr'] =
		"Confirm password should match with password.";
	}

	if(empty($_POST['information'])){
		$_SESSION['informationErr'] = "Please enter information.";
	}else if(strlen($_POST['information']) > 100){
		$_SESSION['informationErr'] = "Please enter only 100 characters.";
	}

	if($isValidate == false){
		return false;
	}else{
		return true;
	}
}

function validateLogin(){
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