<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<link rel="icon" href="img/logo.svg">
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
    </head>

	<body>
		<?php include 'assets/header.php'; ?>
		<div class="header-background"></div>

			<!--
				<form action="index.php" method="post">

					<div class="short_range_form">
						<h1>Īstermiņa aizdevums</h1>

						<div class="inputs">
							<div id="short_echo_money_cont">

								<h3> Cik vēlies aizņemties?</h3>
								<p>Aizdevums: <span id="short_echo_money_val"></span></p>

								<input type="range" name="tickmarks" min="50" max="500" value="250" class="slider" id="short_range_money">
							</div>

							<div id="short_echo_days_cont">

								<h3>Uz cik ilgu laiku?</h3>
								<p>Dienas: <span id="short_echo_days_val"></span></p>

								<input type="range" min="10" max="30" value="10" class="slider" id="short_range_days">							
							</div>

							<p>Summa: 0.00</p>
							<p>Kopā: 100.00</p>
							<p>Komisija: 0.00</p>
							<p>GPL: 0.00</p>
						</div>

						<div class="info_block">
							<p>Atmaksāt: 20.20.20</p>

							<p> Kredīta pagarināšana par 30 dienām <br> 22.20$</p>

							<a href="jauzliek links">*Standarta informācija</a>
														
						</div>	
					</div>

					<input type="submit">
				</form>
			-->
			<div id="first_form" style="height: 35vw; width: 100%;"></div>

			<div class="icons_block flex">
				<div class="icon_border">
					<img src="img/grey_icons/home/1.svg" alt="Smiley face">
					<h3>Pirmais kredīts bez komisijas!</h3>
				</div>

				<div class="icon_border">
					<img src="img/grey_icons/home/2.svg" alt="Smiley face">
					<h3>Neizejot ārā no mājām</h3>
				</div>

				<div class="icon_border">
					<img src="img/grey_icons/home/3.svg" alt="Smiley face">
					<h3>15 minūšu laikā</h3>
				</div>

				<div class="icon_border">
					<img src="img/grey_icons/home/4.svg" alt="Smiley face">
					<h3>Minimālas formalitātes</h3>
				</div>
			</div>

			<script>
				// 1.
				var slider_money = document.getElementById("short_range_money");
				var output_money = document.getElementById("short_echo_money_val");
					output_money.innerHTML = slider_money.value;

				slider_money.oninput = function() {
					output_money.innerHTML = this.value;
				}

				// 2.
				var slider_days = document.getElementById("short_range_days");
				var output_days = document.getElementById("short_echo_days_val");
				output_days.innerHTML = slider_days.value;

				slider_days.oninput = function() {
					output_days.innerHTML = this.value;
				}
			</script>

			<div class="headline">
				<h1>Pirmais aizdevums</h1>
			</div>
			
			<div id="icons_block_sec">
				<div class="icons_block_sec flex">
					<div class="icon_border_sec b1">
						<img src="img/grey_icons/credit_icons/6.svg" alt="Smiley face">
						<h3>Piesakiet kredītu internetā</h3>
						<p>Izvēlieties kredīta summu un termiņu.</p>
					</div>

					<div class="icon_border_sec b2">
						<img src="img/grey_icons/credit_icons/7.svg" alt="Smiley face">
						<h3>Reģistrējies</h3>
						<p>Aizpildiet reģistrācijas anketu.</p>
					</div>

					<div class="icon_border_sec b3">
						<img src="img/grey_icons/credit_icons/5.svg" alt="Smiley face">
						<h3>Apstipriniet reģistrāciju</h3>
						<p>Pārskaities no savas bankas reģistrācijas maksu EUR 0.01, maksājuma mērķī norādot: Piekrītu AS Lateko Līzings līguma noteikumiem. Nepieciešamā informācija <a href="Jaieliek links">šeit.</a></p>
					</div>

					<div class="icon_border_sec b4">
						<img src="img/grey_icons/credit_icons/8.svg" alt="Smiley face">
						<h3>Saņemiet naudu 15 minūšu laikā</h3>
						<p>Saņemiet naudu 15 minūšu laikā Jūs saņemsiet uz tālruni 15 minūšu laikā.</p>
					</div>
				</div>
			</div>

			<div id="block-piesakies">
				<div class="piesakies-background"></div>
				
				<div class="headline">
					<h1>Atkārtots aizdevums</h1>
				</div>

				<div class="apply_credit">
					<div class="img-apply-credit"><img src="img/atrum_pc.svg" alt="pc"></div>
					<div class="apply">
						<div><h1>Piesakiet kredītu internetā!</h1></div>
						<div><button class="button_sanemt">Saņēmt kredītu</button></div>
					</div>
				</div>
			
				<div id="raditajs"><img src="img/ico/pink.png"></div>
				
				<div class="three_icons_block flex">
					<div class="tree_icon_border">
						<img src="img/ico/1.png" alt="Smiley face">
						<h3>Ieejiet savā profilā</h3>
					</div>
					<div class="tree_icon_border">
						<img src="img/ico/2.png" alt="Smiley face">
						<h3>Izvēlieties summu un savu kredīta termiņu</h3>
					</div>
					<div class="tree_icon_border">
						<img src="img/ico/3.png" alt="Smiley face">
						<h3>Saņemiet kredītu</h3>
					</div>
				</div>
			</div>
			
			<div id="block-piesakies-mobile">
				<div class="piesakies-background-2"></div>

				<div class="apply_credit-2">
					<div class="img-apply-credit-2"><img src="img/ico/iphone.png" alt=""></div>
					<div class="apply-2">
						<div><h1>Piesakies kredītam caur telefonu!</h1></div>
						<div><button class="button_sanemt-2">Zvanīt</button></div>
					</div>
				</div>
				
				<div class="three_icons_block-2 flex">
					<div class="tree_icon_border-2">
						<img src="img/ico/4.png" alt="Smiley face">
						<h3>Zvani mums:<br>+37122334455 </h3>
					</div>
					<div class="tree_icon_border-2">
						<img src="img/ico/2.png" alt="Smiley face">
						<h3>Izvēlieties summu un savu kredīta termiņu</h3>
					</div>
					<div class="tree_icon_border-2">
						<img src="img/ico/3.png" alt="Smiley face">
						<h3>Saņemiet kredītu</h3>
					</div>
				</div>
			</div>

			<div id="block-atmaksat">
				<div class="headline">
					<h1>Kā atmaksāt?</h1>
				</div>

				<div id="icons_block_sec2">
					<div class="icons_block_sec2 flex">
						<div class="icon_border_sec2 b5">
							<h3>Kā pagarināt kredītu?</h3>
							<p>Kredīta pagarināšanai Jums ir jāpārskaita pagarinājuma maksa uz vienu no mūsu kontiem.</p>
						</div>

						<div class="icon_border_sec2 b6">
							<h3>Kas jānorāda maksājuma mērķī?</h3>
							<p>Maksājuma mērķī jānorāda līguma numurs un vārds <b>„pagarinājums”</b>. Piemērs: Līguma Nr. SMXXXXXX pagarinājums.</p>
						</div>

						<div class="icon_border_sec2 b7">
							<h3>Kā atmaksāt kredītu?</h3>
							<p>Kredīta atmaksai Jums ir jāpārskaita kredīta atmaksas summa uz vienu no mūsu kontiem.</p>
						</div>

						<div class="icon_border_sec2 b8">
							<h3>Kas jānorāda maksājuma mērķī?</h3>
							<p>Maksājuma mērķī jānorāda līguma numurs un vārds <b>„atmaksa”</b>. Piemērs: Līguma Nr. SMXXXXXX atmaksa.</p>
						</div>
					</div>
				</div>
			</div>

			<div id="rekviziti">
			<div class="headline">
				<h1>Mūsu rekvizīti:</h1>
			</div>

			<div class="bank_rekv">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'swed')"><img src="img/bank/swedbank.png"></button>
					<button class="tablinks" onclick="openCity(event, 'citadele')"><img src="img/bank/citadele.png"></button>
					<button class="tablinks" onclick="openCity(event, 'luminor')"><img src="img/bank/luminor.png"></button>
					<button class="tablinks" onclick="openCity(event, 'another_b')"><h2>Cita banka</h2></button>
				</div>
				
				<!-- SWEDBANKA -->
				<div id="swed" class="tabcontent" style="display: block;">
					<div class="saturs">
						<h1>Saņēmējs</h1>
						<p>Lateco līzings as</p>
					</div>
					<div class="saturs">
						<h1>Reģ.Nr.</h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1>Konta numurs:</h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis kredīta atmaksai:</h1>
						<p>Līguma Nr. SMXXXXXX pagarinājums</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis kredīta atmaksai:</h1>
						<p>Līguma Nr. SMXXXXXX atmaksa</p>
					</div>
				</div>
				
				<!-- CITADELE -->
				<div id="citadele" class="tabcontent">
					<div class="saturs">
						<h1>2Saņēmējs</h1>
						<p>Lateco līzings as</p>
					</div>
					<div class="saturs">
						<h1>Reģ.Nr.</h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1>Konta numurs:</h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis kredīta atmaksai:</h1>
						<p>Līguma Nr. SMXXXXXX pagarinājums</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis kredīta atmaksai:</h1>
						<p>Līguma Nr. SMXXXXXX atmaksa</p>
					</div>
				</div>

				<div id="luminor" class="tabcontent">
					<div class="saturs">
						<h1>3Saņēmējs</h1>
						<p>Lateco līzings as</p>
					</div>
					<div class="saturs">
						<h1>Reģ.Nr.</h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1>Konta numurs:</h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis kredīta atmaksai:</h1>
						<p>Līguma Nr. SMXXXXXX pagarinājums</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis kredīta atmaksai:</h1>
						<p>Līguma Nr. SMXXXXXX atmaksa</p>
					</div>
				</div>

				<div id="another_b" class="tabcontent">
					<div class="saturs">
						<h1>4Saņēmējs</h1>
						<p>Lateco līzings as</p>
					</div>
					<div class="saturs">
						<h1>Reģ.Nr.</h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1>Konta numurs:</h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis kredīta atmaksai:</h1>
						<p>Līguma Nr. SMXXXXXX pagarinājums</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis kredīta atmaksai:</h1>
						<p>Līguma Nr. SMXXXXXX atmaksa</p>
					</div>
				</div>
			</div>

			<script>
				function openCity(evt, cityName) {
					var i, tabcontent, tablinks;
					tabcontent = document.getElementsByClassName("tabcontent");
					for (i = 0; i < tabcontent.length; i++) {
						tabcontent[i].style.display = "none";
					}
					tablinks = document.getElementsByClassName("tablinks");
					for (i = 0; i < tablinks.length; i++) {
						tablinks[i].className = tablinks[i].className.replace(" active", "");
					}
					document.getElementById(cityName).style.display = "block";
					evt.currentTarget.className += " active";
				}
			</script>
			</div>
			
			<div class="headline">
				<h1>Jautājumi un Atbildes</h1>
			</div>

			<div id="questions">
				<button class="accordion">Vai es varu saņemt kredītu?</button>
				<div class="panel">
					<p>
						Lai saņemtu kredītu, Jums jābūt:<br>
						- Latvijas iedzīvotājam vecumā no 20 līdz 70 gadiem;<br>
						- atvērtam bankas kontam jebkurā no Latvijas bankām;<br>
						- pastāvīgam mobilā tālruņa pieslēgumam;<br>
						- nedrīkst būt kavētu kredītmaksājumu vai līgumsaistību pārkāpumu.<br>
					</p>
				</div>

				<button class="accordion">Kas jānorāda sadaļā „maksājuma mērķis”, veicot reģistrācijas maksas pārskaitījumu?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>

				<button class="accordion">Kāda kredīta summa man ir pieejama?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				
				<button class="accordion">Cik ātri es saņemšu atbildi par kredīta piešķiršanu?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				
				<button class="accordion">Cik ātri es saņemšu naudu savā bankas kontā?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				
				<button class="accordion">Vai ir iespējams saņemt aizdevumu naktī vai brīvdienās?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				
				<button class="accordion">Kāpēc man tika atteikts kredīts?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				
				<button class="accordion">Kā man rīkoties, ja nevaru atmaksāt kredītu noteiktajā termiņā?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				
				<button class="accordion">Kā es varu nomainīt savu bankas konta numuru?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				
				<button class="accordion">Kā es varu nomainīt savu uzvārdu?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				
				<button class="accordion">Kā es varu nomainīt savu telefona numuru?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				
				<button class="accordion">Kā es varu nomainīt savu e-pasta adresi?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				
				<button class="accordion">Kā es varu nomainīt darba vietu, deklarēto vai faktisko adresi?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
				
				<button class="accordion">Kā man rīkoties, ja aizmirsu savu profila paroli?</button>
				<div class="panel">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
				</div>
			</div>

			<script>
				var acc = document.getElementsByClassName("accordion");
				var i;

				for (i = 0; i < acc.length; i++) {
					acc[i].onclick = function() {
						this.classList.toggle("active");
						var panel = this.nextElementSibling;
						if (panel.style.maxHeight){
						panel.style.maxHeight = null;
						} else {
						panel.style.maxHeight = panel.scrollHeight + "px";
						} 
					}
				}
			</script>

			<div class="headline">
				<h1>Kontakti</h1>
			</div>
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
