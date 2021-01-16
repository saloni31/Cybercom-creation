/************************************
Immediate Invoked Function Expression
*************************************/

// To make an variable hidden from outside the world , 
//we can declare one function and declare a variable inside it like following

/*
	function game(){
		var score=Math.random()*10;
		console.log(score >= 5);
	}
	game();
*/

// But just for making a variable hidden why we create the whole function to carry it
// instead we can perform it as following,
// function without name and parameter will treat as an function decoration
// since we don't had any name as the function decoration for it so we have to make it function expression
// So the solution is to wrap the function inside the parenthesis
// In java script what we write in the parenthesis is never be a statement
// Then after that we just have to invoke the function so using other parenthesis we invoke the function
// If we don't put parenthesis at last then it will never be called and do nothing in our program.
// We create data privacy over here. this is specially used for it and not for executing piece of code.

(function(){
	var score=Math.random()*10;
	console.log(score >= 5);
})();

// we can also invoke function expression immediately with parameters also
(function(goodLuck){
	var score=Math.random()*10;
	console.log(score >= 5 - goodLuck);
})(5);