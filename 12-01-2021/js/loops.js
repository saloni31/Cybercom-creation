/********************
Loops and Iterations
*********************/

// For loop

for(var i = 0 ; i<10; i++){
	console.log(i);
}

for(var i = 0 ; i<10; i+= 2){
	console.log(i);
}

var family = ['Jane','Mark','Mike',1970,'Emily',1980,'Bob',1990];

for (var i = 0; i < family.length ; i++) {
	console.log(family[i]);
}



// While loop

// Looping backward
var i = family.length - 1;
while(i >= 0){
	console.log(family[i]);
	i--;
}


// Continue and break statements

for (var i = 0; i < family.length ; i++) {
	if (typeof family[i] !== 'string') continue;
	console.log(family[i]);
}

for (var i = 0; i < family.length ; i++) {
	if (typeof family[i] !== 'string') break;
	console.log(family[i]);
}