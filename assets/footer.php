<?php 
	include 'lang/set-lang.php';
	include 'lang/lang-footer.php';
?>

<link rel="stylesheet" type="text/css" href="style/footer.css">
<link rel="stylesheet" type="text/css" href="style/help.css">

<script>

$(function(){
    $('#help').delay(5000)
              .show(1000);
});

</script>

<div id="help" class="pulse" style="display:none">
	<div class="help">
	
		<div class="chat"><p>zendesck chat</p></div>
		
		<div><h1><?php echo $language[$lang]['how-much'] ?></h1></div>
		
		<div class="work-time">
			<div>
				<p><?php echo $language[$lang]['work-time1'] ?></p>
				<p><?php echo $language[$lang]['work-time2'] ?></p>
			</div>
			<div>
				<img src="img/help/help-logo.png">
			</div>
		</div>

		<div class="input-help">
			<input placeholder="<?php echo $language[$lang]['your-question'] ?>">
		</div>
		
		<div class="help-end"><img src="img/help/help-end.png"></div>	
		
	</div>
</div>



<div id="footer">
    <div class="top-f flex">
		<div class="phone flex">
			<img src="img/ico/5.png">
			<h1>80700700</h1>
		</div>
		<div id="socials" class="flex">
			<div><a><img src="img/ico/14.png"></a></div>
			<div><a><img src="img/ico/11.png"></a></div>
			<div><a><img src="img/ico/12.png"></a></div>
			<div><a><img src="img/ico/13.png"></a></div>
			<div><a><img src="img/ico/10.png"></a></div>
		</div>
	</div>

    <div class="inline flex">
        <div class="blockf">
            <h3><?php echo $language[$lang]['contacts'] ?></h3>
			<p><img src="img/ico/7.png"><?php echo $language[$lang]['chat-with-con.'] ?><br>
            <img src="img/ico/8.png">info@atrum.lv<br>
            <img src="img/ico/6.png">latcredit.lv</p>
         </div>

        <div class="blockf">
            <h3><?php echo $language[$lang]['rekvz'] ?></h3>
            <p>LATEKO LĪZINGS AS<br>
            Reģ.Nr40003366651<br>
            Katlakalna iela 1,<br>
            Rīga, LV-1073</p>
        </div>

        <div class="blockf">
			<h3><?php echo $language[$lang]['need-a-know'] ?></h3>
            <p><a><?php echo $language[$lang]['how-to-get'] ?></a></p>
			<p><a><?php echo $language[$lang]['how-payback'] ?></a></p>
			<p><a><?php echo $language[$lang]['quest-answ'] ?></a></p>
			<p><a><?php echo $language[$lang]['contract'] ?></a></p>
			<p><a><?php echo $language[$lang]['contact'] ?></a></p>
        </div>
        <div class="blockf">
			<h3><?php echo $language[$lang]['jur.adress'] ?></h3>
			<p><a><?php echo $language[$lang]['priv.'] ?></a></p>
			<p><a><?php echo $language[$lang]['author.'] ?></a></p>
        </div>

        <div class="blockf laiks">
            <h3><?php echo $language[$lang]['work-time'] ?></h3>
            <p><?php echo $language[$lang]['workday'] ?><b>8:00 - 22:00</b></p>
            <p><?php echo $language[$lang]['playday'] ?><b>8:00 - 22:00</b></p>
			<p class="ssl flex"><img src="img/ico/9.png">SSL Secure Conection</p>
			<p><span>© 2017 ATRUM. All rights reserved.</span></p>
		</div>
    </div>
</div>