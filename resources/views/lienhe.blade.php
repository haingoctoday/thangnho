@extends('layouts.ngoc')
@section('content')


 <div class="maincontent-area">
                        <div class="zigzag-bottom"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="latest-product">
                                      <p class="danhsach-bran">  {{ trans('messages.home') }} > {{ trans('messages.tintuc') }}   </p>
    <div style="height: 100px;"></div>
                                      <div class="row">
                             
                                       <div class="col-md-9">

                                        <div class="row">
                                            

                                            <div class="col-sm-12">
                                                <div class="product-inner">
                                           <img src="#" alt="" height="200" width="100%">

                                     <h3 class="title-h3" style="padding-bottom: 7px;border-bottom: 1px solid #ccc;"><a href="#" title="">LIÊN HỆ</a></h3>
                                      <p style="font-size: 1.6rem;font-weight: 600;">Thông tin liên hệ</p>
                                      <p>Quý khách vui lòng điền thông tin theo mẫu form dưới đây để liên hệ với chúng tôi:</p>
                                      <div class="row" style="padding-top: 15px;">
                                         <form action="{!!url('/lien-he')!!}" method="Post" accept-charset="utf-8">
                                           {{ csrf_field() }}
                                        <div class="col-md-6">
                                             
                                                <div class="form-group">
                                                  <label for="email">Họ và tên *</label>
                                                  <input type="text" class="form-control" id="email" name="name">
                                                </div>
                                                  <div class="form-group">
                                                  <label for="pwd">Địa chỉ *</label>
                                                  <input type="text" class="form-control" id="pwd" name="diachi">
                                                </div>
                                                <div class="form-group">
                                                  <label for="email">Email *</label>
                                                  <input type="email" class="form-control" id="email" name="mail">
                                                </div>
                                                  <div class="form-group">
                                                  <label for="pwd">Số điện thoại *</label>
                                                  <input type="text" class="form-control" id="pwd" name="sdt">
                                                </div>                                                
                                        </div>
                                        <div class="col-md-6">
                                                 <div class="form-group">
                                                  <label for="email">Tiêu đề *</label>
                                                  <input type="text" class="form-control" id="email" name="tieude">
                                                </div>
                                                  <div class="form-group">
                                                  <label for="rq">Yêu cầu *</label>
                                                  <textarea class="form-control" id="rq" rows="3" style="height: auto;" name="noidung"></textarea>
                                                </div> 
                                                 <button type="submit" class="btn btn-sp nen-cam">Gửi đi</button>
                                                 <button type="resert" class="btn btn-sp">Soạn lại</button>                                        
                                        </div>
                                      </form>
                                      </div>

                                    </div>
                                </div>
                            </div>

                        </div>
                                     <div class="col-md-3">
                                         <div class="single-sidebar">
                                            
                                               <h2 class="sidebar-title">{{ trans('messages.productsell') }} </h2>
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
                <div class="col-sm-6"><h2 class="section-title">NHẬN TIN KHUYẾN MÃI</h2></div>
                <div class="col-sm-6">
                   <form  action="{!!url('/nhanqc')!!}" method="Post" accept-charset="utf-8">
  {{ csrf_field() }}
                <input type="email" name="email"  placeholder="{{ trans('messages.enteremail') }}" style="width: 70%">
                <input type="submit" value="{{ trans('messages.send') }}">
                </form>
              </div>
          </div>
      </div>
  </div>  



@endsection