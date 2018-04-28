     <div class="container login-form-margin">
        <div class="row">
          <div class="col-lg-5 mx-auto box-login-twt">
            <div class="wrapper-box p-3">
               <?php echo $this->Flash->render(); ?>
              <div class="row">
               <i class="fa fa-unlock-alt fa-3x pr-3" aria-hidden="true"></i>
                  <span style="line-height: 50px;"><b>Forgot Password</b></span>
                <!-- </div> -->
              </div>
              <form action="<?php echo $this->Url->build(array('controller' => 'Users', 'action' => 'forgotpassadmin')); ?>" method="post">
              <div class="row mt-twt">
                <input class="form-control p-1 login-font style-input-twt" type="email" name="email" placeholder="Your Email" required>
                <!-- <input class="form-control p-1 login-font mt-twt" type="text" placeholder="Password"> -->
              </div>
              <div class="row mt-twt">
                  <button class="btn-block border-0 nen-maucam" style="border-radius:5px;height: 40px;color: #fff;">SEND</button>          
              </div>
              </form>
              <div class="row mt-twt">
                <div class="col-md-6 text-left p-0 login-font login-color-hi"><a  href="<?php echo $this->Url->build('/login-admin'); ?>" >Back to login</a></div>
                <div class="col-md-6 text-right p-0 login-font login-color-hi"><a  href="<?php echo $this->Url->build('/registration'); ?>" >Registration</a></div>
              </div>
            </div>
          </div>
        </div>
      </div>

    <!-- </section> -->
    <div class="container mt-4 mb-5">
    <div class="row">
          <div class="col-lg-5 mx-auto p-0 text-center">
             <p class="pt-3">Help Desk - <b>1300 739 652</b></p>
          </div>
    </div>
  </div>