@extends('layouts.ngoc')
@section('content')
    <div class="maincontent-area">
                        <div class="zigzag-bottom"></div>
                        <div class="container">
                            <div class="row" style="background-color: #302f31;padding: 20px 0">
                                <div class="col-md-8" >
                                    <div class="frame-vd">
                                        <iframe width="100%" height="422" src="https://www.youtube.com/embed/32sYGCOYJUM" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <div class="content-video">
                                        <h3>VIDEO DẠY CÁCH LÀM BÁNH CAPUCCINO CHEESECAKE NGON MÊ MẨN</h3>
                                        <div class="ingredients clearfix">
                                          <h4 style="color: #ffcb08">Nguyên liệu</h4>
                                          <div class="text-white row">

                                             <p class="col-md-6">A.  Phần Dark Sponge</p> 
                                             <?php for ($i=0; $i < 6; $i++) { 
    # code...
                                                ?>

                                                <div class="checkbox col-md-6">
                                                  <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                    40 ml sữa tươi
                                                </label>
                                            </div>
                                            <?php  }?>
                                        </div>
                                        <div class="text-white row">
                                            <p class="col-md-6">B.  Phần capuccino cheese</p> 
                                            <?php for ($i=0; $i < 6; $i++) { 
    # code...
                                                ?>

                                                <div class="checkbox col-md-6">
                                                  <label>
                                                    <input type="checkbox" value="">
                                                    <span class="cr"><i class="cr-icon glyphicon glyphicon-ok"></i></span>
                                                    40 ml sữa tươi
                                                </label>
                                            </div>
                                            <?php  }?>   
                                        </div>
                                    </div>
                                    <div class="huongdan-vd text-white">
                                       <h4 style="color: #ffcb08">Hướng Dẫn</h4>
                                       <p>Sự hòa quyện tinh tế giữa vị béo của cream cheese cùng vị nồng nàn, đậm đà của cà phê capuchino trong công thức làm bánh capuchino cheesecake sẽ làm bạn phải mê mẩn.</p>
                                   </div>

                               </div>
                           </div>
                           <div class="col-md-4">
                            <div class="banner-right">
                                <div class="col-md-12 pdx-0">
                                    <p><a rel="nofollow" href=""><img src="{!!url('img/hoc-vien-lam-banh-vay-von.png')!!}" alt=""></a></p>
                                </div>
                                <div class="col-md-12 pdx-0">
                                    <p><a rel="nofollow" href=""><img src="{!!url('img/hoc-vien-lam-banh-vay-von.png')!!}" alt=""></a></p>
                                </div>
                                <div class="col-md-12 pdx-0">
                                    <p><a rel="nofollow" href=""><img src="{!!url('img/hoc-vien-lam-banh-vay-von.png')!!}" alt=""></a></p>
                                </div>
                            </div>
                            <div class="banner-bot">
                                <p style="text-align: center;">
                                    <a href=""><img src="{!!url('img/icon-khoa-hoc-bep-truong-bep-banh.png')!!}" alt="123" width="360" height="85"></a>
                                </p>
                                <p style="text-align: center;">
                                    <a href=""><img src="{!!url('img/icon-khoa-hoc-bep-truong-bep-banh.png')!!}" alt="123" width="360" height="85"></a>
                                </p>
                                <p style="text-align: center;">
                                    <a href=""><img src="{!!url('img/icon-khoa-hoc-bep-truong-bep-banh.png')!!}" alt="123" width="360" height="85"></a>
                                </p>
                            </div>
                        </div>

           
                    </div>
 <div class="row" style="background-color: #302f31;padding: 20px 0">
               <div class="col-md-9 huongdan-vd text-white">
                                       <h4 style="color: #ffcb08">Video liên quan</h4>
                                      
                                      <div>
                                          <div class="video-carousel">
                                            <?php
                                            for ($k=0; $k < 10; $k++) { 
                                             
                                                ?>

                                                <div class="single-product video-product">
                                                    <div class="product-f-image">
                                                        <img src="{!!url('img/111.jpg')!!}" style="width:370px;height:auto;">
                                                        <div class="product-hover">
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                    <h2><a href="single-product.html" class="text_product">VIDEO DẠY CÁCH LÀM BÁNH PASSION CHEESE MOUSSE CAKE CỰC NGON</a></h2>
                                                    
                                                  
                                                 
                                                  
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