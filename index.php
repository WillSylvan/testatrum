<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<link rel="icon" href="img/logo.svg">
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		
		<!--<script type="text/javascript">
		function color(c) {document.body.style.backgroundColor=c}
		</script>-->
		<script>
		var checkk = function(){
	
		}
		
		</script>
	   	<script>
		
	   </script>
    </head>
 
	<body>
		<?php include 'assets/header.php'; ?>
		<div class="header-background"></div>

		<div id="top-forms" class="flex">
			<div class="form_ f1" onclick='pinkColor()'>
				<div id="first-form" class="flex" >
					<form action="index.php" method="post">

						<div class="short_range_form flex">
							<div class="inputs" id="important">
								<h1><span class="pink">Īstermiņa</span> kredīts</h1>
								<div id="short_echo_money_cont">

									<h3> Cik vēlaties aizņemties</h3>
									<p>Kredīts: <span id="short_echo_money_val"></span> <span class="repeated_loan" id="short_repeated_loan" style="display: none">Atkārtots aizdevums</span></p>

									<input type="range" name="tickmarks" step="5" min="50" max="500" value="250" class="slider" id="short_range_money">
									<div class="values_steps"><span>50</span><span>100</span><span>200</span><span>300</span><span>400</span><span>500</span></div>

								</div>

								<div id="short_echo_days_cont">

									<h3>Uz cik ilgu laiku?</h3>
									<p>Dienas: <span id="short_echo_days_val"></span></p>

									<input type="range" min="10" max="30" value="10" class="slider" id="short_range_days">		
									<div class="values_steps"><span>10</span><span>15</span><span>20</span><span>25</span><span>30</span></div>

								</div>
							
								<div class="flex formulas">
									<div>
										<h2>Kredīts:<span id="short_summa"> 0.00 </span></h2>
										<h2>Kopā:<span id="short_kopa">100.00</span></h2>
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
								<input type="submit" value="SAŅEMT NAUDU" class="rose-button">
							</div>
						</div>

					</form>
				</div>
			</div>
			
			<div class="form_ f2" onclick='violetColor()'>
				<div id="second-form" class="flex" >
					<form action="index.php" method="post">

						<div class="long_range_form flex">
							<div class="inputs" id="important2">
								<h1><span class="violet">Ilgtermiņa</span> kredīts</h1>
								<div id="long_echo_money_cont">

									<h3> Cik vēlaties aizņemties</h3>
									<p>Kredīts: <span id="long_echo_money_val"></span> <span class="repeated_loan" id="long_repeated_loan" style="display: none">Atkārtots aizdevums</span></p>

									<input type="range" name="tickmarks" step="5" min="100" max="1000" value="250" class="slider" id="long_range_money">
									<div class="values_steps"><span>100</span><span>300</span><span>500</span><span>750</span><span>1000</span></div>
								</div>

								<div id="long_echo_days_cont">

									<h3>Uz cik ilgu laiku?</h3>
									<p>Mēneši: <span id="long_echo_days_val"></span></p>

									<input type="range" min="3" max="12" value="5" class="slider" id="long_range_days">	
									<div class="values_steps"><span>3</span><span>6</span><span>9</span><span>12</span></div>


								</div>
							
								<div class="flex formulas">
									<div>
										<h2>Kredīts:<span id="long_summa"> 1000.00 </span></h2>
										<h2>Kopā:<span id="long_kopa">100.00</span></h2>
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
								<input type="button" value="APSKATĪT MAKSĀJUMU GRAFIKU" class="violet-button button-submit" id="grafiks">
								<input type="submit" value="SAŅEMT NAUDU" class="violet-button">
								
							</div>
						</div>
					</form>
				</div>
			</div>
			
		</div>
		
		<div id="round-buttons" class="flex">
			<button id="butt1"></button>
			<button id="butt2"></button>
		</div>
		
		<script>
		
		</script>
			
			<div class="icons_block flex">
				<div class="icon_border">
					<img id="img-1" src="img/grey_icons/home/1.svg" alt="Smiley face">
					<h3>Pirmais kredīts bez komisijas</h3>
				</div>

				<div class="icon_border">
					<img id="img-2" src="img/grey_icons/home/2.svg" alt="Smiley face">
					<h3>Neizejot no mājām</h3>
				</div>

				<div class="icon_border">
					<img id="img-3" src="img/grey_icons/home/3.svg" alt="Smiley face">
					<h3>Tikai 15 minūšu laikā</h3>
				</div>

				<div class="icon_border">
					<img id="img-4" src="img/grey_icons/home/4.svg" alt="Smiley face">
					<h3>Minimālas formalitātes</h3>
				</div>
			</div>

			<script>
				// 1.
			
			</script>

			<div class="headline">
				<h1>Pirmais kredīts</h1>
			</div>
			
			<div id="icons_block_sec">
				<div class="icons_block_sec flex">
					<div class="icon_border_sec b1">
						<img id="img-5" src="img/grey_icons/credit_icons/6.svg" alt="Smiley face">
						<h3>Piesakiet kredītu internetā</h3>
						<p>Izvēlieties kredīta summu un termiņu</p>
					</div>

					<div class="icon_border_sec b2">
						<img id="img-6" src="img/grey_icons/credit_icons/7.svg" alt="Smiley face">
						<h3>Reģistrējieties</h3>
						<p>Aizpildiet reģistrācijas anketu</p>
					</div>

					<div class="icon_border_sec b3">
						<img id="img-7" src="img/grey_icons/credit_icons/5.svg" alt="Smiley face">
						<h3>Apstipriniet reģistrāciju</h3>
						<p>Pārskaitiet no sava bankas konta reģistrācijas maksu EUR 0.01, maksājuma mērķī norādot: Piekrītu AS Lateko Līzings liguma noteikumiemNepieciešamā informācija maksājuma veikšanai ŠEIT<a href="#footer">šeit.</a></p>
					</div>

					<div class="icon_border_sec b4">
						<img id="img-8" src="img/grey_icons/credit_icons/8.svg" alt="Smiley face">
						<h3>Saņemiet kredītu</h3>
						<p>Lēmumu par kredīta piešķiršanu Jūs saņemsiet īsziņas veidā 15 minūšu laikā</p>
					</div>
				</div>
			</div>

			<div id="block-piesakies">
				<div class="piesakies-background"></div>
				
				<div class="headline">
					<h1>Atkārtots kredīts</h1>
				</div>

				<div class="apply_credit">
					<div class="img-apply-credit"><img src="img/pink/atrum_pc.svg" alt="pc"></div>
					<div class="apply">
						<div><h1>Piesakiet kredītu internetā!</h1></div>
						<div><button class="button_sanemt" id="f-button">Saņēmt kredītu</button></div>
					</div>
				</div>
			
				<div id="raditajs"><img id="raditajs-img" src="img/pink/pink.png"></div>
				
				<div class="three_icons_block flex">
					<div class="tree_icon_border">
						<img id="img-9" src="img/ico/1.png" alt="Smiley face">
						<h3>Ieejiet savā profilā</h3>
					</div>
					<div class="tree_icon_border">
						<img id="img-10" src="img/ico/2.png" alt="Smiley face">
						<h3>Izvēlieties kredīta summu un termiņu</h3>
					</div>
					<div class="tree_icon_border">
						<img id="img-11" src="img/ico/3.png" alt="Smiley face">
						<h3>Saņemiet kredītu</h3>
					</div>
				</div>
			</div>
			
			<div id="block-piesakies-mobile">
				<div class="piesakies-background-2"></div>

				<div class="apply_credit-2">
					<div class="img-apply-credit-2"><img id="violet-mob" src="img/pink/iphone.png" alt=""></div>
					<div class="apply-2">
						<div><h1>Piesakiet kredītu pa telefonu!</h1></div>
						<div><button class="button_sanemt-2" id="s-button">Zvanīt</button></div>
					</div>
				</div>
				
				<div class="three_icons_block-2 flex">
					<div class="tree_icon_border-2">
						<img id="img-12" src="img/ico/4.png" alt="Smiley face">
						<h3>Piezvaniet mums:<br>+37122334455 </h3>
					</div>
					<div class="tree_icon_border-2">
						<img id="img-13" src="img/ico/2.png" alt="Smiley face">
						<h3>Izvēlieties kredīta summu un termiņu</h3>
					</div>
					<div class="tree_icon_border-2">
						<img id="img-14" src="img/ico/3.png" alt="Smiley face">
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
					<h1>Maksājuma mērķis kredīta atmaksai:</h1>
					<p>Līguma Nr. SMXXXXXX pagarinājums</p>
				  </div>
				  <div class="saturs">
					<h1>Maksājuma mērķis kredīta atmaksai:</h1>
					<p>Līguma Nr. SMXXXXXX atmaksa</p>
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

			<div class="headline">
				<h1>Kontakti</h1>
			</div>
		<?php include 'assets/footer.php'; ?>	
	</body>
		<script type="text/javascript" src="js/content.js"></script>

</html>
