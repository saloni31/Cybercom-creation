function validate_form() {
	let isValidate = true;
	let firstName = document.getElementById("firstName").value;
	let lastName = document.getElementById("lastName").value;
	let date = document.getElementById("date").value;
	let month = document.getElementById("month").value;
	let year = document.getElementById("year").value;
	let gender = document.getElementsByName("gender");
	let email = document.getElementById("email").value;
	let country = document.getElementById("country").value;
	let phone = document.getElementById("phone").value;
	let password = document.getElementById("password").value;
	let confirmPassword = document.getElementById("confirmPassword").value;

	if(firstName === ""){
		document.getElementById("firstNameError").innerHTML = 
		"Please enter your first name.";
		isValidate= false;
	}else if(! firstName.match(/^[A-Za-z]+$/)){
		document.getElementById("firstNameError").innerHTML = 
		"First name contains only alphabets.";
		isValidate = false;
	}else if(firstName.length > 10){
		document.getElementById("firstNameError").innerHTML =
		"First name must be less than 10 characters long.";
		isValidate = false;
	}else{
		document.getElementById("firstNameError").innerHTML ="";
	}

	if(lastName === ""){
		document.getElementById("lastNameError").innerHTML = 
		"Please enter your last name.";
		isValidate = false;
	}else if(!lastName.match(/^[A-Za-z]+$/)){
		document.getElementById("lastNameError").innerHTML = 
		"Last name contains only alphabets.";
		isValidate = false;
	}else if(lastName.length > 10){
		document.getElementById("lastNameError").innerHTML =
		"Last name must be less than 10 characters long.";
		isValidate = false;
	}else{
		document.getElementById("lastNameError").innerHTML ="";
	}

	if(date === "0" && month === "0" && year === "0"){
		document.getElementById("dateError").innerHTML=
		"Please select month, date and year";
		isValidate = false;
	}else{
		document.getElementById("dateError").innerHTML="";
	}

	if(email === ""){
		document.getElementById("emailError").innerHTML = 
		"Please enter your email.";
		isValidate = false;
	}else{
		document.getElementById("emailError").innerHTML="";
	}

	if(country === " "){
		document.getElementById("countryError").innerHTML = 
		"Please select your country.";
		isValidate = false;
	}else{
		document.getElementById("countryError").innerHTML="";
	}

	if(phone === ""){
		document.getElementById("phoneError").innerHTML = 
		"Please enter your phone number.";
		isValidate = false;
	}else if(!phone.match(/^[0-9]{10}$/)){
		document.getElementById("phoneError").innerHTML =
		"Phone number must contain 10 digits.";
		isValidate = false;
	}else{
		document.getElementById("phoneError").innerHTML="";
	}

	if(password === ""){
		document.getElementById("passwordError").innerHTML = "Please enter your password";
		isValidate = false;
	}else if(! password.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/)){
		document.getElementById("passwordError").innerHTML =
		"password must be more than 6 characters and contains special character, digit and capital letter.";
		isValidate = false;
	}else{
		document.getElementById("passwordError").innerHTML="";
	}

	if(confirmPassword === ""){
		document.getElementById("confirmPasswordError").innerHTML =
		"Confirm password is required.";
		isValidate = false;
	}else if(password !== confirmPassword){
		document.getElementById("confirmPasswordError").innerHTML =
		"Confirm password should match with password.";
		isValidate = false;
	}else{
		document.getElementById("confirmPasswordError").innerHTML="";
	}

	var flag=false;
	for(var i=0; i<gender.length; i++){
		if(gender[i].checked === true) {
			flag=true ;
		}
	}

	if(flag === false){
		document.getElementById("genderError").innerHTML = 
		"Please select your gender";
		isValidate = false;
	}

	if(isValidate === false){
		return false;
	}else{
		return true;
	}
}