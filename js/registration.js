$(function() {
    //step-1
  $(document).on('submit','form#one-form',function(){
      let data = $('#one-form').serializeArray()



      console.log(data);



      // function showValues() {
      //   var fields = $( ":input" ).serializeArray();
      //   $( "#results" ).empty();
      //   jQuery.each( fields, function( i, field ) {
      //   $( "#results" ).append( field.value + " " );
      // });
  // }
    arr.forEach(function(data) {
    console.log(data);
    });
   

    // on succuess
    $('#form-1').hide();
    $('#form-2').show();
  });

  $(document).on('submit','form#two-form',function(){
      let data = $('#two-form').serializeArray()
      console.log(data);
    $('#form-2').hide();
    $('#form-3').show();
  });

  $(document).on('submit','form#three-form',function(){
      let data = $('#three-form').serializeArray()
      console.log(data);
    $('#form-3').hide();
    $('#form-4').show();
  });

  $(document).on('submit','form#four-form',function(){
      let data = $('#four-form').serializeArray()
      console.log(data);
    $('#form-4').hide();
    $('#form-5').show();
  });

  


  



  

});

