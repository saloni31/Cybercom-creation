// when user login to the system then on the dashboard we verify their birthdate with current date
// it it's birth date then display "happy birthday!"
let userArray = JSON.parse(localStorage.getItem("user"));

let response=userArray.find((el) =>{
	return el.name === sessionStorage.getItem("user").trim();
})

function compareDate(date){
	let userMonth = new Date(date).getMonth();
	let userDate = new Date(date).getDay();
	let currentMonth = new Date().getMonth();
	let currentDate = new Date().getDay();

	return ((userMonth === currentMonth) && (userDate === currentDate)) ? true : false;
}
console.log(sessionStorage.getItem("user").trim());
console.log(compareDate(response['birthdate']));
if(compareDate(response['birthdate'])){
	document.getElementById("birthday").innerHTML = "Happy Birthday !";
}