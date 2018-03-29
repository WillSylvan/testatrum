<html>
    <head>     
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">	
		<link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<script type="text/javascript" src="js/ajax.js"></script>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />  
		<title></title>
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
   </head>

	<body>
	
		<?php include 'lang/lang-change-pass.php'; ?>
		<?php include 'lang/set-lang.php'; ?>
		<?php include 'lang/lang-change-pass.php'; ?>
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
						<p id="old_error" class="error"></p>
						<div><input placeholder=<?php echo $language[$lang]['pass-now'] ?> id="pwOld" type="password"></div>
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
						<div><input placeholder=<?php echo $language[$lang]['new-pass'] ?> id="pwNew1" type="password"></div>
						<div id="new_error" class="error"></div>
						<div><input placeholder=<?php echo $language[$lang]['re-play-pass'] ?> id="pwNew2" type="password"></div>
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
	<script type="text/javascript">
		pwOld = document.getElementById('pwOld')
		pwNew1 = document.getElementById('pwNew1')
		pwNew2 = document.getElementById('pwNew2')

		document.getElementById('passw').onclick = function(){
			pwO = pwOld.value
			pwN1 = pwNew1.value
			pwN2 = pwNew2.value

			console.log(pwO,pwN1,pwN2)

			if (pwN1===pwN2) {
				ajax_('ChangePassword',{
				  "oldpassword": pwO,
				  "newpassword": pwN2,
				  "accessToken": sessionStorage.accessToken
				},function(a){
					console.log(a)
					if (a.success) {
						
					}else if(a.validationErrors[0].Field = "oldpassword"){
							document.getElementById('old_error').innerHTML = '<?php echo $language[$lang]['inncorect'] ?>'
						}
				})
			}else {
				document.getElementById('new_error').innerHTML = '<?php echo $language[$lang]['mismatch'] ?>'
			}
		}		
	</script>
</html>
