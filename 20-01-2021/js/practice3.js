/*************************************
A program to sort an array of objects
*************************************/

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
var sortedArray=[];
console.log(objArray);
console.log(objArray.sort());

// sort an object by keys and store it in array
for (x in objArray){
	// below line sort an object by keys
	var key = Object.keys(objArray[x]).sort();
	var obj = {};
	for (el in key){
		obj[key[el]]=objArray[x][key[el]];
	}
	
	// Sorted object is pushed into an array
	sortedArray.push(obj);
}
console.log(sortedArray);


// sort an object by its values
function sortByValue(a,b) {
	if(a.Age < b.Age) return -1;
	else if(a.Age > b.Age) return 1;
	else return 0;
}

console.log(sortedArray.sort(sortByValue));




