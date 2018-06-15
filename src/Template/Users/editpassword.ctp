  <style>
.content-agent-detail{
    padding-top: 15px;
    padding-bottom: 20px;
}
.card-col-user{
    background-color: #fff;
    padding-bottom: 10px;
    padding-top: 10px;
    padding-left: 10px;
}
.padding-card{
    padding-top: 10px;
    padding-bottom: 10px;
}
</style>

<div class="container" style="background-color: #ebf1f1;margin-top: 4px;">

    <div class="row" style="background-color: #fff">
        <h3 style="font-weight: bold;padding-left: 22px;padding-top: 15px;padding-bottom: 10px;">Edit Password</h3>       
    </div>

<div class="content-agent-detail">
    <div class="container">
    <!-- <div class="row" style="padding-bottom: 6px;"> -->

        <!-- <form action="agents-profile" method="post"> -->
            <?php echo $this->Form->create('users'); ?>
<div class="content-agent-profile mx-auto">
    
          <div style=""> <?= $this->Flash->render() ?></div>
    
    <div class="row " style="padding-bottom: 6px;">
            <div class="col-md-12 display-tn">
                <label class="display-7" style="width: 202px;">Old Password
                </label>
                <input class="form-control" type="password" name="old_password" id="username" placeholder=""  value="<?php // $users['username']?>">
            </div>
             <div class="col-md-12 display-tn">
                <label class="display-7" style="width: 202px;">New Password
                </label>
                <input class="form-control" type="password" name="password1" id="username" placeholder=""  value="<?php // $users['username']?>">
            </div>
             <div class="col-md-12 display-tn">
                <label class="display-7" style="width: 202px;">Re New Password
                </label>
                <input class="form-control" type="password" name="password2" id="username" placeholder=""  value="<?php // $users['username']?>">
            </div>
    </div>
    <div class="form-button-property" style="padding-bottom: 19px;">
            <div class="w-100 mx-auto">

                    <div class="border-nut-profile mx-auto">

                <button class="btn-block border-0 nen-maucam button-border-profile mx-auto">Change Password</button></div>
            </div>
</div>
</div>
</form>           
    <!-- </div> -->
    </div>
</div>



</div>
</div>
<style type="text/css">
    .button-border-profile {
    font-size: 15px;
    font-weight: 400;
    border-radius: 5px;
    width: 200px;
    height: 45px;
    color: #ebf1f1;
    line-height: 45px;
}
.content-agent-profile{
    width: 600px
}
</style>