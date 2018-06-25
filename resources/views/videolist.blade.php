@extends('layouts.ngoc')
@section('content')
                    <div class="maincontent-area">
                          <p class="danhsach-bran">  TRANG CHỦ    </p>
                                               <h2 class="section-title-bran"> VIDEO Hướng dẫn</h2>
                        <div class="zigzag-bottom"></div>
                        <div class="container">
                            <div class="row" style="background-color: #302f31 ">
                                <h2 style="font-size: 20px;line-height: 24px;text-transform: uppercase;color: #ffcb08;margin-bottom: 20px;text-align: center;padding-top: 20px;">VIDEO DẠY LÀM BÁNH</h2>

                                 @foreach($all as $row)
                                <div class="col-md-4">
                                    <div class="card-video text-center">
                                        <div class="img-video">
                                            <a href="{!!url('/video-huong-dan/detail/'.$row->id.'-'.$row->slug)!!}">
                                                <img src="{!!url('uploads/news/'.$row->images)!!}" style="width:370px;height:auto;">
                                            </a>
                                        </div>
                                        <div class="wrapper-vd">
                                            <div class="content-video">
                                                <a href="{!!url('/video-huong-dan/detail/'.$row->id.'-'.$row->slug)!!}"><h3>{!!$row->title!!}</h3></a>
                                                <hr>
                                                <p>…</p>
                                            </div>
                                            <div class="footer-video">
                                                <a href="{!!url('/video-huong-dan/detail/'.$row->id.'-'.$row->slug)!!}" class="k2ReadMore2" href="">Xem thêm...</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                               
                             
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