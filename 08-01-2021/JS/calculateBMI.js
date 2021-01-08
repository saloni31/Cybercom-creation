/* Coding challange 1 */ 

// Declaring required variables
var massMark, massJohn, heightMark, heightJohn, johnBMI, markBMI, greaterBMI;

//Define variables by asking to the user

massMark= prompt("What is Mark's mass (in kg)?");
massJohn= prompt("What is John's mass (in kg)?");

heightMark=prompt("What is Mark's height (in meter)?");
heightJohn=prompt("What is John's height (in meter)?");

//Calculate BMI
johnBMI= massJohn / (heightJohn ^ 2);
markBMI=massMark / (heightMark ^ 2);

// Compare both BMIs and store result in greaterBMI variable
greaterBMI=johnBMI > markBMI;

//Print result on console
console.log("Mark's BMI: "+ markBMI);
console.log("John's BMI: "+ johnBMI);
console.log("Is Mark's BMI higher than Mark's BMI? " + greaterBMI );

