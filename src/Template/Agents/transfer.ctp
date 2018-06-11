  <?php echo $this->Html->script('jquery-ui'); ?>
    <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css" rel="Stylesheet" type="text/css" />
<div class="wrapper-tranfer">
    <div class="transfer-sreach-form">
        <h4 class="transfer-title-head">TRANFERS SEARCH</h4>
        <div class="input-search-tranfer">
            <div class="container">
                <div class="col-md-7 mx-auto pt-4 pb-5 px-0">
                    <span class="tranfer-span-des">Destination</span>
                    <div class="form-group pt-3">
                        <div class="input-group">
                            <i class="fa fa-map-marker maucam-v1" aria-hidden="true" style="padding-left: 5px;"></i>
                            <input class="form-control" type="text" name="Destination" id="firstname" placeholder="Destination">
<?php  //echo $this->Form->input('destination', array('label'=>'Destination','class'=>'form-control', 'type'=>'select', 'options'=>$diachi_view));
 ?>
                        </div>
                         <div class="input-group pt-2">
                            <i class="fa fa-calendar maucam" aria-hidden="true"></i>
                            <input class="form-control" type="text" name="pickdate" id="pickdate" placeholder="Pick Date">

                        </div>
                    </div>
                    <div class="hidden-more-tabs">
                    <div class="pick-up">
                        <span class="tranfer-span-des">Pick-Up From</span>
                    <div class="row pt-3">
                        <div class="col-md-12">
                            
                             <div class="input-group">
                                <i class="fa fa-arrow-up maucam fa-fw" aria-hidden="true"></i>
                               <input class="form-control" type="text" name="pick_up" id="pick_up" placeholder="Enter name...">
                            </div>
                       
                        </div>
                    </div>  
                        </div>
                    <div class="drop-to">
                    <span class="tranfer-span-des">Drop-Off To</span>
                    <div class="row pt-3">
                        <div class="col-md-12">
                            <div class="input-group">
                                <i class="fa fa-arrow-down maucam fa-fw" aria-hidden="true"></i>
                               
                            <input class="form-control" type="text" name="pick_off" id="pick_off" placeholder="Enter name...">
                        </div>
                        </div>
                    </div> 
                    </div>
                    <div class="end-table-tf pt-3">
                        <div class="row text-center">
                            <!-- <div class="col-md-10 mx-auto"> -->
                                <p>If there are no transfers matching your request, please email <b>contact@tweetworldtravel.com.au</b> for an alternative solution</p>                                
                            <!-- </div> -->

                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="form-button-property-tranfer">
        <div class="w-100 mx-auto">
            <div class="border-nut1 mx-auto">
                <button class="btn-block border-0 nen-maucam button-border-nut1 mx-auto" id="check_availability">Check Availability</button></div>
            </div>
        </div>
        <div class="div_room_showw">
            

        </div>



     <div class="display-tranfer" id="display_transfer">
            <div class="container border-transfer">
                <div class="title-tranfer text-center">
                    <span class="">Transfer</span>
                </div>

                <div class="row">
                 <?php
                 foreach($transfer_hot as $key => $transfer_hot_item){
                    ?>
                    <div class="card-twt pr-0 col-12 col-md-6 col-lg-4" id="fix-card-hotel">
                      <div class="card-wrapper" id="card-wrapper1">
                        <div class="card-img">

                          <?=  $this->Html->image('/upload/transferdrive/'.$transfer_hot_item->hinhanh, ['alt' => 'hinhanh','media-simple'=>'true']); ?>
                      </div>
                      <div class="card-box text-center px-3">
                          <div class="tranfer-height-h">
                            <h4 class="mauxanh"><?php echo $transfer_hot_item->name?></h4>
                        </div>

                        <div class="height-p-twt-tran">
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
.mauxam{color: rgb(119, 119, 119);font-weight: 600;font-size: 22px;}
.hidden-more-tabs .drop-to{padding-top: 15px;}
.maucam-v1{font-size: 35px;line-height: 37px;width: 50px;color: #f67300;}
.tranfer-height-h{height: 129px;padding-top: 20px;}
.card-wrapper#card-wrapper1{background-color: #ffffff}
.title-tranfer{padding-top: 40px;padding-bottom: 20px;font-size: 25px;}
.display-tranfer{background-color: #f5f5f5;}
.form-button-property-tranfer{padding-bottom: 19px;}
i.maucam {padding-right: 9px;font-size: 35px;line-height: 37px;width: 50px}
.tranfer-span-des{font-size: 23px;padding-left: 50px;color: rgb(119, 119, 119);font-weight: 600;}
.transfer-title-head{font-weight: bold;font-size: 22px;padding-left: 15px;padding-top: 10px;}
.transfer-sreach-form{background-color: #ebf1f1}
.wrapper-tranfer{background-color: #fff}
.border-nut1{border: 5px solid #ebf1f1 !important;border-radius: 9px;width: 170px;height: 55px;line-height: 40px;margin-top: -28px;}
.button-border-nut1{font-size: 15px;font-weight: 400;border-radius: 5px;width: 160px;height: 45px;color: #ebf1f1;line-height: 40px;}
.form-control-transfer{display: block;width: 100%;font-size: 1rem;line-height: 1.5;color: #495057;background-color: #fff;background-image: none;background-clip: padding-box;border: 1px solid #ced4da;transition: border-color ease-in-out .15s,box-shadow ease-in-out .15s;}
.border-transfer{border: 1px solid #dcdcdc;padding-bottom: 60px;}
.height-p-twt-tran{height: 150px;}
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
input {
    border: 1px solid #ccc !important;
    border-radius: 0 !important;
}
select#soflowtf, select#soflowtf-color {
      -webkit-appearance: button;
    -webkit-border-radius: 0px;
    -webkit-padding-end: 20px;
    -webkit-padding-start: 2px;
    -webkit-user-select: none;
    background-image: url(img/cc.png), -webkit-linear-gradient(#ffffff, #ffffff 40%, #ffffff);
    background-position: 100% center;
    background-repeat: no-repeat;
    border: 1px solid #ccc;
    color: #555;
    font-size: inherit;
    overflow: hidden;
    padding: 5px 10px;
    text-overflow: ellipsis;
    white-space: nowrap;
    height: 38px;
}
#ui-id-1{
    z-index: 99;
}
.ui-state-active, .ui-widget-content .ui-state-active, .ui-widget-header .ui-state-active{
        background: #f67300; 
        border: none;
}
#div_show_onsearch{
  /*display: none;*/
}
</style>
<script type="text/javascript">
    $("#pickdate").datepicker({ minDate: new Date()});
$( function() {
    var availableTags = <?php echo json_encode($diachi_view) ?>;
    $( "#firstname" ).autocomplete({
      source: availableTags,
      select: function (event, ui) {
        //console.log("12312");
         //alert(ui.item.label);  //will show you the selected item

       $.ajax({
          type: 'POST',
          url: 'json_getlocation_transfer',  //whatever any url
          data: {label: ui.item.label},
          success: function(message) { 
           // if(message.data == true){
                var availableTagspick_up = message.from;
                $( "#pick_up" ).autocomplete({
                  source: availableTagspick_up
                });
                var availableTagspick_off = message.to;
                $( "#pick_off" ).autocomplete({
                  source: availableTagspick_off
                });
           //   }else{

            //  }
           },
          dataType: 'json'
       });
      }
    });
  } );



$( "#check_availability" ).click(function() {
  //alert( "Handler for .click() called." );
  //$("#div_show_onsearch").css('display','block');
   $("#display_transfer").css('display','none');
    var formData = {
                'destination': $('#firstname').val(),
                'pickdate': $('#pickdate').val(),
                'pick_up': $('#pick_up').val(),
                'pick_off': $('#pick_off').val(),
            };


  $.ajax({
            type: "POST",
            url: "transfer.php",
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
<?php $this->start('scriptBotton'); ?>
<script type="text/javascript">
  $(document).ready(function() {
   // $('#destination').select2();
});
   
</script>
<?php $this->end(); ?>