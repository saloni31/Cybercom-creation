const getElement = (id) => {
	return document.getElementById(id);
}

const validate = () => {
	let isValidate = true;
	let email = getElement('email').value;
	let password = getElement('password').value;

	if(email === '')	{
		getElement('emailErr').innerHTML = "Please enter email.";
		isValidate = false;
	}

	if(password === ""){
		getElement("passwordErr").innerHTML = "Please enter your password";
		isValidate = false;
	}else if(! password.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/)){
		getElement("passwordErr").innerHTML =
		"password must be more than 6 characters and contains special character, digit and capital letter.";
		isValidate = false;
	}else{
		getElement("passwordErr").innerHTML="";
	}

	if(isValidate === false){
		return false;
	}else{
		return true;
	}

}