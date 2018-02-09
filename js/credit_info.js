$(function(){
	let loanType = localStorage.getItem("loanType")
    let loanPrincipal = localStorage.getItem("loanPrincipal")
    let loanTerms = localStorage.getItem("loanTerms")
    commission = 0
    registrationFee = 0
    console.log(loanType, loanPrincipal, loanTerms)

    $('.kredits-table .amount').text(loanPrincipal+" EUR")
    var today = new Date()
	var priorDate = new Date().setDate(today.getDate()+30)
	var d = new Date(priorDate)
	console.log(today,d)
	$("#kredits-forma-profils .pay_till").text(d.getDate()+"/"+d.getMonth()+"/"+d.getFullYear())

	let total = Math.pow((((loanPrincipal + commission + registrationFee) / loanPrincipal, 365 / loanTerms) - 1) * 100).toFixed(2)
	console.log(total)
	})