      <!-- div banner -->
      <div class="search-accom">
        <div class="container">
          <div class="form-group-search-tour" style="padding: 20px 10px 20px 10px;">
            <div class="input_search_tour mb-2">
              <div class="col-md-12 col-xs-12">
                        <div class="input-group">
            <input type="button" class="button_search-twt11" data-toggle="collapse" data-target="#pick-input-tour-input" id="text-search-des">
            <input type="text" class="form-control" value="" placeholder="Search by destination or activity..." id="texxt-search" />
            <input type="button" class="button_search-twt1" value="SEARCH">
        </div>
            <div id="pick-input-tour-input" class="collapse" style="position: absolute;z-index: 99;width: 95%;">
      <div class="panel-body">
      
          <div class="input-group control-group style-drop-type" style="width: 190px;">
        <div class="item-drop-tour">

  <div class="item-tour-des">All Destinations</div>
<?php foreach ($agentstype as $destination){ ?>
  <?php if($destination->type_tour == '1') {?>
    <div class="item-tour-des"><?php echo $destination->name?></div>
  <?php }?>
<?php }?>

         </div>
        </div>
      </div>
    </div>

              </div>
            </div>
            <div class="container">





<div class="container">
  <div class="row">

<div class="col-md-2 offset-md-3 p-0"><button class="btn border-0 button-tour ditme" id="btn-tour-type"><div id="text-type">Activities Styles</div> <img src="img/arrow-down.png" style="margin-top: 8px;float: right;" ></button>

</div>
    <div id="pick-input-tourtype" class="col-md-2 p-0">
    <div class="panel-body">

      <div class="input-group control-group style-drop-type style-drop-type">
        <div class="item-drop-tour">
             <div class="item-tour-type">All types</div>
<?php foreach ($agentstype as $tourtype){ ?>
  <?php if($tourtype->type_tour == '3') {?>
    <div class="item-tour-type"><?php echo $tourtype->name?></div>
  <?php }?>
<?php }?>
         </div>
       </div>
     </div>
     </div>
  </div>
</div>

</div>

</div>
</div>
</div>

<div class="wraper-display-twt" id="wraper-display-twt2">
  <div class="container">
    <div class="row">

      <?php 
      foreach ($hotel_hot as $key => $valuehotel_hot) {     
        ?>
        <div class="card-twt pr-0 col-12 col-md-6 col-lg-4" id="fix-card-hotel">
          <div class="card-wrapper" id="card-wrapper1" style="padding-bottom: 38px;background-color: #ffffff">
            <div class="card-img">

              <?php echo $this->Html->image('/upload/activity/'.$valuehotel_hot->hinhanh, ['alt' => 'hinhanh','class'=>'']);?>
            </div>
            <div class="card-box text-center px-3">
              <div class="height-h-twt" style="height: 129px;">
                <h4 class="mauxanh"><a href="<?php 
              $hotel_title = $valuehotel_hot->name ;
              $hotel_id = $valuehotel_hot->id;
              echo $this->Url->build([
               'controller' => 'Agents',
               'action' => 'toursbooknow',
               '?' => array('hotel' => $hotel_title,'stt'=>$hotel_id),
               ]); ?>" ><?= $valuehotel_hot->name ?> </a>
               </h4>
                <h4 class="mauxanh" style="white-space: nowrap;"><?= $valuehotel_hot->diachi ?></h4>
              </div>

              <div class="height-p-twt pt-3">
                <p class="" ><?= strip_tags($valuehotel_hot->mota) ?></p>

              </div>
              <div class="copy-fade-tour"></div>
            </div>
            <div class="col-md-5 text-center mx-auto">
               <a class="btn-block border-0 nen-maucam button-bk-twt" href="<?php 
              echo $this->Url->build([
               'controller' => 'Agents',
               'action' => 'toursbooknow',
               '?' => array('hotel' => $hotel_title,'stt'=>$hotel_id),
               ]); ?>">BOOK NOW</a>

              
            </div>
          </div>
        </div>

        <?php } ?>




      </div>
    </div>
   
  </div>
 <div style="width: 100%;height: 40px;background: #fff" id="fix-white">
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

     $("#text-search-des" ).focus(function() {
        $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
          $("#fix-white").css('opacity',".3");

      });
    $( "#text-search-des" ).blur(function() {
      $("body").css('background',"#efefef");
      $(".wraper-display-twt").css('opacity',"1");
      $("nav#mainNav").css('opacity',"1");
      $(".ihihihih").css('opacity',"1");
       $("#fix-white").css('opacity',"1");
    });

     $("#btn-tour-type" ).focus(function() {
        $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
          $("#fix-white").css('opacity',".3");

      });
    $( "#btn-tour-type" ).blur(function() {
      $("body").css('background',"#efefef");
      $(".wraper-display-twt").css('opacity',"1");
      $("nav#mainNav").css('opacity',"1");
      $(".ihihihih").css('opacity',"1");
       $("#fix-white").css('opacity',"1");
    });

         $("#btn-tour-type1" ).focus(function() {
        $("body").css('background',"rgba(0, 0, 0, 0.45)");
        //$(".form-group-search").css('background',"#fff");
        $(".wraper-display-twt").css('opacity',".3");
        $("nav#mainNav").css('opacity',".3");
        $(".ihihihih").css('opacity',".3");
          $("#fix-white").css('opacity',".3");

      });
    $( "#btn-tour-type1" ).blur(function() {
      $("body").css('background',"#efefef");
      $(".wraper-display-twt").css('opacity',"1");
      $("nav#mainNav").css('opacity',"1");
      $(".ihihihih").css('opacity',"1");
       $("#fix-white").css('opacity',"1");
    });
 </script>
 <style type="text/css">
 #texxt-search:focus{
  outline: none;
 box-shadow:none;
     border: 1px;
}
input#texxt-search {
    border: none;
}
 #pick-input-tourtype{
  display: none;
  position: relative;
}
 #pick-input-tourtype1{
  display: none;
  position: relative;
}

.button-tour{
  width: 160px;height: 40px; color: #828282;background: #fff; text-align: left;font-weight: bold;font-size: 15px;border-radius: 0;
}
.item-tour-type,.item-tour-type1,.item-tour-des{
  padding-left: 10px;
  padding-top: 3px;
  font-size: 14px;
  padding-bottom: 3px;
  letter-spacing: -0.5px;    cursor: pointer;
}
.item-tour-type:hover,.item-tour-type1:hover,.item-tour-des:hover{
color: black;
background-color: #fff;
}
#icon-input-tour{
background-image:url(../img/arrow-down.png);
background-repeat: no-repeat; 
background-position: 4px 15px;
}
input.button_search-twt11 {
    background-color: #fff;
    border: 0;
    background-image:url(../img/arrow-down.png);
background-repeat: no-repeat; 
background-position: 4px 15px;
    width: 27px;
    background-size: 19px;
}
input.button_search-twt11:focus{
  outline: 0;
}
.style-drop-type{
  background-color: rgb(72,103,138);position: absolute;z-index: 99;border: 1px solid #ccc;color: #fff;width: 94%;
}
.item-drop-tour{
  width: 100%;
}
div#text-type,div#text-style {
    width: 100px;
    white-space: nowrap;
    overflow: hidden;
    text-overflow: clip;
    float: left;
}
</style>

<script type="text/javascript">
$( ".button_search-twt1" ).click(function() {
 setTimeout(sample, 200); 
});  
function sample() {
    window.location = "/agents-tour-result";
}

</script>