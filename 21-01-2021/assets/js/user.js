// Declare and initialize user array with empty value
let userArray = [];

// check whether user data is stored into the local storage
// if it is stored then get into the array
if(localStorage.getItem("UserData")){
	userArray = JSON.parse(localStorage.getItem("UserData"));
}

// funtion to get element from the web page based on the ids
function getElement(id) {
	return document.getElementById(id);
}

// function that creates user object based on admin entered data
function createUserObject(){
	let userObject = {};
	userObject.name = getElement("name").value;
	userObject.email = getElement("email").value;
	userObject.password = getElement("password").value;
	userObject.birthdate = getElement("birthDate").value;
	return userObject;
}

// function gets the user data from the local storage and store into the array
function getUserData(){
	 return JSON.parse(localStorage.getItem("UserData"));
	
}

function showUserData(){
	let usersArray = getUserData();
	let userString = "";
	// Display into the table
	if(usersArray === []){
		userString += "<tr><td colspan='5' class='text-center'> No Data Found </td></tr>";
	}
	else{
		for (x in usersArray){
			userString += "<tr><td>" + usersArray[x]['name'] + "</td>";
			userString += "<td>" + usersArray[x]['email'] + "</td>";
			userString += "<td>" + usersArray[x]['password'] + "</td>";
			userString += "<td>" + usersArray[x]['birthdate'] + "</td>";
			userString += "<td colspan='2'> <a href='' id='editUser' onclick='editUserData("+ usersArray[x]['email'] + ")'> Edit </a>";
			userString += "<a href='' id='deleteUser'>Delete </a> </td></tr>";
		}
	}
	getElement("users").innerHTML = userString;
}
showUserData();


// function that edit user details in local storage
function editUserData(email){
	alert("Hii");
	let usersArray = getUserData();
	for (x in usersArray){
		if(usersArray[x]['email'] === email){
			getElement("name").value = usersArray[x]['name'];
		}
	} 

}

// clicking on add user buttion object will be created and pushed into the single array
// then we will store array into the local storage
getElement("addUser").addEventListener("click",(event) => {
	(userArray === []) ? userArray = [createUserObject()] : userArray.push(createUserObject());
	localStorage.setItem("UserData",JSON.stringify(userArray));
	window.location.reload(true);
	event.preventDefault();
});

