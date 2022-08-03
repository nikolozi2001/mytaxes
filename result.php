<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.fontStyle, .fontStyle h6, .sumStyle b {
  font-size:1vw;
  color:#336493;
  font-weight:1000;
}
.roomStack{
  display:flex;
  align-items:center;
}
.roomStack h6{
  width: 30%;
  font-size: 0.8vw;
  color:#336493;
  font-weight:1000;
}
.roomStack-sum h6 {
  color:#A3344A!important;
}
.rightTable .roomStack h6 {  
  margin-left: 70px;
}
.roomStack .progressBar{
  width:70%; display:flex;
}
.roomStack img{
  position:absolute;height:55px;
}
.roomStack .w3-light-grey{
  width: 505px; height:45px; border-radius:40px;margin-top:5px; background-color: #d0e0ea!important; overflow: hidden;
}
.roomStack .text-rightBar{
  position:absolute;;
  color:#336493;
  font-weight:1000;
  width: 85%;
}.roomStack .text-rightBar2{
  position:absolute;
  color:#336493;
  font-weight:1000;
  width: 80%;
}
.w3-container{
  width:15%;height:45px;border-radius:40px; background-color:#2480a3!important;
}
.w3-container-sum{
  width:15%;height:45px;border-radius:40px; background-color:#A3344A!important;
}
th h5{
  color:#336493;
  font-weight:1000;
  font-size: 1.4vw;
}
.headerTitle {
  font-size: 1.2vw;
}

.rowCustom {
  margin-top:80px;
  background-color:#aac5e2;
}
table.table th, table.table td {
    padding-top: 0.3rem!important;
    padding-bottom: 0.3rem!important;
}
.sumStyle {
  color:#336493;
  font-weight:1000!important;
  font-size: 16px;
}
.sumCalc div, th{
  color: #336493;
}
.sumCalc {
  background-color:#d0e0ea;
}
#revVat, #sumExciseSum, #sumVatSum {
  color: white;
}
</style>

<div class="row rowCustom" id="testok">
  <div class="col-md-4 offset-md-1 ">
    <table class="table " style="border:0px;border-radius:8px; background-color:#aac5e2;margin-top:30px">
      <thead>
        <tr>
          <th scope="col" class="text-left headerTitle"><h5><?php echo $lang['resultTitle']; ?></h5></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['cigaretteExciseTax']; ?></h6>
          <div class="progressBar">
            <img src="icons/cig.svg" >
            <div class="w3-light-grey">
            <div id="cigtaxP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="cigaretteExcise" class=" text-right " ></div>
            </div>            
          </div>
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['beerExciseTax']; ?></h6>
          <div class="progressBar">
            <img src="icons/beer.svg" >
            <div class="w3-light-grey">
            <div  id="beertaxP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="beerExcise" class=" text-right"></div>
            </div>            
          </div>
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['alcExciseTax']; ?></h6>
          <div class="progressBar">
            <img src="icons/bottle.svg" >
            <div class="w3-light-grey" >
            <div id="alctaxP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="alcoholExcise" class="text-right"></div></div>
            </div>          
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['gasolineExciseTax']; ?></h6>
          <div class="progressBar">
            <img src="icons/gasoline.svg" >
            <div class="w3-light-grey" >
            <div id="gasolinetaxP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="petrolExcise" class="text-right"></div></div>
            </div>          
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['dieselExciseTax']; ?></h6>
          <div class="progressBar">
            <img src="icons/station.svg" >
            <div class="w3-light-grey" >
            <div id="dieseltaxP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="dieselExcise" class="text-right"></div></div>
            </div>          
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['gbaExciseTax']; ?></h6>
          <div class="progressBar">
            <img src="icons/tank.svg" >
            <div class="w3-light-grey" >
            <div id="gbataxP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="gbaExcise" class="text-right"></div></div>
            </div>          
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack roomStack-sum"><h6><?php echo $lang['gbaExciseTaxSum']; ?></h6>
          <div class="progressBar">
            <img src="icons/empty-red.svg" >
            <div class="w3-light-grey" >
            <div id="sumExcise" class="w3-container-sum w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="sumExciseSum" class="text-right">123</div></div>
            </div>          
          </th>
        </tr>
        <!-- <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['cigaretteImport']; ?></h6>
          <div class="progressBar">
            <img src="pic/testicon.png" >
            <div class="w3-light-grey" id="cigimportP">
            <div class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
          <div id="cigaretteImport"></div></div>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['beerImport']; ?></h6>
          <div class="progressBar">
            <img src="pic/testicon.png" >
            <div class="w3-light-grey" id="beerimportP">
            <div class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
          <div id="beerImport"></div></div>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['alcImport']; ?></h6>
          <div class="progressBar">
            <img src="pic/testicon.png" >
            <div class="w3-light-grey" id="alcimportP">
            <div class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
          <div id="alcoholImport"></div></div>
        </tr> -->
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['citaretVat']; ?></h6>
          <div class="progressBar">
            <img src="icons/cig.svg" >
            <div class="w3-light-grey">
            <div  id="citareP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="cigaretteVat" class="text-right"></div></div>
            </div>          
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['aclVat']; ?></h6>
          <div class="progressBar">
            <img src="icons/bottle.svg" >
            <div class="w3-light-grey">
            <div  id="alcoP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="alcoholVat" class="text-right"></div></div>
            </div>          
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['fuelVat']; ?></h6>
          <div class="progressBar">
            <img src="icons/fuel.svg" >
            <div class="w3-light-grey" >
            <div id="fuelP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="fuelVat" class="text-right"></div></div>
            </div>          
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack roomStack-sum"><h6><?php echo $lang['vatSum']; ?></h6>
          <div class="progressBar">
            <img src="icons/empty-red.svg" >
            <div class="w3-light-grey" >
            <div id="sumVat" class="w3-container-sum w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="sumVatSum" class="text-right"></div></div>
            </div>          
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['revVat']; ?></h6>
          <div class="progressBar">
            <img src="icons/empty.svg" >
            <div class="w3-light-grey">
            <div  id="revP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar">
              <div id="revVat" class="text-right"></div></div>
            </div>          
          </th>
        </tr>
        <tr >
          <th scope="row" class=" sumStyle">
            <b><?php echo $lang['contribution1']; ?></b>
            <span id="budgetContribution" class="text-right sumStyle float-right mr-4"></span>          
          </th>
        </tr>
        <tr>          
          <th scope="col" class=" sumStyle">
            <b><?php echo $lang['result1']; ?></b>
            <span id="taxTotalIncome" class="text-right sumStyle float-right mr-4"></span>
          </th>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="col-md-6 offset-md-1 rightTable" style="background-color:#c3daf1;">
    <table class="table "style="border-radius:8px; background-color:#c3daf1;margin-top:30px"> <!--table-sm w-50 ml-5 -->
      <thead>
        <tr>
          <th scope="col" class="text-center headerTitle"><h5><?php echo $lang['contribution2']; ?></h5></th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['publicService']; ?></h6>
          <div class="progressBar">
            <img src="icons/gov.svg" >
            <div class="w3-light-grey">
            <div  id="publicP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar2">
              <div id="publicService" class="text-right"></div></div>
            </div>          
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['defense']; ?></h6>
          <div class="progressBar">
            <img src="icons/soc.svg" >
            <div class="w3-light-grey" >
            <div id="defenseP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar2">
              <div id="defense" class="text-right"></div></div>
            </div>
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['security']; ?></h6>
          <div class="progressBar">
            <img src="icons/affairs.svg" >
            <div class="w3-light-grey">
            <div  id="securityP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar2">
              <div id="security" class="text-right"></div></div>
            </div>
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['economicActivity']; ?></h6>
          <div class="progressBar">
            <img src="icons/eco.svg" >
            <div class="w3-light-grey" >
            <div id="economicP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar2">
              <div id="economicActivity" class="text-right"></div></div>
            </div>
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['environmentalProtection']; ?></h6>
          <div class="progressBar">
            <img src="icons/env.svg" >
            <div class="w3-light-grey">
            <div  id="enviromentalP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar2">
              <div id="environmentalProtection" class="text-right"></div></div>
            </div>
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['communalServices']; ?></h6>
          <div class="progressBar">
            <img src="icons/uti.svg" >
            <div class="w3-light-grey" >
            <div id="communalP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar2">
              <div id="communalServices" class="text-right"></div></div>
            </div>
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['healthCare']; ?></h6>
          <div class="progressBar">
            <img src="icons/med.svg" >
            <div class="w3-light-grey">
            <div  id="healthcareP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar2">
              <div id="healthCare" class="text-right"></div></div>
            </div>
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['culture']; ?></h6>
          <div class="progressBar">
            <img src="icons/culture.svg" >
            <div class="w3-light-grey" >
            <div id="cultureP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar2">
              <div id="culture" class="text-right"></div></div>
            </div>
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['education']; ?></h6>
          <div class="progressBar">
            <img src="icons/edu.svg" >
            <div class="w3-light-grey">
            <div  id="educationP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar2">
              <div id="education" class="text-right"></div></div>
            </div>
          </th>
        </tr>
        <tr>
          <th scope="row" class="roomStack"><h6><?php echo $lang['socialProtection']; ?></h6>
          <div class="progressBar">
            <img src="icons/care.svg" >
            <div class="w3-light-grey">
            <div id="socialProtP" class="w3-container w3-cyan w3-padding w3-center"></div>
            </div>
            </div>
            </div>
            <div class="text-rightBar2">
              <div id="socialProtection" class="text-right"></div></div>
            </div>
          </th>
        </tr>
      </tbody>
    </table>
    <div class="row fontStyle">
      <div class="col-8 col-md-5 offset-md-2">
        <h6><?php echo $lang['finale1']; ?></h6>            
      </div>
      <div class="col-4 col-md-3 mt-2">
        <div class="text-right">
          <div id="myTaxes" class="text-right"></div>
        </div>
      </div>
      <div class="col-8 col-md-5 offset-md-2">
        <h6><?php echo $lang['finale2']; ?></h6>            
      </div>
      <div class="col-4 col-md-3 mt-2">
        <div class="text-right">
          <div id="myBudgetPart" class="text-right"></div>
        </div> 
      </div>
    </div>  
  </div>  

</div>
 <!--<div class="row sumCalc">
  <div class="col-md-6 offset-md-3 mt-3 ">
    <table class="table ">
      <thead>
        <tr>
          <th scope="col"><?php //echo $lang['result1']; ?></th>
          <th scope="col"><div id="taxTotalIncome" class="text-right"></div></th>
        </tr> 
        <tr>
          <th scope="col"><?php //echo $lang['result2']; ?></th>
          <th scope="col"><div id="taxNetIncome" class="text-right"></div></th>
        </tr> 
      </thead>
    </table>
  </div>
</div>-->





<script type="text/javascript">
let calcData = JSON.parse(sessionStorage["data"], function(k, v) { 
    return (typeof v === "object" || isNaN(v)) ? v : parseInt(v, 10); 
});
$.each(calcData, function(k, v) {
	if(v=="NaN" || v=="NaN%") v="-";
	$( '#' + k ).text(v);  
});    

var timeout = setTimeout(()=>{ CallAllBars(); 
},100);
$("#sumExciseSum").text(calcData["cigaretteExcise"]+calcData["beerExcise"]+calcData["alcoholExcise"]+calcData["petrolExcise"]+calcData["dieselExcise"]+calcData["gbaExcise"]);
$("#sumVatSum").text(calcData["cigaretteVat"]+calcData["alcoholVat"]+calcData["fuelVat"]);
$("#myTaxes").text($("#budgetContribution").text());
$("#myBudgetPart").text(parseFloat($("#budgetContribution").text()*100/12407000000).toFixed(6) + "%");
function CallAllBars(){
  move1("cigtaxP",calcData["cigaretteExcise"]);
  move1("beertaxP",calcData["beerExcise"]);
  move1("alctaxP",calcData["alcoholExcise"]);
  move1("gasolinetaxP",calcData["petrolExcise"]);
  move1("dieseltaxP",calcData["dieselExcise"]);
  move1("gbataxP",calcData["gbaExcise"]);

  move4("sumExcise",calcData["cigaretteExcise"]+calcData["beerExcise"]+calcData["alcoholExcise"]+calcData["petrolExcise"]+calcData["dieselExcise"]+calcData["gbaExcise"]);

  move2("citareP",calcData["cigaretteVat"]);
  move2("alcoP",calcData["alcoholVat"]);
  move2("fuelP",calcData["fuelVat"]);
  
  move5("sumVat",calcData["cigaretteVat"]+calcData["alcoholVat"]+calcData["fuelVat"]);

  move3("revP",calcData["revVat"]);

  move("publicP",calcData["publicService"]);
  move("defenseP",calcData["defense"]);
  move("securityP",calcData["security"]);
  move("economicP",calcData["economicActivity"]);
  move("enviromentalP",calcData["environmentalProtection"]);
  move("communalP",calcData["communalServices"]);
  move("healthcareP",calcData["healthCare"]);
  move("cultureP",calcData["culture"]);
  move("educationP",calcData["education"]);
  move("socialProtP",calcData["socialProtection"]);
}
function move(barname,size) {
  var elem = document.getElementById(barname);
  var width = calcData["budgetContribution"];
  var increment = 1;
  var sizeBar = (size/width)*100+15;
  if(sizeBar!=null){
    var id = setInterval(frame, 15);
    
    function frame() {
    if (increment>= sizeBar) {
        clearInterval(id);
    } 
    else {
        if(sizeBar>80)
          sizeBar = sizeBar-15;
        increment++;
        elem.style.width = increment + '%';
      }
    }
  }
}
function move1(barname,size) {
  var elem = document.getElementById(barname);
  var width = calcData["cigaretteExcise"]+calcData["beerExcise"]+calcData["alcoholExcise"]+calcData["petrolExcise"]+calcData["dieselExcise"]+calcData["gbaExcise"];
  var increment = 1;
  var sizeBar = (size/width)*100+15;
  if(sizeBar!=null){
    var id = setInterval(frame, 15);
    
    function frame() {
    if (increment>= sizeBar) {
        clearInterval(id);
    } 
    else {
        if(sizeBar>80)
          sizeBar = sizeBar-15;
        increment++;
        elem.style.width = increment + '%';
      }
    }
  }
}
function move2(barname,size) {
  var elem = document.getElementById(barname);
  var width = calcData["cigaretteVat"]+calcData["alcoholVat"]+calcData["fuelVat"];
  var increment = 1;
  var sizeBar = (size/width)*100+15;
  if(sizeBar!=null){
    var id = setInterval(frame, 15);
    
    function frame() {
    if (increment>= sizeBar) {
        clearInterval(id);
    } 
    else {
        if(sizeBar>80)
          sizeBar = sizeBar-15;
        increment++;
        elem.style.width = increment + '%';
      }
    }
  }
}
function move3(barname,size) {
  var elem = document.getElementById(barname);
  var width = calcData["budgetContribution"];
  var increment = 1;
  var sizeBar = (size/width)*100+25;
  if(sizeBar!=null){
    var id = setInterval(frame, 15);
    
    function frame() {
    if (increment>= sizeBar) {
        clearInterval(id);
    } 
    else {
        if(sizeBar>80)
          sizeBar = sizeBar+0;
        increment++;
        elem.style.width = increment +13 + '%';
      }
    }
  }
}
function move4(barname,size) {
  var elem = document.getElementById(barname);
  var width = calcData["cigaretteExcise"]+calcData["beerExcise"]+calcData["alcoholExcise"]+calcData["petrolExcise"]+calcData["dieselExcise"]+calcData["gbaExcise"];
  var increment = 1;
  var sizeBar = (size/width)*100+25;
  if(sizeBar!=null){
    var id = setInterval(frame, 15);
    
    function frame() {
    if (increment>= sizeBar) {
        clearInterval(id);
    } 
    else {
        if(sizeBar>80)
          sizeBar = sizeBar-25;
        increment++;
        elem.style.width = increment +25 + '%';
      }
    }
  }
}
function move5(barname,size) {
  var elem = document.getElementById(barname);
  var width = calcData["cigaretteVat"]+calcData["alcoholVat"]+calcData["fuelVat"];
  var increment = 1;
  var sizeBar = (size/width)*100+25;
  if(sizeBar!=null){
    var id = setInterval(frame, 15);
    
    function frame() {
    if (increment>= sizeBar) {
        clearInterval(id);
    } 
    else {
        if(sizeBar>80)
          sizeBar = sizeBar-25;
        increment++;
        elem.style.width = increment +25 + '%';
      }
    }
  }
}
</script>