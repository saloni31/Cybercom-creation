// create the array for the admin
let adminArray;
// initialize array as empty
adminArray = [];

// check whether admin data is stored into the local storage
// if stored then show message and redirect to login page.
if(localStorage.getItem("AdminData")){
	alert("Already one admin is registered, sorry");
	window.location.href="login.html";
}

// funtion to get element from the web page based on the ids
function getElement(id) {
	return document.getElementById(id);
}

// function to create an object from the user entered data
function generateObject(){
	let adminObj={};
	adminObj.name = getElement("name").value;
	adminObj.email = getElement("email").value;
	adminObj.password = getElement("password").value;
	adminObj.city = getElement("city").value;
	adminObj.state = getElement("state").value;
	return adminObj;
}

// clicking on register button admin data will be stored in one single array and in local storage
getElement("register").addEventListener("click",(event) => {
	adminArray === [] ? adminArray = [generateObject()] : adminArray.push(generateObject());
	localStorage.setItem("AdminData",JSON.stringify(adminArray))
	alert("You are registered successfully");
	window.location.href="login.html";
	
	event.preventDefault();
});