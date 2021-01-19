/***************************************
Program list out properties of an object
****************************************/

var obj={
	firstName : "Saloni",
	lastName : "Sindhi",
	job : "intern",
	birthYear : 1999,
	age:22
}

/********************************
Display object properties by loop
*********************************/
// List out keys
for(x in obj){
	console.log(x);
}

// List out values
for(x in obj)
{
	console.log(obj[x]);
}

// Print keys and values together
for (x in obj){
	console.log(x + " : " + obj[x]);
}

// Adding new property
obj.nationality = 'Indian';

// Deleting existing property
delete obj.age;

/********************************
Display Object properties by name
********************************/

console.log(`${obj.firstName}, ${obj.lastName}, ${obj.birthYear}, ${obj.job}, ${obj.nationality}`);

/**************************************
Display properties by built in methods
**************************************/
// list out keys
console.log(Object.keys(obj));

// list out values
console.log(Object.values(obj));

/*****************************************
Display properties using JSON.stringify()
*****************************************/

var str = JSON.stringify(obj);
console.log(str);