@extends('layouts.ngoc')
@section('content')

 <div class="maincontent-area">
                        <div class="zigzag-bottom"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="latest-product">
                                      <p class="danhsach-bran">  {{ trans('messages.home') }}    </p>
                                      <h2 class="section-title-bran"> {{ trans('messages.tintuc') }} </h2>

    <div style="height: 100px;"></div>
                                      <div class="row">
                             
                                       <div class="col-md-9">

                                        <div class="row">
                                            

                                            <div class="col-sm-12">
                                                <div class="product-inner">
                                          

                                       @foreach($all as $row)
                                        <?php 
                                              $name_ca = Config::get('app.locale');
                                          //  dd($pro_cat);
                                              if($name_ca == 'vi'){
                                                $title =  $row->title_vi;
                                                $intro =  $row->intro_vi;
                                              }else{
                                                 $title =   $row->title_en;
                                                 $intro =  $row->intro_en;
                                              }       ?>
<div class="row">
  <div class="col-lg-4">
    <a href="#" title=""><img src="{!!url('uploads/news/'.$row->images)!!}" alt="" width="95%" height="60px"> </a>
  </div>
  <div class="col-lg-8">
    <h4><a href="{!!url('/tin-tuc/'.$row->id.'-'.$row->slug)!!}" title="{!!$title!!}">{!!$title!!}</a></h4>
    <p> 
      {!!$intro!!}
    </p>
    <p><strong>{{ trans('messages.luc') }} :</strong>{!!$row->created_at!!} {{ trans('messages.boi') }} : <strong> {!!$row->author!!}</strong></p>
  </div>
</div>
<hr>
@endforeach

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
