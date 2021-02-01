function validate_form() {
	let isValidate = true;
	let email = document.getElementById("email").value;
	let password = document.getElementById("password").value;

	if(email === ""){
		document.getElementById("email_error").innerHTML = "Please enter your email";
		isValidate = false;
	}else{
		document.getElementById("email_error").innerHTML = "";
	}
	
	if(password === ""){
		document.getElementById("password_error").innerHTML = "Please enter your password";
		isValidate = false;
	}else if(! password.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/)){
		document.getElementById("password_error").innerHTML =
		"password must be more than 6 characters and contains special character, digit and capital letter.";
		isValidate = false;
	}else{
		document.getElementById("password_error").innerHTML="";
	}
	
	if(isValidate === false){
		return false;
	}else{
		return true;
	}
}