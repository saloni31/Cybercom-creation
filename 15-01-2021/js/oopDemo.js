/********************
Function Constructor
*********************/

var Person = function(name,birthYear,job){
	this.name=name;
	this.birthYear=birthYear;
	this.job=job;
}

Person.prototype.calculateAge = function() {
	this.age = 2021 - this.birthYear;
};

var name = prompt("Enter your name: ");
var birthYear= prompt("Enter your birth year: ");
var job = prompt("Enter your profession: ");

var john = new Person(name, birthYear, job);
john.calculateAge();
console.log(john.age);


/*****************************
Another way of creating object
using object.create()
*****************************/

var personProto = {
	calculateAge : function(){
		console.log(2021 - this.birthYear);
	}
}

var jane = Object.create(personProto,
{
	name : { value: 'jane'},
	birthYear : {value : 1990},
	job : {value: 'teacher'}
});
jane.calculateAge();

/********************************
primitive vs objects
********************************/

// primitives
var a,b;
a=23;
b=a;
a=46;

console.log("A: "+ a);
console.log("B: "+b);

//objects
var obj1={
	name : "jane",
	age  : 23
};
var obj2=obj1;
obj1.age=30;

console.log("object 1 age: "+ obj1.age);
console.log("object 2 age: "+ obj2.age);

// functions

var age = 27;
var obj = {
	name : 'jonas',
	city : 'nadiad'
};

function change(a,b){
	a=30;
	b.city='baroda';
}

change(age , obj);
console.log("Age: "+age);
console.log("city : "+ obj.city);


/*******************************
Passing function as an argument
*******************************/

var years = [1990 , 1993, 1969, 1977, 2003, 2012];

function arrCalc(arr,fn){
	var resArr = [];
	for (var i = 0; i < arr.length; i++) {
		resArr.push(fn(arr[i]));
	}
	return resArr;
}

function calculateAge(e){
	return 2021-e;
}

function isFullAge(e){
	return e >= 18;
}

function maxHeartRate(e){
	if(e >= 18 && e < 81){
		return Math.round(206.9 - (0.67 * e));
	}
	else{
		return -1;
	}
}

var ages=arrCalc(years , calculateAge);
var fullAge=arrCalc(ages , isFullAge);
var rates=arrCalc(ages , maxHeartRate);
console.log(ages);
console.log(fullAge);
console.log(rates);