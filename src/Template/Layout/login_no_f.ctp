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
    <nav class="navbar navbar-expand-lg navbar-dark" id="mainNav" style="background-color: #2a3c58">
      <div class="container">
        <!-- <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a> -->
        <a href="index.html">
          <img src="http://twt.vietlac.info/img/logo.png" alt="" title="" media-simple="true">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
    </nav>
   <?php //echo $this->Flash->render(); ?>
 <?php echo $this->fetch('content'); ?>
    <!-- <section class="" style="background-color: #efefef"> -->
   

    <!-- </section> -->


    <!-- Footer -->
    <footer class="py-1 fixed-bottom" style="background-color: #2a3c58">
      <div class="container">
        <p class="m-0 text-center text-white">&copy; 2018 Tweet World Travel Pty. Ltd.</p>
      </div>
      <!-- /.container -->
    </footer>

    <!-- Bootstrap core JavaScript -->

      <?php echo $this->Html->script('jquery.min'); ?>
        <?php echo $this->Html->script('bootstrap.bundle.min'); ?>
          <?php echo $this->Html->script('jquery.easing.min'); ?>
            <?php //echo $this->Html->script('scrolling-nav'); ?>
   



  </body>

</html>
