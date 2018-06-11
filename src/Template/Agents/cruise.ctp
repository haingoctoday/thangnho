  <?php echo $this->Html->script('jquery-ui'); ?>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css" rel="Stylesheet" type="text/css" />
<div class="wrapper-cruise">
    <div class="cruise-sreach-form">
        <h4 class="cruise-title-head">CRUISE REQUEST</h4>
        <div class="input-search-tranfer pb-5 pt-4">
           <div class="container">
            <div class="row">
                <div class="col-md-5">
                  <div class="input-group">
                  <i class="fa fa-ship maucam" aria-hidden="true"></i>
                    <!-- <input class="form-control" type="text" name="firstname" id="firstname" placeholder="From (Port name)"> -->
                    
                      <select id="soflow1" class="mauxanh-input form-control" name="pre_name" style="width: 99px;">
                        <option value="">Pick Destination  </option>
                            <option value="1">Halong </option>
                            <option value="2">Mekong</option>
                      </select>
                </div>
              </div>
            </div>
           </div>
            <div class="container">
               <div class="row">
                  <div class="col-md-5">
                     <div class="form-group" style="width: 93% !important">
                       <label class="form-control-label display-7 cruise-fix-label">From:
                       </label>
                       <div class="input-group">
                           <i class="fa fa-map-marker maucam" aria-hidden="true"></i>
                           <input class="form-control" type="text" name="from" id="fromm" placeholder="From (Port name)">
                       </div>
                   </div>
               </div>
               <div class="col-md-5 pl-0">
                 <div class="form-group">
                    <label class="form-control-label display-7">To:
                    </label>
                    <input class="form-control" style="width: 93% !important" type="text" name="to" id="to" placeholder="To (Port name)">
                </div>
            </div>
            <div class="col-md-2 pl-0">
             <div class="form-group">
                <label class="form-control-label display-7">Date:
                </label>
                <input class="form-control" type="text" name="pickdate" id="pickdate" placeholder="Date">
            </div>
        </div>
    </div>
</div>
</div>
</div>
<div class="form-button-property-cruise">
    <div class="w-100 mx-auto">
        <div class="border-nut2 mx-auto">
            <button class="btn-block border-0 nen-maucam button-border-nut2 mx-auto" id="check_availability">Search</button></div>
        </div>
    </div>
     <div class="div_room_showw">
            

        </div>
    <div class="display-tranfer">
        <div class="container border-crui">
            <div class="cruise-tranfer text-center">
                <span class="">Cruise</span>
            </div>

            <div class="row">
             <?php
             foreach($transfer_hot as $key => $transfer_hot_item){
                ?>
                <div class="card-twt pr-0 col-12 col-md-6 col-lg-4" id="fix-card-hotel">
                  <div class="card-wrapper" id="card-wrapper1">
                    <div class="card-img">

                      <?=  $this->Html->image('/upload/cruisedrive/'.$transfer_hot_item->hinhanh, ['alt' => 'hinhanh','media-simple'=>'true']); ?>
                  </div>
                  <div class="card-box text-center px-3">
                      <div class="cruise-height-h">
                        <h4 class="mauxanh"><?php echo $transfer_hot_item->name?></h4>
                    </div>

                    <div class="height-p-twt-crui">
                        <p class="" ><?php echo h($transfer_hot_item->detail)?>.</p>

                    </div>
                    <!-- <div class="copy-fade-tour"></div> -->
                </div>
            </div>
        </div>

        <?php } ?>
    </div>
</div>
</div>
<div class="div-blank-white" id="fix-white"></div>
</div>


<style type="text/css">
.book-property .header-trans .sub-title {
    margin-left: 9px;
    font-size: 14px;
    color: #777;
}
.book-property .header-trans .price-info {
    color: #777;
    font-size: 10px;
    display: block;
    text-align: right;
    text-transform: uppercase;
    font-weight: 700;
}
.book-property .header-trans .price {
    color: #38a7c2;
    font-size: 28px;
    text-transform: uppercase;
    display: block;
    text-align: right;
    letter-spacing: -1px;
}
.book-property .header-trans .price-holder .price-info {
    color: #777;
    font-size: 10px;
    display: block;
    text-align: right;
    text-transform: uppercase;
}
.book-property .header-trans .price-holder {
    float: right;
}
.book-property .header-trans h2 {
    color: #38a7c2;
    display: inline-block;
    font-size: 30px;
    font-weight: lighter!important;
    letter-spacing: 0;
    line-height: 40px;
    margin: 3px 0 -1px 3px;
}
.table-description-to {
    display: block;
    text-align: right;
    color: #555;
    margin: 11px 35px 2px 0;
    font-size: 10px;
    line-height: 12px;
}
.khung-property #color-the{
    background-color: #fff;
}
.price-property{
        color: #38a7c6;
        font-size: 22px;
        line-height: 74px;
        /*margin-left: 80px;*/
}
.button-calendartf{
    background: url(img/icon_calendar.png) no-repeat;
    width: 40px;
    height: 38px;
    border: 1px solid #ccc;
    background-color: white;
    background-position: 50%;
    margin-left: 5px;
}
  i.fa.fa-map-marker.maucam {padding-right: 9px;font-size: 38px;}
  label.form-control-label.display-7.cruise-fix-label {padding-left: 30px;}
  .form-button-property-cruise{padding-bottom: 19px;}
  .display-tranfer{background-color: #f5f5f5;}
  .cruise-height-h{height: 129px;padding-top: 20px;}
  .card-wrapper#card-wrapper1{background-color: #ffffff}
  .cruise-tranfer{padding-top: 40px;padding-bottom: 20px;font-size: 25px;}
  .wrapper-cruise{background-color: #fff}
  .cruise-sreach-form{background-color: #ebf1f1}
  .cruise-title-head{font-weight: bold;font-size: 22px;padding-left: 15px;padding-top: 10px;}
  .border-nut2{border: 5px solid #ecf0f1 !important;border-radius: 9px;width: 120px;height: 55px;line-height: 40px;margin-top: -28px;}
  .button-border-nut2 {font-size: 15px;font-weight: 400;border-radius: 5px;width: 111px;height: 45px;color: #ecf0f1;line-height: 40px;}
  .height-p-twt-crui{height: 150px;}
  .border-crui{border: 1px solid #dcdcdc;padding-bottom: 60px;}
  .ui-widget-header {
      background: none;
      color: black;
      font-size: 12px;
      border: none;
      /*padding: 22px 0px 12px 0px !important;*/

  }

  .ui-datepicker table {
      border: none !important;
      border-collapse: collapse !important;
  }

  .ui-datepicker th {
      font-size: 14px;
      font-weight: lighter !important;
  }

  .ui-state-default, .ui-widget-content .ui-state-default, .ui-widget-header .ui-state-default {
      background: none !important;
      color: #000;
      padding: 3px;
      text-align: center;
      border-collapse: collapse;
  }
  .ui-widget-content .ui-state-default {
      border: none ;
    }
   .ui-state-default.ui-state-hover{
      background-color: #008efc !important;
      color: #fff;
    }

  .ui-datepicker-calendar td {
      border: 1px solid #f5f5f5 !important;
  }
  .ui-datepicker-calendar td:hover {
     padding:none;
  }
  .ui-widget-content {
      background: white;
  }
  i.fa.fa-ship.maucam {
      padding-right: 9px;
      font-size: 28px;
          margin: auto;
  }
</style>
<script type="text/javascript">
    //$("#pickdate").datepicker();

</script>
<script type="text/javascript">
    $("#pickdate").datepicker({ minDate: new Date()});
$( function() {
  loadpage_C();
    //  
    // $( "#firstname" ).autocomplete({
    //   source: availableTags,
    //   select: function (event, ui) {
    //     //console.log("12312");
    //      //alert(ui.item.label);  //will show you the selected item

    //    $.ajax({
    //       type: 'POST',
    //       url: 'json_getlocation_cruise',  //whatever any url
    //       data: {label: ui.item.label},
    //       success: function(message) { 
    //        // if(message.data == true){
    //             var availableTagspick_up = message.from;
    //             $( "#pick_up" ).autocomplete({
    //               source: availableTagspick_up
    //             });
    //             var availableTagspick_off = message.to;
    //             $( "#pick_off" ).autocomplete({
    //               source: availableTagspick_off
    //             });
    //        //   }else{

    //         //  }
    //        },
    //       dataType: 'json'
    //    });
    //   }
    // });
  } );

function loadpage_C(){
  //$("#soflow1").val('1');
  //$("#soflow1").val("1").change();;
  $( "#soflow1" ).change(function() {
    $("#fromm").val("");
    $("#to").val("");
  // alert();
    var id_p = $(this).val();
    //alert(id_p);
           $.ajax({
          type: 'POST',
          url: 'json_getlocation_cruise',  //whatever any url
          data: {label: id_p},
          success: function(message) { 
           // if(message.data == true){
                var availableTagspick_up = message.from;
                $( "#fromm" ).autocomplete({
                  source: availableTagspick_up
                });
               var availableTagspick_off = message.to;
                $( "#to" ).autocomplete({
                  source: availableTagspick_off
                });
           //   }else{

            //  }
           },
          dataType: 'json'
       });
  });
 // alert(id_p);
}


$( "#check_availability" ).click(function() {
  //alert( "Handler for .click() called." );
  //$("#div_show_onsearch").css('display','block');
   $(".display-tranfer").css('display','none');
    var formData = {
                'destination': $('#soflow1').val(),
                'pickdate': $('#pickdate').val(),
                'formm': $('#fromm').val(),
                'to': $('#to').val(),
            };


  $.ajax({
            type: "POST",
            url: "cruise.php",
            data:formData,
            //contentType: "application/json; charset=utf-8",
            success: function(result) {
                //alert(result);
                $(".div_room_showw").html(result);
               // $("#icon_button_change"+id_hotel).text('remove');
            }
        });
});


</script>