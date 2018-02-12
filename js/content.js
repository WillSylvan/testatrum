/*
////
 COLOR CHANGE
////
*/
function pinkColor(){
	if ($('body').width() >= 900) {

		$("#first-form").css({"background-image":"url(img/form3.png)","z-index":"200"});
		$("#second-form").css({"background-image":"none","z-index":"-1"});

		$("#first-form").animate({"left":"4vw","zoom":"1","width":"120%","height":"105%","z-index":"2"},800);
		$("#second-form").animate({"zoom":"0.9","right":"2.5vw","width":"100%","height":"100%","top":"3vw"},800);

		$("#icons_block_sec").css({"background-image":"url(img/pink/pinkfons.png","color":"white"});
		$("#icons_block_sec2").css({"background-image":"url(img/pink/pinkfons2.png","color":"white"});
		$("#footer").css("background-image","url(img/pink/footer_background_istermina.jpg)");

		$("#important").css({"width":"60%","margin-left":"0"});
		$("#important2").css("width","50%");

		$("#f-button").css({"color":"white","border":"none","background-color":"rgb(255,116,131)"});
		$("#s-button").css({"color":"white","border":"none","background-color":"rgb(255,116,131)"});

		$("#raditajs-img").attr("src","img/pink/pink.png");
		$("#violet-mob").attr("src","img/pink/iphone.png");

		$("#img-1").attr("src","img/pink/ico/1.svg");
		$("#img-2").attr("src","img/pink/ico/2.svg");
		$("#img-3").attr("src","img/pink/ico/3.svg");
		$("#img-4").attr("src","img/pink/ico/4.svg");

		$("#img-5").attr("src","img/pink/ico/5.svg");
		$("#img-6").attr("src","img/pink/ico/6.svg");
		$("#img-7").attr("src","img/pink/ico/7.svg");
		$("#img-8").attr("src","img/pink/ico/8.svg");

		$("#img-9").attr("src","img/ico/1.png");
		$("#img-10").attr("src","img/ico/2.png");
		$("#img-11").attr("src","img/ico/3.png");

		$("#img-12").attr("src","img/ico/4.png");
		$("#img-13").attr("src","img/ico/2.png");
		$("#img-14").attr("src","img/ico/3.png");

		$("#grafiks").css("bottom","7.5vw");
	}
}

function violetColor(){
	if ($('body').width() >= 900) {


		$("#first-form").css({"background-image":"none","z-index":"-1"});
		$("#second-form").css({"background-image":"url(img/form4.png)","z-index":"200"});

		$("#first-form").animate({"zoom":"0.9","z-index":"-1","left":"2.5vw","width":"100%","height":"100%"},800);
		$("#second-form").animate({"right":"16vw","zoom":"1","width":"120%","height":"125%","top":"0vw"},800);

		$("#icons_block_sec").css({"background-image":"url(img/violet/violetfons.png","color":"white"});
		$("#icons_block_sec2").css({"background-image":"url(img/violet/violetfons2.png","color":"white"});
		$("#footer").css("background-image","url(img/violet/backgound-footer-violet.jpg)");

		$("#important").css({"margin-left":"8vw","width":"70%"});
		$("#important2").css("width","70%");

		$("#f-button").css({"color":"white","border":"none","background-color":"rgb(173,74,202)"});
		$("#s-button").css({"color":"white","border":"none","background-color":"rgb(173,74,202)"});

		$("#raditajs-img").attr("src","img/violet/violet-bulta.png");
		$("#violet-mob").attr("src","img/violet/tel-violet.png");

		$("#img-1").attr("src","img/violet/ico/9.svg");
		$("#img-2").attr("src","img/violet/ico/10.svg");
		$("#img-3").attr("src","img/violet/ico/11.svg");
		$("#img-4").attr("src","img/violet/ico/12.svg");

		$("#img-5").attr("src","img/pink/ico/5.svg");
		$("#img-6").attr("src","img/pink/ico/6.svg");
		$("#img-7").attr("src","img/pink/ico/7.svg");
		$("#img-8").attr("src","img/pink/ico/8.svg");

		$("#img-9").attr("src","img/violet/ico/13.png");
		$("#img-10").attr("src","img/violet/ico/17.png");
		$("#img-11").attr("src","img/violet/ico/18.png");

		$("#img-12").attr("src","img/violet/ico/16.png");
		$("#img-13").attr("src","img/violet/ico/17.png");
		$("#img-14").attr("src","img/violet/ico/18.png");

		$("#grafiks").css("bottom","11.5vw");
	}
}

$(document).ready(function(){
	$('#round-buttons button').click(function(){
		id = $(this).index()
		$('#top-forms .form_').css('display','none')
			$('#top-forms .form_:eq('+id+')').fadeIn(300)
	})

		let shot_input = new slider('short_range_money','0','0','0','0','0')
		let long_input = new slider('long_range_money','1','0','0','0','0')

	console.log(shot_input)

});


