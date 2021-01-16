/***************
Closures
***************/

// Here retirementAge and a variables are in the scope of retirement
// as we know after return statement retirement function will be pop out from the execution stack
// But still we can use it in anonymous function why is it so?
// It is because of the closures.

function retirement(retirementAge) {
	var a=" years left untill retirement";
	return function(birthYear){
		var age = 2021 - birthYear;
		console.log((retirementAge - age) + a);
	}
}

// An inner function has access of variables as well as parameters even after the outer function returned.
// we think that after completion of retirement() [at time of return statement] it will removed from execution stack
// with its scope chain (i.e. variables and parameters), but it is not happened.
// variables and parameters are still remains there.
// This is a secret of a closure

var retirementUS=retirement(66);
retirementUS(1990);

retirement(66)(1990);


function inteviewQuestion(job){
	return function(name) {
		switch(job){
			case 'designer':
				console.log(name + ", can you please explain what is UX design?");
				break;
			case 'teacher':
				console.log("What subject do you teach, "+ name + "?");
				break;
			default:
				console.log("Hello, "+ name + " What do you do?");
		}
	}
}

inteviewQuestion('teacher')('Saloni');