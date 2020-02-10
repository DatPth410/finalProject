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
		<div class="content" style="width: 100%; min-height: 100px; padding-left: 70px;">
			<form action="{{route('save-update-tour',$params = ['id'=> $tour->id])}}" method="POST" enctype="multipart/form-data">
				<div class="form-body">
					<div class="col-md-6">
						<div class="form-group">
							<label>Tên tour</label>
							<input type="text" name="name" class="form-control" value="{{$tour->name}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Số ngày</label>
							<input type="number" name="songay" class="form-control" value="{{$tour->length}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Giá</label>
							<input type="number" name="gia" class="form-control" value="{{$tour->price}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Khuyến mãi</label>
							<input type="number" name="km" class="form-control" value="{{$tour->khuyen_mai}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Số chỗ</label>
							<input type="number" name="socho" class="form-control" value="{{$tour->so_cho}}">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Lịch trình</label>
							<textarea name="lichtrinh" class="form-control" rows='10'>{{$tour->lich_trinh}}</textarea>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Ngày khởi hành</label>
							<input type="date" name="ngaykhoihanh" class="form-control" value="{{$tour->departure}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Nơi khởi hành</label>
							<input type="text" name="noikhoihanh" class="form-control" value="{{$tour->noi_khoi_hanh}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Số chỗ đã đặt</label>
							<input type="number" name="sochodadat" class="form-control"  value="{{$tour->sochodadat}}">
						</div>
					</div>
					<div class="col-md-12">
						<div class="form-group">
							<label>Lưu ý</label>
							<textarea name="luuy" class="form-control" rows='10'>{{$tour->luu_y}}</textarea>
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Code tour</label>
							<input type="text" name="code" class="form-control" value="{{$tour->code}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Điểm đến</label><br>
							<input type="text" name="diem_den" class="form-control" value="{{$tour->diem_den}}">
						</div>
					</div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Phương tiện</label><br>
							<input type="text" name="phuongtien" class="form-control" value="{{$tour->vehicle}}">
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

</body>
</html>