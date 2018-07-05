@extends('layouts.ngoc')
@section('content')
<div class="maincontent-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="latest-product">
                                      <p class="danhsach-bran">  {{ trans('messages.home') }}    </p>
                                      <h2 class="section-title-bran">{{ trans('messages.myaccout') }}</h2>

                                      <div style="height: 100px;"></div>
                                      <div class="row">
<div class="col-md-9">


                                                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
              <div class="list-group">
                <div class="list-group-item active text-center me-page-left">
                  <p>{{ trans('messages.bangchinh') }}</p>
                </div>
                <div  class="list-group-item text-center me-page-left">
                  <p>  {{ trans('messages.a1dh') }}</p>
                </div>
                <div class="list-group-item text-center me-page-left">
                  <p>  {{ trans('messages.diahci') }}</p>
                </div>
                <div class="list-group-item text-center me-page-left">
                  <p>{{ trans('messages.thongitncanhan') }}</p>
                </div>
                <div class="list-group-item text-center me-page-left">
                 <a  href="{{ url('/logout') }}"><p>{{ trans('messages.dangxuat') }}</p></a> 
                 
                </div>
              </div>
            </div>
            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                <!-- flight section -->
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
                <div class="bhoechie-tab-content active">
                  <div class="row">
                       <div class="div_content-me">
                                                 
                              <p>Hello <strong>{{ Auth::user()->name }}</strong> (not <strong>{{ Auth::user()->name }}</strong>?  <a  href="{{ url('/logout') }}">Log out</a>)</p>

                              From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.
                      </div>

                  </div>
                </div>
                <!-- train section -->
                <div class="bhoechie-tab-content ">
                    <div class="row">
                       <div class="div_content-me">
                          <div class="table-responsive">
                            <table class="table table-hover">
                              <thead>
                                <tr>                    
                                           
                                
                                
                                  <th>{{ trans('messages.phone') }}</th>
                                  <th>Email</th>                    
                                  <th> {{ trans('messages.ngaydat') }}</th>
                                  <th> {{ trans('messages.thanhtien') }}</th>
                                  <th> {{ trans('messages.trangthai') }}</th>
                               
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($data_order as $row)
                                  <tr>
                                   
                                    <td>{!!$row->user->phone!!}</td>
                                    <td>{!!$row->user->email!!}</td>                      
                                    <td>{!!$row->created_at!!}</td>
                                    <td>{!!$row->total!!} Vnd</td>
                                    <td>
                                      @if($row->status ==0)
                                        <span style="color:#d35400;">{{ trans('messages.chuaxn') }}</span>
                                      @else
                                        <span style="color:#27ae60;">{{ trans('messages.daxn') }}</span>
                                      @endif
                                    </td>
                                  
                                  </tr>
                                @endforeach               
                              </tbody>
                            </table>
                            {!!$data_order->render()!!}
                          </div>                 
                           
                      </div>

                  </div>
                </div>
    
                <!-- hotel search -->
                <div class="bhoechie-tab-content">
                    <div class="row">
                       <div class="div_content-me">
                                                 
                            {{ Auth::user()->address }}
                      </div>

                  </div>
                </div>
                <div class="bhoechie-tab-content">
                     <div class="row">
                       <div class="div_content-me">
                                                 
                             <form class="form-horizontal" role="form" method="POST" action="{{ url('/edituser') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">{{ trans('messages.cusname') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name"  value="{{ $old->name }}">

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $old->email }}">

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                       

                        <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                            <label for="phone" class="col-md-4 control-label">{{ trans('messages.phone') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control" name="phone"  value="{{ $old->phone }}">

                                @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>
                        <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                            <label for="address" class="col-md-4 control-label">{{ trans('messages.diahci') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control" name="address"  value="{{ $old->address }}">

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-user"></i> {{ trans('messages.capnhat') }} 
                                </button>
                            </div>
                        </div>
                    </form>
                      </div>

                  </div>
                </div>
                <div class="bhoechie-tab-content">
                    <div class="row">
                       <div class="div_content-me">
                                                 
                              <p>Hello <strong>{{ Auth::user()->name }}</strong> (not <strong>{{ Auth::user()->name }}</strong>?  <a  href="{{ url('/logout') }}">Log out</a>)</p>

                              From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.
                      </div>

                  </div>
                </div>
            </div>
        </div>



                                       <!-- <div class="col-md-3">
                                         <div class="single-sidebar">

                                           <h2 class="sidebar-title">TÀI KHOẢN CỦA TÔI</h2>
                                           <hr>
                                         
                                            <?php //for ($mk=0; $mk < 5; $mk++) { 
                                                    # code...
                                                ?>
                                               
                                             <div class="me-page-left">
                                                 <p>BẢNG CHÍNH</p>
                                             </div>   
                                              <div class="me-page-left">
                                                 <p>ĐƠN HÀNG</p>
                                             </div>   
                                              <div class="me-page-left">
                                                 <p>ĐỊA CHỈ</p>
                                             </div>   
                                              <div class="me-page-left">
                                                 <p>THÔNG TIN CÁ NHÂN</p>
                                             </div>   
                                              <div class="me-page-left">
                                                 <a  href="{{ url('/logout') }}"><p>ĐĂNG XUẤT</p></a>
                                             </div>   
                                                <?php //}?>
                                         

                                        </div>


                                    </div>
                                    <div class="col-md-6">

                                        <div class="row">
                                            
                                            <div class="div_content-me">
                                                 
                                                    <p>Hello <strong>{{ Auth::user()->name }}</strong> (not <strong>{{ Auth::user()->name }}</strong>?  <a  href="{{ url('/logout') }}">Log out</a>)</p>

                                                    From your account dashboard you can view your recent orders, manage your shipping and billing addresses and edit your password and account details.
                                            </div>

                                        </div>

                                    </div> -->

                                        <div class="col-md-3">
                                       
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
                                  
                                       </div>
                                </div>

</div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End main content area -->  
<script type="text/javascript">
  $(document).ready(function() {
    $("div.bhoechie-tab-menu>div.list-group>div").click(function(e) {
        e.preventDefault();
        $(this).siblings('div.active').removeClass("active");
        $(this).addClass("active");
        var index = $(this).index();
        $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
        $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
    });
});
</script>
<style type="text/css">
  div.bhoechie-tab-container{
  z-index: 10;
  background-color: #ffffff;
  padding: 0 !important;
  border-radius: 4px;
  -moz-border-radius: 4px;
  border:1px solid #ddd;
  margin-top: 20px;
  margin-left: 50px;
  -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  box-shadow: 0 6px 12px rgba(0,0,0,.175);
  -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
  background-clip: padding-box;
  opacity: 0.97;
  filter: alpha(opacity=97);
}
.list-group-item:first-child{
  border-radius: 0;
}
div.bhoechie-tab-menu{
  padding-right: 0;
  padding-left: 0;
  padding-bottom: 0;
}
div.bhoechie-tab-menu div.list-group{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>div{
  margin-bottom: 0;
}
div.bhoechie-tab-menu div.list-group>div .glyphicon,
div.bhoechie-tab-menu div.list-group>div .fa {
  color: #5A55A3;
}
div.bhoechie-tab-menu div.list-group>div:first-child{
  border-top-right-radius: 0;
  -moz-border-top-right-radius: 0;
}
div.bhoechie-tab-menu div.list-group>div:last-child{
  border-bottom-right-radius: 0;
  -moz-border-bottom-right-radius: 0;
}


div.bhoechie-tab-content{
  background-color: #ffffff;
  /* border: 1px solid #eeeeee; */
  padding-left: 20px;
  padding-top: 10px;
}

div.bhoechie-tab div.bhoechie-tab-content:not(.active){
  display: none;
}
.list-group-item{
  border: none;
      border-bottom: 1px solid #ccc;
}
.me-page-left p {text-transform: uppercase;cursor: pointer;}
</style>
@endsection
