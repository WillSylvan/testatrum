<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
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
			height: 150vw !important;
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
		<style>.bt6 button{background-color:rgb(255, 117, 130)}</style>

		<div class="main-content-credit" id="parkreditacija">
			
			<div id="main-content-credit-izvelne-parkreditacija">
				<div class="parkreditacija"><h5>Pieteikties pārkreditācijai</h5></div>
					
				<div>
					<p>Līguma nr.</p>
					<h2>SM4590</h2>
				</div>
				
				<div class="flex borders">
				
					<div class="statuss">
						<div>
							<p>Statuss:</p>
							<p>Kopēja summa atmaksai:</p>
						</div>
						
						<div>
							<p>Samaksa par pakalpojumu:</p>
							<p>Jaunais termiņš:</p>
						</div>
					</div>
					
					<div class="statuss s2">
						<div>
							<p><span>Aktīvs</span></p>
							<p>300.00 EUR</p>
						</div>
						
						<div>
							<p>30.00 EUR</p>
							<p>20.12.2017</p>
						</div>
					</div>
					
				</div>
				
				<div class="flex border-2">
					
					<div class="border-2-1">
						<p>20.12.2017</p>
						<p>20.12.2017</p>
					</div>
					
					<div class="border-2-2">
						<p>Eiropas pateriņa kredīta standartinformācija</p>
						<p>Visparīgie līguma noteikumi</p>
					</div>
					
				</div>
				
				<div class="flex kredita-buttons">
					<button>PIETEIKTIES</button>
				</div>
				
			</div>

		</div>
		
		<?php include 'assets/footer.php'; ?>
		<?php include 'assets/help.php'; ?>		
	</body>
</html>
