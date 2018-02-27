if(sessionStorage.accessToken != null && sessionStorage.accessToken != "undefined" && sessionStorage.accessToken != 0){
	//console.log(sessionStorage)
	document.getElementById('loguot_link').style.display = 'block'
	document.getElementById('login_link').style.display = 'none'
	document.getElementById('profile_link').style.display = 'block'
	
}else{
<<<<<<< HEAD
	// window.location = 'index.php'
	
=======
	//window.location = 'index.php'

>>>>>>> 4764ebeb31c0ef007a2618a1cdbd606be0d15792
}

document.getElementById('loguot_link').onclick = function(){
	sessionStorage.clear()
	window.location = 'index.php'

}