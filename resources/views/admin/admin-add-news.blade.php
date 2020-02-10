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
		<div class="content1">
			<div class="form-body">
				<div class="main-grid">
					<div class="agile-grids">
						<!-- input-forms -->
						<div class="grids">
							<div class="progressbar-heading grids-heading">
								<h2>Thêm Tin Tức</h2>
							</div>
							<div class="panel panel-widget forms-panel">
								<div class="forms">
									<div class="form-grids widget-shadow" data-example-id="basic-forms">
										<div class="form-title">
											<!-- <h4>Thêm tin tức :</h4> -->
										</div>
										<div class="form-body">
											<form action="{{route('save-news')}}" method="post" enctype="multipart/form-data">
												<div class="form-group">
													<label>Tiêu đề</label>
													<input type="text" name="tieude" class="form-control" placeholder="Tiêu đề">
												</div>
												<div class="form-group">
													<label>Tóm tắt</label>
													<input type="text" name="tomtat" class="form-control" placeholder="Tóm tắt">
												</div>
												<div class="form-group">
													<label>Nội dung</label>
													<textarea name="noidung" class="form-control" placeholder="Nội dung" rows='10' id='noidung'></textarea>
												</div>
												<div class="form-group">
													<label>Avatar</label>
													<input name="avatar" type="file">
												</div>
												<!-- <div class="form-group">
													<label>Điểm đến</label><br>
													<select name="diemden">
														<option value="">Select</option>
														
													</select>
													<select name="diemden">
														<option value="">Select</option>
														
													</select>
													<select name="diemden">
														<option value="">Select</option>
														
													</select>
												</div> -->
												<button type="submit" class="btn btn-default w3ls-button">Submit</button>
												@csrf()
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
						<!-- //input-forms -->
					</div>
				</div>
			</div>
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