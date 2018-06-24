@extends('layouts.ngoc')
@section('content')

                                
                                <div class="slider-area">
                                    <!-- Slider -->
                                    <div class="block-slider block-slider4">
                                        <ul class="" id="bxslider-home4">
                                            <li>
                                                <img src="img/s1.jpg" alt="Slide">
                                                
                                            </li>
                                            <li>
                                                <img src="img/s2.jpg" alt="Slide">
                                                
                                            </li>
                                            <li>
                                                <img src="img/s3.jpg" alt="Slide">
                                                
                                            </li>
                                            
                                        </ul>
                                    </div>
                                    <!-- ./Slider -->
                                </div> <!-- End slider area -->
                                             <div class="maincontent-area">
                            <div class="zigzag-bottom"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="latest-product">
                                            <h2 class="section-title">ABBY – ĐỒ LÀM BÁNH, NẤU ĂN VÀ PHA CHẾ</h2>
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
                                                            <h2 class="section-title">KHO HÀNG GIÁ SỈ</h2>
                                                            <div class="product-carousel">
    <?php
    for ($k=0; $k < 10; $k++) { 
   
    ?>

                                                                <div class="single-product">
                                                                    <div class="product-f-image">
                                                                        <img src="img/1233.jpg" alt="">
                                                                        <div class="product-hover">
                                                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                            <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <h2><a href="single-product.html" class="text_product">Phô mai mozzarella bào túi 2kg</a></h2>
                                                                    
                                                                    <div class="product-carousel-price">
                                                                        Chỉ từ <ins> 160000</ins><span>₫</span>
                                                                        <!-- <ins>$700.00</ins> <del>$100.00</del> -->
                                                                    </div>
                                                                    <table class="table-product">
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
                                                                       Mã: B1818
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
                                                            <h2 class="section-title">Nổi bật</h2>
                                                            <div class="product-carousel">
    <?php
    for ($k=0; $k < 10; $k++) { 
   
    ?>

                                                                <div class="single-product">
                                                                    <div class="product-f-image">
                                                                        <img src="img/product-1.jpg" alt="">
                                                                        <div class="product-hover">
                                                                            <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                                                            <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                                                        </div>
                                                                    </div>
                                                                    
                                                                    <h2><a href="single-product.html" class="text_product">Phô mai mozzarella bào túi 2kg</a></h2>
                                                                    
                                                                    <div class="product-carousel-price">
                                                                        Chỉ từ <ins> 160000</ins><span>₫</span>
                                                                        <!-- <ins>$700.00</ins> <del>$100.00</del> -->
                                                                    </div>
                                                                    <table class="table-product">
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
                                                                       Mã: B1818
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
                                                <div class="col-sm-6"><h2 class="section-title">NHẬN TIN KHUYẾN MÃI</h2></div>
                                                <div class="col-sm-6">
                                                  <input type="email" placeholder="Email của bạn" style="width: 70%">
                                                                                <input type="submit" value="Gửi">
                                                                            </div>
                                                                            </div>
                                            </div>
                                           </div>
@endsection
