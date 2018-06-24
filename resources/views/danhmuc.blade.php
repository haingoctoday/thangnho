@extends('layouts.ngoc')
@section('content')


                                             <div class="maincontent-area">
                            <div class="zigzag-bottom"></div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="latest-product">
                                          <p class="danhsach-bran">  TRANG CHỦ   >    ĐỒ NẤU ĂN    >   NGUYÊN LIỆU MÓN Á   </p>
                                               <h2 class="section-title-bran"> CHEESE (PHÔ MAI) </h2>

                                           
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
                                                    <div class="col-md-2">
                                                       <select class="form-control" id="sel2" style="margin-top: 12px;">
                                                            <option>1</option>
                                                            <option>2</option>
                                                            <option>3</option>
                                                            <option>4</option>
                                                            <option>5</option>
                                                          </select>
                                                    </div>
                                                       <div class="col-md-2">
                                                        1
                                                    </div>
                                                       <div class="col-md-2">
                                                        1
                                                    </div>
                                                        <div class="col-md-6">
                                                         {!! $pro->render() !!}
                                                    </div>
                                                                         

                                                      </div>
                                                  <div class="row">
                                                      
                                                      <?php 
                                                      //for ($m=0; $m < 40 ; $m++) { 
                                                      	foreach ($pro as $key => $v_pro) {
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
                        <button type="submit" class="button alt fix-bt-s">Thêm vào giỏ</button>
                    </form> 
                                                                                <div class="product-carousel-price price-new">
                                                                <ins>899.00<span>&#8363;</span></ins> 
                                                                <del>999.00<span>&#8363;</span></del>
                                                            </div>  
                                                            <span>Mã: B2327</span>
                                                            <p class="product-title">
                        <a href="">Apple new mac book 2015 March :P</a>
                    </p>

                      
                                                        </div>
                                                    </div>
                        <?php }?>
    
                                                  </div>
                                                  {!! $pro->render() !!}
                                              </div>
                                               
                                          </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div> <!-- End main content area -->               
@endsection
