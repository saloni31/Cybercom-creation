// funtion to get element from the web page based on the ids
function getElement(id) {
	return document.getElementById(id);
}

// get admin name from the session storage and display in sidebar
if(sessionStorage.getItem("user")){
	let name=sessionStorage.getItem("user");
	let index = name.indexOf(" ");
	name = name.substr(0,index);
	getElement("greet").innerHTML = "Hello, "+ name;
}
else{
	window.location.href = "Login.html";
}

