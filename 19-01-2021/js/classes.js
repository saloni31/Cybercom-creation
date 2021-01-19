/******************
Classes
******************/

/* ES5 */

var Person5 = function (firstName, birthYear, job) {
	this.firstName = firstName;
	this.birthYear = birthYear;
	this.job = job;
}

Person5.prototype.calculateAge = function() {
	var age = new Date().getFullYear() - this.birthYear;
};

var john5 = Person5('John',1990,'teacher');

/* ES6 */

class Person6{
	constructor(firstName,birthYear,job){
		this.firstName = firstName;
		this.birthYear = birthYear;
		this.job = job;
	}

	calculateAge(){
		var age = new Date().getFullYear() - this.birthYear;
		console.log(age);
	}

	// Declaring static method
	static greeting(){
		console.log("Hey there!");
	}
}

const john6 = new Person6('John',1990,'teacher');
john6.calculateAge();

// Calling static methods
Person6.greeting();



// creating sub classes

/* ES5 */
var Person51 = function (firstName, birthYear, job) {
	this.firstName = firstName;
	this.birthYear = birthYear;
	this.job = job;
}

Person51.prototype.calculateAge = function() {
	var age = new Date().getFullYear() - this.birthYear;
	console.log(age);
};

var Athelete5 = function(firstName,birthYear,job,olympicGames,medals){
	Person5.call(this,firstName,birthYear,job);
	// In above line we call Person function constructure, 
	//because as we know when we create the variable using new keyword
	// Then it will points to the new Athelete class empty object and 
	//if we want that Athelete class can access the Peson
	// Then we need to call Person class constructor to set the variables 
	this.olympicGames = olympicGames;
	this.medals = medals;
}

// Now for creating appropriate prototype chain we will use object.create
// Because object.create allow us to manually create/set a prototype of an object
// and we want prototype of an athelete to be the prototype of the person
// So that they will become connected.

Athelete5.prototype = Object.create(Person51.prototype);

// Now two function constructors are connected with each other and prototype chain is constructed

// We can declare the variable into the protoype only after we connect two function constructors
// And it is only accessible into the Athelete class, Person class does not able to access it.
Athelete5.prototype.wonMedals = function() {
	this.medals++;
	console.log(this.medals);
};

var johnAthelete5 = new Athelete5('John',1990,'swimmer',3,10);
johnAthelete5.calculateAge();
johnAthelete5.wonMedals();

// var john51 =new Person51('John',1990,'teacher');
// john51.wonMedals();


/* ES6 */

class Person61{
	constructor(firstName,birthYear,job){
		this.firstName = firstName;
		this.birthYear = birthYear;
		this.job = job;
	}

	calculateAge(){
		var age = new Date().getFullYear() - this.birthYear;
		console.log(age);
	}

	// Declaring static method
	static greeting(){
		console.log("Hey there!");
	}
}

class Athelete6 extends Person61{
	constructor(firstName,birthYear,job,olympicGames,medals){
		super(firstName,birthYear,job);
		this.olympicGames = olympicGames;
		this.medals = medals;
	}

	wonMedals(){
		this.medals++;
		console.log(this.medals);
	}
}

const johnAthelete6 = new Athelete6('John',1990,'swimmer',3,10);
johnAthelete6.calculateAge();
johnAthelete6.wonMedals();
Athelete6.greeting();
