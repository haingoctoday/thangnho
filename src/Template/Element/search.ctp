  <?php echo $this->Html->script('jquery.typeahead.min'); ?>
<?php echo $this->Html->css('jquery.typeahead.min'); ?>
  <?php echo $this->Html->script('jquery-ui'); ?>

<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">  -->
  <link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/start/jquery-ui.css" rel="Stylesheet" type="text/css" />

<?php
$adults = array('1'=>'Adults 1','2'=>'Adults 2','3'=>'Adults 3','4'=>'Adults 4','5'=>'Adults 5','6'=>'Adults 6');
$children = array('0'=>'Children 0','1'=>'Children 1','2'=>'Children 2','3'=>'Children 3','4'=>'Children 4 ');

$session_search = $this->request->session()->read('hotel.search');
//debug($session_search);
if($session_search['room'] != ''){
	$string_text = $session_search['room'].' Room and '.array_sum($session_search['adults_end']). " Adults";
}else{
	$string_text = 'Pick Room and Adults';
}

?>

<div class="search-accom">
  <div class="container">
    <div class="row">
     <form role="form" class="search" id="search_hotel">
      <div class="form-group-search">

       <div class="typeahead__container">
        <div class="typeahead__field ">

          <span class="typeahead__query">
            <input class="input_name fix-height-input" id="search_name" name="search_name" type="text" placeholder="Search by destination, point of interest, hotel or address..." autocomplete="off" value="<?php echo ($this->request->session()->read('hotel.search.search_name')) ?>">
          </span>
          
        </div>
      </div>
      <!-- <input type="text" class="input_name fix-height-input" id="usr" placeholder="Search by destination, point of interest, hotel or address..."> -->
      <input type="text" id="search_date_to" name="search_date_to" class="input_checkin fix-height-input" placeholder="Check in" value="<?php echo ($this->request->session()->read('hotel.search.search_date_to')) ?>">
					<input type="text" id="search_date_end" name="search_date_end" class="input_checkin fix-height-input"  placeholder="Check out" value="<?php echo ($this->request->session()->read('hotel.search.search_date_end')) ?>">
      <select class="input_night icon_moon_input" id="search_night" disabled name="search_night">
       <?php
       for ($num_day=1; $num_day < 32 ; $num_day++) { 
         ?>
         <option value="<?php echo $num_day?>" <?php echo  ($this->request->session()->read('hotel.search.search_night') == $num_day) ? 'selected' : '' ?> ><?php echo $num_day?></span></option>
         <?php
       }
       ?>
       
     </select>
     <!-- <input type="text" class="input_night fix-height-input" id="usr" placeholder=""> -->

     <!-- <input type="text" class="input_room fix-height-input" id="usr" placeholder="1 Room, 2 Adults"> -->
     <button type="button" class=" input_room fix-height-input" data-toggle="collapse" data-target="#pick-room"><?= $string_text?></button>
     <div id="pick-room" class="collapse">
      <div class="panel-body">
        <form action="" >

          <div class="input-group control-group after-add-more p-2 border" id="sophong">
           <!-- <span class="fa fa-close remove col-sm-1"></span> -->
           <span class="col-sm-3 text-center"> Room </span>
           <!--  <input type="text" name="adults[]" class="form-control col-sm-4" placeholder=""> -->
           <?php echo $this->Form->select('adults[]', $adults,['default' => '2','class'=>'form-control col-sm-3 adults']);?>
           <?php echo $this->Form->select('children[]', $children,['class'=>'form-control col-sm-3 ml-2 children']);?>
           <!--  <input type="text" name="children[]" class="form-control col-sm-4 ml-2" placeholder=""> -->
         </div>

         


         <!-- Copy Fields-These are the fields which we get through jquery and then add after the above input,-->
         <div class="copy-fields hide">
          <div class="control-group input-group p-2 border" id="sophong">


            <span class="col-sm-3 text-center"> Room</span>
            <?php echo $this->Form->select('adults[]', $adults,['default' => '2','class'=>'form-control col-sm-3 adults']);?>
            <?php echo $this->Form->select('children[]', $children,['class'=>'form-control col-sm-3 ml-2 children']);?>
            <span class="fa fa-close remove col-sm-1"></span>
          </div>
        </div>

        <div class="bg-h-38">
          <div class=""> 
            <button class="btn add-more btn-am" type="button"><i class="glyphicon glyphicon-plus"></i> Add another room <i class="fa fa-plus-circle" aria-hidden="true" style="font-size: 13px;"></i></button>
          </div>
        </div>
      </div>
    </div>

    <!-- <button class="btn border-0 nen-maucam" style="height: 34px;color: #fff;">Search</button> -->
    <!-- <input type="button" class="button_search-twt" id="search_submit"  value="Search"> -->
    <button class="button_search-twt" id="search_submit" type="submit">Search</button>
  </div>
</form>
</div>
</div>
</div>

<style type="text/css">
	button.btn.add-more.btn-am {float: right;color: rgb(255, 255, 255);background: rgb(10, 144, 227);display: block;}
.bg-h-38{background: #0a90e3;width: 100%;height: 38px;}
.input_night.icon_moon_input{height: 34px;font-weight: 600;font-size: 15px;}
.typeahead__container{float: left;margin-right: 4px;margin-top: 1px;}
.form-group-search{padding: 32px 10px 32px 10px;}
.search-accom{position: relative;/*background-color: #2a3c58;*/}
#pick-room{position: absolute;width: 75%;right: 0;background: #fff;z-index: 99;line-height: 40px;color:#000;}
button.input_room {background: #fff;border: 2px solid rgb(238, 238, 238);height: 34px;font-size: 15px;text-align: left;color: #2a3c58;margin-top: 1px;}
input::placeholder {color: #828282; font-family: "Muli" !important; font-size: 15px;}
.hide {display: none!important;}
.bhoechie-tab-content {display: none;}
.bhoechie-tab-content.active {display: block;}
a.list-group-item.active.text-center.p-4.bhoechie-hv {background-color: #c3c1c1;border-color: #c3c1c1;color: #34383b;  font-weight: bold;}
.list-group-item.active.text-center.p-4.bhoechie-hv:after {content: '';height: 0;display: block;border-color: transparent transparent transparent #c3c1c1;border-width: 17px;border-style: solid;position: absolute;top: 31px;left: 157px;}
h4.fa.fa-2x {color: #34383b;padding: 0;margin: 0;}
a.list-group-item.text-center.p-4.bhoechie-hv {background: #e2e2e2; color: #34383b; font-weight: bold;border: #e2e2e2;}
span.style-sub.text-black {font-weight: bold;font-size: 17px;}
p.style-p{width: 98%;text-align: justify;}
.list-group-item:first-child,.list-group-item:last-child{border-radius: 0 !important;}
.modal-dialog.modal-dialog-centered {margin: 15% auto !important;}
input::-webkit-input-placeholder {color: #2a3c58;}
.ui-widget-header {
    background: none;
    color: black;
    font-size: 16px;
    border: none;
    padding: 22px 0px 12px 0px !important;

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
    padding: 8px;
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
</style>