<div class="book-property py-3" style="background-color: #ffffff;">
				    <div class="container">
				        <div class="khung-property">

				          <?php
				      
				          if(!empty($list_room_of_hotel)){


				       foreach ($list_room_of_hotel as $key => $valuelist_room_of_hotel) {
				
				          ?>
				            <div class="horver-property">
				            <div class="row card-color-1 m-0 px-2" style="height: 74px;font-size: 14px;">
				                <div class="col-md-1 fix-img-proprety">
				                    <img src="img/sprite-bg_03.png" style="height: 35px;">
				                        <div class="many-people font-num-people">
				                        <span class="adult-number" data-bind=""><?php echo $valuelist_room_of_hotel['songuoi']?></span>
				                        <span class="child-number" data-bind=""><?php echo $valuelist_room_of_hotel['numberperchildren']?></span>
				                    </div>
				                </div>
				                <div class="col-md-6">
				                    <div class="type-room" style="padding-top: 5px;">
				                    <span class="chudam"><?php echo $valuelist_room_of_hotel['nameroom']?></span>
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
				                  <div class="col-md-3" style="line-height: 74px;color: #ccc;">|</div>
				                  <div class="col-md-9 p-0">
				                                        <div class="price-property">
				                        <div class="row m-0">
				                        <div class="money mr-2" style="width: 60px;text-align: right;">
				                            <span class="chudam"><?php echo $valuelist_room_of_hotel['giatienss1'] * $tygia?></span>
				                        </div>
				                        <div class="current">
				                            <span><?php echo $language?></span>
				                        </div>
				                        <div class="checkbox ml-3" style="margin-top: 13px;">
				                            <label class="">
				                                <input type="checkbox" value="">
				                                <span class="cr"><i class="cr-icon fa fa-check"></i></span>
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
				      <div class="form-button-property">
                <div class="w-100 mx-auto">
                    <div class="border-nut mx-auto">
                <button class="btn-block border-0 nen-maucam button-border-nut mx-auto">Proceed</button></div>
            </div>
</div>
				      <?php }else{?>
		<div>
			NO room 
		</div>
				       <?php }?>

				        </div>
				    </div>
				  
				</div>