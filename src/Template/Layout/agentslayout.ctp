<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= h($title) ?></title>

  
      <?php echo $this->Html->css('bootstrap.min'); ?>
    <link href="https://fonts.googleapis.com/css?family=Noto Sans" rel="stylesheet">
    <?php echo $this->Html->css('scrolling-nav'); ?>
    <?php echo $this->Html->css('font-awesome.min'); ?>
  </head>

  <body id="wrapper-box-twt">

    <!-- Navigation -->
     <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" style="background-color: #2a3c58;height: 65px;">
        <div class="container">
            <a class="navbar-brand js-scroll-trigger" href="#page-top">
                <div class="col-md-6">Agency Name</div>
                <div class="col-md-6"><span class="login-font agency-font">Agency@email.com</span></div>
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">Languages</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#services">Currency</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Live Chat</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">icon</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Logout</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
     <div class="wraper-content-agency" style="margin-top: 90px;">

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg mau-nav" id="mainNav" style="background-color: #ffffff;height: 110px;">
            <div class="container">
                <a class="navbar-brand js-scroll-trigger" href="#page-top">
                   
                        <img src="img/logo_1.png" alt="" title="" media-simple="true">

        </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item pr-3">
                            <a class="nav-link js-scroll-trigger mau-nav-black" href="#about">ACCOMMODATION</a>
                        </li>
                        <li class="nav-item pr-3">
                            <a class="nav-link js-scroll-trigger mau-nav-black" href="#">TRANSFERS</a>
                        </li>
                        <li class="nav-item pr-3">
                            <a class="nav-link js-scroll-trigger mau-nav-black" href="#">TOURS</a>
                        </li>
                        <li class="nav-item pr-3">
                            <a class="nav-link js-scroll-trigger mau-nav-black" href="#">ACTIVITIES</a>
                        </li>
                        <li class="nav-item pr-3">
                            <a class="nav-link js-scroll-trigger mau-nav-black" href="#">CRUISE</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link js-scroll-trigger mau-nav-black" href="#">SHORE</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
   <?php //echo $this->Flash->render(); ?>
 <?php echo $this->fetch('content'); ?>
  

    <!-- Footer -->
  <div style="height: 60px"></div>
    <!-- Footer -->
    <footer class="py-1" style="background-color: #2a3c58">
        <div class="container">
            <p class="m-0 text-center text-white">&copy; 2018 Tweet World Travel Pty. Ltd.</p>
        </div>
        <!-- /.container -->
    </footer>

  <div class="text-center center-block pt-3 ihihihih">
              <a href="#"><i class="fa fa-facebook-square fa-3x social pr-2" id="social-fb"></i></a>
              <a href="#"><i class="fa fa-twitter-square fa-3x social pr-2" id="social-tw"></i></a>
              <a href="#"><i class="fa fa-google-plus-square fa-3x social pr-2" id="social-gp"></i></a>
              <a href="#"><i class="fa fa-youtube-square fa-3x social" id="social-yt"></i></a>
</div>

    <!-- Bootstrap core JavaScript -->

      <?php echo $this->Html->script('jquery.min'); ?>
        <?php echo $this->Html->script('bootstrap.bundle.min'); ?>
          <?php echo $this->Html->script('jquery.easing.min'); ?>
            <?php //echo $this->Html->script('scrolling-nav'); ?>
   



  </body>

</html>
