<div class="container-fluid " >
  <!-- header -->
  <div class="d-flex container-fluid navbar2 pb-5 mt-3">
    <div class="flex-grow-1 bd-highlight"></div>
    <div class="p-3 bd-highlight "><p class="links respFontSize" data-toggle="modal" data-target="#exampleModal"><?php echo $lang['about']; ?></p></div>
    <div class="p-3 bd-highlight"><a  target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fdatabase.geostat.ge%2Fmytaxes/&amp;src=sdkpreparse" ><i class="fab fa-facebook-square social"></i></a></div>
  </div>
  <div class="w-100 slide mt-5 img-wrapper" style="text-align:center">
      <img class="img-responsive" src="pic/lari-<?php if(isset($_GET['lang']) && $_GET['lang']=='en'){echo"en";}else{echo"ka";} ?>.png" alt="lari-img" style="width:60%"  />
      <div class="n img-overlay">
        <button class="ext-step-middle glowButton"  id="down-to-income">
          <?php echo $lang['calculate']; ?>
        </button>          
      </div>
  </div>
</div>
<br/><br/>
<br/>
<div class="slide">  
</div>
<div style="clear: both;"></div>
<div class="container-fluid" id="income" >
  <!-- income -->
  <div class="img-container  mt-5">
    <div class="w-100 mt-5" style="text-align:center">
        <img class="img-responsive" src="pic/jndb.png" alt="income-img" style="width:60%"  />
    </div>
    <div class="row add-to-img mt-50 input-text-right incomeCells" style="width: 27%;">
        <div class="col-md-12 mb-3 respFont1">
          <p class="img-text text-uppercase headerFontSize"><?php echo $lang['beforeDeduction']; ?></p>
        </div>        
        <div class="col-7 col-md-8">
            <p class="img-text text-uppercase"><?php echo $lang['employeeIncome']; ?>:
              <i class="fas fa-info-circle info fa-1x" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['employeeIncomeInfo']; ?>"></i>
            </p>
        </div>        
        <div class="col-5 col-md-4 d-flex zeroPaddingResp" style="margin-top: -0.5rem;">
          <!-- <div class="input-group">          
            <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
            <div class="input-group-append">
              <span class="input-group-text"><?php //echo $lang['gel']; ?></span>
            </div>
          </div> -->
            <input type="text" class="calc form-control w-60 mt-1 form-control-md" placeholder="₾" id="amount" > <!-- value="0" form-control-sm -->
            <!-- <p class="img-button mt-1"><?php echo $lang['gel']; ?></p> -->
        </div>
        <div class="col-5 col-md-7 ml-4 marginLeftResp" >
            <p class="img-text text-uppercase " id="Net"><?php echo $lang['employeeIncomeNet']; ?>:</p>
        </div>
        <div class="col-5 col-md-3 text-right ml-1 marginTopResp"  style="margin-top: -1.4rem;">
            <input type="hidden" id="income" class="form-control">
            <p class="price lead" id="income-label"></p> 
        </div> 
        <div class="col-7 col-md-8 ">
            <p class="img-text text-uppercase"><?php echo $lang['employeeIncome2']; ?>: 
              <i class="fas fa-info-circle info fa-1x" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['employeeIncomeInfo2']; ?>"></i>
            </p>
        </div>        
        <div class="col-5 col-md-4 d-flex zeroPaddingResp" style="margin-top: -0.5rem;">
            <input type="text" class="calc form-control w-60 mt-1 form-control-sm" placeholder="₾" id="otherAmount" > <!-- value="0" -->
            <!-- <p class="img-button mt-1"><?php echo $lang['gel']; ?></p> -->
        </div>
        <div class="col-7 col-md-8">
            <p class="img-text text-uppercase"><?php echo $lang['employeeIncome3']; ?>: </p>
        </div>        
        <div class="col-5 col-md-4 d-flex zeroPaddingResp" style="margin-top: -0.5rem;">
            <input type="text" class="calc form-control w-60 mt-1 form-control-sm" placeholder="₾" id="sumAmount" readonly="readonly" > <!-- value="0" -->
            <!-- <p class="img-button mt-1"><?php echo $lang['gel']; ?></p> -->
        </div>
    </div>
  </div>
</div>
<br/> <br/>
<div class="next-step-left " id="down-to-cigarette">  <?php echo $lang['cigarette']; ?> </div> <!-- <i class="fas fa-angle-double-right"></i> -->
<div class="arrow"></div>
<div style="clear: both;"></div>
<!-- cigarette -->
<div id="cigarette" class="container-fluid  mt-5">
  <div class="row">
    <div class="col-sm-1"></div>
    <div class="col-sm-6 grid-style mt-5 input-text-right">
      <div class="row col-12 font-weight-bold respFontSize"><?php echo $lang['cigHead']; ?></div>
        <div class="row mb-2 text-center">
          <div class="col-6 col-md-8"></div>
          <div class="col-3 col-md-2 respFontSize">
            <?php echo $lang['cigaretteAmount']; ?>
          </div>
          <div class="col-3 col-md-2 respFontSize">
            <?php echo $lang['cigarettePrice']; ?>
          </div>
        </div>
        <div class="row mb-1 mt-3">
          <div class="col-6 col-md-8 respFontSize"><?php echo $lang['smokedCigarette']; ?></div>
          <div class="col-3 col-md-2">
            <input type="text" class="calc form-control input-box step3"  id="step3_1">
            <div class="Tooltip">
              <em>i</em>
              <strong><?php echo $lang['cigaretteInfo1']; ?><br></strong>
            </div>
          </div>
          <div class="col-3 col-md-2">
            <input type="text" class="calc form-control input-box step3"  id="step3_1_2">
            <div class="Tooltip">
              <em>i</em>
              <strong><?php echo $lang['cigaretteInfo2']; ?><br></strong>
            </div>
          </div>
        </div>
        <div class="row mb-1 mt-3">
          <div class="col-6 col-md-8 respFontSize"><?php echo $lang['smokedCigarette2']; ?></div>
          <div class="col-3 col-md-2">
            <input type="text" class="calc form-control input-box step3"  id="step3_2">
            <div class="Tooltip">
              <em>i</em>
              <strong><?php echo $lang['cigaretteInfo3']; ?><br></strong>
            </div>
          </div>
          <div class="col-3 col-md-2">
            <input type="text" class="calc form-control input-box step3"  id="step3_2_2">
            <div class="Tooltip">
              <em>i</em>
              <strong><?php echo $lang['cigaretteInfo4']; ?><br></strong>
            </div>
          </div>
        </div>
        <br/>
        <div class="row mb-2 ">
          <div class="col-6 col-md-8 font-weight-bold respFontSize">
            <!-- <i class="fas fa-info-circle info" data-toggle="tooltip" data-placement="top" title=""></i> -->
            <?php echo $lang['expenditureCigarette']; ?>
          </div>
          <div class="col-6 col-md-4">
            <input type="text" class="form-control input-box"  id="step3_total" >
            <!-- <div class="Tooltip">
              <em>i</em>
              <strong><?php //echo $lang['infoCigarette']; ?><br></strong>
            </div> -->
          </div>
        </div>
    </div>
    <div class="col-sm-5 p-0">
      <img src="pic/cigarette.PNG"  class="img-fluid drinkingBuddies"/>
    </div>
  </div>
</div>
<div class="next-step-left " id="down-to-beer"><?php echo $lang['drinks']; ?></div> <!--  <i class="fas fa-angle-double-right"></i> -->
<div class="arrow"></div>
<div style="clear: both;"></div>
<!-- drinks -->
<div id="beer" class="container-fluid ">
    <div class="row">
        <div class="col-sm-1 "></div>
        <div class="col-sm-7 grid-style input-text-right"> 
            <div class="row col-12 font-weight-bold mr-0 pr-0 respFontSize">
              <?php echo $lang['alcohol']; ?>
              <i class="fas fa-info-circle fa-info-circle2 info fa-1x" data-toggle="tooltip" data-placement="top" title="<?php echo $lang['cigHeadInfo']; ?>"></i>
            </div>
            <div class="row mb-2 mt-2 text-center">
              <div class="col-6 col-md-8 "></div>
              <div class="col-3 col-md-2 respFontSize">
                <?php echo $lang['cigaretteAmount']; ?>
              </div>
              <div class="col-3 col-md-2 respFontSize">
                <?php echo $lang['cigarettePrice']; ?>
              </div>
            </div>
            <div class="row mb-2 mt-2">
              <div class="col-6 col-md-8 respFontSize"><?php echo $lang['beer']; ?></div>
              <div class="col-3 col-md-2 ">
                <input type="text" class="calc form-control input-box step4"  id="step4_1">
                <div class="Tooltip">
                  <em>i</em>
                  <strong><?php echo $lang['bearInfo1']; ?><br></strong>
                </div>
              </div>
              
              <div class="col-3 col-md-2 ">
                <input type="text" class="calc form-control input-box step4"  id="step4_1_2">
                <div class="Tooltip">
                  <em>i</em>
                  <strong><?php echo $lang['bearInfo2']; ?><br></strong>
                </div>
              </div>              
            </div>
            
            <div class="row mb-2">
                <div class="col-6 col-md-8 respFontSize"><?php echo $lang['vodka']; ?></div>
                <div class="col-3 col-md-2 ">
                  <input type="text" class="calc form-control input-box step4"  id="step4_3" >
                  <div class="Tooltip">
                    <em>i</em>
                    <strong><?php echo $lang['vodkaInfo1']; ?><br></strong>
                  </div>
                </div>
                <div class="col-3 col-md-2 ">
                  <input type="text" class="calc form-control input-box step4"  id="step4_3_2">
                  <div class="Tooltip">
                    <em>i</em>
                    <strong><?php echo $lang['vodkaInfo2']; ?><br></strong>
                  </div>
                </div>
            </div>            
            <div class="row mb-2">
                <div class="col-6 col-md-8 respFontSize"><?php echo $lang['heavyAlc']; ?></div>
                <div class="col-3 col-md-2 ">
                  <input type="text" class="calc form-control input-box step4"  id="step4_4" >
                  <div class="Tooltip">
                    <em>i</em>
                    <strong><?php echo $lang['brandyInfo1']; ?><br></strong>
                  </div>
                </div>
                <div class="col-3 col-md-2 ">
                  <input type="text" class="calc form-control input-box step4"  id="step4_4_2">
                  <div class="Tooltip">
                    <em>i</em>
                    <strong><?php echo $lang['brandyInfo2']; ?><br></strong>
                  </div>
                </div>
            </div>
            <!-- <div class="row mb-2">
                <div class="col-8 "><?php echo $lang['heavyAlc']; ?></div>
                <div class="col-2 "><input type="text" class="calc form-control input-box step4"  id="step4_4" ></div>
                <div class="col-2 "><input type="text" class="calc form-control input-box step4"  id="step4_4_2" ></div>
            </div> -->
            <div class="row mb-2 mt-3">
                <div class="col-6 col-md-8 font-weight-bold respFontSize"> <!-- ml-3 -->
                <!-- <i class="fas fa-info-circle info" data-toggle="tooltip" width="1500px" data-placement="top" title=""></i>   -->
                <?php echo $lang['alcohol2']; ?></div>
                <div class="col-6 col-md-4 ">
                  <input type="text" class="form-control input-box"  id="step4_total" >
                  <!-- <div class="Tooltip">
                    <em>i</em>
                    <strong><?php //echo $lang['infoAlcohol']; ?><br></strong>
                  </div> -->
                </div>
            </div>
        </div>
        <div class="col-sm-4 "></div>
    </div>
    <div class="row">
        <div class="col-sm-5 "></div>
        <div class="col-sm-7 "><img src="pic/drink.PNG"  class="img-fluid drinkingBuddies" style="margin-top: -3rem;"/></div>
    </div>
</div>
<div class="next-step-left " id="down-to-fuel respFontSize"> <?php echo $lang['fuel']; ?> </div> <!-- <i class="fas fa-angle-double-right"></i> -->
<div class="arrow"></div>
<div style="clear: both;"></div>
<!-- fuel -->
<div id="fuel" class="container-fluid ">
  <div class="row" >
    <div class="col-sm-1"></div>
    <div class="col-sm-7 grid-style input-text-right">
        <div class="row mb-2">
          <div class="col-12 font-weight-bold respFontSize"><?php echo $lang['fuelTitle']; ?></div>
        </div>
        <div class="row mb-2 mt-2 text-center">
          <div class="col-6 col-md-8 "></div>
          <div class="col-3 col-md-2 respFontSize">
            <?php echo $lang['cigaretteAmount']; ?>
          </div>
          <div class="col-3 col-md-2 respFontSize">
            <?php echo $lang['cigarettePrice']; ?>
          </div>
        </div>
        <div class="row mb-2 mt-2">
          <div class="col-6 col-md-8 respFontSize"><?php echo $lang['gasoline']; ?></div>
          <div class="col-3 col-md-2 ">
            <input type="text" class="calc form-control input-box step5"  id="step5_1">
            <div class="Tooltip">
              <em>i</em>
              <strong><?php echo $lang['gasolineInfo1']; ?><br></strong>
            </div>
          </div>
          <div class="col-3 col-md-2 ">
            <input type="text" class="calc form-control input-box step5"  id="step5_1_2">
            <div class="Tooltip">
              <em>i</em>
              <strong><?php echo $lang['gasolineInfo2']; ?><br></strong>
            </div>
          </div>
        </div>
        <div class="row mb-2 ">
          <div class="col-6 col-md-8 respFontSize"><?php echo $lang['diesel']; ?></div>
          <div class="col-3 col-md-2">
            <input type="text" class="calc form-control input-box step5"  id="step5_3">
            <div class="Tooltip">
              <em>i</em>
              <strong><?php echo $lang['dieselInfo1']; ?><br></strong>
            </div>
          </div>
          <div class="col-3 col-md-2">
            <input type="text" class="calc form-control input-box step5"  id="step5_3_2">
            <div class="Tooltip">
              <em>i</em>
              <strong><?php echo $lang['dieselInfo2']; ?><br></strong>
            </div>
          </div>
        </div>
        <div class="row mb-2 ">
          <div class="col-6 col-md-8 respFontSize"><?php echo $lang['gba']; ?></div>
          <div class="col-3 col-md-2">
            <input type="text" class="calc form-control input-box step5"  id="step5_5">
            <div class="Tooltip">
              <em>i</em>
              <strong><?php echo $lang['gbaInfo1']; ?><br></strong>
            </div>
          </div>
          <div class="col-3 col-md-2">
            <input type="text" class="calc form-control input-box step5"  id="step5_5_2">
            <div class="Tooltip">
              <em>i</em>
              <strong><?php echo $lang['gbaInfo2']; ?><br></strong>
            </div>
          </div>
        </div>
        <div class="row mb-2 mt-3">
          <div class="col-6 col-md-8 font-weight-bold">
          <!-- <i class="fas fa-info-circle info" data-toggle="tooltip" data-placement="top" title=""></i>     -->
          <?php echo $lang['fuelConsumption']; ?></div>
          <div class="col-6 col-md-4 ">
            <input type="text" class="form-control input-box "  id="step5_total" >
            <!-- <div class="Tooltip">
              <em>i</em>
              <strong><?php //echo $lang['infoFuel']; ?><br></strong>
            </div> -->
          </div>
        </div>
    </div>
  </div>
  <div class="row" style="margin-top: -1vw;">
        <div class="col-sm-5 "></div>
        <div class="col-sm-7 "><img src="pic/fuel.PNG"  class="img-fluid drinkingBuddies"/></div>
    </div>
</div>
<!-- saving -->
<div class="next-step-left " id="down-to-other"><?php echo $lang['other']; ?> </div> <!-- <i class="fas fa-angle-double-right"></i> -->
<div class="arrow"></div>
<div style="clear: both;"></div>

<div id="other" class="container-fluid input-text-right">
  <div class="row" style="margin-top: 5rem;">
      <div class="col-12 grid-style ">
        <div class="row mb-3 ">
            <div class="col-1"></div>
            <div class="col-4 respFontSize"><?php echo $lang['savings']; ?></div>
            <div class="col-3  ">
              <input type="text" class=" form-control input-box step6 " id="step6_1" > 
            </div>
            <div class="col-4">
             <span id="err1" class="err respFontSize" ><?php echo $lang['err1']; ?></span>
             </div>
          </div>
          <div class="row mb-0">
            <div class="col-1"></div>
            <div class="col-4 respFontSize"> 
              <!-- <i class="fas fa-info-circle info" data-toggle="tooltip" data-placement="top" title=""></i>  -->
              <?php echo $lang['otherExpenses']; ?>
            </div>
            <div class="col-3 ">
              <input type="text" class="form-control input-box step6  " id="step6_2"  > 
              <div class="Tooltip">
                <em>i</em>
                <strong><?php echo $lang['infoOther']; ?><br></strong>
              </div>
            </div>
            <div class="col-4">
              <span id="err2" class="err respFontSize"><?php echo $lang['err2']; ?></span>
          </div>
          </div>
          <div class="row mb-2 ">
            <div class="col-7"><?php //echo $lang['averageTax']; ?></div>
            <div class="col-5 ">
              <input type="hidden" class="form-control input-box step6  " id="step6_3"  >
            </div>
          </div>
      </div>
  </div>
  <div class="row">
        <div class="col-sm-5 "></div>
        <div class="col-sm-7 p-0"><img src="pic/saving.PNG"  class="img-fluid drinkingBuddies" style="width: 90%;    float: right;"/></div>
    </div>
</div>
<!-- calculate -->
<div class="next-step-left-orange " id="down-to-other" onClick="createItem()"><?php echo $lang['calc']; ?> &nbsp; <i class="far fa-check-circle"></i> </div>
<div style="clear: both;"></div>

<script type="text/javascript">
  // naturaluri ricxvebistvis
  $("input").keypress(function (e)
  {
   if( e.which!=8 && e.which!=0 && e.which!=46 &&  (e.which<48 || e.which>57 ))
    {
      return false;
    } 
  }); 
</script>




