<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MẠNG BÁN TOUR DU LỊCH SỐ 1 VIỆT NAM</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- <link rel="stylesheet" href="css/blog_tour_trong_ngoai.css"> -->
	<<!-- link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/blog_tour_trong_ngoai.css') }}" rel="stylesheet"> -->
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
</head>
<body>
	

		<!-- Start Header -->
		<div id="header" class="fix">
			<div class="row">					
				<div class="col-md-offset-1 col-md-1 col-sm-offset-1 col-sm-1">
					<img src="images/lo-go.png" style="width: 80px;height: 80px;">
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="index.php"><p class="header_text">Trang chủ</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="sale.php"><p class="header_text_2">Combo - Khuyến mại</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="{{route('trong-nuoc')}}"><p class="header_text_2">Du lịch trong nước</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="{{route('nuoc-ngoai')}}"><p class="header_text_2">Du lịch nước ngoài</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="aboutus.php"><p class="header_text_2" style="margin-top: 15px;">Về chúng tôi</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="cam_nang.php"><p class="header_text">Blog</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<nav>
						<ul>
							<li>Tài khoản
								<ul>	
									<li><a href = "#">Đăng nhập</a></li>
									<li><a href = "#">Đăng kí</li>
									</ul>
								</li>
							</ul>
						</nav>
					</div>

					<div class="col-md-2 col-sm-2">
						<a href="#" class="header_hotline glyphicon glyphicon-earphone"><p style="float: right;margin-left: 22px; letter-spacing: 2px; font-size: 30px;">0928 0416</p></a>
						<p style="font-size: 15px;margin-top: -4px;color: #fff;text-align: center;">Hỗ trợ dịch vụ 24/24</p>
					</div>
				</div>
			</div>
			<!-- End Header -->
		</div>

<!-- 	<div id="body">
	</div> -->
	@yield('content')
	<!-- Start footer -->
	<div id="wrap_footer">
		<div id="above_footer">
			<h1 style="text-align: center;color: #fff;padding-top: 20px;">Chọn DPV, chọn sự Uy Tín, nhanh gọn và đảm bảo</h1>
			<h3 style="text-align: center;color: #85afdb;">Travel Agency đem đến cho bạn những trải nghiệm tuyệt vời nhất!</h3>
		</div>

		<div id="footer">
			<div id="top_bottom" class="col-md-offset-2">
				<img src="images/lo-go.png" style="width: 90px;height: 90px;margin-top: 10px;">
			</div>

			<div id="middle_bottom" class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-3">
						<p style="font-size: 20px;text-align: center;">GÓC KHÁCH HÀNG</p>
						<a href="#" class="customer_service_text">Điều khoản thanh toán</a><br>
						<a href="#" class="customer_service_text">Cẩm nang du lịch</a><br>
						<a href="#" class="customer_service_text">Liên hệ</a><br>
						<a href="#" class="customer_service_text">Giới thiệu</a>
					</div>

					<div class="col-md-6">
						<p style="font-size: 20px;text-align: center;">THÔNG TIN LIÊN HỆ</p>
						<p>Địa chỉ:</p>
						<p>Điện thoại:</p>
						<p>Email:</p>
						<p>Giấy phép Lữ Hành Quốc Tế:</p>
						<p>Mã số doanh nghiệp:</p>
					</div>

					<div class="col-md-3">
						<p style="font-size: 20px;text-align: center;">FOLLOW US</p>
					</div>
				</div>
			</div>

			<div id="bottom_bottom" class="col-md-offset-2 col-md-8">
				<p style="text-align: center; font-size: 22px;margin-top: 20px;">Copyright - Empowered by DPV</p>
			</div>
		</div>
	</div>
	<!-- End footer -->

</body>
</html>
