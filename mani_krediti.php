<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

   </head>

	<body>
		<?php include 'assets/header.php'; ?>
		
		<?php include 'assets/profile-form.php'; ?>
		<style>.bt3 button{background-color:rgb(255, 117, 130)}</style>
		
	<!--MANI KREDITI-->
	<div id="main-content-credit" class="flex">
	
	<div id="pos"></div>
	
	<!--FROM INDEX-->
	<div class="sadalas mani_krediti" id="main-content-credit-izvelne">
		<div id="top-forms" class="flex">
			<div class="form_ f1" onclick='pinkColor()'>
				<div id="first-form" class="flex" >
					<form action="index.php" method="post">

						<div class="short_range_form flex">
							<div class="inputs" id="important">
								<h1><span class="pink">Īstermiņa</span> aizdevums</h1>
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
							
								<div class="flex formulas">
									<div>
										<h2>Summa:<span id="summa"> 0.00 </span></h2>
										<h2>Kopā:<span id="kopa">100.00</span></h2>
									</div>
									<div>
										<h2>Komisija: <span id="komisija">0.00 (15.00%)</span></h2>
										<h2>GPL: <span id="gpl">0.00</span></h2>
									</div>
								</div>
							</div>

							<div class="info_block">
								<h5>Atmaksāt līdz: <span class="pink">20.20.20</span></h5>

								<h4>Kredīta pagarināšana par 30 dienām:<br><b>22.20$</b></h4>

								<a href="jauzliek links" class="links">*Standarta informācija</a>
								<input type="submit" value="SAŅEMT NAUDU" class="rose-button">
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
								<h1><span class="violet">Ilgtermiņa</span> aizdevums</h1>
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
							
								<div class="flex formulas">
									<div>
										<h2>Summa:<span id="summa"> 0.00 </span></h2>
										<h2>Kopā:<span id="kopa">100.00</span></h2>
									</div>
									<div>
										<h2>Komisija: <span id="komisija">0.00 (15.00%)</span></h2>
										<h2>GPL: <span id="gpl">0.00</span></h2>
									</div>
								</div>
							</div>

							<div class="info_block">
								<h5>Atmaksāt līdz: <span class="violet">20.20.20</span></h5>

								<h4>Kredīta pagarināšana par 30 dienām:<br><b>22.20$</b></h4>

								<a href="jauzliek links" class="links">*Standarta informācija</a>
								<input type="submit" value="SAŅEMT NAUDU" class="violet-button">
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
	
	<div id="main-content-credit-izvelne-2">
	
		<div>
			<p>Līguma nr.</p>
			<h2>SM4590</h2>
		</div>
		
		<div class="flex borders">
			<div></div>
			<div></div>
		</div>
		
		<div></div>
		
		<div></div>
		
	</div>
	
	</div>
	
	<!--DEMO DEMO DEMO DEMO DEMO-->
	<script>
	$(document).ready(function(){
		$("#sms-ligums").click(function () {
			$("#main-content-credit-izvelne").css("display","none");
			$("#main-content-credit-izvelne-2").css("display","block");
		});
	});
	</script>
	<!--DEMO DEMO DEMO DEMO DEMO-->
	
		
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
