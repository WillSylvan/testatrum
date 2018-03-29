<?php 
	include 'lang/set-lang.php';
	include 'lang/lang-profile-form.php';
?>

<div id="main-id" class="flex">
	<div id="main-id-content">
		<div class="profil-header"><h1><?php echo $language[$lang]['begining'] ?></h1></div>
		<div id="profils">
			<a href="sakums.php"><div class="flex bt0"><button class="div"></button><p><?php echo $language[$lang]['new-credit'] ?></p></div></a>
			<a href="kreditu_vesture.php"><div class="flex bt3"><button class="div"></button><p><?php echo $language[$lang]['my-cred'] ?></p></div></a>
			<a href="mani_dati.php"><div class="flex bt1"><button class="div"></button><p><?php echo $language[$lang]['my-data'] ?></p></div></a>
			<a href="mainit_paroli.php"><div class="flex bt2"><button class="div"></button><p><?php echo $language[$lang]['cha-pass'] ?></p></div></a>
		</div>
	</div>
</div>