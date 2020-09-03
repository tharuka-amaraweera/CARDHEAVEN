function svalidate() {
	var u = document.getElementById("username").value;
	var p = document.getElementById("password").value;
	if (u == "ita" && p == "ITA") {
		alert("Login Successful") ;
		window.location = "2.html";
	}
	
	else	
		alert ("Incorrect Username or Password")
		return false;
}