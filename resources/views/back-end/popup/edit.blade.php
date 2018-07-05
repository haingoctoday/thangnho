@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Quản lý popup</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Quản lý popup</small></h1>
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
				      		<div class="form-group">
				      			<label for="input-id">Hình ảnh</label>
				      			<input type="file" name="txtimg" id="inputtxtimg" value="{{ old('txtimg') }}" class="form-control">
				      			<?php if($row->hinhanh) {?>
				      			Ảnh cũ: <img src="{!!url('uploads/popup/'.$row->hinhanh)!!}" width="120" height="80">
								<?php } ?>
				      		</div>	
				      		<div class="form-group">
				      			<label for="input-id">Url video</label>
				      			<input type="text" name="txtUrl" id="inputTxtUrl" class="form-control" value="{!!$row->url_video!!}">
				      		</div>			      						      		
				      		<div class="form-group">
				      			<label for="input-id">Trạng thái</label>
					      		<select name="txtStt" id="inputTxtStt" class="form-control">
					      			
					      					<option value="1">Hiển thị</option>
					      			
					      					<option value="0">Tạm ẩn</option>
					      		</select>
				      		</div>
				      	
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