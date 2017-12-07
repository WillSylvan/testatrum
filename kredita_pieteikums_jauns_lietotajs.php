<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/jauns_lietotajs.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>

		<!--<script type="text/javascript">
		function color(c) {document.body.style.backgroundColor=c}
		</script>onclick='color("red")'-->

   </head>

	<body>
		<?php include 'assets/header.php'; ?>
		<div id="page-form-content">
			<div id="page-content-1">
				<h2><span>Kredīta</span> pieteikums</h2>
				<div class="flex klients">
					<div class="flex">
						<div class="flex izvelne">
							<div class="div" style="background-color:rgb(250, 142, 109)"></div>
							<p>Jauns klients</p>
						</div>
						<div class="flex izvelne">
							<div class="div" style="background-color:grey"></div>
							<p>Esošs klients</p>
						</div>
					</div>
					<div class="izvelne" style="margin:0;"><img src="img/back.png"></div>
				</div>
				
				<!--PIRMA FORMA-->
				
				<form id="one-form">
					<div><input placeholder="Vārds, Uzvārds"></div>
					<div><input placeholder="Personas kods"></div>
					<div class="flex info">
						<div><input placeholder="Tel."></div>
						<div><input placeholder="Epasts:"></div>
					</div>
					<div><input placeholder="Darba vieta:"></div>
					<div><input placeholder="Ieņemamais amats"></div>
					<div><input placeholder="Ikmēneša ienākumi:"></div>
					<div><input placeholder="Ikmēneša izdevumi:"></div>
				</form>

				<!--OTRA FORMA-->
				
				<form id="two-form">
					<div><input placeholder="Pilsēta:"></div>
					<div><input placeholder="Iela:"></div>
					<div class="flex info">
						<div><input placeholder="Mājas nr."></div>
						<div><input placeholder="Dzīvokļa nr.:"></div>
					</div>
					<div><input placeholder="Pasta indekss:"></div>
				</form>
				
				<!--TREŠA FORMA-->
				
				<form id="three-form">
					<div><input placeholder="Parole:" type="password"></div>
					<div><input placeholder="Parole atkārtoti:" type="password"></div>
					<div class="flex check">
						<input type="radio" class="radio">
						<p>Piekrītu līguma nosacījumiem, atļauju apstrādāt savus personas datus un apliecinu, ka sniegtā informācija ir patiesa.</p>
					</div>
				</form>
				
				<button>Turpināt</button>
			</div>
		</div>	
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
