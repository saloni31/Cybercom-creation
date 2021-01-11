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