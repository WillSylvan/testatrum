/*COLOR CHANGE*/
function pinkColor(){
	if ($('body').width() >= 900) {
		$("#first-form").css({"background-image":"url(img/form3.png)","z-index":"200"});
		$("#second-form").css({"background-image":"none","z-index":"-1"});
		$("#first-form").animate({"left":"4vw","zoom":"1.1","width":"120%","height":"105%","z-index":"2"},800);
		$("#second-form").animate({"zoom":"0.9","right":"2.5vw","width":"100%","height":"100%","top":"3vw"},800);
		$("#footer").css("background-image","url(img/pink/footer_background_istermina.jpg)");
		$("#important").css({"width":"60%","margin-left":"0"});
		$("#important2").css("width","50%");
		$("#content-grey").css("display","none");
		$("#content-pink").css("display","block");
		$("#content-violet").css("display","none");
		$("#grafiks").css("bottom","10vw");
	}
}

function violetColor(){
	if ($('body').width() >= 900) {
		$("#first-form").css({"background-image":"none","z-index":"-1"});
		$("#second-form").css({"background-image":"url(img/form4.png)","z-index":"200"});
		$("#first-form").animate({"zoom":"0.9","z-index":"-1","left":"2.5vw","width":"100%","height":"100%"},800);
		$("#second-form").animate({"right":"16vw","zoom":"1.1","width":"120%","height":"125%","top":"0vw"},800);
		$("#grafiks").css("bottom","12vw");
		$("#footer").css("background-image","url(img/violet/backgound-footer-violet.jpg)");
		$("#content-grey").css("display","none");
		$("#content-pink").css("display","none");
		$("#content-violet").css("display","block");
		$("#important").css({"margin-left":"8vw","width":"70%"});
		$("#important2").css("width","70%");
	}
}

$(document).ready(function(){
	$('#round-buttons button').click(function(){
		id = $(this).index()
		$('#top-forms .form_').css('display','none')
			$('#top-forms .form_:eq('+id+')').fadeIn(300)
	})
});


