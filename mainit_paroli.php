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
	
		<?php include 'lang/lang-change-pass.php'; ?>
		<?php include 'lang/set-lang.php'; ?>
		<?php include 'assets/lang-change-pass.php'; ?>
		<?php include 'assets/profile-menu.php'; ?>
		<?php include 'assets/header.php'; ?>
		<?php include 'assets/profile-form.php'; ?>
		<style>.bt2 button{background-color:rgb(255, 117, 130)}</style>
		
		<div id="sadalas">

			<div class="sadalas mainit_paroli">
			
				<div id="change-pass">
					<div id="ielogots-header">
						<h2><?php echo $language[$lang]['cha-pass'] ?></h2>
					</div>
					<form id="three-form">
						<div><input placeholder=<?php echo $language[$lang]['pass-now'] ?> type="password"></div>
						<div><input placeholder=<?php echo $language[$lang]['new-pass'] ?> type="password"></div>
						<div class="flex alerts">
							<div class="flex">
								<div class="p-b"></div>
								<div><p><?php echo $language[$lang]['5simb'] ?></p></div>
							</div>
							<div class="flex">
								<div class="p-b"></div>
								<div><p><?php echo $language[$lang]['1nr'] ?></p></div>
							</div>
						</div>
						<div><input placeholder=<?php echo $language[$lang]['re-play-pass'] ?> type="password"></div>
					</form>
					<div class="border-pink"><button id="passw"><?php echo $language[$lang]['cha-pass'] ?></button></div>
				</div>
				
				<div id="change-pass-2">
					<img src="img/ok.png">
					<h6><?php echo $language[$lang]['pass-changed'] ?></h6>
				</div>
				
			</div>
		
		</div>
		
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
