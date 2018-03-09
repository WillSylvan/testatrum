<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script type="text/javascript" src="js/ajax.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<script type="text/javascript">
			if (sessionStorage.request_loan==''||sessionStorage.request_loan=='undefined'||sessionStorage.request_loan==null||sessionStorage.request_loan==0) {
				//window.location = 'kreditu_vesture.php'
			}
			console.log(sessionStorage)
		</script>
		<style>
		/*.bt3 button{background-color:rgb(255, 117, 130)}*/
	/*	#main-id-content{
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
		}*/

		@media screen and (max-width: 900px){
		#kredits-forma{display:none}
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

   </head>

	<body class="jauns_kredits">
		<?php include 'assets/profile-menu.php'; ?>
		<?php include 'assets/header.php'; ?>
		<?php include 'assets/profile-form.php'; ?>
		<!-- <?php include 'assets/kredits.php'; ?> -->
		<?php include 'lang/lang-new-loan.php'; ?>

		
		
		<!-- <div id="profils-added">
			<a href="jauns_kredits"><div class="flex bt6"><button class="div"></button><p>Jauns kredīts</p></div></a>
			<a href="kreditu_vesture.php"><div class="flex bt4"><button class="div"></button><p>Kredītu vēsture</p></div></a>
		</div>  -->
		<style>.bt0 button{background-color:rgb(255, 117, 130)}</style>

		<div class="main-content-credit" id="parkreditacija">
			
			<div id="main-content-credit-izvelne-parkreditacija">
				<div class="parkreditacija"><h5><?php echo $language[$lang]['getloan'] ?></h5></div>
					
				<!-- <div>
					<p>Līguma nr.</p>
					<h2>SM123456</h2>
				</div> -->
				
				<div class="flex borders">
				
					<div class="statuss">
						<div>
							<p><?php echo $language[$lang]['loan'] ?></p>
							<p><?php echo $language[$lang]['totalamount'] ?></p>
						</div>
						
						<div>
							<p ><?php echo $language[$lang]['term'] ?></p>
							<p ><?php echo $language[$lang]['firstpay'] ?></p>
						</div>
					</div>
					
					<div class="statuss s2">
						<div>
							<p id="loan_amout"></p>
							<p id="loan_total"></p>
						</div>
						
						<div>
							<p id="loan_term"></p>
							<p id="loan_final_date"></p>
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
						<p><?php echo $language[$lang]['rules'] ?></p>
					</div>
					
				</div>
				<div id="payment_schedule"> </div>
				<p id="error_text"></p>
				<div class="flex kredita-buttons">
					<button id="request_loan_button" ><?php echo $language[$lang]['send'] ?></button>
				</div>
				
			</div>


		</div>
		<script type="text/javascript">

			//console.log(sessionStorage)
			term_scale = sessionStorage.request_loan == 'long'? '<?php echo $language[$lang]['months']; ?>' : '<?php echo $language[$lang]['days'];  ?>'
			document.getElementById('loan_amout').innerHTML = sessionStorage[sessionStorage.request_loan+"_loan_principal"] + " EUR"
			document.getElementById('loan_total').innerHTML = sessionStorage[sessionStorage.request_loan+"_loan_total"] + " EUR"

			document.getElementById('loan_term').innerHTML = sessionStorage[sessionStorage.request_loan+"_loan_term"] + " "+term_scale
			document.getElementById('loan_final_date').innerHTML = sessionStorage[sessionStorage.request_loan+"_last_payment"]
			
			//payment_schedule = JSON.parse(sessionStorage.payment_schedule)

			//console.log(payment_schedule)

			if (sessionStorage.request_loan=='long') {

				let ajax_data = {'loanData':{"type":sessionStorage.request_loan, 'principal':sessionStorage[sessionStorage.request_loan+"_loan_principal"], 'term':sessionStorage[sessionStorage.request_loan+"_loan_term"]}}
					ajax_('GetLoanPreview',ajax_data, function(a){
						console.log(a)
					let schedule = "<ul>"
					for (var i = 0; i < a.payments.length; i++) {
						schedule += "<li> <?php echo $language[$lang]['date'] ?>: "+a.payments[i].date.split('T')[0]+" <?php echo $language[$lang]['summ'] ?>: "+a.payments[i].paymentTotal+" EUR</li> "
					}
					schedule +="</ul>"
				document.getElementById('payment_schedule').innerHTML = schedule
				})
					
			}

			document.getElementById('request_loan_button').onclick = function(){
				let data = {
				  "loanData": {
				    "type": sessionStorage.request_loan,
				    "principal": parseInt(sessionStorage[sessionStorage.request_loan+"_loan_principal"]),
				    "term": parseInt(sessionStorage[sessionStorage.request_loan+"_loan_term"]) 
				  },
				  "registrationIP": "string",
				  "url": "string",
				  "accessToken": sessionStorage.accessToken
				}

				ajax_('RequestLoan',data,function(a){
					console.log(data)
					console.log(a)
					if(a.success){
						window.location('sakums.php')
					}else{
						//window.location('sakums.php')
						document.getElementById('error_text').innerHTML = a.errorMessage

					}
				})

			}

		</script>
		
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
