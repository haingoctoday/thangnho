<div class="wrapper-book-room">
	<?php
//debug($data_hotel);
//debug($data_room);
//debug(($this->request->session()->read('hotel.search')));
$session_search = $this->request->session()->read('hotel.search');
	?>
<div class="info-panel">
  <table>
    <tbody style="font-size: 14px;">
      <tr class="dsb-hv">
        <td class="col-1f">
          <i class="fa fa-map-marker fa-2x float-left color-fa pr-3" aria-hidden="true"></i>
          <div class="description12">
            <strong class="title">Destination</strong>
            <span class="text"><?= $data_hotel[0]->diachi?></span>
          </div>
        </td>
        <td class="col-2f">
          <i class="fa fa-calendar fa-2x float-left color-fa pr-2" aria-hidden="true"></i>
          <div class="description12">
            <strong class="title">ARRIVAL DATE</strong>
            <span class="text"><?php echo $this->request->session()->read('hotel.search.search_date_to')?></span>
          </div>
        </td>
        <td class="col-2f">
          <i class="fa fa-calendar fa-2x float-left color-fa pr-2" aria-hidden="true"></i>
          <div class="description12">
            <strong class="title">DEPARTURE DATE</strong>
            <span class="text"><?php echo $this->request->session()->read('hotel.search.search_date_end')?></span>
          </div>
        </td>
        <td class="col-3f">
          <i class="fa fa-bed fa-2x float-left color-fa pr-2" aria-hidden="true"></i>
          <div class="description12">
            <strong class="title">&nbsp;</strong>
            <span class="text">Room <?php echo $this->request->session()->read('hotel.search.room')?></span>
          </div>
        </td>
        <td class="col-4f">
          <i class="fa fa-male fa-2x float-left color-fa pr-2" aria-hidden="true"></i>
          <div class="description12">
            <strong class="title">ADULT</strong>
            <span class="text"><?= array_sum($session_search['adults_end'])?></span>
          </div>
        </td>
        <td class="col-4f">
          <i class="fa fa-child fa-2x float-left color-fa pr-2" aria-hidden="true"></i>
          <div class="description12">
            <strong class="title">CHILDREN</strong>
            <span class="text"><?= array_sum($session_search['children_end'])?></span>
          </div>
        </td>
        <td class="col-5f pl-3">
          <i class="fa fa-moon-o fa-2x float-left color-fa pr-2" aria-hidden="true"></i>
          <div class="description12">
            <strong class="title">NIGHTS</strong>
            <span class="text"><?= $session_search['search_night']?></span>
          </div>
        </td>
      </tr>
      <tr class="dsb-hv">
        <td class="col-1f pt-0 pt-4">
          <i class="fa fa-building fa-2x float-left color-fa pr-2" aria-hidden="true"></i>
          <div class="description12">
            <strong class="title">HOTEL NAME</strong>
            <span class="text"><?= $data_hotel[0]['namehotel']?></span>
          </div>
        </td>
      </tr>
    </tbody>
  </table>
</div>
  <form action="/agents-bookroomok" method="post" id="target">
<div class="form-book-room">
	<?php
	$opt = 0;$key_rom=0;
		//for ($i=1; $i <= $this->request->session()->read('hotel.search.room'); $i++) { 
		foreach ($data_room as $key => $value_data_room) {
			$key_rom++;
	?>
	<div class="container" id="roombookinglist">
		<div class="detail-room" style="margin-bottom: 1px;">
			<div class="row">
				<div class="colum-1 text-center" style="background-color: #464a4d;">
					<div class="center-col-1">
						<span style="color: #fff;font-size: 18px;">Details</span>
					</div>
				</div>
				<div class="colum-2" style="background-color: #e2e2e2;">
					<div class="row">
						<div class="col-md-10 text-left">
							<h4 class="style-room-head">Room <?= $key_rom?></h4>
						</div>
						<div class="col-md-2">
							<div class="num-people">
								<span style="padding-right: 10px;">ADULTS</span>
								<span>CHILDREN</span>
							</div>
							<div class="number">
								<span style="padding-right: 53px;"><?= $session_search['adults_end'][$opt]?></span>
								<span><?= $session_search['children_end'][$opt]?></span>
							</div>
						</div>
					</div>
				</div>			
			</div>
		</div>
		<div class="room-type" style="margin-bottom: 1px;">
			<div class="row">
				<div class="colum-1 text-center cangiuatrang" style="background-color: #e2e2e2;">
					<div class="center-col-1">
						<span style="">Room Type</span>
					</div>
				</div>
				<div class="colum-2" style="background-color: #fff;">
					<div class="info-type">
						<p class="m-0"><?=  $value_data_room['c']['nameroom']?></p>
					</div>
				</div>			
			</div>
		</div>
		<div class="guest-detail" style="margin-bottom: 1px;">
			<div class="row">
				<div class="colum-1 text-center cangiuatrang" style="background-color: #e2e2e2;">
					<div class="center-col-1">
						<span style="">Guest Details</span>
					</div>
				</div>
				<div class="colum-2" style="background-color: #fff;">
					<div class="info-guest">
						<?php for ($g1=1; $g1 <= $session_search['adults_end'][$opt]; $g1++) { 
							# code...
						?>
						<div class="row">
							<div class="col-md-3" style="padding-left: 40px;">
								<label class="display-7" style="padding-right: 40px;line-height: 38px;font-weight: bold;font-size: 15px;">Guest 1
			                </label>
			                    <select id="soflow1" class="mauxanh-input" name="pre_name[<?php echo $value_data_room['id']?>][]" style="width: 99px;">
			                      <option value="Mr">Mr</option>
									<option value="Mrs">Mrs</option>
									<option value="Miss">Miss</option>
									<option value="Ms">Ms</option>
									<option value="Mstr">Mstr</option>
									<option value="Dr">Dr</option>
									<option value="Prof">Prof</option>
									<option value="Sir">Sir</option>
									<option value="Lady">Lady</option>
			                    </select>
							</div>
							<div class="col-md-4">
								<input class="form-control" type="text" name="firstname[<?php echo $value_data_room['id']?>][]" id="firstname" placeholder="First Name" style="">
							</div>
							<div class="col-md-4">
								<input class="form-control" type="text" name="lastname[<?php echo $value_data_room['id']?>][]" id="lastname" placeholder="Last Name" style="">
							</div>
						</div>
						<?php  }?>
						<div class="row" style="padding-bottom: 6px;">
					            <div class="col-md-7" style="padding-left: 40px;">
					            	<div class="row">
					            		<div class="col-md-3 pr-0" style="margin-right: -43px;">
					               			<label class="display-7 m-0" style="width: 102px;font-size: 15px;font-weight: bold;line-height: 18px;">Your Reference
					                		</label>					            			
					            		</div>
					            		<div class="col-md-7">
					            			<input class="form-control" type="text" name="reference[<?php echo $value_data_room['id']?>][]" id="reference" placeholder="Opitional">
					            		</div>
					            	</div>

					                
					            </div>
					    </div>
					</div>
				</div>			
			</div>
		</div>
		<div class="payment" style="margin-bottom: 1px;">
			<div class="row">
				<div class="colum-1 text-center cangiuatrang" style="background-color: #e2e2e2;">
					<div class="center-col-1">
						<span style="">Payment Due Date</span>
					</div>
				</div>
				<div class="colum-2" style="background-color: #fff;">
					<div class="payment-type">
						<span>Payment Due Date: <b class="maucam">12 Mar 2018 23:29 ACDT</b></span>
					</div>
				</div>			
			</div>
		</div>	
		<div class="amendment" style="margin-bottom: 1px;">
			<div class="row">
				<div class="colum-1 text-center cangiuatrang" style="background-color: #e2e2e2;">
					<div class="center-col-1">
						<span style="">Amendment & Cancellation Policy</span>
					</div>
				</div>
				<div class="colum-2" style="background-color: #fff;">
					<div class="amendment-type">
						<span style="font-weight: bold;">12 Mar 2018 23:29 ACDT</span><br>
						<span>If item is cancelled or amended after this time, you will be charged <b>281 AUD</b></span>
					</div>
				</div>			
			</div>
		</div>	
		<div class="promotion" style="margin-bottom: 1px;">
			<div class="row">
				<div class="colum-1 text-center cangiuatrang" style="background-color: #e2e2e2;">
					<div class="center-col-1">
						<span style="">Promotion</span>
					</div>
				</div>
				<div class="colum-2" style="background-color: #fff;">
					<div class="promotion-type">
						<span style="">Payment Due Date: <b style="color: red;">Pay now</b></span>
					</div>
				</div>			
			</div>
		</div>	
		<div class="standard" style="margin-bottom: 1px;">
			<div class="row">
				<div class="colum-1 text-center cangiuatrang" style="background-color: #e2e2e2;">
					<div class="center-col-1">
						<span style="">Standard Special Requests*</span>
					</div>
				</div>
				<div class="colum-2" style="background-color: #fff;">
					<div class="standard-type">
						<div class="col-md-12 mx-auto" style="padding-left: 89px;">
							<div class="checkbox">
								<div class="row">
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Early Arrival (before 3pm)
					                    </label>
									</div>
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Smoking Room
					                    </label>
									</div>
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Baby Cot
					                    </label>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Late Arrival (after 7pm)
					                    </label>
									</div>
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Non Smoking Room
					                    </label>
									</div>
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Honeymooners
					                    </label>
									</div>
								</div>		
								<div class="row">
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Late Check Out (after 10am)
					                    </label>
									</div>
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Room On A High Floor
					                    </label>
									</div>
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>King Bed In Room
					                    </label>
									</div>
								</div>	
								<div class="row">
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Interconnecting Rooms
					                    </label>
									</div>
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Room On A Low Floor
					                    </label>
									</div>
									<div class="col-md-4 p-0">
										<label class="pl-2 pr-2">
					                        <input type="checkbox" value="">
					                        <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span>Two Beds In Room
					                    </label>
									</div>
								</div>																							
							</div>
						</div>
						<div class="text-standard">
							<p class="m-0">* Unless confirmed in writing by Tweet World Travel’, all special requests and comments are not guaranteed and will be at the full discretion of the hotel. There may be additional fees payable for special requests prior to check in, either to TWT or directly to the property in the local currency, including applicable taxes. Some special requests may not be possible and upgrades may be required to accommodate the request. If confirmation of your special request is required prior to check in, please email res@exciteholidays.com for availability and applicable charges.</p>
						</div>
					</div>
				</div>			
			</div>
		</div>
		<div class="additional-comment" style="margin-bottom: 1px;">
			<div class="row">
				<div class="colum-1 text-center cangiuatrang" style="background-color: #e2e2e2;">
					<div class="center-col-1">
						<span style="">Additional Comments</span>
					</div>
				</div>
				<div class="colum-2" style="background-color: #fff;">
					<div class="additional-type">
						<div class="form-group m-0">
						  <textarea class="form-control fix-khung" name="comment[<?php echo $value_data_room['id']?>][]" rows="1" id="comment"></textarea>
						</div>
					</div>
				</div>			
			</div>
		</div>	
		<div class="contract-remarks" style="margin-bottom: 1px;">
			<div class="row">
				<div class="colum-1 text-center cangiuatrang" style="background-color: #e2e2e2;">
					<div class="center-col-1">
						<span style="">Contract Remarks</span>
					</div>
				</div>
				<div class="colum-2" style="background-color: #fff;">
					<div class="contract-type">
						<div id="full-comment" class="remarks-comments">
                DOTW package Rate.<br><br>Please be advised that this room rate is based on existing bedding in the room and additional charges may apply for extra bedding. If you are unsure of the bedding configuration, please contact reservations on  1300 739 652.            
            			</div>
					</div>
				</div>			
			</div>
		</div>	
		<div class="total-price" style="margin-bottom: 1px;">
			<div class="row">
				<div class="colum-1 text-center cangiuatrang" style="background-color: #e2e2e2;">
					<div class="center-col-1">
						<span style="">Total Price</span>
					</div>
				</div>
				<div class="colum-2" style="background-color: #fff;">
					<div class="total-type text-center">
							<span><?php 
								$price = ($value_data_room['giatienss1'] != "")?$value_data_room['giatienss1'] : 0;
								echo $price * $tygia ;
								echo " ".$language;
							 ?></span>
					</div>
				</div>			
			</div>
		</div>												
	</div>
	<input type="hidden" name="id_room[]" value="<?php echo $value_data_room['id'] ?>">
	<input type="hidden" name="room_price[]" value="<?php echo $price ?>">
	<input type="hidden" name="hotel_name" value="<?php echo $data_hotel[0]['id'] ?>">
	<input type="hidden" name="loai" value="hotel">
	<input type="hidden" name="room_name[<?php echo $value_data_room['id']?>][]" value="<?=  $value_data_room['c']['nameroom']?>">
	<div style="height: 20px">
	</div>
	<?php
	$opt++;
	 }?>
</div>
<div class="wrap-book-policy">
	<h4 class="chudam" style="padding-top: 5px;padding-bottom: 10px;">Booking Policy</h4>
	<dl style="font-size: 12px">
        <dt><b>Terms and Conditions</b>:</dt>
        <dd class="m-0"> Please refer to Tweet World Travel’ Terms and Conditions via the link on the next page when confirming this quote.</dd>
        <dt><b>Cancellation &amp; Amendment Conditions</b>:</dt>
        <dd class="m-0"> Please refer to the Cancellation &amp; Amendment Policy shown above to ensure you are aware of due dates and fees, including any non-refundable items.</dd>
        <dt><b>Payment Conditions</b>:</dt>
        <dd class="m-0"> Full payment is required no later than the specified payment due date mentioned above.</dd>
        <dt><b>Instant Purchase Items</b>:</dt>
        <dd class="m-0"> Instant Purchase items will require immediate payment for confirmation.
    Rates and availability are subject to change until payment has been fully transacted.</dd>
        <dt><b>Resort, Amenities and Facilities Fees</b>:</dt>
        <dd class="m-0"> Unless stated otherwise, all resort, amenities and facilities fees will be payable directly to the hotel in the local currency.</dd>
        <dt><b>Check-in time</b>:</dt>
        <dd class="m-0"> Please be aware that our check in time is 15:00 local time on the day of arrival. Any request for an earlier check in will be noted, however, please be advised that we are unable to confirm. In order to avoid disappointment we recommend that you pre-register your room from the night prior to guarantee your immediate access to your accommodation.</dd>
        <dt><b>Late Check-in</b>:</dt>
        <dd class="m-0"> If check in is required after 7pm, Tweet World Travel’ strongly recommends advising of the late arrival. The hotel may release the room after this time if not advised of the late arrival.</dd>
    </dl>
</div>




</div>  <!-- end wrapper -->
<div class="form-button-property" style="padding-bottom: 19px;">
    <div class="w-100 mx-auto">
    	<div class="row">
	        <div class="border-nut-book mx-auto">
	        	<button class="btn-block border-0 button-border-nut-back mx-auto" style="float: left;">Back</button>
	        	<span style="padding-left: 15px;">OR</span>
	            <button class="btn-block border-0 nen-maucam button-border-nut-pro mx-auto" style="float: right;margin: 0;">Proceed</button>
	        </div>    		
    	</div>

    </div>
</div>


</form>













<style>
.wrapper-book-room{
	background-color: #fff;
	border: 1px solid #dbdbdb;
}
.info-panel{
    background: #edf3f4;
    padding-top: 20px;
    padding-left: 5px;
    padding-bottom: 20px;
    margin-bottom: 31px;
}
.info-panel .col-1f {
    width: 355px;
    padding-left: 30px;
}
.info-panel .col-2f {
    width: 165px;
}
.info-panel .col-3f {
    width: 130px;
}
.info-panel .col-4f {
    width: 90px;
}
.info-panel .col-5f {
    width: 90px;
}
.info-panel .icon+.description {
    margin-left: 31px;
}
.info-panel table .title {
    display: block;
    text-transform: uppercase;
    font-size: 10px;
    line-height: 12px;
    padding: 0;
    /*color: #777;*/
}
.info-panel table .text {
    display: block;
    line-height: 1em;
}
.description12 {
    display: block;
    line-height: 1em;
}
.dsb-hv{
  background-color: #ddd0 !important;
}
.info-boxs .text-holder {
    color: #fff;
    font-size: 18px;
    font-weight: 450;
}
.color-fa{
	color: #464a4e;
}
.colum-1{
	width: 11%;
}
.colum-2{
	width: 89%;
}
.num-people{
	font-size: 13px;
	padding-top: 15px;
}
.number{
	font-size: 13px;
}

.center-col-1{
	margin: auto;
    padding: 20px 12px;
}
.style-room-head{
	margin: 0;padding-bottom: 15px;padding-top: 18px;color: #4bc7dc;padding-left: 10px;
}
.info-type{
	padding: 20px 10px 20px 25px;
}
input {
    border: 1px solid #ccc !important;
    border-radius: 0 !important;
}
    select#soflow1, select#soflow1-color {
      -webkit-appearance: button;
    -webkit-border-radius: 0px;
    -webkit-padding-end: 20px;
    -webkit-padding-start: 2px;
    -webkit-user-select: none;
    background-image: url(img/cc.png), -webkit-linear-gradient(#ffffff, #ffffff 40%, #ffffff);
    background-position: 100% center;
    background-repeat: no-repeat;
    border: 1px solid #ccc;
    color: #555;
    font-size: inherit;
    overflow: hidden;
    padding: 5px 10px;
    text-overflow: ellipsis;
    white-space: nowrap;
    height: 38px;
}
.info-guest{
	    padding: 15px 0;
}
.payment-type{
	    padding: 32px 10px 32px 25px;
}
.amendment-type{
	    padding: 44px 10px 44px 25px;
}
.promotion-type{
		padding: 40px 10px 40px 25px;
}
.standard-type{
		padding: 10px  0;
}
.additional-type{
		padding: 25px 20px 25px 20px;
}
.contract-type{
		padding: 10px 5px 10px 20px
}
.total-type{
		padding: 35px;
		background-color: #e2e2e2;
		margin: 0 10px;
		color: #2ca8dc;
		font-weight: bold;
		font-size: 30px;
}
input[type="radio"] { display: none; }
input[type="radio"] + label { font-weight: 400; }
input[type="radio"] + label span { display: inline-block; width: 14px; height: 14px; margin: -2px 10px 0 0; vertical-align: middle; cursor: pointer; -moz-border-radius: 50%; border-radius: 50%; border: 1px solid #ccc; } 
input[type="radio"] + label span { background-color: #fff; } 
input[type="radio"]:checked + label { color: #333; font-weight: 400; } 
input[type="radio"]:checked + label span { background-color: #22b6e4; border: 4px solid #ffffff; box-shadow: 0 0 0px 2px #22b6e4; } 
input[type="radio"] + label span, 
input[type="radio"]:checked + label span { -webkit-transition: background-color 0.24s linear; -o-transition: background-color 0.24s linear; -moz-transition: background-color 0.24s linear; transition: background-color 0.24s linear; }
.checkbox .cr, .radio .cr {
	border-radius: 0 !important;
}
.text-standard{
	    padding: 10px 10px 10px 25px;
}
.form-control.fix-khung{
	border-radius: 0 !important;
	border: 1px solid #cdcdcf;
}
#full-comment{
	font-size: 17px;
    /*line-height: 1.25em;*/
    font-weight: 700;
}
.wrap-book-policy{
	padding: 20px 5px 50px 20px;
}
.wrap-book-policy dl dt {
    float: left;
    font-weight: 700;
    margin: 0 2px 0 0;
}
.border-nut-book{
    border: 5px solid #fff !important;
    border-radius: 9px;
    width: 330px;
    height: 55px;
    line-height: 40px;
    margin-top: -28px;
    background-color: #fff;
}
.button-border-nut-pro {
    font-size: 22px;
    font-weight: 400;
    border-radius: 5px;
    width: 160px;
    height: 45px;
    color: #ebf1f1;
    line-height: 40px;
    cursor: pointer;
}
.button-border-nut-back {
    font-size: 22px;
    font-weight: 400;
    border-radius: 5px;
    width: 107px;
    height: 45px;
    line-height: 40px;
    cursor: pointer;
    background-color: #fff;
    border: 2px solid #ebebeb !important;
}

.cangiuatrang{
	display:flex;
    align-items:center;
}
</style>
