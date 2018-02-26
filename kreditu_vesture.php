<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">

		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<!-- <script type="text/javascript" src="js/user."></script> -->
		<script type="text/javascript" src="js/ajax.js"></script>
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
			top: 70vw;
			left: 30vw;
			z-index: 2;
		}
		}
		</style>
		
	<!-- 	<div id="profils-added">
			<a href="jauns_kredits.php"><div class="flex bt6"><button class="div"></button><p>Jauns kredīts</p></div></a>
			<a href="kreditu_vesture.php"><div class="flex bt4"><button class="div"></button><p>Kredītu vēsture</p></div></a>
		</div> -->
		<style>.bt4 button{background-color:rgb(255, 117, 130)}</style>
	
		<div id="aizdevumi">
		
			<div id="istermina">
			
				<h2>
					<span>Īstermiņā</span> kredīti
				</h2>
				
				<div class="table-aizdevumi" id="isstermina_tabula">
					<div>
						<div><h1>Līguma nr.</h1></div>
						<div class="statuss"><h1>Statuss</h1></div>
						<div class="money"><h1>Kredīts</h1></div>
						<div class="money komisija"><h1>Komisija</h1></div>
						<div class="dienu-skaits"><h1>Termiņš dienās</h1></div>
						<div><h1>Atmaksas datums</h1></div>
						<div class="kopa-atm"><h1>Kopējā summa</h1></div>
					</div>
					
				<!-- 
					<div class="with-borders">
						<div class="nr"><h3>SM123456</h3></div>
						<div class="nr statuss"><h3><span class="green">Aktīvs</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30%</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>SM123456</h3></div>
						<div class="nr statuss"><h3><span class="yellow">Pieprasīts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30%</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>SM123456</h3></div>
						<div class="nr statuss"><h3><span class="violetc">Pagarināts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30%</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>SM123456</h3></div>
						<div class="nr statuss"><h3><span class="light-green">Apstiprināts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30%</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>SM123456</h3></div>
						<div class="nr statuss"><h3><span class="red">Kavēts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>$20.00</p></div>
						<div class="dienu-skaits"><p>30%</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>-->
					
				</div> 
				
			</div>
			
			<div id="ilgtermina">
				<h2>
					<span>Ilgtermiņa</span> kredīti
				</h2>
				
				<div class="table-aizdevumi" id="ilgtermina_tabula">
				
					<div>
						<div><h1>Līguma nr.</h1></div>
						<div class="statuss"><h1>Statuss</h1></div>
						<div class="money"><h1>Kredīts</h1></div>
						<div class="money komisija"><h1>Procenti</h1></div>
						<div class="dienu-skaits"><h1>Termiņš mēnešos</h1></div>
						<div><h1>Atmaksas datums</h1></div>
						<div class="kopa-atm"><h1>Kopēja summa</h1></div>
					</div>
					
					<!--<div class="with-borders">
						<div class="nr"><h3>SM123456</h3></div>
						<div class="nr statuss"><h3><span class="pinkc">Anulēts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>2%</p></div>
						<div class="dienu-skaits"><p>30%</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>
					
					<div class="with-borders">
						<div class="nr"><h3>SM123456</h3></div>
						<div class="nr statuss"><h3><span class="greyc">Atmaksāts</span></h3><p>20.12.2017</p></div>
						<div class="money"><p>$200</p></div>
						<div class="money komisija"><p>2%</p></div>
						<div class="dienu-skaits"><p>30%</p></div>
						<div><p>20.12.2017</p></div>
						<div class="kopa-atm"><p><b>$220.00</b></p></div>
					</div>-->
					
				</div>
				
			</div>
			
		</div>
		
		<?php include 'assets/footer.php'; ?>	
	</body>
	<script type="text/javascript">
		
		ajax_('GetLoans',{
		  "accessToken": sessionStorage.accessToken
		},function(a){
			console.log(a)
			let html = {Short:'',Long:''}
			
			for (var i = 0; i < a.loans.length; i++) {
				html[a.loans[i].type] += `<div class="with-borders"><div class="nr"><h3>${a.loans[i].number}</h3></div>
						<div class="nr statuss"><h3><span class="violetc">${a.loans[i].status}</span></h3><p>${a.loans[i].dates.request.split('T')[0]}</p></div>
						<div class="money"><p>${a.loans[i].totalAmounts.principal}</p></div>
						<div class="money komisija"><p>${a.loans[i].totalAmounts.commission}</p></div>
						<div class="dienu-skaits"><p>${a.loans[i].term}</p></div>
						<div><p>${a.loans[i].dates.repaymentPlanned.split('T')[0]}</p></div>
						<div class="kopa-atm"><p><b>${a.loans[i].totalAmounts.total}</b></p></div></div>`
				
			
			}
			document.getElementById('ilgtermina_tabula').innerHTML += html.Long
			document.getElementById('isstermina_tabula').innerHTML += html.Short
			console.log(html)
		})



	</script>
</html>
