// when user click on logout button then the session storage data will be removed
// And logout log time will be stored into the userSession
let sessionArray = JSON.parse(localStorage.getItem("userSession"));

document.getElementById("logout").addEventListener("click", () => {
	if(confirm("Are you sure want to logout?")){
		let index=sessionArray.findIndex((el) =>{
		return el.name === sessionStorage.getItem("user").trim();
		})

		sessionArray[index]['logout'] = new Date();
		localStorage.setItem("userSession",JSON.stringify(sessionArray));
		sessionStorage.removeItem("user");
		window.location.href="Login.html";
	}

});

