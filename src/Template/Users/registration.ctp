   <?= $this->Form->create($agencydetail, array('role' => 'form','id'=>'agencysignup')) ?>

    <div class="wrapper-box-twt">
      <!-- <section class="" style="background-color: #efefef"> -->

        <div class="container login-form-margin">
          <div class="row">
            <div class="col-lg-12 mx-auto box-login-twt">
              <div class="wrapper-box p-3">


                <h4 class="">AGENCY DETAILS</h4>
                <div class="row justify-content-center pt-3" style="background: url(img/shadow-2.png?v1) 50% 0 no-repeat;">
                  <div class="media-container-column col-lg-12">
                    <div class="row">
                      <div class="col">
                        <div class="row">
                          <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label style-font-label">Company Name*
                              </label>
                              <input class="form-control" type="text" required name="companyname" id="companyname" placeholder="Company Name" >
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                   
                            <div class="form-group">
                              <label class="form-control-label style-font-label">Agency Trading Name*
                              </label>
                              <input class="form-control" type="text" required name="tradingname" id="tradingname" placeholder="Trading Name">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label style-font-label">Company Website
                              </label>
                              <input class="form-control" type="text" name="companyweb" id="companyweb" placeholder="Website URL">
                            </div>
                          </div>
                        </div>
                        <div class="row">
                         <div class="col-md-4 col-sm-12">                 
                            <div class="form-group">
                              <label class="form-control-label style-font-label">Travel Agency License Number*
                              </label>
                              <input class="form-control" type="text" required name="licensenumber" id="licensenumber" placeholder="License Number">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">                 
                            <div class="form-group">
                              <label class="form-control-label style-font-label">Company Registration Number*
                              </label>
                              <input class="form-control" type="text" required name="companyregistration" id="companyregistration" placeholder="Business registry number">
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">                 
                            <div class="form-group">
                              <label class="form-control-label style-font-label">Consortium
                              </label>
                              <input class="form-control" type="text" name="consortium" id="consortium" placeholder="What travel group do you belong to?">
                            </div>
                          </div>
                        </div>
                        <div class="row pt-4">
                         <div class="col-md-4 col-sm-12">              
                            <div class="form-group">
                              <label class="form-control-label style-font-label">Street address*
                              </label>
                              <input class="form-control" type="text" required placeholder="Street address" name="street" id="street" >
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label style-font-label">Postcode*
                              </label>
                              <input class="form-control" type="text" required placeholder="Postcode"  name="postcode" id="postcode" >
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">               
                            <div class="form-group">
                              <label class="form-control-label style-font-label">City*
                              </label>
                              <input class="form-control" type="text" required placeholder="City" name="city" id="city" >
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label style-font-label"  for="selectbasic">Country*
                              </label>
                              <select  name="country" id="country" class="form-control" required>
                                <option value="1">---</option>
                                <option value="2">Australia</option>
                                <option value="1">Greece</option>
                                <option value="2">New Zealand</option>
                                <option value="1">Singapore</option>
                                <option value="2">Thailand</option>
                                <option value="2">United Kingdom</option>
                                <option value="1">United States</option>
                                <option value="2">Other</option>
                              </select>
                            </div>
                          </div>
                          <div class="col-md-4 col-sm-12">               
                            <div class="form-group">
                              <label class="form-control-label style-font-label">If Other
                              </label>
                              <input class="form-control" type="text" name="Ifother" id="Ifother" placeholder="If Other Country">
                            </div>
                          </div>
                         <div class="col-md-4 col-sm-12">                
                            <div class="form-group">
                              <label class="form-control-label style-font-label">State/Region*
                              </label>
                              <input class="form-control" type="text" name="state" required id="state" placeholder="State/Region">
                            </div>
                          </div>
                        </div>
                        <div class="row pt-4">

                          <div class="col-md-6 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label style-font-label">Phone*
                              </label>
                              <input class="form-control" type="text" p name="phone" required id="phone"  placeholder="Phone" >
                            </div>
                          </div>
                          <div class="col-md-6 col-sm-12">  
                            <div class="form-group">
                              <label class="form-control-label style-font-label">Fax
                              </label>
                              <input class="form-control" type="text" placeholder="Fax" name="fax" id="fax">
                            </div>
                          </div>

                        </div>

                      </div>
                    </div>
                  </div>
                </div>


              </div>
            </div>
          </div>
        </div>


      <div class="container pt-4">
        <div class="row">
          <div class="col-lg-12 mx-auto box-login-twt">
            <div class="wrapper-box p-3">
    <h4 class="">MANAGER’S DETAILS</h4>
    <div class="row justify-content-center pt-3" style="background: url(img/shadow-2.png?v1) 50% 0 no-repeat;">
        <div class="media-container-column col-lg-12">
            <div class="row">
                <div class="col">
                    <div class="row">
                     <div class="col-md-4 col-sm-12">              
                        <div class="form-group">
                            <label class="form-control-label style-font-label">First Name*
                            </label>
                            <input class="form-control"  type="text" name="firstname" required id="firstname" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12">                  
                        <div class="form-group">
                            <label class="form-control-label style-font-label">Surname*
                            </label>
                            <input class="form-control" type="text" name="lastname" required id="lastname" placeholder="Last Name">
                        </div>
                    </div>
                   <div class="col-md-4 col-sm-12">          
                        <div class="form-group">
                            <label class="form-control-label style-font-label" for="selectbasic">Job Title*
                            </label>
                            <select name="jobtype" id="jobtype" class="form-control" required>
                                <option value="1">---</option>
                                <option value="2">Consultant</option>
                                <option value="1">Assistant Team Leader</option>
                                <option value="2">Team Leader/Manager</option>
                                <option value="1">Director</option>
                                <option value="2">Owner</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
              <div class="col-md-6 col-sm-12">   
                <div class="form-group">
                    <label class="form-control-label style-font-label">E-Mail*
                    </label>
                    <input class="form-control" type="email" name="email" required id="email" placeholder="E-Mail">
                </div>
                </div>
    </div>
  </div>
</div>

            </div>
          </div>
        </div>
      </div>


     
      <div class="container pt-4">
        <div class="row">
          <div class="col-lg-6 box-login-twt">
            <div class="wrapper-box p-3">
              <div class="checkbox text-center">
                                                  <label class="pl-1 pr-1 pt-1">
                                        <input type="checkbox" value="check" name="checkboxform" class="checkboxform">
                                        <span class="cr"><i class="cr-icon fa fa-check"></i></span>I have read and agree to the <a href="<?php echo $this->Url->build('/terms-conditions'); ?>" class="maucam">Terms & Conditions*</a>
                                    </label>
</div>
            </div>
          </div>
        </div>
      </div>

<div class="container p-0 mt-4 pb-5">
  <div class="col-md-2 p-0">
      <button class="btn-block border-0 nen-maucam" id="btn_submit"  style="border-radius:5px;height: 40px;color: #fff;">SEND</button>

  </div>

</div>


      </div>
 <?= $this->Form->end() ?>

 <?php //$this->start('scriptBotton'); ?>
<script type="text/javascript">
    $(document).ready(function(){
$("#btn_submit").attr("disabled", true);


$('.checkboxform').change(function() {
  
  if($(this).prop('checked')){
    $("#btn_submit").attr("disabled", false);
  }else{
    $("#btn_submit").attr("disabled", true);
  }
});



    });
</script>
<?php //$this->end(); ?>