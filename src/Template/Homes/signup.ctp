<section class="header1 cid-123 mbr-parallax-background" id="header1-1" data-rv-view="112">
    <div class="mbr-overlay" style="opacity: 0.1; background-color: rgb(239, 239, 239);">
    </div>
    <h1 class="mbr-section-title align-center pb-3 mbr-fonts-style display-3 mbr-white bottom-left"><strong>JOIN OUR WORLD</strong></h1>
</section>


<style>
.cid-123 {
padding-top: 90px;
padding-bottom: 90px;
background-image: url("assets/images/bg-cta-1900x1272.jpg");
min-height: 500px;
}
.bottom-left {
    position: absolute;
    bottom: 90px;
    left: 0px;
    right: 0px;
}
</style>
   <?= $this->Form->create($agencydetail, array('role' => 'form','id'=>'agencysignup')) ?>
<div class="container pb-5 pt-5 mb-5">

    <h2 class="mbr-section-title pb-1 pt-1 mbr-fonts-style display-2">PERSONAL DETAILS</h2>
    <div class="row justify-content-center pt-3" style="background: url(assets/images/shadow-2.png?v1) 50% 0 no-repeat;">
        <div class="media-container-column col-lg-12">
            <div class="row">
                <div class="col">
                    <div class="row">
                        <?php 
           
                        ?>
                      <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">First Name*
                            </label>
                            <input class="form-control" type="text" name="firstname" id="firstname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">Surname*
                            </label>
                            <input class="form-control" type="text" name="lastname" id="lastname" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="selectbasic">Job Title*
                            </label>
                            <select  class="form-control" required name="jobtype" id="jobtype" >
                                <option>---</option>
                                <option value="Consultant">Consultant</option>
                                <option value="Assistant Team Leader">Assistant Team Leader</option>
                                <option value="Team Leader/Manager">Team Leader/Manager</option>
                                <option value="Director">Director</option>
                                <option value="Owner">Owner</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-6">
                <div class="form-group">
                    <label class="form-control-label mbr-fonts-style display-7">E-Mail*
                    </label>
                    <input class="form-control" type="email" placeholder="E-Mail" name="email" id="email">
                </div>
                </div>
    </div>
  </div>
</div>

    <h2 class="mbr-section-title pb-1 pt-4 mbr-fonts-style display-2">AGENCY DETAILS</h2>
    <div class="row justify-content-center pt-3" style="background: url(assets/images/shadow-2.png?v1) 50% 0 no-repeat;">
        <div class="media-container-column col-lg-12">
            <div class="row">
                <div class="col">
                    <div class="row">
                      <div class="col-4">                    
                        <div class="form-group">


          
           


                            <label class="form-control-label mbr-fonts-style display-7">Company Name*
                            </label>
                            <input class="form-control" type="text" placeholder="Company Name"  name="companyname" id="companyname">
                        </div>
                    </div>
                    <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">Agency Trading Name*
                            </label>
                            <input class="form-control" type="text" placeholder="Trading Name"  name="tradingname" id="tradingname">
                        </div>
                    </div>
                    <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">Company Website
                            </label>
                            <input class="form-control" type="text" placeholder="Website URL"  name="companyweb" id="companyweb">
                        </div>
                    </div>
                </div>
                                    <div class="row">
                      <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">Travel Agency License Number*
                            </label>
                            <input class="form-control" type="text" placeholder="License Number"  name="licensenumber" id="licensenumber">
                        </div>
                    </div>
                    <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">Company Registration Number*
                            </label>
                            <input class="form-control" type="text" placeholder="Business registry number"  name="companyregistration" id="companyregistration">
                        </div>
                    </div>
                    <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">Consortium 
                            </label>
                            <input class="form-control" type="text" placeholder="What travel group do you belong to?" name="consortium" id="consortium">
                        </div>
                    </div>
                </div>
                                    <div class="row pt-4">
                      <div class="col-4">                    
                        <div class="form-group">

                         
           
                            <label class="form-control-label mbr-fonts-style display-7">Street address*
                            </label>
                            <input class="form-control" type="text" placeholder="Street address" name="street" id="street" >
                        </div>
                    </div>
                    <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">Postcode*
                            </label>
                            <input class="form-control" type="text" placeholder="Postcode" name="postcode" id="postcode" >
                        </div>
                    </div>
                    <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">City*
                            </label>
                            <input class="form-control" type="text" placeholder="City" name="city" id="city" >
                        </div>
                    </div>
                </div>
                                                    <div class="row">
                      <div class="col-4">                    
                        <div class="form-group">

                          
           
           
                            <label class="form-control-label mbr-fonts-style display-7" for="selectbasic">Country*
                            </label>
                            <select  class="form-control" required name="country" id="country" >
                                <option>---</option>
                                <option value="Australia">Australia</option>
                                <option value="Greece">Greece</option>
                                <option value="New Zealand">New Zealand</option>
                                <option value="Singapore">Singapore</option>
                                <option value="Thailand">Thailand</option>
                                <option value="United Kingdom">United Kingdom</option>
                                <option value="United States">United States</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">If Other
                            </label>
                            <input class="form-control" type="text" placeholder="If Other Country" name="Ifother" id="Ifother" >
                        </div>
                    </div>
                    <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">State/Region*
                            </label>
                            <input class="form-control" type="text" placeholder="State/Region" name="state" id="state" >
                        </div>
                    </div>
                </div>
<div class="row pt-4">
    
            <div class="col-6">
                <div class="form-group">
                    <label class="form-control-label mbr-fonts-style display-7">Phone*
                    </label>
                    <input class="form-control" type="text" placeholder="Phone" name="phone" id="phone" >
                </div>
                </div>
                            <div class="col-6">
                <div class="form-group">
                    <label class="form-control-label mbr-fonts-style display-7">Fax
                    </label>
                    <input class="form-control" type="text" placeholder="Fax" name="fax" id="fax"> 
                </div>
                </div>

</div>

            </div>
        </div>
  </div>
</div>

    <h2 class="mbr-section-title pb-1 pt-4 mbr-fonts-style display-2">HOW DID YOU FIND OUT ABOUT US?</h2>
    <div class="row justify-content-center pt-3" style="background: url(assets/images/shadow-2.png?v1) 50% 0 no-repeat;">
        <div class="media-container-column col-lg-12">
            <div class="row">
                <div class="col">

                    <div class="row">
                                            <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" for="selectbasic">How did you hear about us?
                            </label>
                            <select  class="form-control" name="aboutus" id="aboutus">
                                <option value="1">---</option>
                                <option value="Colleague">Colleague</option>
                                <option value="Sales representative">Sales representative</option>
                                <option value="Social media">Social media</option>
                                <option value="Advertising">Advertising</option>
                                <option value="Google search">Google search</option>
                                                                <option value="Trade show / event">Trade show / event</option>
                                <option value="Promotion">Promotion</option>
                                <option value="Webinar">Webinar</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                    </div>
                                        <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7" >If Promotion*
                            </label>
                            <input class="form-control" type="text" placeholder="Promo code" name="promotion" id="promotion">
                        </div>
                    </div>
                      <div class="col-4">                    
                        <div class="form-group">
                            <label class="form-control-label mbr-fonts-style display-7">If Other
                            </label>
                            <input class="form-control" type="text" placeholder="First Other" name="aboutusother" id="aboutusother">
                        </div>
                    </div>


                </div>
            </div>
        </div>
            
                        

                                <div class="checkbox" style="font-size: 16px;">
                                   
                                    <label class="">
                                        <input type="checkbox" value="yes" id="checkboxform" >
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>I have read and agree to <a href="<?php echo $this->Url->build('/terms-conditions'); ?>" style="color:#ff0000">the terms and conditions</a>.*
                                    </label>
                                   
                                </div>
                        
             
           
  </div>
</div>
   <div class="row justify-content-center pt-3" style="background: url(assets/images/shadow-2.png?v1) 50% 0 no-repeat;">
            <div class="holder">
                            <input type="button" value="SEND" class="btn btn-primary btn-block" id="btn_submit">
                        </div>
            </div>
   <?php //echo $this->Form->button(__('Save')) ?>
 <?= $this->Form->end() ?>

</div>

<?php //$this->start('scriptBotton'); ?>
<script type="text/javascript">
    $(document).ready(function(){

        $( "#btn_submit" ).click(function() {
 
   if($('input[name="checkboxform"]').is(':checked'))
    {
     
    }else
    {
       alert('Check the terms and conditions.');
      
       $( ".checkbox" ).css('color','red');
        return false;
    }


});





//     $('form#agencysignup').submit(function () {
// alert("123");
//  alert( "Handler for .submit() called." );
//   event.preventDefault();
    // Get the Login Name value and trim it
    // if($('input[name="checkboxform"]').is(':checked'))
    // {
    //  alert('OK.');
    // }else
    // {
    //    alert('Text-field is empty.');
    //     return false;
    // }

    // Check if empty of not

// });
    });
</script>
<?php // $this->end(); ?>