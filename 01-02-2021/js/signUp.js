const getElement = (id)=>{
	return document.getElementById(id);
}

function validate_form() {
	let isValidate = true;
	let firstName = getElement("firstName").value;
	let lastName = getElement("lastName").value;
	let date = getElement("date").value;
	let month = getElement("month").value;
	let year = getElement("year").value;
	let gender = document.getElementsByName("gender");
	let email = getElement("email").value;
	let country = getElement("country").value;
	let phone = getElement("phone").value;
	let password = getElement("password").value;
	let confirmPassword = getElement("confirmPassword").value;

	if(firstName === ""){
		getElement("firstNameError").innerHTML = 
		"Please enter your first name.";
		isValidate= false;
	}else if(! firstName.match(/^[A-Za-z]+$/)){
		getElement("firstNameError").innerHTML = 
		"First name contains only alphabets.";
		isValidate = false;
	}else if(firstName.length > 10){
		getElement("firstNameError").innerHTML =
		"First name must be less than 10 characters long.";
		isValidate = false;
	}else{
		getElement("firstNameError").innerHTML ="";
	}

	if(lastName === ""){
		getElement("lastNameError").innerHTML = 
		"Please enter your last name.";
		isValidate = false;
	}else if(!lastName.match(/^[A-Za-z]+$/)){
		getElement("lastNameError").innerHTML = 
		"Last name contains only alphabets.";
		isValidate = false;
	}else if(lastName.length > 10){
		getElement("lastNameError").innerHTML =
		"Last name must be less than 10 characters long.";
		isValidate = false;
	}else{
		getElement("lastNameError").innerHTML ="";
	}

	if(date === "0" && month === "0" && year === "0"){
		getElement("dateError").innerHTML=
		"Please select month, date and year";
		isValidate = false;
	}else{
		getElement("dateError").innerHTML="";
	}

	if(email === ""){
		getElement("emailError").innerHTML = 
		"Please enter your email.";
		isValidate = false;
	}else if(email.length > 30){
		getElement("emailError").innerHTML = 
		"Email should not be more than 30 characters.";
		isValidate = false;
	}else{
		getElement("emailError").innerHTML="";
	}

	if(country === "0"){
		getElement("countryError").innerHTML = 
		"Please select your country.";
		isValidate = false;
	}else{
		getElement("countryError").innerHTML="";
	}

	if(phone === ""){
		getElement("phoneError").innerHTML = 
		"Please enter your phone number.";
		isValidate = false;
	}else if(!phone.match(/^[0-9]{10}$/)){
		getElement("phoneError").innerHTML =
		"Phone number must contain 10 digits.";
		isValidate = false;
	}else{
		getElement("phoneError").innerHTML="";
	}

	if(password === ""){
		getElement("passwordError").innerHTML = "Please enter your password";
		isValidate = false;
	}else if(! password.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/)){
		getElement("passwordError").innerHTML =
		"password must be more than 6 characters and contains special character, digit and capital letter.";
		isValidate = false;
	}else{
		getElement("passwordError").innerHTML="";
	}

	if(confirmPassword === ""){
		getElement("confirmPasswordError").innerHTML =
		"Confirm password is required.";
		isValidate = false;
	}else if(password !== confirmPassword){
		getElement("confirmPasswordError").innerHTML =
		"Confirm password should match with password.";
		isValidate = false;
	}else{
		getElement("confirmPasswordError").innerHTML="";
	}

	var flag=false;
	for(var i=0; i<gender.length; i++){
		if(gender[i].checked === true) {
			flag=true ;
		}
	}

	if(flag === false){
		getElement("genderError").innerHTML = 
		"Please select your gender";
		isValidate = false;
	}

	if(isValidate === false){
		return false;
	}else{
		return true;
	}
}