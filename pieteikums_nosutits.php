<?php 
	include 'lang/lang.php';

?>
<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
        
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>

		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
	    <script type="text/javascript" src="js/registration.js"></script>
   </head>

	<body>
		<?php include 'assets/header.php'; ?>
		<div id="page-form-content">
			<div id="page-content-1">
				<h2><span><?php echo $language[$lang]['cred-name3'] ?></span><?php echo $language[$lang]['cred-name4'] ?></h2>

                <!--PIEKTA FORMA-->

                <div id="form-5">	
                    <div id="five-form">
                        <img src="img/ok.png">
                        <h6>Paldies!</h6>
                    </div>
                </div>
                
                <!--SESTA FORMA-->
                
                <div id="form-6">
                    <div id="six-form">
                        <img src="img/ok.png">
                        <h6>Jūsu pieteikums ir nosūtīts!</h6>
                    </div>
                </div>	
			</div>
		</div>	
		<?php include 'assets/footer.php'; ?>	
	</body>
</html>
