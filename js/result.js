// JavaScript Document
function createItem(){
	var step1 = parseFloat($( "#income" ).val());
	var step3_t = reg.test($( "#step3_total" ).val() ) ? parseFloat($( "#step3_total" ).val()) : 0;
	var step4_t = reg.test($( "#step4_total" ).val() ) ? parseFloat($( "#step4_total" ).val()) : 0;
	var step5_t = reg.test($( "#step5_total" ).val() ) ? parseFloat($( "#step5_total" ).val()) : 0;
	var stepOther = reg.test($( "#otherAmount" ).val() ) ? parseFloat($( "#otherAmount" ).val()) : 0;
	var step6_1 = reg.test($( "#step6_1" ).val() ) ? parseFloat($( "#step6_1" ).val()) : 0;
	var step6 = step1+stepOther-(step3_t+step4_t+step5_t+step6_1);

	if(step6<0) {
		$("#err2").show();
		alert("დაანგარიშება ვერ მოხერხდება ვინაიდან ხარჯები აჭარბებს შემოსავალს");
		return false;
	}
	else {
		$("#err2").hide();
	


	//გადასახადი აქციზზე
	var test1 = parseFloat($( "#step3_1" ).val()*30*0.085*12);
	var test2 = parseFloat($( "#step3_1_2" ).val()*30*0.06*12);
	var cigaretteExcise = test2;
	console.log("test1");
	console.log(test2);
	console.log(cigaretteExcise);
	
	var beerExcise = parseFloat($( "#step4_1" ).val()/2*0.6*12);
	var vodkaExcise = parseFloat($( "#step4_3" ).val()*3*12);
	var brandyExcise = parseFloat($( "#step4_4" ).val()*3*12);
	
	// var alcoholExcise = parseFloat($( "#step4_4" ).val()*0.7*6*12);
	var alcoholExcise = vodkaExcise+brandyExcise;
	console.log(alcoholExcise);

	
	var petrolExcise = parseFloat($( "#step5_1" ).val()*0.5*12);
	
	var dieselExcise = parseFloat($( "#step5_3" ).val()*0.4*12);
	
	var gbaExcise = parseFloat($( "#step5_5" ).val()*0.2*12);
	
	
	//გადასახადი იმპორტზე
	var cigaretteImport = parseFloat(((0.3/1.18 - 0.085)/1.12)*0.12*parseFloat($( "#step3_1" ).val())*30*12);
	
	var beerImport = parseFloat(((5/1.18 - 0.6)/1.12)*0.12*parseFloat($( "#step4_1" ).val())/2*12);
	
	var alcoholImport = parseFloat(0.5*4.4*0.4*parseFloat($( "#step4_4" ).val())*0.75*12);
	
	
	//გადასახადი დღგ-ზე
	var cigaretteVat = parseFloat($( "#step3_total" ).val()/6.5555*12);
	
	var alcoholVat = parseFloat($( "#step4_total" ).val()/6.5555*12);
	
	var fuelVat = parseFloat($( "#step5_total" ).val()/6.5555*12);
	var revVat = parseFloat(($( "#amount" ).val()-$( "#income" ).val())*12);
	// console.log(revVat);
	
	//შენატანი ბიუჯეტში (₾)
	var budgetContribution = parseFloat(cigaretteExcise)
	+ parseFloat(beerExcise)
	+ parseFloat(alcoholExcise)
	+ parseFloat(petrolExcise)
	+ parseFloat(dieselExcise)
	+ parseFloat(gbaExcise)
	//+ parseFloat(cigaretteImport)
	//+ parseFloat(beerImport)
	//+ parseFloat(alcoholImport)
	+ parseFloat(cigaretteVat)
	+ parseFloat(alcoholVat)
	+ parseFloat(fuelVat)
	+ parseFloat(revVat)
	+ parseFloat($( "#step6_3" ).val());
	// + parseFloat($( "#income" ).val())*0.25;
	
	budgetContribution*12;
	// x.total =  json fail from js

	var publicService = budgetContribution*x.publicService/x.total;
	var defense = budgetContribution*x.defense/x.total;
	var security = budgetContribution*x.security/x.total;
	var economicActivity = budgetContribution*x.economicActivity/x.total;
	var environmentalProtection = budgetContribution*x.environmentalProtection/x.total;
	var communalServices = budgetContribution*x.communalServices/x.total;
	var healthCare = budgetContribution*x.healthCare/x.total;
	var culture = budgetContribution*x.culture/x.total;
	var education = budgetContribution*x.education/x.total;
	var socialProtection = budgetContribution*x.socialProtection/x.total;
	
	var taxTotalIncome = (budgetContribution / parseFloat($( "#amount" ).val()*12))*100;
	var taxNetIncome = (budgetContribution / parseFloat($( "#income" ).val()*12))*100;
	// var taxNetIncome = (budgetContribution / (parseFloat($( "#step3_total" ).val())+ parseFloat($( "#step4_total" ).val())+ parseFloat($( "#step5_total" ).val())+ parseFloat($( "#step6_2" ).val())))*100;
	
	sessionStorage["data"] = JSON.stringify({
		"cigaretteExcise" : cigaretteExcise.toFixed(2),
		"beerExcise" : beerExcise.toFixed(2),
		"alcoholExcise" : alcoholExcise.toFixed(2),
		"petrolExcise" : petrolExcise.toFixed(2),
		"dieselExcise" : dieselExcise.toFixed(2),
		"gbaExcise" : gbaExcise.toFixed(2),
		"cigaretteImport" : cigaretteImport.toFixed(2),
		"beerImport" : beerImport.toFixed(2),
		"alcoholImport" : alcoholImport.toFixed(2),
		"cigaretteVat" : cigaretteVat.toFixed(2),
		"alcoholVat" : alcoholVat.toFixed(2),
		"fuelVat" : fuelVat.toFixed(2),
		"revVat" : revVat.toFixed(2),
		"budgetContribution" : budgetContribution.toFixed(2),		
		
		"publicService" : publicService.toFixed(2),
		"defense" : defense.toFixed(2),
		"security" : security.toFixed(2),
		"economicActivity" : economicActivity.toFixed(2),
		"environmentalProtection" : environmentalProtection.toFixed(2),
		"communalServices" : communalServices.toFixed(2),
		"healthCare" : healthCare.toFixed(2),
		"culture" : culture.toFixed(2),
		"education" : education.toFixed(2),
		"socialProtection" : socialProtection.toFixed(2),
		
		"taxTotalIncome" : taxTotalIncome.toFixed(2)+'%',
		"taxNetIncome" : taxNetIncome.toFixed(2)+'%',
	});
	
	var href = window.location.href;
	if (href.indexOf("index") > -1) {
		href += "&action=result";
	}
	else {
		href +=("index.php?action=result");
	}
	
	window.location = href;

	}
}