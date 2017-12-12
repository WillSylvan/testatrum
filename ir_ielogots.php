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
		
		<div id="profils">
			<div class="flex bt"><button class="div"></button><p>Mani dati</p></div>
			<div class="flex bt"><button class="div"></button><p>Mainit paroli</p></div>
			<div class="flex bt"><button class="div"></button><p>Mani krediti</p></div>
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
		
			<div class="sadalas mani_dati">
				MANI DATI
			</div>
			
			<div class="sadalas mainit_paroli">
				MAINIT PAROLI
			</div>
			
			<div class="sadalas mani_krediti">
				MANI KREDITI
			</div>
		
		</div>
		
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
