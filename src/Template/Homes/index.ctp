   <div class="container login-form-margin">
        <div class="row">
          <div class="col-lg-5 mx-auto box-login-twt">
            <div class="wrapper-box p-3">
              <div class="row">
                <!-- <div class="col-md-3"> -->
                  <img src="img/icon-01.jpg" alt="" title="" media-simple="true">
                <!-- </div> -->
                <!-- <div class="col-md-9"> -->
                  <span style="line-height: 71px;"><b>Agent Login</b></span>
                <!-- </div> -->
              </div>
               <form action="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'login')); ?>" method="post">
              <div class="row mt-twt">
                <input  type="email" required name="email" class="form-control p-1 login-font style-input-twt" placeholder="User name">
                <input type="password" required name="password" class="form-control p-1 login-font mt-twt style-input-twt" type="text" placeholder="Password">
              </div>
              <div class="row mt-twt">
                  <button type="submit"  class="btn-block border-0 nen-maucam" style="border-radius:5px;height: 40px;color: #fff;">Login</button>          
              </div>
                </form>
              <div class="row mt-twt">
                <div class="col-md-6 text-left p-0 login-font login-color-hi"><a  href="<?php echo $this->Url->build('/forgotpass'); ?>" >Forgot your password?</a></div>
                <div class="col-md-6 text-right p-0 login-font login-color-hi"><a  href="<?php echo $this->Url->build('/registration'); ?>" >Registration</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>


