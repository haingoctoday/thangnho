@extends('layouts.ngoc')
@section('content')

 <div class="maincontent-area">
                        <div class="zigzag-bottom"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="latest-product">
                                      <p class="danhsach-bran"> {{ trans('messages.home') }}     </p>
                                      <h2 class="section-title-bran"> {{ trans('messages.order') }} </h2>

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
                <table class="table table-hover">
                  <thead>
                    <tr>
                      
                   
                     <th>{{ trans('messages.hinhanh') }}</th>
                      <th>{{ trans('messages.tensanpham') }}</th>
                      <th>{{ trans('messages.sl') }}</th>
                     
                      <th>{{ trans('messages.gia') }}</th>
                      <th>{{ trans('messages.thanhtien') }}</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach(Cart::content() as $row)
                     <tr>
                      
                      <td><img src="{!!url('uploads/products/'.$row->options->img)!!}" alt="dell" width="80" height="50"></td>
                      <td>{!!$row->name!!}</td>
                      <td class="text-center">                        
                          <span>{!!$row->qty!!}</span>
                      </td>
                      <td>{!!number_format($row->price)!!} <span>&#8363;</span></td>
                      <td>{!!number_format($row->qty * $row->price)!!} <span>&#8363;</span></td>
                    </tr>
                  @endforeach                    
                    <tr>
                       <?php
                     $tongtien =  Cart::subtotal();
                     $tienc = str_replace(",", "", $tongtien);
                     $tongiten = floatval($tienc);
                  
                      ?>
                      <td colspan="2"><strong>{{ trans('messages.tongcong') }} :</strong> </td>
                      <td colspan="2" >{!!Cart::count()!!}</td>
                      <td style="color:#4ca355;">{!!number_format($tongiten)!!} <span>&#8363;</span></td>                      
                    </tr>  
                     <tr>
                      <td colspan="2"> </td>
                      <td colspan="2" >Phí ship</td>
                      <td style="color:#4ca355;"><span class="p_giashipng">0 ₫</span></td>                      
                    </tr>  
                     <tr class="aloalaoa">
                      <td colspan="2"> </td>
                      <td colspan="2" >Phí nhà xe về tỉnh</td>
                      <td style="color:#4ca355;"><span class="p_nodete">3123</span></td>                      
                    </tr>  
                    <tr>
                      <td colspan="2"><strong>{{ trans('messages.tongcong') }} :</strong> </td>
                      <td colspan="2" >{!!Cart::count()!!}</td>
                     
                      <td style="color:#4ca355;"><span class="tongtien_ipamc"> 0 ₫</span> </td>                      
                    </tr>                      
                  </tbody>
                </table>                
              </div>

              <div class="col-xs-12 col-sm-12 col-md-12 no-paddng">
          @if ($_GET['paymethod'] =='cod' )
              <form action="" method="POST" role="form">
                <legend class="text-left">{{ trans('messages.cfginfo') }}</legend>
                {{ csrf_field() }}
                <div class="form-group">
                  <label for="">
                    - {{ trans('messages.cusname') }} : <strong>{{ Auth::user()->name }} </strong> &nbsp;<br>
                    - {{ trans('messages.phone') }}: <strong> {{ Auth::user()->phone }}</strong> &nbsp;<br>
                 


                  </label>
                </div>     
                    <div id="customer_details" class="col2-set">
                                    <div class="col-1">
                                        <div class="woocommerce-billing-fields">
                                            <h3>Billing Details</h3>
                                            <p id="billing_country_field" class="form-row form-row-wide address-field update_totals_on_change validate-required woocommerce-validated">
                                                <label class="" for="billing_country">Tỉnh thành <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <select class="country_to_state country_select" id="billing_country" name="tinhthanh" required>
                                                    <option value=""> Chọn tỉnh thành phố</option>
                                                    <option value="TPHCM">TP Hồ Chí Minh</option>
                                                    <option value="HN">Tp Hà Nội</option>
                                                    <option value="all">Các tỉnh thành phố khác</option>
                                                </select>
                                            </p>
                                            <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                                <label class="" for="billing_address_1">Địa chỉ <abbr title="required" class="required">*</abbr>
                                                </label>
                                                <input type="text" value="" placeholder="Street address" id="billing_address_1" name="diachi" class="input-text " required>
                                            </p>

                                           <p id="billing_address_1_field" class="form-row form-row-wide address-field validate-required">
                                               <label for="">{{ trans('messages.notes') }} *</label>
                                                </label>
                                                <input type="text" value="" placeholder="Street address" id="inputtxtNote" name="txtnote" class="input-text " required>
                                            </p>
                                            <div class="clear"></div>
                                            <input type="hidden" name="phishipping" id="phishipping" >
                                            <input type="hidden" name="tp_shipping" id="tp_shipping">
                                            <input type="hidden" name="gia_shipping" id="gia_shipping">
                                            <input type="hidden" name="mota_them" id="mota_them">
                                        </div>
                                    </div>     
                           </div>
                           <button type="submit" class="btn btn-primary pull-right"> {{ trans('messages.ordercod') }}</button>  
               
              </form>
              @else 
              <form action="{!!url('/payment')!!}" method="Post" accept-charset="utf-8">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                  <label for="">
                    - {{ trans('messages.cusname') }} : <strong>{{ Auth::user()->name }} </strong> &nbsp; <br>
                    - {{ trans('messages.phone') }}: <strong> {{ Auth::user()->phone }}</strong> &nbsp;<br>
                    - {{ trans('messages.diahci') }}: <strong> {{ Auth::user()->address }}</strong><br>
                  </label>
                </div>
                  <br>                
                <!-- <button type="submit" class="btn btn-danger pull-left"> Thanh toán qua Paypal </button> &nbsp; -->
              </form>
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
<style type="text/css">
  .aloalaoa{
    display: none;
  }

</style>
<script type="text/javascript">
  function number_format( number, decimals, dec_point, thousands_sep ) {                          
    var n = number, c = isNaN(decimals = Math.abs(decimals)) ? 2 : decimals;
    var d = dec_point == undefined ? "," : dec_point;
    var t = thousands_sep == undefined ? "." : thousands_sep, s = n < 0 ? "-" : "";
    var i = parseInt(n = Math.abs(+n || 0).toFixed(c)) + "", j = (j = i.length) > 3 ? j % 3 : 0;
                              
    return s + (j ? i.substr(0, j) + t : "") + i.substr(j).replace(/(\d{3})(?=\d)/g, "$1" + t) + (c ? d + Math.abs(n - i).toFixed(c).slice(2) : "");
}
$( "#billing_country" ).change(function() {
  $data_tp = $(this).val();
  $tongtien = <?php echo $tongiten?>;
  if($tongtien > 1000000){
   // phishipping,tp_shipping,gia_shipping
    if($data_tp == 'all'){
      $giatienship = 0;
      $shipmota = 'khách tự trả';
      $tongtien_ai = $tongtien + $giatienship;
      $(".p_giashipng").text(number_format($giatienship, 0, '.', ',') + ' ₫');
      $(".tongtien_ipamc").text(number_format($tongtien_ai, 0, '.', ',')+ ' ₫');
      $(".aloalaoa").css('display','contents');
      $(".p_nodete").text($shipmota);
$("#phishipping").val($giatienship);
$("#tp_shipping").val($data_tp);
$("#gia_shipping").val($tongtien_ai);
$("#mota_them").val($shipmota);
    }else{
      $giatienship = 0;
      $shipmota = '';
       $tongtien_ai = $tongtien + $giatienship;
      $(".p_giashipng").text(number_format($giatienship, 0, '.', ',') + ' ₫');
      $(".tongtien_ipamc").text(number_format($tongtien_ai, 0, '.', ',')+ ' ₫');
       $(".aloalaoa").css('display','none');
       $("#phishipping").val($giatienship);
$("#tp_shipping").val($data_tp);
$("#gia_shipping").val($tongtien_ai);
$("#mota_them").val($shipmota);
    }
  }else{
  
     if($data_tp == 'all'){
      $giatienship = 30000;
      $shipmota = 'khách tự trả';
       $tongtien_ai = $tongtien + $giatienship;
      $(".p_giashipng").text(number_format($giatienship, 0, '.', ',') + ' ₫');
      $(".tongtien_ipamc").text(number_format($tongtien_ai, 0, '.', ',')+ ' ₫');
      $(".aloalaoa").css('display','contents');
      $(".p_nodete").text($shipmota);
      $("#phishipping").val($giatienship);
$("#tp_shipping").val($data_tp);
$("#gia_shipping").val($tongtien_ai);
$("#mota_them").val($shipmota);
    }else{
      $giatienship = 30000;
      $shipmota = '';
       $tongtien_ai = $tongtien + $giatienship;
       $(".p_giashipng").text(number_format($giatienship, 0, '.', ',') + ' ₫');
      $(".tongtien_ipamc").text(number_format($tongtien_ai, 0, '.', ',')+ ' ₫');
       $(".aloalaoa").css('display','none');
       $("#phishipping").val($giatienship);
$("#tp_shipping").val($data_tp);
$("#gia_shipping").val($tongtien_ai);
$("#mota_them").val($shipmota);
    }
  }
});


</script>
           
@endsection
