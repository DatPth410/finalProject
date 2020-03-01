<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MẠNG BÁN TOUR DU LỊCH SỐ 1 VIỆT NAM</title>
	{{-- <link rel="stylesheet" href="css/bootstrap.min.css" /> --}}
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5e57c6a0298c395d1cea1e95/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->

<body>
	@extends('master.home')
	@section('cam_nang1')
	<div class="container">

    	<div id="main_content">
				<div style="margin-bottom: 20px;" class="t_c">
					<span><a href="#">Trang chủ  > </a></span>
					<span><a href="#"> KINH NGHIỆM DU LỊCH</a></span>
				</div>

				<div class="imgs">
				<div class="row">
					<div   class="col-md-3 col-sm-12">
						<a href="#">
							<img style="height: 456px;width: 280px;" src="images/tour-trong-nuoc.png">
						</a>
					</div>
					<div  class="col-md-6 col-sm-12">
						<a href="#">
							<img style="height: 456px;width: 565px;text-align: center;" src="images/lich-khoi-hanh-tour-nuoc-ngoai.png">
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
											<img src="img/test/{{$news->avatar}}" style="height: 260px;width: 400px">
										</div>

										<div class="content1">
											<h3>{{$news->title}}</h3>
										</div>
									</a>
									<div style="padding-top: 10px" class="views">
										<span style="padding-right: 20px;color: #999999;font-size: 14px;margin-bottom: 10px;" class="fa fa-calendar"> {{$news->ngay_dang}}
										</span>
										<span class="fa fa-eye" style="color: #999999;
										font-size: 14px;
										margin-bottom: 10px;"> 228 View
									</span>
									<p style="margin-bottom: 10px;">{{$news->tom_tat}}</p>

									<i style="padding-top: 40px;padding-bottom: 0px;">
										<button type="button" class="btn btn-primary btn-sm"><span class="glyphicon glyphicon-thumbs-up"> Like</span><span> 0</span></button>
										<button type="button" class="btn btn-primary btn-sm">Share</button>
									</i>
								</div>
							</div>
						</div>
							@endforeach


			<div style="padding-top: 40px;" class="btn-group">
				{{$exp->links()}}
			</div>

		</div>
	</div>
					
<div class="col-md-3 col-sm-12">
	<div style="margin-top: 40px;width: 300px" class="tim_kiem">
		<form action="" method="POST" class="form-inline" role="form">

			<div class="form-group">
				<label class="sr-only" for="">label</label>
				<input type="text" class="form-control" id="" name="search" placeholder="TÌm kiếm tin tức...">
			</div>
			<button type="button" class="btn btn-danger"><a href="#" style="float: right;"><img src="images/i-search-mini.png"></a></button>
		</form>
	</div>

	<div style="padding-top: 20px;" class="menu_news">
		<div class="category" style="border-bottom: double;">
			<ul class="nav nav-tabs">
				<li role="presentation" class="active"><a href="#">Xem nhiều nhất</a></li>
				<li role="presentation"><a href="#">Mới nhất</a></li>
			</ul>
		</div>
		<div class="list_news">
			@foreach ($exp_news as $element=>$news)
				{{-- expr --}}
				<div class="news">
				<div class="img2">
					<a href="tin_tuc?id={{$news->id}}">
						<img src="img/test/{{$news->avatar}}" style="padding-top: 20px;" width="90px" height="105px">
					</a>
				</div>
				<div class="title">
					<a href="tin_tuc?id={{$news->id}}">
						<h7 style="color: #222222;">{{$news->title}}</h7>
					</a>
					<span style="color: #999999;font-size: 13px;" class="fa fa-calendar"> {{$news->ngay_dang}}</span>
				</div>
			</div>
			@endforeach
			
			
		</div>

	</div>

	<div class="handbook" style="width: 300px">
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
@endsection
</body>
</html>