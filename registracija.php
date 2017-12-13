<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	    <script type="text/javascript" src="js/registration.js"></script>
   </head>

	<body>
		<?php include 'assets/header.php'; ?>
		<div id="page-form-content">
			<div id="page-content-1">
				<h2><span>Kredīta</span> pieteikums</h2>

				<!--PIRMA FORMA-->
			<div id="form-1" style="display: block;">
				<div class="flex klients">
					<div class="flex">
						<div class="flex izvelne">
							<button class="div" style="background-color:rgb(250, 142, 109)"></button>
							<p>Jauns klients</p>
						</div>
						<div class="flex izvelne">
							<button class="div" style="background-color:grey"></button>
							<p>Esošs klients</p>
						</div>
					</div>
					<div class="izvelne" style="margin:0;"><img src="img/back.png"></div>
				</div>
				<form id="one-form" action="javascript:void(0)">
					<div><input name="name" placeholder="Vārds, Uzvārds" onclick="function()"></div>
					<div><input name="p_code" placeholder="Personas kods"></div>
					<div class="flex info">
						<div><input name="phone" placeholder="Tel."></div>
						<div><input name="e_mail" placeholder="Epasts:"></div>
					</div>
					<div><input name="place_of_job" placeholder="Darba vieta:"></div>
					<div><input name="position" placeholder="Ieņemamais amats"></div>
					<div><input name="m_income" placeholder="Ikmēneša ienākumi:"></div>
					<div><input name="m_expenses" placeholder="Ikmēneša izdevumi:"></div>

                    <div><input class="turpinat" type="submit" value="Turpināt"></div>
				</form>
			</div>

				<!--OTRA FORMA-->
			<div id="form-2">
				<div class="flex klients">
					<div class="flex">
						<div class="flex izvelne">
							<button class="div" style="background-color:rgb(250, 142, 109)"></button>
							<p>Jauns klients</p>
						</div>
						<div class="flex izvelne">
							<button class="div" style="background-color:grey"></button>
							<p>Esošs klients</p>
						</div>
					</div>
					<div class="izvelne" style="margin:0;"><img src="img/back.png"></div>
				</div>
				<form id="two-form" action="javascript:void(0)">
					<div><input name="city" placeholder="Pilsēta:"></div>
					<div><input name="street" placeholder="Iela:"></div>
					<div class="flex info">
						<div><input name="home_nr" placeholder="Mājas nr."></div>
						<div><input name="flat_nr" placeholder="Dzīvokļa nr.:"></div>
					</div>
					<div><input name="index" placeholder="Pasta indekss:"></div>

                    <div><input class="turpinat" type="submit" value="Turpināt"></div>
				</form>
			</div>
			
				<!--TREŠA FORMA-->
			<div id="form-3">
				<div class="flex klients">
					<div class="flex">
						<div class="flex izvelne">
							<button class="div" style="background-color:rgb(250, 142, 109)"></button>
							<p>Jauns klients</p>
						</div>
						<div class="flex izvelne">
							<button class="div" style="background-color:grey"></button>
							<p>Esošs klients</p>
						</div>
					</div>
					<div class="izvelne" style="margin:0;"><img src="img/back.png"></div>
				</div>
				<form id="three-form" action="javascript:void(0)">
					<div><input name="pass" placeholder="Parole:" type="password"></div>
					<div><input name="re_pass" placeholder="Parole atkārtoti:" type="password"></div>
					<div class="flex check">
						<input name="check" type="radio" class="radio">
						<p>Piekrītu līguma nosacījumiem, atļauju apstrādāt savus personas datus un apliecinu, ka sniegtā informācija ir patiesa.</p>
					</div>

                    <div><input class="turpinat" type="submit" value="Turpināt"></div>
				</form>

			</div>
				
				<!--CETURTA FORMA-->
			<div id="form-4">	
				<div id="four-form" action="javascript:void(0)">
					<div style="text-align:left ">
						<p>Lai pabeigtu reģistrāciju, veiciet reģistrācijas maksas<br> <b>EUR 0.01</b> pārskaitījumu</p>
					</div>
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
					<button class="veikt">Veikt maksajumu</button>
				</div>
			</div>	
			</div>
		</div>	
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
