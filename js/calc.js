//სიგარეტი
var reg = new RegExp("\\d");
$('.info').tooltip();
$("#step3_1").on('keyup change', function(){
	// var step3_1 = reg.test($("#step3_1").val()) ? parseFloat($("#step3_1").val()) : 0;
	// var testVal;
	// $("#step3_1_2").val($("#step3_1").val(testVal));
	if($("#step3_1_2" ).val()==""){
		$("#step3_1_2" ).val($("#step3_1" ).val()*0.32)
	} else if($("#step3_1" ).val()=="") {
		$("#step3_1_2" ).val("0.32")
	} else {
		var testik = ($("#step3_1").val()*0.32).toFixed(2);
		$("#step3_1_2" ).val(testik);
	}
});
$("#step3_2").on('keyup change', function(){
	if($("#step3_2_2" ).val()==""){
		$("#step3_2_2" ).val($("#step3_2" ).val()*0.15)
	} else if($("#step3_2" ).val()=="") {
		$("#step3_2_2" ).val("0.15")
	} else {
		var testoval = ($("#step3_2").val()*0.15).toFixed(2)
		$("#step3_2_2" ).val(testoval);
	}
});
$("#step4_1").on('keyup change', function(){
	if($("#step4_1_2" ).val()==""){
		$("#step4_1_2" ).val($("#step4_1" ).val()*2.64)
	} else if($("#step4_1" ).val()=="") {
		$("#step4_1_2" ).val("2.64")
	} else {
		var testoval2 = ($("#step4_1").val()*2.64).toFixed(2)
		$("#step4_1_2" ).val(testoval2);
	}
});
$("#step4_3").on('keyup change', function(){
	if($("#step4_3_2" ).val()==""){
		$("#step4_3_2" ).val($("#step4_3" ).val()*15.44)
	} else if($("#step4_3" ).val()=="") {
		$("#step4_3_2" ).val("15.44")
	} else {
		var testoval2 = ($("#step4_3").val()*15.44).toFixed(2)
		$("#step4_3_2" ).val(testoval2);
	}	
});
$("#step4_4").on('keyup change', function(){
	if($("#step4_4_2" ).val()==""){
		$("#step4_4_2" ).val($("#step4_4" ).val()*23.11)
	} else if($("#step4_4" ).val()=="") {
		$("#step4_4_2" ).val("23.11")
	} else {
		var testoval2 = ($("#step4_4").val()*23.11).toFixed(2)
		$("#step4_4_2" ).val(testoval2);
	}
});
$("#step5_1").on('keyup change', function(){
	// if($("#step5_1_2" ).val()==""){
	// 	$("#step5_1_2" ).val("3.99")
	// }
	if($("#step5_1_2" ).val()==""){
		$("#step5_1_2" ).val($("#step5_1" ).val()*3.99)
	} else if($("#step5_1" ).val()=="") {
		$("#step5_1_2" ).val("3.99")
	} else {
		var testoval2 = ($("#step5_1").val()*3.99).toFixed(2)
		$("#step5_1_2" ).val(testoval2);
	}
});
$("#step5_3").on('keyup change', function(){
	// if($("#step5_3_2" ).val()==""){
	// 	$("#step5_3_2" ).val("4.57")
	// }	
	if($("#step5_3_2" ).val()==""){
		$("#step5_3_2" ).val($("#step5_3" ).val()*4.57)
	} else if($("#step5_3" ).val()=="") {
		$("#step5_3_2" ).val("4.57")
	} else {
		var testoval2 = ($("#step5_3").val()*4.57).toFixed(2)
		$("#step5_3_2" ).val(testoval2);
	}
});
$("#step5_5").on('keyup change', function(){
	// if($("#step5_5_2" ).val()==""){
	// 	$("#step5_5_2" ).val("1.69")
	// }	
	if($("#step5_5_2" ).val()==""){
		$("#step5_5_2" ).val($("#step5_5" ).val()*1.69)
	} else if($("#step5_5" ).val()=="") {
		$("#step5_5_2" ).val("1.69")
	} else {
		var testoval2 = ($("#step5_5").val()*1.69).toFixed(2)
		$("#step5_5_2" ).val(testoval2);
	}
});
$(".calc").on('keyup change', function(){


	var $amount = reg.test($("#amount").val()) ? parseFloat($("#amount").val()) : 0;
	var $otherAmount = reg.test($("#otherAmount").val()) ? parseFloat($("#otherAmount").val()) : 0;
	// console.log($otherAmount);
	if($amount>0){
		$('#Net').removeClass("d-none");
	}
	var $income = $amount - ($amount * 0.2);
	var $sumIncome = $income+$otherAmount;
	$( "#income" ).val($income);
	$( "#sumAmount" ).val($sumIncome);
	$( "#income-label" ).text($income);

	var step3_1 = reg.test($("#step3_1").val()) ? parseFloat($("#step3_1").val()) : 0;
	var step3_1_2 = reg.test($("#step3_1_2").val()) ? parseFloat($("#step3_1_2").val()) : 0;
	var step3_2 = reg.test($("#step3_2" ).val()) ? parseFloat($("#step3_2" ).val()) : 0;
	var step3_2_2 = reg.test($("#step3_2_2").val()) ? parseFloat($("#step3_2_2").val()) : 0;
	// var step3 = step3_1*30*0.3;
	// console.log(step3_1_2);
	var step3_1_price;
	var step3_2_price;
	step3_1_2==0 ? step3_1_price=6.43/20 : step3_1_price=step3_1_2;
	step3_2_2==0 ? step3_2_price=0.15 : step3_2_price=step3_2_2;
	var step3 = (step3_1_2*30 + step3_2_2*30).toFixed(2);
	var testVal= step3_1*0.32;
	
	$( "#step3_total" ).val(step3);

	//ალკოჰოლი

	var step4_1 =reg.test($( "#step4_1" ).val()) ? parseFloat($( "#step4_1" ).val()) : 0;
	var step4_1_2 =reg.test($( "#step4_1_2" ).val()) ? parseFloat($( "#step4_1_2" ).val()) : 0;
	var step4_3 =reg.test($( "#step4_3" ).val()) ? parseFloat($( "#step4_3" ).val()) : 0;
	var step4_3_2 =reg.test($( "#step4_3_2" ).val()) ? parseFloat($( "#step4_3_2" ).val()) : 0;
	var step4_4 =reg.test($( "#step4_4" ).val()) ? parseFloat($( "#step4_4" ).val()) : 0;
	var step4_4_2 =reg.test($( "#step4_4_2" ).val()) ? parseFloat($( "#step4_4_2" ).val()) : 0;
	var step4_1_price;
	var step4_3_price;
	var step4_4_price;
	step4_1_2==0 ? step4_1_price=2.64 : step4_1_price=step4_1_2; //step4_1_2
	step4_3_2==0 ? step4_3_price=15.44 : step4_3_price=step4_3_2; //step4_3_2
	step4_4_2==0 ? step4_4_price=23.11 : step4_4_price=step4_4_2; //step4_4_2
	// var step4 = (step4_1/2*5) + (step4_3*0.7*70) + (step4_4*0.7*70);
	var step4 = ((step4_1_2) + (step4_3_2) + (step4_4_2)).toFixed(2);
	$( "#step4_total" ).val(step4);


	//საწვავი

	var step5_1 =reg.test($( "#step5_1" ).val()) ? parseFloat($( "#step5_1" ).val()) : 0;
	var step5_1_2 =reg.test($( "#step5_1_2" ).val()) ? parseFloat($( "#step5_1_2" ).val()) : 0;
	var step5_3 =reg.test($( "#step5_3" ).val()) ? parseFloat($( "#step5_3" ).val()) : 0;
	var step5_3_2 =reg.test($( "#step5_3_2" ).val()) ? parseFloat($( "#step5_3_2" ).val()) : 0;
	var step5_5 =reg.test($( "#step5_5" ).val()) ? parseFloat($( "#step5_5" ).val()) : 0;
	var step5_5_2 =reg.test($( "#step5_5_2" ).val()) ? parseFloat($( "#step5_5_2" ).val()) : 0;
	var step5_1_price;
	var step5_3_price;
	var step5_5_price;
	step5_1_2==0 ? step5_1_price=3.99 : step5_1_price=step5_1_2; //step5_1_2
	step5_3_2==0 ? step5_3_price=4.57 : step5_3_price=step5_3_2; //step5_3_2
	step5_5_2==0 ? step5_5_price=1.69 : step5_5_price=step5_5_2; //step5_5_2
	// var step5= (step5_1*3) + (step5_3*2.8) + (step5_5*2.2);
	var step5= ((step5_1_2) + (step5_3_2) + (step5_5_2)).toFixed(2);
	$( "#step5_total" ).val(step5);


	
});

$("input").on('keyup change', function(){

	//დანაზოგი	

	var step1 = parseFloat($( "#income" ).val());
	var step3_t = reg.test($( "#step3_total" ).val() ) ? parseFloat($( "#step3_total" ).val()) : 0;
	var step4_t = reg.test($( "#step4_total" ).val() ) ? parseFloat($( "#step4_total" ).val()) : 0;
	var step5_t = reg.test($( "#step5_total" ).val() ) ? parseFloat($( "#step5_total" ).val()) : 0;
	var stepOther = reg.test($( "#otherAmount" ).val() ) ? parseFloat($( "#otherAmount" ).val()) : 0;
	var step6_1 = reg.test($( "#step6_1" ).val() ) ? parseFloat($( "#step6_1" ).val()) : 0;
	var step6 = step1+stepOther-(step3_t+step4_t+step5_t+step6_1);

	$( "#step6_2" ).val((step6).toFixed(2));
	$( "#step6_3" ).val((step6*0.18/1.18*0.8).toFixed(2));

	if(step6_1<0) $("#err1").show();
	else $("#err1").hide();

	if(step6<0) $("#err2").show();
	else $("#err2").hide();

});