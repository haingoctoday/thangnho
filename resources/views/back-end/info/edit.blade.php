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
				<h1 class="page-header"><small>Thêm mới danh mục</small></h1>
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
				      			<label for="input-id">Tên Website</label>
				      			<input type="text" name="txtName" id="inputTxtName" value="{!!$row->web_name!!}" class="form-control">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Địa chỉ 1</label>
				      			<input type="text" name="txtDc1" id="inputTxtDc1" class="form-control" value="{!!$row->diachi1!!}">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Địa chỉ 2</label>
				      			<input type="text" name="txtDc2" id="inputTxtDc2" class="form-control" value="{!!$row->diachi2!!}">
				      		</div>		
				      		<div class="form-group">	
<!-- 				      			<label for="input-id">Giới thiệu về website</label>
				      			<input type="text" name="txtAbout" id="inputTxtAbout" class="form-control" value="{!!$row->gioithieu!!}"> -->

					      				<label for="input-id">Giới thiệu về website</label>
					      				<textarea name="txtAbout" id="inputTxtAbout" class="form-control" rows="2" ">{!! old('txtAbout',isset($row->gioithieu) ? $row->gioithieu : null) !!}</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtAbout',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>

				      		</div>			      						      		
				      		<div class="form-group">
				      			<label for="input-id">Logo Web</label>
					      		<input type="file" name="txtimg" id="inputtxtimg" value="{{ old('txtimg') }}" class="form-control">
					      		Logo cũ: <img src="{!!url('uploads/info/'.$pro->logo)!!}" width="80" height="60" class="margin-bt">
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Số điện thoại</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Hotline : <input type="text" name="txtpromo1" id="inputtxtpromo1" value="{!!$row->sdt_hotline!!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Hỗ trợ khách hàng : <input type="text" name="txtpromo2" id="inputtxtpromo2" value="{!!$row->sdt_htkh!!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Tổng đài : <input type="text" name="txtpromo3" id="inputtxtpromo3" value="{!!$row->sdt_tongdai!!}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Liên kết</label>
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Facebook : <input type="text" name="txtfb" id="inputtxtfb" value="{!!$row->url_fb!!}" class="form-control" >
					      			</div>
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Youtube : <input type="text" name="txtyt" id="inputtxtyt" value="{!!$row->url_yt!!}" class="form-control" >
					      			</div>
					      		</div>				      			
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Description</label>
				      			<input type="text" name="txtDes" id="inputTxtDes" class="form-control" value="{!!$row->decript!!}">
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