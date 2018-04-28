<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= h($title) ?></title>
    <!-- Bootstrap core CSS -->

    <?php echo $this->Html->css('bootstrap.min'); ?>
    <!-- Custom styles for this template -->

    <?php echo $this->Html->css('3-col-portfolio'); ?>
     <?php echo $this->Html->css('jquery.typeahead.min'); ?>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    
    <?php echo $this->Html->script('jquery.min'); ?>
    <?php echo $this->Html->script('bootstrap.bundle.min'); ?>
    <?php echo $this->Html->script('jquery.typeahead.min'); ?>
   
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
      <div class="container">
        <a class="navbar-brand" href="#">Tweet World Travel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">ENGAGE
                <span class="sr-only">(current)</span>
            </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Live Chat</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Services</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#">Log out</a>
      </li>
  </ul>
</div>
</div>
</nav>

<!-- Page Content -->
<div class="container" id="main">


  <div class="row">
    <div class="col-lg-3">
        <?php echo $this->Html->image('twt_logo.png', ['alt' => 'logo','class'=>'logo']);?>
     
  </div>
  <div class="col-lg-9 text-right">
    <?php
    echo $this->Html->link(
    "<span class='text_menu'> Accommodation</span>",
    ['controller' => 'Agents', 'action' => 'hotel_search'],
    ['escape' => false]
    );
    ?>
    

      <span class="text_menu">Transfers</span>

      <span class="text_menu">Tours</span>

      <span class="text_menu">Activities</span>

      <span class="text_menu">Cruises</span>

      <span class="text_menu">Packages</span>

  </div>
</div>

           <?php echo $this->Flash->render(); ?>
            <?php echo $this->Flash->render('auth'); ?>
            <?php echo $this->fetch('content'); ?>
<!-- /.row -->



</div>
<!-- /.container -->

<!-- Footer -->
<footer class="py-5 bg-dark">
  <div class="container">
    <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
</div>
<!-- /.container -->
</footer>

<!-- Bootstrap core JavaScript -->
<script type="text/javascript">
    $('.carousel').carousel();
</script>

</body>

</html>
