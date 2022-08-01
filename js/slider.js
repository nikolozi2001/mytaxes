//slider

$(document).ready(function() {
          $("#slider").slider({
              animate: true,
              step:1,
              value:0,
              min: 0,
              max: 10000,
              slide: function(event, ui) {
                  update(1,ui.value); //changed
              }
          });


          //Added, set initial value.
          $("#amount").val(0);
          $("#amount-label").text(0);

          update();
      });

      $("#amount").keyup(function(){
        update();

        $("#slider").slider({
              animate: true,
              value:$("#amount").val()              
        });
      })
      //changed. now with parameter

      function update(slider,val) {
        //changed. Now, directly take value from ui.value. if not set (initial, will use current value.)
        var $amount = slider == 1 ? val : $("#amount").val();

         $income = $amount - ($amount * 0.2)+"₾";
         $total =    $income;
         $( "#amount" ).val($amount);
         $( "#amount-label" ).text($amount);

         $( "#income" ).val($income);
         $( "#income-label" ).text($income);

         $( "#total" ).val($total);
         $( "#total-label" ).text($total);

         $('#slider span').html('<label><i class="fas fa-angle-left"></i> '+$amount+' ₾ <i class="fas fa-angle-right"></i></label>');
      }
// JavaScript Document