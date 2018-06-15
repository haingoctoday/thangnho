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
    border: 6px solid #ebf1f1 !important;
    border-radius: 12px;
    width: 123px;
    height: 57px;
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
    padding-bottom: 20px;
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
.wrapper-agent-detail{
    background-color: #fff;
    padding-bottom: 42px;
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

input {
    border: 1px solid #ccc !important;
    border-radius: 0 !important;
}
</style>


<div class="wrapper-agent-detail" id="manage">
    <div class="container" style="background-color: #ebf1f1;margin-top: 4px;">    
        <div class="row" style="background-color: #fff">
            <h3 style="font-weight: bold;padding-left: 22px;padding-top: 15px;padding-bottom: 10px;">My Profile</h3>       
        </div>
<?php // debug($data_view)  ?>
        <div class="content-agent-detail">
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 140px;">Agency name
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['firstname'] ?> <?php echo $data_view['lastname'] ?>">
                </div>
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 140px;">Email copied to
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['email'] ?>">
                </div>
            </div>
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 485px;">Pricing structure
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['Pricing'] ?>">

                    <label class="display-7" style="width: 140px;padding-left: 20px;padding-right: 10px;">Currency
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['Currency'] ?>">
                </div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="background-color: #ebf1f1;margin-top: 4px;">    
        <div class="row" style="background-color: #fff">
            <h3 style="font-weight: bold;padding-left: 22px;padding-top: 15px;padding-bottom: 10px;">FlexiComm</h3>       
        </div>

        <div class="content-agent-detail">
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-4 display-tn">
                    <label class="display-7" style="width: 325px;">Default commission %
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['commission'] ?>">
                </div>
            </div>
        </div>
</div>
<div class="container" style="background-color: #ebf1f1;">    
        <div class="row" style="background-color: #fff">
            <h3 style="font-weight: bold;padding-left: 22px;padding-top: 15px;padding-bottom: 10px;">Contact Details</h3>       
        </div>

        <div class="content-agent-detail">
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 160px;">Manager name
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['firstname'] ?> <?php echo $data_view['lastname'] ?>">
                </div>
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 160px;">Manager email
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['email'] ?>">
                </div>
            </div>
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 290px;">Manager contact number
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['phone'] ?>" >
                </div>
            </div>
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 560px;">Business street number & street name
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['street'] ?>">
                </div>
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 80px;">Suburb
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['street'] ?>">
                </div>
            </div>  
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 60px;">State
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['state'] ?>">
                </div>
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 95px;">Postcode
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['postcode'] ?>">
                </div>
            </div>
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-6 display-tn">
                    <label class="display-7" style="width: 80px;">Country
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?php echo $data_view['country'] ?>">
                </div>
                <!-- <div class="col-md-6 display-tn">
                    <select id="soflow" class="form-control" >
                      <option>Select</option>
                      <option>Option 1</option>
                      <option>Option 2</option>
                    </select>
                </div> -->
            </div>                                   
        </div>
</div>
<div class="container" style="background-color: #ebf1f1;">    
        <div class="row" style="background-color: #fff">
            <h3 style="font-weight: bold;padding-left: 22px;padding-top: 15px;padding-bottom: 10px;">Financial Details</h3>       
        </div>

        <div class="content-agent-detail">
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-12 display-tn">
                    <label class="display-7" style="width: 125px;">Account name
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="">
                </div>
            </div>
            <div class="row" style="padding-bottom: 6px;">
                <div class="col-md-4 display-tn">
                    <label class="display-7" style="width: 176px;">BSB number
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="">
                </div>
                <div class="col-md-4 display-tn">
                    <label class="display-7" style="width: 195px;">Account number
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="">
                </div>
                <div class="col-md-4 display-tn">
                    <label class="display-7" style="width: 130px;">eNett code
                    </label>
                    <input class="form-control" type="text" name="firstname" id="firstname" placeholder="">
                </div>                
            </div>
                 
        </div>
</div>