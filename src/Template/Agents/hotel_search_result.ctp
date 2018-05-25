
 <?php echo $this->Html->script('bootstrap-slider'); ?>
 <?php echo $this->Html->css('bootstrap-slider'); ?>

<?php echo $this->element('search'); ?>

<div class="filter-hotel-table">
	<div class="container">
		<div class="row" style="border-bottom: 1px solid #656565">
			<div class="col-md-6">
				<div class="row" style="height: 80px;">
					<div class="col-md-8">
						<div class="maximum-price">
							<div class="row">
								<div class="col-md-8 text-left"><span><b>Maximum Price</b> per person</span></div>
								<div class="col-md-4 text-right"><span><span id="resultSliderVal">20</span> AUD</span></div>
								<input id="sli-price-acti" type="text" data-slider-min="20" data-slider-max="3610" data-slider-step="10" data-slider-value="20"/>
							</div>
						</div>
					</div>
					<div class="col-md-4" style="border-left: 1px solid #656565">
               <div class="checkbox" style="font-size: 16px;letter-spacing: -1px;">
<p class="style-word-span p-0 m-0">Star Rating</p>
                   <span class="style-word-span-star">1</span><input class="star" type="checkbox" title="bookmark page">
                    <span class="style-word-span-star">2</span><input class="star" type="checkbox" title="bookmark page">
                     <span class="style-word-span-star">3</span><input class="star" type="checkbox" title="bookmark page">
                      <span class="style-word-span-star">4</span><input class="star" type="checkbox" title="bookmark page">
					<span class="style-word-span-star">5</span><input class="star" type="checkbox" title="bookmark page">
                </div>
					</div>
				</div>
			</div>
			<div class="col-md-6" style="border-left: 1px solid #656565">
				<div class="row" style="height: 80px;">
					<div class="col-md-9">
						<div class="row" style="border-bottom: 1px solid #656565;height: 40px;">
							<span class="style-word-span">Property Name</span>
						</div>
						<div class="row">
							<div class="form-input-acti">
							<input class="input-filter-acti form-control21" type="text" name="" placeholder="Filter by activity name..." >
							</div>
						</div>
					</div>
					<div class="col-md-3 p-0" style="border-left: 1px solid #656565">
						<div class="dropdown">
							<button class="hotel-list-drbt" type="button" id="dropdown-button" data-toggle="dropdown" aria-haspopup="true">
							    <span class="hover-icon style-span-srs" style=""><i class="fa default-icon" aria-hidden="true"></i>All Property Types</span>
							</button>
							  <div class="dropdown-menu ul-menuha" aria-labelledby="dropdown-button">
							    <a class="dropdown-item text-center" href="#">
 									<span class="hover-icon style-span-srs"><i class="fa default-icon" aria-hidden="true"></i>All Property Types</span>
							    </a>
							    <a class="dropdown-item text-center" href="#">
 									<span class="hover-icon style-span-srs"><i class="fa hotel-icon" aria-hidden="true"></i>Hotel</span>
							    </a>
							    <a class="dropdown-item text-center" href="#">
 									<span class="hover-icon style-span-srs"><i class="fa apartment-icon" aria-hidden="true"></i>Apartment</span>
							    </a>							    
							  </div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row" style="border-bottom: 1px solid #656565">
			<div class="col-md-6 p-0">
				<div class="dropdownhsr">
					<span class="dropdown-button">Facilities</span>						
					  <ul class="dropdown-list-hsr m-0" id="double-hsr" style="display: none;list-style-type: none;">
					    <li data-value="">Television</li>
					    <li data-value="">Air Conditioning</li>
					    <li data-value="">Minibar/Fridge</li>
					    <li data-value="">Wifi/Internet</li>
					    <li data-value="">Laundry Services</li>
					    <li data-value="">Room Service</li>
					    <li data-value="">Shower</li>
					    <li data-value="">Hair Dryer</li>
					    <li data-value="">Desk</li>
					    <li data-value="">Restaurant/S</li>
					    <li data-value="">Non Smoking Rooms</li>
					    <li data-value="">Tea/Coffee Facilities</li>
					    <li data-value="">Elevator</li>
					    <li data-value="">Tours</li>
					    <li data-value="">Television Lcd/Plasma Screen</li>
					    <li data-value="">Airport Transfer</li>			    
					  </ul>
				</div>
			</div>

			<div class="col-md-6 p-0" style="border-left: 1px solid #656565">
				<div class="dropdownhsr1">
					<span class="dropdown-button1">Areas</span>						
					  <ul class="dropdown-list-hsr1 m-0" id="double-hsr1" style="display: none;list-style-type: none;">
					    <li data-value="">Hanoi</li>
					    <li data-value="">Hoan Kiem</li>
					    <li data-value="">Ba Dinh</li>					    
					  </ul>
				</div>
			</div>
		</div>
	</div>
</div>	


<div class="wraper-display-twt">
	<div class="container p-0">

		<?php //for ($i=0; $i < 4 ; $i++) { 
			if(!is_array($list_hotels)){
				$list_hotels = array($list_hotels);
			}

			foreach ($list_hotels as $key => $list_hotel) {
			//debug($list_hotel);
		?>
   		<div class="card-display-hotel">
   			<div class="row">
   				<div class="col-md-2">
   					<div class="addimage">
   					
   						 <?php echo $this->Html->image('/upload/hotel/'.$list_hotel->hinhanh, ['alt' => $list_hotel->namehotel,'media-simple'=>'true','class'=>'fix-img-display']);?>  
   					</div>
   				</div>
   				<div class="col-md-10">
   					<div class="info-display-hotel">
   						<div class="row">
   							<div class="col-md-8">
   								<h4 class="mauxanh-display-1 m-0"><a href="<?php 
              $hotel_title = $list_hotel->namehotel;
              $hotel_id = $list_hotel->id;
              echo $this->Url->build([
               'controller' => 'Newhotel',
               'action' => 'indexView',
               '?' => array('hotel' => $hotel_title,'stt'=>$hotel_id),
               ]); ?>" ><?php // $hotel_hot_item['namehotel']?><?php echo $list_hotel->namehotel; ?>  </a></h4>
   								<span class="chudam"><?= $list_hotel->diachi; ?></span>
   							</div>
   							<div class="col-md-4 text-right" style="line-height: 25px;">
   									<span class="font-size-display">FROM</span>
   								<div class="price-display">
                            		<span class="chudam"><?php
                            		$price = ($list_hotel->roomrate != "")?$list_hotel->roomrate : 0;
echo $price * $tygia ;
//print_r($tygia);
                            		 //$list_hotel->roomrate; ?></span>
                            		<span><?php echo $language?></span>
                        		</div>
                        			<span class="font-size-display">LOWEST AVG NIGHTLY ROOM RATE</span>
   							</div>
   						</div>

   						  <div class="rating-twt ">
   						  
   						  	<span class="rating<?php echo $key ?>">
   						  		  <script type="text/javascript">
              $(document).ready(function() {
                var ratingValue = <?= $list_hotel->saohotel?>;
                for (var j = 0; j < ratingValue; j++) {
                  jQuery(".rating<?php echo $key ?>").append('<i class="fa fa-star" aria-hidden="true"></i>');
                }
              });
            </script>
   						  	</span>
   						  	
	<img src="img/TA_logo.png" style="width: 13%;padding-left: 10px;">
					
						  </div>
						  <div class="row">
							  <div class="col-md-10 pr-0">
							  		<p class="m-0" style="font-size: 13px;"><?php
							  		$string_text  = strip_tags($list_hotel->mota);
							  	//	print_r($string_text);
							  		echo substr($string_text,0,200)."...";	
							  		// $list_hotel->mota; ?></p>
							  </div>
							  <div class="col-md-2" style="padding-left: 75px;">
							  		<!-- <button class="btn-circle-display" title="Click for more rates & room type options" data-idhotel="<?= $list_hotel->id; ?>"><i class="material-icons fa-fix-display">add</i></button>  -->
							  		<button class="btn-circle-display" title="Click for more rates & room type options" data-idhotel="<?= $list_hotel->id; ?>"><i class="material-icons fa-fix-display" id='icon_button_change<?= $list_hotel->id; ?>'>add</i></button>  	 
							  </div>
						  </div>

   					</div>

   				</div>
   			
  			</div>
  			<div class="div_room_showw<?= $list_hotel->id; ?>">
  					

  			</div>
		</div>
		<?php }?>



	</div>
</div>

<style type="text/css">
.star {
      visibility: hidden;
    font-size: 22px;
    cursor: pointer;
    height: 23px;
    width: 19px;
}
.star:before {
   content: "\2605";
   position: absolute;
   visibility:visible;
   color: #fff;
}
.star:checked:before {
   /*content: "\2606";
   position: absolute;*/
   position: absolute;
    color: #71c2e8;
}
.style-word-span-star{
	color: #fff;
}
h4.mauxanh-display-1.m-0{font-weight:700;padding-bottom:5px;}
a.dropdown-item.text-center{background-color:#555;height:80px;border-bottom:1px solid #777;}
.style-span-srs{color: #fff;font-size: 12px;text-align: center;}
.filter-hotel-table{background-color:#767676;}
.dropdown-item{padding:9px 17px;}
.dropdown-menu.ul-menuha{position:absolute;top:100%;left:0;z-index:1000;float:left;font-size:1rem;color:#212529;text-align:left;list-style:none;background-clip:padding-box;border:1px solid rgba(0,0,0,.15);width:100%;min-width:0;margin:0;padding:0;}
.rating-twt{font-size:14px;}
.mauxanh-display-1{color:#2ca7e0;}
.fix-img-display{width:160px;height:160px;}
.card-display-hotel{background-color:#f9f9f9;margin-bottom:16px;padding:15px;}
.card-display-hotel:hover{background-color:#e6e6e6;}
.mauxanh-display{color:#38a7c6;}
.price-display{color:#2ca7e0;font-size:1.75rem;}
.font-size-display{font-size:12px;color:#777;}
.fa-fix-display{color:#38a7c6;font-size:30px;line-height:49px;}
.search-accom{position:relative;}
#pick-room{position:absolute;width:75%;right:0;background:#fff;z-index:99;line-height:40px;color:#000;}
button.input_room{background:#fff;border:2px solid #eee;height:34px;font-size:15px;text-align:left;color:#2a3c58;margin-top:1px;}
input::placeholder{color:#828282;font-family:Muli!important;font-size:15px;}
.hide{display:none!important;}
.bhoechie-tab-content{display:none;}
.bhoechie-tab-content.active{display:block;}
a.list-group-item.active.text-center.p-4.bhoechie-hv{background-color:#c3c1c1;color:#34383b;font-weight:700;border-color:#c3c1c1;}
.list-group-item.active.text-center.p-4.bhoechie-hv:after{content:'';height:0;display:block;position:absolute;top:31px;left:157px;border-color:transparent transparent transparent #c3c1c1;border-style:solid;border-width:17px;}
h4.fa.fa-2x{color:#34383b;margin:0;padding:0;}
a.list-group-item.text-center.p-4.bhoechie-hv{background:#e2e2e2;color:#34383b;font-weight:700;border:#e2e2e2;}
span.style-sub.text-black{font-weight:700;font-size:17px;}
p.style-p{width:98%;text-align:justify;}
.list-group-item:first-child,.list-group-item:last-child{border-radius:0!important;}
.modal-dialog.modal-dialog-centered{margin:15% auto!important;}
input::-webkit-input-placeholder{color:#2a3c58;}
.maximum-price{font-size:15px;color:#fff;padding:15px 10px;}
.input-filter-acti{width:100%;background:transparent;border:none;height:40px;color:#fff;padding:.375rem .75rem;}
.form-input-acti{width:100%;}
.form-input-acti:hover{-webkit-box-shadow:inset 0 0 0 2px #4bc7dc;-moz-box-shadow:inset 0 0 0 2px #4bc7dc;box-shadow:inset 0 0 0 2px #4bc7dc;}
.form-control21:focus{color:#fff;outline:0;-webkit-box-shadow:inset 0 0 0 2px #4bc7dc;-moz-box-shadow:inset 0 0 0 2px #4bc7dc;box-shadow:inset 0 0 0 2px #4bc7dc;}
.form-input-acti input::placeholder{color:#fff;font-weight:700;font-size:14px;}
.style-word-span{color:#fff;line-height:40px;padding-left:12px;font-weight:700;font-size:14px;}
.hotel-list-drbt{background-color:transparent;border:none;height:80px;width:137px;}
.hover-icon:hover{color:#4bc7dc!important;}
.hover-icon:hover i.default-icon{background:transparent url(/img/blue-icon-hotel.png);}
i.default-icon{display:block;height:32px;width:32px;background:transparent url(img/icon-hotel.png);margin:auto auto 5px;}
.hover-icon:hover i.apartment-icon{background:transparent url(/img/icon-apartment-blue.png);}
.ul-menuha .dropdown-item:hover{background-color:#666!important;}
i.apartment-icon{display:block;height:32px;width:32px;background:transparent url(img/icon-apartment.png);margin:auto auto 5px;}
.hover-icon:hover i.hotel-icon{background:transparent url(/img/blue-icon-hotel-1.png);}
i.hotel-icon{display:block;height:32px;width:32px;background:transparent url(img/icon-hotel-1.png);margin:auto auto 5px;}
.btn-circle-display,.btn-circle-display-minute{width:56px;height:53px;display:block;border-radius:50%;border:1px solid #ccccccd4;box-shadow:inset 0 0 5px #b3b3b3;background-color:#fff;cursor: pointer;}
.btn-circle-display:focus,.input-filter-act input:focus,.hotel-list-drbt:focus{outline:none;}
.slider.slider-horizontal {width: 100%;height: 20px;margin: 0 20px;margin-top: 10px;}
.slider.slider-horizontal .slider-track {height: 5px;width: 100%;margin-top: 0px;top: 40%;left: 0;}
.slider-handle {width: 13px;position: absolute;top: 4px;height: 13px;text-indent: -9999px;left: -4px;background-color: #4bc7dc;
    background-image: linear-gradient(to bottom, #4bc7dc 0%, #4bc7dc 100%);background-repeat: repeat-x;cursor: pointer;    z-index: 0; border: 2px solid #fff; outline: none;border-radius: 12px;}   
.slider-handle:hover {width: 18px;height: 18px;border-radius: 18px;top: 1px;}

 .dropdownhsr,.dropdownhsr1{width: 100%;}
 .dropdownhsr span:hover,.dropdownhsr1 span:hover{color: #4bc7dc;}
 .dropdownhsr span,.dropdownhsr1 span{font-size:14px;background-color:transparent;color:#fff;display:block;padding:10px 10px 9px 25px;font-weight: 700;}
 .dropdownhsr span:after,.dropdownhsr1 span:after{font-family: FontAwesome;content: "\F107";position: absolute;right: 6px;top: 5px;pointer-events: none;font-size: 20px;font-weight: 700;}
 .dropdownhsr span:hover,.dropdownhsr1 span:hover{cursor:pointer;}
 .dropdownhsr span.active:after,.dropdownhsr1 span.active1:after{font-family: FontAwesome;content: "\F106";position: absolute;right: 6px;top: 2px;pointer-events: none;font-size: 20px;font-weight: 700;}
 .dropdownhsr .dropdown-list-hsr,.dropdownhsr1 .dropdown-list-hsr1{position:absolute;top:100%;left:0;width:100%;display:none;z-index:2;max-height:240px;overflow-y:scroll;padding-left: 0;background-color:#555;}
 .dropdownhsr .dropdown-list-hsr li,.dropdownhsr1 .dropdown-list-hsr1 li{font-size:15px;color:#a9a9a9;-webkit-transition:color .2s ease-in-out;-moz-transition:color .2s ease-in-out;-o-transition:color .2s ease-in-out;-ms-transition:color .2s ease-in-out;transition:color .2s ease-in-out;padding:7px 10px 7px 25px;}
 .dropdownhsr .dropdown-list-hsr li:hover,.dropdownhsr1 .dropdown-list-hsr1 li:hover{color:#72d2ff;cursor:pointer;}
 .dropdownhsr .dropdown-list-hsr li,.dropdownhsr1 .dropdown-list-hsr1 li{border-bottom: 1px solid #777;border-right: 1px solid #777;;float: left;display: inline;white-space: nowrap;overflow: hidden;max-width: 267px;text-overflow: ellipsis;}
 #double-hsr li,#double-hsr1 li{width: 50%;color: #fff;}
 #double-hsr li:hover,#double-hsr1 li:hover {background-color: #666;}
</style>
<script type="text/javascript">
	(function() {
  var button, list;
  button = $(".dropdown-button");
  list = $(".dropdown-list-hsr");
  button.on("click", function() {
    list.toggle();
    return button.toggleClass("active");
  });
  // list.children().on("click", function() {
  //   button.html($(this).html());
  //   button.css("color", "#4bc7dc");
  //   list.toggle();
  //   return button.toggleClass("active");
  // });
}).call(this);

		(function() {
  var button, list;
  button = $(".dropdown-button1");
  list = $(".dropdown-list-hsr1");
  button.on("click", function() {
    list.toggle();
    return button.toggleClass("active1");
  });
  // list.children().on("click", function() {
  //   button.html($(this).html());
  //   button.css("color", "#4bc7dc");
  //   list.toggle();
  //   return button.toggleClass("active1");
  // });
}).call(this);

// With JQuery
function formatNumber (num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, "$1,")
}
//jq162 = jQuery.noConflict( true );
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



$( ".btn-circle-display" ).click(function() {
  var id_hotel = $(this).attr("data-idhotel");
var text_check =  $("#icon_button_change"+id_hotel).text();

console.log(text_check);
if(text_check == 'add'){
		$.ajax({
            type: "POST",
            url: "test2.php",
            data:id_hotel,
            contentType: "application/json; charset=utf-8",
            success: function(result) {
                //alert(result);
                $(".div_room_showw"+id_hotel).html(result);
                $("#icon_button_change"+id_hotel).text('remove');
            }
        });
	}else{
		$("#icon_button_change"+id_hotel).text('add');
		$(".div_room_showw"+id_hotel).children().remove();
	}


  
  


});
$("#search_name").focus(function() {
     $("body").css('background', "rgba(0, 0, 0, 0.45)");
     //$(".form-group-search").css('background',"#fff");
     $(".wraper-display-twt").css('opacity', ".3");
     $("nav#mainNav").css('opacity', ".3");
     $(".ihihihih").css('opacity', ".3");
     $("#search_submit").removeAttr("disabled");
 });
 $("#search_name").blur(function() {
     $("body").css('background', "#efefef");
     $(".wraper-display-twt").css('opacity', "1");
     $("nav#mainNav").css('opacity', "1");
     $(".ihihihih").css('opacity', "1");
 });
 $("#search_date_to").focus(function() {
     $("body").css('background', "rgba(0, 0, 0, 0.45)");
     //$(".form-group-search").css('background',"#fff");
     $(".wraper-display-twt").css('opacity', ".3");
     $("nav#mainNav").css('opacity', ".3");
     $(".ihihihih").css('opacity', ".3");
 });
 $("#search_date_to").blur(function() {
     $("body").css('background', "#efefef");
     $(".wraper-display-twt").css('opacity', "1");
     $("nav#mainNav").css('opacity', "1");
     $(".ihihihih").css('opacity', "1");
 });
 $("#search_date_end").focus(function() {
     $("body").css('background', "rgba(0, 0, 0, 0.45)");
     //$(".form-group-search").css('background',"#fff");
     $(".wraper-display-twt").css('opacity', ".3");
     $("nav#mainNav").css('opacity', ".3");
     $(".ihihihih").css('opacity', ".3");
 });
 $("#search_date_end").blur(function() {
     $("body").css('background', "#efefef");
     $(".wraper-display-twt").css('opacity', "1");
     $("nav#mainNav").css('opacity', "1");
     $(".ihihihih").css('opacity', "1");
 });
 $(".input_room").focus(function() {
     $("body").css('background', "rgba(0, 0, 0, 0.45)");
     //$(".form-group-search").css('background',"#fff");
     $(".wraper-display-twt").css('opacity', ".3");
     $("nav#mainNav").css('opacity', ".3");
     $(".ihihihih").css('opacity', ".3");
 });
 $(".input_room").blur(function() {
     $("body").css('background', "#efefef");
     $(".wraper-display-twt").css('opacity', "1");
     $("nav#mainNav").css('opacity', "1");
     $(".ihihihih").css('opacity', "1");
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
    window.location = "/accommodation-hotel-result1";
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