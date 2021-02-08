const getElement = (id)=>{
	return document.getElementById(id);
}

const validate_form = () =>{
	let isValidate = true;
	let genderFlag = false;
	let gameFlag = false;
	let name = getElement("name").value;
	let password = getElement("password").value;
	let address = getElement("address").value;
	let gender = getElement("gender");
	let game = getElement("game[]");
	let age = getElement("age").value;
	let file = getElement("file").value;

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

	if(address === ""){
		getElement("addressError").innerHTML=
		"Please enter your address.";
		isValidate = false;
	}else{
		getElement("addressError").innerHTML="";
	}

	for(var i=0; i<gender.length; i++){
		if(gender[i].checked === true) {
			genderFlag=true ;
		}
	}

	if(genderFlag === false){
		getElement("genderError").innerHTML = 
		"Please select your gender";
		isValidate = false;
	}

	for(var i=0; i<game.length; i++){
		if(game[i].checked === true) {
			gameFlag=true ;
			break;
		}
	}

	if(gameFlag === false){
		getElement("gameError").innerHTML = 
		"Please select your game";
		isValidate = false;
	}

	if(age === "0"){
		getElement("ageError").innerHTML =
		"Please select your age.";
		isValidate = false;
	}else{
		getElement("ageError").innerHTML="";
	}

	if(file === ""){
		getElement("fileError").innerHTML =
		"Please select file";
		isValidate = false;
	}else{
		getElement("fileError").innerHTML="";
	}

	if(isValidate === false){
		return false;
	}else{
		return true;
	}
}
