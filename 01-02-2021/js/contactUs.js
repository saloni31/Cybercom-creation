const getElement = (id)=>{
	return document.getElementById(id);
}

const validate_form = () =>{
	let isValidate = true;
	let name = getElement("name").value;
	let email = getElement("email").value;
	let subject = getElement("subject").value;
	let message = getElement("message").value;

	if(name === ""){
		getElement("nameError").innerHTML = 
		"Please enter your name.";
		isValidate= false;
	}else if(! name.match(/^[A-Za-z ]+$/)){
		getElement("nameError").innerHTML = 
		"First name contains only alphabets.";
		isValidate = false;
	}else if(name.length > 30){
		getElement("nameError").innerHTML =
		"First name must be less than 10 characters long.";
		isValidate = false;
	}else{
		getElement("nameError").innerHTML ="";
	}

	if(email === ""){
		getElement("emailError").innerHTML = 
		"Please enter your email.";
		isValidate = false;
	}else if(email.length > 50){
		getElement("emailError").innerHTML = 
		"Email should be 50 characters long.";
		isValidate = false;
	}else{
		getElement("emailError").innerHTML="";
	}
	
	if(subject === ""){
		getElement("subjectError").innerHTML = 
		"Please enter your subject.";
		isValidate = false;
	}else if(subject.length > 30){
		getElement("subjectError").innerHTML = 
		"Subject should be 30 characters long.";
		isValidate = false;
	}else{
		getElement("subjectError").innerHTML="";
	}

	if(message === "")	{
		getElement("messageError").innerHTML = 
		"Please enter some message.";
		isValidate = false;
	}else if(message.length > 100){
		getElement("messageError").innerHTML = 
		"message should be 100 haracters long.";
		isValidate = false;
	}else{
		getElement("messageError").innerHTML="";
	}

	if(isValidate === false){
		return false;
	}else{
		return true;
	}
}