@extends('layouts.ngoc')
@section('content')
    <div class="maincontent-area">1
                        <div class="zigzag-bottom"></div>
                          <p class="danhsach-bran">  TRANG CHỦ  > Video hướng dẫn  </p>
                                               <h2 class="section-title-bran"> {!!$new->title!!}</h2>
                        <div class="container">
                            <div class="row" style="background-color: #302f31;padding: 20px 0">
                                <div class="col-md-8" >
                                    <div class="frame-vd">
                                        <iframe width="100%" height="422" src="{!!$new->source!!}" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
                                    </div>
                                    <div class="content-video">
                                        <h3>{!!$new->title!!} </h3>
                                        <div class="ingredients clearfix">
                                          <h4 style="color: #ffcb08">Nguyên liệu</h4>
                                          <div style="padding: 10px;">
                                        {!!$new->intro!!}
                                        </div>
                                    </div>
                                    <div class="huongdan-vd text-white">
                                       <h4 style="color: #ffcb08">Hướng Dẫn</h4>
                                       {!!$new->full!!}
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
                                       <?php 
                    $data = DB::table('news')
                    ->where('cat_id',34)
                    ->orderBy('created_at', 'desc')
                    ->paginate(3); 
                  ?>
                                      <div>
                                          <div class="video-carousel">
                                             @foreach($data as $row)

                                                <div class="single-product video-product">
                                                    <div class="product-f-image">
                                                        <img src="{!!url('uploads/news/'.$row->images)!!}" style="width:370px;height:auto;">
                                                        <div class="product-hover">
                                                           
                                                        </div>
                                                    </div>
                                                    
                                                    <h2><a href="{!!url('/video-huong-dan/detail/'.$row->id.'-'.$row->slug)!!}" class="text_product">{!!$row->title!!}</a></h2>
                                                    
                                                  
                                                 
                                                  
                                             </div>
                                             @endforeach      
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