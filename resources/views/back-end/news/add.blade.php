@extends('back-end.layouts.master')
@section('content')
<?php
$acb  = app('request')->input('q');
print_r($acb);
?>
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
				<h1 class="page-header"><small>Thêm mới bản tin </small></h1>
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
					      				<option value="{!!$dt->id!!}" <?php 
					      				if($acb == $dt->id)
					      				{
					      					echo "selected";
					      				}else{

					      				}

					      				 ?> >{!!'--|--|'.$dt->name_vi!!}</option> 	
					      			@endforeach	
					      		</select>
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id" id="tieude">Tiêu đề bản tin VI</label>
				      			<input type="text" name="txtTitle" id="inputTxtTitle" class="form-control" value="{{ old('txtTitle') }}" required >
				      		</div>
				      		<div class="form-group">
				      			<label for="input-id" id="tieude">Tiêu đề bản tin EN</label>
				      			<input type="text" name="txtTitle1" id="inputTxtTitle" class="form-control" value="{{ old('txtTitle1') }}" required >
				      		</div>
				      		<div class="form-group">
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Tác giả : <input type="text" name="txtAuth" id="inputTxtAuth" class="form-control" value="{{ old('txtAuth') }}" required="required">
					      			</div>
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				Tag : <input type="text" name="txttag" id="inputtag" value="{{ old('txttag') }}" class="form-control">
					      			</div>
				      			</div>
				      		</div>
				      		<div class="form-group">				      			
				      			<div class="row">
					      			<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
					      				Hình ảnh : <input type="file" name="txtimg" accept="image/*" id="inputtxtimg" value="{{ old('txtimg') }}" class="form-control" required="required">
					      			</div>					      		
					      			<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
					      				Trạng thái : <select name="slstatus" id="inputSlstatus" class="form-control" required="required">
					      					<option value="1" selected>Hiển thị</option>
					      					<option value="0">Tạm ẩn</option>
					      				</select>
					      			</div>
					      			<div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">
					      				<span id="nguontin">Nguồn tin</span> : <input type="text" name="txtSource" id="inputtxtSource" value="{{ old('txtSource') }}" class="form-control">
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
					      				<textarea name="txtIntro" id="inputTxttxtIntro" class="form-control" rows="2" required="required">{{ old('txtIntro') }}</textarea>
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
					      				<textarea name="txtFull" id="inputtxtFull" class="form-control" rows="4" required="required">{{ old('txtFull') }}</textarea>
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
					      				<textarea name="txtIntro1" id="inputTxttxtIntro1" class="form-control" rows="2" required="required">{{ old('txtIntro1') }}</textarea>
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
					      				<textarea name="txtFull1" id="inputtxtFull1" class="form-control" rows="4" required="required">{{ old('txtFull1') }}</textarea>
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

				      		<input type="submit" name="btnCateAdd" class="btn btn-primary" value="Thêm tin tức" class="button" />
				      	</form>			      	
					</div>
				</div>
			</div>
		</div><!--/.row-->		
	</div>	<!--/.main-->
<!-- =====================================main content - noi dung chinh trong chu -->
<script type="text/javascript">
	$( document ).ready(function() {
       var id =  <?php echo ($acb != 0) ?  $acb : "1"?>;
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