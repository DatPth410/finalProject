<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MẠNG BÁN TOUR DU LỊCH SỐ 1 VIỆT NAM</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
</head>
<body>
	<div class="container">
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
					<a href="tour_trong_nuoc.php"><p class="header_text_2">Du lịch trong nước</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="tour_nuoc_ngoai.php"><p class="header_text_2">Du lịch nước ngoài</p></a>
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


			<div id="main_content">
				<div style="margin-bottom: 20px;" class="t_c">
					<span><a href="#">Trang chủ  > </a></span>
					<span><a href="#"> KINH NGHIỆM DU LỊCH</a></span>
				</div>

				<div class="imgs">
					<div   class="col-md-3 col-sm-12">
						<a href="#">
							<img style="height: 456px;width: 280px;" src="images/tour-trong-nuoc.png">
						</a>
					</div>
					<div  class="col-md-6 col-sm-12">
						<a href="#">
							<img style="height: 456px;width: 565px;text-align: center;padding-left: 3px;" src="images/lich-khoi-hanh-tour-nuoc-ngoai.png">
						</a>
					</div>
					<div class="col-md-3 col-sm-12">
						<a href="#">
							<img style="height: 211px;width: 277px;padding-bottom: 12px;" src="images/combo-voucher.jpg">
						</a>

						<a href="#">
							<img style="height: 242px;width: 277px;" src="images/vechungtoi.jpg">
						</a>
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-md-9 col-sm-12">
					<div style="margin-top: 40px;" class="head_box">
						<h3>Kinh nghiệm du lịch</h3>
						<p style="border-bottom: 3px solid black;"></p>
					</div>
					<!-- <div class="left-content"> -->
						<div class="row">
							@foreach ($exp as $element=>$news)
								{{-- expr --}}
								<div class="col-md-6 col-sm-12">
								<div class="new-content">
									<a href="tin_tuc?id={{$news->id}}">
										<div class="img">
											<img src="img/test/{{$news->avatar}}" style="height: 260px;">
										</div>

										<div class="content">
											<h3>{{$news->title}}</h3>
										</div>
									</a>
									<div style="padding-top: 20px" class="views">
										<span style="padding-right: 20px;color: #999999;font-size: 14px;margin-bottom: 10px;" class="glyphicon glyphicon-calendar"> {{$news->ngay_dang}}
										</span>
										<span class="glyphicon glyphicon-eye-open" style="color: #999999;
										font-size: 14px;
										margin-bottom: 10px;"> 228 View
									</span>
									<p style="margin-bottom: 10px;">{{$news->tom_tat}}</p>

									<p style="padding-top: 20px;padding-bottom: 0px;">
										<button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-thumbs-up"> Like</span><span> 0</span></button>
										<button type="button" class="btn btn-primary btn-sm">Share</button>
									</p>
								</div>
							</div>
						</div>
							@endforeach


			<div style="padding-top: 40px; padding-left: 300px;padding-bottom: 80px;" class="btn-group">
				<button type="button" class="btn btn-default"><a href="#"></a>1</button>
				<button type="button" class="btn btn-default"><a href="#">2</a></button>
				<button type="button" class="btn btn-default"><a href="#">3</a></button>
				<button type="button" class="btn btn-default"><a href="#">4</a></button>
				<button type="button" class="btn btn-default"><a href="#">5</a></button>
				<button type="button" class="btn btn-default"><a href="#">></a></button>
				<button type="button" class="btn btn-default"><a href="#">Last</a></button>
			</div>

		</div>
	</div>

						
<div class="col-md-3">
	<div style="margin-top: 40px;" class="tim_kiem">
		<form action="" method="POST" class="form-inline" role="form">

			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="text" class="form-control" id="" name="search" placeholder="TÌm kiếm tin tức...">
			</div>
			<button type="submit" class="btn btn-danger"><a href="#"><img src="images/i-search-mini.png"></a></button>
		</form>
	</div>

	<div style="padding-top: 30px;" class="menu_news">
		<div class="category" style="border-bottom: double;">
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="#">Xem nhiều nhất</a></li>
				<li role="presentation"><a href="#">Mới nhất</a></li>
			</ul>
		</div>
		<div class="list_news">
			@foreach ($exp_time as $element=>$news)
				{{-- expr --}}
				<div class="news">
				<div class="img2">
					<a href="tin_tuc?id={{$news->id}}">
						<img src="img/test/{{$news->avatar}}" style="padding-top: 20px;" width="80px" height="100px">
					</a>
				</div>
				<div class="title">
					<a href="tin_tuc?id={{$news->id}}">
						<h5 style="color: #222222;">{{$news->title}}</h5>
					</a>
					<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> {{$news->ngay_dang}}</span>
				</div>
			</div>
			@endforeach
			
			
		</div>

	</div>

	<div class="handbook">
		<div class="header_box">
			<h3>Cẩm nang du lịch</h3>
		</div>
		<div class="notes">
			<a href="#">Hướng dẫn tự xin Visa Hong Kong tự túc</a>
			<a href="#">Du lịch Campuchia mùa nào đẹp nhất</a>
			<a href="#">Cẩm nang du lịch Phú Yên</a>
			<a href="#">Kinh nghiệm du lịch Bắc Kinh Trung Quốc</a>
			<a href="#">Thông tin du lịch Côn Đảo</a>
			<a href="#">Kinh nghiệm du lịch Hàn Quốc mùa hè</a>
			<a href="#">Kinh nghiệm du lịch Châu Âu</a>
			<a href="#">Cần biết khi đi du lịch Dubai</a>
			<a href="#">Kinh nghiệm du lịch Hà Giang 3 ngày 2 đêm</a>
			<a href="#">Đi du lịc Bhutan cần lưu ý gì?</a>
			<a href="#">Nên đi Phú Quốc mùa nào?</a>
			<a href="#">Kinh nghiệm tổ chức teambuilding</a>
			<a href="#">Lưu ý khi làm Visa Mỹ</a>
			<a href="#">Đi du lịch Myanmar cần lưu ý gì ?</a>
			<a href="#">Cẩm nang di du lịch Úc</a>
			<a href="#">Kinh nghiệm đi du lịch Đà Nẵng tự túc chi tiết</a>
			<a href="#">Kinh nghiệm đi du lịch đảo Bình Ba</a>
			<a href="#">Kinh nghiệm du lịch Nga tự túc mới nhất</a>
			<a href="#">Kinh nghiệm du lịch Phượng Hoàng cổ trấn</a>
			<a href="#">Du lịch Chiang Mai nên đi mùa nào?</a>
			<a href="#">Đi du lịch Thái Lan mùa hè có gì hấp dẫn</a>
			<a href="#">Hướng dẫn lịch trình du lịch Sapa 3 ngày 2 đêm chi tiết</a>
			<a href="#">Kinh nghiệm du lịch Mông Cổ</a>
			<a href="#">Lưu ý khi du lịch Nhật Bản lần đầu</a>
			<a href="#">Kinh nghiêm du lịch Singapore Malaysia</a>
			<a href="#">Kinh nghiệm du lịch Đà Lạt</a>
			<a href="#">Cẩm nang du lịch Lý Sơn từ A đến Z</a>
			<a href="#">Đi Mộc Châu nên ở khách sạn nào?</a>
			<a href="#">Đi du lịch Đài Loan mùa nào đẹp nhất?</a>
			<a href="#">Đi du lịch Trung Quốc cần chuẩ bị gì ?</a>
		</div>
	</div>

</div>

</div>


<!-- Start footer -->
<div id="wrap_footer3">
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