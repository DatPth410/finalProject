<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<!-- <link rel="stylesheet" href="css/bootstrap.min.css"/> -->
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>

	<!-- <script type="text/javascript" src="js/admin.js"></script> -->
</head>
<body>
	@include('admin.header.menu')
	<div class="body">
		@include('admin.header.header')
		<div class="content">
			<div id="kjm-block-holder">
				<!-- <div class="kjm-hover-block">
					<a href="#">
						<div id="kjm-block-ten" class="kjm-block">
						</div>
						<div class="kjm-block-text">
							<h2 class="kjm-pricetext">$10 Steals</h2>
							<button class="btn kjm-button">Shop</button>
						</div>
					</a>
				</div> -->

				<div class="kjm-hover-block">
					
						<div id="kjm-block-1" class="kjm-block">
						</div>
						<div class="kjm-block-text">
							<h2 class="kjm-pricetext">Quản lý tour</h2>
							<a href="{{route('add-tour')}}" style="text-align: center;"><button class="btn kjm-button">Thêm</button></a>
							<a href="#" style="text-align: center;margin-top: -18px;"><button class="btn kjm-button">Quản lý</button></a>
						</div>
					
				</div>
				<div class="kjm-hover-block">
					
						<div id="kjm-block-2" class="kjm-block">
						</div>
						<div class="kjm-block-text">
							<h2 class="kjm-pricetext">Quản lý tin tức</h2>
							<a href="{{route('add-news')}}" style="text-align: center;"><button class="btn kjm-button">Thêm</button></a>
							<a href="#" style="text-align: center;margin-top: -18px;"><button class="btn kjm-button">Quản lý</button></a>
						</div>
					
				</div>
				<div class="kjm-hover-block line-2">
					
						<div id="kjm-block-3" class="kjm-block">
						</div>
						<div class="kjm-block-text">
							<h2 class="kjm-pricetext">Booking</h2>
							<button class="btn kjm-button">Quản lý</button>
						</div>
					
				</div>
				<div class="kjm-hover-block line-2">
					
						<div id="kjm-block-4" class="kjm-block">
						</div>
						<div class="kjm-block-text">
							<h2 class="kjm-pricetext">Quản lý liên hệ</h2>
							<button class="btn kjm-button">Quản lý</button>
						</div>
					
				</div>

			</div>
		</div>
	</div>

</body>
</html>