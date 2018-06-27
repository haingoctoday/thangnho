@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Thông tin địa chỉ Website</li>
			</ol>
		</div><!--/.row-->
	
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading">
						Thông tin địa chỉ Website
						<!-- <a href="{!!url('admin/info/add')!!}" title=""><button type="button" class="btn btn-primary pull-right">Thêm mới </button></a> -->
					</div>
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
										<th>Tên Website</th>	
										<th>Giới thiệu</th>	
										<th>Địa chỉ 1</th>	
										<th>Địa chỉ 2</th>									
										<th>Logo</th>

									</tr>
								</thead>
								<tbody>
									@foreach($data as $row)
										<tr>
											<td>{!!$row->web_name!!}</td>
											<td>{!!$row->gioithieu!!}</td>
											<td>{!!$row->diachi1!!}</td>
											<td>{!!$row->diachi2!!}</td>
											<td> <img src="{!!url('uploads/info/'.$row->logo)!!}" width="100" height="80"></td>

										</tr>
									@endforeach										
								</tbody>
							</table>
							<table class="table table-hover">
								<thead>
									<tr>										
										<th>SĐT Hotline</th>
										<th>SĐT CSKH</th>
										<th>SĐT Tổng đài</th>	
										<th>Liên kết Facebook</th>	
										<th>Liên kết Youtube</th>	
										<th>Description</th>										
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									@foreach($data as $row)
										<tr>
											<td>{!!$row->sdt_hotline!!}</td>
											<td>{!!$row->sdt_htkh!!}</td>
											<td>{!!$row->sdt_tongdai!!}</td>
											<td>{!!$row->url_fb!!}</td>
											<td>{!!$row->url_yt!!}</td>
											<td>{!!$row->decript!!}</td>
											<td>
											    <a href="{!!url('admin/info/edit/'.$row->id)!!}" title="Sửa"><span class="fas fa-edit">Chỉnh sửa</span> </a>
											    <!-- <a href="{!!url('admin/info/del/'.$row->id)!!}"  title="Xóa" onclick="return xacnhan('Xóa danh mục này ?')"><span class="fas fa-trash-alt">Xoá</span> </a> -->
											</td>
										</tr>
									@endforeach										
								</tbody>
							</table>							
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection