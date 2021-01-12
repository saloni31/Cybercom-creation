/***************
This Variable
***************/

console.log(this);				

calculateAge(1999);

function calculateAge(year){
	console.log(2021 - year);
	console.log(this); 			// this keyword in regular function call always points to the window object
}

var john={
	name : 'john',
	birthYear: 1990,
	calculateAge: function(){
		console.log(this);
		console.log(2021 - this.birthYear);

		function innerFunction(){
			console.log(this);
		}
		innerFunction();
	}
}

john.calculateAge();

var mike={
	name: 'mike',
	birthYear: 1999
}

mike.calculateAge = john.calculateAge;
mike.calculateAge();