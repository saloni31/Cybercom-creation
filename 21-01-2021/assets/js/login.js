// funtion to get element from the web page based on the ids
function getElement(id) {
	return document.getElementById(id);
}

// function will check whether admin data is there into the local storage
// if there then match the creadentials
// if credentials are correct then redirect to the dashboard.

function login(){
	let adminArray = [];
	let email = getElement("email").value;
	let password = getElement("password").value;

	if(localStorage.getItem("AdminData")){
		adminArray = JSON.parse(localStorage.getItem("AdminData"));
	}

	if(email === adminArray[0]['email'] && password === adminArray[0]['password']) {
		sessionStorage.setItem("AdminSession",[adminArray[0]['name']]);
		alert ("Login successfully");
		window.location.href = "Dashboard.html";
	}
	else
	{
		alert("Credential Do Not Match");
	}
	console.log(adminArray);
}

// clicking on login button call login function so we can verify the credentials
getElement("login").addEventListener("click", (event) =>{
	login();
	event.preventDefault();
});
