 
<?php echo $this->element('search'); ?>

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
  $("button.btn.add-more.btn-am" ).focus(function() {
  $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
      });
 $( "button.btn.add-more.btn-am" ).blur(function() {
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
//  var nowTemp = new Date();
//  var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);

//  var checkin = $('#search_date_to').datepicker({
//    format: 'dd M yyyy',
//    beforeShowDay: function(date) {
//     return date.valueOf() >= now.valueOf();
//   },
//   autoclose: true

// }).on('changeDate', function(ev) {
//   if (ev.date.valueOf() > checkout.datepicker("getDate").valueOf() || !checkout.datepicker("getDate").valueOf()) {

//     var newDate = new Date(ev.date);
//     newDate.setDate(newDate.getDate() + 1);
//     checkout.datepicker("update", newDate);

//   }
//   $('#search_date_end')[0].focus();
// });


// var checkout = $('#search_date_end').datepicker({
//   format: 'dd M yyyy',
//   beforeShowDay: function(date) {
//     if (!checkin.datepicker("getDate").valueOf()) {
//       return date.valueOf() >= new Date().valueOf();
//     } else {
//       return date.valueOf() > checkin.datepicker("getDate").valueOf();
//     }


//   },
//   autoclose: true

// }).on('changeDate', function(ev) {

//   var start = $("#search_date_to").datepicker("getDate");
//   var end = $("#search_date_end").datepicker("getDate");
//   var days = (end - start) / (1000 * 60 * 60 * 24);
//   console.log(days);
//   $("#search_night").val(days);
// });
 var nowTemp = new Date();
var now = new Date(nowTemp.getFullYear(), nowTemp.getMonth(), nowTemp.getDate(), 0, 0, 0, 0);
 $(function () {
            $("#search_date_to").datepicker({
                numberOfMonths: 2,
                format: 'dd M yyyy',
             minDate: new Date(), 
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    console.log(dt);
                    dt.setDate(dt.getDate() + 1);
                    $("#search_date_end").datepicker("option", "minDate", dt);
                   // $('#search_date_end')[0].focus();
                }
            });
            $("#search_date_end").datepicker({
                numberOfMonths: 2,
               // format: 'dd M yyyy',
                onSelect: function (selected) {
                    var dt = new Date(selected);
                    dt.setDate(dt.getDate() - 1);
                    console.log(dt);
                    $("#search_date_to").datepicker("option", "maxDate", dt);
                      var start = $("#search_date_to").datepicker("getDate");
                      var end = $("#search_date_end").datepicker("getDate");
                      var days = (end - start) / (1000 * 60 * 60 * 24);
                      console.log(days);
                      $("#search_night").val(days);
                }
            });
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
  $("span.fa.fa-close.remove.col-sm-1" ).focus(function() {
  $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
      });
 $( "span.fa.fa-close.remove.col-sm-1" ).blur(function() {
  $("body").css('background',"#efefef");
  $(".wraper-display-twt").css('opacity',"1");
  $("nav#mainNav").css('opacity',"1");
  $(".ihihihih").css('opacity',"1");
});
  $("select.form-control.col-sm-3.adults" ).focus(function() {
  $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
      });
 $( "select.form-control.col-sm-3.adults" ).blur(function() {
  $("body").css('background',"#efefef");
  $(".wraper-display-twt").css('opacity',"1");
  $("nav#mainNav").css('opacity',"1");
  $(".ihihihih").css('opacity',"1");
});
   $("select.form-control.col-sm-3.ml-2.children" ).focus(function() {
  $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
      });
 $( "select.form-control.col-sm-3.ml-2.children" ).blur(function() {
  $("body").css('background',"#efefef");
  $(".wraper-display-twt").css('opacity',"1");
  $("nav#mainNav").css('opacity',"1");
  $(".ihihihih").css('opacity',"1");
});

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