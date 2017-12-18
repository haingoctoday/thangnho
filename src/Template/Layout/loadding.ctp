
 <?php //echo $this->fetch('content') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Perfect Travel a Travel Category Bootstrap responsive Website Template | Home :: nhlayouts</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <meta name="keywords" content="haha" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
   <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>
     <?= $this->Html->css(['bootstrap.css'],['media' => 'all']) ?>
      <?= $this->Html->css(['style.css'],['media' => 'all']) ?>
       <?= $this->Html->css(['flexslider.css'],['media' => 'screen'],['property'=>'""']) ?>
        <?= $this->Html->css(['font-awesome.css'],['media' => 'all']) ?>
        <?= $this->Html->css(['owl.carousel.css'],['media' => 'all']) ?>
        <?= $this->Html->css(['owl.theme.css'],['media' => 'all']) ?>
        <?= $this->Html->css(['cm-overlay.css'],['media' => 'all']) ?>
        <?= $this->Html->css(['animate.css'],['media' => 'all']) ?>
		
    <!-- font -->
<!-- <link href="//fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet"> -->
    <!-- //font -->
      <?= $this->Html->script('jquery-1.11.1.min') ?>
       <?= $this->Html->script('bootstrap') ?>
		<?= $this->Html->script('jquery.counterup') ?>
		<?= $this->Html->script('waypoints.min') ?>
        <?php echo $this->Html->script('parallax') ?>
        <?php echo $this->Html->script('myjs') ?>
		
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
    <script>
        $(document).ready(function() { 
            $("#owl-demo").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds
        autoPlay:true,
        items : 3,
        itemsDesktop : [640,5],
        itemsDesktopSmall : [414,4]

    });

        }); 
    </script>

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
    <!-- banner -->
    <div class="banner parallax-window" data-parallax="scroll" data-image-src="img/1.jpg">
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
                                    <a href="index.html"><img src="img/twt_logo.png" class="logo" alt=""></a></h1>
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

                        <div id="horizontalTab" style="display: block; width: 36%; margin: 0px;">

                            <ul class="resp-tabs-list">
                                <li class="resp-tab-item resp-tab-active" aria-controls="tab_item-0" role="tab"><span>Sign In</span></li>
                                
                            </ul>           
                            <div class="resp-tabs-container">
                                <h2 class="resp-accordion resp-tab-active" role="tab" aria-controls="tab_item-0"><span class="resp-arrow"></span>Clien Login</h2>
                                <div class="tab-1 resp-tab-content resp-tab-content-active" aria-labelledby="tab_item-0" style="display:block">
                                    <div class="login-top">
                                        <form action="#" method="post">
                                            <input type="email" name="email1" class="email" placeholder="Email" required="">
                                            <input type="password" autocomplete="" name="password" class="password" placeholder="Password" required=""> 

                                            <div class="login-bottom">
                                                
                                                <a href="#">Forgot password?</a>

                                                <div class="clear"></div>
                                            </div>  
                                            <input type="submit" value="Sign In">
                                            <div class="login-bottom-si">
                                                <a href="#">Don't have an account? Sign Up</a>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                
                            </div>

                        </div>  

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
        <div id="services" class="services">
            <div class="container">  
                
                <div class="services-nhls-row">
                    <div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-nhlayouts">
                        <span class="glyphicon glyphicon-home effect-1" aria-hidden="true"></span>
                        <h5 class="counter">250,000</h5>
                        <p>Hotels & Apartments</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-nhlayouts">
                        <span class="glyphicon glyphicon-globe effect-1" aria-hidden="true"></span>
                        <h5 class="counter">50,000</h5>
                        <p>Activities Worldwide</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 services-grid agileits-nhlayouts">
                        <span class="glyphicon glyphicon-tree-deciduous effect-1" aria-hidden="true"></span>
                        <h5 class="counter">100</h5>
                        <p>Countries with Transfers</p>
                    </div>
                    <div class="col-md-3 col-sm-3 col-xs-6 services-grid">
                        <span class="glyphicon glyphicon-globe effect-1" aria-hidden="true"></span>
                        <h5 class="counter">600</h5>
                        <p>Ferry Routes</p>
                    </div> 
                    <div class="clearfix"> </div>
                </div>  
            </div>
        </div>
        <!-- //services -->

        <script>
    jQuery(document).ready(function( $ ) {
        $('.counter').counterUp({
            delay: 10,
            time: 3000
        });
    });
</script>
        <!-- gallery -->
    <div class="gallery">
        <div class="container">

            <div class="gallery-grids">

                <div class="nhls-gallery-grids">
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/2.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/2.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/3.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/5.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/6.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="nhls-gallery-grids agileits-gallery-grids">
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/7.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/7.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/8.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/8.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/9.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/9.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/10.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/10.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="nhls-gallery-grids">
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/3.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/3.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/5.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/5.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/6.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/6.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 gallery-grids-left-subr">
                        <div class="gallery-grid">
                            <a class="example-image-link" href="img/7.jpg" data-lightbox="example-set" data-title="Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vitae cursus ligula">
                                <img src="img/7.jpg" alt="" />
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <script src="js/lightbox-plus-jquery.min.js"> </script>
            </div>
        </div>
    </div>
    <!-- //gallery -->
        <!-- feedback -->
        <div class="feedback_dot">
            <div class="jarallax feedback">
                <div class="container">
                    <div class="nh-welcome-heading">
                        <h3>Feedback</h3>
                    </div>
                    <div class="agileits-feedback-grids">
                        <div id="owl-demo" class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="feedback-info">
                                    <div class="feedback-top">
                                        <p> Nhận xét 1. </p>
                                    </div>
                                    <div class="feedback-grids">
                                        <div class="feedback-img">
                                            <img src="img/f1.jpg" alt="" />
                                        </div>
                                        <div class="feedback-img-info">
                                            <h5>Mary Jane</h5>
                                            <p>Vestibulum</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="item">
                                <div class="feedback-info">
                                    <div class="feedback-top">
                                        <p> Nhận xét22 </p>
                                    </div>
                                    <div class="feedback-grids">
                                        <div class="feedback-img">
                                            <img src="img/f2.jpg" alt="" />
                                        </div>
                                        <div class="feedback-img-info">
                                            <h5>Peter guptill</h5>
                                            <p>Vestibulum</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>  
                            </div>
                            <div class="item">
                                <div class="feedback-info">
                                    <div class="feedback-top">
                                        <p> Nhận xét 33333. </p>
                                    </div>
                                    <div class="feedback-grids">
                                        <div class="feedback-img">
                                            <img src="img/f3.jpg" alt="" />
                                        </div>
                                        <div class="feedback-img-info">
                                            <h5>Steven Wilson</h5>
                                            <p>Vestibulum</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>  
                            </div>
                              <div class="item">
                                <div class="feedback-info">
                                    <div class="feedback-top">
                                        <p> Nhận xét 33333. </p>
                                    </div>
                                    <div class="feedback-grids">
                                        <div class="feedback-img">
                                            <img src="img/f3.jpg" alt="" />
                                        </div>
                                        <div class="feedback-img-info">
                                            <h5>Steven Wilson</h5>
                                            <p>Vestibulum</p>
                                        </div>
                                        <div class="clearfix"> </div>
                                    </div>
                                </div>  
                            </div>
                           
                           
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- //feedback -->
        <!-- news-letter -->
        <div class="news-letter">
            <div class="container">
                <div class="nh-welcome-heading wthree-subscribe">
                    <h3>GET OUR NEWSLETTER</h3>
                </div>
                <div class="agileinfo-subscribe">
                    <form action="#" method="post">
                        <input type="text" placeholder="Full Name" name="Name"  required="">
                        <input type="text" placeholder="Agency Name" name="Agency"  required="">
                        
                        <input type="email" placeholder="Email" name="Email"  required="">
                        <input type="text" placeholder="Country" name="Country"  required="">
                        <input type="text" placeholder="State" name="State"  required="">
                        <input type="submit" value="Subscribe">
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </div>
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
                                <div class="popular-grids">
                                    <div class="popular-grid">
                                        <a href="#"><img src="img/5.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-grid">
                                        <a href="#"><img src="img/6.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-grid">
                                        <a href="#"><img src="img/7.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-grid">
                                        <a href="#"><img src="img/8.jpg" alt=""></a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                                <div class="popular-grids">
                                    <div class="popular-grid">
                                        <a href="#"><img src="img/9.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-grid">
                                        <a href="#"><img src="img/10.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-grid">
                                        <a href="#"><img src="img/2.jpg" alt=""></a>
                                    </div>
                                    <div class="popular-grid">
                                        <a href="#"><img src="img/3.jpg" alt=""></a>
                                    </div>
                                    <div class="clearfix"> </div>
                                </div>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="copyright">
                        <p>© 2017 GMH | GMH</p>
                    </div>
                </div>
                <!-- //footer -->
                <script src="js/jarallax.js"></script>
                <script src="js/SmoothScroll.min.js"></script>
                <script type="text/javascript">
                    /* init Jarallax */
                    $('.jarallax').jarallax({
                        speed: 0.5,
                        imgWidth: 1366,
                        imgHeight: 768
                    })
                </script>
                <script type="text/javascript" src="js/move-top.js"></script>
                <script type="text/javascript" src="js/easing.js"></script>
                <!-- here stars scrolling icon -->
                <script type="text/javascript">
                    $(document).ready(function() {
        

                $().UItoTop({ easingType: 'easeOutQuart' });

            });
        </script>
        <script type="text/javascript" src="js/easyResponsiveTabs.js"></script>
        <script type="text/javascript">
            $(document).ready(function () {
                $('#horizontalTab').easyResponsiveTabs({
            type: 'default', //Types: default, vertical, accordion           
            width: 'auto', //auto or any width like 600px
            fit: true   // 100% fit in a container
        });
            });
        </script>

        <!-- //here ends scrolling icon -->
        <script src="js/owl.carousel.js"></script>
    </body> 
    </html>