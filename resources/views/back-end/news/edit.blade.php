@extends('back-end.layouts.master')
@section('content')
<!-- main content - noi dung chinh trong chu -->
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Tin tức</li>
			</ol>
		</div><!--/.row-->
		
		<div class="row">
			<div class="col-lg-12">
				<h1 class="page-header"><small>Sửa bản tin </small></h1>
			</div>
		</div><!--/.row-->		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">					
					<div class="panel-body" style="background-color: #ecf0f1; color:#27ae60;">
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
					      		<label for="input-id">Chọn danh mục</label>
					      		<select name="sltCate" id="inputSltCate" required class="form-control">
					      			<option value="">--Chọn danh mục--</option>
					      			@foreach($cat as $dt)
					      				@if($dt->id == $data->cat_id)
					      					<option value="{!!$dt->id!!}" selected >{!!'--|--|'.$dt->name_vi!!}</option> 	
					      				@else
					      					<option value="{!!$dt->id!!} " >{!!'--|--|'.$dt->name_vi!!}</option> 	
					      				@endif
					      			@endforeach	
					      		</select>
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Tiêu đề bản tin VI</label>
				      			<input type="text" name="txtTitle" id="inputTxtTitle" class="form-control" value="{!! old('txtTitle',isset($data->title_vi) ? $data->title_vi : null) !!}"  >
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id">Tiêu đề bản tin EN</label>
				      			<input type="text" name="txtTitle1" id="inputTxtTitle" class="form-control" value="{!! old('txtTitle1',isset($data->title_en) ? $data->title_en : null) !!}"  >
				      		</div>
				      		<div class="form-group">
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Tác giả : <input type="text" name="txtAuth" id="inputTxtAuth" class="form-control" value="{!! old('txtAuth',isset($data["author"]) ? $data["author"] : null) !!}" required="required">
					      			</div>
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Tag : <input type="text" name="txttag" id="inputtag" value="{!! old('txttag',isset($data["tag"]) ? $data["tag"] : null) !!}" class="form-control">
					      			</div>
				      			</div>
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
									<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
										Ảnh hiện tại: <br><img src="{!!url('uploads/news/'.$data->images)!!}" alt="" height="40" width="80">
									</div>
					      			<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">					      				
					      				Hình ảnh mới : <input type="file" name="txtimg" accept="image" id="inputtxtimg" value="{!! old('txtimg',isset($data["images"]) ? $data["images"] : null) !!}" class="form-control" >
					      			</div>					      		
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Trạng thái : <select name="slstatus" id="inputSlstatus" class="form-control" required="required">
					      					<option value="1" selected>Hiển thị</option>
					      					<option value="0">Tạm ẩn</option>
					      				</select>
					      			</div>
					      			<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5">
					      				Nguồn tin : <input type="text" name="txtSource" id="inputtxtSource" value="{!! old('txtSource',isset($data["source"]) ? $data["source"] : null) !!}" class="form-control">
					      			</div>
					      		</div>				      			
				      		</div>

				      		<div class="form-group">
                            <div role="tabpanel" style="padding-top: 20px;" id="exTab1">
                                <ul class="nav nav-pills" role="tablist">
                                    <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Bài viết VI</a></li>
                                    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Bài viết EN</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="home">
				      		<div class="form-group">
				      			<label for="input-id">VI</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id" id="tomtat">Tóm tắt VI</label>
					      				<textarea name="txtIntro" id="inputTxttxtIntro" class="form-control" rows="2" required="required">{!! old('txtIntro',isset($data["intro_vi"]) ? $data["intro_vi"] : null) !!}</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtIntro',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id" id="chitiet">Chi tiết bản tin VI</label>
					      				<textarea name="txtFull" id="inputtxtFull" class="form-control" rows="4" required="required">{!! old('txtFull',isset($data["full_vi"]) ? $data["full_vi"] : null) !!}</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtFull',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      		</div>	
				      		</div>	
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="profile">
				      		<div class="form-group">
				      			<label for="input-id">EN</label>
				      			<div class="row">					      			
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id" id="tomtat">Tóm tắt EN</label>
					      				<textarea name="txtIntro1" id="inputTxttxtIntro1" class="form-control" rows="2" required="required">{!! old('txtIntro1',isset($data["intro_en"]) ? $data["intro_en"] : null) !!}</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtIntro1',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
					      				<label for="input-id" id="chitiet">Chi tiết bản tin EN</label>
					      				<textarea name="txtFull1" id="inputtxtFull1" class="form-control" rows="4" required="required">{!! old('txtFull1',isset($data["full_en"]) ? $data["full_en"] : null) !!}</textarea>
					      				<script type="text/javascript">
											var editor = CKEDITOR.replace('txtFull1',{
												language:'vi',
												filebrowserImageBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Images',
												filebrowserFlashBrowseUrl : '../../plugin/ckfinder/ckfinder.html?Type=Flash',
												filebrowserImageUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
												filebrowserFlashUploadUrl : '../../plugin/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
											});
										</script>
					      			</div>
					      		</div>	
				      		</div>	
                                    </div>
                                </div>
                            </div>
				      		</div>	

	      				      		

				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Xác nhận" class="button" />
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
<script type="text/javascript">
	
	$( "#inputSltCate" ).change(function() {
  var id =  $(this).val();
  if(id == '34'){
  	$( "#tieude" ).text('Tiêu đề video');
  	$( "#nguontin" ).text('Link nhúng video');
  	$( "#tomtat" ).text('Nguyên liệu');
  	$( "#chitiet" ).text('Hướng dẫn chi tiết');
  }
  if(id == '35'){
  	$( "#tieude" ).text('Tiêu đề bản tin');
  	$( "#nguontin" ).text('Nguồn tin');
  	$( "#tomtat" ).text('Tóm tắt ');
  	$( "#chitiet" ).text('Bài viết chi tiết');
  }
});
</script>
@endsection