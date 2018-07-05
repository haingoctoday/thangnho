@extends('layouts.ngoc')
@section('content')





                       
                              

                              <div class="maincontent-area">
                                   <p class="danhsach-bran">  {{ trans('messages.home') }}     </p>
                                               <h2 class="section-title-bran"> {{ trans('messages.muahangnhanh') }}</h2>
                                <div class="zigzag-bottom"></div>
                                <div class="container-fluid">


                                  <?php
                                  foreach ($category as $key => $category_v) {
                                    // print_r( $category_v);
                                    // die();
                                 $pc = DB::table('products')
                             //   ->join('category', 'products.cat_id', '=', 'category.id')
                                  ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
                                  ->where('products.cat_id', '=', $category_v->cat_id)
                                  ->select('products.*','pro_details.cpu','pro_details.ram','pro_details.screen','pro_details.vga','pro_details.storage','pro_details.exten_memmory','pro_details.cam1','pro_details.cam2','pro_details.sim','pro_details.connect','pro_details.pin','pro_details.os','pro_details.note')->get();                                 //  ->paginate(10);
                                  ?>
                                  <div class="row" style="margin-bottom: 20px;">
                                    <div class="col-md-12">
                                      <div class="latest-product">
                                        <h2 class="section-title">{!!$category_v->namevi!!}</h2>
                                        <div class="product-carousel">
                                          <?php
  //  for ($k=0; $k < 10; $k++) { 
                                         // print_r(count($pc));
                                          foreach ($pc as $key => $v_pro) {
                                            ?>

                                            <div class="single-product">
                                              <div class="product-f-image">
                                                <!-- <img src="img/1123.jpg" alt=""> -->
                                                <img src="{!!url('uploads/products/'.$v_pro->images)!!}" alt="">
                                                <div class="product-hover1">
                                                  <a href="{!!url('gio-hang/addcart/'.$v_pro->id)!!}" class="add-to-cart-link-1"><i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i></a>
                                                  <a href="{!!url('detail/'.$v_pro->id.'-'.$v_pro->slug)!!}" class="view-details-link-1"><i class="fa fa-link fa-2x"></i></a>
                                                </div>
                                              </div>

                                              <h2><a href="single-product.html" class="text_product">{!!$v_pro->name!!}</a></h2>

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

      <?php } ?>

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
     
                      </script>
                      <style type="text/css">
                        .owl-controls {
    /*display: none;*/
}

.product-carousel{
padding-top:0 !important; 
}
.latest-product .section-title{
     /*text-align: center;*/
    /* padding-bottom: 0 !important; */
    margin-bottom: 0 !important;
    background-color: #4ca355;
    color: #fff;
    width: max-content;
    margin: auto;
    padding: 5px 15px;
}
                      </style>
                      @endsection
