@extends('layouts.ngoc')
@section('content')
<div class="maincontent-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="latest-product">
                                      <p class="danhsach-bran">  {{ trans('messages.home') }}     </p>
                                      <h2 class="section-title-bran"> {{ trans('messages.myaccout') }}  </h2>

                                      <div style="height: 100px;"></div>
                                      <div class="row">
                                      <div class="col-md-6">
                                         <div class="login-sp">
                                           <p class="text-head">{{ trans('messages.dangnhap') }}</p>
                                          <form class="form-horizontal" role="form" method="POST" id="login-form" action="{{ url('/login') }}">
                                              {{ csrf_field() }}
                                                <div class="form-group">
                                                  <label for="email">Email *</label>
                                                  <input type="email" class="form-control" id="email" name="email">
                                                </div>
                                                  <div class="form-group">
                                                  <label for="pwd">{{ trans('messages.matkhau') }} *</label>
                                                  <input type="password" class="form-control" id="pwd" name="password">
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox" name="remember">{{ trans('messages.ghimatkhau') }}</label>
                                                  <a href="{{ url('/password/reset') }}" class="maucam" style="float: right;">{{ trans('messages.quenmatkhau') }}</a>
                                                </div>
                                                <button type="submit" class="btn btn-sp">{{ trans('messages.dangnhap') }}</button>
                                           </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="reg-sp">
                                        <p class="text-head">{{ trans('messages.dangky') }}</p>
                                       <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                        {{ csrf_field() }}
                                                <div class="form-group">
                                                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                                  <label for="email">{{ trans('messages.cusname') }} *</label>
                                                  <input type="text" name="name" class="form-control" id="email">
                                                </div>   @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif</div> 
                                                <div class="form-group">
                                                   <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                                                  <label for="sdt">{{ trans('messages.phone') }} *</label>
                                                  <input type="text" name="phone"  class="form-control" id="email">
                                                </div>     @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif  </div> 
                                                 <div class="form-group">
                                                   <div class="form-group{{ $errors->has('address') ? ' has-error' : '' }}">
                                                  <label for="sdt">{{ trans('messages.diahci') }} *</label>
                                                  <input type="text" name="address"  class="form-control" id="email">
                                                </div>     @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif  </div>                                                                   
                                                <div class="form-group">
                                                   <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                                  <label for="email">Email *</label>
                                                  <input type="email" name="email" class="form-control" id="email">
                                                </div>  @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif</div> 
                                                  <div class="form-group">
                                                      <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                                  <label for="pwd">{{ trans('messages.matkhau') }} *</label>
                                                  <input type="password" class="form-control" id="pwd" name="password" >
                                                </div>  @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif</div> 
                                                 <div class="form-group">
                                                   <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                                                  <label for="pwd">{{ trans('messages.rematkhau') }} *</label>
                                                  <input type="password" class="form-control" id="pwd" name="password_confirmation">
                                                </div>  @if ($errors->has('password_confirmation'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password_confirmation') }}</strong>
                                    </span>
                                @endif</div> 
                                                <button type="submit" class="btn btn-sp">{{ trans('messages.dangky') }}</button>

                                        </form>
                                      </div>
                                    </div>
                                </div>

</div>
                            </div>
                        </div>
                    </div>
                </div> <!-- End main content area -->  

@endsection
