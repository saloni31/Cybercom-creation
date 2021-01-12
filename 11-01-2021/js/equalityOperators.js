/*************
Truthy and falsy values and equality operators
******/

// falsy values are: undefined,null,0,'',NaN
// truthy values are: Not alsy values

var height;
if(height){
	console.log("variable is defined");
}
else{
	console.log("variable is not defined");
}


// equality operator

height = 23;
if(height == '23'){
	console.log("equality == operator does type coersion.");
}