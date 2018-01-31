<html>

<head>
  <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style/kredita_pieteikums.css">
  <link rel="stylesheet" type="text/css" href="style/style.css">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title></title>
  <script type="text/javascript" src="js/jquery-3.2.1.min.js"></script>
  <script type="text/javascript" src="js/registration.js"></script>
  <script type="text/javascript" src="js/jquery.mask.js"></script>
  <script type="text/javascript" src="js/jquery.form-validator.min.js"></script>


  <style>
    input:disabled {
      filter: grayscale(100%);
    }

    .input:invalid {
      border: 2px solid red!important;
    }
  </style>
</head>

<body>
  <?php include 'assets/header.php'; ?>
  <?php include 'assets/kredits.php'; ?>
  <div id="page-form-content">
    <div id="page-content-1">
      <h2><span>Kredīta</span> pieteikums</h2>

      <!--PIRMA FORMA-->
      <div id="form-1">
        <div class="flex klients">
          <div class="flex">
            <div class="flex izvelne">
              <button class="div" style="background-color:rgb(250, 142, 109)"></button>
              <p>Jauns klients</p>
            </div>
            <div class="flex izvelne">
              <button class="div" style="background-color:grey"></button>
              <p>Esošs klients</p>
            </div>
          </div>
          <div class="izvelne" id="stepPrev" style="margin:0;"><img src="img/back.png"></div>
        </div>
        <form id="one-form" action="javascript:void(0)">
          <div><input name="name" id="name" class="input" placeholder="Vārds" data-validation="length" data-validation-length="min3" pattern="[a-zA-Z]+[ ][a-zA-Z]+" value=""></div>
		   <div><input name="name" id="name" class="input" placeholder="Uzvārds" data-validation="length" data-validation-length="min3" pattern="[a-zA-Z]+[ ][a-zA-Z]+" value=""></div>
          <div><input name="p_code" id="p_code" class="input" placeholder="Personas kods" data-validation="number" data-mask="00-00" pattern="[0-9]{6}[-]{1}[0-9]{5}"> </div>
          <div class="flex info">
            <div><input name="phone" id="phone" class="input" placeholder="Tālrunis" data-validation="number" pattern="[0-9]{8}"></div>
            <div><input name="e_mail" id="email" class="input" data-validation="E-pasts" placeholder="Epasts:" pattern="[a-zA-Z0-9]+[@]{1}[a-zA-Z0-9]+[.]{1}[a-z]+"></div>
          </div>
          <div><input name="place_of_job" id="place_of_job" class="input" data-validation="length" data-validation-length="min3" placeholder="Darba vieta:"></div>
          <div><input name="position" id="position" class="input" data-validation="length" data-validation-length="min3" placeholder="Ieņemamais amats"></div>
          <div><input name="m_income" id="m_income" class="input" placeholder="Ikmēneša ienākumi:" data-validation="number" pattern="[0-9]+"></div>
          <div><input name="m_expenses" id="m_expenses" class="input" placeholder="Ikmēneša izdevumi:" pattern="[0-9]+"></div>

          <div><input class="turpinat" type="submit" value="Turpināt"></div>
        </form>
      </div>

      <!--OTRA FORMA-->
      <div id="form-2">
        <div class="flex klients">
          <div class="flex">
            <div class="flex izvelne">
              <button class="div" style="background-color:rgb(250, 142, 109)"></button>
              <p>Jauns klients</p>
            </div>
            <div class="flex izvelne">
              <button class="div" style="background-color:grey"></button>
              <p>Esošs klients</p>
            </div>
          </div>
          <div class="izvelne" id="stepPrev" style="margin:0;"><img src="img/back.png"></div>
        </div>
        <form id="two-form" action="javascript:void(0)">
		<h1>Deklarēta adrese</h1>
          <div><input name="city" class="input" data-validation="length" data-validation-length="min3" placeholder="Pilsēta:"></div>
          <div><input name="street" class="input" data-validation="length" data-validation-length="min3" placeholder="Iela:"></div>
          <div class="flex info">
            <div><input name="home_nr" class="input" placeholder="Mājas nr."></div>
            <div><input name="flat_nr" class="input" placeholder="Dzīvokļa nr.:"></div>
          </div>
          <div><input name="index" data-validation="length" data-validation-length="min3" placeholder="Pasta indekss:"></div>
		  <div class="flex checks">
            <div><input name="check" class="input" type="checkbox" class="radio" id="live_place_mach" data-validation=""></div>
            <div><p>Deklarēta adrese sakrīt ar faktisko dzīvesvietu</p></div>
          </div> 
		  
		<h1>Faktiska adrese</h1>
		  <div><input name="city" class="input" data-validation="length" data-validation-length="min3" placeholder="Pilsēta:"></div>
          <div><input name="street" class="input" data-validation="length" data-validation-length="min3" placeholder="Iela:"></div>
          <div class="flex info">
            <div><input name="home_nr" class="input" placeholder="Mājas nr."></div>
            <div><input name="flat_nr" class="input" placeholder="Dzīvokļa nr.:"></div>
          </div>
          <div><input name="index" data-validation="length" data-validation-length="min3" placeholder="Pasta indekss:"></div>

          <div><input class="turpinat" type="submit" value="Turpināt"></div>
        </form>
      </div>

      <!--TREŠA FORMA-->
      <div id="form-3">
        <div class="flex klients">
          <div class="flex">
            <div class="flex izvelne">
              <button class="div" style="background-color:rgb(250, 142, 109)"></button>
              <p>Jauns klients</p>
            </div>
            <div class="flex izvelne">
              <button class="div" style="background-color:grey"></button>
              <p>Esošs klients</p>
            </div>
          </div>
          <div class="izvelne" style="margin:0;"><img src="img/back.png"></div>
        </div>
        <form id="three-form" action="javascript:void(0)">
          <div><input name="pass_confirmation" class="input" placeholder="Parole:" type="password"></div>
          <div><input name="pass" class="input" placeholder="Parole atkārtoti:" type="password" data-validation="confirmation"></div>
          <div class="flex check">
            <div><input name="check" class="input" type="radio" class="radio" data-validation="required"></div>
            <div><p>Piekrītu līguma nosacījumiem, atļauju apstrādāt savus personas datus un apliecinu, ka sniegtā informācija ir patiesa.</p></div>
          </div>

          <div><input class="turpinat" type="submit" value="Turpināt"></div>
        </form>

      </div>

      <!--CETURTA FORMA-->
      <div id="form-4">
        <div id="four-form" action="javascript:void(0)">
          <div style="text-align:left ">
            <p>Lai pabeigtu reģistrāciju, veiciet reģistrācijas maksas<br> <b>EUR 0.01</b> pārskaitījumu</p>
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
				<div id="swed" class="tabcontent" style="display: block;">
					<div class="saturs">
						<h1>Saņēmējs</h1>
						<p>Lateco līzings as</p>
					</div>
					<div class="saturs">
						<h1>Reģ.Nr.</h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1>Konta numurs:</h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis:</h1>
						<p><b>Līguma Nr. SM123456 atmaksa</b></p>
					</div>
				</div>
				
				<!-- CITADELE -->
				<div id="citadele" class="tabcontent">
					<div class="saturs">
						<h1>2Saņēmējs</h1>
						<p>Lateco līzings as</p>
					</div>
					<div class="saturs">
						<h1>Reģ.Nr.</h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1>Konta numurs:</h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis:</h1>
						<p><b>Līguma Nr. SM123456 atmaksa</b></p>
					</div>
				</div>

				<div id="dnb" class="tabcontent" style="display: none;">
				  <div class="saturs">
					<h1>3Saņēmējs</h1>
					<p>Lateco līzings as</p>
				  </div>
				  <div class="saturs">
					<h1>Reģ.Nr.</h1>
					<p>40003366651</p>
				  </div>
				  <div class="saturs">
					<h1>Konta numurs:</h1>
					<p>LV67HABA0551033353134</p>
				  </div>
					<div class="saturs">
						<h1>Maksājuma mērķis:</h1>
						<p><b>Līguma Nr. SM123456 atmaksa</b></p>
					</div>
				</div>
				
				<div id="nordea" class="tabcontent" style="display: none;">
				  <div class="saturs">
					<h1>4Saņēmējs</h1>
					<p>Lateco līzings as</p>
				  </div>
				  <div class="saturs">
					<h1>Reģ.Nr.</h1>
					<p>40003366651</p>
				  </div>
				  <div class="saturs">
					<h1>Konta numurs:</h1>
					<p>LV67HABA0551033353134</p>
				  </div>
					<div class="saturs">
						<h1>Maksājuma mērķis:</h1>
						<p><b>Līguma Nr. SM123456 atmaksa</b></p>
					</div>
				</div>

				<div id="another_b" class="tabcontent">
					<div class="saturs">
						<h1>4Saņēmējs</h1>
						<p>Lateco līzings as</p>
					</div>
					<div class="saturs">
						<h1>Reģ.Nr.</h1>
						<p>40003366651</p>
					</div>
					<div class="saturs">
						<h1>Konta numurs:</h1>
						<p>LV67HABA0551033353134</p>
					</div>
					<div class="saturs">
						<h1>Maksājuma mērķis:</h1>
						<p><b>Līguma Nr. SM123456 atmaksa</b></p>
					</div>
				</div>
			</div>
		
		<script>
            $(document).ready(function() {

              function openCity(evt, cityName) {
                var i, tabcontent, tablinks;
                tabcontent = document.getElementsByClassName("tabcontent");
                for (i = 0; i < tabcontent.length; i++) {
                  tabcontent[i].style.display = "none";
                }
                tablinks = document.getElementsByClassName("tablinks");
                for (i = 0; i < tablinks.length; i++) {
                  tablinks[i].className = tablinks[i].className.replace(" active", "");
                }
                document.getElementById(cityName).style.display = "block";
                evt.currentTarget.className += " active";
              }
            });
          </script>
          <button class="veikt">Veikt maksajumu</button>
        </div>
      </div>
    
	  <!--PIEKTA FORMA-->

       <div id="form-5">	
           <div id="five-form">
               <img src="img/ok.png">
               <h6>Paldies! Jūsu kredīta pieteikums ir saņemts.</h6>
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
