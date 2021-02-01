const validate_form = () =>{
	let isValidate = true;
	let name = document.getElementById("name").value;
	let email = document.getElementById("email").value;
	let subject = document.getElementById("subject").value;
	let message = document.getElementById("message").value;

	if(name === ""){
		document.getElementById("nameError").innerHTML = 
		"Please enter your name.";
		isValidate= false;
	}else if(! name.match(/^[A-Za-z ]+$/)){
		document.getElementById("nameError").innerHTML = 
		"First name contains only alphabets.";
		isValidate = false;
	}else if(name.length > 30){
		document.getElementById("nameError").innerHTML =
		"First name must be less than 10 characters long.";
		isValidate = false;
	}else{
		document.getElementById("nameError").innerHTML ="";
	}

	if(email === ""){
		document.getElementById("emailError").innerHTML = 
		"Please enter your email.";
		isValidate = false;
	}else{
		document.getElementById("emailError").innerHTML="";
	}
	
	if(subject === ""){
		document.getElementById("subjectError").innerHTML = 
		"Please enter your subject.";
		isValidate = false;
	}else{
		document.getElementById("subjectError").innerHTML="";
	}

	if(message === "")	{
		document.getElementById("messageError").innerHTML = 
		"Please enter some message.";
		isValidate = false;
	}else{
		document.getElementById("messageError").innerHTML="";
	}

	if(isValidate === false){
		return false;
	}else{
		return true;
	}
}