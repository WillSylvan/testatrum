<html>
    <head>
		<link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="style/index.css">
		<link rel="stylesheet" type="text/css" href="style/style.css">
		<link rel="stylesheet" type="text/css" href="style/sliders.css">
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title></title>
		<link rel="icon" href="img/logo.svg">
		<script type="text/javascript" src="http://code.jquery.com/jquery-3.2.1.min.js"></script>
		<script type="text/javascript" src="js/hammer.js"></script>
		<script type="text/javascript" src="js/sliders.js"></script>
		<script type="text/javascript" src="js/ajax.js"></script>
    </head>

	<body>
		<?php include 'assets/header.php'; ?>
		
		<?php include 'lang/lang-index-grey.php';?>
		<?php include 'lang/lang-index-orange.php';?>
		<?php include 'lang/lang-index-violet.php';?>
		 
		<div class="header-background"></div>
		<!-- <div id="debug" style="position: fixed;z-index: 1000;width: 200px;height: 100px; background-color: white; top: 0;left: 0;"></div> -->
		<div id="top-forms" class="flex">
			<div class="form_ f1 unselectable" onclick='pinkColor()'>
				<div id="first-form" class="flex" >
					<form action="registracija.php" id="short_form" method="post">

						<div class="short_range_form flex">
							<div class="inputs" id="important">
								<h1><?php echo $language[$lang]['short-time'] ?></h1>
								<div id="short_echo_money_cont">

									<h3><?php echo $language[$lang]['how-much'] ?></h3>
									<p><?php echo $language[$lang]['credit'] ?><span id="short_echo_money_val"></span> <span class="repeated_loan" id="short_repeated_loan" style="display: none"><?php echo $language[$lang]['replaycredit'] ?></span></p>

									<!--<input type="range" name="stickmarks" step="5" min="50" max="500" value="250" class="slider" id="short_range_money">-->
									<div class="slider_container">
                                        <div id="short_range_money"></div>
                                    </div>

								</div>

								<div id="short_echo_days_cont">

									<h3><?php echo $language[$lang]['how-long-time'] ?></h3>
									<p><?php echo $language[$lang]['months'] ?> <span id="short_echo_days_val"></span></p>

									<!--<input name="sloanTerms" type="range" min="10" max="30" value="10" class="slider" id="short_range_days">-->
									<div class="slider_container">
                                        <div id="short_range_days"></div>
                                    </div>

								</div>

								<div class="flex formulas">
									<div>
										<h2><?php echo $language[$lang]['credit'] ?><span id="short_summa"></span></h2>
										<h2><?php echo $language[$lang]['bilance'] ?><span id="short_kopa"></span></h2>
									</div>
									<div>
										<h2><?php echo $language[$lang]['com'] ?><span id="short_komisija"></span></h2>
										<h2><?php echo $language[$lang]['gpl'] ?><span id="short_gpl"></span></h2>
									</div>
								</div>
							</div>

							<div class="info_block">
								<h5><?php echo $language[$lang]['pay-day'] ?><span class="pink" id="short_term_display"></span></h5>

								<h4><?php echo $language[$lang]['pay-on-30-days'] ?><br><b><span id="extention_pay">22.20</span> <?php echo $language[$lang]['eur'] ?></b></h4>

								<a href="jauzliek links" class="links"><?php echo $language[$lang]['stand.-info'] ?></a>
								<input type="button" id="submit_short" value=<?php echo $language[$lang]['get-money'] ?> class="rose-button" onclick="creditInfo(1)">
							</div>
						</div>

					</form>
				</div>
			</div>

			<div class="form_ f2 unselectable" onclick='violetColor()'>
				<div id="second-form" class="flex" >
					<form action="registracija.php" id="long_form" method="post">

						<div class="long_range_form flex">
							<div class="inputs" id="important2">
								<h1><?php echo $language[$lang]['long-time'] ?></h1>
								<div id="long_echo_money_cont">

									<h3><?php echo $language[$lang]['how-much'] ?></h3>
									<p><?php echo $language[$lang]['credit'] ?><span id="long_echo_money_val"></span> <span class="repeated_loan" id="long_repeated_loan" style="display: none"><?php echo $language[$lang]['replaycredit'] ?></span></p>

									<!--<input type="range" name="btickmarks" step="5" min="100" max="1000" value="250" class="slider" id="long_range_money">-->
									<div class="slider_container">
                                        <div id="long_range_money"></div>
                                    </div>
								</div>

								<div id="long_echo_days_cont">

									<h3><?php echo $language[$lang]['how-long-time'] ?></h3>
									<p><?php echo $language[$lang]['months'] ?><span id="long_echo_days_val"></span></p>

									<!--<input name="bloanTerms" type="range" min="3" max="12" value="5" class="slider" id="long_range_days">-->
									 <div class="slider_container">
                                        <div id="long_range_days"></div>
                                    </div>


								</div>

								<div class="flex formulas">
									<div>
										<h2><?php echo $language[$lang]['credit'] ?><span id="long_summa"></span></h2>
										<h2><?php echo $language[$lang]['bilance'] ?><span id="long_kopa"></span></h2>
									</div>
									<div>
										<h2><?php echo $language[$lang]['com'] ?><span id="long_komisija"></span></h2>
										<!-- <h2><?php echo $language[$lang]['gpl'] ?><span id="long_gpl"></span></h2> -->
									</div>
								</div>
							</div>

							<div class="info_block">
								<!-- <h5><?php echo "first payment date"//$language[$lang]['pay-day'] ?><br>   <span class="violet" id="long_term_display">01.09.2018</span></h5> -->
								<!-- <h5><?php echo $language[$lang]['pay-on-30-days'] ?><br> <span class="violet">158.15 <?php echo $language[$lang]['eur'] ?></span></h5> -->
								<h5><?php echo $language[$lang]['first-pay-day'] ?><br>   <span id="long_term_display" class="violet">19.01.2018</span></h5>


								<a href="jauzliek links" class="links"><?php echo $language[$lang]['stand.-info'] ?></a>
								<a href="grafiks.php" id="grafiks"><?php echo $language[$lang]['pay-graphic'] ?></a>
								<input type="button"  id="submit_long" value=<?php echo $language[$lang]['get-money'] ?> class="violet-button" onclick="creditInfo(2)">

							</div>
						</div>
					</form>
				</div>
			</div>

		</div>

		<div id="round-buttons" class="flex">
			<button id="butt1"></button>
			<button id="butt2"></button>
		</div>

		<div id="content-grey">
		
			<div class="icons_block flex">
				<div class="icon_border">
					<img id="img-1" src="img/grey_icons/home/1.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-grey-pic-txt-1'] ?></h3>
				</div>

				<div class="icon_border">
					<img id="img-2" src="img/grey_icons/home/2.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-grey-pic-txt-2'] ?></h3>
				</div>

				<div class="icon_border">
					<img id="img-3" src="img/grey_icons/home/3.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-grey-pic-txt-3'] ?></h3>
				</div>

				<div class="icon_border">
					<img id="img-4" src="img/grey_icons/home/4.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-grey-pic-txt-4'] ?></h3>
				</div>
			</div>

			<div class="headline">
				<h1><?php echo $language[$lang]['first-cred'] ?></h1>
			</div>

			<div id="icons_block_sec">
				<div class="icons_block_sec flex">
					<div class="icon_border_sec b1">
						<img id="img-5" src="img/grey_icons/credit_icons/6.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-grey-pic-txt-1'] ?></h3>
						<p><?php echo $language[$lang]['2-grey-pic-txt-1.1'] ?></p>
					</div>

					<div class="icon_border_sec b2">
						<img id="img-6" src="img/grey_icons/credit_icons/7.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-grey-pic-txt-2'] ?></h3>
						<p><?php echo $language[$lang]['2-grey-pic-txt-2.1'] ?></p>
					</div>

					<div class="icon_border_sec b3">
						<img id="img-7" src="img/grey_icons/credit_icons/5.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-grey-pic-txt-3'] ?></h3>
						<p><?php echo $language[$lang]['2-grey-pic-txt-3.1'] ?><a href="#rekviziti"><b> <?php echo $language[$lang]['there'] ?>.</b></a></p>
					</div>

					<div class="icon_border_sec b4">
						<img id="img-8" src="img/grey_icons/credit_icons/8.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-grey-pic-txt-4'] ?></h3>
						<p><?php echo $language[$lang]['2-grey-pic-txt-4.1'] ?></p>
					</div>
				</div>
			</div>

			<div id="block-piesakies">
				<div class="piesakies-background"></div>

				<div class="headline">
					<h1><?php echo $language[$lang]['re-ply-cred'] ?></h1>
				</div>

				<div class="apply_credit">
					<div class="img-apply-credit"><img src="img/pink/atrum_pc.svg" alt="pc"></div>
					<div class="apply">
						<div><h1><?php echo $language[$lang]['apply'] ?></h1></div>
						<div><button class="button_sanemt" id="f-button"><?php echo $language[$lang]['get-cred'] ?></button></div>
					</div>
				</div>

				<div id="raditajs"><img id="raditajs-img" src="img/pink/pink.png"></div>

				<div class="three_icons_block flex">
					<div class="tree_icon_border">
						<img id="img-9" src="img/ico/1.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['log-in-my-profil'] ?></h3>
					</div>
					<div class="tree_icon_border">
						<img id="img-10" src="img/ico/2.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['cred-bil-n-date'] ?></h3>
					</div>
					<div class="tree_icon_border">
						<img id="img-11" src="img/ico/3.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['get-cred'] ?></h3>
					</div>
				</div>
			</div>

			<div id="block-piesakies-mobile">
				<div class="piesakies-background-2"></div>

				<div class="apply_credit-2">
					<div class="img-apply-credit-2"><img id="violet-mob" src="img/pink/iphone.png" alt=""></div>
					<div class="apply-2">
						<div><h1><?php echo $language[$lang]['apply-phone'] ?></h1></div>
						<div><button class="button_sanemt-2" id="s-button"><?php echo $language[$lang]['call'] ?></button></div>
					</div>
				</div>

				<div class="three_icons_block-2 flex">
					<div class="tree_icon_border-2">
						<img id="img-12" src="img/ico/4.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['call-to-us'] ?><br>80700700 </h3>
					</div>
					<div class="tree_icon_border-2">
						<img id="img-13" src="img/ico/2.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['cred-bil-n-date'] ?></h3>
					</div>
					<div class="tree_icon_border-2">
						<img id="img-14" src="img/ico/3.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['get-cred'] ?></h3>
					</div>
				</div>
			</div>

			<div id="block-atmaksat">
				<div class="headline">
					<h1><?php echo $language[$lang]['payback'] ?></h1>
				</div>

				<div id="icons_block_sec2">
					<div class="icons_block_sec2 flex">
						<div class="icon_border_sec2 b5">
							<h3><?php echo $language[$lang]['how-prolong'] ?></h3>
							<p><?php echo $language[$lang]['how-prolong-1.1'] ?></p>
						</div>

						<div class="icon_border_sec2 b6">
							<h3><?php echo $language[$lang]['purpose-of-payment'] ?></h3>
							<p><?php echo $language[$lang]['purpose-of-payment-1.1'] ?></p>
						</div>

						<div class="icon_border_sec2 b7">
							<h3><?php echo $language[$lang]['credit-payback'] ?></h3>
							<p><?php echo $language[$lang]['credit-payback-1.1'] ?></p>
						</div>

						<div class="icon_border_sec2 b8">
							<h3><?php echo $language[$lang]['purpose-of-payment'] ?></h3>
							<p><?php echo $language[$lang]['purpose-of-payment-2.1'] ?></p>
						</div>
					</div>
				</div>
			</div>

			<div id="rekviziti">
			<div class="headline">
				<h1><?php echo $language[$lang]['rekvez'] ?></h1>
			</div>

			<div class="bank_rekv">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'swed')"><img src="img/bank/swedbank.png"></button>
					<button class="tablinks" onclick="openCity(event, 'citadele')"><img src="img/bank/citadele.png"></button>
					<button class="tablinks" onclick="openCity(event, 'dnb')"><img src="img/bank/dnb.png"></button>
					<button class="tablinks" onclick="openCity(event, 'nordea')"><img src="img/bank/nordea.png"></button>
					<button class="tablinks" onclick="openCity(event, 'another_b')"><h2>Cita banka</h2></button>
				</div>

				<!-- SWEDBANKA -->
				<div class="tabcontent swed" style="display: block;">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back'] ?></p>
					</div>
				</div>

				<!-- CITADELE -->
				<div class="tabcontent citadele">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back'] ?></p>
					</div>
				</div>

				<div class="tabcontent dnb" style="display: none;">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back'] ?></p>
					</div>
				</div>

				<div class="tabcontent nordea" style="display: none;">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back'] ?></p>
					</div>
				</div>

				<div class="tabcontent another_b">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back'] ?></p>
					</div>
				</div>
			</div>

			</div>

			<div class="headline">
				<h1><?php echo $language[$lang]['questions'] ?></h1>
			</div>

			<div id="questions">
				<button class="accordion"><?php echo $language[$lang]['q1'] ?></button>
				<div class="panel">

					<p><?php echo $language[$lang]['a1'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q2'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a2'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q3'] ?></button>
				<div class="panel">

					<p><?php echo $language[$lang]['a3'] ?></p>

				</div>

				<button class="accordion"><?php echo $language[$lang]['q4'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a4'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q5'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a5'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q6'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a6'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q7'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a7'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q8'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a8'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q9'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a9'] ?><a href="#rekviziti"><b><?php echo $language[$lang]['there'] ?></b></a>.</p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q10'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a10'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q11'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a11'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q12'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a12'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q13'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a13'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['q14'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['a14'] ?></p>
				</div>
			</div>

			<div class="headline">
				<h1><?php echo $language[$lang]['contacts'] ?></h1>
			</div>
			
		</div>
		
		<div id="content-pink">
		
			<div class="icons_block flex">
				<div class="icon_border">
					<img id="img-1" src="img/pink/ico/1.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-oran-pic-txt-1'] ?></h3>
				</div>

				<div class="icon_border">
					<img id="img-2" src="img/pink/ico/2.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-oran-pic-txt-2'] ?></h3>
				</div>

				<div class="icon_border">
					<img id="img-3" src="img/pink/ico/3.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-oran-pic-txt-3'] ?></h3>
				</div>

				<div class="icon_border">
					<img id="img-4" src="img/pink/ico/4.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-oran-pic-txt-4'] ?></h3>
				</div>
			</div>

			<div class="headline">
				<h1><?php echo $language[$lang]['first-cred.oran'] ?></h1>
			</div>

			<div id="icons_block_sec">
				<div class="icons_block_sec flex">
					<div class="icon_border_sec b1">
						<img id="img-5" src="img/pink/ico/5.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-oran-pic-txt-1'] ?></h3>
						<p><?php echo $language[$lang]['2-oran-pic-txt-1.1'] ?></p>
					</div>

					<div class="icon_border_sec b2">
						<img id="img-6" src="img/pink/ico/6.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-oran-pic-txt-2'] ?></h3>
						<p><?php echo $language[$lang]['2-oran-pic-txt-2.1'] ?></p>
					</div>

					<div class="icon_border_sec b3">
						<img id="img-7" src="img/pink/ico/7.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-oran-pic-txt-3'] ?></h3>
						<p><?php echo $language[$lang]['2-oran-pic-txt-3.1'] ?><a href="#rekviziti"><b> <?php echo $language[$lang]['there'] ?>.</b></a></p>
					</div>

					<div class="icon_border_sec b4">
						<img id="img-8" src="img/pink/ico/8.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-oran-pic-txt-4'] ?></h3>
						<p><?php echo $language[$lang]['2-oran-pic-txt-4.1'] ?></p>
					</div>
				</div>
			</div>

			<div id="block-piesakies">
				<div class="piesakies-background"></div>

				<div class="headline">
					<h1><?php echo $language[$lang]['re-ply-cred.oran'] ?></h1>
				</div>

				<div class="apply_credit">
					<div class="img-apply-credit"><img src="img/pink/atrum_pc.svg" alt="pc"></div>
					<div class="apply">
						<div><h1><?php echo $language[$lang]['apply.oran'] ?></h1></div>
						<div><button class="button_sanemt" id="f-button"><?php echo $language[$lang]['get-cred.oran'] ?></button></div>
					</div>
				</div>

	

				<div id="raditajs"><img id="raditajs-img" src="img/pink/pink.png"></div>

				<div class="three_icons_block flex">
					<div class="tree_icon_border">
						<img id="img-9" src="img/ico/1.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['log-in-my-profil.oran'] ?></h3>
					</div>
					<div class="tree_icon_border">
						<img id="img-10" src="img/ico/2.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['cred-bil-n-date.oran'] ?></h3>
					</div>
					<div class="tree_icon_border">
						<img id="img-11" src="img/ico/3.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['get-cred.oran'] ?></h3>
					</div>
				</div>
			</div>

			<div id="block-piesakies-mobile">
				<div class="piesakies-background-2"></div>

				<div class="apply_credit-2">
					<div class="img-apply-credit-2"><img id="violet-mob" src="img/pink/iphone.png" alt=""></div>
					<div class="apply-2">
						<div><h1><?php echo $language[$lang]['apply-phone.oran'] ?></h1></div>
						<div><button class="button_sanemt-2" id="s-button"><?php echo $language[$lang]['call.oran'] ?></button></div>
					</div>
				</div>

				<div class="three_icons_block-2 flex">
					<div class="tree_icon_border-2">
						<img id="img-12" src="img/ico/4.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['call-to-us.oran'] ?></h3>
					</div>
					<div class="tree_icon_border-2">
						<img id="img-13" src="img/ico/2.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['cred-bil-n-date.oran'] ?></h3>
					</div>
					<div class="tree_icon_border-2">
						<img id="img-14" src="img/ico/3.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['get-cred.oran'] ?></h3>
					</div>
				</div>
			</div>

			<div id="block-atmaksat">
				<div class="headline">
					<h1><?php echo $language[$lang]['payback.oran'] ?></h1>
				</div>

				<div id="icons_block_sec2">
					<div class="icons_block_sec2 flex">
						<div class="icon_border_sec2 b5">
							<h3><?php echo $language[$lang]['how-prolong.oran'] ?></h3>
							<p><?php echo $language[$lang]['how-prolong.oran-1.1'] ?></p>
						</div>

						<div class="icon_border_sec2 b6">
							<h3><?php echo $language[$lang]['purpose-of-payment.oran'] ?></h3>
							<p><?php echo $language[$lang]['purpose-of-payment.oran-1.1'] ?></p>
						</div>

						<div class="icon_border_sec2 b7">
							<h3><?php echo $language[$lang]['credit-payback.oran'] ?></h3>
							<p><?php echo $language[$lang]['credit-payback.oran-1.1'] ?></p>
						</div>

						<div class="icon_border_sec2 b8">
							<h3><?php echo $language[$lang]['purpose-of-payment.oran'] ?></h3>
							<p><?php echo $language[$lang]['purpose-of-payment.oran-2.1'] ?></p>
						</div>
					</div>
				</div>
			</div>

			<div id="rekviziti">
			<div class="headline">
				<h1><?php echo $language[$lang]['rekvez.oran'] ?></h1>
			</div>

			<div class="bank_rekv">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'swed')"><img src="img/bank/swedbank.png"></button>
					<button class="tablinks" onclick="openCity(event, 'citadele')"><img src="img/bank/citadele.png"></button>
					<button class="tablinks" onclick="openCity(event, 'dnb')"><img src="img/bank/dnb.png"></button>
					<button class="tablinks" onclick="openCity(event, 'nordea')"><img src="img/bank/nordea.png"></button>
					<button class="tablinks" onclick="openCity(event, 'another_b')"><h2>Cita banka</h2></button>
				</div>

				<!-- SWEDBANKA -->
				<div class="tabcontent swed" style="display: block;">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr.oran'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr.oran'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.oran'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long.oran'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback.oran'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long.oran'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long.oran'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback.oran'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back.oran'] ?></p>
					</div>
				</div>

				<!-- CITADELE -->
				<div class="tabcontent citadele">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr.oran'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr.oran'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.oran'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long.oran'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback.oran'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long.oran'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long.oran'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback.oran'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back.oran'] ?></p>
					</div>
				</div>

				<div class="tabcontent dnb" style="display: none;">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr.oran'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr.oran'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.oran'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long.oran'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback.oran'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long.oran'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long.oran'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback.oran'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back.oran'] ?></p>
					</div>
				</div>

				<div class="tabcontent nordea" style="display: none;">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr.oran'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr.oran'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.oran'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long.oran'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback.oran'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long.oran'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long.oran'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback.oran'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back.oran'] ?></p>
					</div>
				</div>

				<div class="tabcontent another_b">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr.oran'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr.oran'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.oran'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long.oran'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback.oran'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long.oran'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long.oran'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback.oran'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back.oran'] ?></p>
					</div>
				</div>
			</div>

			</div>

			<div class="headline">
				<h1><?php echo $language[$lang]['questions.oran'] ?></h1>
			</div>

			<div id="questions">
				<button class="accordion"><?php echo $language[$lang]['oran.q1'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a1'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q2'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a2'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q3'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a3'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q4'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a4'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q5'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a5'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q6'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a6'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q7'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a7'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q8'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a8'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q9'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a9'] ?><a href="#rekviziti"><b><?php echo $language[$lang]['there'] ?></b></a>.</p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q10'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a10'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q11'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a11'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q12'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a12'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q13'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['oran.a13'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['oran.q14'] ?></button>
				<div class="panel">
					<p></p>
				</div>
			</div>

			<div class="headline">
				<h1><?php echo $language[$lang]['contacts.oran'] ?></h1>
			</div>
			
		</div>
		
		<div id="content-violet">
		
			<div class="icons_block flex">
				<div class="icon_border">
					<img id="img-1" src="img/violet/ico/1.0.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-vio-pic-txt-1'] ?></h3>
				</div>

				<div class="icon_border">
					<img id="img-2" src="img/violet/ico/1.2.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-vio-pic-txt-2'] ?></h3>
				</div>

				<div class="icon_border">
					<img id="img-3" src="img/violet/ico/1.1.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-vio-pic-txt-3'] ?></h3>
				</div>

				<div class="icon_border">
					<img id="img-4" src="img/violet/ico/11.svg" alt="Smiley face">
					<h3><?php echo $language[$lang]['1-vio-pic-txt-4'] ?></h3>
				</div>
			</div>

			<div class="headline">
				<h1><?php echo $language[$lang]['first-cred.vio'] ?></h1>
			</div>

			<div id="icons_block_sec">
				<div class="icons_block_sec flex">
					<div class="icon_border_sec b1">
						<img id="img-5" src="img/pink/ico/5.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-vio-pic-txt-1'] ?></h3>
						<p><?php echo $language[$lang]['2-vio-pic-txt-1.1'] ?></p>
					</div>

					<div class="icon_border_sec b2">
						<img id="img-6" src="img/pink/ico/6.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-vio-pic-txt-2'] ?></h3>
						<p><?php echo $language[$lang]['2-vio-pic-txt-2.1'] ?></p>
					</div>

					<div class="icon_border_sec b3">
						<img id="img-7" src="img/pink/ico/7.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-vio-pic-txt-3'] ?></h3>
						<p><?php echo $language[$lang]['2-vio-pic-txt-3.1'] ?><a href="#rekviziti"><b> <?php echo $language[$lang]['there'] ?>.</b></a></p>
					</div>

					<div class="icon_border_sec b4">
						<img id="img-8" src="img/pink/ico/8.svg" alt="Smiley face">
						<h3><?php echo $language[$lang]['2-vio-pic-txt-4'] ?></h3>
						<p><?php echo $language[$lang]['2-vio-pic-txt-4.1'] ?></p>
					</div>
				</div>
			</div>

			<div id="block-piesakies">
				<div class="piesakies-background"></div>

				<div class="headline">
					<h1><?php echo $language[$lang]['re-ply-cred.vio'] ?></h1>
				</div>

				<div class="apply_credit">
					<div class="img-apply-credit"><img src="img/pink/atrum_pc.svg" alt="pc"></div>
					<div class="apply">
						<div><h1><?php echo $language[$lang]['apply.vio'] ?></h1></div>
						<div><button class="button_sanemt" id="f-button"><?php echo $language[$lang]['get-cred.vio'] ?></button></div>
					</div>
				</div>

				<div id="raditajs"><img id="raditajs-img" src="img/violet/violet-bulta.png"></div>

				<div class="three_icons_block flex">
					<div class="tree_icon_border">
						<img id="img-9" src="img/violet/ico/13.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['log-in-my-profil.vio'] ?></h3>
					</div>
					<div class="tree_icon_border">
						<img id="img-10" src="img/violet/ico/17.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['cred-bil-n-date.vio'] ?></h3>
					</div>
					<div class="tree_icon_border">
						<img id="img-11" src="img/violet/ico/18.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['get-cred.vio'] ?></h3>
					</div>
				</div>
			</div>

			<div id="block-piesakies-mobile">
				<div class="piesakies-background-2"></div>

				<div class="apply_credit-2">
					<div class="img-apply-credit-2"><img id="violet-mob" src="img/violet/tel-violet.png" alt=""></div>
					<div class="apply-2">
						<div><h1><?php echo $language[$lang]['apply-phone.vio'] ?></h1></div>
						<div><button class="button_sanemt-2" id="s-button"><?php echo $language[$lang]['call.vio'] ?></button></div>
					</div>
				</div>

				<div class="three_icons_block-2 flex">
					<div class="tree_icon_border-2">
						<img id="img-12" src="img/violet/ico/16.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['call-to-us.vio'] ?><br>80700700 </h3>
					</div>
					<div class="tree_icon_border-2">
						<img id="img-13" src="img/violet/ico/17.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['cred-bil-n-date.vio'] ?></h3>
					</div>
					<div class="tree_icon_border-2">
						<img id="img-14" src="img/violet/ico/18.png" alt="Smiley face">
						<h3><?php echo $language[$lang]['get-cred.vio'] ?></h3>
					</div>
				</div>
			</div>

			<div id="block-atmaksat">
				<div class="headline">
					<h1><?php echo $language[$lang]['payback.vio'] ?></h1>
				</div>

				<div id="icons_block_sec2">
					<div class="icons_block_sec2 flex">
						<div class="icon_border_sec2 b5">
							<h3><?php echo $language[$lang]['how-prolong.vio'] ?></h3>
							<p><?php echo $language[$lang]['how-prolong.vio-1.1'] ?></p>
						</div>

						<div class="icon_border_sec2 b6">
							<h3><?php echo $language[$lang]['purpose-of-payment.vio'] ?></h3>
							<p><?php echo $language[$lang]['purpose-of-payment.vio-1.1'] ?></p>
						</div>

						<div class="icon_border_sec2 b7">
							<h3><?php echo $language[$lang]['credit-payback.vio'] ?></h3>
							<p><?php echo $language[$lang]['credit-payback.vio-1.1'] ?></p>
						</div>

						<div class="icon_border_sec2 b8">
							<h3><?php echo $language[$lang]['purpose-of-payment.vio'] ?></h3>
							<p><?php echo $language[$lang]['purpose-of-payment.vio-2.1'] ?></p>
						</div>
					</div>
				</div>
			</div>

			<div id="rekviziti">
			<div class="headline">
				<h1><?php echo $language[$lang]['rekvez.vio'] ?></h1>
			</div>

			<div class="bank_rekv">
				<div class="tab">
					<button class="tablinks" onclick="openCity(event, 'swed')"><img src="img/bank/swedbank.png"></button>
					<button class="tablinks" onclick="openCity(event, 'citadele')"><img src="img/bank/citadele.png"></button>
					<button class="tablinks" onclick="openCity(event, 'dnb')"><img src="img/bank/dnb.png"></button>
					<button class="tablinks" onclick="openCity(event, 'nordea')"><img src="img/bank/nordea.png"></button>
					<button class="tablinks" onclick="openCity(event, 'another_b')"><h2>Cita banka</h2></button>
				</div>

				<!-- SWEDBANKA -->
				<div class="tabcontent swed" style="display: block;">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr.vio'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr.vio'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.vio'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long.vio'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback.vio'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long.vio'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long.vio'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback.vio'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back.vio'] ?></p>
					</div>
				</div>

				<!-- CITADELE -->
				<div class="tabcontent citadele">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr.vio'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr.vio'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.vio'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long.vio'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback.vio'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long.vio'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long.vio'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback.vio'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back.vio'] ?></p>
					</div>
				</div>

				<div class="tabcontent dnb" style="display: none;">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr.vio'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr.vio'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.vio'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long.vio'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback.vio'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long.vio'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long.vio'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback.vio'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back.vio'] ?></p>
					</div>
				</div>

				<div class="tabcontent nordea" style="display: none;">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr.vio'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr.vio'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.vio'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long.vio'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback.vio'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long.vio'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long.vio'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback.vio'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back.vio'] ?></p>
					</div>
				</div>

				<div class="tabcontent another_b">
					<div class="saturs">
						<h1><?php echo $language[$lang]['reg.nr.vio'] ?></h1>
						<p>LATEKO LĪZINGS AS </p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['kont.nr.vio'] ?></h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.vio'] ?></h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.p-long.vio'] ?></h1>
						<p><?php echo $language[$lang]['accept.cred.payback.vio'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.reg.p-long.vio'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-long.vio'] ?></p>
					</div>
					<div class="saturs">
						<h1><?php echo $language[$lang]['pay.cred.payback.vio'] ?></h1>
						<p><?php echo $language[$lang]['contract.nr.p-back.vio'] ?></p>
					</div>
				</div>
			</div>

			</div>

			<div class="headline">
				<h1><?php echo $language[$lang]['questions.vio'] ?></h1>
			</div>

				<div id="questions">
				<button class="accordion"><?php echo $language[$lang]['viol.q1'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a1'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q2'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a2'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q3'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a3'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q4'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a4'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q5'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a5'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q6'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a6'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q7'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a7'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q8'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a8'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q9'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a9'] ?><a href="#rekviziti"><b><?php echo $language[$lang]['there'] ?></b></a>.</p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q10'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a10'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q11'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a11'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q12'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a12'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q13'] ?></button>
				<div class="panel">
					<p><?php echo $language[$lang]['viol.a13'] ?></p>
				</div>

				<button class="accordion"><?php echo $language[$lang]['viol.q14'] ?></button>
				<div class="panel">
					<p></p>
				</div>
			</div>

			<div class="headline">
				<h1><?php echo $language[$lang]['contacts.vio'] ?></h1>
			</div>
			
		</div>
		
		<?php include 'assets/footer.php'; ?>
	</body>
		<script type="text/javascript" src="js/content.js"></script>
		<!-- <script type="text/javascript" src="js/loan_forms.js"></script> -->

</html>
