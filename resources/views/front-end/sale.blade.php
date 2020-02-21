<!DOCTYPE html>
<html>
<head>
	<title>Khuyến mại</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="css/sale.css">
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
</head>
<body>

@extends('master.home')

@section('sale')
<div class="big_wrapper">
	{{-- @php
		echo "<pre>";
		print_r($sale_list);
		echo "<pre/>";
	@endphp --}}
	

	<div style="min-height: 200px; width: 100%; background-color: #141e28;">
		<div class="option" style="margin-left: 7.5%;">
			<h2>Giá cả cạnh tranh</h2>
			<span class="glyphicon glyphicon-euro"></span>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		</div>

		<div class="option" style="margin-left: 5%;">
			<h2>Khách hàng tin dùng</h2>
			<span class="glyphicon glyphicon-user"></span>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		</div>

		<div class="option" style="margin-left: 5%;">
			<h2>Dịch vụ hoàn hảo</h2>
			<span class="glyphicon glyphicon-camera"></span>
			<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
		</div>
	</div>

	<div class="all_sale">
		<div class="tour_list">
			<div class="left_tour_list">
				<a href="#"><img src="images/1_du-lich-uc-tu-ha-noi.jpg"></a>

			</div>
			<div class="mid_tour_list">
				<a href="#"><h3 class="h3_tour" style="color: #008fea;">Du lịch Úc từ Hà Nội, tour hot 2019</h3></a>
				<span class="glyphicon glyphicon-map-marker" style="margin-bottom: 10px;font-size: bold;"> Hành trình : MELBOURNE – CANBERRA – SYDNEY</span>
				<br>
				<p class="glyphicon glyphicon-time"> Thời lượng: 7 ngày 6 đêm</p>
				<p style="color: #eb004f">Máy bay + Ô tô</p>
				<p>Khởi hành: Hà Nội - TP Hồ Chí Minh</p>

			</div>
			<div class="right_tour_list">
				<small style="font-size: 14px;font-weight: normal;">Giá từ</small>
				<span style="font-size: 22px;font-weight: normal;">VNĐ</span>
				<p class="pricel" style="font-size: 22px;font-family: SF-UI-Text-Semibold; color: #f1d50e;">
				47,990,000            </p>
				<p>/người</p>
				<a class="a-book-tour" href="#l">Đặt ngay</a>
			</div>
		</div>

		
			<ul class="pagination" style="margin-left: 43%;">
				<li><a href="#">&laquo;</a></li>
				<li><a href="#">1</a></li>
				<li><a href="#">2</a></li>
				<li><a href="#">3</a></li>
				<li><a href="#">4</a></li>
				<li><a href="#">5</a></li>
				<li><a href="#">&raquo;</a></li>
			</ul>
		
	</div>
</div>
@endsection
</body>
</html>