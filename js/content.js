/*COLOR CHANGE*/
                console.log(sessionStorage.short_loan_term)

               


function pinkColor(){
    if ($('body').width() >= 900) {
        $("#first-form").css({"background-image":"url(img/form3.png)","z-index":"200"});
        $("#second-form").css({"background-image":"none","z-index":"-1"});
        $("#first-form").animate({"left":"4vw","zoom":"1","width":"120%","height":"105%","top":"0vw","z-index":"2"},800);
        $("#second-form").animate({"zoom":"0.8","right":"2.5vw","width":"100%","height":"100%","top":"7vw"},800);
        $("#footer").css("background-image","url(img/pink/footer_background_istermina.jpg)");
        $("#important").css({"width":"60%","margin-left":"0"});
       // $("#important2").css("width","50%");
        $("#content-grey").css("display","none");
        $("#content-pink").css("display","block");
        $("#content-violet").css("display","none");
        //$("#grafiks").css("bottom","10vw");
    }
}

function violetColor(){
    if ($('body').width() >= 900) {
        $("#first-form").css({"background-image":"none","z-index":"-1"});
        $("#second-form").css({"background-image":"url(img/form4.png)","z-index":"200"});
        $("#first-form").animate({"zoom":"0.8","z-index":"-1","left":"2.5vw","width":"100%","height":"100%","top":"4.4vw"},800);
        $("#second-form").animate({"right":"16vw","zoom":"1","width":"120%","height":"125%","top":"0vw"},800);
       // $("#grafiks").css("bottom","12vw");
        $("#footer").css("background-image","url(img/violet/backgound-footer-violet.jpg)");
        $("#content-grey").css("display","none");
        $("#content-pink").css("display","none");
        $("#content-violet").css("display","block");
        $("#important").css({"margin-left":"8vw","width":"70%"});
       // $("#important2").css("width","70%");
    }
}



//FORM SETUP
    function save_loan_local(type,principal,term,last_payment, total){
        
        sessionStorage[type+'_loan_principal'] = parseInt(principal)
        sessionStorage[type+'_loan_term'] = parseInt(term)
        sessionStorage[type+'_loan_total'] = parseInt(total)
        sessionStorage[type+'_last_payment'] = parseInt(last_payment)
        //console.log(term,sessionStorage[type+'_loan_term'])
        //console.log(principal,sessionStorage[type+'_loan_principal'])

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
var  short_money_slider = {value:100}
var  short_days_slider = {}
        short_days_slider.value = sessionStorage.short_loan_term!='undefined' && sessionStorage.short_loan_term!=null ? sessionStorage.short_loan_term : 15
var  long_money_slider = {value:200}
var  long_days_slider = {}
    long_days_slider.value = sessionStorage.long_loan_term!='undefined' && sessionStorage.long_loan_term!=null ? sessionStorage.long_loan_term : 4

caulculations = {long:'',short:''}
calc_data_long = sessionStorage.accessToken != null && sessionStorage.accessToken != "undefined" && sessionStorage.accessToken != 0 ?  {'type':'long','accessToken':sessionStorage.accessToken} :{'type':'long'} 
//console.log(calc_data_long)



$(document).ready(function(){
    $('#round-buttons button').click(function(){
        id = $(this).index()
        $('#top-forms .form_').css('display','none')
            $('#top-forms .form_:eq('+id+')').fadeIn(300)
    })

    function dateformat(str){
        var parts = str.split('-');
        // Please pay attention to the month (parts[1]); JavaScript counts months from 0:
        // January - 0, February - 1, etc.
    
        //console.log(mydate.toDateString());
        for (var i = 0; i < parts.length; i++) {
            if (parts[i].length<2) {
                parts[i] = '0' + parts[i]
            }
        }
        return parts[2]+'.'+parts[1]+'.'+parts[0];
    }




        function set_values_short(){ 
            let date
         //   console.log(caulculations.short.shortLoanCalculator.amounts,(short_money_slider.value))
            let credit = caulculations.short.shortLoanCalculator.amounts[(short_money_slider.value-50)/5].term[short_days_slider.value-10]
            let total = credit.commission + parseInt(short_money_slider.value)
            document.getElementById('short_summa').innerHTML = short_money_slider.value + " EUR"
            document.getElementById('short_term_display').innerHTML = date =dateformat( credit.repaymentDate.split('T')[0])
            document.getElementById('short_kopa').innerHTML = total + " EUR"
            document.getElementById('short_komisija').innerHTML = credit.commission + " EUR"
            document.getElementById('extention_pay').innerHTML = parseFloat(credit.extensions[0].amount).toFixed(2)
            save_loan_local('short',short_money_slider.value,short_days_slider.value,date,total)
        }

        function set_values_long(){
            let total 
            let date
            let credit = caulculations.long.longLoanCalculator.amounts[(long_money_slider.value - 100) / 5].term[long_days_slider.value-3]
            //console.log(credit)
            total = (credit.monthlyPayment * long_days_slider.value).toFixed(2) + 'EUR'
            d = new Date(credit.firstPaymentDate.split('T')[0] )
            e = new Date(d.setMonth(d.getMonth()+long_days_slider.value))
            f = []
            f[0] =e.getDate()
            f[1] =e.getMonth()
            f[2] = e.getFullYear()
            document.getElementById('monthly_pay').innerHTML = credit.monthlyPayment
            document.getElementById('long_summa').innerHTML = long_money_slider.value + " EUR"
            document.getElementById('long_term_display').innerHTML = date = dateformat(credit.firstPaymentDate.split('T')[0] )
            document.getElementById('long_kopa').innerHTML = f[0]+'.'+f[1]+'.'+f[2]//total = (credit.monthlyPayment * long_days_slider.value).toFixed(2) + 'EUR'
            save_loan_local('long',long_money_slider.value,long_days_slider.value,date,total)
        }



        function set_up_sliders(){
            //constructor(dom,name,min,max,step,brake,output,side,values,callback)
            
            let short_money_max = caulculations.short.shortLoanCalculator.amounts[caulculations.short.shortLoanCalculator.amounts.length-1].amount
            let long_money_max = caulculations.long.longLoanCalculator.amounts[caulculations.long.longLoanCalculator.amounts.length-1].amount

            if (sessionStorage.short_loan_principal>short_money_max) {
                sessionStorage.short_loan_principal = short_money_max
            }
            if (sessionStorage.long_loan_principal>long_money_max) {
                sessionStorage.long_loan_principal = long_money_max
            }
            
                        
            let long_values = long_money_max<=425?[100,200,300,long_money_max]:[100,300,500,750,1000]

            short_money_slider = new slider('short_range_money',0,50,short_money_max,5,300,'short_echo_money_val','right',[50,200,300,400,500],function(response,mu){

                    document.getElementById('short_echo_money_val').innerHTML = short_money_slider.value + " EUR" 
                    if (response>300) {
                         repeated_loan.short.style.display = "block"
                    }else {
                        repeated_loan.short.style.display = "none"
                    }
        
                    if (!mu) {
                        set_values_short()
                    }
                })

                
                start_short_principal = sessionStorage.short_loan_principal!='undefined' && sessionStorage.short_loan_principal!=null ? sessionStorage.short_loan_principal : 200 
                short_money_slider.start_val(start_short_principal)

             
        
                short_days_slider = new slider('short_range_days',1,10,30,1,0,'short_term_display','right',[10,15,20,25,30],function(response,mu){
                    document.getElementById('short_echo_days_val').innerHTML = short_days_slider.value
                    if (!mu) {
                       set_values_short()
                    }
                })

                //console.log(sessionStorage.short_loan_term)
                start_short_days = sessionStorage.short_loan_term!='undefined' && sessionStorage.short_loan_term!=null ? sessionStorage.short_loan_term : 15 
                //console.log(start_short_days+'<---------------SHORTM DAYS START')
                //console.log(sessionStorage.short_loan_term)
               
                short_days_slider.start_val(start_short_days)
        
        
        
                long_money_slider = new slider('long_range_money',2,100,long_money_max,5,300,'long_echo_money_val','right',long_values,function(response,mu){
                    document.getElementById('long_echo_money_val').innerHTML = long_money_slider.value + " EUR"
                    if (response>=430) {
                        repeated_loan.long.style.display = "block"
                    }else {
                        repeated_loan.long.style.display = "none"
                    }

                    if (!mu) {    
                        set_values_long()                       
                    }
        
                })
                start_long_principal = sessionStorage.long_loan_principal!='undefined' && sessionStorage.long_loan_principal!=null ? sessionStorage.long_loan_principal : 300 
                long_money_slider.start_val(start_long_principal)
        
        
        
        
                long_days_slider = new slider('long_range_days',3,3,12,1,0,'long_term_display','right',[3,6,9,12],function(response,mu){
                    document.getElementById('long_echo_days_val').innerHTML = long_days_slider.value
                    if (!mu) {
                        set_values_long()
                    }
                })

                start_long_days = sessionStorage.long_loan_term!='undefined' && sessionStorage.long_loan_term!=null ? sessionStorage.long_loan_term : 4
                console.log(start_long_days + "start_long_days")
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
        //console.log(a)
          if (data_loaded) {
            set_up_sliders()
        }else{
            data_loaded++           
        }
    })
});



//USER STUFF

if (sessionStorage.accessToken != null && sessionStorage.accessToken != "undefined" && sessionStorage.accessToken != 0) {
   let forms1 =  document.querySelector('#first-form form')
   let forms2 = document.querySelector('#second-form form')
   forms1.action = 'jauns_kredits.php'
   forms2.action = 'jauns_kredits.php'
  // console.log(forms2)
  // console.log(short_money_slider)

}

document.getElementById('submit_long').onclick = function(){
    sessionStorage.request_loan = 'long' 

    document.getElementById('long_form').submit()
}
document.getElementById('submit_short').onclick = function(){
    sessionStorage.request_loan = 'short' 
    document.getElementById('short_form').submit()
}




