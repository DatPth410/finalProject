<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="ckfinder/ckfinder.js"></script>

	<!-- <script type="text/javascript" src="js/admin.js"></script> -->
</head>
<body>
	@include('admin.header.menu')
	<div class="body">
		@include('admin.header.header')
		<div class="content" style="width: 100%; min-height: 100px; padding-left: 70px;">
			<form action="{{route('save-update-news',$params = ['id'=> $news->id])}}" method="POST" enctype="multipart/form-data">
				<div class="form-body">
					<div class="col-md-6">
						<div class="form-group">
							<label>Tiêu đề</label>
							<input type="text" name="name" class="form-control" value="{{$news->title}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Tóm tắt</label>
							<input type="text" name="tom_tat" class="form-control" value="{{$news->tom_tat}}">
						</div>
					</div>
					<div class="col-md-12">
					<div class="form-group">
						<label>Nội dung</label>
						<textarea name="noidung" class="form-control" placeholder="Nội dung" rows='10' id='noidung'>{{$news->noi_dung}}</textarea>
					</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Avatar</label>
							<input name="avatar" type="file" >
						</div>
					</div>

				</div>
				<button type="submit" class="btn btn-primary">Lưu</button>
				@csrf()

				<!-- Modal footer -->
				


				
			</form>

		</div>
	</div>
<script> CKEDITOR.replace('noidung', {
		filebrowserBrowseUrl:'ckfinder/ckfinder.html',
		filebrowserImageBrowseUrl: 'ckfinder/ckfinder.html?type=Images' ,
		filebrowserFlashBrowseUrl: 'ckfinder/ckfinder.html?type=Flash' ,
		filebrowserUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files' ,
		filebrowserImageUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images' ,
		filebrowserFlashUploadUrl: 'ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash' 
	}); 
    // var textarea = document.getElementById('noidung');
    // var noidung = CKEDITOR.instances['noidung'].getData();
    // element.innerHTML = noidung;
    // alert(" your data is :"+noidung);
    
</script>

</body>
</html>