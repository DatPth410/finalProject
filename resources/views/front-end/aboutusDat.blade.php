<!DOCTYPE html>
<html>
<head>
	<title>About us</title>
	<link rel="stylesheet" type="text/css" href="css/aboutus.css">
	{{-- <link rel="stylesheet" href="css/bootstrap.min.css"/> --}}
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/aboutus.js"></script>
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
@section('ve_chung_toi')
<div class="container-fluid" style="margin-top: 200px">
	<div class="row">
		<div class="col-sm-12 col-md-4 col-lg-4" style="text-align: center;
        display: block;">
			<img src="img/logo.png" width="60%">
		</div>
		<div class="col-sm-12 col-md-8 col-lg-8">
			<h1 class="header_all">Chúng tôi là ai?</h1>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
			<p>Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua.</p>
			<p>Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat.</p>
		</div>
	</div>
</div>
<div class="container-fluid">
	<h1 class="header_all">Tại sao nên chọn chúng tôi</h1>
	<div class="row">
		<div class="col-sm-12 col-md-4 col-lg-4 image_layout" style="background-image: url('img/4.jpg'); background-size: cover; background-position: center; height: 400px;">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4 box_layout">
					GIÁ CẢ HỢP LÝ
				</div>
			</div>
		</div>

		<div class="col-sm-12 col-md-4 col-lg-4 image_layout" style="background-image: url('img/10.jpeg'); background-size: cover; background-position: center; height: 400px;">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4 box_layout">
					TRẢI NGHIỆM KHÓ QUÊN
				</div>
			</div>
		</div>

		<div class="col-sm-12 col-md-4 col-lg-4 image_layout" style="background-image: url('img/11.jpeg'); background-size: cover; background-position: center; height: 400px;">
			<div class="row">
				<div class="col-sm-4 col-md-4 col-lg-4 box_layout">
					DỊCH VỤ HOÀN HẢO
				</div>
			</div>
		</div>
	</div>
</div>
<h1 class="header_all">Cung cấp dịch vụ đa dạng</h1>
<div class="cont">
	<div class="app">
		<div class="app__bgimg">
			<div class="app__bgimg-image app__bgimg-image--1">
			</div>
			<div class="app__bgimg-image app__bgimg-image--2">
			</div>
		</div>
		<div class="app__img">
			<img onmousedown="return false" src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/whiteTest4.png" alt="city" />
		</div>
		
		<div class="app__text app__text--1">
			<div class="app__text-line app__text-line--4">Du lịch trong nước </div>
			<div class="app__text-line app__text-line--3">Đi từ Bắc đến Nam</div>
			<div class="app__text-line app__text-line--2">Trải nghiệm cùng chúng tôi ngay</div>
			<div class="app__text-line app__text-line--1"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/opus-attachment.png" alt="" /></div>
		</div>
		
		<div class="app__text app__text--2">
			<div class="app__text-line app__text-line--4">Du lịch nước ngoài</div>
			<div class="app__text-line app__text-line--3">Đa dạng các điểm đến</div>
			<div class="app__text-line app__text-line--2">Trải nghiệm cùng chúng tôi ngay</div>
			<div class="app__text-line app__text-line--1"><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/537051/opus-attachment.png" alt="" /></div>
		</div>
	</div>
	<div class="pages">
		<ul class='pages__list'>
			<li data-target='1' class='pages__item pages__item--1 page__item-active'></li>
			<li data-target='2' class='pages__item pages__item--2'></li>
		</ul>
	</div>
</div>
<div class="container-fluid padding">
	<h1 class="header_all">Thành viên</h1>
	<div class="row padding">
		<div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom: 30px;">
			<div class="card text-whitex">
			  <img class="card-img-top" src="img/profile/tuan_1.jpg">
			  <div class="card-body">
				<h4 class="card-title">Lê Anh Tuấn</h4>
				<p class="card-text">Fullstack-Developer</p>
				<p class="card-text">Đại học Bách Khoa Hà Nội</p>
			  </div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom: 30px;">
			<div class="card text-whitex">
			  <img class="card-img-top" src="img/profile/long_1.jpg">
			  <div class="card-body">
				<h4 class="card-title">Đinh Tuấn Long</h4>
				<p class="card-text">Fullstack-Developer</p>
				<p class="card-text">Đại học Kinh tế Quốc dân</p>
			  </div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom: 30px;">
			<div class="card text-whitex">
			  <img class="card-img-top" src="img/profile/thanh2.png">
			  <div class="card-body">
				<h4 class="card-title">Nguyễn Trung Thành</h4>
				<p class="card-text">Fullstack-Developer</p>
				<p class="card-text">Đại học Kinh tế Quốc dân</p>
			  </div>
			</div>
		</div>
		<div class="col-sm-12 col-md-6 col-lg-3" style="margin-bottom: 30px;">
			<div class="card text-whitex">
			  <img class="card-img-top" src="img/profile/IMG_7006_1.jpg">
			  <div class="card-body">
				<h4 class="card-title">Phạm Thành Đạt</h4>
				<p class="card-text">Fullstack-Developer</p>
				<p class="card-text">Đại học Bách Khoa Hà Nội</p>
			  </div>
			</div>
		</div>
	</div>
</div>
@endsection
</body>
</html>