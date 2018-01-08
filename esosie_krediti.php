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
						<div><h1>Statuss</h1></div>
						<div class="money"><h1>Kredīts</h1></div>
						<div class="money"><h1>Komisija</h1></div>
						<div><h1>Dienu skaits</h1></div>
						<div><h1>Atmaksāt līdz</h1></div>
						<div><h1>Kopā atmaksāt</h1></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr"><h3><span class="green">Aktīvs</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money"><p>$20.00</p></div>
						<div><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr"><h3><span class="yellow">Pieprasīts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money"><p>$20.00</p></div>
						<div><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr"><h3><span class="violetc">Pagarināts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money"><p>$20.00</p></div>
						<div><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr"><h3><span class="light-green">Apstiprināts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money"><p>$20.00</p></div>
						<div><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr"><h3><span class="red">Kavēts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money"><p>$20.00</p></div>
						<div><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div><p><b>$220.00</b></p></div>
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
						<div><h1>Statuss</h1></div>
						<div class="money"><h1>Kredīts</h1></div>
						<div class="money"><h1>Komisija</h1></div>
						<div><h1>Dienu skaits</h1></div>
						<div><h1>Atmaksāt līdz</h1></div>
						<div><h1>Kopā atmaksāt</h1></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr"><h3><span class="pinkc">Anulēts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money"><p>$20.00</p></div>
						<div><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>5647-0</h3><p>20.12.2017</p></div>
						<div class="nr"><h3><span class="greyc">Atmaksāts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money"><p>$20.00</p></div>
						<div><p>30 dienas</p></div>
						<div><p>20.12.2017</p></div>
						<div><p><b>$220.00</b></p></div>
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
