/***********************
Bind, call and apply
***********************/

var john = {
	name : 'John',
	age : 28,
	job : 'teacher',
	presentation: function (style, timeOfDay) {
		if(style === 'formal') {
			console.log("Good "+timeOfDay+", Ladies and gentleman! I'm "+ this.name+" and I'm " + this.job+" I'm "+this.age+ " years old");
		}
		else if(style === 'friendly'){
			console.log("Hey what's up? I'm "+ this.name+" and I'm " + this.job+" I'm "+this.age+ " years old. Have a nice "+ timeOfDay + "!!");
		}
	}
};

var emily = {
	 name : 'Emily',
	 age : 23,
	 job : 'designer'
};

var jane = {
	 name : 'Jane',
	 age : 30,
	 job : 'driver'
};

john.presentation('formal', 'morning');

/* use of call function*/
// In call function the first argument will be this
// Here we mention emily so now presentation function points to the values of emily, not the john
// This is called function borrowing beacase we borrow function presentation
// From a john in emily.

john.presentation.call(emily,'friendly','afternooon');

/* use of apply function */
// It is same as call function just arguments are different.
// First argument accept this keyword (here we will mention emily)
// Second argument will be array of the parameters required in the function

john.presentation.apply(emily, ['friendly','afternooon']);

/* Use of bind function */
// It is similar to the call function in order to use it.
// But the main difference between both functions are
// bind function does not call method immediately like call function
// Instead it creates a copy of the function so we can store it somewhere
// bind function will return a function
// First parameter is this keyword and further we can define some preset parameters

var emilyPresentation=john.presentation.bind(emily);
emilyPresentation('friendly','afternooon');

// we can also write like this
var janePresentation = john.presentation.bind(jane,'formal');
janePresentation('evening');

// whatever we did over here in bind function is called currying.
// It is a technique in which we create a function based on another function but with some preset parameters

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

function isFullAge(limit ,e){
	return e >= limit;
}

var ages = arrCalc(years,calculateAge);
var fullJapan = arrCalc(ages, isFullAge.bind(this , 20));
console.log(ages);
console.log(fullJapan);