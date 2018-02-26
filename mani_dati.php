<?php 
  include 'lang/lang-myData.php';
  include 'lang/set-lang.php';
?>


<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/ajax.js"></script>
		
   </head>

	<body>
		<?php include 'assets/profile-menu.php'; ?>
		<?php include 'assets/header.php'; ?>
		<?php include 'assets/profile-form.php'; ?>
		<style>.bt1 button{background-color:rgb(255, 117, 130)}</style>
		
		<div id="sadalas">

			<div class="sadalas mani_dati">
			
				<!--<div class="user-check" id="first-step-user-check">
					<p>Lūdzu apstipriniet zemāk norādīto telefona nr.!</p>
					<div class="flex x">
						<div class="number-info flex"><p>Mobilais talrunis:</p><p><span>+371 22334455</span></p></div>
						<div><button id="nosutit-kodu">Nosūtīt kodu</button></div>
					</div>
					<p><span>Uz augstāk minēto tel.nr. tiks nosūtīts apstiprinājuma kods.</span></p>
				</div>
				
				<div class="user-check" id="second-step-user-check">
					<p>Lūdzu apstipriniet zemāk norādīto telefona nr.!</p>
					<div class="flex x">
						<div class="number-info flex"><p>Mobilais talrunis:</p><p><span>+371 22334455</span></p></div>
						<div><button id="kods-nosutits">Kods nosūtīts</button></div>
					</div>
					<div class="flex koda-parbaude">
						<div class="flex kodam">
							<p class="apstiprinajums"><span>Ievadiet uz telefona numuru<br>atsutīto četrciparu kodu:</span></p>
							<div class="kods"><input></div>
							<div class="kods"><input></div>
							<div class="kods"><input></div>
							<div class="kods"><input></div>
						</div>
						<div><button id="aps">Apstiprināt</button></div>
					</div>
				</div>
				
				<div class="user-check flex" id="third-step-user-check">
					<div><img src="img/ok.png"></div>
					<h6>Paldies! Telefona numurs ir apstiprināts!</h6>
				</div>-->
				
				<div id="main-info-about-user">
					<div id="ielogots-header">
						<h2><?php echo $language[$lang]['madata'] ?></h2>
						<p><?php echo $language[$lang]['text'] ?> <b>info@atrum.lv</b></p>
					</div>
					<form id="">
						<div><input placeholder=<?php echo $language[$lang]['firstName'] ?>></div>
						<div><input placeholder=<?php echo $language[$lang]['lastName'] ?>></div>
						<div><input placeholder=<?php echo $language[$lang]['identityCode'] ?>></div>
						<div><input placeholder=<?php echo $language[$lang]['phone'] ?>></div>
						<div><input placeholder=<?php echo $language[$lang]['email'] ?>></div>
						<div><input placeholder=<?php echo $language[$lang]['dekl'] ?>></div>
						<div><input placeholder=<?php echo $language[$lang]['fakt'] ?>></div>
					</form>
				</div>
	
			</div>
		</div>
		
		<?php include 'assets/footer.php'; ?>	
	</body>
		<script type="text/javascript">
		ajax_('GetPersonalInformation',{
  "accessToken": sessionStorage.accessToken
},function(a){console.log(a)})
	</script>
</html>
