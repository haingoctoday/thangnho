<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= h($title) ?></title>

  
      <?php echo $this->Html->css('bootstrap.min'); ?>
 <!-- <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet"> -->
    <?php echo $this->Html->css('muli'); ?>
    <?php echo $this->Html->css('scrolling-nav'); ?>
    <?php echo $this->Html->css('font-awesome.min'); ?>
     <?php echo $this->Html->script('jquery.min'); ?>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     
  </head>

  <body id="wrapper-box-twt">

<?php
//debug($_SESSION);
//debug($this->request->session()->read('Auth.User.fullName'));

?>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #2a3c58;height: 65px;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <div class="col-md-6"><?= $this->request->session()->read('Auth.User.fullName') ?></div>
                <div class="col-md-6"><span class="login-font agency-font"><?= $this->request->session()->read('Auth.User.email')?></span></div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                  
                      <li class="dropdown nav-item ">
                        <a class="dropdown-toggle dropdown-languages nav-link text-color-nav-twt" data-toggle="dropdown" href="#">
         Languages
        <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-languages-nav nen-maucam fix-navdrop abcs">
                            <li><a href="#" class="nav-link">English</a></li>
                            <li><a href="#" class="nav-link">Francais</a></li>
                            <li><a href="#" class="nav-link">Súedois</a></li>
                          
                        </ul>
                    </li>



                       <li class="dropdown nav-item ">
                        <a class="dropdown-toggle dropdown-currency nav-link text-color-nav-twt" data-toggle="dropdown" href="#">
         Currency(<?= $language?>)
        <span class="caret"></span></a>
                        <ul class="dropdown-menu dropdown-currency-nav nen-maucam fix-navdrop">
                            <li><a href="#" class="nav-link alink" >AUD</a></li>
                            <li><a href="#" class="nav-link alink">NZD</a></li>
                            <li><a href="#" class="nav-link alink">USD</a></li>
                            <li><a href="#" class="nav-link alink">EUR</a></li>
                            <li><a href="#" class="nav-link alink">GPB</a></li>
                        </ul>
                    </li>






                    <li class="nav-item">
                        <img src="img/icon-booking-menu.png" alt="" class="mb-2" style="float: left;margin-top: 10px;">
                        <a class="nav-link js-scroll-trigger text-color-nav-twt pl-0" href="" data-toggle="modal" data-target="#exampleModalCenter" style="float: right;">Manage Bookings</a>
                    </li>

                    <!--                     <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">
                          <img src="img/icon_user.png" alt="" class="mb-2">
                        </a>
                    </li> -->

                    <li class="dropdown nav-item">
                        <a class="dropdown-toggle nav-link text-color-nav-twt" data-toggle="dropdown" href="#">
          <img src="img/icon_user.png" alt="" class="mb-2">
        <span class="caret"></span></a>
                        <ul class="dropdown-menu nen-maucam fix-navdrop">
                            <li><a href="<?php echo $this->Url->build('/agents-profile'); ?>" class="nav-link">My Profile</a></li>
                            <li><a href="<?php echo $this->Url->build('/agents-mybooking'); ?>" class="nav-link">My bookings</a></li>
                            <li><a href="<?php echo $this->Url->build('/agents-agencydetail'); ?>" class="nav-link">Agency details</a></li>
                            <li><a href="<?php echo $this->Url->build('/agents-manageusers'); ?>" class="nav-link">Manage users</a></li>
                            <li><a href="<?php echo $this->Url->build('/agents-edit-password'); ?>" class="nav-link">Edit password</a></li>
                        </ul>
                    </li>



                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger text-color-nav-twt" href="<?php echo $this->Url->build('/user-logout'); ?>">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>





<?php 
 // $view_name = $view_show;
 
?>
     <div class="wraper-content-agency" style="margin-top: 90px;">
  <div style="float: right;">
     <div class="text-center center-block pt-3 ihihihih">
              <a href="#"><i class="fa fa-facebook-square fa-3x social pr-2" id="social-fb"></i></a>
              <a href="#"><i class="fa fa-twitter-square fa-3x social pr-2" id="social-tw"></i></a>
              <a href="#"><i class="fa fa-google-plus-square fa-3x social pr-2" id="social-gp"></i></a>
              <a href="#"><i class="fa fa-youtube-square fa-3x social pr-2" id="social-yt"></i></a>
</div>
  </div>
        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg mau-nav" id="mainNav" style="background-color: #ffffff;height: 110px;">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="<?php echo $this->Url->build('/agents'); ?>">
                   
                        <img src="img/logo_1.png" alt="" title="" media-simple="true">

        </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto border-nav-twt">
                        <li class="nav-item pr-3">
                            <a class="nav-link js-scroll-trigger mau-nav-black <?php echo ($view_name == 'hotel') ? 'show_nav_on' : '' ?>" href="<?php echo $this->Url->build('/accommodation-hotel-search'); ?>">ACCOMMODATION</a>
                        </li>
                        <li class="nav-item pr-3">
                            <a class="nav-link js-scroll-trigger mau-nav-black <?php echo ($view_name == 'transfer') ? 'show_nav_on' : '' ?> " href="<?php echo $this->Url->build('/agents-transfer'); ?>">TRANSFERS</a>
                        </li>
                        <li class="nav-item pr-3">
                            <a class="nav-link js-scroll-trigger mau-nav-black <?php echo ($view_name == 'tours') ? 'show_nav_on' : '' ?> " href="<?php echo $this->Url->build('/agents-tour'); ?>">TOURS</a>
                        </li>
                        <li class="nav-item pr-3">
                            <a class="nav-link js-scroll-trigger mau-nav-black <?php echo ($view_name == 'activities') ? 'show_nav_on' : '' ?> " href="<?php echo $this->Url->build('/agents-activities'); ?>">ACTIVITIES</a>
                        </li>
                        <li class="nav-item pr-3">
                            <a class="nav-link js-scroll-trigger mau-nav-black <?php echo ($view_name == 'cruise') ? 'show_nav_on' : '' ?> " href="<?php echo $this->Url->build('/agents-cruise'); ?>">CRUISE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger mau-nav-black <?php echo ($view_name == 'shore') ? 'show_nav_on' : '' ?> " href="<?php echo $this->Url->build('/agents-shore'); ?>">SHORE EXCURSIONS</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
   <?php //echo $this->Flash->render(); ?>
 <?php echo $this->fetch('content'); ?>

 <!-- footer -->
<div class="container" style="margin-top: 25px;">
   <div class="row">
      <div class="col-md-8 p-0">
         <ul class="p-0">
            <li class="nav-item-ft">
               <a class="js-scroll-trigger mau-nav-black" href="#">HOME</a>
            </li>
            <li class="nav-item-ft">
               <a class="js-scroll-trigger mau-nav-black" href="#">FAQS</a>
            </li>
            <li class="nav-item-ft">
               <a class="js-scroll-trigger mau-nav-black" href="#">CONTACT US</a>
            </li>
            <li class="nav-item-ft">
               <a class="js-scroll-trigger mau-nav-black" href="#">TERMS & CONDITIONS</a>
            </li>
            <li class="nav-item-ft">
               <a class="js-scroll-trigger mau-nav-black" href="#">PRIVACY POLICY</a>
            </li>
         </ul>
      </div>
      <div class="col-md-4 text-right">
         <h4>Help Desk - <b>1300 739 652</b></h4>
      </div>
   </div>
   <div class="w-100 text-center mt-5">
      <img src="img/participation.png" alt="">
   </div>
</div>
</div>
  </div>

    <!-- Footer -->
  <div style="height: 90px"></div>
    <!-- Footer -->
    <footer class="py-1" style="background-color: #2a3c58">
        <div class="container">
            <p class="m-0 text-center text-white">&copy; 2018 Tweet World Travel Pty. Ltd.</p>
        </div>
        <!-- /.container -->
    </footer>



    <!-- Bootstrap core JavaScript -->

     
        <?php echo $this->Html->script('bootstrap.bundle.min'); ?>
          <?php echo $this->Html->script('jquery.easing.min'); ?>
            <?php //echo $this->Html->script('scrolling-nav'); ?>
   


<script type="text/javascript">
  $(".alink").click(function(){
    var name = $(this).text();
   // alert(name);
    $.get("currency/"+name, function(data, status){
     //   alert("Data: " + data + "\nStatus: " + status);
     location.reload();
    });
});

</script>

   <!--popup chat Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header maukhung-input" style="box-shadow: 0px 2px 10px 0px rgba(224,224,224,1);">
                    <h4 class="modal-title maucam" id="exampleModalLongTitle" style="padding-top: 10px">MANAGE MY BOOKINGS</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
                </div>
                <div class="modal-body">
                   <!--  <div class="container pt-3">
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <label class="form-control-label style-font-label login-font">Agency and name
              </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control maukhung-input" type="text" placeholder="">
                            </div>

                        </div>
                        <div class="row pb-3">
                            <div class="col-md-4">
                                <label class="form-control-label style-font-label login-font">Subject
              </label>
                            </div>
                            <div class="col-md-8">
                                <input class="form-control maukhung-input" type="text" placeholder="">
                            </div>
                        </div>
                        <div class="row pb-3">
                            <div class="col">
                                <label class="form-control-label style-font-label login-font">Message
              </label>
                                <textarea class="form-control maukhung-input" rows="5" id="comment"></textarea>
                            </div>
                        </div>

                    </div> -->
                     <div class="col-md-12" style="">
            <div class="manage-bk">
              <!--  <h5 class="text-manager-booking">MANAGE MY BOOKINGS</h5> -->
               <div id="imaginary_container">
                  <div class="input-group stylish-input-group">
                     <input type="text" class="form-control" placeholder="Booking ID">
                     <span class="input-group-addon">
                     <button type="submit">
                     <span class="fa fa-search fa-fw"></span>
                     </button>
                     </span>
                  </div>
                  <div class="input-group stylish-input-group">
                     <input type="text" class="form-control" placeholder="Guest Name">
                     <span class="input-group-addon">
                     <button type="submit">
                     <span class="fa fa-search fa-fw"></span>
                     </button>
                     </span>
                  </div>
               </div>
               <div class="container" style="margin-top: 14px;">
                  <div class="row">
                     <div class="col-md-3 book-form-agency py-1">
                        <div class="w-100 text-center">
                           <img src="img/icon_paid_twt.png" alt="" style="width: 40%;">
                           <span class="text-color-b">PENDING</span>
                        </div>
                     </div>
                     <div class="col-md-9 pr-0" style="padding-left: .3rem!important;">
                        <div class="row book-form-agency m-0">
                           <div class="col-md-10 text-left p-0"><a href="" class="text-color-a">Quote</a></div>
                           <div class="col-md-2 text-right text-color-num">0</div>
                        </div>
                        <div class="row book-form-agency m-0">
                           <div class="col-md-10 text-left p-0"><a href="" class="text-color-a">instant purchase (item not held)</a></div>
                           <div class="col-md-2 text-right text-color-num">0</div>
                        </div>
                        <div class="row book-form-agency m-0">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">amendment pending</a></div>
                           <div class="col-md-3 text-right text-color-num">0</div>
                        </div>
                        <div class="row book-form-agency m-0">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">pending unconfirmed</a></div>
                           <div class="col-md-3 text-right text-color-num">0</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container" style="margin-top: 20px;">
                  <div class="row">
                     <div class="col-md-3 book-form-agency py-1">
                        <div class="w-100 text-center">
                           <img src="img/icon_unpaid_twt.png" alt="" style="width: 40%;">
                           <span class="text-color-b">UNPAID</span>
                        </div>
                     </div>
                     <div class="col-md-9 pr-0" style="padding-left: .3rem!important;">
                        <div class="row book-form-agency m-0 py-1">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">confirmed unpaid</a></div>
                           <div class="col-md-3 text-right text-color-num">0</div>
                        </div>
                        <div class="row book-form-agency m-0 py-1">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">payment Due in 48 hours</a></div>
                           <div class="col-md-3 text-right text-color-num">0</div>
                        </div>
                     </div>
                  </div>
               </div>
               <div class="container" style="margin-top: 20px;">
                  <div class="row">
                     <div class="col-md-3 book-form-agency py-1 px-4">
                        <div class="w-100 text-center">
                           <img src="img/icon_check_twt.png" alt="" style="width: 50%;">
                           <span class="text-color-b">PAID</span>
                        </div>
                     </div>
                     <div class="col-md-9 pr-0" style="padding-left: .3rem!important;">
                        <div class="row book-form-agency m-0">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">confirmed (paid)</a></div>
                           <div class="col-md-3 text-right text-color-num">0</div>
                        </div>
                        <div class="row book-form-agency m-0">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">refund pending</a></div>
                           <div class="col-md-3 text-right text-color-num">0</div>
                        </div>
                        <div class="row book-form-agency m-0">
                           <div class="col-md-9 text-left p-0"><a href="" class="text-color-a">Quote</a></div>
                           <div class="col-md-3 text-right text-color-num">0</div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
                   <!--  <div class="w-100 mx-auto">
                        <button class="btn-block border-0 nen-maucam button-bk-twt mx-auto" style="margin-bottom: -35px;font-weight: bold;">OK</button>
                    </div>
 -->
                </div>
                <!--       <div class="modal-footer">
        <button type="button" class="btn btn-primary">OK</button>
        
    </div> -->
            </div>
        </div>
    </div>


    <style type="text/css">
    textarea#comment {
    overflow: hidden;
}
</style>
  </body>

</html>
