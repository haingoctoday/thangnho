   
    <div class="book-property mt-5" style="background: #f9f9f9;" id="div_show_onsearch">
   <?php 
  $min_price = 0;
if(!empty($datalist_drive)){
   $min_price = min($datalist_drive);
}


$session_search = $this->request->session()->read('transfer.search');
    ?>
     <?php 
        if($min_price > 0 ){
         ?>
    <div class="container py-4">
        <div class="header-trans pb-3">
            <div class="row">
                <div class="col-md-8">
                    <h2 data-bind="">
                    <?php echo $session_search['destination'] ?> ,
                     <?php echo $session_search['pick_up'] ?> » 
                      <?php echo $session_search['pick_off'] ?>
                    <!-- Macau, Macao Int. Airport To Macau Border Gate -->
                </h2>
                    <p class="sub-title">
                            <span data-bind=""><?php echo $session_search['pickdate'] ?></span> with <span data-bind="">2 Adults</span>
                        </p>
                </div>
                <div class="col-md-4">
                    <div class="price-holder">
                            <span class="price-info">FROM</span>
                            <span class="price" data-bind="if: LowestPrice">
                                <strong ><?php echo $min_price * $tygia ?></strong><span class="price-currency"><?php echo $language ?></span>
                            </span>
                            <span class="price-info">lowest price</span>
                        </div>
                </div>
            </div>
        </div>
        <?php 
//for ($i=0; $i < 6 ; $i++) { 
        $i=0;

 foreach ($datalist_drive as $key => $valuedatalist_drive) {
    //print_r($key);
  $i++;
         ?>
        <div class="khung-property">
            <div class="row card-color-1 m-0 px-2" id="<?php echo  ($i%2) ? 'color-the' : ''  ?>" style="height: 80px;font-size: 14px;">
                <div class="col-md-1 fix-img-proprety p-0" style="margin: auto;">
                    <!-- <img src="img/prvt-stnd-mnbs.png" style="width: 100%;"> -->
                    <?php echo $this->Html->image('/upload/transferdrive/'.$transferdrive_view[$key]['image'], ['alt' => 'hinhanh','class'=>'','style'=>'width: 100%;']);?>
                    <?php //$transferdrive_view[$key]['hinhanh'] ?>
                </div>
                <div class="col-md-7">
                    <div class="type-room" style="padding-top: 5px;">
                    <span class="chudam"><?php  echo $transferdrive_view[$key]['name'] ?></span>
                    </div>
                    <div class="type-room-2">
                    <span class="chudam" style="color: #c51224;"></span>
                    </div>
                    <div class="type-room-3">
                    <span>Standard</span>
                    </div>
                </div>
                <div class="col-md-1 pl-0 text-right" style="margin: auto;">
                    <a href="">
                        <i class="fa fa-info-circle" aria-hidden="true" style="font-size: 30px;color: #17b9e4;"></i></a>
                </div>                
                <div class="col-md-3">
               <!--    <div class="row">
                  <div class="col-md-3 pl-0" style="line-height: 80px;color: #ccc;">|</div>
                  <div class="col-md-9 p-0">
                                        <div class="price-property">
                        <div class="row m-0">
                        <div class="money mr-2" style="width: 60px;text-align: right;">
                            <span class="chudam"><?php  echo  $valuedatalist_drive * $tygia ?></span>
                        </div>
                        <div class="current">
                            <span><?php echo $language ?></span>
                        </div>
                        <div class="checkbox ml-3" style="margin-top: 13px;">
                            <label class="">
                                <input type="checkbox" value="" id="check_box_room">
                                <span class="cr"><i class="cr-icon fa fa-check" id="chbchan" id-hime=""></i></span>
                            </label>
                        </div>
                        </div>
                    </div>
                  </div>
                  </div> -->
                                    <div class="row">
                  <div class="col-md-1" style="line-height: 74px;color: #ccc;">|</div>
                  <div class="col-md-10 p-0">
                                        <div class="price-property">
                        <div class="row m-0">
                        <div class="money mr-2 col-md-5" style="">
                            
                                <span class="chudam">

                                    <?php
                                $giatien = $valuedatalist_drive * $tygia;
        
                                //$discount_t = $newhotel->discount;
                               // if( $discount_t > 0){
                             //     $giatien = $giatien - ( ( $giatien / 100 ) * $discount_t);
                               // }
                            //    dump($giatien);
                                echo number_format($giatien,2);
                            ?></span>
                        </div>
                        <div class="current col-md-2">
                            <span><?php echo $language?></span>
                        </div>
                        <div class="checkbox ml-3 col-md-1" style="margin-top: 13px;">
                            <label class="">
                                <input type="checkbox" value="" id="check_box_room_<?php //echo $valuelist_room_of_hotel['idphong']?>">
                                <span class="cr"><i class="cr-icon fa fa-check" id="chbchan<?php // $valuelist_room_of_hotel['idphong']?>" id-hime="<?php // $valuelist_room_of_hotel['idphong']?>"></i></span>
                            </label>
                        </div>
                        </div>
                    </div>
                  </div>
                  </div>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
    <div class="see-more-property text-right mx-auto pt-3">
    <span class="table-description-to">* rate may update on next page</span>
    </div>
     <?php }else{?>
<div class="khung-property">
    
    <h1>No result .... Please re-search ...</h1>
</div>
        <?php  }?>
</div>