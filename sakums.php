<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<link rel="stylesheet" type="text/css" href="style/sliders.css">
		<script type="text/javascript" src="js/hammer.js"></script>
		<script type="text/javascript" src="js/sliders.js"></script>
		<script type="text/javascript" src="js/ajax.js"></script>
		
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

	<body 	class="sakums">
		<?php include 'lang/lang-change-pass.php'; ?>
		<?php include 'assets/profile-menu.php'; ?>
		<?php include 'assets/header.php'; ?>
		<?php include 'assets/profile-form.php'; ?>
		<?php include 'lang/lang-kredit-formas.php' ?>
		<style>.bt0 button{background-color:rgb(255, 117, 130)}</style>

		<!--FORMS FROM INDEX TOP-->
		<div class="main-content-credit flex" id="izveleties-kreditu">
			
			<div id="pos"></div>
		
			<div class="sadalas mani_krediti" id="main-content-credit-izvelne">
				<div id="top-forms" class="flex">
					<div class="form_ f1 unselectable" onclick='pinkColor()'>
						<div id="first-form" class="flex" >
							<form action="registracija.php" id="short_form" method="post">

								<div class="short_range_form flex">
									<div class="inputs" id="important">
										<h1><?php echo $language[$lang]['short-time'] ?></h1>
										<div id="short_echo_money_cont">

											<h3><?php echo $language[$lang]['how-much'] ?></h3>
											<p><?php echo $language[$lang]['credit'] ?><span id="short_echo_money_val"></span> <span class="repeated_loan" id="short_repeated_loan" style="display: none"><?php echo $language[$lang]['replaycredit'] ?></span></p>

											<!--<input type="range" name="stickmarks" step="5" min="50" max="500" value="250" class="slider" id="short_range_money">-->
											<div class="slider_container">
		                                        <div id="short_range_money"></div>
		                                    </div>

										</div>

										<div id="short_echo_days_cont">

											<h3><?php echo $language[$lang]['how-long-time'] ?></h3>
											<p><?php echo $language[$lang]['months'] ?> <span id="short_echo_days_val"></span></p>

											<!--<input name="sloanTerms" type="range" min="10" max="30" value="10" class="slider" id="short_range_days">-->
											<div class="slider_container">
		                                        <div id="short_range_days"></div>
		                                    </div>

										</div>

										<div class="flex formulas">
											<div>
												<h2><?php echo $language[$lang]['credit'] ?><span id="short_summa"></span></h2>
												<h2><?php echo $language[$lang]['bilance'] ?><span id="short_kopa"></span></h2>
											</div>
											<div>
												<h2><?php echo $language[$lang]['com'] ?><span id="short_komisija"></span></h2>
												<h2><?php echo $language[$lang]['gpl'] ?><span id="short_gpl"></span></h2>
											</div>
										</div>
									</div>

									<div class="info_block">
										<h5><?php echo $language[$lang]['pay-day'] ?><span class="pink" id="short_term_display"></span></h5>

										<h4><?php echo $language[$lang]['pay-on-30-days'] ?><br><b><span id="extention_pay">22.20</span> <?php echo $language[$lang]['eur'] ?></b></h4>

										<a href="jauzliek links" class="links"><?php echo $language[$lang]['stand.-info'] ?></a>
										<input type="button" id="submit_short" value=<?php echo $language[$lang]['get-money'] ?> class="rose-button" onclick="creditInfo(1)">
									</div>
								</div>

							</form>
						</div>
					</div>

					<div class="form_ f2 unselectable" onclick='violetColor()'>
						<div id="second-form" class="flex" >
							<form action="registracija.php" id="long_form" method="post">

								<div class="long_range_form flex">
									<div class="inputs" id="important2">
										<h1><?php echo $language[$lang]['long-time'] ?></h1>
										<div id="long_echo_money_cont">

											<h3><?php echo $language[$lang]['how-much'] ?></h3>
											<p><?php echo $language[$lang]['credit'] ?><span id="long_echo_money_val"></span> <span class="repeated_loan" id="long_repeated_loan" style="display: none"><?php echo $language[$lang]['replaycredit'] ?></span></p>

											<!--<input type="range" name="btickmarks" step="5" min="100" max="1000" value="250" class="slider" id="long_range_money">-->
											<div class="slider_container">
		                                        <div id="long_range_money"></div>
		                                    </div>
										</div>

										<div id="long_echo_days_cont">

											<h3><?php echo $language[$lang]['how-long-time'] ?></h3>
											<p><?php echo $language[$lang]['months'] ?><span id="long_echo_days_val"></span></p>

											<!--<input name="bloanTerms" type="range" min="3" max="12" value="5" class="slider" id="long_range_days">-->
											 <div class="slider_container">
		                                        <div id="long_range_days"></div>
		                                    </div>


										</div>

										<div class="flex formulas">
											<div>
												<h2><?php echo $language[$lang]['credit'] ?><span id="long_summa"></span></h2>
												<h2><?php echo $language[$lang]['bilance'] ?><span id="long_kopa"></span></h2>
											</div>
											<div>
												<h2><?php echo $language[$lang]['com'] ?><span id="long_komisija"></span></h2>
												<!-- <h2><?php echo $language[$lang]['gpl'] ?><span id="long_gpl"></span></h2> -->
											</div>
										</div>
									</div>

									<div class="info_block">
										<!-- <h5><?php echo "first payment date"//$language[$lang]['pay-day'] ?><br>   <span class="violet" id="long_term_display">01.09.2018</span></h5> -->
										<!-- <h5><?php echo $language[$lang]['pay-on-30-days'] ?><br> <span class="violet">158.15 <?php echo $language[$lang]['eur'] ?></span></h5> -->
										<h5><?php echo $language[$lang]['first-pay-day'] ?><br>   <span id="long_term_display" class="violet">19.01.2018</span></h5>


										<a href="jauzliek links" class="links"><?php echo $language[$lang]['stand.-info'] ?></a>
										<a href="grafiks.php" id="grafiks"><?php echo $language[$lang]['pay-graphic'] ?></a>
										<input type="button"  id="submit_long" value=<?php echo $language[$lang]['get-money'] ?> class="violet-button" onclick="creditInfo(2)">

									</div>
								</div>
							</form>
						</div>
					</div>

		</div>

			</div>
					
				</div>
			
				<!--<div id="nakamais-aizdevums">
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
					
				</div>-->
			</div>

		</div>
	
		<!--LIGUMI-->
		<div class="main-content-credit">
		
		<!--LIGUMA NR-->
			<div id="main-content-credit-izvelne-2">
			
				<div>
					<p>Līguma nr.</p>
					<h2>SM123456</h2>
				</div>
				
				<div class="flex borders">
				
					<div class="statuss">
						<div>
							<p>Statuss:</p>
							<p>Pieprasījums iesniegts:</p>
							<p>Pieprasījums apstiprināts:</p>
						</div>
						
						<div>
							<p>Kredīta atmaksas datums:</p>
							<p>Kredīta summa:</p>
							<p>Komisija:</p>
						</div>
						
						<div>
							<p>Nokavējuma procenti:</p>
							<p>Dienas:</p>
						</div>
					</div>
					
					<div class="statuss s2">
						<div>
							<p><span>Aktīvs</span></p>
							<p>20.12.2017</p>
							<p>20.12.2017</p>
						</div>
						
						<div>
							<p>20.12.2017</p>
							<p>200.00 EUR</p>
							<p>0.00 EUR</p>
						</div>
						
						<div>
							<p>0.00 EUR</p>
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
					<button class="tablinks" onclick="openCity(event, 'swed')"><img src="img/bank/swedbank.png"></button>
					<button class="tablinks" onclick="openCity(event, 'citadele')"><img src="img/bank/citadele.png"></button>
					<button class="tablinks" onclick="openCity(event, 'dnb')"><img src="img/bank/dnb.png"></button>
					<button class="tablinks" onclick="openCity(event, 'nordea')"><img src="img/bank/nordea.png"></button>
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
						<h1>Termiņa pagarināšana uz 30 dienām:</h1>
						<p>30.00 EUR</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis:</h1>
						<p>Līguma Nr. SM123456 atmaksa</p>
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
						<h1>Termiņa pagarināšana uz 30 dienām:</h1>
						<p>30.00 EUR</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis:</h1>
						<p>Līguma Nr. SM123456 atmaksa</p>
					</div>
				</div>

				<div id="dnb" class="tabcontent" style="display: none;">
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
						<h1>Termiņa pagarināšana uz 30 dienām:</h1>
						<p>30.00 EUR</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis:</h1>
						<p>Līguma Nr. SM123456 atmaksa</p>
					</div>
				</div>
				
				<div id="nordea" class="tabcontent" style="display: none;">
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
						<h1>Termiņa pagarināšana uz 30 dienām:</h1>
						<p>30.00 EUR</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis:</h1>
						<p>Līguma Nr. SM123456 atmaksa</p>
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
						<h1>Termiņa pagarināšana uz 30 dienām:</h1>
						<p>30.00 EUR</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis:</h1>
						<p>Līguma Nr. SM123456 atmaksa</p>
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
	<script type="text/javascript" src="js/content.js"></script>
</html>
