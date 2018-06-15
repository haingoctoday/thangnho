<style>
.col-md-1.p-0 {
    letter-spacing: -1px;
    font-size: 14px;
}
.display-tn{
    display: flex;
}
.display-tn label{
    line-height: 35px;
    letter-spacing: -1px;
}
.display-tn input{
    height: 35px !important;
}
    .border-nut-profile{
    border: 5px solid #ebf1f1 !important;
    border-radius: 12px;
    width: 121px;
    height: 55px;
    line-height: 40px;
    margin-top: -28px;
}
.button-border-profile {
    font-size: 15px;
    font-weight: 400;
    border-radius: 5px;
    width: 111px;
    height: 45px;
    color: #ebf1f1;
    line-height: 45px;
}
.content-agent-detail{
        padding-top: 36px;
    padding-bottom: 36px;
}
input.button_ud-profile {
    background-color: #fff;
    border: 0;
    background-image:url(../img/button-up-down.png);
    background-repeat: no-repeat; 
    background-position: 4px 15px;
    width: 27px;
    background-size: 19px;
}
.wrapper-mybooking{
    background-color: #fff;
    padding-bottom: 25px;
}
.wrapper-refined-book{
    background-color: #fff;
    padding-bottom: 23px;
}
input {
    border: 1px solid #ccc !important;
    border-radius: 0 !important;
}
select#soflow, select#soflow-color {
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
    height: 35px;
}
.button-calendar{
    background: url(img/icon_calendar.png) no-repeat;
    width: 74px;
    height: 35px;
    border: 1px solid #ccc;
    background-color: white;
    background-position: 50%;
    margin-left: 5px;
}
.fix-row-book{
	height: 34px;
}
.content-refined-book{
    padding-top: 25px;
    padding-bottom: 25px;	
}
.card-booking{
	background-color: #fff;
}
table {
    border-collapse: collapse;
    width: 100%;
}

th, td {
    padding: 8px;
    text-align: left;
}

tr:hover {background-color:#ebf1f1;}
.id{
    color: black;
    display: block;
    font-size: 14px;
    line-height: 17px;
    font-weight: bold;
}
.col-1{
    width: 135px;
    padding-left: 26px;
    padding-right: 14px;
}
.col-2{
width: 155px;
    padding-left: 3px;
    padding-right: 5px;
}
.col-3{
    width: 310px;
    padding-left: 14px;
    padding-right: 6px;
}
.col-4{
    width: 371px;
    max-width: 371px;
    padding-left: 4px;
    padding-right: 16px;
    text-align: right;
    white-space: normal;
}
dt{
    float: left;
    margin: 0 10px 0 0;
    color: black;
    width: 60px;
    text-align: left;
    font-size: 12px;
    line-height: 20px;
    text-transform: uppercase;
}
dd{
    margin: 0 0 5px;
    color: black;
    font-size: 12px;
    line-height: 20px;
    text-align: left;
}
.description{
    display: block;
    text-align: right;
    color: #38a7c2;
    font-size: 13px;
    line-height: 15px;
    font-weight: 700;
    padding: 0 0 3px;
    text-transform: capitalize;
}
.col-4 .place {
    color: #444;
    font-size: 18px;
    line-height: 20px;
    padding: 0 0 5px 34px;
    vertical-align: top;
    text-align: right;
}
.col-4 .city {
    font-size: 18px;
    line-height: 22px;
    display: block;
    text-align: right;
    color: #999;
}
table td {
    padding: 11px 0;
    vertical-align: middle;
}
dd.pax-names {
    font-weight: 700;
}
#mybooking_link:hover{
    text-decoration: none;
}
.form-group.select {
    width: 100%;
}
</style>

<?php 
//debug($booking_data);
$array_count = array();
foreach ($booking_data as $key => $v_booking_data) {
   
   $array_count[$v_booking_data['status']][] = $v_booking_data['status'];
}
//debug($array_count);
 ?>


<div class="wrapper-mybooking" id="manage">
    <div class="container" style="background-color: #ebf1f1;margin-top: 4px;">    
        <div class="row" style="background-color: #fff">
            <h4 style="font-weight: bold;padding-left: 22px;padding-top: 15px;padding-bottom: 10px;">BOOKING SEARCH</h4>       
        </div>
        <div class="content-agent-detail">
               <form action="<?php echo $this->Url->build(array('controller' => 'Users', 'action' => 'mybooking')); ?>" method="post">
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 320px;">Booking ID
                    </label>
                    <input class="form-control" type="text" name="bookingid" id="firstname" placeholder="">

                    <label class="display-7" style="width: 420px;padding-left: 15px;padding-right: 10px;">Your Reference
                    </label>
                    <input class="form-control" type="text" name="reference" id="firstname" placeholder="">
                </div>
                <div class="col-md-6 display-tn">
                    <?php 
                     array_unshift($status_order_main, "All Status");
                     echo $this->Form->input('status_order_main', array('label'=>false, 'type'=>'select', 'options'=>$status_order_main,'class'=>'form-control mauxanh-input','id'=>'soflow'));
                     ?>
                   <!--  <select id="soflow" class="form-control mauxanh-input" >
                      <option>Status</option>
                      <option>Option 1</option>
                      <option>Option 2</option>
                    </select> -->
                </div>
            </div>
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 185px;">Destination Name
                    </label>
                    <input class="form-control" type="text" name="destination" id="firstname" placeholder="">
                </div>
                <div class="col-md-6 display-tn">
                    <!-- <select id="soflow" class="form-control mauxanh-input" >
                      <option>User Name</option>
                      <option>Option 1</option>
                      <option>Option 2</option>
                    </select> -->
                    <?php 
                  //  $product_type.unshift(34);
                   // array_unshift($product_type, "All Product Type");
                     echo $this->Form->input('product_type', array('label'=>false, 'type'=>'select', 'options'=>$product_type,'default' => '0','class'=>'form-control mauxanh-input','id'=>'soflow'));
                     ?>
                </div>
            </div>
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 660px;">Traveller First Name
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="">

                    <label class="display-7" style="width: 360px;padding-left: 15px;padding-right: 15px;">Last Name
                    </label>
                    <input class="form-control" type="text" name="lastname" id="firstname" placeholder="">
                </div>
              
            </div>
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-3 display-tn pr-0">
                    <label class="display-7" style="width: 320px;">Created From
                    </label>
                    <input class="form-control" type="text" name="createdform" id="firstname" placeholder="">
                    <button class="button-calendar"></button>
                </div>
                <div class="col-md-3 display-tn" style="padding-left: 36px;">
                    <label class="display-7" style="width: 250px;">Created To
                    </label>
                    <input class="form-control" type="text" name="createdto" id="firstname" placeholder="">
                    <button class="button-calendar"></button>
                </div>
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 880px;letter-spacing: -2px;">Departure Within (days)
                    </label>
                    <input class="form-control" type="text" name="departure" id="firstname" placeholder="">

                    <label class="display-7" style="width: 1010px;padding-left: 10px;padding-right: 10px;letter-spacing: -2px;">Payment Due Within (days)
                    </label>
                    <input class="form-control" type="text" name="paymentdue" id="firstname" placeholder="">
                </div>
            </div>
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-3 display-tn pr-0">
                    <label class="display-7" style="width: 320px;">Service From
                    </label>
                    <input class="form-control" type="text" name="servicefrom" id="firstname" placeholder="">
                    <button class="button-calendar"></button>
                </div>
                <div class="col-md-3 display-tn" style="padding-left: 36px;">
                    <label class="display-7" style="width: 250px;">Service To
                    </label>
                    <input class="form-control" type="text" name="serviceto" id="firstname" placeholder="">
                    <button class="button-calendar"></button>
                </div>
            </div>
        </div>       
    </div>
    <div class="form-button-property">
        <div class="w-100 mx-auto">
            <div class="border-nut-profile mx-auto">
                <button class="btn-block border-0 nen-maucam button-border-profile mx-auto">Search</button>
            </div>
        </div>
	</div> 
    <?= $this->Form->end() ?>
</div>
<div class="wrapper-refined-book">
<div class="container" style="background-color: #ebf1f1;margin-top: 4px;">    
        <div class="row" style="background-color: #fff">
            <h4 style="font-weight: bold;padding-left: 22px;padding-top: 15px;padding-bottom: 10px;">REFINED BOOKING SEARCH FILTERSH</h4>       
        </div>
    <?php //debug($status_order_main) ?>
        <div class="content-refined-book">
            <div class="row" style="padding-left: 28px;padding-right: 12px;">
            	<div class="col-md-4">
            		<div class="row">
            		 <div class="col-md-3 book-form-agency p-0">
                        <div class="w-100 text-center px-1">
						   <img src="img/icon_paid_twt.png" alt="" style="width: 30%;">
                           <span class="text-color-b">PENDING</span>
                        </div>
                     </div>
                     <div class="col-md-8 pr-0" style="padding-left: .3rem!important;">
                        <div class="row book-form-agency m-0 fix-row-book">
                           <div class="col-md-10 text-left p-0"><a href="" class="text-color-a">Quote</a></div>
                           <div class="col-md-2 text-right text-color-num"><?php echo count(!empty($array_count[1])?$array_count[1]:array()) ?></div>
                        </div>
                        <div class="row book-form-agency m-0 fix-row-book">
                           <div class="col-md-10 text-left p-0"><a href="" class="text-color-a">instant purchase (item not held)</a></div>
                           <div class="col-md-2 text-right text-color-num"><?php echo count(!empty($array_count[2])?$array_count[2]:array()) ?></div>
                        </div>
                        <div class="row book-form-agency m-0 fix-row-book">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">amendment pending</a></div>
                           <div class="col-md-3 text-right text-color-num"><?php echo count(!empty($array_count[3])?$array_count[3]:array()) ?></div>
                        </div>
                        <div class="row book-form-agency m-0 fix-row-book">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">pending unconfirmed</a></div>
                           <div class="col-md-3 text-right text-color-num"><?php echo count(!empty($array_count[4])?$array_count[4]:array()) ?></div>
                        </div>
                     </div>
                 </div>
            	</div>
            	<div class="col-md-4">
            		<div class="row">
                     <div class="col-md-3 book-form-agency">
                        <div class="w-100 text-center">
                           <img src="img/icon_unpaid_twt.png" alt="" style="width: 40%;">
                           <span class="text-color-b">UNPAID</span>
                        </div>
                     </div>
                     <div class="col-md-8 pr-0" style="padding-left: .3rem!important;">
                        <div class="row book-form-agency m-0">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">confirmed unpaid</a></div>
                           <div class="col-md-3 text-right text-color-num"><?php echo count(!empty($array_count[5])?$array_count[5]:array()) ?></div>
                        </div>
                        <div class="row book-form-agency m-0">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">payment Due in 48 hours</a></div>
                           <div class="col-md-3 text-right text-color-num"><?php echo count(!empty($array_count[6])?$array_count[6]:array()) ?></div>
                        </div>
                     </div>
                    </div>
                    <div class="row" style="margin-top: 6px;">
                     <div class="col-md-3 book-form-agency">
                        <div class="w-100 text-center">
                           <img src="img/icon_check_twt.png" alt="" style="width: 40%;">
                           <span class="text-color-b">PAID</span>
                        </div>
                     </div>
                     <div class="col-md-8 pr-0" style="padding-left: .3rem!important;">
                        <div class="row book-form-agency m-0">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">confirmed (paid)</a></div>
                           <div class="col-md-3 text-right text-color-num"><?php echo count(!empty($array_count[7])?$array_count[7]:array()) ?></div>
                        </div>
                        <div class="row book-form-agency m-0">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">refund pending</a></div>
                           <div class="col-md-3 text-right text-color-num"><?php echo count(!empty($array_count[8])?$array_count[8]:array()) ?></div>
                        </div>
                        <div class="row book-form-agency m-0">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">Quote</a></div>
                           <div class="col-md-3 text-right text-color-num"><?php echo count(!empty($array_count[9])?$array_count[9]:array()) ?></div>
                        </div>
                     </div>
                  </div>
            	</div>
            	<div class="col-md-4 pr-0">
            		<div class="row">
            		 <div class="col-md-3 book-form-agency p-0">
                        <div class="w-100 text-center px-4">
                           <img src="img/icon_fyi_twt.png" alt="" style="width: 60%;">
                           <span class="text-color-b">FYI</span>
                        </div>
                     </div>
                     <div class="col-md-8 pr-0" style="padding-left: .3rem!important;">
                        <div class="row book-form-agency m-0 fix-row-book">
                           <div class="col-md-10 text-left p-0"><a href="" class="text-color-a">Payment Due In 30 Days</a></div>
                           <div class="col-md-2 text-right text-color-num"><?php echo count(!empty($array_count[10])?$array_count[10]:array()) ?></div>
                        </div>
                        <div class="row book-form-agency m-0 fix-row-book">
                           <div class="col-md-10 text-left p-0"><a href="" class="text-color-a">Departure Within 7 Days</a></div>
                           <div class="col-md-2 text-right text-color-num"><?php echo count(!empty($array_count[11])?$array_count[11]:array()) ?></div>
                        </div>
                        <div class="row book-form-agency m-0 fix-row-book">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">Departure Within 21 Days</a></div>
                           <div class="col-md-3 text-right text-color-num"><?php echo count(!empty($array_count[12])?$array_count[12]:array()) ?></div>
                        </div>
                        <div class="row book-form-agency m-0 fix-row-book">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a"></a></div>
                           <div class="col-md-3 text-right text-color-num"></div>
                        </div>
                     </div>
                 </div>
            	</div>
            </div>
        </div>
	</div>
</div>

<div class="header-title" style="background-color: #fff;margin-top: 4px;margin-bottom: 6px;">
        <h4 style="font-weight: bold;padding-left: 22px;padding-top: 15px;padding-bottom: 10px;margin: 0px;">Bookings</h4>       
</div>
<?php 
    foreach ($booking_data as $key => $valuebooking_data) {
     //   debug($valuebooking_data);
    $user_order_view = json_decode($valuebooking_data['data_order'],TRUE);
 //debug($user_order_view['user']);
 ?>
 <a href="<?php echo  $this->Url->build('/agents-view-booking?id='. $valuebooking_data['id_order'], ['escape' => false,'fullBase' => true,]); ?>" id="mybooking_link">
    
    <?php // $this->Html->link('', ['controller'=>'Agents','action' => 'viewbooking',$valuebooking_data['id_order']], ['escape' => false,'id'=>'mybooking_link']) ?>
<div class="container px-0">    
    <div class="card-booking">
        <div class="row m-0">
        <table  style="background-color: #fff">
          <tr data-id-booking="" class="id_booking">
            <td class="col-1">
                <a href="">
                    <span class="id">ID
               
                <strong><?php echo $valuebooking_data['id_order'] ?></strong>
                </span>
                 </a>
            </td>
            <td class="col-2">
                <dl class="date m-0">
                    <dt>Created</dt>
                    <dd><?php echo $valuebooking_data['created'] ?></dd>
                    <dt>Service</dt>
                    <dd><?php echo $valuebooking_data['id_order'] ?></dd>
                    <dt>Payment </dt>
                    <dd>xxx xxx</dd>
                    <dt>Due Date </dt>
                    <dd>xxx xxx</dd>
                </dl>
            </td>
            <td class="col-3">
                    <dl class="info">
                        <dt>Product</dt>
                        <dd style="text-transform:capitalize;"><?php echo $valuebooking_data['loai'] ?></dd>
                        <dt>User</dt>
                        <dd><acronym title="#"><?php echo $user_view[$valuebooking_data['user_order']] ?></acronym></dd>
                        <dt>Guest</dt>
                        <?php if($valuebooking_data['loai'] != 'hotel') { ?>
                        <dd class="pax-names"><?php echo implode(" , ",$user_order_view['user']); ?></dd>
                        <?php }else{ ?>
                         <dd class="pax-names"><?php 
                         //print_r($user_order_view['user']);
                         foreach ($user_order_view['user'] as $key => $value_user) {
                         echo implode(" , ",$value_user); }?></dd>   
                        <?php } ?>
                    </dl>
            </td>
			<td class="col-4">
                    <span class="description">quote</span>
                    <span class="place"><?php echo $user_order_view['data_ex_room'][0]['HotelName'] ?><br></span>
                    <span class="city"><?php echo $user_order_view['data_ex_room'][0]['address'] ?></span>
            </td>
        </tr>
    	</table>
        </div>
    </div>     
</div>
</a>
<div style="height: 5px"></div>
<?php } ?>
<!-- <div class="container"> -->
    <div class="box-footer clearfix">
          <ul class="pagination pagination-sm no-margin pull-right">
            <?php echo $this->Paginator->numbers(); ?>
          </ul>
        </div>
    <!-- </div> -->
  <style>
/*.pagination {
    display: inline-block;
}*/

.pagination a {
      color: #fff;
    float: left;
    padding: 8px 16px;
    text-decoration: none;
    transition: background-color .3s;
    background: #2a3c58;
    border: 1px solid #fff;
}

.pagination a.active {
    background-color: #4CAF50;
    color: white;
}

.pagination a:hover:not(.active) {background-color: #ddd;}
</style>