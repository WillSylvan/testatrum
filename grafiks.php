<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/grafiks.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<script type="text/javascript" src="js/ajax.js"></script>	
		<title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

   </head>

	<body>
		<?php include 'assets/header.php'; ?>
		<?php include 'lang/lang-grafiks.php'; ?>
	
		<div id="maks-grafiks">
		
			<div id="istermina">
			
				<h2>
					<?php echo $language[$lang]['paymentGraf']; ?>
				</h2>
				
				<div class="table-grafiks" id="table-grafiks">
				
					<div>
						<div><h1>Nr.</h1></div>
						<div class="pay-date"><h1>Maksājuma datums</h1></div>
						<div class="month-pay"><h1>Ikmēneša maksājums</h1></div>
					</div>
					
					<div class="with-borders">
						<div><h3>1</h3></div>
						<div><p>16.02.2018</p></div>
						<div><p>15.81</p></div>
					</div>
					
					<div class="with-borders">
						<div><h3>2</h3></div>
						<div><p>16.02.2018</p></div>
						<div><p>15.81</p></div>
					</div>
					
					<div class="with-borders">
						<div><h3>3</h3></div>
						<div><p>16.02.2018</p></div>
						<div><p>15.81</p></div>
					</div>
					
					<div class="with-borders">
						<div><h3>4</h3></div>
						<div><p>16.02.2018</p></div>
						<div><p>15.81</p></div>
					</div>
					
					<div class="with-borders">
						<div><h3>5</h3></div>
						<div><p>16.02.2018</p></div>
						<div><p>15.81</p></div>
					</div>
					
					<div class="with-borders">
						<div><h3>6</h3></div>
						<div><p>16.02.2018</p></div>
						<div><p>15.81</p></div>
					</div>
					
					<div class="with-borders">
						<div><h3>7</h3></div>
						<div><p>16.02.2018</p></div>
						<div><p>15.81</p></div>
					</div>
				</div>
				
			</div>

			<div><a class="violet-button" href="jauns_kredits.php"><?php echo $language[$lang]['getloan']; ?></a></div>
			
		</div>
		
		<?php include 'assets/footer.php'; ?>	
		<script type="text/javascript">
			sessionStorage.request_loan = 'long';
			let ajax_data = {'loanData':{"type":"long", 'principal':sessionStorage["long_loan_principal"], 'term':sessionStorage["long_loan_term"]}}
					ajax_('GetLoanPreview',ajax_data, function(a){
						console.log(a)

						 let html = `<div>
										<div><h1><?php echo $language[$lang]['nr'] ?></h1></div>
										<div class="pay-date"><h1><?php echo $language[$lang]['paymentDate'] ?></h1></div>
										<div class="month-pay"><h1><?php echo $language[$lang]['paymentMonthly'] ?></h1></div>
									</div>`



				
				 	for (var i = 0; i < a.payments.length; i++) {
				 		html += `<div class="with-borders"><div><h3>${i}</h3></div>
						<div><p>${a.payments[i].date.split('T')[0]}</p></div>
						<div><p>${a.payments[i].paymentTotal} EUR</p></div></div>`//"<li> datums: "+a.payments[i].date.split('T')[0]+" summa: "+a.payments[i].paymentTotal+" EUR</li> "
				 	}
				 	
				 document.getElementById('table-grafiks').innerHTML = html



				})
		</script>		
	</body>
</html>
