<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

   </head>

	<body>
		<?php include 'assets/header.php'; ?>
		
		<div id="main-id" class="flex">
			<div id="main-id-content">
				<div class="profil-header"><h1>Mans profils</h1></div>
				<div id="profils">
					<div class="flex bt"><button class="div"></button><p>Mani dati</p></div>
					<div class="flex bt"><button class="div"></button><p>Mainit paroli</p></div>
					<div class="flex bt"><button class="div"></button><p>Mani krediti</p></div>
				</div>
			</div>
		</div>
		<script>
			$(document).ready(function(){
				$('#profils .bt').click(function(){
					id = $(this).index()
					$('#sadalas .sadalas').css('display','none')
						$('#sadalas .sadalas:eq('+id+')').fadeIn(300)
				})
			});
		</script>
		
		<div id="sadalas">
		
		<!--MANI DATI-->
			<div class="sadalas mani_dati">
			
				<div class="user-check" id="first-step-user-check">
					<p>Lūdzu apstipriniet zemāk norādīto telefona nr.!</p>
					<div class="flex x">
						<div class="number-info flex"><p>Mobilais talrunis:</p><p><span>+371 22334455</span></p></div>
						<div><button>Nosūtīt kodu</button></div>
					</div>
					<p><span>Uz augstāk minēto tel.nr. tiks nosūtīts apstiprinājuma kods.</span></p>
				</div>
				
				<div class="user-check" id="second-step-user-check">
					<p>Lūdzu apstipriniet zemāk norādīto telefona nr.!</p>
					<div class="flex x">
						<div class="number-info flex"><p>Mobilais talrunis:</p><p><span>+371 22334455</span></p></div>
						<div><button>Kods nosūtīts</button></div>
					</div>
					<div class="flex koda-parbaude">
						<div class="flex">
							<p class="apstiprinajums"><span>Ievadiet uz telefona numuru<br>atsutīto četrciparu kodu:</span></p>
							<div class="kods"><input></div>
							<div class="kods"><input></div>
							<div class="kods"><input></div>
							<div class="kods"><input></div>
						</div>
						<div><button>Apstiprināt</button></div>
					</div>
				</div>
				
				<div class="user-check flex" id="third-step-user-check">
					<div><img src="img/ok.png"></div>
					<h6>Paldies! Telefona numurs ir apstiprināts!</h6>
				</div>
				
				<div id="main-info-about-user">
					<div id="ielogots-header">
						<h2>Mani dati</h2>
						<p>Ja vēlies izmainīt savus datus, lūdzu rakstit uz <b>info@atrum.lv</b></p>
					</div>
					<form id="">
						<div><input placeholder="Vārds, Uzvārds"></div>
						<div><input placeholder="Personas kods"></div>
						<div><input placeholder="Mobilais talrunis:"></div>
						<div><input placeholder="Epasta adrese:"></div>
						<div><input placeholder="Faktiska adrese:"></div>
						<div><input placeholder="Deklarētā adrese:"></div>
					</form>
				</div>
				
				<!--DEMO DEMO DEMO DEMO DEMO-->
				<div style="position: absolute; top: 10vw; right: 20vw;">
					<button id="a">1</button>
					<button id="b">2</button>
					<button id="c">3</button>
					<button id="null">-</button>
				</div>
				<script>
				$(document).ready(function(){
					$("#a").click(function () {
						$("#first-step-user-check").css("display","block");
						$("#second-step-user-check").css("display","none");
						$("#third-step-user-check").css("display","none");
					});
					$("#b").click(function () {
						$("#first-step-user-check").css("display","none");
						$("#second-step-user-check").css("display","block");
						$("#third-step-user-check").css("display","none");
					});
					$("#c").click(function () {
						$("#first-step-user-check").css("display","none");
						$("#second-step-user-check").css("display","none");
						$("#third-step-user-check").css("display","flex");
					});
					$("#null").click(function () {
						$("#first-step-user-check").css("display","none");
						$("#second-step-user-check").css("display","none");
						$("#third-step-user-check").css("display","none");
					});
				});
				</script>
				<!--DEMO DEMO DEMO DEMO DEMO-->
					
			</div>
		
		<!--MAINIT PAROLI-->
			<div class="sadalas mainit_paroli">
			
				<div id="change-pass">
					<div id="ielogots-header">
						<h2>Mainīt paroli</h2>
					</div>
					<form id="three-form">
						<div><input placeholder="Pašreizējā parole:" type="password"></div>
						<div><input placeholder="Jaunā parole:" type="password"></div>
						<div class="flex alerts">
							<div class="flex">
								<div class="p-b"></div>
								<div><p>5 simboli gara</p></div>
							</div>
							<div class="flex">
								<div class="p-b"></div>
								<div><p>Vismaz 1 cipars</p></div>
							</div>
						</div>
						<div><input placeholder="Jaunā parole atkārtoti:" type="password"></div>
					</form>
					<div class="border-pink"><button id="passw">Mainīt paroli</button></div>
				</div>
				
				<div id="change-pass-2">
					<img src="img/ok.png">
					<h6>Jūsu parole nomainīta!</h6>
				</div>
				
				<!--DEMO DEMO DEMO DEMO DEMO-->
				<script>
				$(document).ready(function(){
					$("#passw").click(function () {
						$("#change-pass-2").css("display","block");
						$("#change-pass").css("display","none");
					});
				});
				</script>
				<!--DEMO DEMO DEMO DEMO DEMO-->
				
			</div>
		
		<!--MANI KREDITI-->
			<div class="sadalas mani_krediti">
				MANI KREDITI
			</div>
		
		</div>
		
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
