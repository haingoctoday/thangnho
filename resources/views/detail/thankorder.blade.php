@extends('layouts.ngoc')
@section('content')


         <div class="maincontent-area">
                                   <p class="danhsach-bran">  {{ trans('messages.home') }}     </p>
                                               <h2 class="section-title-bran"> Tính tiền</h2>
                                <div class="zigzag-bottom"></div>
                                <div class="container">


<div class="row">
	

	<p><b> Cảm ơn bạn. Đơn hàng của bạn đã được nhận </b></p>

	<p> Đơn hàng số : <b>{!!$oder->id!!}</b></p>
	<p> Ngày : <b>{!!$oder->created_at!!}</b></p>
	<p> Email : <b>{!!$oder->user->phone!!}</b></p>
	<p> Tổng : <b>{!! number_format($oder->tongtien_shipping) !!}</b> đ </p>
	<p> Phương thức thanh toán : <b>Trả tiền mặt khi nhận hàng (COD)</b> </p>
	<p> .. sẽ gọi điện xác nhận đơn hàng <b> muộn nhất trong vòng 2 ngày (tính cả T7, CN) nhé</b> </p>

			<div class="panel-heading">						 
						<b>	Thông tin Shipping đơn hàng</b>
						</div>
								<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											
											<th>Thành phố </th>
											<th>Địa chỉ shipping</th>
											<th>Giá tiền shipping</th>
											<th>Mô tả thêm</th>
											<th>Tổng tiền</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											
											<td>{!!$oder->tp_shipping!!}</td>
											<td>{!!$oder->diachi_cuthe!!}</td>
											<td>{!!number_format($oder->phishipping)!!} </td>
											<td>{!!$oder->mota_them!!}</td>
											<td style="color: #4ca355;font-size: 18px;font-weight: bold;">{!! number_format($oder->tongtien_shipping) !!} đ</td>
										</tr>
									</tbody>
								</table>
							</div>	
						<div class="panel-heading">						 
							<b>Chi tiết sản phẩm trong đơn đặt hàng</b>
						</div>
						<div class="panel-body" style="font-size: 12px;">
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>										
																			
											<th>Hình ảnh</th>
											<th>Tên sản phẩm</th>
										
											<th> Số lượng </th>
											<th>Giá bán</th>
											
											
										</tr>
									</thead>
									<tbody>
										@foreach($data as $row)
											<tr>
												
												<td> <img src="{!!url('uploads/products/'.$row->images)!!}" alt="iphone" width="50" height="40"></td>
												<td>{!!$row->name!!}</td>
											
												<td>{!!$row->qty!!} </td>
												<td>{!! number_format($row->price) !!} đ</td>
												
												
											</tr>
										@endforeach								
									</tbody>
								</table>
							</div>
						</div>
</div>

                               </div>
                             </div> <!-- End main content area -->      
@endsection
