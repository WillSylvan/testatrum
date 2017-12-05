<html>
    <head>     
		<!--<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Baloo" rel="stylesheet">-->
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<link rel="icon" href="img/logo.svg">
		
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

    </head>

	<body>
		<div class="container">
			<?php include 'assets/header.php'; ?>


			<div class="two_forms">

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


				<div class="icons_block">

					<div class="icon_border">
						<img src="img/grey_icons/home/1.svg" alt="Smiley face" height="120" width="120">
						<h3>Pirmais kredīts bez komisijas!</h3>
					</div>

					<div class="icon_border">
						<img src="img/grey_icons/home/2.svg" alt="Smiley face" height="120" width="120">
						<h3>Neizejot ārā no mājām</h3>
					</div>

					<div class="icon_border">
						<img src="img/grey_icons/home/3.svg" alt="Smiley face" height="120" width="120">
						<h3>15 minūšu laikā</h3>
					</div>

					<div class="icon_border">
						<img src="img/grey_icons/home/4.svg" alt="Smiley face" height="120" width="120">
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
			</div>

			<!-- AIZDEVUMS!!! -->

			<div class="headline">
				<h1>Pirmais Aizdevums</h1>
			</div>

			<div class="icons_block_sec">

				<div class="icon_border_sec">
					<img src="img/grey_icons/credit_icons/5.svg" alt="Smiley face" height="120" width="120">
					<h3>Piesakiet kredītu internetā</h3>
					<p>Izvēlieties kretīta summu un termiņu.</p>
				</div>

				<div class="icon_border_sec">
					<img src="img/grey_icons/credit_icons/6.svg" alt="Smiley face" height="120" width="120">
					<h3>Reģistrējies</h3>
					<p>Aizpildiet reģistrācijas anketu.</p>
				</div>

				<div class="icon_border_sec">
					<img src="img/grey_icons/credit_icons/7.svg" alt="Smiley face" height="120" width="120">
					<h3>Apstipriniet reģistrāciju</h3>
					<p>Pārskaities no savas bankas reģistrācijas maksu EUR 0.01, maksājuma mērķī norādot: Piekrītu AS Lateko Līzings līguma noteikumiem. Nepieciešamā informācija <li><a href="Jaieliek links">šeit.</a></li>  </p>
				</div>

				<div class="icon_border_sec">
					<img src="img/grey_icons/credit_icons/8.svg" alt="Smiley face" height="120" width="120">
					<h3>Saņemiet naudu 15 minūšu laikā</h3>
					<p>Saņemiet naudu 15 minūšu laikā Jūs saņemsiet uz tālruni 15 minūšu laikā.</p>
				</div>

			</div>

			<div class="headline">
				<h1>Atkārtots Aizdevums</h1>
			</div>
			<!--  PC BILDE -->
			<div class="apply_credit">
				<h1>Piesakiet kredītu internetā</h1>

				<div class="login">
					<a href="#" class="button">Pieteikties</a>
				</div>

				<img src="img/atrum_pc.svg" alt="pc" height="700" width="700">

			</div>

			<div class="three_icons_block">

				<div class="tree_icon_border">
					<img src="img/grey_icons/home/1.svg" alt="Smiley face" height="120" width="120">
					<h3>Ieejiet savā profilā</h3>
				</div>

				<div class="tree_icon_border">
					<img src="img/grey_icons/home/2.svg" alt="Smiley face" height="120" width="120">
					<h3>Izvēlieties summu un savu kredīta termiņu</h3>
				</div>

				<div class="tree_icon_border">
					<img src="img/grey_icons/home/3.svg" alt="Smiley face" height="120" width="120">
					<h3>Saņemiet kredītu</h3>
				</div>

			</div>

			<!-- TELEFONA BILDE -->

			<div class="apply_credit">
				<h1>Piesakiet kredītu Telefonā</h1>

				<div class="login">
					<a href="#" class="button">Pieteikties</a>
				</div>

				<img src="img/atrum_pc.svg" alt="tel" height="700" width="700">

			</div>

			<div class="three_icons_block">

				<div class="tree_icon_border">
					<img src="img/grey_icons/home/1.svg" alt="Smiley face" height="120" width="120">
					<h3>Zvani mums: <br> +371 22334455</h3>
				</div>

				<div class="tree_icon_border">
					<img src="img/grey_icons/home/2.svg" alt="Smiley face" height="120" width="120">
					<h3>Izvēlieties summu un savu kredīta termiņu</h3>
				</div>

				<div class="tree_icon_border">
					<img src="img/grey_icons/home/3.svg" alt="Smiley face" height="120" width="120">
					<h3>Saņemiet kredītu</h3>
				</div>

			</div>

			<!-- ends -->
			<div class="headline">
				<h1>Kā atmaksāt?</h1>
			</div>

			<div class="icons_block_sec">

				<div class="icon_border_sec">
					<h1>--</h1>
					<h3>Kā pagarināt kredītu?</h3>

					<p>Kredīta pagarināšanai Jums ir <br>
					jāpārskaita pagarinājuma <br>
					maksa uz vienu no mūsu <br>kontiem.
				</div>

				<div class="icon_border_sec">
					<h1>--</h1>
					<h3>Kas jānorāda <br> maskājuma mērķī?</h3>

					<p>Maksājuma mērķī jānorāda līguma numurs un vārds <br>
					"pagarinājums". <br> Piemēram: Līguma Nr.SMXXXXXX <br> Pagarinājums./p>
				</div>

				<div class="icon_border_sec">
					<h1>--</h1>
					<h3>Kā atmaksāt kredītu?</h3>
					<p>Kredīta atmaksai Jums ir <br> jāpārskaita kredīta atmaskas <br> summa uz vienu no mūsu <br> kontiem</p>
				</div>

				<div class="icon_border_sec">
					<h1>--</h1>
					<h3>Kas jānorāda <br> maskājuma mērķī?</h3>

					<p>Maksājuma mērķī jānorāda līguma numurs un vārds <br>
					"pagarinājums". <br> Piemēram: Līguma Nr.SMXXXXXX <br> Pagarinājums./p>
				</div>

			</div>

			<div class="headline">
				<h1>Mūsu rekvezīti:</h1>
			</div>

			<div class="bank_rekv">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'swed')"/><img src="img/bank/swedbank.png" height="30" width="110"</button>
					<button class="tablinks" onclick="openCity(event, 'citadele')"/><img src="img/bank/citadele.png" height="30" width="110"</button>
					<button class="tablinks" onclick="openCity(event, 'luminor')"/>LUMINOR</button>
					<button class="tablinks" onclick="openCity(event, 'another_b')">CITA BANKA</button>
				</div>
				
				<!-- SWEDBANKA -->
				<div id="swed" class="tabcontent" style="display: block;">
					<h1>1.Saņēmējs</h1>
					<p>Lateco līzings as</p>

					<h1>Reģ.Nr.</h1>
					<p>40003366651</p>

					<h1>Konta numurs:</h1>
					<p>LV67HABA0551033353134</p>

					<h1>Maksājuma mērķis kredīta atmaksai:</h1>
					<p>Līguma Nr. SMXXXXXX pagarinājums</p>

					<h1>Maksājuma mērķis kredīta atmaksai:</h1>
					<p>Līguma Nr. SMXXXXXX atmaksa</p>
				</div>
				
				<!-- CITADELE -->
				<div id="citadele" class="tabcontent">
					<h1>2.Saņēmējs</h1>
					<p>Lateco līzings as</p>

					<h1>Reģ.Nr.</h1>
					<p>40003366651</p>

					<h1>Konta numurs:</h1>
					<p>LV67HABA0551033353134</p>

					<h1>Maksājuma mērķis kredīta atmaksai:</h1>
					<p>Līguma Nr. SMXXXXXX pagarinājums</p>

					<h1>Maksājuma mērķis kredīta atmaksai:</h1>
					<p>Līguma Nr. SMXXXXXX atmaksa</p>
				</div>

				<div id="luminor" class="tabcontent">
					<h1>3.Saņēmējs</h1>
					<p>Lateco līzings as</p>

					<h1>Reģ.Nr.</h1>
					<p>40003366651</p>

					<h1>Konta numurs:</h1>
					<p>LV67HABA0551033353134</p>

					<h1>Maksājuma mērķis kredīta atmaksai:</h1>
					<p>Līguma Nr. SMXXXXXX pagarinājums</p>

					<h1>Maksājuma mērķis kredīta atmaksai:</h1>
					<p>Līguma Nr. SMXXXXXX atmaksa</p>
				</div>

				<div id="another_b" class="tabcontent">
					<h1>4.Saņēmējs</h1>
					<p>Lateco līzings as</p>

					<h1>Reģ.Nr.</h1>
					<p>40003366651</p>

					<h1>Konta numurs:</h1>
					<p>LV67HABA0551033353134</p>

					<h1>Maksājuma mērķis kredīta atmaksai:</h1>
					<p>Līguma Nr. SMXXXXXX pagarinājums</p>

					<h1>Maksājuma mērķis kredīta atmaksai:</h1>
					<p>Līguma Nr. SMXXXXXX atmaksa</p>
				</div>
			</div>

			<div style="clear: both;"></div> 
			<!-- FLOATI NOTĪRĪTI -->

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
			
			<?php include 'assets/footer.php'; ?>
		</div>

		
		
	</body>
</html>
