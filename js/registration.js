//////////////////////////////////////////
// Start executing code, when page loads.
//////////////////////////////////////////

$(document).ready(function() {


      $("#declareChecking").change(function() {
          if ($("#declareChecking").is(':checked')) {
            $("#two-form-second").slideDown('slow');
            $("#two-form-second").each(function() {
              $("#two-form-second input").removeAttr('data-validation-optional');
              $("#two-form-second input").attr({
              'data-validation': "required"

            });

          })
            configValid();
          } else {
            $("#two-form-second").slideUp('slow');
            $("#two-form-second").each(function() {
                  $("#two-form-second input").attr({
                    'data-validation-optional': "true"
                  });
                  $("#two-form-second input").removeAttr('data-validation');


          });
        }
      });
        //////////////////////////////////////////
        // Mask for inputs.
        //////////////////////////////////////////

        $('input[name="identityCode"]').mask('000000-00000'); $('input[name="phone"]').mask('00000000');
        $('input[name="postalCode_"],input[name="postalCode"]  ').mask('LV-0000')
        //////////////////////////////////////////
        // Client-side validation.
        //////////////////////////////////////////
        function configValid() {
          $.validate({
            modules: 'security, toggleDisabled',
            form: '#form-1 , #form-2 , #form-3',
            lang: 'lv , ru'
          });
        }
        configValid();
        //////////////////////////////////////////
        // Form navigation & 'POST' to server api.
        //////////////////////////////////////////

        // Creating some variables, such as first form to show, array for fully filled form.
        var currentForm = 3;
        $("#form-" + currentForm).show();
        var allDataForm = [],
          declaredAdress = [],
          factAdress = [],
          customerData = {},
          clientIp,
          acceptTerms,
          actualResidenceSameAsDesclared,
          loanType = sessionStorage['request_loan']//localStorage.getItem("loanType"),
          loanPrincip = sessionStorage[loanType+'_loan_principal']//localStorage.getItem("loanPrincipal"),
          loanTerm = sessionStorage[loanType+'_loan_term']//localStorage.getItem("loanTerms"),
          loanInfo = {
            type: loanType,
            principal: loanPrincip,
            term: loanTerm
          };
          var have_loan=false;
           if (loanInfo.term!=0&&loanInfo.term!=''&&loanInfo.term!=null&&loanInfo.term!='undefined'&&
              loanInfo.principal!=0&&loanInfo.principal!=''&&loanInfo.principal!=null&&loanInfo.principal!='undefined'&&
              loanInfo.type!=0&&loanInfo.type!=''&&loanInfo.type!=null&&loanInfo.type!='undefined') {
              
              have_loan = true

              document.getElementById('credit_info').style.display = 'block';

            }


        $.getJSON('https://api.ipify.org?format=json', function(data) {
          clientIp = data.ip;
        });

        //////////////////////////////////////////
        // Function to push current form data in to global form data array.
        //////////////////////////////////////////

        var serializeForm = function() {
          if (currentForm === 1) {
            var firstForm = $("#one-form").serializeArray();
            allDataForm.push.apply(allDataForm, firstForm);
          } else if (currentForm === 2) {
            var secondForm = $("#two-form").serializeArray();
            // console.log(secondForm)
           //  console.log(declaredAdress)
          //console.log(arrayFormating(declaredAdress))

            for (var key in secondForm) {
              if (secondForm.hasOwnProperty(key)) {
               // console.log(key)
              }
            }
            for (var i = 0; i < secondForm.length; i++) {

              if(secondForm[i].name.search('_')>-1){
                declaredAdress.push({name:secondForm[i].name.replace('_',''),value:secondForm[i].value})
              }else {
              //  console.log(secondForm[i])
                factAdress.push(secondForm[i])

              }
            }
            //console.log(declaredAdress)
            //console.log(factAdress)



            if ($("input[name=adresCheck]").is(":checked")) {
              actualResidenceNSameAsDesclared = false;
              var secondForm2 = $("#two-form-second").serializeArray();
             // factAdress.push.apply(factAdress, secondForm2);
            } else {
              actualResidenceNSameAsDesclared = true;
              //factAdress.push.apply(factAdress, secondForm);
              console.log('SAME')
              factAdress = declaredAdress
              console.log(declaredAdress)
              console.log(factAdress)
            }
          } else if (currentForm === 3) {
            var thirdForm = $("input[name=password]").serializeArray();
            acceptTerms = $("input[name=check]").is(":checked");
            allDataForm.push.apply(allDataForm, thirdForm);
          }
        }

        //////////////////////////////////////////
        // Process all form data, to remove ("name" : name, "value" = value) format style.
        //////////////////////////////////////////

        var arrayFormating = function(arrToProc) {
          var processingArr = arrToProc,
            processedData = {};

          for (var i in processingArr) {
            processedData[processingArr[i].name] = processingArr[i].value;
          }
          return processedData;
        }

        //////////////////////////////////////////
        // Ajax send function.
        //////////////////////////////////////////

        var sendToApi = function() {
          var createCORSRequest = function(method, url) {
            var xhr = new XMLHttpRequest();

            if ("withCredentials" in xhr) {
              // Most browsers.
              xhr.open(method, url, true);
              xhr.setRequestHeader("Authorization", 'Basic YXRydW0ubHZfdGVzdDp0dXRLdUwyZjU5NUxUTkti');
            } else if (typeof XDomainRequest != "undefined") {
              // IE8 & IE9
              xhr = new XDomainRequest();
              xhr.open(method, url);
              xhr.setRequestHeader("Authorization", 'Basic YXRydW0ubHZfdGVzdDp0dXRLdUwyZjU5NUxUTkti');

            } else {
              // CORS not supported.
              xhr = null;
            }
            return xhr;
          };

          var url = 'http://159.148.101.219:8091/api/564382A4-81E8-4C2B-AE7D-80B88EC2FCB6/register';
          var method = 'POST';

          var xhr = createCORSRequest(method, url);

          xhr.onload = function(response) {
            console.log(response)
            a = JSON.parse(response.currentTarget.response)
            if (a.success) {
              sessionStorage.accessToken = a.accessToken
              console.log(a.accessToken)
             // window.location = 'sakums.php'
            }else{
              console.log(a.errorMessage)
              console.log(document.getElementById('error_mesage'))
              document.getElementById('error_mesage').innerHTML = a.errorMessage
            }
          };

          xhr.onerror = function() {

            //////////////////////////////////////////
            // Error code goes here.
            //////////////////////////////////////////

          };

          xhr.withCredentials = true;
          console.log(customerData)
          xhr.send(JSON.stringify(customerData));

        }

        //////////////////////////////////////////
        // Function for navigation thru steps & saving filled data.
        //////////////////////////////////////////
        var nextStep = function() {
          serializeForm();
          if (currentForm < 3) {
            $("#form-" + currentForm).hide();
            currentForm++
            $("#form-" + currentForm).show();
          } else if (currentForm = 3) {
            // Stop !
            customerData["customerData"] = arrayFormating(allDataForm);
            customerData["customerData"]["declaredResidence"] = arrayFormating(declaredAdress);
            customerData["customerData"]["actualResidence"] = arrayFormating(factAdress);
            var acceptTerm = {};
            acceptTerm['acceptTerms'] = acceptTerms;
            customerData["conditionsData"] = acceptTerm;
            customerData['registrationIP'] = clientIp;
            customerData['customerData']['actualResidenceSameAsDesclared'] = actualResidenceSameAsDesclared;
            if (have_loan) {
              customerData['loanData'] = loanInfo;
            }


            sendToApi();
          }
        }

        var prevStep = function() {
          if (currentForm > 1) {
            $("#form-" + currentForm).hide();
            currentForm--
            $("#form-" + currentForm).show();
          }
        }


        $(document).on('submit', nextStep); $(".izvelne").click(prevStep);

      });
