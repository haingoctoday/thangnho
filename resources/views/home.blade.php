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
                                              <div class="row" style="padding-top: 2rem;">
                                                <div class="col-lg-3 col-md-6 col-xs-6 text-center">
                                                  <div class="service-box mt-5 mx-auto">
                                                    <i class="fa fa-4x fa-globe-asia text-primary mb-3 maucam"></i>
                                                    <h3 class="mb-2">{{ trans('messages.a1cn') }}</h3>
                                                    <div id="counter" style="font-size: 16pt;padding-top: 5px;"><?php echo number_format($chinhanh,0)?></div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-xs-6 text-center">
                                                  <div class="service-box mt-5 mx-auto">
                                                    <i class="fa fa-4x fa-shopping-cart text-primary mb-3 maucam"></i>
                                                    <h3 class="mb-2">{{ trans('messages.a1sp') }}</h3>
                                                    <div id="counter1" style="font-size: 16pt;padding-top: 5px;"><?php echo number_format($sanpham,0)?></div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-xs-6 text-center">
                                                  <div class="service-box mt-5 mx-auto">
                                                    <i class="fa fa-4x fa-user-circle text-primary mb-3 maucam"></i>
                                                    <h3 class="mb-2">{{ trans('messages.a1kh') }}</h3>
                                                    <div id="counter2" style="font-size: 16pt;padding-top: 5px;"><?php echo number_format($khachhang,0)?></div>
                                                  </div>
                                                </div>
                                                <div class="col-lg-3 col-md-6 col-xs-6 text-center">
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
                                                          <img src="img/c1.jpg" title="nguyên liệu pha chế trà sữa chuyên nghiệp">
                                                          <div class="c-dic-on c1-dic-on"> GELATIN, BỘT THẠCH</div>
                                                          <!-- <div class="div_chu_thich">nguyên liệu pha chế trà sữa chuyên nghiệp</div> -->
                                                        </div>
                                                      </div>
                                                      <div class="col-md-4">
                                                       <div class="div-ca-c-on">
                                                        <img src="img/c2.jpg" title="nguyên liệu pha chế trà sữa chuyên nghiệp">
                                                        <div class="c-dic-on c2-dic-on"> TRÀ SỮA</div>
                                                         <!-- <div class="div_chu_thich">nguyên liệu pha chế trà sữa chuyên nghiệp</div> -->
                                                      </div>
                                                    </div>
                                                    <div class="col-md-4">
                                                     <div class="div-ca-c-on">

                                                      <img src="img/c3.jpg" title="nguyên liệu pha chế trà sữa chuyên nghiệp">
                                                      <div class="c-dic-on c3-dic-on"> TOPPING & WHIPPING</div>
                                                       <!-- <div class="div_chu_thich">nguyên liệu pha chế trà sữa chuyên nghiệp</div> -->
                                                    </div>
                                                  </div>
                                                </div>
                                                <div class="row" style="margin-top: 3%">
                                                  <div class="col-md-8">
                                                   <div class="div-ca-c-on">
                                                     <img src="img/c4.jpg" title="nguyên liệu pha chế trà sữa chuyên nghiệp">
                                                     <div class="c-dic-on c4-dic-on"> PHÔ MAI (LẮC, MOZZARELLA, CREAM CHEESE)</div>
                                                      <!-- <div class="div_chu_thich">nguyên liệu pha chế trà sữa chuyên nghiệp</div> -->
                                                   </div>
                                                 </div>
                                                 <div class="col-md-4">
                                                  <div class="div-ca-c-on">
                                                   <img src="img/c5.jpg" title="nguyên liệu pha chế trà sữa chuyên nghiệp">
                                                   <div class="c-dic-on c5-dic-on"> CÂN ĐIỆN TỬ</div>
                                                    <!-- <div class="div_chu_thich">nguyên liệu pha chế trà sữa chuyên nghiệp</div> -->
                                                 </div>
                                               </div>

                                             </div>
                                           </div>
                                           <div class="col-md-3">
                                            <div class="div-ca-c-on">
                                              <img src="img/c6.jpg" title="nguyên liệu pha chế trà sữa chuyên nghiệp">
                                              <div class="c-dic-on c6-dic-on"> ĐỒ ĐÁNH TRỨNG</div>
                                               <!-- <div class="div_chu_thich">nguyên liệu pha chế trà sữa chuyên nghiệp</div> -->
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
                                               @if($v_pro->hethang == 0)
                                                <div class="on_hethang_div">
                                                  <div class="hethang_div">
                                                  Hết hàng
                                                </div>
                                                </div>
                                                @endif
 @if($v_pro->promo1 != 0) 
                                                  <div class="sale-wrapper">
                                                      <div class="onsale">Sale</div>
                                                  </div>
                                       @endif
                                                <?php //{!!url('gio-hang/addcart/'.$v_pro->id)!!}?>
                                           
                                                 <!-- <img src="{!!url('uploads/products/'.$v_pro->images)!!}" class="image-hv" alt=""> -->
                                                 <!-- <img src="{!!url('public/img/123333.jpg')!!}" class="image-hv hover" alt=""> -->
                                            <div class="product-content-image">
                                               <div class="image-swap">
                                                  <img src="{!!url('public/img/123333.jpg')!!}">      
                                                </div>
                                               <img src="{!!url('uploads/products/'.$v_pro->images)!!}" alt="">

                                               <!-- <img src="{!!url('public/img/c5.jpg')!!}" class="image-hv hover" alt=""> -->
                                              
                                            </div> 
                                         
                                               <div class="product-hover1">

                                                  <a href="#" class="add-to-cart-link-1" data-id="{!!$v_pro->id!!}">
        <img src="{!!url('public/img/cart.png')!!}" alt="cc" class="img_hover_div">
                                                    <!-- <i class="fas fa-shopping-cart" aria-hidden="true"></i> -->
                                                  </a>
                                                  <a href="{!!url('detail/'.$v_pro->id.'-'.$v_pro->slug)!!}" class="view-details-link-1"><i class="material-icons">search</i></a>

                                                </div>
                                              </div>

                                              <h2><a href="{!!url('detail/'.$v_pro->id.'-'.$v_pro->slug)!!}" class="text_product">{!!$v_pro->name!!}</a></h2>

                                              <div class="product-carousel-price">
                                                  @if($v_pro->promo1 != 0) 

<del>{!!number_format($v_pro->price)!!}<span>&#8363;</span></del>   <ins>{!!number_format($v_pro->promo1)!!}<span>&#8363;</span></ins> 
                                            @else


  {{ trans('messages.onyfrm') }} <ins> {!!number_format($v_pro->price)!!}</ins><span>₫</span>
                                            @endif

                                              
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
                              <div class="container">
                                <div class="row">
                                  <!-- <div class="col-md-12"> -->
                                    <div class="latest-product">
                                      <h2 class="section-title">{{ trans('messages.hometopseo') }}</h2>
                                      <!-- <div class="product-carousel"> -->
                                        <?php
   // for ($k=0; $k < 10; $k++) {        
                                          //$random = shuffle($pc); 
                                        foreach ($pc_limit6 as $key => $v_pro) {

                                          ?>

                                          <div class="col-md-3 col-sm-6">
                                            <div class="single-shop-product text-center hv-item-hot" id="fix-item-hot">
                                            <a href="{!!url('detail/'.$v_pro->id.'-'.$v_pro->slug)!!}" title="Chi tiết">
                                              <div class="product-upper " style="position: relative;">
                                                @if($v_pro->hethang == 0)
                                                  <div class="on_hethang_div">
                                                  <div class="hethang_div">
                                                  Hết hàng
                                                </div>
                                                </div>
                                                @endif
                                                 @if($v_pro->promo1 != 0) 
                                                  <div class="sale-wrapper">
                                                      <span class="onsale">Sale</span>
                                                  </div>
                                                  @endif
                                            <div class="product-content-image">
                                               <div class="image-swap">
                                                  <img src="{!!url('public/img/c5.jpg')!!}" class="attachment-shop_catalog size-shop_catalog">      
                                                </div>
                                               <img class="img-responsive" src="{!!url('public/uploads/products/'.$v_pro->images)!!}" class="image-hv" alt="{!!$v_pro->name!!}">

                                               <!-- <img src="{!!url('public/img/c5.jpg')!!}" class="image-hv hover" alt=""> -->
                                              
                                            </div> 


                                               
                                                 <div class="overlay">
                                                    <a href="{!!url('detail/'.$v_pro->id.'-'.$v_pro->slug)!!}" class="view-details-link" id="fix-item-hot-a">Xem nhanh</a>
                                                  </div> 
                                                 
                                             </div>
                                           </a>
                                           <form action="" class="no-add-minus" method="post" enctype="multipart/form-data">
                                           <div class="item-hot">
                                            <div class="quantity buttons_added">
                                              <input type="text" id="" class="input-text qty text" value="1" title="SL">
                                            </div>
                                             @if($v_pro->hethang == 1)
                                            <a data-id="{!!$v_pro->id!!}" href="#" class="hc-item-hot">{{ trans('messages.addtocart') }}</a>
                                            @else
                                          <a href="{!!url('detail/'.$v_pro->id.'-'.$v_pro->slug)!!}" class=" hc-item-hot">Đọc tiếp</a>
                                            @endif
                                            </div>  
                                          </form> 
                                          <div class="product-carousel-price price-new">
                                            @if($v_pro->promo1 != 0) 

<del>{!!number_format($v_pro->price)!!}<span>&#8363;</span></del>   <ins>{!!number_format($v_pro->promo1)!!}<span>&#8363;</span></ins> 
                                            @else

 <ins>{!!number_format($v_pro->price)!!}<span>&#8363;</span></ins> 
                                            @endif

                                           

                                          </div>  
                                          <span>{{ trans('messages.code') }}: B{!!$v_pro->id!!}</span>
                                          <p class="product-title">
                                            <a href="{!!url('detail/'.$v_pro->id.'-'.$v_pro->slug)!!}">{!!$v_pro->name!!}</a>
                                          </p>


                                        </div>
                                      </div>
                                       <?php }?>
                                     <!-- </div> -->
                                   </div>
                                 <!-- </div> -->
                               </div>
                             </div>
                           </div> <!-- End main content area -->        
                           <div class="maincontent-area">
                            <div class="container"  style="border-top:1px solid #ccc ">
                              <div class="row" style="margin-top: 20px">
                                <div class="col-sm-6"><h2 class="section-title">{{ trans('messages.enterpro') }}</h2></div>
                                <div class="col-sm-6">
                                  <form  action="{!!url('/nhanqc')!!}" method="Post" accept-charset="utf-8">
  {{ csrf_field() }}
                                  <input type="email" name="email" placeholder="{{ trans('messages.enteremail') }}" style="width: 70%">
                                  <input type="submit" value="{{ trans('messages.send') }}">
                                </form>
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
                              var c = new CountUp("counter",0,<?php echo $chinhanh?>,0, 20);
                              c.start();
                              var c1 = new CountUp("counter1",0,<?php echo $sanpham?>,0, 20);
                              c1.start();
                              var c2 = new CountUp("counter2",0,<?php echo $khachhang?>,0, 20);
                              c2.start();
                              var c3 = new CountUp("counter3",0,<?php echo $donhang?>,0, 20);
                              c3.start();
                            }
                            number++;
                          }
                        });


                           


                           $( ".add-to-cart-link-1" ).click(function(e) {
                            var abc = $(this).data( "id" );
                          //  alert(abc);
                           alert("Đã thêm sp vào giỏ hàng !");
                            e.preventDefault();
                            $.ajax({ 
                                type: "GET",
                                url: "gio-hang/addcart/"+abc, 
                                success: function(response){ 
                                       // console.log(response); 
                                        $(".product-count").text(response);
                                         $("#cart_v").load(window.location + " .shopping-cart");
                                         // $(".shopping-item").load(window.location + " .shopping-cart");
                                } 
                            });
                                });

                                 $( ".hc-item-hot" ).click(function(e) {
                            var abc = $(this).data( "id" );
                          //  alert(abc);
                           alert("Đã thêm sp vào giỏ hàng !");
                            e.preventDefault();
                            $.ajax({ 
                                type: "GET",
                                url: "gio-hang/addcart/"+abc, 
                                success: function(response){ 
                                     //   console.log(response); 
                                        $(".product-count").text(response);
                                         $("#cart_v").load(window.location + " .shopping-cart");
                                         // $(".shopping-item").load(window.location + " .shopping-cart");
                                } 
                            });
                                });
                      </script>
                      <style type="text/css">
                        .owl-controls {
    /*display: none;*/
}
.div_chu_thich {
    display: none;
    cursor: pointer;
    text-align: center;
    line-height: 50px;
    position: absolute;
    bottom: 50px;
    color: #fff;
    background: #96c0496e;
    width:92%;
    margin:auto;
    left:10px
}

.div-ca-c-on:hover img{
      transform: scale(1.05);
    transition: transform .3s;
    border-radius: 10px;
}
.div-ca-c-on:hover .div_chu_thich {
  display: block;
}
.div-ca-c-on:hover .c-dic-on{
      transform: scale(1.05);
    transition: transform .3s;
    border-radius: 10px;
    font-size:16px
}
                      </style>
                      @endsection
