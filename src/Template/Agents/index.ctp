<div class="container pl-0 pr-0" style="background: #ecf2f3;">
        <div class="row">
            <div class="mbr-table-md-up">
              <div class="mbr-table-cell col-md-5  content-size">
                


    <!-- /.col-lg-8 -->
    <div >
      <h5>MANAGE MY BOOKINGS</h5>
    


      <div class="">
        <div class="input-group custom-search-form">
          <input type="text" class="form-control" placeholder="Booking ID">
          <span class="input-group-btn">
              <button class="btn btn-primary" type="button" >
                  <span class="mbri-search mbr-iconfont"></span>
              </button>
          </span>
      </div><!-- /input-group -->
  </div>

  <div class="mt-2">
    <div class="input-group custom-search-form">
      <input type="text" class="form-control" placeholder="Guest Name">
      <span class="input-group-btn">
          <button class="btn btn-primary" type="button">
           <span class="mbri-search mbr-iconfont"></span>
       </button>
   </span>
</div><!-- /input-group -->
</div>
  
<div class="row mt-2 mrb-ngoc-index">
  <div class="col-lg-3 text-center pendding-img fix-icon">
     <span class="fa fa-exclamation-circle fa-3x mt-2 color-weight-767676"></span>
    <b class="color-weight-767676" style="font-size: 12px;">PENDDING</b>
 </div>   
 <div class="col-lg-9 pr-2 pl-2 pb-1 text-md-left text-capitalize">
    <div class="pendding-text border-bottom-text pt-0">quote
    </div>
    <div class="pendding-text border-bottom-text">instant purchase (item not held)
    </div>
    <div class="pendding-text border-bottom-text">amendment pending
    </div>
    <div class="pendding-text">pending unconfirmed
    </div>
</div>   

</div>

<div class="row mt-2 mrb-ngoc-index">
  <div class="col-lg-3 text-center pendding-img-2 fix-icon">
     <span class="fa fa-money fa-3x color-weight-767676"></span>
    <b class="color-weight-767676" style="font-size: 12px;">UNPAID</b>
 </div>   
 <div class="col-lg-9 pr-2 pl-2 pb-1 text-md-left text-capitalize">
    <div class="pendding-text border-bottom-text">confirmed unpaid
    </div>
    <div class="pendding-text">Payment Due in 48 hours
    </div>
    
</div>   
</div>   



<div class="row mt-2 mrb-ngoc-index">
  <div class="col-lg-3 text-center pendding-img-3 fix-icon">
     <span class="fa fa-thumbs-o-up fa-3x color-weight-767676"></span>
     <b class="color-weight-767676" style="font-size: 12px;">&nbsp&nbsp&nbspPAID&nbsp&nbsp</b>
 </div>   
 <div class="col-lg-9 pr-2 pl-2 pb-1 text-md-left text-capitalize">
     <div class="pendding-text border-bottom-text">confirmed (paid)
     </div>
     <div class="pendding-text border-bottom-text">refund pending
     </div>
     <div class="pendding-text">commission unpaid
     </div>
     
 </div>   

</div>
</div>






              </div>
              <div class="mbr-table-cell mbr-left-padding-md-up mbr-valign-top col-md-7 image-size p-0" style="width: 65%;">

        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner" role="listbox">

      <?php
      foreach($slide as $key_slide  => $slide_item){
      ?>
    <div class="carousel-item <?php echo ($key_slide == 0) ? 'active' : '' ?>">
      <div class="mbr-figure">

       <a href="<?php echo $slide_item->linkslide;?>" >

        <?php echo $this->Html->image('/upload/slide/'.$slide_item->hinhanh, ['alt' => $slide_item->name_slide]);?>
      </a>
      </div>
    </div>
    <?php }?>
 
   
    </div>
</div>

                  <!-- <div class="mbr-figure"><img src="assets/images/01.jpg"></div> -->
              </div>
            </div>
        </div>
    </div>


<section class="features3 cid-qFgDOlg1g7" id="features3-0" data-rv-view="224">

    

    
  <div class="container">
    <div class="media-container-row">
      <div class="row">

      <?php
      foreach($hotel_hot as $key => $hotel_hot_item){
        ?>

        <div class="card p-3 col-12 col-md-6 col-lg-4">
          <div class="card-wrapper">
            <div class="card-img fix-height-img-hotel">
              <?php echo $this->Html->image('/upload/hotel/'.$hotel_hot_item['hinhanh'], ['alt' => $hotel_hot_item['namehotel'],'media-simple'=>'true']);?>  
            </div>
            <div class="card-box">
              <div class="card-title-agent">
             <h4 class="card-title mbr-fonts-style display-5"> <a href="<?php 
             $hotel_title = $hotel_hot_item['namehotel'];
             $hotel_id = $hotel_hot_item['id'];
             echo $this->Url->build([
               'controller' => 'Newhotel',
               'action' => 'indexView',
               '?' => array('hotel' => $hotel_title,'stt'=>$hotel_id),
             ]);
//echo $this->Url->build('/admin-category-transfers',$hotel_hot_item['namehotel']); ?>" ><?= $hotel_hot_item['namehotel']?> </a></h4></div>
<div class="card-addres-agent">
<h4 class="card-title mbr-fonts-style display-4"><?= $hotel_hot_item['diachi']?></h4></div>

<div class="card-title mbr-fonts-style display-4 rating<?= $key?> pt-2">
</div>
<script type="text/javascript">
  $(document).ready(function() {
    var ratingValue = <?= $hotel_hot_item['saohotel']?>;

    for (var j = 0; j < ratingValue; j++) {
      jQuery(".rating<?= $key?>").append('<i class="fa fa-star" aria-hidden="true"></i>');
    }
  });
</script>
<div class="card-text-agent">
<p class="mbr-text mbr-fonts-style text-agent pt-0" style="font-size: 14px;"><?= h($hotel_hot_item['mota'])?></p></div>
<div class="mbr-section-btn text-center fix-button"><a href="<?php 
$hotel_title = $hotel_hot_item['namehotel'];
$hotel_id = $hotel_hot_item['id'];
echo $this->Url->build([
  'controller' => 'Newhotel',
  'action' => 'indexView',
  '?' => array('hotel' => $hotel_title,'stt'=>$hotel_id),
]);


                      //echo $this->Url->build(['controller' => 'Newhotel','action' => 'indexView', '?' => ['hotel' => '$hotel_hot_item['namehotel']' ]);
?>" class="btn btn-black display-4">BOOK NOW</a></div>
</div>

</div>
</div>

<?php
}
?>


</div>
</div>
</div>
</section>

<style>
.card-wrapper .card-title-agent{
  height: 80px;
}
.card-wrapper .card-addres-agent{
  height: 45px;
}
.card-wrapper .card-text-agent{
  height: 210px;
}
.mbr-text .mbr-fonts-style .text-agent{
  font-size: 15px;
}
.mbr-section-btn.text-center.fix-button{
padding-bottom: 1rem;
padding-top: 0;
}
.pendding-img.fix-icon,
.pendding-img-2.fix-icon,
.pendding-img-3.fix-icon
{
  padding: 5px;
  border-right: 1px solid #00000029;
}
.pendding-text.border-bottom-text{
border-bottom: 1px solid #00000029;
padding-bottom: 3px;
    padding-top: 1px;
}
.color-weight-767676{
      color: #767676;
}


</style>