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
.content-agent-profile{
        padding-top: 47px;
    padding-bottom: 27px;
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
input[type="radio"] { display: none; }
input[type="radio"] + label { font-weight: 400; }
input[type="radio"] + label span { display: inline-block; width: 14px; height: 14px; margin: -2px 10px 0 0; vertical-align: middle; cursor: pointer; -moz-border-radius: 50%; border-radius: 50%; border: 1px solid #ccc; } 
input[type="radio"] + label span { background-color: #fff; } 
input[type="radio"]:checked + label { color: #333; font-weight: 400; } 
input[type="radio"]:checked + label span { background-color: #22b6e4; border: 4px solid #ffffff; box-shadow: 0 0 0px 2px #22b6e4; } 
input[type="radio"] + label span, 
input[type="radio"]:checked + label span { -webkit-transition: background-color 0.24s linear; -o-transition: background-color 0.24s linear; -moz-transition: background-color 0.24s linear; transition: background-color 0.24s linear; }

.hjhjhj{
    margin-left: 25px;
    line-height: 35px;
}
</style>
<?php
//dump($users);
?>
<div class="container" style="background-color: #ebf1f1;margin-top: 4px;">

    <div class="row" style="background-color: #fff">
        <h3 style="font-weight: bold;padding-left: 22px;padding-top: 15px;padding-bottom: 10px;">My Profile</h3>       
    </div>
<form action="agents-profile" method="post">
<div class="content-agent-profile">
    
        
    
    <div class="row" style="padding-bottom: 6px;">
            <div class="col-md-6 display-tn">
                <label class="display-7" style="width: 102px;">Username
                </label>
                <input class="form-control" type="text" name="username1" id="username" placeholder="" disabled value="<?= $users['username']?>">
            </div>
    </div>

    <div class="row" style="padding-bottom: 6px;">
            <div class="col display-tn">
                <label class="display-7" style="width: 117px;">First Name
                </label>
                <input class="form-control" type="text" name="firstname" id="firstname" placeholder="" value="<?= $users['firstname']?>">
            </div>
            <div class="col display-tn pl-0">
                <label class="display-7" style="width: 117px;">Last Name
                </label>
                <input class="form-control" type="text" name="lastname" id="lastname" placeholder="" value="<?= $users['lastname']?>">
            </div>
            <div class="col display-tn pl-0">
                <label class="display-7" style="width: 157px;letter-spacing: -2px;">Preferred Name
                </label>
                <input class="form-control" type="text" name="preferredName" id="preferredName" placeholder=""  value="<?= $users['preferredName']?>">
            </div>
    </div>

    <div class="row" style="padding-bottom: 6px;">
            <div class="col-md-6 display-tn">
                <label class="display-7" style="width: 270px;">Preferred Email Address
                </label>
                <input class="form-control" type="text" name="email1" id="email" placeholder="" value="<?= $users['email']?>" disabled>
            </div>
            <div class="col-md-5 display-tn">
                <label class="display-7" style="width: 176px;">Phone Number
                </label>
                <input class="form-control" type="text" name="phone" id="phone" placeholder="" value="<?= $users['phone']?>">
            </div>
    </div>

    <div class="row" style="padding-bottom: 6px;">
            <div class="col-md-9" style="letter-spacing: -1px;">
                <div class="input-group">
                <label class="display-7" style="padding-right: 20px;line-height: 35px;">Date of birth
                </label>
                    <select id="soflow" class="mauxanh-input" style="width: 102px;margin-right: 10px;" name="days" >
                      <option>DD</option>
                     <?php for ($d=1; $d < 32; $d++) { 
                      ?>
                       <option <?php echo ( $users['days'] == $d) ? "selected" : ""?>><?= $d?></option>
                      <?php
                     }?>
                     
                    </select>
                    <select id="soflow" class="mauxanh-input" style="width: 102px;"  name="mouths">
                      <option>MM</option>
                       <?php for ($m=1; $m <= 12; $m++) { 
                      ?>
                       <option <?php echo ( $users['mouths'] == $m) ? "selected" : ""?>><?= $m?></option>
                      <?php
                     }?>
                    </select>             
                    <div class="hjhjhj"> 
                        <span>Gender:</span>
<input id="option-one" name="sex"  type="radio" value="Male" <?php echo ( $users['sex'] == 'Male') ? "checked" : ""?>> <label for="option-one" style="margin-right: 10px;margin-left: 10px;"> <span></span> Male </label> 
<input id="option-two" name="sex"  type="radio" value="Female" <?php echo ( $users['sex'] == 'Female') ? "checked" : ""?>> <label for="option-two"> <span></span> Female </label> 
                    </div>
                </div>
            </div>
    </div>

    <div class="row">
        <div class="col">
            <div class="col-md-12 pb-3 pl-0">

                <div class="checkbox" style="font-size: 16px;letter-spacing: -1px;">
                    <label class="display-7" style="padding-right: 5px;">Interests:</label>
                    <?php 
                    $array_interest = array('Arts','Family','Food','Literature','Music','Photography','Sport','Technology','Travel','TV/Movies');
                    $interests_a = json_decode($users['interests'],TRUE);
                    if(empty($interests_a)){
                        $interests_a = array();
                    }
                    foreach ($array_interest as $key => $value) {
                   //debug( $interests_a);  
                    if (in_array($value,$interests_a)) {
                      $check_in = 'checked';
                    }else{
                        $check_in = '';
                    }  
                     ?>
                        <label class="pl-2 pr-2">
                            <input type="checkbox" value="<?php echo $value ?>" name="interests[]" <?php echo $check_in ?>>
                            <span class="cr"><i class="cr-icon fa fa-check mauxanh-input"></i></span><?php echo $value ?>
                        </label>
                    <?php  } ?>
                 
                </div>
            </div>
        </div>
    </div>
  
</div>
</div>

<div class="form-button-property" style="padding-bottom: 19px;">
            <div class="w-100 mx-auto">
                    <div class="border-nut-profile mx-auto">
                <button class="btn-block border-0 nen-maucam button-border-profile mx-auto">Update</button></div>
            </div>
</div>
  </form>