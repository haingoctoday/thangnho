
      <div class="container" style="margin-top: 5%;">
        <div class="wrapper-twt text-center">
                    <div class="col-md-5 mx-auto py-4">
          <h5 class="text-left">Reset Your Password</h5>
          </div>
  <?= $this->Form->create($users, array('role' => 'form')) ?>
          <div class="col-md-4 mx-auto py-4">
            <input class="form-control p-1 login-font border-0 style-input-twt" type="password" name="password1" required placeholder="New Password">
            <input class="form-control p-1 login-font mt-twt mb-5 border-0 style-input-twt" type="password" required name="password2" placeholder="Confirm New Password">
            <button class="btn-block border-0 nen-maucam" style="border-radius:5px;height: 50px;color: #fff;" type="submit">SUBMIT</button>
          </div>
      <?= $this->Form->end() ?>
                  <div class="text-center center-block pt-3">
              <a href="#"><i class="fa fa-facebook-square fa-3x social pr-2" id="social-fb"></i></a>
              <a href="#"><i class="fa fa-twitter-square fa-3x social pr-2" id="social-tw"></i></a>
              <a href="#"><i class="fa fa-google-plus-square fa-3x social pr-2" id="social-gp"></i></a>
              <a href="#"><i class="fa fa-youtube-square fa-3x social" id="social-yt"></i></a>
</div>
        </div>

      </div>