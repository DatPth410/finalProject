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
			<form action="{{route('save-update-booking',$params = ['id'=> $booking->id])}}" method="POST" enctype="multipart/form-data">
				<div class="form-body">
					<div class="col-md-6">
						<label for="tag" style="color: #0c427a; font-size: 18px;">Mức giá: </label>
									<select style="height: 40px;font-size: 20px;" name="pay" class="form-control focus input-lg" style="margin-left: 15px;">
										
										<option value=1>Chưa thanh toán</option>
										<option value=2>Đã thanh toán</option>
										
									</select>
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