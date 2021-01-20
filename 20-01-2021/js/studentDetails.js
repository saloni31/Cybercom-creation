// Get data from the local storage and store into the array
var studentArray = JSON.parse(localStorage.getItem("StudentData"));
var str = "";

// display all the data into the table
for (x in studentArray){
	str += "<tr><td>" + studentArray[x]['Id'] + "</td>";
	str += "<td>" + studentArray[x]['Name'] + "</td>";
	str += "<td>" + studentArray[x]['RollNo'] + "</td>";
	str += "<td>" + studentArray[x]['Java'] + "</td>";
	str += "<td>" + studentArray[x]['Python'] + "</td>";
	str += "<td>" + studentArray[x]['Php'] + "</td>";
	str += "<td>" + studentArray[x]['JS'] + "</td>";
	str += "<td>" + studentArray[x]['ASP'] + "</td>";
	str += "<td>" + studentArray[x]['Percentage'] + "%</td>";
	str += "<td>" + studentArray[x]['Grade'] + "</td></tr>";
}

document.getElementById("studentData").innerHTML = str;