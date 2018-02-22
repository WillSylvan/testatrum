<?php 
  include 'lang/lang-reg.php';
  include 'lang/set-lang.php';
?>

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

    #two-form-second {
      display: none;
    }

    fieldset {
      border : 0;
    }

    .input:invalid {
      border: 2px solid red!important;
    }
  </style>
</head>

<body>
  <?php include 'assets/header.php'; ?>
  <div id="page-form-content">
    <div class="credit_info">
      <?php include "assets/kredits.php"?>
    </div>
    <div id="page-content-1">
      <h2><span><?php echo $language[$lang]['cred-name1'] ?></span><?php echo $language[$lang]['cred-name2'] ?></h2>

      <!--PIRMA FORMA-->
      <div id="form-1">
        <div class="flex klients">
          <div class="flex">
            <div class="flex izvelne">
              <button class="div" style="background-color:rgb(250, 142, 109)"></button>
              <p><?php echo $language[$lang]['new-client'] ?></p>
            </div>
            <div class="flex izvelne">
              <button class="div" style="background-color:grey"></button>
              <p><?php echo $language[$lang]['exist-client'] ?></p>
            </div>
          </div>
          <div class="izvelne" id="stepPrev" style="margin:0;"><img src="img/back.png"></div>
        </div>
        <form id="one-form" action="javascript:void(0)">
          <div><input name="firstName" id="name" class="input" placeholder=<?php echo $language[$lang]['firstName'] ?> data-validation="length" data-validation-length="min3" pattern="[a-zA-Z]+" value=""></div>
          <div><input name="lastName" id="lname" class="input" placeholder=<?php echo $language[$lang]['lastName'] ?> data-validation="length" data-validation-length="min3" pattern="[a-zA-Z]+" value=""></div>
          <div><input name="identityCode" id="p_code" class="input" placeholder=<?php echo $language[$lang]['identityCode'] ?> data-validation="number" data-mask="00-00" pattern="[0-9]{6}[-]{1}[0-9]{5}"> </div>
          <div class="flex info">
            <div><input name="phone" id="phone" class="input" placeholder=<?php echo $language[$lang]['phone'] ?> data-validation="number" pattern="[0-9]{8}"></div>
            <div><input name="email" id="email" class="input" data-validation=<?php echo $language[$lang]['email'] ?> placeholder="Epasts:" pattern="[a-zA-Z0-9]+[@]{1}[a-zA-Z0-9]+[.]{1}[a-z]+"></div>
          </div>
          <div><input name="workPlace" id="place_of_job" class="input" data-validation="length" data-validation-length="min3" placeholder=<?php echo $language[$lang]['workPlace'] ?>></div>
          <div><input name="workPosition" id="position" class="input" data-validation="length" data-validation-length="min3" placeholder=<?php echo $language[$lang]['workPosition'] ?>></div>
          <div><input name="monthlyIncome" id="m_income" class="input" placeholder="Ikmēneša ienākumi:" data-validation="number" pattern="[0-9]+"></div>
          <div><input name="monthlyExpenses" id="m_expenses" class="input" placeholder=<?php echo $language[$lang]['monthlyIncome'] ?> pattern="[0-9]+"></div>

          <div><input class="turpinat" type="submit" value=<?php echo $language[$lang]['cont'] ?>></div>
        </form>
      </div>

      <!--OTRA FORMA-->
      <div id="form-2">
        <div class="flex klients">
          <div class="flex">
            <div class="flex izvelne">
              <button class="div" style="background-color:rgb(250, 142, 109)"></button>
              <p><?php echo $language[$lang]['new-client'] ?></p>
            </div>
            <div class="flex izvelne">
              <button class="div" style="background-color:grey"></button>
              <p><?php echo $language[$lang]['exist-client'] ?></p>
            </div>
          </div>
          <div class="izvelne" id="stepPrev" style="margin:0;"><img src="img/back.png"></div>
        </div>
        <form id="two-form" action="javascript:void(0)">
          <fieldset>
          <h2><span><?php echo $language[$lang]['dekl'] ?></span> <?php echo $language[$lang]['adr'] ?></h2>
          <div><input name="city" class="input" data-validation="length" data-validation-length="min3" placeholder=<?php echo $language[$lang]['city'] ?>></div>
          <div><input name="street" class="input" data-validation="length" data-validation-length="min3" placeholder=<?php echo $language[$lang]['street'] ?>></div>
          <div class="flex info">
            <div><input name="house" class="input" placeholder=<?php echo $language[$lang]['house-nr'] ?>></div>
            <div><input name="apartment" class="input" placeholder=<?php echo $language[$lang]['flat-nr'] ?>></div>
          </div>
          <div><input name="postalCode" data-validation="length" data-validation-length="min3" placeholder=<?php echo $language[$lang]['index'] ?>></div>
          <div class="flex check">
          <input name="adresCheck" id="declareChecking" class="input" type="checkbox" class="radio">
          <p><?php echo $language[$lang]['check'] ?></p>
        </div>
      </fieldset>

        <fieldset id="two-form-second" action="javascript:void(0)">
          <h2><span><?php echo $language[$lang]['fakt'] ?></span> <?php echo $language[$lang]['adr'] ?></h2>
          <div><input name="city" class="input" data-validation-optional="true" data-validation="length" data-validation-length="min3" placeholder=<?php echo $language[$lang]['city'] ?> ></div>
          <div><input name="street" class="input" data-validation="length" data-validation-length="min3" data-validation-optional="true" placeholder=<?php echo $language[$lang]['street'] ?></div>
          <div class="flex info">
            <div><input name="house" class="input" placeholder=<?php echo $language[$lang]['house-nr'] ?>></div>
            <div><input name="apartment" class="input" placeholder=<?php echo $language[$lang]['flat-nr'] ?>></div>
          </div>
          <div><input name="postalCode" data-validation="length" data-validation-length="min3" data-validation-optional="true" placeholder=<?php echo $language[$lang]['index'] ?>></div>

        </fieldset>


          <div><input class="turpinat" type="submit" value=<?php echo $language[$lang]['cont'] ?>></div>
        </form>
      </div>

      <!--TREŠA FORMA-->
      <div id="form-3">
        <div class="flex klients">
          <div class="flex">
            <div class="flex izvelne">
              <button class="div" style="background-color:rgb(250, 142, 109)"></button>
              <p><?php echo $language[$lang]['new-client'] ?></p>
            </div>
            <div class="flex izvelne">
              <button class="div" style="background-color:grey"></button>
              <p><?php echo $language[$lang]['exist-client'] ?></p>
            </div>
          </div>
          <div class="izvelne" style="margin:0;"><img src="img/back.png"></div>
        </div>
        <form id="three-form" action="javascript:void(0)">
          <div><input name="password_confirmation" autocomplete="new-password" class="input" placeholder=<?php echo $language[$lang]['pass'] ?> type="password"></div>
          <div><input name="password" autocomplete="new-password" class="input" placeholder=<?php echo $language[$lang]['check-pass'] ?> type="password" data-validation="confirmation"></div>
          <div class="flex check">
            <input name="check" class="input" type="checkbox" class="radio" data-validation="required">
            <p><?php echo $language[$lang]['new-check2'] ?></p>
          </div>

          <div><input class="turpinat" type="submit" value=<?php echo $language[$lang]['cont'] ?>></div>
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
              <button class="tablinks active" onclick="openCity(event, 'swed')"><img src="img/bank/swedbank.png"></button>
              <button class="tablinks" onclick="openCity(event, 'citadele')"><img src="img/bank/citadele.png"></button>
              <button class="tablinks" onclick="openCity(event, 'luminor')"><img src="img/bank/luminor.png"></button>
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
                <h1>Maksājuma mērķis kredīta atmaksai:</h1>
                <p>Līguma Nr. SMXXXXXX pagarinājums</p>
              </div>
              <div class="saturs">
                <h1>Maksājuma mērķis kredīta atmaksai:</h1>
                <p>Līguma Nr. SMXXXXXX atmaksa</p>
              </div>
            </div>

            <!-- CITADELE -->
            <div id="citadele" class="tabcontent" style="display: none;">
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
                <h1>Maksājuma mērķis kredīta atmaksai:</h1>
                <p>Līguma Nr. SMXXXXXX pagarinājums</p>
              </div>
              <div class="saturs">
                <h1>Maksājuma mērķis kredīta atmaksai:</h1>
                <p>Līguma Nr. SMXXXXXX atmaksa</p>
              </div>
            </div>

            <div id="luminor" class="tabcontent" style="display: none;">
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
                <h1>Maksājuma mērķis kredīta atmaksai:</h1>
                <p>Līguma Nr. SMXXXXXX pagarinājums</p>
              </div>
              <div class="saturs">
                <h1>Maksājuma mērķis kredīta atmaksai:</h1>
                <p>Līguma Nr. SMXXXXXX atmaksa</p>
              </div>
            </div>

            <div id="another_b" class="tabcontent" style="display: none;">
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
                <h1>Maksājuma mērķis kredīta atmaksai:</h1>
                <p>Līguma Nr. SMXXXXXX pagarinājums</p>
              </div>
              <div class="saturs">
                <h1>Maksājuma mērķis kredīta atmaksai:</h1>
                <p>Līguma Nr. SMXXXXXX atmaksa</p>
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
    </div>
  </div>
  <?php include 'assets/footer.php'; ?>
</body>

</html>
