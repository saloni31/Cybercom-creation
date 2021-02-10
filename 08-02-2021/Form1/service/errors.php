<?php
require_once "../configuration/core.inc.php";

function validateData(){
if(isset($_POST['submit'])){
		$validateData = true;

		if(empty($_POST['name'])){
			$_SESSION['nameErr'] = "Please enter your name.";	
			$validateData = false;
		}elseif(!preg_match("/^[A-Za-z ]{5,30}$/", $_POST['name'])){
			$_SESSION['nameErr'] = "Name shoulb be 30 characters long and contains alphabets.";
			$validateData = false;
		}

		if(empty($_POST['password'])){
			$_SESSION['passwordErr'] = "Please enter your Password.";
			$validateData = false;
		}elseif(!preg_match("/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/"
			, $_POST['password'])){
			$_SESSION['passwordErr'] = "password must be more than 6 characters and contains special character, digit and capital letter.";
			 $validateData = false;
		}

		if(empty($_POST['address'])){
			$_SESSION['addressErr'] = "Please enter your address.";
			$validateData = false;
		}

		if(empty($_POST['game'])){
			$_SESSION['gameErr']= "Please select your games.";
			$validateData = false;
		}

		if(empty($_POST['gender'])){
			$_SESSION['genderErr'] = "Please select your gender";
			$validateData = false;
		}

		if(empty($_POST['age']) || $_POST['age'] == '0'){
			$_SESSION['ageErr'] = "Please select your age.";
			$validateData = false;
		}

		if(empty($_FILES['file']['name'])){
			$_SESSION['fileErr'] = "Please select your file.";
			$validateData = false;
		}

		if($validateData == false){
			return false;
		}else{
			return true;
		}
	}
}