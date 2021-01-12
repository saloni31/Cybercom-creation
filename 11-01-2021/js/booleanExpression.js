/****************
Boolean expression
*/

var age=16;
var firstName = 'saloni'
if(age < 13){
	console.log(firstName + " is student");
}
else if(age >= 13 && age < 20){
	console.log(firstName + " is teenager");
}
else if(age >= 20 && age < 30){
	console.log(firstName + " is Younger");
}
else{
	console.log(firstName + " is elder person");
}

/******************
Ternary Expression
***/

age >= 18 ? console.log(firstName + " drinks beer"): console.log(firstName + " drinks juice") ;

var drink = age >= 18 ? 'beer' : 'juice';
console.log(drink);


/****************
Switch statement
*****/
var job='teacher';
switch(job){
	case 'teacher':
	case 'instructor':
		console.log(firstName + ' teaches a code.');
		break;
	case 'driver':
		console.log(firstName + ' drives a car.');
		break;
	default:
		console.log(firstName + ' do something else.');
}


switch(true){
	case age < 13:
		console.log(firstName + " is student");
		break;
	case age >= 13 && age < 20:
		console.log(firstName + " is teenager");
		break;
	case age >= 20 && age < 30:
		console.log(firstName + " is Younger");
		break;
	default:
		console.log(firstName + " is elder person");
}