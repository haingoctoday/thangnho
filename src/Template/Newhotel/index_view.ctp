
<?php echo $this->element('search'); ?>

                <!-- descript hotel -->
        <div class="wraper-descript">
          <!-- <div class="header-descript" style="padding-left: 20px;padding-right: 20px;padding-top: 15px;padding-bottom: 15px;"> -->
                <div class="row m-0">
                    <div class="col-md-9 col-xs-12" style="background: #f5f5f5;padding-top: 30px;padding-bottom: 10 px;">
                        <h3 class="mauxanh"><?= h($newhotel->namehotel)?></h3>
                        <?php 
                        if($newhotel->discount > 0){
                         ?>
                        
    <div class="discount_hotel">Discount <?= h($newhotel->discount)?>%</div>
    <?php } ?>
                        <span class="style-sub-twt"><?= h($newhotel->diachimap)?></span>

                        <p class="ratings pt-3 m-0 maucam" data-bind="rating: rating">
    <?php
    //print($newhotel->saohotel);
     for ($value_saohotel=0; $value_saohotel < $newhotel->saohotel ; $value_saohotel++) { 
          # code...
    //  } ($newhotel->saohotel as $key => $value_saohotel) {
     ?>
      <i class="fa fa-star pr-1"></i>
     <?php
    } ?>
                        </p>

                  
                      <p class="style-p-twt"><?= htmlspecialchars_decode($newhotel->mota)?></p>
                        <span class="style-sub-twt">Download the pdf of the hotel info <a style="color: #707070" href="">here</a></span>
                    </div>
                    <div class="col-md-3 col-xs-12" style="background: #fff;padding-top: 30px;padding-bottom: 10px;">
                      <div class="aaasss" style="background: #f5f5f5">
                                                <div id="carouselControls" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner" role="listbox">
                                <div class="carousel-item active">
                                  <?php echo $this->Html->image('/upload/hotel/'.$newhotel->hinhanh, ['alt' => 'hinhanh','class'=>'d-block img-fluid']);?>
                                </div>
                               <!--  <div class="carousel-item">
                                    <img class="d-block img-fluid" src="img/02.jpg">
                                </div>
                                <div class="carousel-item">
                                    <img class="d-block img-fluid" src="img/03.jpg">
                                </div> -->
                            </div>
                            <a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                            <a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                        </div>
                      </div>

                    </div>
                </div>
             <!-- </div>  -->


            <!-- data bhoe -->
            <div class="bhoechie-tab-container">
                <div class="row">
                    <div class="col-2 bhoechie-tab-menu">
                        <div class="list-group">
                            <a href="#" class="list-group-item active text-center p-3 bhoechie-hv">
                                <h4 class="fa fa-info-circle fa-2x"></h4><br/>Description
                            </a>
                            <a href="#" class="list-group-item text-center p-3 bhoechie-hv">
                                <!-- <h4 class="fa fa-pie-chart fa-2x"></h4><br/>Facilities -->
                                <img class="sa" src="img/faci.png"><br/>Facilities
                            </a>
                            <a href="#" class="list-group-item text-center p-3 bhoechie-hv">
          <img class="sa" src="img/map.png"></h4><br/>Map
      </a>
                            <a href="#" class="list-group-item text-center p-3 bhoechie-hv">
                                <h4 class="fa fa-tripadvisor fa-2x"></h4><br/>Trip Advisor
                            </a>
                        </div>
                    </div>
                    <div class="col-10 bhoechie-tab">
                        <div class="bhoechie-tab-content active p-4">
                            <span class="style-sub text-black">General Description</span>

                             <p class="style-p-twt"><?= htmlspecialchars_decode($newhotel->thongtinhotel)?></p>

                        </div>
                        <div class="bhoechie-tab-content">
                            <ul class="list-facilities" >
                                <?php
                                foreach($list_services as $list_services_item){
                                      ?>
                                <li class="active" ><?= h($list_services_item->nametienich)?></li>                       
                             <?php }?>                
                            </ul>

                        </div>
                        <div class="bhoechie-tab-content">
                            <iframe class="google-map" frameborder="0" scrolling="no" height="335" width="100%" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed/v1/place?q=<?= h($newhotel->diachimap)?>&key=AIzaSyCGz8WzqxQw1OwHWey3LCTjqKFG9feCxP4"></iframe>
                        </div>
                        <div class="bhoechie-tab-content">
                            <div class="container-fluid pl-0 py-2" style="padding-right: 30px !important;">
                                 <div class="khung-trip py-2 px-4">
                                   <h3 class="style-sub text-black">Skycity Darwin</h3>
                                   <span class="style-sub text-black m-0">TripAdvisor Traveler Rating:</span>
                                   <div class="icon-rating-trip mau-xanh-dot">
                                    <img src="img/icon-trip.png" class="pr-1 pb-1"><i class="fa fa-dot-circle-o" aria-hidden="true"></i><i class="fa fa-dot-circle-o" aria-hidden="true"></i><i class="fa fa-dot-circle-o" aria-hidden="true"></i><i class="fa fa-dot-circle-o" aria-hidden="true"></i><i class="fa fa-circle-o" aria-hidden="true"></i>
                                   </div>
                                   <p class="style-sub text-black m-0" style="font-size: 13px;">Based on 819 traveler reviews</p>
                                   <span class="style-sub text-black m-0">Most Recent Traveler Reviews</span>
                                   <ul style="padding-left: 17px;">
                                    <li class="maucam"><span style="color: black;">Jan 12,2018: "Very central..."</span></li>
                                    <li class="maucam"><span style="color: black;">Jan 1,2018: "Amazing cofy bed - average sevice!"</span></li>
                                    <li class="maucam"><span style="color: black;">Dec 29,2017: "Exceptional Sevice!"</span></li>
                                   </ul>
                                   <a href="" class="maucam" style="font-weight: bold;">Read reviews »</a>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
              <div class="header-descript">
                <h3 class="mauxanh p-3 m-0">Book This Property</h3>
                <div class="row">
                    <div class="col-md-6 pr-0 color-place">
                        <input type="text" class="input_filter" id="usr" placeholder="Filter by room type..." style="width: 100%">
                    </div>
                    <div class="col-md-6 pl-0" style="position: relative;">
                        <!-- <div class="input_inclusion"> -->
                        <button type="button" class="input_inclusion text-left" data-toggle="collapse" data-target="#pick-input_inclusion">Inclusions<i class="fa fa-angle-down" id="arrow-down-inclu"></i></button>
    <div id="pick-input_inclusion" class="collapse" style="position: absolute;z-index: 99;width: 95%;">
      <div class="panel-body">
      
          <div class="input-group control-group" style="background-color: transparent;">
<div class="nnnee">
    <?php for ($i=0; $i < 5; $i++) { 
        # code...
   ?>
    <div class="drop-inclusion-acc">Room Only<span class="cr pl-2"><img src="assets/images/check_twt.png" style="padding-bottom: 5px;"></span></div>
    <?php }?>
</div>
        </div>
      </div>
    </div>

                        <!-- </div> -->
                    </div>
                </div>



  </div>

<?php
$total_room =  $this->request->session()->read('hotel.search.room');
?>

<div class="book-property py-3" style="background-color: #ffffff;">
    <div class="container">
        <div class="khung-property">

          <?php
        //  for ($i=0; $i < 10; $i++) { 
          foreach ($list_room_of_hotel as $key => $valuelist_room_of_hotel) {
             # code...
      // print_r($valuelist_room_of_hotel);
         
          ?>
            <div class="horver-property">
            <div class="row card-color-1 m-0 px-2" style="height: 74px;font-size: 14px;">
                <div class="col-md-1 fix-img-proprety">
                    <img src="img/sprite-bg_03.png" style="height: 35px;">
                        <div class="many-people font-num-people">
                        <span class="adult-number" data-bind=""><?= $valuelist_room_of_hotel['songuoi']?></span>
                        <span class="child-number" data-bind=""><?= $valuelist_room_of_hotel['numberperchildren']?></span>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="type-room" style="padding-top: 5px;">
                    <span class="chudam"><?= $valuelist_room_of_hotel['nameroom']?></span>
                    </div>
                    <div class="type-room-2">
                    <span class="chudam" style="color: #c51224;">book early and save</span>
                    </div>
                    <div class="type-room-3">
                    <span>room only</span>
                    </div>
                </div>
                <div class="col-md-2 p-0">
                    <div class="type-purchase text-right">
                        <span style="line-height: 74px;">instant purchase</span>
                    </div>
                </div>
                <div class="col-md-3">
                  <div class="row">
                  <div class="col-md-1" style="line-height: 74px;color: #ccc;">|</div>
                  <div class="col-md-10 p-0">
                                        <div class="price-property">
                        <div class="row m-0">
                        <div class="money mr-2 col-md-5" style="">
                            
                                <span class="chudam">

                                    <?php
                                $giatien = $valuelist_room_of_hotel['giatien'] * $tygia;
                             //  dump($giatien);
                                //dump($giatien/100);
                             //   echo "<br>";
                                $discount_t = $newhotel->discount;
                                if( $discount_t > 0){
                                  $giatien = $giatien - ( ( $giatien / 100 ) * $discount_t);
                                }
                            //    dump($giatien);
                                echo number_format($giatien,2);
                            ?></span>
                        </div>
                        <div class="current col-md-2">
                            <span><?php echo $language?></span>
                        </div>
                        <div class="checkbox ml-3 col-md-1" style="margin-top: 13px;">
                            <label class="">
                                <input type="checkbox" value="" id="check_box_room_<?php echo $valuelist_room_of_hotel['idphong']?>">
                                <span class="cr"><i class="cr-icon fa fa-check" id="chbchan<?= $valuelist_room_of_hotel['idphong']?>" id-hime="<?= $valuelist_room_of_hotel['idphong']?>"></i></span>
                            </label>
                        </div>
                        </div>
                    </div>
                  </div>
                  </div>


                </div>
            </div>
            </div>
      
      <?php }?>
        </div>
    </div>
    <div class="see-more-property text-center mx-auto py-3">
    <span class="mauxanh chudam" style="font-size: 14px;">Scroll to see more rates</span>
    </div>
</div>








            </div>

<div class="form-button-property">
                <div class="w-100 mx-auto">
                    <div class="border-nut mx-auto">
                 <form action="/agents-bookroom" method="post" id="target">
                        <input type="hidden" name="idhotel" class="idhotel" value="<?= $idhotel ?>">
                        <input type="hidden" name="idroom-a" class="idroom-a" value="">
                        <!-- <input type="hidden" name="idroom-a" value=""> -->

                        <?php
                            if($check_book != 'no'){
                        ?>
                         <button class="btn-block border-0 nen-maucam button-border-nut mx-auto">Proceed</button>
                         <?php }else{?>
                          <button class="btn-block border-0 nen-maucam button-border-nut mx-auto" id='btn_book_disable'>Proceed</button>
                         <?php }?>
                      </form></div>
            </div>
</div>


             <style type="text/css">
             .discount_hotel {
    float: right;
    /*width: 100px;*/
    padding: 5px;
    border: 1px solid red;
    /*height: 50px;*/
    /*line-height: 50px;*/
    text-align: center;
    font-size: 18px;
    font-weight: bold;
}
             .nnnee{
                width: 100%;
    background: #2a3c58;
    float: none;
             }
.drop-inclusion-acc{
    width: 50%;
    background: #2a3c58;
    float: left;
    border: 1px solid #ccc;
    height: 46px;
    line-height: 46px;
    color: #fff;
    padding-left: 20px;
    font-size: 14px;
    font-weight: bold;
}
        
              .search-accom{
  position: relative;
  /*background-color: #2a3c58;*/
}
    #pick-room{
    position: absolute;
    width: 75%;
    right: 0;
    background: #fff;
    z-index: 99;
    line-height: 40px;
     color:#000;
}
    button.input_room {
    background: #fff;
    border: 2px solid rgb(238, 238, 238);
    height: 34px;
    font-size: 14px;
    text-align: left;color: #2a3c58;
    margin-top: 1px;
}
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
input::placeholder {
  color: #828282; font-family: "Muli" !important; font-size: 15px;

}
.hide {
    display: none!important;
}
        .bhoechie-tab-content {
            display: none;
            padding: 20px 0 0px 0 !important;
        }
        
        .bhoechie-tab-content.active {
            display: block;
        }
        a.list-group-item.active.text-center.p-3.bhoechie-hv {
            background-color: #c3c1c1;
            border-color: #c3c1c1;
                color: #34383b;
            font-weight: bold;

        }
        
        .list-group-item.active.text-center.p-3.bhoechie-hv:after {
            content: '';
            height: 0;
            display: block;
            border-color: transparent transparent transparent #c3c1c1;
            border-width: 17px;
            border-style: solid;
            position: absolute;
            top: 27px;
            left: 126px;
        }
        
        
        
        h4.fa.fa-2x {
            color: #34383b;
                padding: 0;
            margin: 0;
        }
        a.list-group-item.text-center.p-3.bhoechie-hv {
            background: #e2e2e2; color: #34383b; font-weight: bold;border: #e2e2e2;   width: 80%;
        }
        span.style-sub.text-black {
            font-weight: bold;
            font-size: 17px;
        }
        p.style-p{
            width: 98%;
            text-align: justify;
        }
        .list-group-item:first-child,.list-group-item:last-child{
                border-radius: 0 !important;
        }
        .modal-dialog.modal-dialog-centered {
            margin: 15% auto !important;
        }
        
.khung-trip{
    border: 2px solid #ccc;
    border-radius: 3px;
}
.khung-property{
    border: 1px solid #eeeeee;
        height: 445px;
    overflow-y: scroll;
}
/*.card-color-1{
background-color: #ffffff;
}
.card-color-2{
background-color: #f9f9f9;  
}*/
.horver-property:nth-child(even) {background: #ffffff}
.horver-property:nth-child(odd) {background: #f9f9f9}
.type-purchase{
    color: #38a7c6;
    font-weight: 600;
    margin-left: 20px;
}
.fix-img-proprety{
    line-height: 74px;
    text-align: center;
}
.price-property{
        color: #38a7c6;
        font-size: 22px;
        line-height: 74px;
        /*margin-left: 80px;*/
}
.border-nut{
    border: 5px solid #fff !important;
    border-radius: 5px;
    width: 120px;
    height: 55px;
    line-height: 40px;
    margin-top: -28px;
}
.button-border-nut {
    font-size: 15px;
    font-weight: 400;
    border-radius: 5px;
    width: 111px;
    height: 45px;
    color: #fff;
    line-height: 40px;
}
.fix-width-table{
    width: 50%;
        font-size: 15px;
            padding-left: 20px !important;
}
.table-bordered td, .table-bordered th {
    border: 1px solid #c3c1c1 !important;
}
.table td, .table th {
    border: 1px solid #c3c1c1 !important;
}
.adult-number{    
    font-size: 15px;
    line-height: 20px;
    position: absolute;
    width: 23px;
    height: 24px;
    text-align: center;
    top: 29px;
    left: 16px;
}
.child-number{
    font-size: 12px;
    line-height: 15px;
    position: absolute;
    width: 18px;
    height: 18px;
    text-align: center;
    left: auto;
    top: 37px;
    right: 15px;
}
.font-num-people{
    font-weight: bold;
    color: #fff;
}
#arrow-down-inclu{
    float: right;
    font-size: 23px;
}
input::-webkit-input-placeholder { 
  color: #2a3c58;
}
    </style>

     <script>
        $(document).ready(function() {
        $("div.bhoechie-tab-menu>div.list-group>a").click(function(e) {
            e.preventDefault();
            $(this).siblings('a.active').removeClass("active");
            $(this).addClass("active");
            var index = $(this).index();
            $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
            $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
        });
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

    // not sure if you wanted this, but I thought I'd add it.
    // get an associative array of just the values.
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
$('.input_filter').keyup(function(){
    var valThis = $(this).val().toLowerCase();
    if(valThis == ""){
        $('.khung-property > div > div ').show();
    } else {
        $('.khung-property > div > div > div > div.type-room > span').each(function(){
           var text = $(this).text().toLowerCase();
            console.log(this);
           (text.indexOf(valThis) >= 0) ? $(this).parent().parent().parent().show() : $(this).parent().parent().parent().hide();
        });
   };
});
 var stringcheck = [];
$( ".drop-inclusion-acc" ).click(function() {
  if(stringcheck == []){
    $(".pick_last_haha").parent().parent().parent().show();
  }else{
   $(".pick_last_haha").parent().parent().parent().hide();
  }
  
  //alert( "Handler for .click() called." );
  var stringc = $(this).text();
if($( this ).hasClass( "abccc" )){
  //alert("1");
  $(this).removeClass("abccc");
  var index = stringcheck.indexOf(stringc);
  stringcheck.splice(index, 1);
    $(this).find(".check_on_check").hide();

}else{
  $(this).addClass("abccc");
  stringcheck.push(stringc);
  $(this).find(".check_on_check").show();
};
  console.log(stringcheck);var abc = '';

if($( this ).hasClass( "abccc" )){ 
  jQuery.each( stringcheck, function( i, val ) {
      abc = abc + '.pick_last_haha:contains(' + val + '),';
    });
  $(abc.slice(0,-1)).parent().parent().parent().show();
}else{

  $(".pick_last_haha:contains(" + stringc + ")").parent().parent().parent().hide();
}

   if(abc == ''){
    $(".pick_last_haha").parent().parent().parent().show();
  }else{
  // $(".pick_last_haha").parent().parent().parent().hide();
  }
 console.log(abc);
});

        //$(document).ready(function() {
         // $('[id="chbchan"]');
           var num_check = 0;
        $('[id^="chbchan"]').click(function(e) {
           $(this).toggleClass("clacls");
         // alert("ád");
         if(num_check < <?php echo isset($total_room)?$total_room:0 ?>){

            var title = $( this ).attr( "id-hime" );
            var check_check = $( "#check_box_room_"+title ).val();
           // console.log(check_check);
            if(check_check){
             num_check--;
              $( "#check_box_room_"+title ).val("");
            }else{
             num_check++;
              $( "#check_box_room_"+title ).val(title);
            }
            $( "h3.mauxanh.p-3.m-0" ).text(num_check);


         }else{

           e.preventDefault();
           alert("no");




         }
           
          //  alert(num_check);
        });
   // });

    </script>
