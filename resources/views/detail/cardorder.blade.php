@extends('layouts.ngoc')
@section('content')

 <div class="maincontent-area">
                        <div class="zigzag-bottom"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="latest-product">
                                      <p class="danhsach-bran">  {{ trans('messages.home') }}    </p>
                                      <h2 class="section-title-bran"> {{ trans('messages.giohang') }} </h2>

    <div style="height: 100px;"></div>
                                      <div class="row">
                             
                                       <div class="col-md-9">

                                        <div class="row">
                                             <div class="panel panel-success">
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
            </div>
            @elseif (Session()->has('flash_level'))
              <div class="alert alert-success">
                  <ul>
                      {!! Session::get('flash_massage') !!} 
                  </ul>
              </div>
          @endif
            <div class="panel-body">
              <div class="table-responsive">

 @if(Cart::count() !=0)
              <form action="{!!url('gio-hang/update')!!}" method="post" accept-charset="utf-8">     
                <table class="table table-hover">
                  <thead>
                    <tr>
                      
                      <th>{{ trans('messages.hinhanh') }}</th>
                      <th>{{ trans('messages.tensanpham') }}</th>
                      <th>{{ trans('messages.sl') }}</th>
                     
                      <th>{{ trans('messages.gia') }}</th>
                      <th>{{ trans('messages.thanhtien') }}</th>
                       <th></th>
                    </tr>
                  </thead>
                  <tbody>
             
                     {{ csrf_field() }}         
                      @foreach(Cart::content() as $row)
                        <tr>
                          <input type="hidden" name="id_n[]" value="{!!$row->rowId!!}">
                          <td><img src="{!!url('public/uploads/products/'.$row->options->img)!!}" alt="dell" width="80" height="50"></td>
                          <td>{!!$row->name!!}</td>
                          <td class="text-center">                        
                            <!-- <span class="fas fa-minus-circle"></span> -->
                            <input type="text" class="qty text-center" value="{!!$row->qty!!}" name="qty_n[]" style="width:70px; font-weight:bold; font-size:15px; color:blue;" > 
                            <!-- <span class="fas fa-plus-circle"></span> -->
                          </td>
                          
                          <td>{!! number_format($row->price) !!} <span>&#8363;</span></td>
                          <td>{!! number_format($row->qty * $row->price) !!} <span>&#8363;</span></td>
                          <td><a href="{!!url('gio-hang/delete/'.$row->rowId)!!}" onclick="return xacnhan('Xóa sản phẩm này ?')" ><span class="fas fa-remove" ></span></a></td>
                        </tr>

                      @endforeach
                      <button type="submit" class="btn btn-danger pull-right">{{ trans('messages.capnhatgiohang') }}</button>   
                   

                    <tr>
                      <td colspan="2"><strong>{{ trans('messages.tongcong') }} :</strong> </td>
                      <td colspan="2">{!!Cart::count()!!}</td>
                      <td  style="color:#4ca355;">{!!Cart::subtotal()!!} <span>&#8363;</span></td>                      
                    </tr>                    
                  </tbody>
                </table>      
                </form>  
     @else
    <p> Không có sản phẩm nào trong giở hàng vui vòng chọn sản phẩm để thanh toán  </p>
      <a href="{!!url('/')!!}" type="button" class="btn btn-large btn-primary pull-left">{{ trans('messages.tieptucmuahang') }}</a>
    
     @endif                     
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 no-paddng">
              @if(Cart::count() !=0)
                @if (Auth::guest())
                  <div class="input-group">
                      <select name="paymethod" id="inputPaymethod" class="form-control" required="required">
                        <option value="cod">COD (thanh toán khi nhận hàng)</option>
                        <!-- <option value="paypal">Paypal (Thanh toán qua Paypal)</option>                       -->
                      </select>
                    </div>
                  <a class="btn btn-large btn-warning pull-right" href="{!!url('/me')!!}" >{{ trans('messages.tienhanhthanhtoan') }}</a>
                @else
                  <form action="{!!url('/dat-hang')!!}" method="get" accept-charset="utf-8">                    
                    <div class="input-group">
                    <label for="paymethod">{{ trans('messages.chonpthuc') }}</label>
                      <select name="paymethod" id="inputPaymethod" class="form-control" required="required">
                        <!-- <option value="">Hãy chọn phương thức thanh toán</option>  -->
                        <!-- <option value="paypal">Thanh toán trực tuyến ( Paypal )</option>  -->
                        <option value="cod"> Thanh toán khi nhận hàng ( COD )</option>
                      </select>
                    </div>
                    <hr>
                      <button type="submit" class="btn btn-danger pull-right">{{ trans('messages.tienhanhthanhtoan') }}</button>
                      <a href="{!!url('/')!!}" type="button" class="btn btn-large btn-primary pull-left">{{ trans('messages.tieptucmuahang') }}</a>
                  </form>
                @endif
              @endif
              </div>
              <hr>
            </div>
          </div>        



                            </div>
                  
                        </div>
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
                                              <?php 
                                               foreach ($data_chinhsach as $key => $value) {
                                              
                                                ?>
                                               <li>
                                                  <?php echo $value->name ?>. Xem chi tiết
                                               </li>
                                               <?php } ?>

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
           
@endsection
