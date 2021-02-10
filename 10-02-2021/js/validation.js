// function that returns an element based on their id.

const getElement = (id) => {
	return document.getElementById(id);
}

const validateUserData = () => {
	let isValidate = true;
	let prefix = getElement("prefix").value;
	let firstName = getElement("firstName").value;
	let lastName = getElement("lastName").value;
	let email = getElement("email").value;
	let mobile = getElement("mobile").value;
	let password = getElement("password").value;
	let confirmPassword = getElement("confirmPassword").value;
	let information = getElement("information").value;

	if(prefix === " "){
		getElement('prefixErr').innerHTML = "Please select prefix.";
		isValidate = false;
	}else{
		getElement("prefixErr").innerHTML = "";
	}

	if(firstName === ''){
		getElement('firstNameErr').innerHTML = 
		"Please Enter your first name.";
		isValidate = false;
	}else if(!firstName.match(/^[A-Za-z ]{3,20}$/)){
		getElement('firstNameErr').innerHTML = 
		"First Name should contains only 20 characters and space.";
		isValidate = false;
	}else{
		getElement("firstNameErr").innerHTML = "";
	}

	if(lastName === ''){
		getElement('lastNameErr').innerHTML = 
		"Please Enter your last name.";
		isValidate = false;
	}else if(!lastName.match(/^[A-Za-z ]{3,20}$/)){
		getElement('lastNameErr').innerHTML = 
		"Last Name should contains only 20 characters and space.";
		isValidate = false;
	}else{
		getElement("lastNameErr").innerHTML = "";
	}


	if(email === '')	{
		getElement('emailErr').innerHTML = "Please enter email.";
		isValidate = false;
	}else if(email.length > 50){
		getElement('emailErr').innerHTML = "Email contains only 50 characters.";
		isValidate = false;
	}else{
		getElement("emailErr").innerHTML = "";
	}


	if(information === '')	{
		getElement('informationErr').innerHTML = "Please enter information.";
		isValidate = false;
	}else if(information.length > 100){
		getElement('informationErr').innerHTML =
		"Please enter only 100 characters.";
	}else{
		getElement("informationErr").innerHTML = "";
	}


	if(mobile === ""){
		getElement("mobileErr").innerHTML = 
		"Please enter Mobile number.";
		isValidate = false;
	}else if(!mobile.match(/^[0-9]{10}$/)){
		getElement("mobileErr").innerHTML =
		"Mobile number should contain only 10 digits.";
		isValidate = false;
	}else{
		getElement("mobileErr").innerHTML = "";
	}


	if(password === ""){
		getElement("passwordErr").innerHTML = "Please enter your password";
		isValidate = false;
	}else if(! password.match(/^(?=.*[0-9])(?=.*[!@#$%^&*])[a-zA-Z0-9!@#$%^&*]{6,16}$/)){
		getElement("passwordErr").innerHTML =
		"password must be more than 6 characters and contains special character, digit and capital letter.";
		isValidate = false;
	}else{
		getElement("passwordErr").innerHTML = "";
	}


	if(confirmPassword === ""){
		getElement("confirmPasswordErr").innerHTML =
		"Please enter your confirm password.";
		isValidate = false;
	}else if(confirmPassword !== password){
		getElement("confirmPasswordErr").innerHTML = 
		"Confirm password should match with password.";
	}else{
		getElement("confirmPasswordErr").innerHTML = "";
	}


	if(isValidate === false){
		return false;
	}else{
		return true;
	}

}

const validateLoginData = () => {
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

const validateCategory = () => {
	let isValidate = true;
	let title = getElement("title").value;
	let content = getElement("content").value;
	let url = getElement("url").value;
	let metaTitle = getElement("metaTitle").value;
	let category = getElement("category").value;
	let image = getElement("image").value;

	if(title === ""){
		getElement("titleErr").innerHTML =
		"Please enter title.";
		isValidate = false;
	}else if(title.length > 50){
		getElement("titleErr").innerHTML =
		"Title should contains only 50 characters";
		isValidate = false;
	}else{
		getElement("titleErr").innerHTML = "";
	}

	if(content === ""){
		getElement("contentErr").innerHTML =
		"Please enter contents.";
		isValidate = false;
	}else if(content.length > 255){
		getElement("contentErr").innerHTML = 
		"contents should only be 255 characters long.";
	}else{
		getElement("contentErr").innerHTML = "";
	}

	if(url === ""){
		getElement("urlErr").innerHTML = 
		"Please enter URL.";
		isValidate = false;
	}else if(url.length > 255){
		getElement("urlErr").innerHTML =
		"Url should only be 255 characters long.";
		isValidate = false;
	}else{
		getElement("urlErr").innerHTML = "";
	}

	if(metaTitle === ""){
		getElement("metaTitleErr").innerHTML =
		"Please enter meta title.";
		isValidate = false;
	}else if(metaTitle.length > 50){
		getElement("metaTitleErr").innerHTML =
		"Meta title should only be 50 characters long.";
		isValidate = false;
	}else{
		getElement("metaTitleErr").innerHTML = "";
	}

	if(category === " "){
		getElement("categoryErr").innerHTML = 
		"Please select category";
		isValidate = false;
	}else{
		getElement("categoryErr").innerHTML ="";
	}

	if(image === ""){
		getElement("imageErr").innerHTML =
		"Please upload category image.";
		isValidate = false;
	}else{
		getElement("imageErr").innerHTML = "";
	}

	if(isValidate === false){
		return false;
	}else{
		return true;
	}
}

const validateBlog = () => {
	let isValidate = true;
	let title = getElement("title").value;
	let content = getElement("content").value;
	let url = getElement("url").value;
	let publishDate = getElement("publishDate").value;
	let image = getElement("image").value;
	if(title === ""){
		getElement("titleErr").innerHTML =
		"Please enter title.";
		isValidate = false;
	}else if(title.length > 50){
		getElement("titleErr").innerHTML =
		"Title should contains only 50 characters";
		isValidate = false;
	}else{
		getElement("titleErr").innerHTML = "";
	}

	if(content === ""){
		getElement("contentErr").innerHTML =
		"Please enter contents.";
		isValidate = false;
	}else if(content.length > 255){
		getElement("contentErr").innerHTML = 
		"contents should only be 255 characters long.";
	}else{
		getElement("contentErr").innerHTML = "";
	}

	if(url === ""){
		getElement("urlErr").innerHTML = 
		"Please enter URL.";
		isValidate = false;
	}else if(url.length > 255){
		getElement("urlErr").innerHTML =
		"Url should only be 255 characters long.";
		isValidate = false;
	}else{
		getElement("urlErr").innerHTML = "";
	}

	if(publishDate === ""){
		getElement("publishDateErr").innerHTML=
		"Please select publish date for blog.";
		isValidate = false;	
	}else{
		getElement("publishDateErr").innerHTML = "";
	}

	if(image === ""){
		getElement("imageErr").innerHTML =
		"Please upload category image.";
		isValidate = false;
	}else{
		getElement("imageErr").innerHTML = "";
	}

	if(isValidate === false){
		return false;
	}else{
		return true;
	}
}