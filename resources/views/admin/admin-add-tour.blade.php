<!DOCTYPE html> 
<html>
<head>
	<title>	</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>

	<!-- <script type="text/javascript" src="js/admin.js"></script> -->
</head>
<body>
	@include('admin.header.menu')
	<div class="body">
		@include('admin.header.header')
		<div class="content1">
			<div class="form-body">
				<h2 style="text-align: center;">Nhập thông tin tour mới</h2>
				<form action="{{route('save-tour')}}" method="post" enctype="multipart/form-data">
					@csrf

					<div class="form-group">
						<label>Tên tour</label>
						<input type="text" name="name" class="form-control" placeholder="Tên tour">
					</div>
					<div class="form-group">
						<label>Giá</label>
						<input type="number" name="gia" class="form-control" placeholder="Giá">
					</div>
					<div class="form-group">
						<label>Code tour</label>
						<input type="text" name="code" class="form-control" placeholder="Code tour">
					</div>
					<div class="form-group">
						<label>Lịch trình</label>
						<textarea name="lichtrinh" id="lichtrinh" class="form-control" placeholder="Lịch trình" rows='10'></textarea>
					</div>
					<div class="form-group">
						<label>Số ngày</label>
						<input type="number" name="songay" class="form-control" placeholder="Số ngày">
					</div>
					<div class="form-group">
						<label>Ngày khởi hành</label>
						<input type="date" name="ngaykhoihanh" class="form-control" placeholder="Ngày khởi hành">
					</div>
					<div class="form-group">
						<label>Nơi khởi hành</label>
						<input type="text" name="noikhoihanh" class="form-control" placeholder="Nơi khởi hành">
					</div>
					<div class="form-group">
						<label>Phương tiện</label>
						<input type="text" name="phuongtien" class="form-control" placeholder="Phương tiện">
					</div>
					<div class="form-group">
						<label>Số chỗ</label>
						<input type="number" name="socho" class="form-control"  placeholder="Số chỗ">
					</div>
					<div class="form-group">
						<label>Lưu ý</label>
						<textarea name="luuy" class="form-control" placeholder="Lưu ý"rows='10'></textarea>
					</div>
					
					<div class="form-group">
						<label>Avatar</label>
						<input name="avatar" type="file">
					</div>
					

					<div class="form-group">
						<label>Điểm đến</label><br>
						<div class="checkbox">
							<label>
								<input name="diemden[]" type="checkbox" value="1">
								Hà Nội
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input name="diemden[]" type="checkbox" value="2">
								Đà Nẵng
							</label>
						</div>
						<div class="checkbox">
							<label>
								<input name="diemden[]" type="checkbox" value="3">
								Hồ Chí Minh
							</label>
						</div>
					</div>
					<!-- <div class="form-group">
						<label>Miền</label><br>
						<input style="margin-left: 40px;" type="radio" name="mien" value="1"> Miền Bắc
						<input style="margin-left: 40px;" type="radio" name="mien" value="2"> Miền Trung
						<input style="margin-left: 40px;" type="radio" name="mien" value="3"> Miền Nam
					</div> -->
					<button type="submit" class="btn btn-default w3ls-button">Submit</button>
					<!-- @csrf() -->
				</form>

			</div>
		</div>
	</div>

</body>
</html>