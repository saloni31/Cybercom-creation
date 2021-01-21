let userArray = JSON.parse(localStorage.getItem("user"));
let lessThan18=0,eighteenToFifty=0,greaterThan50=0;
let now = new Date().getFullYear();
let userString = "";

function compareDate(date){
	let userMonth = new Date(date).getMonth();
	let userDate = new Date(date).getDay();
	let currentMonth = new Date().getMonth();
	let currentDate = new Date().getDay();

	return ((userMonth === currentMonth) && (userDate === currentDate)) ? true : false;
}

userArray.forEach((el)=>{
	if(el['role'] === "user"){
		let userDate = new Date(el['birthdate']).getFullYear();
		let age = now - userDate;
		(age < 18) ? lessThan18++ : (age >= 18 && age < 50) ? eighteenToFifty++ : greaterThan50++;
		if(compareDate(el['birthdate'])){
			userString += "Today is " + el['name'] + "'s birthday.<br>"
		}
	}
});

document.getElementById("year18").innerHTML = lessThan18 + " Users";
document.getElementById("greaterThan18").innerHTML = eighteenToFifty + " Users";
document.getElementById("greaterThan50").innerHTML = greaterThan50 + " Users";
document.getElementById("greetBirthday").innerHTML = userString;
