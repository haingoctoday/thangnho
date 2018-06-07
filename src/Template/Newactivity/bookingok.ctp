<?php 
//debug($data_post);
//debug($data_activity);
$data_activity = $data_activity[0];
 ?>
<!-- <form action="/agents-bookroomok_confirm" method="post" id="target"> -->
<form action="/agents-bookroomok" method="post" id="target">
    
<section class="form-acti-ok">
  
    <div class="container p-0">
        <div class="wrapper-acti-ok" style="background-color: #fff;">
            <div class="container">
            <div class="row">

            <div class="col-md-2 p-0">
                <img src="assets/images/01.jpg" alt="" title="" media-simple="true" class="w-100 h-100">
            </div>

            <div class="col-md-7">
                <div class="wrapper-about-acti-ok">
                <span class="name-title"><?php echo $data_activity['name'] ?></span>
                <span class="sub-title" style="text-transform:capitalize"><?php echo $data_activity['loai'] ?></span>
                <div class="price-info">
                    <span style="font-size: 13px;">Total</span>
                    <span style="font-size: 30px;font-weight: 600;"><?php echo $data_post['price'] * $tygia ?></span>
                    <span style="font-size: 19px;font-weight: 600;"><?php echo $language ?></span>

                </div>
                </div>
            </div>

            <div class="col-md-3" style="background-color: #eee;">
                <div class="wrapper-about">
                    <div class="row bor-acti">
                        <div class="col-md-6 title">Date</div>
                        <div class="col-md-6 detail"><?php echo $data_post['date_pick'] ?></div>
                    </div>
                    <div class="row bor-acti">
                        <div class="col-md-6 title">Destination</div>
                        <div class="col-md-6 detail"><?php echo $data_activity['destinations'] ?></div>
                    </div>
                    <div class="row bor-acti">
                        <div class="col-md-6 title">Adults</div>
                        <div class="col-md-6 detail"><?php echo $data_post['adult'] ?></div>
                    </div>                
                    <div class="row">
                        <div class="col-md-6 title">Children</div>
                        <div class="col-md-6 detail"><?php echo $data_post['child'] ?></div>
                    </div>
                </div>




            </div>
            </div>
</div>
        </div>
    </div>
</section>



<div class="container acti-book-ok">

<div class="title-acti-book-ok pt-5">
    <i class="fa fa-user fa-fw" aria-hidden="true" style="font-size: 25px;"></i>
    <span class="text">Participants,
        <?php if($data_post['adult'] > 0){
            ?>
             <span><?php echo $data_post['adult'] ?> Adults</span>
            <?php
        } ?>
        <?php if($data_post['child'] > 0){
            ?>
             <span><?php echo $data_post['child'] ?> Child</span>
            <?php
        } ?>
    </span>
</div>

    <div class="row pt-3 border-acti-ok">
    <?php for ($nump=0; $nump < $data_post['adult'] ; $nump++) { 
      
    ?>
        <div class="col-md-12">
            <div class="row">
                  <div class="col-md-2">
                        <div class="form-group">
                            <select id="selectbasic" name="selectbasic[]" class="form-control">
                                <option value="Mr">Mr</option>
                                <option value="Mrs">Mrs</option>
                                <option value="Ms">Ms</option>
                                <option value="Mstr">Mstr</option>
                                <option value="Miss">Miss</option>
                                <option value="Dr">Dr</option>
                                <option value="Prof">Prof</option>
                                <option value="Sir">Sir</option>
                                <option value="Lady">Lady</option>
                            </select>
                        </div>
                    </div>
                  <div class="col-md-4">                    
                    <input class="form-control" name="firtname[]" type="text" placeholder="First Name">
            </div>           
                <div class="col-md-4">                    
                    <input class="form-control" name="lastname[]" type="text" placeholder="Last Name">
            </div>
                    <div class="col-md-2">                    
                     <span>Adult (12 - 99)</span>
            </div>
    </div>

</div>
        <?php } ?>   
</div>


<div class="title-acti-book-ok">
    <i class="fa fa-hashtag fa-fw" aria-hidden="true" style="font-size: 25px;"></i>
    <span class="text">Your Reference
    </span>
</div>
<div class="row pt-3 border-acti-ok">
                      <div class="col-md-4">                    
                    <input class="form-control" type="text" name="reference" placeholder="Your reference...">
            </div>    

</div>

<div class="title-acti-book-ok">
    <i class="fa fa-credit-card-alt fa-fw" aria-hidden="true" style="font-size: 25px;"></i>
    <span class="text">Payment Due Date
    </span>
</div>
<div class="row pt-3 border-acti-ok" style="border-top: 1px solid #000;">
                      <div class="col-md-12">                    
                        <span class="payment-date-text">Due Now</span>
            </div>    
    
</div>

<div class="title-acti-book-ok">
    <i class="fa fa-pencil fa-fw" aria-hidden="true" style="font-size: 25px;"></i>
    <span class="text">Amendment & Cancellation Policy
    </span>
</div>
<div class="row pt-3 border-acti-ok">
                      <div class="col-md-12">                    
                        <span class="payment-date-text">Instant Purchase: Non-Refundable & Non-Amendable</span>
            </div>    
    
</div>

<!-- <div class="title-acti-book-ok">
    <i class="fa fa-question-circle fa-fw" aria-hidden="true" style="font-size: 25px;"></i>
    <span class="text">Special Questions
    </span>
</div>
<div class="row pt-3 border-acti-ok">
                      <div class="col-md-12 pb-3">                    
                        <span class="payment-date-text">Hotel Name and Address?</span>
                        <input class="form-control" type="text" placeholder="Hotel Name and Address?">
            </div>    
                          <div class="col-md-12 pb-3">                    
                        <span class="payment-date-text">Guest contact number, including country code?</span>
                        <input class="form-control" type="text" placeholder="Guest contact number, including country code?">
            </div>
                                      <div class="col-md-12 pb-3">                    
                        <span class="payment-date-text">Passenger #1 home phone</span>
                        <input class="form-control" type="text" placeholder="Passenger #1 home phone">
            </div> 
                                      <div class="col-md-12 pb-3">                    
                        <span class="payment-date-text">Passenger #2 home phone</span>
                        <input class="form-control" type="text" placeholder="Passenger #2 home phone">
            </div> 
</div>
 -->
<div class="title-acti-book-ok">
    <i class="fa fa-file-text fa-fw" aria-hidden="true" style="font-size: 25px;"></i>
    <span class="text">Special Requests
    </span>
</div>
<div class="row pt-3 border-acti-ok">
<textarea type="text" class="form-control hv-acti" name="message" rows="5" data-form-field="Message" id="message-form1-1d"></textarea>
</div>

<div class="title-acti-book-ok">
    <i class="fa fa-info-circle fa-fw" aria-hidden="true" style="font-size: 25px;"></i>
    <span class="text">Important Information
    </span>
</div>
<div class="row pt-3 border-acti-ok">
    <div class="container-descript">
<span><b>Special Requests</b></span>
<p>Excite Holidays endeavours to fulfill your requirements to the best of our ability. Please note that special requests ​are not guaranteed, they will be passed on to the local supplier on your behalf.</p>
<span><b>Photo Identification</b></span>
<p>The activity operator ​may require valid photo identification such as a passport, driver's licence or any other form of identification displaying a current photo of the lead participant in the booking. This is required to protect the customer's purchase. Not all passengers will require photo identification. If the customer uses a different name to that on their photo identification, a valid secondary form of identification with the same name on the booking will be required.</p>
<span><b>Pick-up</b></span>
<p>Where pick-up services are provided, clients are required to reconfirm the pick-up service 24 hours prior to the service date directly with the ​activity operator. Activities operators will pick-up from the majority of major hotels, but there is no guarantee that a pick-up is available for all hotels. When reconfirming pick-up, if the requested hotel is not available, an alternative point will be provided. Pick-up time and duration periods are an approximation only and may be subject to delays, such as traffic conditions or poor weather.</p>
</div>
</div>

</div>

<!-- <div class="submit-acti">
    <div class="container submit-acti-ok"> <button  class="btn-block border-0 nen-banned button-border-nut-prook mx-auto" id="buton_submit" style="float: right;margin: 0;">Confirm Quotes</button></div>
</div> -->
 <!-- <form action="/agents-bookroomok_confirm" method="post" id="target"> -->
                                        <div class="submit-bk">
                        <div class="form-button-property" style="padding-bottom: 19px;">
                            <div class="w-100 mx-auto">
                                <div class="row">
                                    
                                  
                                        <input type="hidden" name="data_order" value="<?php  echo $data_post_save ?>">
                                        <input type="hidden" name="id_order" value="<?php  echo $this->request->session()->read('Auth.User.id') ?>">
                                         <input type="hidden" name="status" value="1">
                                     <input type="hidden" name="loai" value="<?php echo $data_activity['loai'] ?>">
                                        <input type="hidden" name="sumprice" value="<?php echo $data_post['price'] ?>">
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

 
  <style>
.form-acti-ok{
        padding: 25px;
    background-color: #555555;
}

.col-md-3 .wrapper-about{
    padding: 20px;
}
.col-md-3 .wrapper-about .row{
    padding-bottom: 5px;
    padding-top: 5px;
}
.col-md-3 .wrapper-about .row.bor-acti{
    border-bottom: 1px solid #cecece;
}
.col-md-3 .wrapper-about .row .col-md-6.title{
    color: #cecece;
    font-size: 15px;
}
.col-md-3 .wrapper-about .row .col-md-6.detail{
    font-size: 14px;
}
.container.acti-book-ok{
        width: 890px;
    margin: 0 auto;
}
.container .section-acti .section-title {
    padding-bottom: 10px;
    margin: 45px 0 10px;
            border-bottom: 1px solid #000;
}
.container.acti-book-ok .text{
        font-size: 24px;
    font-weight: 600;
    margin-top: 25px;
}
.title-acti-book-ok{
    padding-top: 10px;
    padding-bottom: 5px;
}
.col-md-12 .payment-date-text{
        color: #f40b0b;
    font-size: 17px;
}
.container.submit-acti-ok{
        width: 100%;
    min-height: 80px;
    background-color: #000;
    padding: 20px 0;
    color: #fff;
    vertical-align: middle;
}
.row.border-acti-ok{
    border-top: 1px solid #000;
    padding-bottom: 25px;
}
.col-md-7 .name-title{
    display: block;
    color: #000;
    font-size: 18px;
        font-weight: 600;
}
.col-md-7 .sub-title{
display: block;
    font-size: 15px;
    color: #4a4a4a;
}
.col-md-7 .price-info {
    position: absolute;
    bottom: 5px;
    right: 20px;
}
.col-md-7 .wrapper-about-acti-ok{
    padding: 10px;
}
.row.border-acti-ok .container-descript{
    /*width: 800px;*/
    padding-left: 20px;
    padding-right: 20px;
}
.form-control.hv-acti:hover, .form-control.hv-acti:focus{
    border-color: #2f414463;
}
.button-border-nut-prook {
    font-size: 18px;
    font-weight: 400;
    border-radius: 5px;
    /*width: 160px;*/
    height: 45px;
    color: #fff;
    line-height: 40px;
    cursor: pointer;
    background-color: red;
}
.button-border-nut-prook:hover{
     background-color: #f39c12 !important;
}
.border-nut-bookok{
    /*border: 5px solid #f3f3f3 !important;*/
    /*border-radius: 9px;*/
    /*width: 430px;*/
    height: 55px;
    line-height: 40px;
    margin-top: -28px;
    background-color: #f3f3f3;
    margin-bottom: 100px;
}
  </style>

