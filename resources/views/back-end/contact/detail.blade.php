@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Chi tiết đơn hàng </li>
			</ol>
		</div><!--/.row-->
		<div class="row">
			<div class="col-lg-12">
				<form action="" method="POST" role="form">	
					<input type="hidden" name="_token" value="{{ csrf_token() }}">				
					<div class="panel panel-default">
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
							<div class="table-responsive">
								<table class="table table-hover">
									<thead>
										<tr>
											<th>ID</th>
											<th> Họ-tên khách hàng</th>
											<th>Địa chỉ</th>
											<th>Điện thoại</th>
											<th>Ngày gửi</th>
										
										</tr>
									</thead>
									<tbody>
										<tr>
											<td>{!!$oder->id!!}</td>
											<td>{!!$oder->name!!}</td>
											<td>{!!$oder->diachi!!}</td>
											<td>{!!$oder->sdt!!}</td>
											<td>{!!$oder->created_at!!}</td>
											
										</tr>
									</tbody>
								</table>
							</div>
						<div class="panel-heading">						 
							Chi tiết liên hệ
						</div>
						<div class="panel-body" style="font-size: 12px;">
							<div class="table-responsive">
								<table class="table table-hover">
									
									<tbody>
									
											<tr>
												<td width="30%"> Email </td>	
												<td> {!!$oder->mail!!} </td>	
											</tr>
											<tr>
												<td> Tiêu đề </td>	
												<td> {!!$oder->tieude!!} </td>	
											</tr>
											<tr>
												<td> Nội dung </td>	
												<td> {!!$oder->noidung!!} </td>	
											</tr>					
									</tbody>
								</table>
							</div>
						</div>
					</div>
					<button type="submit" onclick="return xacnhan('Xác nhận liên hệ này ?')"  class="btn btn-danger"> Xác nhận liên hệ </button>
				</form>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection