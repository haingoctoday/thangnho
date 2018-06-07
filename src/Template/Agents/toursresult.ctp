 <?php echo $this->Html->script('bootstrap-slider'); ?>
 <?php echo $this->Html->css('bootstrap-slider'); ?>

      <!-- div banner -->
   
<?php echo $this->element('searchactivity'); ?>
<div class="filter-name-tour">
	<div class="container">
		<div class="row">
			<div class="col-lg-4">
				<div class="maximum-price">
					<div class="row">
						<div class="col-md-8 text-left"><span><b>Maximum Price</b> per night</span></div>
						<div class="col-md-4 text-right"><span><span id="resultSliderVal">20</span> AUD</span></div>
						<input id="sli-price-acti" type="text" data-slider-min="20" data-slider-max="3610" data-slider-step="10" data-slider-value="20"/>
					</div>
				</div>
			</div>
			<div class="col-md-8 border-trs-md8">
				<div class="row">
					<div class="form-input-acti">
           <input class="input-filter-acti form-control21 input_filter" style="height: 71px;" type="text" name="" placeholder="Filter by activity name..." >
           <!-- <i class="fa fa-pencil" aria-hidden="true"></i> -->
         </div>
       </div>
     </div>
   </div>
 </div>
</div>

<div class="wraper-display-tour-result">
	<div class="result-sortby">
		<div class="container">
      <div class="row" style="padding-bottom: 20px;padding-top: 10px;">
       <div class="col-md-6 text-left">
        <div class="sort-by-tour">
         <div class="input-group">
           <span style="line-height: 32px;padding-left: 5px;padding-top: 1px;">Sort by</span>
              <div class='dropdowntbn hvtbn'>
                <label>Ratings</label>
                <ul class="border-tbn-ul">
                  <li data-value="value 1">Ratings</li>
                  <li data-value="value 1">Low to High</li> 
                  <li data-value="value 1">High to Low</li>
                </ul>
              </div>
         </div>
       </div>
     </div>
     <div class="col-md-6 text-right">
      <div class="result-activities">
       <span>759</span>
       <span>activities in </span>
       <span>Hanoi</span>
     </div>
   </div>
 </div>
</div>
</div>


<div class="listing-activities" id="listing-activities-twt">
 <div class="container">
  <div class="row">
   <?php //for ($i=0; $i < 6; $i++) { 
    				# code...
    foreach ($list_hotels as $key => $valuelist_hotels) {
      
     ?>
     <div class="col-md-4 pr-0">
      <div class="card-listing-activities">
       <div class="img-list">
        <img src="img/Tour_Listing_03.png" class="fix-img-list">
        <div class="overlay">
          <div class="text">BOOK NOW</div>
        </div>
      </div>
      <div class="content-list" style="">
        <div class="border-bottom-card-list">
          <h4 class="m-0 title-head-trs"><a href="<?php 
              $hotel_title = $valuelist_hotels->name;
              $hotel_id = $valuelist_hotels->id;
              echo $this->Url->build([
               'controller' => 'Agents',
               'action' => 'toursbooknow',
               '?' => array('activity' => $hotel_title,'stt'=>$hotel_id),
               ]); ?>"><?=  $valuelist_hotels['name']?></a></h4>
          <span class="style-sp-list"><?=  $valuelist_hotels['diachi']?></span>
          <p class="style-list-acti"><?=  substr(strip_tags($valuelist_hotels['mota']),0,100)."..."?></p>
          <div class="time-listing-activities">
           <span class="style-day-list"><?=  $valuelist_hotels['songay']?></span>
           <i class="fa fa-clock-o fa-fw" style="color: #999;" aria-hidden="true"></i>
         </div>
       </div>

     </div>

     <div class="end-card-list"> 
      <div class="row">
        <div class="col-md-6 rating-heart-activities text-left">
          <?php
            for ($star_i=0; $star_i < $valuelist_hotels['danhgia']; $star_i++) { 
          ?>
          <i class="fa fa-heart" aria-hidden="true"></i>
         <?php } ?>
        </div>
        <div class="col-md-6 price-listing-activities text-right">
          <span class="font-size-22 chudam"><?php $price = ($valuelist_hotels['giatien'] != "")?$valuelist_hotels['giatien'] : 0;
echo $price * $tygia ;  ?></span>
          <span class="font-size-22"><?php echo $language ?></span>
        </div>
      </div>
    </div>
  </div>
</div>
<?php }?>

</div>
</div>
</div>




</div>

  <script type="text/javascript">
    $( "#btn-tour-type" ).click(function() {
  var hClass = $(this).hasClass('ditme');
  if(!hClass){
     $( "#div-show-1" ).addClass("offset-md-2");
     $( "#btn-tour-type" ).addClass("ditme");
     $( "#pick-input-tourtype" ).css("display","none");
   }else{
       $( "#div-show-1" ).removeClass("offset-md-2");
       $( "#btn-tour-type" ).removeClass("ditme");
       $( "#pick-input-tourtype" ).css("display","block");
     }
   });
    $( "#btn-tour-type1" ).click(function() {
    var hClassa = $(this).hasClass('ditmea');
    if(!hClassa){
       $( "#btn-tour-type1" ).addClass("ditmea");
       $( "#pick-input-tourtype1" ).css("display","none");
     }else{
         $( "#btn-tour-type1" ).removeClass("ditmea");
         $( "#pick-input-tourtype1" ).css("display","block");
       }
     });
   $( ".item-tour-type" ).click(function() {
    var text_type = $(this).text();
    $( "#text-type" ).text(text_type);
     $( "#pick-input-tourtype" ).css("display","none");
     $( "#btn-tour-type" ).addClass("ditme");
      $( "#div-show-1" ).addClass("offset-md-2");
     });
      $( ".item-tour-type1" ).click(function() {
    var text_style = $(this).text();
    $( "#text-style" ).text(text_style);
    $( "#btn-tour-type1" ).addClass("ditmea");
       $( "#pick-input-tourtype1" ).css("display","none");
     });
    $( ".item-tour-des" ).click(function() {
    var text_des = $(this).text();
    $( "#texxt-search" ).val(text_des);
     $( ".button_search-twt11" ).trigger( "click" );
     });
     $("#texxt-search" ).focus(function() {
        $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
          $("#fix-white").css('opacity',".3");
      });
    $( "#texxt-search" ).blur(function() {
      $("body").css('background',"#efefef");
      $(".wraper-display-twt").css('opacity',"1");
      $("nav#mainNav").css('opacity',"1");
      $(".ihihihih").css('opacity',"1");
       $("#fix-white").css('opacity',"1");
    });

// With JQuery
function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}

$("#sli-price-acti").slider({
	tooltip: 'always'
});
$("#sli-price-acti").on("slide", function(slideEvt) {
	var abc = slideEvt.value;
	if(abc == '3610'){
		abc = 'Max';
	}
	$("#resultSliderVal").text(formatNumber(abc));
});

var dropdowntbn = document.querySelector('.dropdowntbn'),
    dropdown_ul = dropdowntbn.querySelector('ul');

dropdowntbn.addEventListener('click', function() {
  if(dropdown_ul.offsetLeft < 0) {
    dropdown_ul.style.left = '0';
    dropdown_ul.style.right = '0';
    dropdown_ul.stle.display = 'static';
  } else {
    dropdown_ul.style.left = '-9999px';
    dropdown_ul.style.right = '';
    dropdown_ul.stle.display = 'absolute';
  }
});


$('.dropdowntbn li').each(function() {
  $(this).click(function() {
    $('.dropdowntbn label').text($(this).text());
  });
});

 </script>
<style type="text/css">
.font-size-22{font-size: 22px;}
.end-card-list .row{padding: 5px 20px 10px 15px;}
.title-head-trs{font-size: 18px;font-weight: 600;padding: 5px 0;}
.border-trs-md8{border-left: 1px solid #656565;}
.filter-name-tour{background-color: #777777}
#texxt-search:focus{outline:none;box-shadow:none;border:1px;}
input#texxt-search{border:none;}
.button-tour{width:160px;height:40px;color:#828282;background:#fff;text-align:left;font-weight:700;font-size:15px;border-radius:0;}
.item-tour-type,.item-tour-type1,.item-tour-des{padding-left:10px;padding-top:3px;font-size:14px;padding-bottom:3px;letter-spacing:-.5px;cursor:pointer;}
.item-tour-type:hover,.item-tour-type1:hover,.item-tour-des:hover{color:#000;background-color:#fff;}
#icon-input-tour{background-image:url(../img/arrow-down.png);background-repeat:no-repeat;background-position:4px 15px;}
input.button_search-twt11{background-color:#fff;border:0;background-image:url(../img/arrow-down.png);background-repeat:no-repeat;background-position:4px 15px;width:27px;background-size:19px;}
.style-drop-type{background-color:#48678a;position:absolute;z-index:99;border:1px solid #ccc;color:#fff;width:94%;}
.item-drop-tour{width:100%;}
div#text-type,div#text-style{width:100px;white-space:nowrap;overflow:hidden;text-overflow:clip;float:left;}
.wraper-display-tour-result{background-color:#f5f5f5;border:1px solid #dcdcdc;}
.sort-by-tour{font-size:14px;}
.result-activities{font-size:14px;line-height:32px;}
.drop-sort-by-tour{border:none;color:#38a7c2;padding-top:6px;padding-left:15px;}
.form-control-sort-by{display:block;width:100%;font-size:14px;line-height:1.5;background-color:#fff;border:none;color:#111;font-weight:700;cursor:pointer;padding:.375rem .75rem;}
.form-control-sort-by:hover{color:#38a7c2;}
.fix-img-list{height:200px;width:100%;}
.card-listing-activities{background-color:#fff;border:none;border-radius:0;box-shadow:0 0 2px 1px hsla(0,0%,47%,.3);margin-bottom:35px;position:relative;}
.card-listing-activities:hover{box-shadow:0 0 4px 3px hsla(0,0%,47%,.3);}
select#jjkk1{-webkit-appearance:button;-webkit-border-radius:0;-webkit-padding-end:20px;-webkit-padding-start:2px;-webkit-user-select:none;background-image:url(img/arrow-down-blue.png), 0;background-position:100% center;background-repeat:no-repeat;overflow:hidden;text-overflow:ellipsis;white-space:nowrap;height:32px;border:none;font-size:14px;padding:5px 10px;}
.content-list{padding:10px 20px;}
.time-listing-activities{text-align:right;}
.rating-heart-activities{color:red;padding-top:5px;font-size:15px;}
.border-bottom-card-list{padding-bottom:5px;}
.end-card-list{border-top:1px solid #555;}
.style-list-acti{font-size:12px;font-weight:300;letter-spacing:.5px;margin-bottom:0;padding-top:5px;}
.overlay{position:absolute;bottom:251px;background:rgba(0,0,0,0.5);width:100%;transition:.5s ease;opacity:0;color:#FFF;font-size:20px;text-align:right;font-weight:700;padding:10px 15px;}
.card-listing-activities:hover .overlay{opacity:1;}
.style-sp-list{color:#999;font-size:14px;font-weight:600;text-transform:capitalize;}
.style-day-list{font-size:12px;font-weight:900;color:#999;}
.hhh-from{color:#91928e;font-size:10px;vertical-align:top;line-height:30px;}
.maximum-price{font-size:15px;color:#fff;padding:10px;}
.input-filter-acti{width:100%;background:transparent;border:none;height:38px;color:#fff;font-size:14px;padding:.375rem 3rem .375rem 1.75rem;}
.form-input-acti{border-bottom:1px solid #666;width:100%;}
.form-input-acti:hover{-webkit-box-shadow:inset 0 0 0 2px #4bc7dc;-moz-box-shadow:inset 0 0 0 2px #4bc7dc;box-shadow:inset 0 0 0 2px #4bc7dc;}
.form-control21:focus{color:#fff;outline:0;-webkit-box-shadow:inset 0 0 0 2px #4bc7dc;-moz-box-shadow:inset 0 0 0 2px #4bc7dc;box-shadow:inset 0 0 0 2px #4bc7dc;}
.form-input-acti input::placeholder{color:#fff;font-weight:700;font-size:14px;}
#listing-activities-twt:last-child{padding-right:15px!important;}
select#jjkk{background-image:url(img/img-arrow-down.png);background-repeat:no-repeat;background-position:100px;width:120px;line-height:18px;background-color:#f5f5f5;font-size:15px;-webkit-appearance:none;outline:none;border:none;font-weight:700;}
select#jjkk:hover{color:#4bc7dc;}
#pick-input-tourtype,#pick-input-tourtype1{display:none;position:relative;}
.form-control-sort-by:focus,select#jjkk1:focus,.input-filter-acti input:focus{outline:none;}
.slider.slider-horizontal {width: 100%;height: 20px;margin: 0 20px;margin-top: 10px;}
.slider.slider-horizontal .slider-track {height: 5px;width: 100%;margin-top: 0px;top: 40%;left: 0;}
.slider-handle {width: 13px;position: absolute;top: 4px;height: 13px;text-indent: -9999px;left: -4px;background-color: #4bc7dc;background-image: linear-gradient(to bottom, #4bc7dc 0%, #4bc7dc 100%);background-repeat: repeat-x;cursor: pointer;z-index: 0;border: 2px solid #fff;outline: none;border-radius: 12px;}   
.slider-handle:hover {width: 18px;height: 18px; border-radius: 18px; top: 1px;}

.dropdowntbn,.dropdowntbn label,.dropdowntbn ul,.dropdowntbn li{margin: 0;padding: 0;outline: 0;}
.border-tbn-ul{border: 1px solid #d5d5d5;}
.hvtbn label:hover{border: none;color: #38a7c2;}
.dropdowntbn ul li:hover{background-color: #efefef;}
.dropdowntbn {position: relative;display: inline-block;vertical-align: middle;width: 115px;z-index: 999;margin-left: 10px;}
.dropdowntbn label {padding: 0.5em;display: block;font-size: inherit;padding-right: 2em;cursor: pointer;overflow: hidden;font-weight: 700;}
.dropdowntbn ul li {list-style: none;padding: 0.3em 0.5em;display: block;font-size: inherit;background: #fff;cursor: pointer;width: 100%;}
.dropdowntbn ul {position: absolute;left: -9999px;}
.dropdowntbn:after{font-family: FontAwesome;content: "\F107";color: #4bc7dc;position: absolute;right: 6px;top: 2px;pointer-events: none;font-size: 20px;font-weight: 700;}
.form-input-acti:after{font-family: FontAwesome;content: "\f040";position: absolute;right: 15px;top: 20px;pointer-events: none;font-size: 22px;color: #fff;}
</style>
<script type="text/javascript">
  $('.input_filter').keyup(function(){
    var valThis = $(this).val().toLowerCase();
    console.log(valThis);
    if(valThis == ""){
        $('.listing-activities > div > div > div').show();
    } else {
        $('.title-head-trs a').each(function(){
           var text = $(this).text().toLowerCase();
            console.log(this);
           (text.indexOf(valThis) >= 0) ? $(this).parent().parent().parent().parent().parent().show() : $(this).parent().parent().parent().parent().parent().hide();
        });
   };
});
</script>