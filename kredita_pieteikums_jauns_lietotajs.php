<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/jauns_lietotajs.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

		<!--<script type="text/javascript">
		function color(c) {document.body.style.backgroundColor=c}
		</script>onclick='color("red")' -->

   </head>

	<body>
		<?php include 'assets/header.php'; ?>
		<div id="page-form-content">
			<div id="page-content-1">
				<h2><span>Kredīta</span> pieteikums</h2>
				<div class="flex klients">
					<div class="flex">
						<div class="flex izvelne">
							<div class="div" style="background-color:rgb(250, 142, 109)"></div>
							<p>Jauns klients</p>
						</div>
						<div class="flex izvelne">
							<div class="div" style="background-color:grey"></div>
							<p>Esošs klients</p>
						</div>
					</div>
					<div class="izvelne" style="margin:0;"><img src="img/back.png"></div>
				</div>
				
				<!--PIRMA FORMA-->
				
				<form id="one-form">
					<div><input placeholder="Vārds, Uzvārds"></div>
					<div><input placeholder="Personas kods"></div>
					<div class="flex info">
						<div><input placeholder="Tel."></div>
						<div><input placeholder="Epasts:"></div>
					</div>
					<div><input placeholder="Darba vieta:"></div>
					<div><input placeholder="Ieņemamais amats"></div>
					<div><input placeholder="Ikmēneša ienākumi:"></div>
					<div><input placeholder="Ikmēneša izdevumi:"></div>
				</form>

				<!--OTRA FORMA-->
				
				<form id="two-form">
					<div><input placeholder="Pilsēta:"></div>
					<div><input placeholder="Iela:"></div>
					<div class="flex info">
						<div><input placeholder="Mājas nr."></div>
						<div><input placeholder="Dzīvokļa nr.:"></div>
					</div>
					<div><input placeholder="Pasta indekss:"></div>
				</form>
				
				<!--TREŠA FORMA-->
				
				<form id="three-form">
					<div><input placeholder="Parole:" type="password"></div>
					<div><input placeholder="Parole atkārtoti:" type="password"></div>
					<div class="flex check">
						<input type="radio" class="radio">
						<p>Piekrītu līguma nosacījumiem, atļauju apstrādāt savus personas datus un apliecinu, ka sniegtā informācija ir patiesa.</p>
					</div>
				</form>
				
				<!--CETURTA FORMA-->
				
				<div id="four-form">
				
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
				
				<!--PIEKTA FORMA-->
				
				<div id="five-form">
					<img src="img/ok.png">
					<h6>Paldies!</h6>
				</div>
				
				<!--SESTA FORMA-->
				
				<div id="six-form">
					<img src="img/ok.png">
					<h6>Jūsu pieteikums ir nosūtīts!</h6>
				</div>
				
				
				<button class="turpinat">Turpināt</button>
			</div>
		</div>	
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
