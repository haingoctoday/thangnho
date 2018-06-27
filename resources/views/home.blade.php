@extends('layouts.ngoc')
@section('content')


<!-- {{ trans('messages.welcome') }}
@lang('messages.welcome')
{{ Config::get('app.locale') }} -->

<div class="slider-area">
  <!-- Slider -->
  <div class="block-slider block-slider4">
    <ul class="" id="bxslider-home4">
     @foreach($banners as $row)


     <li>
      <!-- <img src="{!!$row->url_banner!!}" alt="Slide"> -->
      <img src="{!!url('uploads/banner/'.$row->url_banner)!!}" alt="Slide">
    </li>
    @endforeach
<!--                                             <li>
                                                <img src="img/s2.jpg" alt="Slide">
                                                
                                            </li>
                                            <li>
                                                <img src="img/s3.jpg" alt="Slide">
                                                
                                              </li> -->

                                            </ul>
                                          </div>
                                          <!-- ./Slider -->
                                        </div> <!-- End slider area -->

                                        <!-- thong ke -->
                                        <?php
                                        $chinhanh = 2;
                                        $sanpham = 216;
                                        $khachhang = 3681;
                                        $donhang = 281180;
                                        ?>           
                                        <div class="maincontent-area">
                                          <div class="container-fluid">
                                            <div class="container">
                                              <div class="row">
                                                <div class="col-lg-12 text-center">
                                                  <h2 class="section-heading">{{ trans('messages.h1mm') }}</h2>
                                                  <p class="text-muted mb-0">Our templates are updated regularly so they don't break.Our templates are updated regularly so they don't break.Our templates are updated regularly so they don't break.Our templates are updated regularly so they don't break.</p>
                                                  <hr class="my-2">
                                                </div>
                                              </div>
                                            </div>
                                            <div class="container">
                                              <div class="row">
                                                <div class="col-lg-3 col-md-6 text-center">
                                                  <div class="service-box mt-5 mx-auto">
                                                    <i class="fa fa-4x fa-globe-asia text-primary mb-3 maucam"></i>
                                                    <h3 class="mb-2">{{ trans('messages.a1cn') }}</h3>
                                                    <div id="counter" style="font-size: 16pt;padding-top: 5px;"><?php echo number_format($chinhanh,0)?></div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 text-center">
                                                  <div class="service-box mt-5 mx-auto">
                                                    <i class="fa fa-4x fa-shopping-cart text-primary mb-3 maucam"></i>
                                                    <h3 class="mb-2">{{ trans('messages.a1sp') }}</h3>
                                                    <div id="counter1" style="font-size: 16pt;padding-top: 5px;"><?php echo number_format($sanpham,0)?></div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 text-center">
                                                  <div class="service-box mt-5 mx-auto">
                                                    <i class="fa fa-4x fa-user-circle text-primary mb-3 maucam"></i>
                                                    <h3 class="mb-2">{{ trans('messages.a1kh') }}</h3>
                                                    <div id="counter2" style="font-size: 16pt;padding-top: 5px;"><?php echo number_format($khachhang,0)?></div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 text-center">
                                                  <div class="service-box mt-5 mx-auto">
                                                    <i class="fa fa-4x fa-shopping-bag text-primary mb-3 maucam"></i>
                                                    <h3 class="mb-2">{{ trans('messages.a1dh') }}</h3>
                                                    <div id="counter3" style="font-size: 16pt;padding-top: 5px;"><?php echo number_format($donhang,0)?></div>
                                                  </div>
                                                </div>
                                              </div>
                                            </div>
                                          </div>
                                        </div> <!-- End main content area --> 

                                        <div class="maincontent-area">
                                          <div class="zigzag-bottom"></div>
                                          <div class="container">
                                            <div class="row">
                                              <div class="col-md-12">
                                                <div class="latest-product">
                                                  <h2 class="section-title">{{ trans('messages.h2mm') }}</h2>
                                                  <div class="row">
                                                    <div class="col-md-9">
                                                      <div class="row">
                                                        <div class="col-md-4">
                                                         <div class="div-ca-c-on">
                                                          <img src="img/c1.jpg" alt="">
                                                          <div class="c-dic-on c1-dic-on"> GELATIN, BỘT THẠCH</div>
                                                        </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                       <div class="div-ca-c-on">
                                                        <img src="img/c2.jpg" alt="">
                                                        <div class="c-dic-on c2-dic-on"> TRÀ SỮA</div>
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                     <div class="div-ca-c-on">

                                                      <img src="img/c3.jpg" alt="">
                                                      <div class="c-dic-on c3-dic-on"> TOPPING & WHIPPING</div>
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row" style="margin-top: 3%">
                                                  <div class="col-md-8">
                                                   <div class="div-ca-c-on">
                                                     <img src="img/c4.jpg" alt="">
                                                     <div class="c-dic-on c4-dic-on"> PHÔ MAI (LẮC, MOZZARELLA, CREAM CHEESE)</div>
                                                   </div>
                                                 </div>
                                                 <div class="col-md-4">
                                                  <div class="div-ca-c-on">
                                                   <img src="img/c5.jpg" alt="">
                                                   <div class="c-dic-on c5-dic-on"> CÂN ĐIỆN TỬ</div>
                                                 </div>
                                               </div>

                                             </div>
                                           </div>
                                           <div class="col-md-3">
                                            <div class="div-ca-c-on">
                                              <img src="img/c6.jpg" alt="">
                                              <div class="c-dic-on c6-dic-on"> ĐỒ ĐÁNH TRỨNG</div>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div> <!-- End main content area -->    

                              <div class="maincontent-area">
                                <div class="zigzag-bottom"></div>
                                <div class="container-fluid">
                                  <div class="row">
                                    <div class="col-md-12">
                                      <div class="latest-product">
                                        <h2 class="section-title">{{ trans('messages.hometopsale') }}</h2>
                                        <div class="product-carousel">
                                          <?php
  //  for ($k=0; $k < 10; $k++) { 
                                          foreach ($pc as $key => $v_pro) {
                                            ?>

                                            <div class="single-product">
                                              <div class="product-f-image">

                                                <!-- <img src="img/1123.jpg" alt=""> -->
                                                <img src="{!!url('uploads/products/'.$v_pro->images)!!}" alt="">
                                                <div class="product-hover">
                                                  <a href="{!!url('gio-hang/addcart/'.$v_pro->id)!!}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                  <a href="{!!url('detail/'.$v_pro->id.'-'.$v_pro->slug)!!}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                              </div>

                                              <h2><a href="single-product.html" class="text_product">{!!$v_pro->name!!}</a></h2>

                                              <div class="product-carousel-price">
                                               {{ trans('messages.onyfrm') }} <ins> {!!number_format($v_pro->price)!!}</ins><span>₫</span>
                                                <!-- <ins>$700.00</ins> <del>$100.00</del> -->
                                              </div>
                                              <table class="table-product" style="display: none">
                                                <tr>
                                                  <td> 1-2</td>
                                                  <td> 3-11</td>
                                                  <td>12+</td>
                                                </tr>
                                                <tr>
                                                  <td>175,000 ₫</td>
                                                  <td>175,000 ₫</td>
                                                  <td>175,000 ₫</td>
                                                </tr>
                                              </table>
                                              <div class="product-carousel-price">
                                               {{ trans('messages.code') }}: B{!!$v_pro->id!!}
                                             </div>
                                           </div>
                                         <?php }?>
                                       </div>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </div> <!-- End main content area -->
                             <div class="maincontent-area">
                              <div class="zigzag-bottom"></div>
                              <div class="container-fluid">
                                <div class="row">
                                  <div class="col-md-12">
                                    <div class="latest-product">
                                      <h2 class="section-title">{{ trans('messages.hometopseo') }}</h2>
                                      <div class="product-carousel">
                                        <?php
   // for ($k=0; $k < 10; $k++) {        
                                          //$random = shuffle($pc); 
                                        foreach ($pc as $key => $v_pro) {

                                          ?>

                                            <div class="single-product">
                                              <div class="product-f-image">

                                                <!-- <img src="img/1123.jpg" alt=""> -->
                                                <img src="{!!url('uploads/products/'.$v_pro->images)!!}" alt="">
                                                <div class="product-hover">
                                                  <a href="{!!url('gio-hang/addcart/'.$v_pro->id)!!}" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                  <a href="{!!url('detail/'.$v_pro->id.'-'.$v_pro->slug)!!}" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                </div>
                                              </div>
                                              
                                              <h2><a href="single-product.html" class="text_product">{!!$v_pro->name!!}</a></h2>
                                              
                                              <div class="product-carousel-price">
                                                {{ trans('messages.onyfrm') }} <ins> {!!number_format($v_pro->price)!!}</ins><span>₫</span>
                                                <!-- <ins>$700.00</ins> <del>$100.00</del> -->
                                              </div>
                                              <table class="table-product" style="display: none">
                                                <tr>
                                                  <td> 1-2</td>
                                                  <td> 3-11</td>
                                                  <td>12+</td>
                                                </tr>
                                                <tr>
                                                  <td>175,000 ₫</td>
                                                  <td>175,000 ₫</td>
                                                  <td>175,000 ₫</td>
                                                </tr>
                                              </table>
                                              <div class="product-carousel-price">
                                               {{ trans('messages.code') }}: B{!!$v_pro->id!!}
                                             </div>
                                           </div>
                                       <?php }?>
                                     </div>
                                   </div>
                                 </div>
                               </div>
                             </div>
                           </div> <!-- End main content area -->        
                           <div class="maincontent-area">
                            <div class="container"  style="border-top:1px solid #ccc ">
                              <div class="row" style="margin-top: 20px">
                                <div class="col-sm-6"><h2 class="section-title">{{ trans('messages.enterpro') }}</h2></div>
                                <div class="col-sm-6">
                                  <input type="email" placeholder="{{ trans('messages.enteremail') }}" style="width: 70%">
                                  <input type="submit" value="{{ trans('messages.send') }}">
                                </div>
                              </div>
                            </div>
                          </div>
                          <script type="text/javascript">
                           var number = 0;
                           $(window).on("scroll", function() {
                            var scrollHeight = $(document).height();
                            var scrollPosition = $(window).height() + $(window).scrollTop();
                            if ((scrollHeight - scrollPosition) / scrollHeight === 0) {
                             $(".taone").click();
                           }
                           if($(window).scrollTop() == 200 ){

                            if(number == 0){
                              var c = new CountUp("counter",0,<?php echo $chinhanh?>,0, 5.5);
                              c.start();
                              var c1 = new CountUp("counter1",0,<?php echo $sanpham?>,0, 3.8);
                              c1.start();
                              var c2 = new CountUp("counter2",0,<?php echo $khachhang?>,0, 2.4);
                              c2.start();
                              var c3 = new CountUp("counter3",0,<?php echo $donhang?>,0, 2.1);
                              c3.start();
                            }
                            number++;
                          }
                        });
                      </script>
                      <style type="text/css">
                        .owl-controls {
    display: none;
}
                      </style>
                      @endsection
