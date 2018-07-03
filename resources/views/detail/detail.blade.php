@extends('layouts.ngoc')
@section('content')
<div class="maincontent-area">
  <div class="zigzag-bottom"></div>
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="latest-product">
          <p class="danhsach-bran"> {{ trans('messages.home') }}   </p>
          <h2 class="section-title-bran"> {!!$data->name!!} </h2>

          <div style="height: 100px;"></div>
          <div class="row">
           <div class="col-md-3">
             <div class="single-sidebar">

               <h2 class="sidebar-title">{{ trans('messages.productsell') }}</h2>
               <hr>
               <table width="100%">  
                 <tr style="border-bottom: 1px solid #ccc">
                  <td width="50%">Cơ sở</td>
                  <td  width="50%">Tình trạng</td>
                </tr>
                <?php for ($mk=0; $mk < 5; $mk++) { 
                                                    # code...
                  ?>
                  <tr style="border-bottom: 1px solid #ccc">
                    <td width="50%">Chùa Bộc</td>
                    <td  width="50%">Hết hàng</td>
                  </tr>
                  <?php }?>
                </table>

              </div>
              <div class="single-sidebar">

               <h2 class="sidebar-title">{{ trans('messages.shppinga') }}</h2>
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
             <div class="single-sidebar">

               <h2 class="sidebar-title">{{ trans('messages.uview') }}</h2>
               <hr style="margin-bottom: 0">
               <ul class="product_list_widget">
                <li>
                  <a href="" title="" class="product-list-image">
                    <img src="//abby.vn/wp-content/uploads/2017/12/bat_tron_de_cao_su_24cm_nghieng.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" style="width: 70px;height: 70px;margin-right: 10px;" alt="">    
                  </a>
                  <p class="product-title">
                    <a href="" title="Bát trộn inox 24cm đế cao su - B0100">Bát trộn inox 24cm đế cao su - B0100</a></p>
                    <div class="price">
                      <strong style="font-size: 1.5rem">
                        <del><span>79,000<span >₫</span></span></del> 
                        <span >69,000<span>₫</span></span>   
                      </strong>
                    </div>
                  </li>
                  <li>
                    <a href="" title="" class="product-list-image">
                      <img src="//abby.vn/wp-content/uploads/2017/12/bat_tron_de_cao_su_24cm_nghieng.jpg" class="attachment-shop_thumbnail size-shop_thumbnail wp-post-image" style="width: 70px;height: 70px;margin-right: 10px;" alt="">    
                    </a>
                    <p class="product-title">
                      <a href="" title="Bát trộn inox 24cm đế cao su - B0100">Bát trộn inox 24cm đế cao su - B0100</a></p>
                      <div class="price">
                        <strong style="font-size: 1.5rem">
                          <del><span>79,000<span >₫</span></span></del> 
                          <span >69,000<span>₫</span></span>   
                        </strong>
                      </div>
                    </li>
                  </ul>

                </div>
              </div>
              <div class="col-md-9">

                <div class="row">
                  <div class="col-sm-4">
                    <div class="product-images">
                      <div class="product-main-img">
                        <img src="{!!url('public/uploads/products/'.$data->images)!!}" alt="">
                      </div>

                      <div class="product-gallery">
                       @foreach($data->detail_img as $row)

                       <img src="{!!url('public/uploads/products/details/'.$row->images_url)!!}" alt="{!!$data->name!!}">

                       @endforeach   
                     </div>
                   </div>
                 </div>

                 <div class="col-sm-8">
                  <div class="product-inner">
                    <div class="product-inner-price">
                      <!-- <ins>700.00<span>&#8363;</span></ins> <del>100.00<span>&#8363;</span></del> -->


                      <p class="price-procu">{!!number_format($data->price)!!}₫</p>
                    </div>  
                    <span class="qty-span">{{ trans('messages.num_ber') }}</span>  
                    <div class="row">
                      <div class="col-md-3">
                        <div class="input-group">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="btn-plus"><span class="glyphicon glyphicon-minus"></span></button>
                          </span>
                          <input type="text" class="form-control" name="qty" id="qty" value="1">
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button" id="btn-minus"><span class="glyphicon glyphicon-plus"></span></button>
                          </span>
                        </div><!-- /input-group -->
                      </div><!-- /.col-lg-6 -->
                      <div class="col-md-9">
                       @if($data->status ==1)
                       <a href="{!!url('gio-hang/addcart/'.$data->id)!!}" type="submit" class="single_add_to_cart_button">{{ trans('messages.addtocart') }}</a>
                       @else
                       <a href="" title="" class="btn btn-large btn-block btn-primary disabled" style="font-size: 20px;"> {{ trans('messages.hethang') }}</a>
                       @endif

                     </div>
                   </div><!-- /.row -->






                   <div class="hotline"><a href="">{{ trans('messages.hotdathang') }}: 1900 779907</a></div>
                   <div class="purchase-note"><strong>{{ trans('messages.note') }}:</strong> Hàng bảo quản lạnh, Abby chỉ ship xe khách các tỉnh phía Bắc.
                   </div>
                   <div class="product_meta">
                    <span class="sku_wrapper">{{ trans('messages.code') }}: <span class="sku">B2327</span></span>
                    <span class="posted_in">{{ trans('messages.cate') }}: <a href="" rel="tag">Cheese (phô mai)</a></span>    
                  </div>
                  <span class="attributes">{{ trans('messages.thongtin') }}:</span>
                  <table class="shop_attributes">
                    <tbody>

                      <tr>
                        <th>{{ trans('messages.detailbq') }}</th>
                        <td>{!!$data->pro_details->cpu!!}
                        </td>
                      </tr>
                      <tr>
                        <th>{{ trans('messages.detailtp') }}</th>
                        <td>{!!$data->pro_details->ram!!}
                        </td>
                      </tr>


                      <tr>
                        <th>{{ trans('messages.detailng') }}</th>
                        <td>{!!$data->pro_details->screen!!}
                        </td>
                      </tr>
                      <tr>
                        <th>{{ trans('messages.detailsd') }}</th>
                        <td>{!!$data->pro_details->vga!!}
                        </td>
                      </tr>
                      <tr>
                        <th>{{ trans('messages.detailtl') }}</th>
                        <td>{!!$data->pro_details->cam1!!}
                        </td>
                      </tr>
                    </tbody>
                  </table>

                </div>
              </div>
            </div>
            <div role="tabpanel" style="padding-top: 20px;">
              <ul class="product-tab" role="tablist">
                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">{{ trans('messages.mota') }}</a></li>
                <li role="presentation" style="display: none;"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Đánh giá</a></li>
              </ul>
              <div class="tab-content">
                <div role="tabpanel" class="tab-pane fade in active" id="home">

                 {!!$data->r_intro!!}
                 {!!$data->review!!}
               </div>
               <div role="tabpanel" class="tab-pane fade" id="profile">
                <h2>Reviews</h2>
                <div class="submit-review">
                  <p><label for="name">Name</label> <input name="name" type="text"></p>
                  <p><label for="email">Email</label> <input name="email" type="email"></p>
                  <div class="rating-chooser">
                    <p>Your rating</p>

                    <div class="rating-wrap-post">
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                      <i class="fa fa-star"></i>
                    </div>
                  </div>
                  <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                  <p><input type="submit" value="Submit"></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>


    </div>
  </div>
</div>
</div> <!-- End main content area -->               
<div style="clear: both;"></div>
<div class="maincontent-area">
  <div class="zigzag-bottom"></div>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="latest-product">
          <h2 class="section-title">{{ trans('messages.noibat') }}</h2>
          <?php 
          $mobile = DB::table('products')
	                //->join('category', 'products.cat_id', '=', 'category.id')
          ->join('pro_details', 'pro_details.pro_id', '=', 'products.id')
          ->where('products.cat_id','=',$data->cat_id)
          ->select('products.*','pro_details.cpu','pro_details.ram','pro_details.screen','pro_details.vga','pro_details.storage','pro_details.exten_memmory','pro_details.cam1','pro_details.cam2','pro_details.sim','pro_details.connect','pro_details.pin','pro_details.os','pro_details.note')
          ->orderBy('products.created_at', 'desc')
          ->paginate(2); 
	            //    print_r( $mobile );

          ?>
          <div class="product-carousel">
           @foreach($mobile as $row)

           <div class="single-product">
            <div class="product-f-image">
             <img class="img-responsive" src="{!!url('public/uploads/products/'.$row->images)!!}" alt="{!!$row->name!!}">
             <div class="product-hover">
              <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
              <a href="single-product.html" class="view-details-link"><i class="fa fa-link"></i> See details</a>
            </div>
          </div>

          <h2><a href="single-product.html" class="text_product">{!!$row->name!!}</a></h2>

          <div class="product-carousel-price">
            Chỉ từ <ins> {!!number_format($row->price)!!}</ins><span>₫</span>
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
       @endforeach        

     </div>
   </div>
 </div>
</div>
</div>
</div> <!-- End main content area -->   

<style type="text/css">
table.shop_attributes td {
  padding: 10px;
}
</style>
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
@endsection