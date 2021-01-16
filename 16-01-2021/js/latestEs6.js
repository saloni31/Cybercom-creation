/**********************************
Latest generation Javascript: ES6
**********************************/

// Variable declaration with let and const

// variable declared using var in ES5 have function scoped
// while variable declared using let in ES6 have bolck scoped

/* ES5 */
var name5 = "Jane Smith";
var age5 = 28;
// var name5 = "Jane Millar";
name5 = 'Jane Millar';
console.log(name5);

/* ES6 */
const name6 = 'Jane Smith';
let age6 = 28;				// It allow to modify the data but variable name must be unique we can't declare a same variable again in same block of code
// let age6=30;
// name6 = 'Jane Millar';  // It will not allow to modify the name because it is constant
age=30;

console.log(age);

// what is function scope and block scope 

/* ES5 */
function driverLicence5(passed){
	if(passed){
		console.log(firstName);
		var firstName = "John";
		var birthYear = 1990;
	}
	console.log(firstName + " born in "+ birthYear + " are officially allow to drive a car");
}

driverLicence5(true);

/* ES6 */
function driverLicence6(passed){
	// console.log(firstName);
	let firstName;
	const birthYear = 1990;
	if(passed){
		// let firstName = "John";
		firstName = "John";
		// const birthYear = 1990;
		console.log(firstName + " born in "+ birthYear + " are officially allow to drive a car");
	}
	console.log(firstName + " born in "+ birthYear + " are officially allow to drive a car");
	// Above statement execution is not allow because variable defined in ES6 are block level scoped.
}

driverLicence6(true);

// In ES5 all the variables are declared with undefined before excution while In ES6 it is not possible
// It is good thing in ES6 because it prevents some errors.This happens because of temporal dead zone
// It is basically mean that the variables are hosted but we can not access them before they are declared.

/* ES6 */
let i=23;
for(let i=0; i< 5; i++){
	console.log(i);
}
console.log(i);

/* ES6 */
var j=23;
for(var j=0; j< 5; j++){
	console.log(j);
}
console.log(j);


/***********************************
Blocks and IIFEs
***********************************/

/* ES5 */ 
(function(){
	var a=20;
})

/* ES6 */
{
	let b=10;
	var c=30;
}

console.log(c);
// Here we can able to access variable c because we declared it using var keyword
// And as we know that variables declared with var keyword are function scoped, not block scoped



/**********************************
Strings in ES5 and ES6
**********************************/

let firstName = "John";
let lastName = 'Smith';
const birthYear = 1990;

function calcAge(year){
	return 2021 - year;
}

/* ES5 */
console.log("This is " + firstName + " " + lastName + ". He was born in " + birthYear + " year and today he is "+ calcAge(birthYear) + " years old.");


/* ES6 */
console.log(`This is ${firstName} ${lastName}. He was born in ${birthYear} year and today he is ${2021 - birthYear} years old.`);
const n=`${firstName} ${lastName}`;
console.log(n.startsWith('J'));		// check string starts with 'J' or not
console.log(n.endsWith('th'));		// check string ends with 'th' or not
console.log(n.includes('S'));		// check whether string includes 'S' or not
console.log(`${n} `.repeat(3," "));	// It repeats the string number of time passes in the parameter
console.log(n.indexOf('S'));		// Return the first index of specified string
console.log(n.lastIndexOf('S'));	// Return the last index of specified string
console.log(n.search("Smith"));		// Return the index of specified string
console.log(n.charAt(3));			// Returns the character at specified index
console.log(n.charCodeAt(3));		// Returns the Ascii number of the character on specified index
console.log(firstName.concat(" ",lastName," ",n));	// Join the two or more strings strings
console.log(String.fromCharCode(66));	// Converts the unicode value to characters
console.log(n.length);				// Returns the length of the string
console.log(n.replace('Smith','SINDHI'));	// Replace the characters
console.log(n.replace('SINDHI','Smith'));
console.log(n.slice(0,5));			// Perform slicig on a string from start index to offset
console.log(n.split(" "));			// Convert string into an array
console.log(n.substr(0,5));			// Creates a sub string from start index to offset