<div class="container-banner-agency">
	<div class="bg-container-id-agt">
<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
    <li data-target="#demo" data-slide-to="3"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/th_d8beabb2b5464a87b95d1539e80d4846_valentine.jpg" alt="Los Angeles" class="img_slider_top">
      <div class="carousel-caption1">
         <h3 class="h3_slider_top">Maldives</h3>
       <div class="content_slider">
          <p class="price_slider_top">From $1,257</p>
         <p class="text_slider_top">Return flights Adelaide to the Maldives</p>
         <a class="readmore_slider" href="#">&nbsp;Read more</a>
       </div>
      
     </div>
    </div>
    <div class="carousel-item">
      <img src="img/th_d8beabb2b5464a87b95d1539e80d4846_bali-21.jpg" alt="Chicago" class="img_slider_top">
     <div class="carousel-caption1">
         <h3 class="h3_slider_top">Return Flights from Adelaide to Paris</h3>
       <div class="content_slider">
          <p class="price_slider_top">From $1,383</p>
         <p class="text_slider_top">Return airfares to Hawaii departing from Adelaide</p>
              <a class="readmore_slider" href="#">&nbsp;Read more</a>
       </div>
      
     </div>
    </div>
    <div class="carousel-item">
      <img src="img/th_d8beabb2b5464a87b95d1539e80d4846_bay_bridge_new_york-wallpaper-1680x1260.jpg" alt="New York" class="img_slider_top">
     <div class="carousel-caption1">
         <h3 class="h3_slider_top">Return Flight from </h3>
       <div class="content_slider">
          <p class="price_slider_top">From $1,383</p>
          <p class="text_slider_top">Return airfares to New York departing from Sydney.</p>
             <a class="readmore_slider" href="#">&nbsp;Read more</a>
       </div>
      
     </div>
    </div>
     <div class="carousel-item">
      <img src="img/th_d8beabb2b5464a87b95d1539e80d4846_bali-21.jpg" alt="Chicago" class="img_slider_top">
     <div class="carousel-caption1">
         <h3 class="h3_slider_top">Return Flights from Adelaide to Paris</h3>
       <div class="content_slider">
          <p class="price_slider_top">From $1,383</p>
         <p class="text_slider_top">Return airfares to Hawaii departing from Adelaide</p>
             <a class="readmore_slider" href="#">&nbsp;Read more</a>
       </div>
      
     </div>
    </div>


  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>
   <div class="container">
      <div class="row">
       
         <div class="col-md-12">

  
         </div>
      </div>
   </div>
</div>
</div>
<style type="text/css">
  .div_tilte_index_n {
    text-align: center;
    height: 30px;
}
div#fix-card-hotel-20:nth-child(3) .card-wrapper {
    width: 95%;
}
</style>
<!-- display hotel -->
<div class="wraper-display-twt">
   <div class="container">
          <div class="row">
         <div class="card-twt pr-0 col-12 col-md-6 col-lg-4" id="fix-card-hotel-20">
            <div class="div_tilte_index_n">
              <div class="p-title-id-agent">Last minute savings</div>
              <div class="span-title-idagent"></div>
            </div>
          
         </div>
                  <div class="card-twt pr-0 col-12 col-md-6 col-lg-4" id="fix-card-hotel-20">
           
              <div class="div_tilte_index_n">
              <div class="p-title-id-agent">On Special</div>
              <div class="span-title-idagent_on"></div>
            </div>
         </div>
                  <div class="card-twt pr-0 col-12 col-md-6 col-lg-4" id="fix-card-hotel-20">
          
             <div class="div_tilte_index_n">
              <div class="p-title-id-agent">Two-for-One Deals</div>
              <div class="span-title-idagent"></div>
            </div>
         </div>          
      </div>
      <div class="row">
         <?php
            foreach($hotel_hot as $key => $hotel_hot_item){
              ?>
         <div class="card-twt pr-0 col-12 col-md-6 col-lg-4 card-fix-w-twt" id="fix-card-hotel-20">
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
                     <h4 class="mauxanh-address"><?= $hotel_hot_item['diachi']?></h4>
                  </div>
                  <div class="rating-twt py-3 rating<?= $key?>">
                     <script type="text/javascript">
                        $(document).ready(function() {
                          var ratingValue = <?= $hotel_hot_item['saohotel']?>;
                        
                          for (var j = 0; j < ratingValue; j++) {
                            jQuery(".rating<?= $key?>").append('<i class="fa fa-star maucam" aria-hidden="true"></i>');
                          }
                        });
                     </script>
                  </div>
                  <div class="height-p-twt">
                     <p class="" ><?= strip_tags($hotel_hot_item['mota'])?></p>
                  </div>
                  <div class="copy-fade"></div>
               </div>
               <div class="col-md-5 text-center mx-auto">
                  <a href="<?php $hotel_title = $hotel_hot_item['namehotel'];$hotel_id = $hotel_hot_item['id'];
                     echo $this->Url->build([
                       'controller' => 'Newhotel',
                       'action' => 'indexView',
                       '?' => array('hotel' => $hotel_title,'stt'=>$hotel_id),
                     ]);?>" class="btn-block border-0 nen-maucam button-bk-twt">
                  More Deals
                  </a>
               </div>
            </div>
         </div>
         <?php
            }
            ?>            
      </div>
   </div>
</div>
