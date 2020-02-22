<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cẩm nang du lịch</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
</head>
<body>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
	<div class="container">
@extends('master.home')
@section('cam_nang')
         
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
					<div class="left-content">
						<div class="col-md-12 col-sm-12">
							@foreach($exp as $stt=>$exp)
							<div class="new-content">
								<a href="tin_tuc.php">
									<div class="img">
										<img src="img/test/{{$exp->avatar}}" style="width: 400px;height: 280px">
									</div>

									<div class="content">
										<h3>{{$exp->title}}</h3>
									</div>
								</a>
								<div style="padding-top: 10px" class="views">
									<span style="padding-right: 20px;color: #999999;font-size: 14px;margin-bottom: 10px;" class="glyphicon glyphicon-calendar"> {{$exp->ngay_dang}}
									</span>
									<span class="glyphicon glyphicon-eye-open" style="color: #999999;
									font-size: 14px;
									margin-bottom: 10px;"> 228 View
								    </span>
								<p style="margin-bottom: 10px;">{{$exp->tom_tat}}</p>

								<span class="like_share">
								 <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true"></div>
								</span>
							</div>
						</div>
						@endforeach
											
		</div>
	</div>


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
			<div class="news">
				<div class="img2">
					<a href="#">
						<img src="images/bia-sex-show-o-thai-lan.jpg" style="padding-top: 20px;" width="80px"; height="100px">
					</a>
				</div>
				<div class="title">
					<a href="#">
						<h5 style="color: #222222;">Sex show Big Eyes ở Thái Lan có gì hay?</h5>
					</a>
					<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 12/02/2019 </span>
				</div>
			</div>
			<div class="news">
				<div class="img2">
					<a href="#">	    				
						<img src="images/191_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
					</a>
				</div>
				<div class="title">
					<a href="#">
						<h5 style="color: #222222;">Bật mí 10 khách sạn uy tín ở Sầm Sơn, đẹp và mới nhất từ 2017 đến 2019</h5>
					</a>
					<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 09/02/2019 </span>
				</div>
			</div>
			<div class="news">
				<div class="img2">
					<a href="#">	    				
						<img src="images/191_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
					</a>
				</div>
				<div class="title">
					<a href="#">
						<h5 style="color: #222222;">Bật mí cho bạn những khách sạn Đà Lạt đẹp gần trung tâm nhất</h5>
					</a>
					<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 09/04/2019 </span>
				</div>
			</div>
			<div class="news">
				<div class="img2">
					<a href="#">	    				
						<img src="images/4_anh-nen.jpg" style="padding-top: 20px;" width="80px"; height="100px">
					</a>
				</div>
				<div class="title">
					<a href="#">
						<h5 style="color: #222222;">Kinh nghiệm du lịch đảo Jeju Hàn Quốc 2019</h5>
					</a>
					<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 31/01/2019 </span>
				</div>
			</div>
			<div class="news">
				<div class="img2">
					<a href="#">	    				
						<img src="images/171_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
					</a>
				</div>
				<div class="title">
					<a href="#">
						<h5 style="color: #222222;">10 gợi ý đi du lịch Phú Yên nên mua gì về làm quà cho người thân tốt nhất</h5>
					</a>
					<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 06/03/2019 </span>
				</div>
			</div>
			<div class="news">
				<div class="img2">
					<a href="#">	    				
						<img src="images/nuoc-ngoai-thang-2.jpg" style="padding-top: 20px;" width="80px"; height="100px">
					</a>
				</div>
				<div class="title">
					<a href="#">
						<h5 style="color: #222222;">Những điểm du lịch nước ngoài Hot nhất tháng 2 năm 2019</h5>
					</a>
					<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 03/02/2019 </span>
				</div>
			</div>
			<div class="news">
				<div class="img2">
					<a href="#">	    				
						<img src="images/1_phuong-hoang-co-tran-mua-dong.jpg" style="padding-top: 20px;" width="80px"; height="100px">
					</a>
				</div>
				<div class="title">
					<a href="#">
						<h5 style="color: #222222;">Phượng Hoàng Cổ Trấn mùa đông có gì đặc biệt?</h5>
					</a>
					<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 28/11/2018 </span>
				</div>
			</div>
			<div class="news">
				<div class="img2">
					<a href="#">	    				
						<img src="images/26_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
					</a>
				</div>
				<div class="title">
					<a href="#">
						<h5 style="color: #222222;">Đi du lịch Phú Quốc nên mặc gì để phù hợp nhất</h5>
					</a>
					<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 05/01/2019 </span>
				</div>
			</div>
			<div class="news">
				<div class="img2">
					<a href="#">	    				
						<img src="images/178_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
					</a>
				</div>
				<div class="title">
					<a href="#">
						<h5 style="color: #222222;">7 khách sạn ở Cửa Lò có bể bơi tốt nhất đẹp nhất và mới nhất</h5>
					</a>
					<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 17/03/2019 </span>
				</div>
			</div>
			<div class="news">
				<div class="img2">
					<a href="#">	    				
						<img src="images/184_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
					</a>
				</div>
				<div class="title">
					<a href="#">
						<h5 style="color: #222222;">9 khách sạn Cửa Lò gần biển đẹp, chất lượng tuyệt vời và giá tốt nhất 2019</h5>
					</a>
					<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 25/03/2019 </span>
				</div>
			</div>

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
</div>
</div>

@endsection
</body>
</html>