
//test@test.tk	
//1234567

$(function(){
	$('#login_button').click(function(){
		let email = $('#email_input').val()
		let pw = $('#pw_input').val()

		ajax_('Login',{"login":email,"password":pw},function(a){
			console.log(a)
		})
	})
})