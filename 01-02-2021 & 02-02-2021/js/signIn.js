const getElement = (id)=>{
	return document.getElementById(id);
}

function validate_form() {
	let isValidate = true;
	let email = getElement("email").value;
	let password = getElement("password").value;

	if(email === ""){
		getElement("email_error").innerHTML = "Please enter your email";
		isValidate = false;
	}else{
		getElement("email_error").innerHTML = "";
	}
	
	if(password === ""){
		getElement("password_error").innerHTML = "Please enter your password";
		isValidate = false;
	}else if(! password.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/)){
		getElement("password_error").innerHTML =
		"password must be more than 6 characters and contains special character, digit and capital letter.";
		isValidate = false;
	}else{
		getElement("password_error").innerHTML="";
	}
	
	if(isValidate === false){
		return false;
	}else{
		return true;
	}
}