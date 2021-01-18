/**********************
Arrow Functions
**********************/

const years = [1990,1969,1977,1999,2003,2012,2014];

/* ES5 */
var ages5 = years.map(function (el) {
	return 2021-el;
})
console.log(ages5); 

/* ES6 */
let ages6 = years.map(el => 2021-el);
console.log(ages6);

ages6 = years.map((el, index) => `array element ${index + 1} : ${2021-el}.`);
console.log(ages6);

ages = years.map((el, index) => {
	let now = new Date().getFullYear();
	return `array element ${index + 1} : ${now-el}.`;
});
console.log(ages6);

// Arrow function doesn't have this keyword, so we use laxical this keyword.

/* ES5 */
var green5 = {
	color : 'green',
	position : 1,
	clickMe : function(){
		var self = this;
		document.getElementById("green").addEventListener('click', function(){
			var str = "This is box number "+ self.position + " and it is "+ self.color + ".";
			alert(str);
		});
	}
}

// green.clickMe();

/* ES6 */
const green6 = {
	color : 'green',
	position : 1,
	clickMe : function(){
		
		document.getElementsByClassName("green")[0].addEventListener('click', () => {
			var str = "This is box number "+ this.position + " and it is "+ this.color + ".";
			alert(str);
		});
	}
}

green6.clickMe();

// Another example of Array function

function Person(name){
	this.name = name;
}

/* ES5 */
Person.prototype.myFriends5 = function(friends) {
	var arr = friends.map(function(el)
	{
		return this.name + " is friends with "+el;
	}.bind(this));
	console.log(arr);
};

var friends = ['Bob','Mike','Jane'];
new Person('John').myFriends5(friends);

/* ES6 */
Person.prototype.myFriends6 = function(friends) {
	var arr = friends.map((el) =>
	{
		return this.name + " is friends with "+el;
	});
	console.log(arr);
};
new Person('John').myFriends6(friends);


/******************************************
Destructuring in ES6
******************************************/

var arr = ['john',26];

/* ES5 */
// var name = arr[0];
// var age = arr[1];

/* ES6 */
var [name,age] = arr;
console.log(name);
console.log(age);

// we can also destructure objects
var obj ={
	firstName : "John",
	lastName : "Smith"
};

var {firstName, lastName} = obj;
console.log(firstName);
console.log(lastName);

var {firstName:a, lastName:b} = obj;
console.log(a);
console.log(b);


function calcAgeRetirement(year){
	var age = new Date().getFullYear() - year;
	return [age , 65-age];
}

var [age1,retirement] = calcAgeRetirement(1999);
console.log(age1);
console.log(retirement);

/************************************************
Arrays in ES6
************************************************/

const boxes = document.querySelectorAll('.box');
console.log(boxes);

/* ES5 */
var boxArr5 = Array.prototype.slice.call(boxes);
console.log(boxArr5);

// boxArr5.forEach(function(cur){
// 	cur.style.backgroundColor = 'dodgerblue';
// });

// for(var i=0; i< boxArr5.length; i++){
// 	if(boxArr5[i].className.includes('blue')){
// 		continue;
// 	}
// 	// boxArr5[i].style.backgroundColor = "dodgerblue";
// 	// boxArr5[i].textContent = "I changed to Blue";
// }

/* ES6 */
const boxArr6= Array.from(boxes);
// boxArr6.forEach(cur => cur.style.backgroundColor = 'dodgerblue');

// for(const cur of boxArr6){
// 	if(cur.className.includes('blue')){
// 		// alert("Blue");
// 		continue;
// 	} else{
// 	cur.style.backgroundColor = 'dodgerblue';
// 	cur.textContent = "I changed to Blue";
// 	}
// }


/* ES5 */
var ages = [10,13,8,20,19,22];
var fullAge = ages.map(function(cur){
	return cur >= 18;
}); 
console.log(fullAge);
console.log(ages[fullAge.indexOf(true)]);

/* ES6 */
console.log(ages.findIndex(cur => cur >= 18));
console.log(ages.find(cur => cur >= 18));
