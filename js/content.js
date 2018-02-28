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



//FORM SETUP
    function save_loan_local(type,principal,term,last_payment, total){
        
        sessionStorage[type+'_loan_principal'] = principal
        sessionStorage[type+'_loan_term'] = term
        sessionStorage[type+'_loan_total'] = total
        sessionStorage[type+'_last_payment'] = last_payment

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
var  short_money_slider = {value:0}
var  short_days_slider = {value:10}
var  long_money_slider = {value:0}
var  long_days_slider = {value:3}

caulculations = {long:'',short:''}
calc_data_long = sessionStorage.accessToken != null && sessionStorage.accessToken != "undefined" && sessionStorage.accessToken != 0 ?  {'type':'long','accessToken':sessionStorage.accessToken} :{'type':'long'} 
console.log(calc_data_long)



$(document).ready(function(){
    $('#round-buttons button').click(function(){
        id = $(this).index()
        $('#top-forms .form_').css('display','none')
            $('#top-forms .form_:eq('+id+')').fadeIn(300)
    })




    //constructor(dom,name,min,max,step,brake,output,side,values,callback)

        function set_up_sliders(){
            short_money_slider = new slider('short_range_money',0,50,500,5,300,'short_echo_money_val','right',[50,200,300,400,500],function(response,mu){
                    //console.log(response/5)
                    document.getElementById('short_echo_money_val').innerHTML = caulculations.short.shortLoanCalculator.amounts[(response-50)/5].amount + " EUR"
                    if (response>300) {
                            repeated_loan.short.style.display = "block"
                        }else {
                            repeated_loan.short.style.display = "none"
                        }
        
                     if (!mu) {
                            let total
                            let date
                            console.log(short_days_slider.value)
                            //console.log(a)
                            document.getElementById('short_summa').innerHTML = short_money_slider.value + " EUR"
                            document.getElementById('short_term_display').innerHTML =  date = caulculations.short.shortLoanCalculator.amounts[(response-50)/5].term[short_days_slider.value-10].repaymentDate.split('T')[0]//caulculations.shortLoanCalculator.amounts[].amount //a.payments[0].date.split('T')[0]//calc_term('long', response)
                            document.getElementById('short_kopa').innerHTML = caulculations.short.shortLoanCalculator.amounts[(response-50)/5].term[short_days_slider.value-10].commission + caulculations.short.shortLoanCalculator.amounts[(response-50)/5].amount + " EUR"//a.commission + " EUR"
                            document.getElementById('short_komisija').innerHTML = caulculations.short.shortLoanCalculator.amounts[(response-50)/5].term[short_days_slider.value-10].commission + " EUR"
        
                            save_loan_local('short',short_money_slider.value,short_days_slider.value,date,total)
                        //ajax_('GetLoanPreview',{"loanData":{"type": "short","principal": response,"term":short_days_slider.value}},function(a){
        
                       // })
                    }
        
        
        
                })
                start_short_principal = sessionStorage.short_loan_principal!='undefined' && sessionStorage.short_loan_principal!=null ? sessionStorage.short_loan_principal : 200 
                short_money_slider.start_val(start_short_principal)
               // console.log(short_money_slider.value)
        
        
        
                short_days_slider = new slider('short_range_days',1,10,30,1,0,'short_term_display','right',[10,15,20,25,30],function(response,mu){
                    //document.getElementById('short_term_display').innerHTML = calc_term('short', response)
                    document.getElementById('short_echo_days_val').innerHTML = response
                    //console.log(short_money_slider.value, response)
        
                     if (!mu) {
                        let total
                          //  console.log(caulculations.short.shortLoanCalculator.amounts[(short_money_slider.value-50)/5].term,response-10)
                            document.getElementById('short_summa').innerHTML = short_money_slider.value + " EUR"
                            document.getElementById('short_term_display').innerHTML = caulculations.short.shortLoanCalculator.amounts[(short_money_slider.value-50)/5].term[response-10].repaymentDate.split('T')[0] //a.payments[0].date.split('T')[0]//calc_term('long', response)
                            document.getElementById('short_kopa').innerHTML = caulculations.short.shortLoanCalculator.amounts[(short_money_slider.value-50)/5].term[response-10].commission + caulculations.short.shortLoanCalculator.amounts[(short_money_slider.value-50)/5].amount + " EUR" //a.payments[0].paymentTotal + " EUR"
                            document.getElementById('short_komisija').innerHTML = total = caulculations.short.shortLoanCalculator.amounts[(short_money_slider.value-50)/5].term[response-10].commission + " EUR" //a.commission + " EUR"
        
                            save_loan_local('short',short_money_slider.value,short_days_slider.value,caulculations.short.shortLoanCalculator.amounts[(short_money_slider.value-50)/5].term[response-10].repaymentDate.split('T')[0] ,total)
        
        
                        // ajax_('GetLoanPreview',{"loanData":{"type": "short","principal": short_money_slider.value,"term": response}},function(a){
                        // })
                    }
        
                })
                start_short_days = sessionStorage.short_loan_term!='undefined' && sessionStorage.short_loan_term!=null ? sessionStorage.short_loan_term : 15 
        
                short_days_slider.start_val(start_short_days)
        
        
        
                long_money_slider = new slider('long_range_money',2,100,1000,5,300,'long_echo_money_val','right',[100,300,500,750,1000],function(response,mu){
                    document.getElementById('long_echo_money_val').innerHTML = +response + " EUR"
                    if (response>430) {
                        repeated_loan.long.style.display = "block"
                    }else {
                        repeated_loan.long.style.display = "none"
                    }
                   // console.log(long_money_slider.value,response)
                            //console.log(response,long_days_slider.value)
                    if (!mu) {
                          
                            let total 
                            document.getElementById('long_summa').innerHTML = long_money_slider.value + " EUR"
                            console.log(caulculations.long.longLoanCalculator.amounts[(long_money_slider.value - 100) / 5], (long_money_slider.value - 100) / 5, long_days_slider.value)
                            document.getElementById('long_term_display').innerHTML = caulculations.long.longLoanCalculator.amounts[(long_money_slider.value - 100) / 5].term[long_days_slider.value-3].firstPaymentDate.split('T')[0] //a.payments[a.payments.length-1].date.split('T')[0]//calc_term('long', response)
                            document.getElementById('long_kopa').innerHTML = total = (caulculations.long.longLoanCalculator.amounts[(long_money_slider.value - 100) / 5].term[long_days_slider.value-3].monthlyPayment * long_days_slider.value).toFixed(2) + 'EUR'
 //function()
                            // {let summ = 0 
                            //     for (var i = 0; i < a.payments.length; i++) {
                            //         summ += a.payments[i].paymentTotal
                            //     }
                            //     return summ.toFixed(2) + " EUR"
                            // }()//a.payments[0].paymentTotal + " EUR"
        
                            document.getElementById('long_komisija').innerHTML = 0//a.commission + " EUR"
                            //sessionStorage.payment_schedule = JSON.stringify(a.payments)
                            save_loan_local('long',long_money_slider.value,long_days_slider.value,caulculations.long.longLoanCalculator.amounts[(long_money_slider.value - 100) / 5].term[long_days_slider.value-3].firstPaymentDate.split('T')[0],total)
        
        
                        // ajax_('GetLoanPreview',{"loanData":{"type": "long","principal": response,"term": long_days_slider.value}},function(a){
                        // })
                    }
        
                })
                start_long_principal = sessionStorage.long_loan_principal!='undefined' && sessionStorage.long_loan_principal!=null ? sessionStorage.long_loan_principal : 300 
                long_money_slider.start_val(start_long_principal)
        
        
        
        
                long_days_slider = new slider('long_range_days',3,3,12,1,0,'long_term_display','right',[3,6,9,12],function(response,mu){
                   
                    document.getElementById('long_echo_days_val').innerHTML = response
                    if (!mu) {
                             console.log(long_days_slider.value-3)
                            let total
                            document.getElementById('long_summa').innerHTML = long_money_slider.value + " EUR"
                            document.getElementById('long_term_display').innerHTML =  caulculations.long.longLoanCalculator.amounts[(long_money_slider.value - 100) / 5].term[long_days_slider.value-3].firstPaymentDate.split('T')[0] //a.payments[a.payments.length-1].date.split('T')[0]//calc_term('long', response)
                            
                            document.getElementById('long_kopa').innerHTML = total = (caulculations.long.longLoanCalculator.amounts[(long_money_slider.value - 100) / 5].term[long_days_slider.value-3].monthlyPayment * long_days_slider.value).toFixed(2) + 'EUR' 
                            //function()
                            // {let summ = 0 
                            //     for (var i = 0; i < a.payments.length; i++) {
                            //         summ += a.payments[i].paymentTotal
                            //     }
                            //     return summ.toFixed(2) + " EUR"
                            // }()//a.payments[0].paymentTotal + " EUR"
        
                            document.getElementById('long_komisija').innerHTML = 0//a.commission + " EUR"
                            //sessionStorage.payment_schedule = JSON.stringify(a.payments)
                            save_loan_local('long',long_money_slider.value,long_days_slider.value,caulculations.long.longLoanCalculator.amounts[(long_money_slider.value - 100) / 5].term[long_days_slider.value-3].firstPaymentDate.split('T')[0],total)
        
                        // ajax_('GetLoanPreview',{"loanData":{"type": "long","principal": long_money_slider.value,"term": response}},function(a){
                        // })
                    }
                })
                start_long_days = sessionStorage.long_loan_term!='undefined' && sessionStorage.long_loan_term!=null ? sessionStorage.long_loan_term : 4
                long_days_slider.start_val(start_long_days)
            }
    data_loaded = 0
    ajax_('GetCalculatorInformation',calc_data_long,function(a){
        caulculations.long = a
        sessionStorage.caulculations_long = JSON.stringify(a)

        console.log(a)
        if (data_loaded) {
            set_up_sliders()
        }else{
            data_loaded++
        }
    })
    calc_data_short = sessionStorage.accessToken != null && sessionStorage.accessToken != "undefined" && sessionStorage.accessToken != 0 ?  {'type':'short','accessToken':sessionStorage.accessToken} :{'type':'short'} 

    ajax_('GetCalculatorInformation',calc_data_short,function(a){
        caulculations.short = a
        sessionStorage.caulculations_short = JSON.stringify(a)
        console.log(a)
          if (data_loaded) {
            set_up_sliders()
        }else{
            data_loaded++
        }
    })
   // console.log(long_days_slider)
});



//USER STUFF

if (sessionStorage.accessToken != null && sessionStorage.accessToken != "undefined" && sessionStorage.accessToken != 0) {
   let forms1 =  document.querySelector('#first-form form')
   let forms2 = document.querySelector('#second-form form')
   forms1.action = 'jauns_kredits.php'
   forms2.action = 'jauns_kredits.php'
   console.log(forms2)
   console.log(short_money_slider)

}

document.getElementById('submit_long').onclick = function(){
    sessionStorage.request_loan = 'long' 

    document.getElementById('long_form').submit()
}
document.getElementById('submit_short').onclick = function(){
    sessionStorage.request_loan = 'short' 
    document.getElementById('short_form').submit()

}



