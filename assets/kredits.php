<?php 
  include 'lang/lang-kredits.php';
  include 'lang/set-lang.php';
?>

<link rel="stylesheet" type="text/css" href="style/kredits-form.css">
<script type="text/javascript" src="js/credit_info.js"></script> 


<div id="kredits-forma">
	<div id="kredits-forma-content">
	
		<div class="kredits-forma-header"><h1><?php echo $language[$lang]['credit'] ?></h1></div>
		
		<div id="kredits-forma-profils">
		
			<div class="kredits-table">
				<div>
					<h2><?php echo $language[$lang]['credit'] ?></h2>
				</div>
				<div>
					<p class="amount">300.00 EUR</p>
				</div>
			</div>
			
			<div class="kredits-table">
				<div>
					<h2><?php echo $language[$lang]['com'] ?></h2>
				</div>
				<div>
					<p>0.00 EUR</p>
				</div>
			</div>
			
			<div class="kredits-table">
				<div>
					<h2><?php echo $language[$lang]['gpl'] ?></h2>
				</div>
				<div>
					<p>0.04%</p>
				</div>
			</div>
			
			<div class="kredits-table">
				<div>
					<h2><?php echo $language[$lang]['bilance'] ?></h2>
				</div>
				<div>
					<p>300.00 EUR</p>
				</div>
			</div>
			
		</div>
		
		<div id="kredits-forma-profils">
			<p><b><?php echo $language[$lang]['payback-date'] ?></b><i class="pay_till">08.12.2017</i></p>
			<br>
			<p><?php echo $language[$lang]['pay-on-30-days.1'] ?><br><?php echo $language[$lang]['pay-on-30-days.2'] ?></p>
			<p><b>22.50 EUR</b></p>
			<p><span>*standartinformācija</span></p>
		</div>
		
		<div id="kredits-forma-profils">
			<button><?php echo $language[$lang]['change'] ?></button>
		</div>
		
	</div>
</div>