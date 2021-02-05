<?php
require 'connection.php';

// the below code process for signin process.
if(isset($_POST['submit'])){
	$emailErr = $passwordErr ="";
	$email = $password = $success = "";

	if(empty($_POST['email'])){
		$emailErr = "Please enter your email.";
	}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$emailErr = "Please enter appropriate email.";
	}else{
		$email = $_POST['email'];
	}

	if(empty($_POST['password'])){
		$passwordErr = "Please enter your Password.";
	}elseif(!preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/"
		, $_POST['password'])){
		$passwordErr = "password must be more than 6 characters and contains
		 special character, digit and capital letter.";
	}else{
		$password = $_POST['password'];
	}

	if(!empty($email) && !empty($password)){
		if(count(selectByMultipleAndValues
			("signup",["email","password"],[$email,$password])) > 0){
			header('Location: listContacts.php');
		}else{
			$success = "Credentials do not match.";
		}
	}
}

// below code will process for the sign up form.
if(isset($_POST['signUp'])){
	$firstNameErr = $lastNameErr = $birthdateErr = "";
	$genderErr = $countryErr = $emailErr = "";
	$phoneErr = $passwordErr = $confirmPasswordErr ="";
	$firstName = $lastName = $birthdate = $success = "";
	$gender = $country = $email = $phone = $password = "";

	if(empty($_POST['firstName'])){
		$firstNameErr = "Please enter your first name.";
	}elseif(!preg_match("/^[A-Za-z]{3,10}$/", $_POST['firstName'])){
		$firstNameErr = "First name should be 10 characters long
		and contain only alphabets.";
	}else{
		$firstName = $_POST['firstName'];
	}

	if(empty($_POST['lastName'])){
		$lastNameErr = "Please enter your last name.";
	}elseif(!preg_match("/^[A-Za-z]{3,10}$/", $_POST['lastName'])){
		$lastNameErr = "First name should be 10 characters long
		and contain only alphabets.";
	}else{
		$lastName = $_POST['lastName'];
	}

	if((empty($_POST['date']) || $_POST['date'] == '0')
		&& (empty($_POST['month']) || $_POST['month'] == '0')
		&& (empty($_POST['year']) || $_POST['year'] == '0')){
		$birthdateErr = "Please select your birth date,month and year.";
	}else{
		$birthdate = $_POST['date']." ".$_POST['month']." ".$_POST['year'];
	}

	if(empty($_POST['gender'])){
		$genderErr = "Please select your gender";
	}else{
		$gender = $_POST['gender'];
	}

	if(empty($_POST['country']) || $_POST['country'] == '0'){
		$countryErr = "Please select your country.";
	}else{
		$country = $_POST['country'];
	}

	if(empty($_POST['email'])){
		$emailErr = "Please enter your email.";
	}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$emailErr = "Please enter appropriate email.";
	}else{
		$email = $_POST['email'];
	}

	if(empty($_POST['phone'])){
		$phoneErr = "Please enter your phone number.";
	}elseif (!preg_match("/^[0-9]{10}$/", $_POST['phone'])) {
		$phoneErr = "Phone number should be of 10 digits.";
	}else{
		$phone = $_POST['phone'];
	}

	if(empty($_POST['password'])){
		$passwordErr = "Please enter your Password.";
	}elseif(!preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/"
		, $_POST['password'])){
		$passwordErr = "password must be more than 6 characters and contains
		 special character, digit and capital letter.";
	}else{
		$password = $_POST['password'];
	}

	if(empty($_POST['confirmPassword'])){
		$confirmPasswordErr = "Confirm password is required.";
	}elseif($_POST['confirmPassword'] !== $_POST['password']){
		$confirmPasswordErr = "Confirm password should match with password.";
	}

	if(!empty($firstName) && !empty($lastName) && !empty($birthdate) && !empty($gender)
	 && !empty($country) && !empty($email) && !empty($phone) && !empty($password)){
	 	$keys = ['firstName','lastName','birthDate','gender',
				'country','email','phone','password'];
		$values = [$firstName,$lastName,$birthdate,$gender,
					$country,$email,$phone,$password];
		if(insert("signup",$keys,$values)){
			echo "<script> alert('You are registered successfully.')</sript>";
			header('Location: signUp.php');
		}
	}
}

// bellow code will process for contact us form
if(isset($_POST['contactUs'])){
	$nameErr = $emailErr = $subjectErr = $messageErr = "";
	$name = $email = $subject = $message = $success = "";

	if(empty($_POST['name'])){
		$nameErr = "Please enter your name.";	
	}elseif(!preg_match("/^[A-Za-z ]{5,30}$/", $_POST['name'])){
		$nameErr = "Name shoulb be 30 characters long and contains alphabets.";
	}else{
		$name = $_POST['name'];
	}

	if(empty($_POST['email'])){
		$emailErr = "Please enter your email.";
	}elseif(!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
		$emailErr = "Please enter appropriate email.";
	}else{
		$email = $_POST['email'];
	}

	if(empty($_POST['subject'])){
		$subjectErr = "Please enter some subject.";
	}else{
		$subject = $_POST['subject'];
	}

	if(empty($_POST['message'])){
		$messageErr = "Please enter some subject.";
	}else{
		$message = $_POST['message'];
	}

	if(!empty($name) && !empty($email) && !empty($subject) && !empty($message)){
		if(insert("contact_us",['name','email','subject','message'],
		[$name,$email,$subject,$message])){
			header("Location: contactUs.php");
		}
	}
}


?>