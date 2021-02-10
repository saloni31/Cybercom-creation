<?php
require_once '../configuration/core.inc.php';

function validateData()
{	
		$isValidate = true;
		if(empty($_POST['firstName'])){
			$_SESSION['firstNameErr'] = "Please enter your first name.";
			$isValidate = false;
		}elseif(!preg_match("/^[A-Za-z]{3,10}$/", $_POST['firstName'])){
			$_SESSION['firstNameErr'] = "First name should be 10 characters long
			and contain only alphabets.";
			$isValidate = false;
		}

		if(empty($_POST['lastName'])){
			$_SESSION['lastNameErr'] = "Please enter your last name.";
			$isValidate = false;
		}elseif(!preg_match("/^[A-Za-z]{3,10}$/", $_POST['lastName'])){
			$_SESSION['lastNameErr'] = "First name should be 10 characters long
			and contain only alphabets.";
			$isValidate = false;
		}

		if((empty($_POST['date']) || $_POST['date'] == '0')
			&& (empty($_POST['month']) || $_POST['month'] == '0')
			&& (empty($_POST['year']) || $_POST['year'] == '0')){
			$_SESSION['birthdateErr'] = 
				"Please select your birth date,month and year.";
				$isValidate = false;
		}

		if(empty($_POST['gender'])){
			$_SESSION['genderErr'] = "Please select your gender";
			$isValidate = false;
		}

		if(empty($_POST['country']) || $_POST['country'] == '0'){
			$_SESSION['countryErr'] = "Please select your country.";
			$isValidate = false;
		}

		if(empty($_POST['email'])){
			$_SESSION['emailErr'] = "Please enter your email.";
			$isValidate = false;
		}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
			$_SESSION['emailErr'] = "Please enter appropriate email.";
			$isValidate = false;
		}

		if(empty($_POST['phone'])){
			$_SESSION['phoneErr'] = "Please enter your phone number.";
			$isValidate = false;
		}elseif (!preg_match("/^[0-9]{10}$/", $_POST['phone'])) {
			$_SESSION['phoneErr'] = "Phone number should be of 10 digits.";
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

		if(empty($_POST['confirmPassword'])){
			$_SESSION['confirmPasswordErr'] = "Confirm password is required.";
			$isValidate = false;
		}elseif($_POST['confirmPassword'] !== $_POST['password']){
			$_SESSION['confirmPasswordErr']= "Confirm password should match with password.";
			$isValidate = false;
		}

		if($isValidate == false){
			return false;
		}else{
			return true;
		}
}
