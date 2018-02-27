if(sessionStorage.accessToken != null && sessionStorage.accessToken != "undefined" && sessionStorage.accessToken != 0){
	//console.log(sessionStorage)
	document.getElementById('loguot_link').style.display = 'block'
	document.getElementById('login_link').style.display = 'none'
	document.getElementById('profile_link').style.display = 'block'
	
}else{
	// window.location = 'index.php'
	
}

document.getElementById('loguot_link').onclick = function(){
	sessionStorage.clear()
	window.location = 'index.php'

}