/************************************************************
Add multiple objects in array and store it in local storage.

o Object contains the below properties,
o Name, Age, Email, Telephone Number.
o Display the multiple objects in table structure.
************************************************************/

// creating multiple objects
var obj1 = {
	name : "John Smith",
	Age : 28,
	Email : "john@gmail.com",
	mobile : 9923451234
}

var obj2 = {
	name : "Mike Smith",
	Age : 24,
	Email : "mike@gmail.com",
	mobile : 9923451234
}

var obj3 = {
	name : "Bob Smith",
	Age : 20,
	Email : "bob@gmail.com",
	mobile : 9923451234
}

// store all objects in one array
var objArray = [obj1,obj2,obj3];
console.log(objArray);	

// store object array into local storage
localStorage.setItem("John",JSON.stringify(objArray));

var data = JSON.parse(localStorage.getItem("John"));
var str="";
for (x in data){
	str += "<tr><td>" + data[x]['name'] + "</td>";
	str += "<td>" + data[x]['Age'] + "</td>";
	str += "<td>" + data[x]['Email'] + "</td>";
	str += "<td>" + data[x]['mobile'] + "</td></tr>";
}

document.getElementById('data').innerHTML = str;

