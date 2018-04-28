<?php echo $this->Html->script('bootstrap-datepicker.min'); ?>
<?php echo $this->Html->script('jquery.typeahead.min'); ?>
<?php echo $this->Html->css('jquery.typeahead.min'); ?>
 <?php echo $this->Html->script('bootstrap-slider'); ?>
 <?php echo $this->Html->css('bootstrap-slider'); ?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/css/datepicker.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.2/js/bootstrap-select.min.js"></script>

<?php
$adults = array('1'=>'Adults 1','2'=>'Adults 2','3'=>'Adults 3','4'=>'Adults 4','5'=>'Adults 5','6'=>'Adults 6');
$children = array('0'=>'Children 0','1'=>'Children 1','2'=>'Children 2','3'=>'Children 3','4'=>'Children 4 ');


?>

<div class="search-accom">
	<div class="container">
		<div class="row">
			<form role="form" class="search" id="search_hotel">
				<div class="form-group-search" style="padding: 32px 10px 32px 10px;">

					<div class="typeahead__container " style="float: left;margin-right: 4px;margin-top: 1px;">
						<div class="typeahead__field ">

							<span class="typeahead__query">
								<input class="input_name fix-height-input" id="search_name" name="search_name" type="text" placeholder="Search by destination, point of interest, hotel or address..." autocomplete="off">
							</span>

						</div>
					</div>



					<!-- <input type="text" class="input_name fix-height-input" id="usr" placeholder="Search by destination, point of interest, hotel or address..."> -->
					<input type="text" id="search_date_to" name="search_date_to" class="input_checkin fix-height-input" placeholder="Check in">
					<input type="text" id="search_date_end" name="search_date_end" class="input_checkin fix-height-input"  placeholder="Check out">
					<select class="input_night icon_moon_input" id="search_night" disabled name="search_night" style="height: 34px;font-weight: 600;font-size: 15px;">
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

								<div style="background: #0a90e3;width: 100%;height: 38px;">
									<div class=""> 
										<button class="btn add-more" type="button" style="float: right;color: rgb(255, 255, 255);background: rgb(10, 144, 227);display: block;"><i class="glyphicon glyphicon-plus"></i> Add another room <i class="fa fa-plus-circle" aria-hidden="true" style="font-size: 13px;"></i></button>
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

                    <label class="pl-2 pr-2">
                        <input type="checkbox" value="">
                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Family
                    </label>
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

		<?php for ($i=0; $i < 4 ; $i++) { 
		?>
   		<div class="card-display-hotel">
   			<div class="row">
   				<div class="col-md-2">
   					<div class="addimage">
   						<img class="fix-img-display" src="img/demo1.png">
   					</div>
   				</div>
   				<div class="col-md-10">
   					<div class="info-display-hotel">
   						<div class="row">
   							<div class="col-md-8">
   								<h4 class="mauxanh-display-1 m-0">Hilton Hanoi Opera</h4>
   								<span class="chudam">Hanoi</span>
   							</div>
   							<div class="col-md-4 text-right" style="line-height: 25px;">
   									<span class="font-size-display">FROM</span>
   								<div class="price-display">
                            		<span class="chudam">140</span>
                            		<span>AUD</span>
                        		</div>
                        			<span class="font-size-display">LOWEST AVG NIGHTLY ROOM RATE</span>
   							</div>
   						</div>

   						  <div class="rating-twt">
						  		<i class="fa fa-star" aria-hidden="true"></i>
						  		<i class="fa fa-star" aria-hidden="true"></i>
						  		<i class="fa fa-star" aria-hidden="true"></i>
						  		<i class="fa fa-star" aria-hidden="true"></i>
						  		<i class="fa fa-star-o" aria-hidden="true"></i>
						  		<img src="img/TA_logo.png" style="width: 13%;padding-left: 10px;">
						  </div>
						  <div class="row">
							  <div class="col-md-10 pr-0">
							  		<p class="m-0" style="font-size: 13px;">Set in a prime location of Darwin, Skycity Darwin Hotel puts everything the city has to offer just outside your doorstep. Offering a ...</p>
							  </div>
							  <div class="col-md-2" style="padding-left: 75px;">
							  		<button class="btn-circle-display" title="Click for more rates & room type options"><i class="material-icons fa-fix-display">add</i></button>  	 
							  </div>
						  </div>
   					</div>
   				</div>
  			</div>
		</div>
		<?php }?>



	</div>
</div>

<style type="text/css">
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
  list.children().on("click", function() {
    button.html($(this).html());
    button.css("color", "#4bc7dc");
    list.toggle();
    return button.toggleClass("active");
  });
}).call(this);

		(function() {
  var button, list;
  button = $(".dropdown-button1");
  list = $(".dropdown-list-hsr1");
  button.on("click", function() {
    list.toggle();
    return button.toggleClass("active1");
  });
  list.children().on("click", function() {
    button.html($(this).html());
    button.css("color", "#4bc7dc");
    list.toggle();
    return button.toggleClass("active1");
  });
}).call(this);

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

$(document).ready(function(){
 $('.selectpicker').selectpicker();

 $('#framework').change(function(){
  $('#hidden_framework').val($('#framework').val());
 });

 $('#multiple_select_form').on('submit', function(event){
  event.preventDefault();
  if($('#framework').val() != '')
  {
   var form_data = $(this).serialize();
   $.ajax({
    url:"insert.php",
    method:"POST",
    data:form_data,
    success:function(data)
    {
     //console.log(data);
     $('#hidden_framework').val('');
     $('.selectpicker').selectpicker('val', '');
     alert(data);
    }
   })
  }
  else
  {
   alert("Please select framework");
   return false;
  }
 });
});



</script>