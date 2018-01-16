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
		
		@media screen and (max-width: 900px){
		#main-id, #profile-added {
			width: 100% !important;
			height: 130vw !important;
			position: fixed !important;
			top: 0 !important;
			left: 0 !important;
			align-items: center !important;
			justify-content: center;
			background-image: -moz-linear-gradient( 180deg, rgba(255,116,131,0.9) 0%, rgba(253,158,98,0.9) 100%) !important;
			background-image: -webkit-linear-gradient( 180deg, rgba(255,116,131,0.9) 0%, rgba(253,158,98,0.9) 100%) !important;
			background-image: -ms-linear-gradient( 180deg, rgba(255,116,131,0.9) 0%, rgba(253,158,98,0.9) 100%) !important;
			z-index:2
		}
		#main-id-content{
			position: relative;
			top: 20vw;
		}
		#profils-added {
			position: fixed;
			top: 60vw;
			left: 30vw;
			z-index: 2;
		}
		}
		</style>
		
		<div id="profils-added">
			<a href="esosie_krediti.php"><div class="flex bt4"><button class="div"></button><p>Esošie kredīti</p></div></a>
			<a href="jauns_kredits.php"><div class="flex bt5"><button class="div"></button><p>Jauns kredīts</p></div></a>
			<a href="parkreditacija.php"><div class="flex bt6"><button class="div"></button><p>Pārkreditācija</p></div></a>
		</div>
		<style>.bt4 button{background-color:rgb(255, 117, 130)}</style>
	
		<div id="aizdevumi">
		
			<div id="istermina">
			
				<h2>
					<span>Īstermiņā</span> kredīts
				</h2>
				
				<p>
					Ja Jums ir radušies jautājumi par kredītiem vai atmaksu, lūdzam sūtīt ziņu<br>
					uz <b> info@atrum.lv </b> minot kredīta Nr. un pieteikšanās datumu.
				</p>
				
				<div class="table-aizdevumi">
				
					<div>
						<div><h1>Kredīta nr.</h1></div>
						<div class="statuss"><h1>Statuss</h1></div>
						<div class="money"><h1>Kredīts</h1></div>
						<div class="money komisija"><h1>Komisija</h1></div>
						<div class="dienu-skaits"><h1>Dienu skaits</h1></div>
						<div><h1>Atmaksāt līdz</h1></div>
						<div class="kopa-atm"><h1>Kopā atmaksāt</h1></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr statuss"><h3><span class="green">Aktīvs</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr statuss"><h3><span class="yellow">Pieprasīts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr statuss"><h3><span class="violetc">Pagarināts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr statuss"><h3><span class="light-green">Apstiprināts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr statuss"><h3><span class="red">Kavēts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
				</div>
				
				<div class="additional-info flex">
					<div>
						<p>13.03.2017 12.23<br>
						<span>Eiropas pateriņa kredīta standarinformācija</span></p>
					</div>
					<div><button>Skatīt visus</button></div>
				</div>
				
			</div>
			
			<div id="ilgtermina">
				<h2>
					<span>Ilgtermiņa</span> kredīts
				</h2>
				
				<p>
					Ja Jums ir radušies jautājumi par kredītiem vai atmaksu, lūdzam sūtīt ziņu<br>
					uz <b> info@atrum.lv </b> minot kredīta Nr. un pieteikšanās datumu.
				</p>
				
				<div class="table-aizdevumi">
				
					<div>
						<div><h1>Kredīta nr.</h1></div>
						<div class="statuss"><h1>Statuss</h1></div>
						<div class="money"><h1>Kredīts</h1></div>
						<div class="money komisija"><h1>Komisija</h1></div>
						<div class="dienu-skaits"><h1>Dienu skaits</h1></div>
						<div><h1>Atmaksāt līdz</h1></div>
						<div class="kopa-atm"><h1>Kopā atmaksāt</h1></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr statuss"><h3><span class="pinkc">Anulēts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr statuss"><h3><span class="greyc">Atmaksāts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
				</div>
				
				<div class="additional-info flex">
					<div>
						<p>13.03.2017 12.23<br>
						<span>Eiropas pateriņa kredīta standarinformācija</span></p>
					</div>
					<div><button>Skatīt visus</button></div>
				</div>
				
			</div>
			
		</div>
		
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
