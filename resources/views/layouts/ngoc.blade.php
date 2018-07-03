<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>{!!$s_info->web_name!!}</title>
        
        <!-- Google Fonts -->
        <!-- <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'> -->
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
        <!-- <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'> -->
        <!-- <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet"> -->
        <!-- Bootstrap -->
        <!-- <link href="{!!url('public/front-end/front-end-style.css')!!}" rel="stylesheet"> -->
        <link rel="stylesheet" href="{!!asset('css/bootstrap.min.css')!!}">
        
        <!-- Font Awesome -->
        <link rel="stylesheet" href="{!!asset('css/font-awesome.min.css')!!}">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" >
        
        <!-- Custom CSS -->
        <link rel="stylesheet" href="{!!asset('css/owl.carousel.css')!!}">
        <link rel="stylesheet" href="{!!asset('style.css')!!}">
        <link rel="stylesheet" href="{!!asset('css/responsive.css')!!}">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://code.jquery.com/jquery.min.js"></script>
    </head>
    <body>
        @if (count($errors) > 0)
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @elseif (Session()->has('flash_level'))
                            <div class="alert alert-success">
                                <ul>
                                    {!! Session::get('flash_massage') !!}   
                                </ul>
                            </div>
                        @endif
        <div class="home-top-on">
            <div class="zigzag-bottom"></div>
            <div class="container">
                <div class="row footer-about-us top-header-ab">
                    <h2>{{ trans('messages.introduce') }}</h2>
                </div>
                <div class="row">
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-menu">
                            a
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6">
                        <div class="footer-about-us sty-if">
                            <h2 style="color: white;text-transform: uppercase;font-size: 2rem;">{{ trans('messages.introduceb') }} <span class="maucam">{!!$s_info->web_name!!}</span> </h2>
                            <p>{!!$s_info->gioithieu!!}</p>
                            <div class="footer-social">
                                <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6">
                        <div class="footer-newsletter">
                            <h4>ĐỊA CHỈ TẠI HÀ NỘI</h2>
                            <p>10 cơ sở tại HN. Xem bản đồ</p>
                            <h4>ĐỊA CHỈ TẠI HẢI PHÒNG</h2>
                            <p>10 cơ sở tại HN. Xem bản đồ</p>
                            <h4>LIÊN HỆ</h2>
                            <p>Hotline: {!!$s_info->sdt_hotline!!}</p>
                            <p>CSKH: {!!$s_info->sdt_htkh!!}</p>
                            <p>Tổng đài: {!!$s_info->sdt_tongdai!!}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-area">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="user-menu">
                            <div class="textwidget">HOTLINE <a href="tel:{!!$s_info->sdt_hotline!!}">{!!$s_info->sdt_hotline!!}</a></div>
                        </div>
                    </div>
                    
                    <div class="col-md-4" style="padding-right: 0;">
                        <div class="header-right">
                          <ul class="nav navbar-nav navbar-right">
                       
                    </ul>
                            <ul class="list-unstyled list-inline">
                              <div class="textwidget"><a href="{!! route('user.change-language', ['en']) !!}" style="float: left;">English</a>
<a href="{!! route('user.change-language', ['vi']) !!}" style="float: left;margin-left: 10px">Vietnam</a></div>
                                <li class="dropdown dropdown-small midded">
                                     @if (Auth::guest())
                                     <a href="{{ url('/me') }}">{{ trans('messages.account') }} </a>
                                      @else
                                     
<a href="{{ url('/me') }}">{{ trans('messages.hello') }} : {{ Auth::user()->name }}</a>
                                      @endif
                                </li>
                                <li class="dropdown dropdown-small end">
                                    <a href="{!!$s_info->url_fb!!}" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="div_show_div">
                    <i class="fa fa-chevron-down"></i>
                </div>
            </div>
            </div> <!-- End header area -->
            
            
            <div class="site-branding-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="logo">
                                <a href="{{ url('/') }}"><img src="{!!url('uploads/info/'.$s_info->logo)!!}"></a>
                            </div>
                        </div>
                        <div class="col-sm-5">
                             <form action="{!!url('tim-kiem')!!}" method="get">
                            <div class="input-group custom-search-form">
                               
                                <input type="text" class="form-control inpu-seary" name="q" placeholder="{{ trans('messages.btimkiem') }}">
                                <span class="input-group-btn">
                                    <button class="btn btn-primary btn-seary" type="submit">
                                    <span class="fas fa-search "></span>
                                    </button>
                                </span>
                               
                                </div><!-- /input-group -->
                                 </form>
                            </div>
                            
                            <div class="col-sm-3">
                                <div class="shopping-item" id="cart">
                                    
                                    <!-- <img src="{!!url('img/bag.png')!!}"> -->
                                    <i class="fas fa-shopping-bag fa-2x fa-fw maucam"></i>
                                    <span class="product-count">{!!Cart::content()->count()!!}</span>
                                </div>
                                <div class="">
                                    <div class="shopping-cart">
                                        <div class="shopping-cart-header">
                              <!--               <i class="fa fa-shopping-cart cart-icon"></i><span class="badge">3</span>
                                            <div class="shopping-cart-total">
                                                <span class="lighter-text">Total:</span>
                                                <span class="main-color-text">$2,229.97</span>
                                            </div> -->
                                            <span class="sty-bag">{{ trans('messages.spnew') }}</span>
                                            </div> <!--end shopping-cart-header -->
                                            <ul class="shopping-cart-items">

                                                   @foreach(Cart::content() as $row)
                                                <li class="clearfix">
                                                    <a href="" title="" class="product-list-image">
                                                        <img src="{!!url('public/uploads/products/'.$row->options->img)!!}" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" style="width: 80px;height: 70px;margin-right: 10px;" alt="">    
                                                    </a>
                                                    <p class="product-title">
                                                        <a href="" title="{!!$row->name!!}">{!!$row->name!!}</a></p>
                                                    <div class="price sty-span-bag">
                                                        <strong style="font-size: 1.4rem">
                                                            <span>{!!$row->qty!!}</span> x
                                                            <span>{!! number_format($row->price) !!}<span>₫</span></span>   
                                                        </strong>
                                                    </div>
                                                </li>
                                                @endforeach    
                                                                                                                        
                                            </ul>
                                            <div class="shopping-cart-total">
                                                <span class="lighter-text">{{ trans('messages.sum') }}</span>
                                                <span class="main-color-text">{!!Cart::subtotal()!!}<span>₫</span></span>
                                            </div>
                                            <!-- <a href="#" class="button-cart">Điền địa chỉ</a> -->
                                            <a href="{!!url('/gio-hang/')!!}" class="button-cart-dh">{{ trans('messages.vieworder') }}</a>
                                            </div> <!--end shopping-cart -->
                                            </div> <!--end container -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div style="clear: both;"></div>
                            <div class="menu-home-index">
                                <nav class="navbar navbar-default navbar-static">
                                    <div class="navbar-header">
                                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                        <span class="sr-only">Toggle navigation</span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        <span class="icon-bar"></span>
                                        </button>
                                        
                                    </div>
                                    
                                  
                                    <div class="collapse navbar-collapse js-navbar-collapse">
                                        <ul class="nav navbar-nav">
                                              <?php listcate_home ($data_menu,$id_cha =0,$str=""); ?>  
                                           
                                        </ul>
                                        
                                        </div><!-- /.nav-collapse -->
                                    </nav>
                                </div>



@yield('content')
                                                
                                            
                                                    
                                           <div class="footer-top-area">
                                            <div class="zigzag-bottom"></div>
                                            <div class="container">
                                                <div class="row row-ft">
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="footer-menu fix-li">
                                                            <h2 class="footer-wid-title sty-h2">{{ trans('messages.shipingandcontact') }}</h2>
                                                            <ul>
                                                                <li><a href="#">My account</a></li>
                                                                <li><a href="#">Order history</a></li>
                                                                <li><a href="#">Wishlist</a></li>
                                                                <li><a href="#">Vendor contact</a></li>
                                                                <li><a href="#">Front page</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="footer-menu fix-li">
                                                            <h2 class="footer-wid-title sty-h2">VỀ ABBY</h2>
                                                            <ul>
                                                                <li><a href="#">My account</a></li>

                                                                <li><a href="#">Front page</a></li>
                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="footer-menu fix-li">
                                                            <h2 class="footer-wid-title sty-h2">BLOG HƯỚNG DẪN</h2>
                                                            <ul>
                                                                <li><a href="#">Mobile Phone</a></li>
                                                                <li><a href="#">Home accesseries</a></li>
                                                                <li><a href="#">LED TV</a></li>

                                                            </ul>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="footer-newsletter">
                                                            <h2 class="footer-wid-title">Newsletter</h2>
                                                            <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>

                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="page-header text-center address-section-title">
                                                        <h3><a href="#" rel="nofollow" class="sty-a">{{ trans('messages.shopsystem') }}</a></h3>
                                                    </div>
                                                  
                                                       @foreach($data_cuahang as $row)
                                                    <div class="col-md-3 col-sm-6">
                                                        <div class="footer-menu fix-li">
                                                            <ul>
                                                                <li>
                                                                    <div class="sidebar-widget widget_text">
                                                                      <div class="aad1">
                                                                        <span class="location-heading">{!!$row->tencuahang!!}</span>
                                                                        <a href="">{!!$row->sdt!!}</a>
                                                                        <a href="#">{!!$row->diachi!!}</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                            
                                                        </ul>
                                                    </div>
                                                </div>
                                                 @endforeach       
                                                

                                                  
                                                  
                                            </div>
                                        </div>
                                    </div> <!-- End footer top area -->
                                                        
                                                        <div class="footer-bottom-area">
                                                            <div class="container">
                                                                <div class="row">
                                                                    <div class="col-md-9">
                                                                        <div class="copyright">
                                                                            <p>{{ trans('messages.f1') }} | {{ trans('messages.f2') }}| {{ trans('messages.f6') }} : Hà Nội - Tỉnh khác | {{ trans('messages.f3') }} | {{ trans('messages.f4') }} | {{ trans('messages.f5') }}</p>
                                                                            <p>---</p>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <div class="col-md-3">
                                                                        <div class="footer-card-icon">
                                                                            <i class="fa fa-cc-discover"></i>
                                                                            <i class="fa fa-cc-mastercard"></i>
                                                                            <i class="fa fa-cc-paypal"></i>
                                                                            <i class="fa fa-cc-visa"></i>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            </div> <!-- End footer bottom area -->
                                                            
                                                            <!-- Latest jQuery form server -->
                                                            
                                                            
                                                            <!-- Bootstrap JS form CDN -->
                                                            <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
                                                            
                                                            <!-- jQuery sticky menu -->
                                                            <script src="{!!url('js/owl.carousel.min.js')!!}"></script>
                                                            <script src="{!!url('js/jquery.sticky.js')!!}"></script>
                                                            
                                                            <!-- jQuery easing -->
                                                            <script src="{!!url('js/jquery.easing.1.3.min.js')!!}"></script>
                                                            
                                                            <!-- Main Script -->
                                                            <script src="{!!url('js/main.js')!!}"></script>
                                                            
                                                            <!-- Slider -->
                                                            <script type="text/javascript" src="{!!url('js/bxslider.min.js')!!}"></script>
                                                            <script type="text/javascript" src="{!!url('js/script.slider.js')!!}"></script>
                                                            <script type="text/javascript" src="{!!url('js/countUp.js')!!}"></script>

<div class="footer">
  <i class="fas fa-phone-volume"></i><a href="tel:{!!$s_info->sdt_hotline!!}">{!!$s_info->sdt_hotline!!}</a>
</div>
<style type="text/css">
    .footer {
        position: fixed;
    left: 10px;
    bottom: 55px;
    width: 188px;
    background-color: #f15e24;
    color: #fff;
    text-align: center;
    font-size: 1.5em;
    padding: 6px;
    border-radius: 40px;
    z-index: 999;
}
.footer a{
    color: #fff
}
#scroll-to{
    height: 200px;
    width: 600px;
    margin: auto;
    background-color: red
}
</style>
<button style="display: none;" type="button" class="btn btn-info btn-lg taone" data-toggle="modal" data-target="#myModal">Open Modal</button>

<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <!-- <h4 class="modal-title"></h4> -->
      </div>
      <div class="modal-body">
         <img src="img/popup.jpg" style="width: 100%;position: relative;">
       <!--  <p>Bạn bỏ quên</p>
        <p>100.000 đ ?</p>
        <p>To embed your selected fonts into a webpage, copy this code into the of your HTML document.</p>
        <input type="text" name="cc">
        <input type="button" name="zz">
        <input type="button" name="zz"> -->
<form style="
    position: absolute;
    margin: auto;
    top: 55%;
    width: 100%;
    text-align: center;
" action="{!!url('/nhanqc')!!}" method="Post" accept-charset="utf-8">
  {{ csrf_field() }}
  <div class="form-group" style="margin-bottom: 0px ">
   
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" style="
    width: 66%;
    margin: auto;
    height: 52px;
    border-radius: 2px;
" name="email">
   
  </div>
    <div class="form-group" style="
    background: #fff;
    width: 80%;
    height: 74px;
    margin-left: 68px;
    padding-top: 30px;

">
  <button type="submit" class="btn btn-primary" name="subject" value="Nam" style="
   
    width: 132px;
    background-color: #333;

">Nam</button>
  <button type="submit" class="btn btn-primary" name="subject" value="Nu" style="
   
    width: 132px;
    background-color: #bb5a28;

">Nữ</button>
</div>
</form>
      </div>
    <!--   <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal"></button>
      </div> -->
    </div>

  </div>
</div>
<!-- End of LiveChat code -->
                                                        </body>
                                                    </html>