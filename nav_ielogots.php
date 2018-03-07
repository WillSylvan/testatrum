<?php 
  include 'lang/lang-login.php';
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
		<?php include 'assets/header.php'; ?>
		<div id="page-form-content">
			<div id="page-content-1">
				<h2><span><?php echo $language[$lang]['cred-name1'] ?></span> <?php echo $language[$lang]['cred-name2'] ?></h2>

				<!--ESOSS KLIENTS-->
			<div id="form-0">
				<div class="flex klients">
					<div class="flex">
						<p id="login_error" style="display: none;color: red"><?php echo $language[$lang]['eror'] ?></p>
						<!-- <div class="flex izvelne">
							<button class="div" style="background-color:grey"></button>
							<p>Jauns klients</p>
						</div>
						<div class="flex izvelne">
							<button class="div" style="background-color:rgb(250, 142, 109)"></button>
							<p>Esošs klients</p>
						</div> -->
					</div>
				</div>
				<div id="zero-form">
					<div><input placeholder=<?php echo $language[$lang]['email'] ?> id="email_input"></div>
					<div><input placeholder=<?php echo $language[$lang]['pass'] ?> type="password" id="pw_input"></div>
				</div>
				<div class="flex ielogoties-buttons">
					<button class="turpinat" id="login_button"><?php echo $language[$lang]['login'] ?></button>
					<a href="registracija.php"><button class="turpinat"><?php echo $language[$lang]['reg'] ?></button></a>
				</div>
			</div>
	
			</div>
		</div>	
		<?php include 'assets/footer.php'; ?>	
	</body>
	<script type="text/javascript" src="js/login.js"></script>
</html>
