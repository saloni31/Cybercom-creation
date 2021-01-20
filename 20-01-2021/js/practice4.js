/***********************************************************************************************
Create one html form that contain the below fields,

o Name, Email, Date of birth.

o On click of submit button, Store the data as object in one single array. (array will be same for all records)

o Display the data in one table format another page that is, view.html
***********************************************************************************************/
var obj,name,email,birthDate,objArray;
objArray=[];
obj = {};
if(localStorage.getItem("data")){
	objArray = JSON.parse(localStorage.getItem("data"));
}
document.getElementById("submit").addEventListener("click",() => {
	
	name = document.getElementById("name").value;
	// alert(name);
	email = document.getElementById("email").value;
	// alert(email);
	birthDate = document.getElementById("birthdate").value;
	// alert(document.getElementById("birthDate").value);

	if(name !== " " && email !== " " && birthDate !== " "){
		objArray.push({
		name : name,
		email : email,
		birthDate : birthDate
		})
		// objArray.push(obj);
		localStorage.setItem("data",JSON.stringify(objArray));
	}
});


