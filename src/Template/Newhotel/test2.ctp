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
				                   <?php 
					                  if($valuelist_room_of_hotel['songuoi'] > 6){
					                    echo "<img class='' src='img/user_n6.png' style='height:35px'>";
					                  }else{
					                    echo "<img class='' src='img/user_n".$valuelist_room_of_hotel['songuoi'].".png' style='height:35px'>";
					                  } ?>
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
				      <div class="form-button-property">
                <div class="w-100 mx-auto">
                    <div class="border-nut mx-auto">
                    	   <form action="/agents-bookroom" method="post" id="target">
                    	   	<input type="hidden" name="idhotel" class="idhotel" value="<?= $idhotel ?>">
                        <input type="hidden" name="idroom-a" class="idroom-a" value="">
                <button class="btn-block border-0 nen-maucam button-border-nut mx-auto">Proceed</button>
		</form>
            </div>
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



				<style type="text/css">
  .button-border-nut {
    font-size: 15px;
    font-weight: 400;
    border-radius: 5px;
    width: 111px;
    height: 45px;
    color: #fff;
    line-height: 40px;
}
.price-property{
	line-height: 74px;
}
.col-md-1.fix-img-proprety {
    line-height: 74px;
}
</style>
<script type="text/javascript">   var num_check = 0;
           var room_pick = [];
        $('[id^="chbchan"]').click(function(e) {
           $(this).toggleClass("clacls");

            var title = $( this ).attr( "id-hime" );
            var check_check = $( "#check_box_room_"+title ).val();
            if(check_check){
             num_check--;
              $( "#check_box_room_"+title ).val("");
              room_pick = $.grep(room_pick, function(value) {
                return value != title;
              });
            }else{
             num_check++;
              $( "#check_box_room_"+title ).val(title);
              room_pick.push(title);
            }
          
       
  $(".idroom-a").val(JSON.stringify(room_pick));
     
        });

      
    </script>