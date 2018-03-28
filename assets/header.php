<?php 
	include 'lang/set-lang.php';
	include 'lang/lang-header.php';
?>

<link rel="stylesheet" type="text/css" href="style/header.css">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div id="menu-mobile"><img src="img/burgers.png"></div>
<div id="logo-mobile"><a href="index.php"><img src="img/logo.svg" alt="logo"></a></div>

<script>
	console.log(sessionStorage)
$(document).ready(function(){
	if ($('body').width() <= 900) {
		
	var button = document.getElementById('menu-mobile');
	var actions = {
		1: function() {
			$( ".header" ).slideToggle( "slow", function() {
			});
		},
		2: function() {
			$( ".header" ).slideToggle( "slow", function() {
			});
		}
	};
	var counter = 0;
	button.onclick = function() {
		actions[counter = (counter % 2) + 1]();
	}
	}
});
</script>

<div class="header">
	<div class="logo-img head">
		<a href="index.php"><img src="img/logo.svg" alt="logo"></a>
	</div>
	<div class="my_nav head">
		<ul>
		  <li><a href="index.php#icons_block_sec"><?php echo $language[$lang]['how-to-get'] ?></a></li>
		  <li><a href="index.php#block-atmaksat"><?php echo $language[$lang]['how-payback'] ?></a></li>
		  <li><a href="index.php#questions"><?php echo $language[$lang]['quest-answ'] ?></a></li>
		  <li><a href=""><?php echo $language[$lang]['contract'] ?></a></li>
		  <li><a href="index.php#footer"><?php echo $language[$lang]['contact'] ?></a></li>
		</ul>
	</div>	
	<div class="atribut head">
		<div class="login">
			<a href="nav_ielogots.php" class="button" id="login_link"><?php echo $language[$lang]['login'] ?></a>
			<a href="sakums.php" id="profile_link" class="button" style="display: none; margin-right: 10px;"><?php echo $language[$lang]['myProfle'] ?></a>
			<a style="display: none;" class="button" id="loguot_link"><?php echo $language[$lang]['logout'] ?></a>
			<form class="lang_form">
				<input type="submit" value="lv" name="lang" class="languages">
				<input type="submit" value="ru" name="lang" class="languages">
			</form>
		</div>
	</div>
</div>
<script type="text/javascript" src="js/user.js">
</script>