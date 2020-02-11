<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MẠNG BÁN TOUR DU LỊCH SỐ 1 VIỆT NAM</title>
	<link rel="stylesheet" href="../../../public/css/bootstrap.min.css" />
	<link rel="stylesheet" href="../../../public/css/blog_tour_trong_ngoai.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

			<!-- Start Header -->
		<div id="header" class="fix">
			<div class="row">					
				<div class="col-md-offset-1 col-md-1 col-sm-offset-1 col-sm-1">
					<img src="../../../public/images/lo-go.png" style="width: 80px;height: 80px;">
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
<div id="body">
	<div id="main_content">
			<div style="padding-top: 20px;" class="navigation">
				<span><a href="#">Trang chủ</a></span>
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span><a href="#">Tour trong nước</a></span>
			</div>

			<div class="content">
				<div class="h1_title">
					<h1>Tour trong nước</h1>
				</div>
				<div style="text-align: center;" class="info">
					Các
					<a href="#">
						<strong>tour</strong>
						<strong>Du lịch trong nước</strong>
					</a>
					liên tục được mở bán thường xuyên tại
					<strong>TRAVEL AGENCY</strong>
					với nhiều điểm đến mới hấp dẫn, đặc biệt với nhiều đợt khuyến mãi đang chờ quý khách :
					<br>
					<br>
					<strong style="color: #B22222;font-size: 18px;padding-top: 30px;">
						<span>Click vào địa điểm bạn muốn đi</br></span>
						<span>( Hoặc gọi ngay hotline: 0969550120 )</span>
					</strong>
					<br>
					<p>---------------------------------------------------------</p>
					<br>				
					<strong style="font-size: 22px;">
						<a href="#">Đà Nẵng</a>
						|
						<a href="#">Hà Nội</a>
						|
						<a href="#">Miền Tây</a>
						|
						<a href="#">Hạ Long</a>
						|
						<a href="#">Nha Trang</a>
						|
						<a href="#">Phú Quốc</a>
						|
						<a href="#">SaPa</a>
						|
						<a href="#">Đà Lạt</a>
						|
						<a href="#">Quy Nhơn</a>
						|
						<a href="#">Phú Yên</a>
						|
						<a href="#">Buôn Mê Thuột</a>
						|
						<a href="#">Vũng Tàu</a>
						|
						<a href="#">Ninh Bình</a>
						|
						<a href="#">Phan Thiết</a>
						|
					</strong>
				</div>
			</div>
		</div>

		<!-- START hiển thị tour -->
		@foreach($tour as $stt=>$tour)
		<div class="tour_list_tn">
			<div class="col-md-12 col-sm-12">
				<div>
					
					<div style="width: 25%;" class="col-md-3 col-sm-3" style="position: relative;">
						<span class="ribbon">
						<p style="color: white;font-size: 14px;padding-left: 10px">Tour bán chạy</p>
					</span>
						<a href="#">
							<img src="../../../public/img/test/{{$tour->avatar}}" style="width: 280px;">
						</a>
					</div>
					<div style="width: 75%;" class="col-md-9 col-sm-9">
						<div class="col-md-8 col-sm-8">
							<span style="font-size: 20px;">
								<a href="#">{{$tour->name}}</a>
							</span>
							<br>
							<div style="padding-top: 10px;padding-bottom: 5px;">	
							<span  class="score">9.4</span>
							<span class="cmt" style="color:#9fc43a;font-weight: bold; ">Tuyệt vời</span>
							<span style="font-size: 14px;">| 7 đánh giá</span>
						    </div>
							<span>Mã:
								<span style="margin-right: 15px;">{{$tour->code}}</span>

							</span>
                            <span class="glyphicon glyphicon-time" style="margin-right: 15px;font-size: 18px"> {{$tour->length}} ngày {{$tour->length-1}} đêm</span>
   
                            <span>Phương tiện :
                            @if ($tour->vehicle=="Máy bay")
    							<span class="fa fa-plane"></span>
							@elseif($tour->vehicle=="Ô tô")
    							<span class="fa fa-car"></span>
    						@else($tour->vehicle=="Tàu hỏa")
    							<span class="fa fa-train"></span>
							@endif
                            
                            <br>
                            <ul class="ul_li" style="padding-top: 10px;">
                            	<li style="padding-right: 15px;">Bà Nà Hill</li>
                            	<li style="padding-right: 15px">Cù Lao Chàm</li>
                            	<li>Ngũ Hành Sơn</li>
                            </ul>

						</div>
						<div class="col-md-4 col-sm-4">
							<div style="padding-left: 50px;padding-top: 15px;">
							<span class="time">Khởi hành:{{$tour->departure}}</span>
							<br>
							<span class="Price" style="font-size: 26px;color: #00c1de">{{$tour->price}}
								<span style="font-size: 15px;color: #00c1de">VNĐ</span>
							</span>
							<br>
							<span class="guest" style="color: rgba(129,129,128,.85);font-size: 13px;">*Áp dụng nhóm 2 khách</span>
						    </div>
							<div class="booking">4 khách đặt 24h qua</div>
						</div>
					</div>

				</div>
			</div>
		</div>
		@endforeach
		<!-- END hiển thị tour -->

				<!-- Start footer -->
	<div id="wrap_footer2">
		<div id="above_footer">
			<h1 style="text-align: center;color: #fff;padding-top: 20px;">Chọn DPV, chọn sự Uy Tín, nhanh gọn và đảm bảo</h1>
			<h3 style="text-align: center;color: #85afdb;">Travel Agency đem đến cho bạn những trải nghiệm tuyệt vời nhất!</h3>
		</div>

		<div id="footer">
			<div id="top_bottom" class="col-md-offset-2">
				<img src="../../../public/images/lo-go.png" style="width: 90px;height: 90px;margin-top: 10px;">
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
