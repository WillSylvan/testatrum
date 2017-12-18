var checkk = function(){}

$(function() {
    //step-1

  checkk=function(){
    // alert(1231212)
    let couner =0
    let approved = [false, false, false, false, false, false, false, false ]
    
    let data = $('#one-form').serializeArray()
    // console.log(data);

    data.forEach(function(element){
      // console.log(element);

      if(element.value==''){
        approved[couner]=false
      }else{
        approved[couner]=true
      }

      couner++
      
    });

    console.log(approved) 
    // var value = ""
      $(document).ready(function(){
        $('.input').blur(function(){
            // var value = $(this).value
            // var value = $("#name").val();
            console.log(value)

          if (value.length < 3) {

            alert(false)
            return false; // keep form from submitting
          }else{

            alert(true)
            return true
          }
        });
      });
  }

  



  $(document).on('submit','form#one-form',function(){

    // on succuess
    $('#form-1').hide();
    $('#form-2').show();
  });

  // ---------

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

