@extends('layouts.ngoc')
@section('content')


                                             <div class="maincontent-area">
                            <div class="zigzag-bottom"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="latest-product">
                                          <p class="danhsach-bran">  TRANG CHỦ   >    Tìm kiếm  </p>
                                               <h2 class="section-title-bran"> {!!$timkiem!!} </h2>

                                           
                                          <div class="row">
                                             <div class="col-md-3">
                                                     <div class="single-sidebar">
                                                        
                                                         <h2 class="sidebar-title">CHÍNH SÁCH SHIP HÀNG</h2>
                                                         <hr>
                                                         <li>
                                                             Ship COD 12 quận Hà Nội đồng giá 20.000đ. Xem chi tiết
                                                         </li>
                                                         <li>
                                                             Hỗ trợ 50% - 100% phí ship toàn quốc Xem chi tiết
                                                         </li>

                                                     </div>
                                                    <div class="single-sidebar">
                                                        
                                                         <h2 class="sidebar-title">INBOX FB ABBY</h2>
                                                         <hr>
                                                         <div>
                                                             inbox
                                                         </div>

                                                     </div>
                                                </div>
                                              <div class="col-md-9">
                                                <div class="row hader-sort">
                                                    <div class="col-md-3">
                                                       <select class="form-control" id="sel2" style="margin-top: 12px;">
                                                            <option>Tên sản phẩm</option>
                                                            <option>Giá tiền</option>
                                                            <option>Sản phẩm mới</option>
                                                            <option>Đánh giá : Thấp -> Cao</option>
                                                            <option>Đánh giá : Cao -> Thấp</option>
                                                          </select>
                                                    </div>
                                                       <div class="col-md-2">
                                                      
                                                    </div>
                                                       <div class="col-md-2">
                                                      &nbsp
                                                    </div>
                                                        <div class="col-md-5">
                                                         {!! $data->render() !!}
                                                    </div>
                                                                         

                                                      </div>
                                                      <?php
                                                        if(count($data) == 0){
                                                      ?>
                                                      <div class="row">

                                                        Không có sản phẩm với từ khoá  <strong> {!!$timkiem!!}</strong>
                                                      </div>
                                                      <?php }?>
                                                  <div class="row">
                                                      
                                                      <?php 
                                                      //for ($m=0; $m < 40 ; $m++) { 
                                                      	foreach ($data as $key => $v_pro) {
                                                     // 	dd($v_pro);
                                                      ?>
                                                      <div class="col-md-3 col-sm-6">
                                                        <div class="single-shop-product text-center">
                                                        	 <a href="{!!url('detail/'.$v_pro->id.'-'.$v_pro->slug)!!}" title="Chi tiết">
                                                            <div class="product-upper">
                                                                
                                                                 <img class="img-responsive" src="{!!url('public/uploads/products/'.$v_pro->images)!!}" alt="{!!$v_pro->name!!}">
                                                            </div>
                                                        </a>
                    <form action="" class="no-add-minus" method="post" enctype="multipart/form-data">  
                        <div class="quantity buttons_added">
                            <input type="text" id="" class="input-text qty text" value="1" title="SL">
                        </div>
                        <!-- <button type="submit" class="button alt fix-bt-s">Thêm vào giỏ</button> -->
                        <a data-id="{!!$v_pro->id!!}" href="#" class="add-to-cart">Thêm vào giỏ</a>
                    </form> 
                                                                                <div class="product-carousel-price price-new">
                                                              @if($v_pro->promo1 != 0) 

<del>{!!number_format($v_pro->price)!!}<span>&#8363;</span></del>   <ins>{!!number_format($v_pro->promo1)!!}<span>&#8363;</span></ins> 
                                            @else


  {{ trans('messages.onyfrm') }} <ins> {!!number_format($v_pro->price)!!}</ins><span>₫</span>
                                            @endif

                                                                
                                                            </div>  
                                                            <span>Mã: B{!!$v_pro->id!!}</span>
                                                            <p class="product-title">
                        <a href="{!!url('detail/'.$v_pro->id.'-'.$v_pro->slug)!!}">{!!$v_pro->name!!}</a>
                    </p>

                      
                                                        </div>
                                                    </div>
                        <?php }?>
    
                                                  </div>
                                                  {!! $data->render() !!}
                                              </div>
                                               
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div> <!-- End main content area -->           
                            <script type="text/javascript">
                              $( ".add-to-cart" ).click(function(e) {
                            var abc = $(this).data( "id" );
                          //  alert(abc);
                          alert("Đã thêm sp vào giỏ hàng !");
                            e.preventDefault();
                            $.ajax({ 
                                type: "GET",
                                url: "/gio-hang/addcart/"+abc, 
                                success: function(response){ 
                                        console.log(response); 
                                        $(".product-count").text(response);
                                         $("#cart_v").load(window.location + " .shopping-cart");
                                         // $(".shopping-item").load(window.location + " .shopping-cart");
                                } 
                            });
                                });
                            </script>    
@endsection
