/********************
Function return function
********************/
function interviewQuestion(job){
	switch (job){
		case 'designer':
			return function(name){
				console.log(name + ", can you please explain what is UX design?");
			}
		case 'teacher':
			return function(name){
				console.log("What subject do you teach, "+ name + "?");
			}
		default:
			return function(name){
				console.log("Hello, "+ name + " What do you do?");
			}
	}
}

var teacher=interviewQuestion('teacher');
teacher('John');

var designer = interviewQuestion('designer');
designer('Saloni');

// Calling function without storing in any variable
interviewQuestion('driver')('Urvashi');