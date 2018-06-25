@extends('layouts.ngoc')
@section('content')
<div class="maincontent-area">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="latest-product">
                                      <p class="danhsach-bran">  TRANG CHỦ    </p>
                                      <h2 class="section-title-bran"> TÀI KHOẢN CỦA TÔI </h2>

                                      <div style="height: 100px;"></div>
                                      <div class="row">
                                      <div class="col-md-6">
                                         <div class="login-sp">
                                           <p class="text-head">đăng nhập</p>
                                           <form action="" method="">
                                                <div class="form-group">
                                                  <label for="email">Địa chỉ email *</label>
                                                  <input type="email" class="form-control" id="email">
                                                </div>
                                                  <div class="form-group">
                                                  <label for="pwd">Mật khẩu *</label>
                                                  <input type="password" class="form-control" id="pwd">
                                                </div>
                                                <div class="checkbox">
                                                  <label><input type="checkbox"> Ghi nhớ mật khẩu</label>
                                                  <a href="" class="maucam" style="float: right;">Quên mật khẩu</a>
                                                </div>
                                                <button type="submit" class="btn btn-sp">Đăng nhập</button>
                                           </form>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="reg-sp">
                                        <p class="text-head">đăng ký</p>
                                        <form action="" method="">
                                                <div class="form-group">
                                                  <label for="email">Họ và tên *</label>
                                                  <input type="email" class="form-control" id="email">
                                                </div> 
                                                <div class="form-group">
                                                  <label for="sdt">Số điện thoại *</label>
                                                  <input type="email" class="form-control" id="email">
                                                </div>                                                                       
                                                <div class="form-group">
                                                  <label for="email">Email *</label>
                                                  <input type="email" class="form-control" id="email">
                                                </div>
                                                  <div class="form-group">
                                                  <label for="pwd">Mật khẩu *</label>
                                                  <input type="password" class="form-control" id="pwd">
                                                </div>
                                                <button type="submit" class="btn btn-sp">Đăng ký</button>

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
