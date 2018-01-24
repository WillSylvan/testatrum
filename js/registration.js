//////////////////////////////////////////
// Start executing code, when page loads.
//////////////////////////////////////////

$(document).ready(function() {

  //////////////////////////////////////////
  // Mask for inputs.
  //////////////////////////////////////////

  $('input[name="p_code"]').mask('000000-00000');
  $('input[name="phone"]').mask('00000000');

  //////////////////////////////////////////
  // Translation. (Going to be as separate files lv and ru)
  //////////////////////////////////////////

  var mylanguage = {
          errorTitle: 'Form submission failed!',
          requiredFields: 'You have not answered all required fields',
          badEmail: 'You have not given a correct e-mail address',
          badTelephone: 'You have not given a correct phone number',
          badSecurityAnswer: 'You have not given a correct answer to the security question',
          lengthBadStart: 'The input value must be between ',
          lengthBadEnd: ' characters',
          lengthTooLongStart: 'The input value is longer than ',
          lengthTooShortStart: 'The input value is shorter than ',
          notConfirmed: 'Input values could not be confirmed',
          badCustomVal: 'The input value is incorrect',
          andSpaces: ' and spaces ',
          badInt: 'The input value was not a correct number',
          badStrength: 'The password isn\'t strong enough',
          min : 'min',
          max : 'max'
      };
  //////////////////////////////////////////
  // Form navigation & validation.
  //////////////////////////////////////////
  $.validate({
    modules : 'security, toggleDisabled',
  form : '#form-1 , #form-2 , #form-3',
  lang: 'mylanguage'
});

$('input')
  .on('beforeValidation', function(value, lang, config) {
    console.log('Input "'+this.name+'" is about to become validated');
    // Call $(this).attr('data-validation-skipped', 1); to prevent validation
  });
  var currentForm = '1';
  $("#form-" + currentForm).show();

  var nextStep = function() {
    if (currentForm < 3) {
    $("#form-" + currentForm).hide();
    currentForm++
    $("#form-" + currentForm).show();
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
