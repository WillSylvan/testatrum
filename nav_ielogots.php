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
		<div id="page-form-content">
			<div id="page-content-1">
				<h2><span>Kredīta</span> pieteikums</h2>

				<!--ESOSS KLIENTS-->
			<div id="form-0">
				<div class="flex klients">
					<div class="flex">
						<div class="flex izvelne">
							<button class="div" style="background-color:grey"></button>
							<p>Jauns klients</p>
						</div>
						<div class="flex izvelne">
							<button class="div" style="background-color:rgb(250, 142, 109)"></button>
							<p>Esošs klients</p>
						</div>
					</div>
				</div>
				<div id="zero-form">
					<div><input placeholder="E-pasts:"></div>
					<div><input placeholder="Parole:" type="password"></div>
				</div>
				<div class="flex ielogoties-buttons">
					<a href="sakums.php"><button class="turpinat">Ienākt</button></a>
					<a href="registracija.php"><button class="turpinat">Registrācija</button></a>
				</div>
			</div>
	
			</div>
		</div>	
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
