<!DOCTYPE html>
<html >
<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="generator" content=" ">
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assetsagent/images/twt-logo-369x128.png" type="image/x-icon">
  <meta name="description" content=""> 
  <title><?php echo isset($title) ? $title : "TWT"?></title>
  <link rel="stylesheet" href="assetsagent/web/assets/mobirise-icons/mobirise-icons.css">
  <link rel="stylesheet" href="assetsagent/tether/tether.min.css">
  <link rel="stylesheet" href="assetsagent/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assetsagent/bootstrap/css/bootstrap-grid.min.css">
  <link rel="stylesheet" href="assetsagent/bootstrap/css/bootstrap-reboot.min.css">
  <link rel="stylesheet" href="assetsagent/socicon/css/styles.css">
  <link rel="stylesheet" href="assetsagent/dropdown/css/style.css">
  <link rel="stylesheet" href="assetsagent/theme/css/style.css">
  <link rel="stylesheet" href="assetsagent/mobirise/css/mbr-additional.css" type="text/css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
     <?php echo $this->Html->css('jquery.typeahead.min'); ?>
  <script src="assetsagent/web/assets/jquery/jquery.min.js"></script>
      <?php echo $this->Html->script('jquery.typeahead.min'); ?>
        <link rel="stylesheet" href="assetsagent/mystyle/style.css">
</head>
<body>
 <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
  <div class="container">
    <a class="navbar-brand" href="#">Tweet World Travel</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav ml-auto">
        
         <li class="nav-item">
          <a class="nav-link" href="#">Languages</a>
        </li>
         <li class="nav-item">
          <a class="nav-link" href="#">Curency</a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="#">Live Chat</a>
        </li>
       
       
        <li class="dropdown nav-item">
        <a class="dropdown-toggle nav-link" data-toggle="dropdown" href="#"><span class="fa fa-user fa-1x"></span>
        <span class="caret"></span></a>
        <ul class="dropdown-menu bg-dark">
          <li><a href="<?php echo $this->Url->build('/agents-prolife'); ?>" class="nav-link"><span class="fa fa-user fa-1x"></span> My Profile</a></li>
          <li><a href="<?php echo $this->Url->build('/agents-mybooking'); ?>" class="nav-link"><span class="fa fa-file-o fa-1x"></span> My bookings</a></li>
          <li><a href="<?php echo $this->Url->build('/agents-agencydetail'); ?>" class="nav-link"><span class="fa fa-bars fa-1x"></span> Agency details</a></li>
          <li><a href="<?php echo $this->Url->build('/agents-manageusers'); ?>" class="nav-link"><span class="fa fa-group fa-1x"></span> Manage users</a></li>
          <!-- <li><a href="<?php echo $this->Url->build('/agents-edit-password'); ?>" class="nav-link"><span class="fa fa-key fa-1x"></span> Edit password</a></li> -->
        </ul>
      </li>
        <li class="nav-item">
          <a class="nav-link" href="<?php echo $this->Url->build('/user-logout'); ?>">Log out</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="menu cid-qFgHINwhff" once="menu" id="menu2-5" data-rv-view="222">

    

    <nav class="navbar navbar-expand beta-menu navbar-dropdown align-items-center navbar-toggleable-sm">
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
                <span></span>
            </div>
        </button>
        <div class="menu-logo">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="<?php echo $this->Url->build('/agents'); ?>">
                        <img src="assetsagent/images/twt-logo-369x128.png" alt="Mobirise" title="" media-simple="true" style="height: 3.8rem;">
                    </a>
                </span>
                
            </div>
        </div>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav nav-dropdown nav-right" data-app-modern-menu="true">
            <li class="nav-item">
              <a class="nav-link link text-black display-4" href="<?php echo $this->Url->build('/accommodation-hotel-search'); ?>"><span class="fa fa-building fa-1x"></span> ACCOMMODATION</a>
            </li>
             <li class="nav-item">
              <a class="nav-link link text-black display-4" href="<?php echo $this->Url->build('/agents-transfer'); ?>"><span class="fa fa-train fa-1x"></span>TRANSFERS</a>
            </li>
             <li class="nav-item">
              <a class="nav-link link text-black display-4" href="<?php echo $this->Url->build('/agents-activities'); ?>"><span class="fa fa-train fa-1x"></span>TOURS</a>
            </li>
            <li class="nav-item">
              <a class="nav-link link text-black display-4" href="<?php echo $this->Url->build('/agents-activities'); ?>"><span class="fa fa-bus fa-1x"></span>ACTIVITIES&nbsp;</a>
            </li>
           
            <li class="nav-item dropdown open">
              <a class="nav-link link text-black dropdown-toggle display-4" href="" data-toggle="dropdown-submenu" aria-expanded="true"><span class="fa fa-ship fa-1x"></span>FERRIES</a>
              <div class="dropdown-menu">
                <a class="text-black dropdown-item display-4" href="<?php echo $this->Url->build('/agents-ferries?sub_categ_name=halong'); ?>"><span class="fa fa-ship fa-1x"></span>Ha Long Bay</a>
                <a class="text-black dropdown-item display-4" href="<?php echo $this->Url->build('/agents-ferries?sub_categ_name=mekong'); ?>" aria-expanded="true"><span class="fa fa-ship fa-1x"></span>MeKong</a>
              </div>
            </li>
              <li class="nav-item">
              <a class="nav-link link text-black display-4" href="<?php echo $this->Url->build('/agents-activities'); ?>"><span class="fa fa-home fa-1x"></span>SHORE EXCURSIONS</a>
            </li>

           <!--  <li class="nav-item">
              <a class="nav-link link text-black display-4" href="<?php echo $this->Url->build('/agents'); ?>"><span class="fa fa-home fa-1x"></span>HOME</a>
            </li> -->
          </ul>
            
          </div>
    </nav>
</section>

 <?php echo $this->Flash->render(); ?>
            <?php echo $this->Flash->render('auth'); ?>
            <?php echo $this->fetch('content'); ?>

<section class="footer4 cid-qFgHELdECa mbr-parallax-background" id="footer4-4" data-rv-view="227">
    <div class="mbr-overlay" style="background-color: rgb(60, 60, 60); opacity: 0.5;"></div>
<div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col">
                <div class="col offset-md-1">
                <p class="mb-3 mbr-fonts-style foot-title display-7"></p>
                <p class="mbr-text mbr-fonts-style mbr-links-column display-7">
                    <a href="#" class="text-white" style="font-weight: 500">Home FAQs</a>
                    <br><a href="#" class="text-white" style="font-weight: 500">Contact Us</a>
                    <br><a href="#" class="text-white" style="font-weight: 500">Terms & Conditions</a>
                    <br><a href="#" class="text-white" style="font-weight: 500">Privacy Policy</a>
                </p>
                </div>
            </div>

            <div class="col">

                <div class="container pb-3 offset-md-1" style="font-size: 14px;">
                    <h4 class="pb-2">Contact Us</h4>
                    <p class="mbr-fonts-style foot-title mb-1">From Australia: <i>1300 739 652</i></p>
                    <p class="mbr-fonts-style foot-title mb-1">Outside Australia: <i>+61 8 7226 1898</i></p>
                    <p class="mbr-fonts-style foot-title mb-1">info@tweetworldtravel.com.au</p><br>
                    <img src="img/participation.png" alt="" title="" media-simple="true" class="w-100">
                </div>
                
            </div>

            <div class="col">
                <div class="col offset-md-1" style="font-size: 14px;">
                    <h4 class="pb-2">Contact Form</h4>
<!--                     <p class="mbr-fonts-style foot-title mb-1">ABN 71 608 371 277</p>
                    <p class="mbr-fonts-style foot-title mb-1">ATAS Accreditation No: A13040</p>
                    <p class="mbr-fonts-style foot-title mb-1">CATO Registered Operator No.TO1033</p>
                    <p class="mbr-fonts-style foot-title mb-1">© Copyright 2012 Tweet World Travel Pty. Ltd.</p> -->
                
                <div class="social-list pl-0 pt-3 mb-0">
                    <div class="soc-item">
                        <a href="http://facebook.com/Tweetworldtravel12/" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social fa fa-facebook socicon" media-simple="true"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://www.youtube.com/" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social fa fa-youtube-play socicon" media-simple="true"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://twitter.com/TWorldTravel" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social fa fa-twitter socicon" media-simple="true"></span>
                        </a>
                    </div>
                    <div class="soc-item">
                        <a href="https://plus.google.com/+TweetworldtravelAustralia" target="_blank">
                            <span class="mbr-iconfont mbr-iconfont-social fa fa-google-plus socicon" media-simple="true"></span>
                        </a>
                    </div>
                </div>
                </div>
            </div>
        </div>
        </div>
</section>


  <script src="assetsagent/popper/popper.min.js"></script>
  <script src="assetsagent/tether/tether.min.js"></script>
  <script src="assetsagent/bootstrap/js/bootstrap.min.js"></script>
  <script src="assetsagent/smoothscroll/smooth-scroll.js"></script>
  <script src="assetsagent/touchswipe/jquery.touch-swipe.min.js"></script>
  <script src="assetsagent/parallax/jarallax.min.js"></script>
  <script src="assetsagent/dropdown/js/script.min.js"></script>
  <script src="assetsagent/theme/js/script.js"></script>
  <script src="assetsagent/formoid/formoid.min.js"></script>
  
  
</body>
</html>