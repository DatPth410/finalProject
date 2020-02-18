<!DOCTYPE html>
<html>
<head>
	<title>Khuyến mại</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" type="text/css" href="css/sale.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
	<script type="text/javascript" src="js/jquery-ui.min.js"></script>
	{{-- <script type="text/javascript" src="js/sale.js"></script> --}}
</head>
<body>

@extends('master.home')

@section('sale')
<div class="big_wrapper">
	<div class="week_sale">
		<h1 class="title head1" style="margin-top: 90px;">KHUYẾN MÃI CHO BẠN</h1>
		<h3 class="title head1">Số lượng có hạn</h3>
		<br>
		<div class="float_week_sale" id="left">
			<!-- <h1>Xem thêm</h1> -->
			<div class="top_price" id="sale_number">
				<h3>50%</h3>
			</div>
			<div class="top_price" id="sale_price1">
				<h4>26.000.000</h4>
			</div>
			<div class="top_price" id="sale_price2">
				<h2>13.000.000</h2>
			</div>
			<div id="content">
				<h1>Hanoi</h1>
				<h3>Vietnam</h3>
				<p>3 ngày 2 đêm</p>
				<p>Đã có vé máy bay khứ hồi</p>
				<p>Khởi hành: 13.01.2020</p>
			</div>
			<div id="button1">
				<button type="button" class="btn btn-danger">Chi tiết</button>
			</div>
			
		</div>
		<div class="float_week_sale" id="right">
			<div class="top_price" id="sale_number">
				<h3>50%</h3>
			</div>
			<div class="top_price" id="sale_price1">
				<h4>40.000.000</h4>
			</div>
			<div class="top_price" id="sale_price2">
				<h2>20.000.000</h2>
			</div>
			<div class="content_left">
				<h1>Maldives</h1>
				<h3>Philippines</h3>
				<p>3 ngày 2 đêm</p>
				<p>Đã có vé máy bay khứ hồi</p>
				<p>Khởi hành: 13.01.2020</p>
			</div>
			<div class="button1_left">
				<button type="button" class="btn btn-danger">Chi tiết</button>
			</div>
		</div>
		<div class="float_week_sale" id="right2">
			<div class="top_price" id="sale_number">
				<h3>50%</h3>
			</div>
			<div class="top_price" id="sale_price1">
				<h4>36.000.000</h4>
			</div>
			<div class="top_price" id="sale_price2">
				<h2>18.000.000</h2>
			</div>
			<div class="content_left">
				<h1>Bangkok</h1>
				<h3>Thailand</h3>
				<p>3 ngày 2 đêm</p>
				<p>Đã có vé máy bay khứ hồi</p>
				<p>Khởi hành: 13.01.2020</p>
			</div>
			<div class="button1_left">
				<button type="button" class="btn btn-danger">Chi tiết</button>
			</div>
		</div>
		<br>
	</div>

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
		<h1 class="title head2">TẤT CẢ CÁC KHUYẾN MÃI</h1>
		<h3 class="title head2">Bạn có thể tìm tất cả các khuyến mãi ở đây</h3>
		<br>
		<div class="devide left">
			<div class="inside ava" id="all_1">
				<div class="sale">
					10%
				</div>
			</div>
			<div class="inside content">
				<p><span class="new_price">14.000.000</span> <span class="old_price">15.000.000</span></p>
				<h3>Hội An - Việt Nam</h3>
				<p>3 ngày 2 đêm</p>
				<p>Đã có vé máy bay khứ hồi</p>
				<p>Khởi hành: 13.01.2020</p>
				<div class="button2">
					<button type="button" class="btn btn-danger" >Detail</button>
				</div>

			</div>
			
		</div>
		<div class="devide right">
			<div class="inside ava" id="all_2">
				<div class="sale">
					15%
				</div>
			</div>
			<div class="inside content">
				<p><span class="new_price">17.000.000</span> <span class="old_price">20.000.000</span></p>
				<h3>Singapore</h3>
				<p>3 ngày 2 đêm</p>
				<p>Đã có vé máy bay khứ hồi</p>
				<p>Khởi hành: 13.01.2020</p>
				<div class="button2">
					<button type="button" class="btn btn-danger">Detail</button>
				</div>
			</div>
		</div>
		<div class="devide left">
			<div class="inside ava" id="all_3">
				<div class="sale">
					10%
				</div>
			</div>
			<div class="inside content">
				<p><span class="new_price">14.000.000</span> <span class="old_price">15.000.000</span></p>
				<h3>Legian - Indonesia</h3>
				<p>3 ngày 2 đêm</p>
				<p>Đã có vé máy bay khứ hồi</p>
				<p>Khởi hành: 13.01.2020</p>
				<div class="button2">
					<button type="button" class="btn btn-danger">Detail</button>
				</div>

			</div>
			
		</div>
		<div class="devide right">
			<div class="inside ava" id="all_4">
				<div class="sale">
					15%
				</div>
			</div>
			<div class="inside content">
				<p><span class="new_price">17.000.000</span> <span class="old_price">20.000.000</span></p>
				<h3>Bagan - Myanmar</h3>
				<p>3 ngày 2 đêm</p>
				<p>Đã có vé máy bay khứ hồi</p>
				<p>Khởi hành: 13.01.2020</p>
				<div class="button2">
					<button type="button" class="btn btn-danger">Detail</button>
				</div>
			</div>
		</div>
		<div class="devide left">
			<div class="inside ava" id="all_5">
				<div class="sale">
					10%
				</div>
			</div>
			<div class="inside content">
				<p><span class="new_price">14.000.000</span> <span class="old_price">15.000.000</span></p>
				<h3>Vientiane - Lào</h3>
				<p>3 ngày 2 đêm</p>
				<p>Đã có vé máy bay khứ hồi</p>
				<p>Khởi hành: 13.01.2020</p>
				<div class="button2">
					<button type="button" class="btn btn-danger">Detail</button>
				</div>

			</div>
			
		</div>
		<div class="devide right">
			<div class="inside ava" id="all_6">
				<div class="sale">
					15%
				</div>
			</div>
			<div class="inside content">
				<p><span class="new_price">17.000.000</span> <span class="old_price">20.000.000</span></p>
				<h3>Koh Rong Sanloem</h3>
				<p>3 ngày 2 đêm</p>
				<p>Đã có vé máy bay khứ hồi</p>
				<p>Khởi hành: 13.01.2020</p>
				<div class="button2">
					<button type="button" class="btn btn-danger">Detail</button>
				</div>
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