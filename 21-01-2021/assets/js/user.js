// Declare and initialize user array with empty value
let userArray = [];

// check whether user data is stored into the local storage
// if it is stored then get into the array
if(localStorage.getItem("user")){
	userArray = JSON.parse(localStorage.getItem("user"));
}

// funtion to get element from the web page based on the ids
function getElement(id) {
	return document.getElementById(id);
}

// function that creates user object based on admin entered data
function createUserObject(){
	let userObject = {};
	userObject.role = "user";
	userObject.name = getElement("name").value;
	userObject.email = getElement("email").value;
	userObject.password = getElement("password").value;
	userObject.birthdate = getElement("birthDate").value;
	return userObject;
}

// function gets the user data from the local storage and store into the array
function getUserData(){
	 return JSON.parse(localStorage.getItem("user"));	
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
			if(userArray[x]['role'] === "user"){
				userString += "<tr><td>" + usersArray[x]['name'] + "</td>";
				userString += "<td>" + usersArray[x]['email'] + "</td>";
				userString += "<td>" + usersArray[x]['password'] + "</td>";
				userString += "<td>" + usersArray[x]['birthdate'] + "</td>";
				userString += "<td colspan='2'> <a id='editUser' onclick='setUserData("+ x + ")' class='text-primary'> Edit </a>";
				userString += "<a id='deleteUser' onclick='deleteUserData("+ x + ")' class='text-primary'>Delete </a> </td></tr>";
			}
		}
	}

	getElement("users").innerHTML = userString;
}
showUserData();


// function deletes the user data from the local storage
function deleteUserData(id){
	let arr = getUserData();
	arr.splice(id,1);
	localStorage.setItem("user",JSON.stringify(arr));
	window.location.reload(true);
}

let currentIndex = "";
// function that edit user details in local storage
function setUserData(id){
	currentIndex = id;
	getElement("userHeader").innerHTML = "Update User";
	getElement("addUser").value = "Update User"
	let usersArray = getUserData();
	getElement("name").value = usersArray[id]['name'];
	getElement("email").value = usersArray[id]['email'];
	getElement("password").value = usersArray[id]['password'];
	getElement("birthDate").value = usersArray[id]['birthdate'];
}


// clicking on add user buttion object will be created and pushed into the single array
// then we will store array into the local storage
getElement("addUser").addEventListener("click",(event) => {
	if(getElement("addUser").value === "Add User"){
		(userArray === []) ? userArray = [createUserObject()] : userArray.push(createUserObject());
		localStorage.setItem("user",JSON.stringify(userArray));
		window.location.reload(true);
	}
	else if(getElement("addUser").value === "Update User"){
		let usersArray = getUserData();
		usersArray[currentIndex]['name'] = getElement("name").value;
		usersArray[currentIndex]['email'] = getElement("email").value;
		usersArray[currentIndex]['password'] = getElement("password").value;
		usersArray[currentIndex]['birthdate'] = getElement("birthDate").value;
		localStorage.setItem("user",JSON.stringify(usersArray));
		currentIndex="";
		window.location.reload(true);
	}
	event.preventDefault();
});

