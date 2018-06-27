@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Danh mục</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Chỉnh sửa danh mục</small></h1>
			</div>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body">
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
						<form action="" method="POST" role="form" enctype="multipart/form-data">
				      		{{ csrf_field() }}
				      		@foreach($data as $row)
				      		<div class="form-group">
				      			<label for="input-id">Tên Cửa hàng</label>
				      			<input type="text" name="txtName" id="inputTxtName" class="form-control" value="{!!$row->tencuahang!!}">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Địa chỉ</label>
				      			<input type="text" name="txtDc" id="inputTxtDc" class="form-control" value="{!!$row->diachi!!}">
				      		</div>				      						      		
				      		<div class="form-group">
				      			<label for="input-id">Số điện thoại</label>
								<input type="text" name="txtpromo" id="inputtxtpromo" value="{!!$row->sdt!!}" class="form-control" >
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Bản đồ</label>
				      			<input type="text" name="txtDes" id="inputTxtDes" class="form-control" value="{!!$row->map!!}">
				      		</div>	
				      		<div class="form-group">
				      			<label for="input-id">Hình ảnh</label>
					      		<input type="file" name="txtimg" id="inputtxtimg" value="{!!$row->diachi!!}" class="form-control">
					      		Ảnh cũ: <img src="{!!url('uploads/cuahang/'.$pro->hinhanh)!!}" width="80" height="60" class="margin-bt">
				      		</div>
				      		@endforeach		

				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Xác Nhận" class="button" />
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
	<style type="text/css">
		.margin-bt{
  margin-bottom: 10px;
  margin-top: 10px;
}
	</style>
<!-- =====================================main content - noi dung chinh trong chu -->
@endsection