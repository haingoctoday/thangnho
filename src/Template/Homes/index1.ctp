
<section class="cid-qESr5MAIF0 mbr-fullscreen mbr-parallax-background" id="header15-h" data-rv-view="303">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(7, 59, 76);"></div>

    <div class="container align-right">
<div class="row">
    <div class="mbr-white col-lg-8 col-md-7 content-container">
        <h1 class="mbr-section-title mbr-bold pb-3 mbr-fonts-style display-1">DISCOVER
<div>THE WORLD
</div><div>OF TWEET WORLD</div></h1>
        
    </div>
    <div class="col-lg-4 col-md-5">
    <div class="form-container">

        <?php 
        if (!is_null($this->request->session()->read('Auth.User.id'))) {

      ?>
      <h3 class="text-center pb-1" style="color: white;"><a href="<?php echo $this->Url->build('/agents'); ?>" style="color: white;text-decoration: underline;">GO TO AGENT PAGE</a></h3>
      <?php
}else{
        ?>
	<h3 class="text-center pb-1" style="color: white;">CLIENT LOGIN</h3>
        <div class="media-container-column" data-form-type="formoid">
            <div data-form-alert="" hidden="" class="align-center">Thanks for filling out the form!</div>
           <form action="<?php echo $this->Url->build(array('controller' => 'users', 'action' => 'login')); ?>" method="post">
                
                <div data-for="email">
                    <div class="form-group">
                        <input type="email" class="form-control px-3" name="email" data-form-field="Email" placeholder="Email" required="" id="email-header15-h">
                    </div>
                </div>
                <div data-for="password">
                    <div class="form-group">
                        <input type="password" class="form-control px-3" name="password" data-form-field="password" placeholder="Password" id="phone-header15-h">
                    </div>
                </div>
                
                <span class="input-group-btn"><button href="" type="submit" class="btn btn-secondary btn-form display-4">Log In</button></span>
            </form>
        </div>


       <?php }?> 
    </div>
    </div>
</div>
    </div>
    
</section>

<section class="features1 cid-qEUrYDejEa" id="features1-1w" data-rv-view="306">
    
    

    
    <div class="container">
        <div class="media-container-row">

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbr-iconfont mbri-cash" media-simple="true"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">250,000+</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Hotels &amp; Apartments</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbri-touch mbr-iconfont" media-simple="true"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">50,000+</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Activities Worldwide</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbri-responsive mbr-iconfont" media-simple="true"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">100+</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Countries with Transfers</p>
                </div>
            </div>

            <div class="card p-3 col-12 col-md-6 col-lg-3">
                <div class="card-img pb-3">
                    <span class="mbri-desktop mbr-iconfont" media-simple="true"></span>
                </div>
                <div class="card-box">
                    <h4 class="card-title py-3 mbr-fonts-style display-5">600+</h4>
                    <p class="mbr-text mbr-fonts-style display-7">Ferry Routes</p>
                </div>
            </div>

        </div>

    </div>

</section>

<section class="mbr-section content5 cid-qESkqyQNei mbr-parallax-background" id="content5-3" data-rv-view="309">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;">ACCOMMODATION</span></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">Search over 250,000 hotels and apartments 
in more than 150 countries around the globe.</h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content5 cid-qESksiRzX4 mbr-parallax-background" id="content5-4" data-rv-view="312">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;">ACTIVITIES</span><span style="font-weight: normal;"><br></span></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">Search over 50,000 activities
 in 330 cities worldwide.<br><br></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="mbr-section content5 cid-qESksK3i50 mbr-parallax-background" id="content5-5" data-rv-view="315">

    

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(35, 35, 35);">
    </div>

    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 col-md-8">
                <h2 class="align-center mbr-bold mbr-white pb-3 mbr-fonts-style display-2"><span style="font-weight: normal;">TRANSFERS</span></h2>
                <h3 class="mbr-section-subtitle align-center mbr-light mbr-white pb-3 mbr-fonts-style display-5">Book a range of transfer options in more than 100 countries,
<div>including shuttle, mini-bus and private car transfers.</div></h3>
                
                
            </div>
        </div>
    </div>
</section>

<section class="testimonials1 cid-qESl0wPRgt" id="testimonials1-a" data-rv-view="318">

    

    
    <div class="container">
        <div class="media-container-row">
            <div class="title col-12 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">WHAT OUR AGENTS SAY ABOUT US</h2>
                
            </div>
        </div>
    </div>

    <div class="container pt-3 mt-2">
        <div class="media-container-row">
            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        
                        <p class="mbr-text mbr-fonts-style display-7">"We use Excite Holidays because they have an unrivalled product range, we can always find accommodation in popular places, as well as far flung destinations. Also, the booking confirmation and documentation is instantaneous making it easy to have everything ready for the traveller."</p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">John Smith</div>
                        
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        
                        <p class="mbr-text mbr-fonts-style display-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae.</p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">John Smith</div>
                        
                    </div>
                </div>
            </div>

            <div class="mbr-testimonial p-3 align-center col-12 col-md-6 col-lg-4">
                <div class="panel-item p-3">
                    <div class="card-block">
                        
                        <p class="mbr-text mbr-fonts-style display-7">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Excepturi, aspernatur, voluptatibus, atque, tempore molestiae.</p>
                    </div>
                    <div class="card-footer">
                        <div class="mbr-author-name mbr-bold mbr-fonts-style display-7">John Smith</div>
                        
                    </div>
                </div>
            </div>

            

            

            
        </div>
    </div>   
</section>

<section class="clients cid-qESwZ72BPp mbr-parallax-background" id="clients-n" data-rv-view="321">
      

    <div class="mbr-overlay" style="opacity: 0.4; background-color: rgb(79, 73, 67);">
    </div>
        <div class="container mb-5">
            <div class="media-container-row">
                <div class="col-12 align-center">
                    <h2 class="mbr-section-title pb-3 mbr-fonts-style display-2">Our Clients</h2>
                 
                </div>
            </div>
        </div>

    <div class="container">
        <div class="carousel slide" data-ride="carousel" role="listbox">
            <div class="carousel-inner" data-visible="5">
                
                
                
                
                
            <div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/1.png" class="img-responsive clients-img" media-simple="true">
                            </div>
                        </div>
                    </div>
                </div>
				<div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/2.png" class="img-responsive clients-img" media-simple="true">
                            </div>
                        </div>
                    </div>
                </div>
				<div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/3.png" class="img-responsive clients-img" media-simple="true">
                            </div>
                        </div>
                    </div>
                </div>
				<div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/4.png" class="img-responsive clients-img" media-simple="true">
                            </div>
                        </div>
                    </div>
                </div>
				<div class="carousel-item ">
                    <div class="media-container-row">
                        <div class="col-md-12">
                            <div class="wrap-img ">
                                <img src="assets/images/5.png" class="img-responsive clients-img" media-simple="true">
                            </div>
                        </div>
                    </div>
                </div>
				</div>
        </div>
    </div>
</section>

<section class="footer4 cid-qEUxp5tWJb mbr-parallax-background" id="footer4-1x" data-rv-view="335">

    

    <div class="mbr-overlay" style="background-color: rgb(60, 60, 60); opacity: 0.5;"></div>

    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-md-3 col-sm-4">
                <div class="mb-3 img-logo">
                    <a href="#/">
                        <img src="assets/images/twt-logo-7265x2519.png" alt="Mobirise" title="" media-simple="true">
                    </a>
                </div>
                <p class="mb-3 mbr-fonts-style foot-title display-7"></p>
                <p class="mbr-text mbr-fonts-style mbr-links-column display-7">
                    <a href="#" class="text-white">About Us</a>
                    <br><a href="#" class="text-white">Services</a>
                    <br><a href="#" class="text-white">Selected Work</a>
                    <br><a href="#" class="text-white">Get In Touch</a>
                </p>
            </div>
            <div class="col-md-4 col-sm-8">
                <p class="mb-4 foot-title mbr-fonts-style display-7">RECENT NEWS</p>
                <p class="mbr-text mbr-fonts-style foot-text display-7">Footer with solid color background and a contact form, Easily add subscribe and contact forms without any server-side integration.<br>
                    <br>Mobirise helps you cut down development time by providing you with a flexible website editor with a drag and drop interface.</p>
            </div>
            <div class="col-md-4 offset-md-1 col-sm-12">
                <p class="mb-4 foot-title mbr-fonts-style display-7">SUBSCRIBE</p>
                <p class="mbr-text mbr-fonts-style form-text display-7">Get monthly updates and free resources.</p>
                <div class="media-container-column" data-form-type="formoid">
                    <div data-form-alert="" hidden="" class="align-center">Thanks for filling out the form!</div>

                    <form class="form-inline" action="#/" method="post" data-form-title="Mobirise Form">
                        <input type="hidden" value="JN7gDpNxJLEfUxdG0edKjUniUdgDZYC311Xkus0NB9f2aPyeSMyhVXzlLBXgQJGiSPVY4XYJIwVgs1Hv98wWTbGC7V9VNeDBcSVsWFBdDbzv1nF/Nmxx8YuE7tVF0PuE" data-form-email="true">
                        <div class="form-group">
                            <input type="email" class="form-control input-sm input-inverse my-2" name="email" required="" data-form-field="Email" placeholder="Email" id="email-footer4-1x">
                        </div>
                        <div class="input-group-btn m-2"><button href="" class="btn btn-primary display-4" type="submit" role="button">Subscribe</button></div>
                    </form>
                </div>
                <p class="mb-4 mbr-fonts-style foot-title display-7">CONNECT WITH US</p>
                <div class="social-list pl-0 mb-0">
                        <div class="soc-item">
                            <a href="https://twitter.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.facebook.com" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" media-simple="true"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="https://www.youtube.com/" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" media-simple="true"></span>
                            </a>
                        </div>
                        
                        
                        
                </div>
            </div>
        </div>
        
    </div>
</section>