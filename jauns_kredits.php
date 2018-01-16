<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

		<!--DEMO DEMO DEMO DEMO DEMO-->
		<script>
		$(document).ready(function(){
			$(".button-submit").click(function () {
				$("#main-content-credit-izvelne-2").css("display","block");
				$("#izveleties-kreditu").css("display","none");
			});
			$("#pagarinat-kreditu").click(function () {
				$("#main-content-credit-izvelne-3").css("display","block");
			});
		});
		</script>
		<!--DEMO DEMO DEMO DEMO DEMO-->
		
   </head>

	<body>
		<?php include 'assets/profile-menu.php'; ?>
		<?php include 'assets/header.php'; ?>
		<?php include 'assets/profile-form.php'; ?>
		<style>
		.bt3 button{background-color:rgb(255, 117, 130)}
		#main-id-content{
			position: relative;
			top: 10vw;
		}
		#main-id {
			background-image: url(img/form7.png) !important;
			height: 43vw;
			position: absolute;
			top: 8vw;
			left: 6vw;
			align-items: unset !important;
			justify-content: center;
		}
		</style>
		
		<div id="profils-added">
			<a href="esosie_krediti.php"><div class="flex bt4"><button class="div"></button><p>Esošie kredīti</p></div></a>
			<a href="jauns_kredits.php"><div class="flex bt5"><button class="div"></button><p>Jauns kredīts</p></div></a>
			<a href="parkreditacija.php"><div class="flex bt6"><button class="div"></button><p>Pārkreditācija</p></div></a>
		</div>
		<style>.bt5 button{background-color:rgb(255, 117, 130)}</style>
		
		<!--FORMS FROM INDEX TOP-->
		<div class="main-content-credit flex" id="izveleties-kreditu">
			
			<div id="pos"></div>
		
			<div class="sadalas mani_krediti" id="main-content-credit-izvelne">
				<div id="top-forms" class="flex">
					<div class="form_ f1" onclick='pinkColor()'>
						<div id="first-form" class="flex" >
							<form action="index.php" method="post">

								<div class="short_range_form flex">
									<div class="inputs" id="important">
										<h1><span class="pink">Īstermiņa</span> kredīts</h1>
										<div id="short_echo_money_cont">

											<h3> Cik vēlaties aizņemties</h3>
											<p>Kredīts: <span id="short_echo_money_val"></span></p>

											<input type="range" name="tickmarks" min="50" max="500" value="250" class="slider" id="short_range_money">
										</div>

										<div id="short_echo_days_cont">

											<h3>Uz cik ilgu laiku?</h3>
											<p>Mēneši: <span id="short_echo_days_val"></span></p>

											<input type="range" min="10" max="30" value="10" class="slider" id="short_range_days">							
										</div>
									
										<div class="flex formulas">
											<div>
												<h2>Kredīts:<span id="summa"> 0.00 </span></h2>
												<h2>Kopā:<span id="kopa">100.00</span></h2>
											</div>
											<div>
												<h2>Komisija: <span id="komisija">0.00 (15.00%)</span></h2>
												<h2>GPL: <span id="gpl">0.00</span></h2>
											</div>
										</div>
									</div>

									<div class="info_block">
										<h5>Atmaksas datums: <span class="pink">20.20.2020</span></h5>

										<h4>Kredīta pagarināšana uz 30 dienām:<br><b>22.20 EUR</b></h4>

										<a href="jauzliek links" class="links">*Standartinformācija</a>
										<input type="button" value="SAŅEMT NAUDU" class="rose-button button-submit">
									</div>
								</div>

							</form>
						</div>
					</div>
					
					<div class="form_ f2" onclick='violetColor()'>
						<div id="second-form" class="flex" >
							<form action="index.php" method="post">

								<div class="short_range_form flex">
									<div class="inputs" id="important2">
										<h1><span class="violet">Ilgtermiņa</span> kredīts</h1>
										<div id="short_echo_money_cont">

											<h3> Cik vēlaties aizņemties</h3>
											<p>Kredīts: <span id="short_echo_money_val"></span></p>

											<input type="range" name="tickmarks" min="50" max="500" value="250" class="slider" id="short_range_money">
										</div>

										<div id="short_echo_days_cont">

											<h3>Uz cik ilgu laiku?</h3>
											<p>Mēneši: <span id="short_echo_days_val"></span></p>

											<input type="range" min="10" max="30" value="10" class="slider" id="short_range_days">							
										</div>
									
										<div class="flex formulas">
											<div>
												<h2>Kredīts:<span id="summa"> 1000.00 </span></h2>
												<h2>Kopā:<span id="kopa">100.00</span></h2>
											</div>
											<div>
												<h2>Komisija: <span id="komisija">0.00 (15.00%)</span></h2>
												<h2>GPL: <span id="gpl">0.00</span></h2>
											</div>
										</div>
									</div>

									<div class="info_block">
										<h5>Kredīts jāatmaksā līdz<br>   <span class="violet">01.09.2018</span></h5>
										<h5>Ikmēneša maksājums<br> <span class="violet">158.15 EUR</span></h5>
										<h5>Pirmā maksājuma datums<br>   <span class="violet">19.01.2018</span></h5>
										
										<a href="jauzliek links" class="links">*Standartinformācija</a>
										<input type="button" value="SAŅEMT NAUDU" class="violet-button button-submit">
										
									</div>
								</div>
							</form>
						</div>
					</div>
					
				</div>
			
				<div id="nakamais-aizdevums">
					<h1>Piesakies nākamajam aizdevumam šodien un saņem atlaidi komisijas maksai!</h1>
					<p>Lai saņemtu atlaidi, ieraksti vārdu <b>KLIENTS</b> atlaižu lauciņā, noformējot kredītu.</p>
					
					<div class="flex atlaides">
						<div>
							<p>Summai virs <b>$200:</b> 20% atlaide</p>
							<p>Summai virs <b>$300:</b> 30% atlaide</p>
						</div>
						<div>
							<button id="sms-ligums">Pieteikties</button>
						</div>
					</div>
					
				</div>
			</div>

		</div>
	
		<!--LIGUMI-->
		<div class="main-content-credit">
		
		<!--LIGUMA NR-->
			<div id="main-content-credit-izvelne-2">
			
				<div>
					<p>Līguma nr.</p>
					<h2>SM4590</h2>
				</div>
				
				<div class="flex borders">
				
					<div class="statuss">
						<div>
							<p>Statuss:</p>
							<p>Pieprasījums iesniegts:</p>
							<p>Pieprasījums apstiprināts:</p>
						</div>
						
						<div>
							<p>Kredīta atmaksas termiņš:</p>
							<p>Kredīta summa:</p>
							<p>Komisija:</p>
						</div>
						
						<div>
							<p>Nokavējuma nauda:</p>
							<p>Dienas:</p>
						</div>
					</div>
					
					<div class="statuss s2">
						<div>
							<p><span>Aktīvs</span></p>
							<p>20.12.2017 17:03</p>
							<p>20.12.2017 17:03</p>
						</div>
						
						<div>
							<p>20.12.2017 17:03</p>
							<p>$200.00</p>
							<p>$0.00</p>
						</div>
						
						<div>
							<p>$0.00</p>
							<p>30 dienas</p>
						</div>
					</div>
					
				</div>
				
				<div class="flex border-2">
					
					<div class="border-2-1">
						<p>20.12.2017</p>
						<p>20.12.2017</p>
						<p>20.12.2017</p>
					</div>
					
					<div class="border-2-2">
						<p>Eiropas pateriņa kredīta standartinformācija</p>
						<p>Visparīgie līguma noteikumi</p>
						<p>Speciālie noteikumi</p>
					</div>
					
				</div>
				
				<div class="flex kredita-buttons">
					<button id="pagarinat-kreditu">Pagarināt kredītu</button>
					<button>Kredīta atmaksa</button>
				</div>
				
			</div>
		
		<!--TABLE BANKS FROM INDEX-->
			<div id="main-content-credit-izvelne-3">
				<div id="four-form" action="javascript:void(0)">
					<div class="bank_rekv">
						<div class="tab">
							<button class="tablinks active" onclick="openCity(event, 'swed')"><img src="img/bank/swedbank.png"></button>
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
						<div id="citadele" class="tabcontent" style="display: none;">
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

						<div id="luminor" class="tabcontent" style="display: none;">
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

						<div id="another_b" class="tabcontent" style="display: none;">
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
				<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
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
			</div>
		
		</div>
		
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
