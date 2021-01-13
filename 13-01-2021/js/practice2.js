/*******************************
Compare the BMI of John and mark
But this time using Object and methods
*******************************/

//declaring required variables
var mark, john;

//initialize the objects
mark = {
	fullName : "Mark Smith",
	mass : 70,
	height : 167,
	calculateBMI : function () {
		this.bmi = this.mass / this.height ^ 2;
	}
}

john = {
	fullName : "John Smith",
	mass : 75,
	height : 170
}

//assigning calculateBMI method to john object also so we didn't have to write it again
john.calculateBMI = mark.calculateBMI;

// calling of calculateBMI()
mark.calculateBMI();
john.calculateBMI();

//Comparisons of both BMI and print output on the console
if(mark.bmi === john.bmi){
	console.log(mark.fullName + "'s BMI "+ mark.bmi + " is Equal to the " + john.fullName + "'s BMI " + john.bmi);
}
else if(mark.bmi > john.bmi){
	console.log(mark.fullName + "'s BMI "+ mark.bmi + " is higher than " + john.fullName + "'s BMI " + john.bmi);
}
else{
	console.log(john.fullName + "'s BMI "+ john.bmi + " is higher than " + mark.fullName + "'s BMI " + mark.bmi);
}
