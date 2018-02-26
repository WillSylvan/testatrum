/*
////
 FORM CONTROLS
////
*/

var slider_money = {short:document.getElementById("short_range_money"),long:document.getElementById("long_range_money")};
var output_money = {short:document.getElementById("short_echo_money_val"),long:document.getElementById("long_echo_money_val")};
var div_summa = {short:document.getElementById("short_summa"),long:document.getElementById("long_summa")};
var div_kopa = {short:document.getElementById('short_kopa'),long:document.getElementById('long_kopa')};
var slider_days = {short:document.getElementById("short_range_days"),long:document.getElementById("long_range_days")};
var output_days = {short:document.getElementById("short_echo_days_val"),long:document.getElementById("long_echo_days_val")};
var repeated_loan = {short:document.getElementById("short_repeated_loan"),long:document.getElementById("long_repeated_loan")}
var term_display = {short:document.getElementById("short_term_display"),long:document.getElementById('long_term_display')}


output_money.short.innerHTML = slider_money.short.value+'EUR';
output_days.short.innerHTML = slider_days.short.value;

output_money.long.innerHTML = slider_money.long.value+'EUR';
output_days.long.innerHTML = slider_days.long.value;


precent = 1;
days = 30;
gpl = 15





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





slider_money.short.oninput = function() {
	if (this.value>300) {
		repeated_loan.short.style.display = "block"
	}else {
		repeated_loan.short.style.display = "none"
	}
	output_money.short.innerHTML = this.value+'EUR';
	div_summa.short.innerHTML = this.value+'EUR';
	summa = parseInt(this.value);
	let kopa_raw =  summa;

	for(i=0;days>i;i++){
		kopa_raw+=(summa / 100) * precent
	}
	let kopa = kopa_raw.toFixed(2)
	div_kopa.short.innerHTML = kopa+'EUR'
}
slider_days.short.oninput = function() {

	output_days.short.innerHTML = this.value;
	term_display.short.innerHTML = calc_term('short',this.value)


}

slider_money.long.oninput = function() {
	if (this.value>430) {
		repeated_loan.long.style.display = "block"
	}else {
		repeated_loan.long.style.display = "none"
	}
	output_money.long.innerHTML = this.value+'EUR';
	div_summa.long.innerHTML = this.value+'EUR';
	summa = parseInt(this.value);
	let kopa_raw =  summa;

	for(i=0;days>i;i++){
		kopa_raw+=(summa / 100) * precent
	}
	let kopa = kopa_raw.toFixed(2)
	div_kopa.long.innerHTML = kopa+'EUR'
}

slider_days.long.oninput = function() {
	output_days.long.innerHTML = this.value;
}




function openCity(evt, cityName) {
	var i, tabcontent, tablinks;
	var cityN;
	tabcontent = document.getElementsByClassName("tabcontent");
	for (i = 0; i < tabcontent.length; i++) {
		tabcontent[i].style.display = "none";
	}
	tablinks = document.getElementsByClassName("tablinks");
	for (i = 0; i < tablinks.length; i++) {
		tablinks[i].className = tablinks[i].className.replace(" active", "");
	}
	cityN = document.getElementsByClassName(cityName);
	for (i = 0; i < cityN.length; i++) {
		cityN[i].style.display = "block";
	}
	/*document.getElementsByClassName(cityName).style.display = "block";*/
	evt.currentTarget.className += " active";
}


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
	acc[i].onclick = function() {
		this.classList.toggle("active");
		var panel = this.nextElementSibling;
		if (panel.style.maxHeight){
		panel.style.maxHeight = null;
		} else {
		panel.style.maxHeight = panel.scrollHeight + "px";
		}
	}
}

function creditInfo(num) {
  if ( num === 1) {
    var loanType = 'short',
        loanPrincipal = $('input[name="stickmarks"]').val(),
        loanTerms = $('input[name="sloanTerms"]').val();
    localStorage.setItem("loanType", loanType)
    localStorage.setItem("loanPrincipal", loanPrincipal)
    localStorage.setItem("loanTerms", loanTerms)
  } else if( num === 2) {
    var loanType = 'long',
        loanPrincipal = $('input[name="btickmarks"]').val(),
        loanTerms = $('input[name="bloanTerms"]').val();
    localStorage.setItem("loanType", loanType)
    localStorage.setItem("loanPrincipal", loanPrincipal)
    localStorage.setItem("loanTerms", loanTerms)
  }
};

	alert(short_money_slider)