<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

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
   </head>

	<body>
		<?php include 'assets/profile-menu.php'; ?>
		<?php include 'assets/header.php'; ?>
		<?php include 'assets/profile-form.php'; ?>
		<style>.bt2 button{background-color:rgb(255, 117, 130)}</style>
		
		<div id="sadalas">

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
				
			</div>
		
		</div>
		
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
