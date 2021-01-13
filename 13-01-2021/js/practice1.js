/**************************************************
Calculate total bills of three restaurant
if bill is less than 50$ then tip will be 20%
if bill is between 50 to 200 then tip will be 15%
if bill is greater than 200 then tip will be 10%
***************************************************/

//declaration of required variables
var bills,tips,finalBills;

// initialize some values to the variables
bills = [124,48,268];
tips = [0,0,0];
finalBills = [0,0,0];

// calculating tips and total bill amount based on defined conditions
for (var i = 0; i < bills.length; i++) {
	switch (true){
		case bills[i] < 50:
			tips[i] = Math.floor(bills[i] * 0.2);
			break;
		case bills[i] >= 50 && bills[i] < 200:
			tips[i] = Math.floor(bills[i] * 0.15);
			break;
		case bills[i] >=200:
			tips[i] = Math.floor(bills[i] * 0.1);
			break;
		default:
			tips[i] = 0;
	}

	finalBills[i] = bills[i] + tips[i];
}

// Print the total bill amount on the console
console.log("Final bills are: " + finalBills);