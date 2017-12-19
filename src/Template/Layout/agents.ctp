
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
            <div class="head">
                <div class="container">
                    <div class="navbar-top">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <div class="navbar-brand logo ">
                                <h1 class="animated wow pulse" data-wow-delay=".5s">
                                    <a href="index.html"><?php echo $this->Html->image('twt_logo.png', ['alt' => 'logo']);?></a></h1>
                                </div>

                            </div>

                            <!-- Collect the nav links, forms, and other content for toggling -->
                            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                                <ul class="nav navbar-nav link-effect-4">
                                    <!-- <li class="active"><a href="index.html" data-hover="Home">Home</a> </li> -->
                                    <li><a href="about.html" data-hover="About">About </a> </li>
                                    <li><a href="gallery.html"  data-hover="Gallery">Gallery</a></li>
                                    <li class="dropdown">
                                        <a href="codes.html" class="dropdown-toggle" data-hover="Pages" data-toggle="dropdown">Pages <b class="caret"></b></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="icons.html">Icons</a></li>
                                            <li><a href="codes.html">Short Codes</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="contact.html" data-hover="Contact">Contact Us</a></li>
                                </ul>
                            </div><!-- /.navbar-collapse -->
                        </div>

                        <div class="header-left animated wow fadeInLeft animated" data-wow-delay=".5s" >
                            <ul>
                                <li><i class="glyphicon glyphicon-envelope"></i><a href="mailto:info@example.com">@example.com</a></li>
                                <li><i class="glyphicon glyphicon-earphone"></i>+1234 567 892</li>
                                
                            </ul>
                        </div>
                        <div class="clearfix"></div>    
                    </div>
                </div>
                <div class="banner-slider">
                    <div class="container login_content">


                        <!-- flexSlider -->
                        <div class="clearfix"></div>    
                        <!-- //flexSlider -->
                    </div>
                </div>
            </div>
        </div>
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
        <div class="footer">
            <div class="container">
                <div class="agile-footer-grids">
                    <div class="col-md-4 agile-footer-grid">
                        <h4>Mô tả nội dung</h4>
                        <p>Phần mô tả của cty</p>
                    </div>
                    <div class="col-md-4 agile-footer-grid">
                        <h4>DON'T HAVE AN ACCOUNT? </h4>
                        <ul class="nhagile_footer_grid_list">
                            <li>
                                <button class="dangkytaikhoan">Đăng ký</button>
                            </li>
                            
                                </ul>
                            </div>
                            <div class="col-md-4 agile-footer-grid">
                                <h4>Popular Items</h4>
                             
                              
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>© 2017 GMH | GMH</p>
                    </div>
                </div>
                <!-- //footer -->
              
         
              
     

      
    </body> 
    </html>