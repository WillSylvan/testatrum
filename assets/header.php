<link rel="stylesheet" type="text/css" href="style/header.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<div id="menu-mobile"><img src="img/burgers.png"></div>
<div id="logo-mobile"><img src="img/logo.svg" alt="logo"></div>
<script>
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
		  <li><a href="#icons_block_sec">Kā saņemt?</a></li>
		  <li><a href="#block-atmaksat">Kā atmaksāt?</a></li>
		  <li><a href="#questions">Jautājumi un Atbildes</a></li>
		  <li><a href="">Līgums</a></li>
		  <li><a href="#footer">Kontakti</a></li>
		</ul>
	</div>	
	<div class="atribut head">
		<div class="login">
			<a href="nav_ielogots.php" class="button">Ienākt</a>
			<h3>RU</h3>
		</div>
	</div>
</div>