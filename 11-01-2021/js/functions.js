/*****************
Functions
*****************/


function calulateAge(birthYear){
	return 2020 - birthYear;
}

var age = calulateAge(1999);
console.log(age);

function yearsUntillRetirement(year,firstName){
	var age = calulateAge(year);
	var retirement = 65-age;

	if(retirement > 0){
		console.log(firstName + ' retires in '+ retirement + ' year.');
	}
	else{
		console.log(firstName + ' is already retired before '+ Math.abs(retirement) + ' year.');
	}
	
}	

yearsUntillRetirement(1999 , 'saloni');
yearsUntillRetirement(1945 , 'John');


/*********************
Function statements and expressions
*********************/

// function expression

console.log(whatDoYouDo);
var whatDoYouDo = function (job , firstName){
	switch (job){
		case 'teacher':
			return firstName + ' teaches kids how to code.';
		case 'driver':
			return firstName + ' drives a car.';
		case 'designer':
			return firstName + ' designes a beautiful websites';
		default: 
			return firstName + ' do something else';
		}
}
console.log(whatDoYouDo);
console.log(whatDoYouDo('designer','saloni'));


//function statements just perform some actions and does not produces immediate results.

if(true){
	console.log(23);
}