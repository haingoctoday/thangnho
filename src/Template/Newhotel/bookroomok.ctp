<div class="wrapper-book-room-ok">
		<div class="heading">
			<div class="row style-h2 clearfix">
				<div class="col-md-6">
					<h2>Quote <?php echo $id_order ?></h2>
				</div>
				<div class="col-md-6">
					<ul class="add-nav">
						<li class="top-inline-links">
							<a href="">Itinerary</a>
							<a href="" title="Email invoice"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></a>
							<a href="" title="Print Statement Invoice"><i class="fa fa-print fa-fw" aria-hidden="true"></i></a>
						</li>
						<li class="top-inline-links">
							<a href="">Summary</a>
							<a href="" title="Email invoice"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></a>
							<a href="" title="Print Statement Invoice"><i class="fa fa-print fa-fw" aria-hidden="true"></i></a>				
						</li>
						<li class="top-inline-links">
							<a href="">Statement</a>
							<a href="" title="Email invoice"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i></a>
							<a href="" title="Print Statement Invoice"><i class="fa fa-print fa-fw" aria-hidden="true"></i></a>				
						</li>			
					</ul>					
				</div>
			</div>
		</div>
		<div class="content">
			<div class="component-refresh-quote row" id="">
				<div class="col-md col-md-6">
				</div>
				<div class="col-md col-md-6">
				    <button type="button" class="pull-right btn-update-quote" id="bt-refresh-quote" data-id-client="11941" data-id-booking="3239174" data-applicable-id-baskets="[&quot;2567372&quot;]" data-dialog-message="Expired!!!!" data-show-waiting-view="#waiting-view-bar-refresh">
			     		<span class="icon eh-refresh"></span>Refresh quote for latest rates		</button>
				    <div class="pull-right" id="label-refersh-quote" style="color: #777;">(last updated <span class="refresh-quote timeago" title="2018-03-29T12:30:16+11:00">2 months ago</span>)</div>
				</div>
			</div>
		</div>
			<div class="accordion">
				 
				<div class="container" >
					<div class="div_menu_show" style="width: 100%;">
						<div class="container" style="background: rgb(243, 243, 243);">
<!-- 	<div class="row">
		<div class="col-md-2"> 1</div>
		<div class="col-md-10">
			<div class="row align-center">
<div class="col-md-2 p-0">ADD ACCOMMODATION</div>
<div class="col-md-2 p-0">ADD TRANSFERS</div>
<div class="col-md-1 p-0">ADD TOURS</div>
<div class="col-md-2 p-0">ADD ACTIVITIES</div>
<div class="col-md-2 p-0">ADD CRUISE</div>
<div class="col-md-2 p-0">ADD SHORE EXCURSIONS</div>
<div class="col-md-1 p-0">CANCEL ITEMS</div>
			</div>
		</div>
	</div> -->
					<div class="table-hotel">
						<table class="payment-table">
							<tbody>
                                <?php 
                                foreach ($data_ex_room as $key => $valuedata_ex_room) {
                                if($valuedata_ex_room['loai'] == 'hotel'){
                                    $data_user_ofroom = $data_user_room[$valuedata_ex_room['room_id']];
                                }else{
                                    $data_user_ofroom = $data_user_room;
                                }

                                
                                 ?>
								<tr class="<?php echo ($key%2)? 'odd' : 'even' ?>" >
									<td class="checkbox text-center"> </td>
									<td class="id text-center">
                                        <?php 
                                        switch ($valuedata_ex_room['loai']) {
                                            case 'hotel':
                                                echo "<span class='ico ico-hotel'>&nbsp;</span>";
                                                break;
                                            case 'activity':
                                                echo "<span class='ico ico-map'>&nbsp;</span>";
                                                break;
                                            case 'tour':
                                                echo "<span class='ico ico-map'>&nbsp;</span>";
                                                break;
                                            case 'shore':
                                                echo "<span class='ico ico-map'>&nbsp;</span>";
                                                break;
                                            case 'cruise':
                                                echo "<span class='ico ico-cruise'>&nbsp;</span>";
                                            case 'transfer':
                                                echo "<span class='ico ico-motorcycle'>&nbsp;</span>";
                                                break;    
                                            default:
                                                # code...
                                                break;
                                        }
                                         ?>
										<span class="booking-item-id"> <?php echo $valuedata_ex_room['loai'] ?></span>
									</td>
									<td class="date text-center">
										<dl style="margin: 0;">
                                       	<dt>from</dt>
                                       	<dd><?= $valuedata_ex_room['FROM']?></dd>
                                    	</dl>
                                    	<dl style="margin: 0;">
                                        <dt>to</dt>
                                        <dd><?= $valuedata_ex_room['TO']?></dd>
                                   		</dl>
                                   		<dl style="margin: 0;">
                                        <dt>nights</dt>
                                        <dd><?= $valuedata_ex_room['NIGHTS']?></dd>
                                    </dl>
									</td>
									<td class="details text-left">
										<h3 class="place-name m-0">
											<a href="" class="item-details font-weight-bold"><?= $valuedata_ex_room['HotelName']?></a>
											<p class="m-0" style="color: #38a7c2;"><?= $valuedata_ex_room['name_room']?></p>
										</h3>
										<span class="place-region"><?= $valuedata_ex_room['address']?></span>
										<p class="m-0" style="color: #38a7c2;">Cancellation Policy</p>
										<!-- <p class="details-room-text">Deluxe Room, Breakfast</p> -->
										<p class="details-promotion-text"></p>
										<p class="details-pax-text"><?php echo implode(" , ",$data_user_ofroom); ?> </p>
									</td>
									<td class="due-date text-center">
										<div class="due-date-container">
                                    		<span class="text_col">Due On: </span>
                                    		<span class="date_col"><?= $valuedata_ex_room['FROM']?><br>xx:xx ACST</span>                             
                                    	</div>
									</td>
									<td class="price text-right">
										<div class="payment-status">
											<span class="text-holder" style="font-size: 13px;">quote</span>
											<!-- <span class="amount">
                                        		<span class="type">GROSS</span>&nbsp;
                                        		<strong>948</strong>
                                       			<span class="currency">AUD</span>                                    
                                    		</span> -->
                                    		<span class="net">NET <strong><?= $valuedata_ex_room['price'] * $tygia?></strong>
                                    			<span class="price-currency"><?= $language?></span>
                                    		</span>
										</div>
									</td>
									<td class="settings text-center">
										<div class="tab-menus">
											<div class="btn-group">
                                          <a href="" class="item-actions" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                              <span class="icon icon-settings-grey"></span>
                                              <span class="caret"></span>
                                          </a>
                                          <ul class="dropdown-menu dropdown-menu-right" style="font-size: 14px;">
                                          	<li><a title="">Add</a></li>
                                            <li><a title="" href="" data-is-activity="">Amend</a></li>
                                            <li><a href="#" id="" class="cancel_basket" title="Cancel this item">Cancel</a></li>
                                            <li role="separator" class="divider"></li>
                                            <li><a href="#" class="showFlexicomModal" data-bind="">FlexiComm</a></li>
                                           </ul>
                                        </div>
										</div>
									</td>
								</tr>
                            <?php } ?>
								<tr class="row-ref-number even">
								    <td class="td-ref" colspan="8">
								        <div class="">
								            <input type="hidden" autofocus="">
								            <label for="your-ref-number">Your Reference</label>
								                        <span class="fluid">
								                <div class="input-bg-right width-98">
								                    <div class="input-bg-left">
								                        <input type="text" id="your-ref-number" name="your_ref_number" class="your-ref-number" value="">
								                    </div>
								                </div>
								            </span>
								            <button type="button" class="btn-update" data-js-action="">update</button>
								            <span class="ref_updated_message"></span>
								            <div class="ref_shadow"></div>
								        </div>
								    </td>
								</tr>
							</tbody>
						</table>
					</div>
					<div class="info-bk my-4">
						<h3 class="pl-4">Booking Conditions</h3>
						<div class="row">
							<div class="col-md-6">
								<ul class="list">
								    <li>Full payment due as per the date displayed at time of booking and as displayed on the invoice; if however ferry tickets are included, balance is due prior to ticketing.</li>
								    <li>Late payment will result in cancellation of booking without notice.</li>
								    <li>Service vouchers are released upon receipt of payment. Vouchers must be passed onto the customer.</li>
								</ul>
							</div>
							<div class="col-md-6">
								<ul class="list">
								    <li>Bookings made with false names are unacceptable and will result in full charges even when service provider does not accept the booking.</li>
								    <li>Where ages are required on a booking, it is the responsibility of the agent making the booking that all ages are correct. Tweet World Travel accepts no liability where incorrect details are provided.</li>
								    <li>Unless stated otherwise, all resort, amenities and facilities fees and city taxes will be payable direct to the hotel in local currency only. </li>
								</ul>
								<a href="/terms-conditions" target="_blank" class="btn-more">read full booking terms and conditions</a>
							</div>
						</div>
					</div>
					<div class="total-price">
						<div class="row">
							<div class="col-md-6 pr-0">
								<div class="price-left">
									<div class="payment">
										<span>0</span>
										<span class="currency">AUD</span>
										<span class="text-caption">paid
										<span class="add-text">
                                    		<a href="">payment history</a>
                                		</span>
                           				</span>
									</div>
								</div>
							</div>
							<div class="col-md-6">
								<div class="price-right">
									<div class="payment">
										<span><?php $total_array =  array_sum($data_price_sum);
                                            echo $total_array * $tygia;
                                            ?></span>
										<span class="currency"><?php echo $language ?></span>
										<span class="text-caption">net balance due
                           				</span>
									</div>
								</div>
							</div>
						</div>
					</div>


					</div>
                    <form action="/agents-bookroomok_confirm" method="post" id="target">
										<div class="submit-bk">
						<div class="form-button-property" style="padding-bottom: 19px;">
						    <div class="w-100 mx-auto">
						    	<div class="row">
                                    
                                    <input type="hidden" name="data_post" value="<?php echo $data_save_post ?>">
                                
                                        <input type="hidden" name="data_order" value="<?php echo $data_save ?>">
                                        <input type="hidden" name="id_order" value="<?php echo $id_order ?>">
                                         <input type="hidden" name="status" value="1">
                                     <input type="hidden" name="loai" value="<?php echo $valuedata_ex_room['loai'] ?>">
                                        <input type="hidden" name="sumprice" value="<?php echo $total_array ?>">
                                        <input type="hidden" name="tygiacurrent" value="<?php echo $tygia ?>">
							        <div class="border-nut-bookok mx-auto">
                                         <input type="checkbox" value="" id="terms_check" required>
                       
							        	<label for="terms_check" class="">
							        		<strong>I understand and accept the Booking Terms and Conditions</strong>
							        	</label>
							            <button  class="btn-block border-0 nen-banned button-border-nut-prook mx-auto" id="buton_submit" style="float: right;margin: 0;">Confirm Quotes</button>
							        </div>    
                                    
						    	</div>
						    </div>
						</div>
					</div>
                    </form>     
					</div>
				</div>
			</div>
</div>  <!-- end wrapper -->

<style>
.nen-banned{
  background-color: #a2a9ae !important;
}
body .form-button-property label[for=terms_check]{
    color: #38a7c2!important;
    line-height: 17px;
    width: 227px;
    font-size: 14px;
    margin-bottom: 0;
    margin-top: 0.2rem;
}
.button-border-nut-prook {
    font-size: 18px;
    font-weight: 400;
    border-radius: 5px;
    width: 160px;
    height: 45px;
    color: #fff;
    line-height: 40px;
    cursor: pointer;
}
.border-nut-bookok{
    border: 5px solid #f3f3f3 !important;
    border-radius: 9px;
    width: 430px;
    height: 55px;
    line-height: 40px;
    margin-top: -28px;
    background-color: #f3f3f3;
}
.heading{
	background-color: #f3f3f3;
}
.wrapper-book-room-ok .content {
    height: 1%;
    background: #f9f9f9;
    padding: 31px 22px 54px;
    position: relative;
}
.wrapper-book-room-ok{
	width: 1100px;
    margin: 0 auto;
    /*min-height: 600px;*/
    padding-bottom: 60px;
    background-color: #fafafa;
}
.add-nav {
    margin: 0;
    padding: 25px 11px 0 0;
    list-style: none;
    float: right;
    font-size: 14px;
    line-height: 16px;
    color: #888;
    font-weight: 700;
}
.heading >.style-h2 h2 {
    margin: 10px 0 0;
    color: #38a7c2;
    font-size: 30px;
    font-weight: 700;
    letter-spacing: -1px;
    float: left;
    line-height: 56px;
}
.add-nav li {
    float: left;
    margin: 0 0 0 32px;
}
.top-inline-links a {
    color: #444;
}
.top-inline-links a {
	text-decoration: none;
}
.component-refresh-quote {
    vertical-align: middle;
    padding: 10px 0;
}
.component-refresh-quote .btn-update-quote {
    outline: none;
    border: 1px solid transparent;
    background-color: #16b9e5;
    cursor: pointer;
    white-space: nowrap;
    color: #fff;
    font-size: 13px;
    padding: 3px 9px;
}

.pull-right {
    float: right!important;
}
#label-refersh-quote {
    margin-top: 2px;
    margin-right: 15px;
}
.wrapper-book-room-ok .icon {
    float: left;
    display: inline-block;
}
.eh-refresh, .eh-refresh.active {
    display: inline-block;
    width: 16px;
    height: 16px;
    margin-right: 10px;
    margin-top: 2px;
}
.eh-refresh {
    background: url(/img/refresh-icon.png?v6) no-repeat 50%;
}
.sty-input-bok {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 22px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.accordion .info-bk {
  background-color: #fff;
  padding: 10px 10px;
}
.accordion .info-bk h3{
      margin: 0 0 9px;
    display: inline-block;
    vertical-align: top;
    position: relative;
    text-transform: uppercase;
    font-size: 13px;
    line-height: 16px;
}
.accordion .info-bk .list li {
    text-indent: 0;
}
.accordion .info-bk .list {
    color: #555;
}
.info-bk .list {
        margin: 0;
    /* padding: 4px 0 0; */
    font-size: 12px;
    line-height: 15px;
}
.total-price .price-left{
    background: #fff;
}
.total-price .price-right{
      background: #e2e2e2;
}
.total-price .price-left .payment,.total-price .price-right .payment{
      display: block;
    text-align: center;
    padding: 30px 0;
    font-size: 30px!important;
    line-height: 43px;
    color: #38a7c2;
    text-decoration: none;
    font-weight: 600;
    letter-spacing: -1px;
    width: 100%;
}
.total-price .price-right{
  background-color: #e2e2e2;
}
.total-price span.currency {
    letter-spacing: -3px;
    font-weight: 400;
}
.total-price .text-caption .add-text {
    position: absolute;
    bottom: 100%;
    left: 0;
    font-size: 12px;
    line-height: 14px;
    margin: 0 0 -2px;
    font-weight: 700;
    color: #9fa6ab;
    white-space: nowrap;
}
.total-price .text-caption .add-text a{
  text-decoration: none;
}
.total-price .text-caption {
    vertical-align: baseline;
    display: inline-block;
    font-size: 14px;
    line-height: 18px;
    color: #c90a10;
    position: relative;
    font-weight: 400;
}
.payment-table tr.even>td {
    background: #fff;
}
.accordion .total-price{
	padding-bottom: 50px;
}
.payment-table tr>td {
    vertical-align: middle;
    padding: 10px 0 9px;
    background: #f9f9f9;
}
.table-hotel .payment-table .checkbox {
    height: 100px;
    width: 56px;
}
.even .checkbox {
    display: table-cell;
}
.table-hotel .payment-table .id {
    width: 73px;
    text-align: center;
    text-transform: uppercase;
    font-weight: 700;
    border-bottom: 1px solid transparent;
}
.table-hotel .payment-table .date {
    width: 215px;
    padding-left: 28px;
    padding-top: 16px;
}
.table-hotel .payment-table .details {
    width: 490px;
    vertical-align: top;
    margin: 0;
    padding: 10px 0;
}
.table-hotel .payment-table .due-date {
    text-align: left;
    padding: 0 5px 0 0;
    width: 360px;
}
.table-hotel .payment-table .price {
    width: 250px;
}
.table-hotel .payment-table .settings {
    width: 125px;
    padding: 7px 6px 0 15px;
}
.table-hotel .booking-item-id {
    display: block;
    font-size: 12px;
    font-weight: 700;
    color: #574e53;
    margin-top: 7px;
}
.payment-table .ico, .product-ico {
    display: inline-block;
    vertical-align: middle;
    overflow: hidden;
    font-size: 0;
    line-height: 0;
    margin-top: 3px;
    background-image: url(/img/sprite-ico.png?v5);
    background-repeat: no-repeat;
}
.ico-hotel {
    background-position: -35px -315px;
    width: 24px;
    height: 26px;
}
.ico-map {
    background-position: -271px -1336px;
    width: 24px;
    height: 26px;
}
.ico-cruise {
    background-position:-415px -1244px;
    width: 24px;
    height: 26px;
}
.ico-motorcycle {
    background-position: -429px -35px;
    width: 37px;
    height: 26px;
}
.payment-table dl:first-child {
    margin-top: 0;
}
.payment-table dl {
    position: relative;
    top: -2px;
    /*margin: 9px 0 0;*/
    font-size: 15px;
    line-height: 20px;
    color: #555;
    overflow: hidden;
    height: 1%;
}
.payment-table dl dt {
    float: left;
    width: 43px;
    text-align: right;
    text-transform: uppercase;
    color: #777;
    font-size: 10px;
    line-height: 12px;
    padding: 6px 6px 0 0;
}
.payment-table dl dd {
    margin: 0;
    font-size: 11px;
    font-weight: 700;
    padding: 6px 6px 1px 0;
    line-height: 11px;
}
.payment-table .details{
      font-size: 12px;
    line-height: 20px;
}
.payment-table h3 {
    font-size: 14px;
    line-height: 20px;
}
.payment-table .due-date .text_col {
    padding: 0 7px;
}
.payment-table .due-date span {
    float: left;
    vertical-align: middle;
}
.payment-table .details .place-name, .payment-table .details .place-name .item-details {
    color: #38a7c2;
}
.payment-table .details p {
    margin: 0;
    color: #555;
}
a{
  text-decoration: none !important;
}
.payment-table .payment-status .text-holder {
    min-height: 24px;
    color: #f32930;
    font-weight: 700;
}
.payment-table .payment-status>span {
    display: block;
}
.payment-table .payment-status .amount {
    font-weight: 400;
    font-size: 22px;
    line-height: 26px;
    padding: 0;
    color: #444;
}
.payment-table .payment-status .amount span.type {
    font-size: 14px;
    color: #666;
    font-weight: 700;
}
.payment-table .price span.currency {
    font-weight: 700;
    letter-spacing: 0;
}
.payment-table .payment-status span.net {
    font-size: 15px;
    font-weight: 700;
    color: #666;
    line-height: 21px;
}
.price-currency {
    font-weight: 400;
    margin-left: 1px;
}
.payment-table .settings .tab-menus {
    width: 50px;
    min-height: 63px;
    padding: 20px 0 4px 25px;
    background: url(/img/bg-shadow-5.png?v3) 0 50% no-repeat;
}
.item-actions {
    display: block;
    height: 30px;
    color: #555;
}
.icon-settings-grey, .icon-settings-white {
    background-image: url(/img/spritesheet.png);
    width: 22px;
    height: 22px;
}
.icon-settings-grey {
    background-position: -738px -500px;
}
.tab-menus .caret {
    display: inline-block;
    width: 0;
    height: 0;
    margin-left: 23px;
    vertical-align: middle;
    border-top: 4px dashed;
    border-top: 4px solid\9;
    border-right: 4px solid transparent;
    border-left: 4px solid transparent;
    margin-top: -15px;
}
.settings .dropdown-menu .divider {
    height: 1px;
    margin: 3px 0;
    overflow: hidden;
    background-color: #e5e5e5;
}
.settings .dropdown-menu>li>a {
    display: block;
    padding: 3px 20px;
    clear: both;
    font-weight: 400;
    line-height: 1.42857143;
    color: #333;
    white-space: nowrap;
}
.settings .dropdown-menu>li>a:focus,.settings .dropdown-menu>li>a:hover {
    text-decoration: none;
    color: #262626;
    background-color: #f5f5f5;
}
.payment-table {
    margin: 0;
    width: 100%;
    color: #555;
}
.payment-table .row-ref-number {
    margin-bottom: 10px;
    position: relative;
}
.payment-table tr.row-ref-number>td {
    background-color: #f3f3f3;
    padding-top: 10px;
    padding-bottom: 0;
}
.payment-table .row-ref-number {
    margin-bottom: 10px;
    position: relative;
}
.payment-table tr.row-ref-number>td {
    background-color: #f3f3f3;
    padding-top: 10px;
    padding-bottom: 0;
}
.payment-table .row-ref-number .btn-update, .payment-table .row-ref-number .ref_updated_message, .payment-table .row-ref-number .td-ref label {
    top: -13px;
    position: relative;
    display: inline-block;
    margin-right: 5px;
}
.payment-table .row-ref-number .td-ref label {
    padding-left: 278px;
}
.payment-table .td-ref .fluid {
    display: inline-block;
    width: 288px;
}
.width-98 {
    width: 98%;
}
.input-bg-right {
    background: url(/img/sprite-bg.png?v5) no-repeat scroll 100% -2291px transparent;
    float: left;
    padding: 0 5px 0 0;
    margin: 0;
    height: 38px;
}
.input-bg-right>.input-bg-left {
    background: url(/img/sprite-bg.png?v5) no-repeat scroll 0 -2251px transparent;
    float: left;
    height: 39px;
    padding: 0;
    width: 100%;
    margin: 0;
}
.component-refresh-quote .btn-update-quote, .payment-table .row-ref-number .btn-update {
    outline: none;
    border: 1px solid transparent;
    background-color: #16b9e5;
    cursor: pointer;
    white-space: nowrap;
    color: #fff;
    font-size: 13px;
    padding: 3px 9px;
}
.even .ref_shadow {
    background-color: #f9f9f9;
}
.ref_shadow {
    background: url(/img/bg-shadow-2.png?v3) no-repeat scroll bottom #fff;
    border-top: 1px solid #edf2f2;
    clear: both;
    display: block;
    height: 7px;
    top: 5px;
    width: 100%;
}
.payment-table .row-ref-number .your-ref-number {
    text-align: left;
}
#main .search-block .col .fluid .holder, .fluid input {
    width: 100%!important;
}

.row-ref-number .input-bg-right input {
    /*background: #fff repeat scroll 0 0 transparent;*/
    /*border: medium none;*/
    color: #38a7c2;
    float: left;
    font-size: 15px;
    margin: 0 -5px 0 0;
    padding: 10px 0 10px 7px;
    width: 100%;
}
.row-ref-number .input-bg-right input {
  outline: none;
}
#buton_submit:hover{
 background-color: #f39c12 !important;
}

}
</style>
<script type="text/javascript">
	
	
	$( ".onclick_div_menu_show" ).click(function() {
  $( ".div_menu_show" ).toggle();
});
</script>
<!-- //todo

- THAY BUTTON WITH DÂT GET SANG THE DIV FULL WIDTH
- HOVER TITLE DUOI TEN KHACH SAN HIEN TOOL TIP
- THEM MENU VA SELECT ALL
-->

