//////////////////////////////////////////
// Start executing code, when page loads.
//////////////////////////////////////////

$(document).ready(function() {

  //////////////////////////////////////////
  // Mask for inputs.
  //////////////////////////////////////////

  $('input[name="identityCode"]').mask('000000-00000');
  $('input[name="phone"]').mask('00000000');

  //////////////////////////////////////////
  // Client-side validation.
  //////////////////////////////////////////
  $.validate({
    modules : 'security, toggleDisabled',
  form : '#form-1 , #form-2 , #form-3',
  lang: 'lv , ru'
});

  //////////////////////////////////////////
  // Form navigation & 'POST' to server api.
  //////////////////////////////////////////

  // Creating some variables, such as first form to show, array for fully filled form.
  var currentForm = 3;
  $("#form-" + currentForm).show();
  var allDataForm = [];
  var customerData = {};

  //////////////////////////////////////////
  // Function to push current form data in to global form data array.
  //////////////////////////////////////////

  var serializeForm = function () {
    if (currentForm === 1) {
      var firstForm = $("#one-form").serializeArray();
      allDataForm.push.apply(allDataForm , firstForm);
    } else if ( currentForm === 2) {
      var secondForm = $("#two-form").serializeArray();
    //  var adressString = secondForm.join([seperator = ' ']);
      allDataForm.push.apply(allDataForm , secondForm);
    } else if ( currentForm === 3 ) {
      var thirdForm = $("#three-form").serializeArray();
      allDataForm.push.apply(allDataForm , thirdForm);
    }
  }

  //////////////////////////////////////////
  // Process all form data, to remove ("name" : name, "value" = value) format style.
  //////////////////////////////////////////

  var test = function() {
    var processingArr = allDataForm
   , processedData = {};

 for (var i in processingArr) {
   processedData[processingArr[i].name] = processingArr[i].value;
 }

 customerData["customerData"] = processedData;
  }

  //////////////////////////////////////////
  // Ajax send function.
  //////////////////////////////////////////

  var sendToApi = function () {
    console.log("sending to api");
  var createCORSRequest = function(method, url) {
    var xhr = new XMLHttpRequest();
    if ("withCredentials" in xhr) {
      // Most browsers.
      xhr.open(method, url, true);
    } else if (typeof XDomainRequest != "undefined") {
      // IE8 & IE9
      xhr = new XDomainRequest();
      xhr.open(method, url);
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
    console.log(this.response);
  };

  xhr.onerror = function() {

    //////////////////////////////////////////
    // Error code goes here.
    //////////////////////////////////////////

  };

  xhr.withCredentials = true;
  xhr.send(JSON.stringify(customerData));
  console.log(JSON.stringify(customerData));

  }

  //////////////////////////////////////////
  // Function for navigation thru steps & saving filled data.
  //////////////////////////////////////////

  var nextStep = function() {
    console.log( currentForm)
  serializeForm();
  console.log(allDataForm);

    if (currentForm < 3) {
    $("#form-" + currentForm).hide();
    currentForm++
    $("#form-" + currentForm).show();
  } else if ( currentForm = 3) {
    test();
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

  $(document).on('submit', nextStep);
  $(".izvelne").click(prevStep);

});
