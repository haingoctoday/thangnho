    <?php

//pr($this->request->getQuery());
    ?>
<?php //echo Router::url( $this->here, true ); ?> 
      <div class="container" style="margin-top: 5%;">
        <div class="wrapper-twt text-center">
          <p class="login-font1 m-0">To reset your password, click the following link and follow the instructions:</p>
          <div class="col-md-3 mx-auto py-4">
            <a class="btn-block border-0 nen-maucam" style="border-radius:5px;height: 40px;color: #fff;line-height: 38px;" href="<?php echo $this->Url->build('/resetpass/'.$url_send); ?>">RESET YOUR PASSWORD</a>
          </div>
          <h5>If you didn’t make this request</h5>
          <p class="login-font1 m-0 py-2">or are having issues with resetting you password, please call our Help Desk</p>
          <p class="login-font1 m-0 py-2">Help Desk - <b>1300 739 652</b></p>
                  <div class="text-center center-block pt-3">
              <a href="#"><i class="fa fa-facebook-square fa-3x social pr-2" id="social-fb"></i></a>
              <a href="#"><i class="fa fa-twitter-square fa-3x social pr-2" id="social-tw"></i></a>
              <a href="#"><i class="fa fa-google-plus-square fa-3x social pr-2" id="social-gp"></i></a>
              <a href="#"><i class="fa fa-youtube-square fa-3x social" id="social-yt"></i></a>
</div>
        </div>

      </div>