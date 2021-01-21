// funtion to get element from the web page based on the ids
function getElement(id) {
	return document.getElementById(id);
}

// get admin name from the session storage and display in sidebar
if(sessionStorage.getItem("AdminSession")){
	let name=sessionStorage.getItem("AdminSession");
	let index = name.indexOf(" ");
	name = name.substr(0,index);
	getElement("greet").innerHTML = "Hello, "+ name;
}