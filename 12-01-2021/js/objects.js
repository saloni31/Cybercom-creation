/************
Objects and Properties
************/

// declaration of an object
var john = {
	firstName : 'John',
	lastName : 'Smith',
	birthYear : 1990,
	family : ['Jane','Mark','Mike','Emily'],
	job : 'teacher',
	isMarried : false
};

// Retrieve data from an object
console.log(john.firstName);
console.log(john['lastName']);
var x = 'birthYear';
console.log(john[x]);

// Mutation of object data

john.job = 'designer';
john['isMarried']=true;
console.log(john);

// New Object Syntax
var jane = new Object();
jane.name='Jane';
jane['lastName']='Smith';
var x = 'birthYear';
jane[x] = 1999;

console.log(jane);


/**********************
Objects and Methods
**********************/

var john = {
	firstName : 'John',
	lastName : 'Smith',
	birthYear : 1990,
	family : ['Jane','Mark','Mike','Emily'],
	job : 'teacher',
	isMarried : false,
	calculateAge : function () {
		this.age= 2021 - this.birthYear;
	}
};

// Calling of function
// john.age= john.calculateAge();

// console.log(john.age);
john.calculateAge();

console.log(john.family.length);

john.family[john.family.length]='Bob';

console.log(john);

