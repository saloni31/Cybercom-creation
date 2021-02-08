// the file that validate fields of update and add contact form

const getElement = (id) => {
	return document.getElementById(id);
}

const validateForm = () => {
	let isValidate = true;
	let name = getElement('name').value;
	let email = getElement('email').value;
	let phone = getElement('phone').value;
	let title = getElement('title').value;

	if(name === ''){
		getElement('nameErr').innerHTML = "Please Enter your name.";
		isValidate = false;
	}else if(!name.match(/^[A-Za-z ]{3,30}$/)){
		getElement('nameErr').innerHTML = 
		"Name should contains only 30 characters and space.";
		isValidate = false;
	}

	if(email === '')	{
		getElement('emailErr').innerHTML = "Please enter email.";
		isValidate = false;
	}

	if(phone === ''){
		getElement('phoneErr').innerHTML = "Please enter phone number.";
		isValidate = false;
	}else if(!phone.match(/^[0-9]{10}$/)){
		getElement('phoneErr').innerHTML = "Please enter only 10 digits number.";
		isValidate = false;
	}

	if(title === ''){
		getElement('titleErr').innerHTML = "Please enter title.";
		isValidate = false;
	}else if(title.length > 30){
		getElement('titleErr').innerHTML = "Title should not be more than 30 characters.";
		isValidate = false;
	}

	if(isValidate === false){
		return false;
	}else{
		return true;
	}
}