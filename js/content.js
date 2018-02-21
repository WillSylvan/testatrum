/*COLOR CHANGE*/

function pinkColor(){
    if ($('body').width() >= 900) {
        $("#first-form").css({"background-image":"url(img/form3.png)","z-index":"200"});
        $("#second-form").css({"background-image":"none","z-index":"-1"});
        $("#first-form").animate({"left":"4vw","zoom":"1","width":"120%","height":"105%","z-index":"2"},800);
        $("#second-form").animate({"zoom":"0.9","right":"2.5vw","width":"100%","height":"100%","top":"3vw"},800);
        $("#footer").css("background-image","url(img/pink/footer_background_istermina.jpg)");
        $("#important").css({"width":"60%","margin-left":"0"});
        $("#important2").css("width","50%");
        $("#content-grey").css("display","none");
        $("#content-pink").css("display","block");
        $("#content-violet").css("display","none");
        $("#grafiks").css("bottom","10vw");
    }
}
function violetColor(){
    if ($('body').width() >= 900) {
        $("#first-form").css({"background-image":"none","z-index":"-1"});
        $("#second-form").css({"background-image":"url(img/form4.png)","z-index":"200"});
        $("#first-form").animate({"zoom":"0.9","z-index":"-1","left":"2.5vw","width":"100%","height":"100%"},800);
        $("#second-form").animate({"right":"16vw","zoom":"1","width":"120%","height":"125%","top":"0vw"},800);
        $("#grafiks").css("bottom","12vw");
        $("#footer").css("background-image","url(img/violet/backgound-footer-violet.jpg)");
        $("#content-grey").css("display","none");
        $("#content-pink").css("display","none");
        $("#content-violet").css("display","block");
        $("#important").css({"margin-left":"8vw","width":"70%"});
        $("#important2").css("width","70%");
    }
}

	function ajax_(request,data,callback){
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
            } else {
              // CORS not supported.
              xhr = null;
            }
            return xhr;
          };


          var url = 'http://159.148.101.219:8091/api/564382A4-81E8-4C2B-AE7D-80B88EC2FCB6/'+request;
          //var url = 'http://159.148.101.219:8091/api/564382A4-81E8-4C2B-AE7D-80B88EC2FCB6/register';
          var method = 'POST';


          var xhr = createCORSRequest(method, url);
          xhr.onload = function(response) {

          console.log(response.currentTarget.response)

           callback(JSON.parse(response.currentTarget.response))
          };
          xhr.onerror = function() {
            console.log('error')
          };
          xhr.withCredentials = true;
          xhr.send(JSON.stringify(data));
	}

	function fillForm(){

	}



    function calc_term (type, length){
    var today = new Date()
    var priorDate
    if (type === 'short') {
        priorDate = new Date().setDate(today.getDate()+parseInt(length))
    }
    if (type==='long') {
        priorDate = new Date().setMonth(today.getMonth()+length)
    }
    end_date = new Date(priorDate)
    return ("0"+end_date.getDate()).slice(-2)+'.'+(end_date.getMonth()+1)+'.'+end_date.getFullYear()
}


var repeated_loan = {short:document.getElementById("short_repeated_loan"),long:document.getElementById("long_repeated_loan")}

$(document).ready(function(){
    $('#round-buttons button').click(function(){
        id = $(this).index()
        $('#top-forms .form_').css('display','none')
            $('#top-forms .form_:eq('+id+')').fadeIn(300)
    })

    let short_money_slider = {value:0}
    let short_days_slider = {value:0}

    let long_money_slider = {value:0}
    let long_days_slider = {value:0}

    //constructor(dom,name,min,max,step,brake,output,side,callback,values)

    short_money_slider = new slider('short_range_money',0,50,500,5,300,'short_echo_money_val','right',[50,200,300,400,500],function(response,mu){
        document.getElementById('short_echo_money_val').innerHTML = +response + " EUR"
        if (response>300) {
                repeated_loan.short.style.display = "block"
            }else {
                repeated_loan.short.style.display = "none"
            }

         if (!mu) {
        	ajax_('GetLoanPreview',{"loanData":{"type": "short","principal": response,"term":short_days_slider.value}},function(a){
		    //	console.log(a)
        		document.getElementById('short_summa').innerHTML = short_money_slider.value + " EUR"
        		document.getElementById('short_term_display').innerHTML = a.payments[0].date.split('T')[0]//calc_term('long', response)
        		document.getElementById('short_kopa').innerHTML = a.payments[0].paymentTotal + " EUR"
        		document.getElementById('short_komisija').innerHTML = a.commission + " EUR"

		    })
        }



    })
    short_money_slider.start_val(200)
    console.log(short_money_slider.value)



    short_days_slider = new slider('short_range_days',1,10,30,1,0,'short_term_display','right',[10,15,20,25,30],function(response,mu){
        //document.getElementById('short_term_display').innerHTML = calc_term('short', response)
        document.getElementById('short_echo_days_val').innerHTML = response
        console.log(short_money_slider.value, response)

         if (!mu) {
        	ajax_('GetLoanPreview',{"loanData":{"type": "short","principal": short_money_slider.value,"term": response}},function(a){
		    //	console.log(a)
        		document.getElementById('short_summa').innerHTML = short_money_slider.value + " EUR"
        		document.getElementById('short_term_display').innerHTML = a.payments[0].date.split('T')[0]//calc_term('long', response)
        		document.getElementById('short_kopa').innerHTML = a.payments[0].paymentTotal + " EUR"
        		document.getElementById('short_komisija').innerHTML = a.commission + " EUR"

		    })
        }

    })
    short_days_slider.start_val(15)



    long_money_slider = new slider('long_range_money',2,100,1000,5,300,'long_echo_money_val','right',[100,300,500,750,1000],function(response,mu){
        document.getElementById('long_echo_money_val').innerHTML = +response + " EUR"
        if (response>430) {
            repeated_loan.long.style.display = "block"
        }else {
            repeated_loan.long.style.display = "none"
        }
        console.log(long_money_slider.value,response)
        if (!mu) {
        	ajax_('GetLoanPreview',{"loanData":{"type": "long","principal": response,"term": long_days_slider.value}},function(a){
		    	console.log(a)
        		document.getElementById('long_summa').innerHTML = long_money_slider.value + " EUR"
        		document.getElementById('long_term_display').innerHTML = a.payments[a.payments.length-1].date.split('T')[0]//calc_term('long', response)
        		document.getElementById('long_kopa').innerHTML = function()
        		{let summ = 0 
        			for (var i = 0; i < a.payments.length; i++) {
        				summ += a.payments[i].paymentTotal
        			}
        			return summ.toFixed(2) + " EUR"
        		}()//a.payments[0].paymentTotal + " EUR"
        		document.getElementById('long_komisija').innerHTML = a.commission + " EUR"

		    })
        }

    })
    long_money_slider.start_val(300)




    long_days_slider = new slider('long_range_days',3,3,12,1,0,'long_term_display','right',[3,6,9,12],function(response,mu){
       
        document.getElementById('long_echo_days_val').innerHTML = response
        if (!mu) {
        	ajax_('GetLoanPreview',{"loanData":{"type": "short","principal": long_money_slider.value,"term": response}},function(a){
		    	console.log(a)
        		

		    })
        }
    })

    long_days_slider.start_val(10)
    console.log(long_days_slider)
});


// var sendToApi_loan = function() {
//           var createCORSRequest = function(method, url) {
//             var xhr = new XMLHttpRequest();
//             if ("withCredentials" in xhr) {
//               // Most browsers.
//               xhr.open(method, url, true);
//               xhr.setRequestHeader("Authorization", 'Basic YXRydW0ubHZfdGVzdDp0dXRLdUwyZjU5NUxUTkti');
//             } else if (typeof XDomainRequest != "undefined") {
//               // IE8 & IE9
//               xhr = new XDomainRequest();
//               xhr.open(method, url);
//             } else {
//               // CORS not supported.
//               xhr = null;
//             }
//             return xhr;
//           };
//           var url = 'http://159.148.101.219:8091/api/564382A4-81E8-4C2B-AE7D-80B88EC2FCB6/GetLoanPreview';
//             //var url = 'http://159.148.101.219:8091/api/564382A4-81E8-4C2B-AE7D-80B88EC2FCB6/register';
//           var method = 'POST';
//           var xhr = createCORSRequest(method, url);
//           xhr.onload = function(response) {
//             console.log(response.currentTarget.response)
//           };
//           xhr.onerror = function() {
//             console.log('error')
//           };
//           xhr.withCredentials = true;
//           xhr.send(JSON.stringify({  
//   "loanData":
//   {
//     "type": "long",
//     "principal": 220,
//     "term": 3
//   }
// }));
//        }
       // sendToApi_loan()

    

// {"loanData":{"type": "long","principal": 220,"term": 3}}