const validate_form = () =>{
	let isValidate = true;
	let genderFlag = false;
	let gameFlag = false;
	let name = document.getElementById("name").value;
	let password = document.getElementById("password").value;
	let address = document.getElementById("address").value;
	let gender = document.getElementsByName("gender");
	let game = document.getElementsByName("game[]");
	let age = document.getElementById("age").value;
	let file = document.getElementById("file").value;

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

	if(address === ""){
		document.getElementById("addressError").innerHTML=
		"Please enter your address.";
		isValidate = false;
	}else{
		document.getElementById("addressError").innerHTML="";
	}

	for(var i=0; i<gender.length; i++){
		if(gender[i].checked === true) {
			genderFlag=true ;
		}
	}

	if(genderFlag === false){
		document.getElementById("genderError").innerHTML = 
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
		document.getElementById("gameError").innerHTML = 
		"Please select your game";
		isValidate = false;
	}

	if(age === "0"){
		document.getElementById("ageError").innerHTML =
		"Please select your age.";
		isValidate = false;
	}else{
		document.getElementById("ageError").innerHTML="";
	}

	if(file === ""){
		document.getElementById("fileError").innerHTML =
		"Please select file";
		isValidate = false;
	}else{
		document.getElementById("fileError").innerHTML="";
	}

	if(isValidate === false){
		return false;
	}else{
		return true;
	}
}
