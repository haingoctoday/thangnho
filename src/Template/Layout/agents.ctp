
 <?php //echo $this->fetch('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perfect Travel a Travel Category Bootstrap responsive Website Template | Home :: nhlayouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="haha" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>

   <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
     <?= $this->Html->css(['bootstrap.css'],['media' => 'all']) ?>

 <?= $this->Html->css(['style.css'],['media' => 'all']) ?>
        <?= $this->Html->css(['font-awesome.css'],['media' => 'all']) ?>

        

      <?= $this->Html->script('jquery-1.11.1.min') ?>
       <?= $this->Html->script('bootstrap') ?>
         <?php echo $this->Html->script('move-top') ?>
        
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
  
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $(".scroll").click(function(event){     
                event.preventDefault();
                $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
        });
    </script> 
  

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
    <!-- banner -->
    <div class="banner parallax-window">
        <!-- <div class="parallax-window" data-parallax="scroll" data-image-src="img/1.jpg"> -->
        <div class="agileinfo-dot">
          
        </div>

         <?= $this->fetch('content') ?>
        <!-- </div> -->

        <!-- //banner -->
        <!-- services -->
     
        <!-- //services -->

     

        <!-- gallery -->

    <!-- //gallery -->
        <!-- feedback -->

        <!-- //feedback -->
        <!-- news-letter -->

        <!-- //news-letter -->
        <!-- footer -->
       
                <!-- //footer -->
              
         
              
     

      
    </body> 
    </html>