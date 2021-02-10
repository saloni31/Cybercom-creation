// the file that validate fields of update and add contact form

const getElement = (id) => {
	return document.getElementById(id);
}

const validateForm = (event,id) => {
	event.preventDefault();
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
		let data = {'name' : name, 'email' : email, 'phone' : phone, 'title': title};
		if(id === 'create'){
			alert("Hii");
			$.ajax({
				url : "service/createContact.php",
				type: "post",
				data : data,
				success: (response) => {
					alert(response);
					// let data = JSON.Parse(response);
					console.log(response);
					// if(response === "Done"){
					$("#message").text(response['name']);
					// }	
				}
			});
		}else{
			$.ajax({
				url : "service/updateContact.php",
				type: "post",
				data : JSON.stringify(data),
				success: (response) =>{
					console.log(response);
				}
			});
		}
	}
}