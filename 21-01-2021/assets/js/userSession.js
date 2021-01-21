// function gets the user data from the local storage and store into the array
function getUserSessionData(){
	 return JSON.parse(localStorage.getItem("userSession"));	
}

function showUserData(){
	let usersArray = getUserSessionData();
	console.log(usersArray);
	let userString = "";
	// Display into the table
	if(usersArray === []){
		userString += "<tr><td colspan='3' class='text-center'> No Data Found </td></tr>";
	}
	else{
		for (x in usersArray){
			if(userArray[x]['role'] === "user"){
				userString += "<tr><td>" + usersArray[x]['name'] + "</td>";
				userString += "<td>" + usersArray[x]['login'] + "</td>";
				userString += "<td>" + usersArray[x]['logout'] || '' + "</td>";
			}
		}
	}

	getElement("users").innerHTML = userString;
}