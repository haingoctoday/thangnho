<?php echo $this->Html->script('bootstrap-datepicker.min'); ?>
<?php echo $this->Html->script('jquery.typeahead.min'); ?>
<?php echo $this->Html->css('jquery.typeahead.min'); ?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
<?php
$adults = array('1'=>'Adults 1','2'=>'Adults 2','3'=>'Adults 3','4'=>'Adults 4','5'=>'Adults 5','6'=>'Adults 6');
$children = array('0'=>'Children 0','1'=>'Children 1','2'=>'Children 2','3'=>'Children 3','4'=>'Children 4 ');
?>

<div class="search-accom">
  <div class="container">
    <div class="row">
     <form role="form" class="search" id="search_hotel">
      <div class="form-group-search">

       <div class="typeahead__container">
        <div class="typeahead__field ">

          <span class="typeahead__query">
            <input class="input_name fix-height-input" id="search_name" name="search_name" type="text" placeholder="Search by destination, point of interest, hotel or address..." autocomplete="off">
          </span>
          
        </div>
      </div>
      <!-- <input type="text" class="input_name fix-height-input" id="usr" placeholder="Search by destination, point of interest, hotel or address..."> -->
      <input type="text" id="search_date_to" name="search_date_to" class="input_checkin fix-height-input" placeholder="Check in">
      <input type="text" id="search_date_end" name="search_date_end" class="input_checkin fix-height-input"  placeholder="Check out">
      <select class="input_night icon_moon_input" id="search_night" disabled name="search_night">
       <?php
       for ($num_day=1; $num_day < 32 ; $num_day++) { 
         ?>
         <option value="<?php echo $num_day?>" ><?php echo $num_day?></span></option>
         <?php
       }
       ?>
       
     </select>
     <!-- <input type="text" class="input_night fix-height-input" id="usr" placeholder=""> -->

     <!-- <input type="text" class="input_room fix-height-input" id="usr" placeholder="1 Room, 2 Adults"> -->
     <button type="button" class=" input_room fix-height-input" data-toggle="collapse" data-target="#pick-room">Pick Room and Adults</button>
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


<div class="wraper-display-twt">
  <div class="container">
    <div class="row">


      <?php
      foreach($hotel_hot as $key => $hotel_hot_item){
        ?>


        <div class="card-twt pr-0 col-12 col-md-6 col-lg-4" id="fix-card-hotel">
          <div class="card-wrapper" style="padding-bottom: 38px;">
            <div class="card-img">
             <?php echo $this->Html->image('/upload/hotel/'.$hotel_hot_item['hinhanh'], ['alt' => $hotel_hot_item['namehotel'],'media-simple'=>'true']);?>  
           </div>
           <div class="card-box text-center px-3">
            <div class="height-h-twt">
              <h4 class="mauxanh"><a href="<?php 
              $hotel_title = $hotel_hot_item['namehotel'];
              $hotel_id = $hotel_hot_item['id'];
              echo $this->Url->build([
               'controller' => 'Newhotel',
               'action' => 'indexView',
               '?' => array('hotel' => $hotel_title,'stt'=>$hotel_id),
               ]); ?>" ><?= $hotel_hot_item['namehotel']?> </a></h4>
               <h4 class="mauxanh"><?= $hotel_hot_item['diachi']?></h4>
             </div>
             <div class="rating-twt py-3 rating<?= $key?>">

             </div>
             <script type="text/javascript">
              $(document).ready(function() {
                var ratingValue = <?= $hotel_hot_item['saohotel']?>;

                for (var j = 0; j < ratingValue; j++) {
                  jQuery(".rating<?= $key?>").append('<i class="fa fa-star maucam" aria-hidden="true"></i>');
                }
              });
            </script>

            <div class="height-p-twt">
              <p class="" ><?= h($hotel_hot_item['mota'])?></p>
              
            </div>
            <div class="copy-fade"></div>
          </div>
          <div class="col-md-5 text-center mx-auto">
            <button class="btn-block border-0 nen-maucam button-bk-twt">BOOK NOW</button>
          </div>
        </div>
      </div>
      <?php
    }
    ?>





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
/*input#search_name {
    color: #000000 !important;
    background: #fff;
    border: 2px solid rgb(238, 238, 238);
    height: 34px;
    font-weight: 600;
    font-size: 15px;
    text-align: left;
    font-family: "Muli" !important;
    }*/
</style>


<script type="text/javascript">
 $("#search_name" ).focus(function() {
  $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
      });
 $( "#search_name" ).blur(function() {
  $("body").css('background',"#efefef");
  $(".wraper-display-twt").css('opacity',"1");
  $("nav#mainNav").css('opacity',"1");
  $(".ihihihih").css('opacity',"1");
});
 $("#search_date_to" ).focus(function() {
  $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
      });
 $( "#search_date_to" ).blur(function() {
  $("body").css('background',"#efefef");
  $(".wraper-display-twt").css('opacity',"1");
  $("nav#mainNav").css('opacity',"1");
  $(".ihihihih").css('opacity',"1");
});
 $("#search_date_end" ).focus(function() {
  $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
      });
 $( "#search_date_end" ).blur(function() {
  $("body").css('background',"#efefef");
  $(".wraper-display-twt").css('opacity',"1");
  $("nav#mainNav").css('opacity',"1");
  $(".ihihihih").css('opacity',"1");
});
 $(".input_room" ).focus(function() {
  $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
      });
 $( ".input_room" ).blur(function() {
  $("body").css('background',"#efefef");
  $(".wraper-display-twt").css('opacity',"1");
  $("nav#mainNav").css('opacity',"1");
  $(".ihihihih").css('opacity',"1");
});
 
 var count=0;
 $(document).ready(function() {
  $(".add-more").click(function(){ 
    
    if(count < 4){
      count++;
      var html = $(".copy-fields").html();
      $(".after-add-more").after(html);

    }
    if(count == 4){

     $(".add-more").css("display","none");
   }
 });
  $("body").on("click",".remove",function(){ 
    if(count >= 1){
     count--;
     $(this).parents(".control-group").remove();
     $(".add-more").css("display","block");
   }
   
 });

});
 var nowTemp = new Date();
 var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

 var checkin = $('#search_date_to').datepicker({
   format: 'dd M yyyy',
   beforeShowDay: function(date) {
    return date.valueOf() >= now.valueOf();
  },
  autoclose: true

}).on('changeDate', function(ev) {
  if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

    var newDate = new Date(ev.date);
    newDate.setDate(newDate.getDate() + 1);
    checkout.datepicker("update", newDate);

  }
  $('#search_date_end')[0].focus();
});


var checkout = $('#search_date_end').datepicker({
  format: 'dd M yyyy',
  beforeShowDay: function(date) {
    if (!checkin.datepicker("getDate").valueOf()) {
      return date.valueOf() >= new Date().valueOf();
    } else {
      return date.valueOf() > checkin.datepicker("getDate").valueOf();
    }


  },
  autoclose: true

}).on('changeDate', function(ev) {

  var start = $("#search_date_to").datepicker("getDate");
  var end = $("#search_date_end").datepicker("getDate");
  var days = (end - start) / (1000 * 60 * 60 * 24);
  console.log(days);
  $("#search_night").val(days);
});
$.typeahead({
  input: '#search_name',
  minLength: 1,
  maxItem: 8,
  maxItemPerGroup: 5,
  order: "asc",
  hint: true,
  filter: true,     
    // cache: true,
    group: {
      key: "phanloai",
      template: function (item) {
       
        var division =  item.phanloai;
        if (division == 'diachi') {
          division = "Address";
        } else if (division == 'hotel') {
          division = "Hotel";
        }
        
        return division;
      }
    },
    display: ["name"],

    template: '<span>' +
    
    '<span class="team-logo">' +
    
    '<img src="{{hinhanh}}">' +
    '</span>' +
    '<span class="name">{{name}}</span>' +
    '</span>',
    correlativeTemplate: true,
    source: {
      teams: {
        url: "/jquerytypeahead/beer_v1.json"
      }
    }
  });


$('#search_hotel').submit(function(event) {
  var adults = $('.adults option:selected').map(function(idx, elem) {
    return $(elem).val();
  }).get();
  var ne_adults = adults.slice(0, -1);
  
  var childrens = $('.children option:selected').map(function(idx, elem) {
    return $(elem).val();
  }).get();
  var ne_childrens = childrens.slice(0, -1);
  var sophong = ne_adults.length;
  var $inputs = $('#search_hotel :input');
    var values = {};
    $inputs.each(function() {
      values[this.name] = $(this).val();
    });
    values['room'] = sophong;
    values['adults_end'] = ne_adults;
    values['children_end'] = ne_childrens;
    console.log(values);

    $.post("api_search_hotel",
    {
        data: values
    },
    function(data, status){
      console.log(data['status']);
        $("body").css('background',"rgba(0, 0, 0, 0.45)");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
        $(".search-accom").css('opacity',".3");
        $(".div_load_ai").css('display',"block");
        setTimeout(sample, 4000); 
    });
    event.preventDefault();
  });
function sample() {
    window.location = "/accommodation-hotel-result";
}
</script>

<div class="div_load_ai">
  <?php echo $this->Html->image('/img/icon_load.gif', ['alt' => 'load','media-simple'=>'true']);?>  
  </div>
  <style type="text/css">

.div_load_ai{
  display: none;
  position: absolute;
    top: 40%;
    left: 40%;
    background: #00aef0;
    width: 300px;
}
.div_load_ai img{
      width: 200px;
    margin: 10px 0 10px 50px;
}

  </style>