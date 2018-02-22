
//test@test.tk	
//1234567
if(sessionStorage.accessToken != null && sessionStorage.accessToken != "undefined" && sessionStorage.accessToken != 0){
	//alert('asas')
	window.location = "sakums.php"
}else{}


$(function(){
	$('#login_button').click(function(){
		let email = $('#email_input').val()
		let pw = $('#pw_input').val()

		ajax_('Login',{"login":email,"password":pw},function(a){
			console.log(a)
			if(a.accessToken != null && a.accessToken != "undefined" && a.accessToken != 0){
				sessionStorage.firstName = a.firstName
				sessionStorage.lastName = a.lastName
				sessionStorage.accessToken = a.accessToken
				window.location = "sakums.php"
			}else{
				document.getElementById('login_error').style.display = 'block'
			}
		})
	})
})



