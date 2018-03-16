<?php 
  include 'lang/lang-kredits.php';
  include 'lang/set-lang.php';
?>

<link rel="stylesheet" type="text/css" href="style/kredits-form.css">
 


<div id="kredits-forma">
	<div id="kredits-forma-content">
	
		<div class="kredits-forma-header"><h1><?php echo $language[$lang]['credit'] ?></h1></div>
		
		<div id="kredits-forma-profils">
		
			<div class="kredits-table">
				<div>
					<h2><?php echo $language[$lang]['credit'] ?></h2>
				</div>
				<div>
					<p class="amount" id="side_amount"></p>
				</div>
			</div>
			
			<div class="kredits-table">
				<div>
					<h2><?php echo $language[$lang]['com'] ?></h2>
				</div>
				<div>
					<p id="side_commission"></p>
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
					<p id="side_total"></p>
				</div>
			</div>
			
		</div>
		
		<div id="kredits-forma-profils">
			<p><b id="define_pay"></b><i class="pay_till" id="side_pay_till" style="margin-left: 10px">08.12.2017</i></p>
			<br>
			<p id="extend"><?php echo $language[$lang]['pay-on-30-days.1'] ?><br><?php echo $language[$lang]['pay-on-30-days.2'] ?></p>
			<p><b id="side_extension"></b></p>
			<p><span>*standartinformācija</span></p>
		</div>
		
		<div id="kredits-forma-profils">
			<button><?php echo $language[$lang]['change'] ?></button>
		</div>
		
	</div>
	<script type="text/javascript">
		
		type = sessionStorage.request_loan
		amount = sessionStorage[type+'_loan_principal']
		document.getElementById('side_amount').innerHTML = amount + " EUR";

		data = JSON.parse(sessionStorage['caulculations_'+type])
		console.log(data)

		term = data[type+'LoanCalculator'].amounts[(parseInt(sessionStorage[ type+'_loan_principal'])-50)/5].term[sessionStorage[type+'_loan_term']-function(){let a;a = type=='short'?10 : 3;return a}()]
		com = term.commission
		console.log(term)

		document.getElementById('side_total').innerHTML = type == 'short'?(parseFloat(com) + parseFloat(amount)).toFixed(2) + " EUR" : function(){let a = 0; for (var i = 0; i < term.length; i++){ a+=term[i].monthlyPayment; console.log(a)} return a;}() + " EUR"
		if (type=='short') {
		document.getElementById('define_pay').innerHTML = '<?php echo $language[$lang]['payback-date'] ?>';
		ext = term.extensions[0].amount
			document.getElementById('side_extension').innerHTML = ext + ' EUR'
			document.getElementById('side_commission').innerHTML = com + " EUR"
			document.getElementById('side_pay_till').innerHTML = term.repaymentDate.split('T')[0]
		
		}else if(type=='long'){

			document.getElementById('define_pay').innerHTML = '<?php echo $language[$lang]['first-pay-day'] ?>';
			document.getElementById('extend').style.display = 'none';	
			console.log(term)
			document.getElementById('side_pay_till').innerHTML = term.firstPaymentDate.split('T')[0]

		
		}



	</script>
</div>
