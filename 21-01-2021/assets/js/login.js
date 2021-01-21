// funtion to get element from the web page based on the ids
function getElement(id) {
	return document.getElementById(id);
}

// function will check whether admin data is there into the local storage
// if there then match the creadentials
// if credentials are correct then redirect to the dashboard.

function login(){
	let userArray = [];
	let email = getElement("email").value;
	let password = getElement("password").value;

	if(localStorage.getItem("user")){
		userArray = JSON.parse(localStorage.getItem("user"));
	}

	let response=userArray.find((el)=>{
		return (el.email === email && el.password === password);
	})

	if(!response){
		alert("Credential Do Not Match");
	}else{
		let sessionArray = [];
		if(localStorage.getItem("userSession")){
			sessionArray = JSON.parse(localStorage.getItem("userSession"));
		}

		let sessionObj = {
			name : response['name'],
			login : new Date(),
			role : response['role']
		};
		(sessionArray === []) ? sessionArray = [sessionObj] : sessionArray.push(sessionObj);

		sessionStorage.setItem("user",response['name']);
		localStorage.setItem("userSession",JSON.stringify(sessionArray));
		alert ("Login successfully");
		(response.role === "admin") ? window.location.href = "Dashboard.html" : window.location.href = "Sub-user.html";
		
	}

}

// clicking on login button call login function so we can verify the credentials
getElement("login").addEventListener("click", (event) =>{
	login();
	event.preventDefault();
});
