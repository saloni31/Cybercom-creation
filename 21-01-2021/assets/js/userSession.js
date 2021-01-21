// function gets the user data from the local storage and store into the array
function getUserSessionData(){
	 return JSON.parse(localStorage.getItem("userSession"));	
}

// function formats date into user readable format
function dateFormat(date){
	let formattedDate = new Date(date);
	return formattedDate.getDay() + "-" + formattedDate.getMonth() + "-" + formattedDate.getFullYear() + " " + formattedDate.getHours() + ":" + formattedDate.getMinutes();
}

// function display the user session data on the web page
function showUserSessionData(){
	let usersArray = getUserSessionData();
	console.log(usersArray);
	let userString = "";
	// Display into the table
	if(usersArray === []){
		userString += "<tr><td colspan='3' class='text-center'> No Data Found </td></tr>";
	}
	else{
		for (x in usersArray){
			if(usersArray[x]['role'] === "user"){
				userString += "<tr><td>" + usersArray[x]['name'] + "</td>";
				userString += "<td>" + dateFormat(usersArray[x]['login']) + "</td>";
				userString += "<td>" + dateFormat(usersArray[x]['logout']) + "</td>";
			}
		}
	}

	getElement("users").innerHTML = userString;
}

showUserSessionData();