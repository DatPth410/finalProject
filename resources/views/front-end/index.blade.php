<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mạng bán tour du lịch uy tín nhất Việt Nam</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/myCss.css">
	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<script>
		$( function() {
			var availableTags = <?php echo json_encode($data_array); ?>;
			$( "#tags" ).autocomplete({
				source: availableTags
			});
			$( "#tag" ).autocomplete({
				source: availableTags
			});
		} );
	</script>
</head>
<body>

	@extends('master.home')

	@section('home')
	<!-- Start search -->
	
	<div id="search">
		<div class="row">
			<div class="col-md-offset-2 col-md-10">
				<p style="color:#fff; margin-top: 120px;font-size: 34px;font-weight:bold;">ĐẶT TOUR DU LỊCH !</p>					
				<p style="color:#fff; font-size: 25px;">Hơn 300 Tour du lịch hấp dẫn ở Việt Nam và trên thế giới</p>

				<div class="row">
					<div class="col-md-7" style="margin-top: 20px;">
						
						{{-- startform --}}
						<form action="{{route('save-find')}}" method="POST" role="form">
							@csrf
							<div class="row" style="margin-top: 20px;">
								<div class="col-md-6 ui-widget">
									<label for="tags" style="color: white; font-size: 18px;">Nơi khởi hành: </label>
									<input id="tags" name="name" class="form-control">
								</div>

								<div class="col-md-6 ui-widget">
									<label for="tag" style="color: white; font-size: 18px;">Điểm đến: </label>
									<input id="tag" name="arrived" class="form-control">
								</div>
							</div>
							<div class="row" style="margin-top: 20px;">
								<div class="col-md-5">
									<input type="date" name="date" id="dateinput" class="form-control focus input-lg">
								</div>

								<div class="col-md-5" style="margin-left: -12px; ">
									<select name="price" class="form-control focus input-lg">
										<option value="0">Chọn mức giá của bạn</option>
										<option value="1">0đ-5.000.000đ</option>
										<option value="2">5.000.000đ-15.000.000đ</option>
										<option value="3">Lớn hơn 15.000.000đ</option>
									</select>
								</div>

								<div class="col-md-2" style="margin-left: -12px; ">
									<button type="submit" class="btn btn-warning btn-lg">Tìm kiếm</button>
								</div>
							</div>
						</form>
					</div>


					<div class="col-md-3">
						<p style="color:#fff; font-size: 22px;">Mua Tour Nhật Bản và Hàn Quốc để có một mùa xuân ngắm hoa anh đào cực đã với giá chỉ từ</p>
						<p style="color:#fff; font-size: 26px;font-weight: bold;">9.000.000đ</p>
					</div>

				</div>
			</div>
		</div>
	</div>
	<!-- End search -->

	<!-- Start Các điểm đến được yêu thích -->

	<div id="block_1">
		<div id="carousel-id" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#carousel-id" data-slide-to="0" class=""></li>
				<li data-target="#carousel-id" data-slide-to="1" class=""></li>
				<li data-target="#carousel-id" data-slide-to="2" class="active"></li>
			</ol>
			<div class="carousel-inner">
				<div class="item">
					<img data-src="holder.js/900x500/auto/#777:#7a7a7a/text:First slide" alt="First slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzc3NyI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojN2E3YTdhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+Rmlyc3Qgc2xpZGU8L3RleHQ+PC9zdmc+">
					<div class="container">
						<div class="carousel-caption">
							<h1>tour của chúng tôi</h1>
							<p>Note: If you're viewing this page via a <code>file://</code> URL, the "next" and "previous" Glyphicon buttons on the left and right might not load/display properly due to web browser security rules.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Sign up today</a></p>
						</div>
					</div>
				</div>
				<div class="item">
					<img data-src="holder.js/900x500/auto/#666:#6a6a6a/text:Second slide" alt="Second slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzY2NiI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNmE2YTZhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+U2Vjb25kIHNsaWRlPC90ZXh0Pjwvc3ZnPg==">
					<div class="container">
						<div class="carousel-caption">
							<h1>Another example headline.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="item active">
					<img data-src="holder.js/900x500/auto/#555:#5a5a5a/text:Third slide" alt="Third slide" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSI5MDAiIGhlaWdodD0iNTAwIj48cmVjdCB3aWR0aD0iOTAwIiBoZWlnaHQ9IjUwMCIgZmlsbD0iIzU1NSI+PC9yZWN0Pjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjQ1MCIgeT0iMjUwIiBzdHlsZT0iZmlsbDojNWE1YTVhO2ZvbnQtd2VpZ2h0OmJvbGQ7Zm9udC1zaXplOjU2cHg7Zm9udC1mYW1pbHk6QXJpYWwsSGVsdmV0aWNhLHNhbnMtc2VyaWY7ZG9taW5hbnQtYmFzZWxpbmU6Y2VudHJhbCI+VGhpcmQgc2xpZGU8L3RleHQ+PC9zdmc+">
					<div class="container">
						<div class="carousel-caption">
							<h1>One more for good measure.</h1>
							<p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Browse gallery</a></p>
						</div>
					</div>
				</div>
			</div>
			<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
			<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		</div>
	</div>
	<!-- End Các điểm đến được yêu thích -->


	<!-- Start Các Tour đang sale -->
	<div id="block_2">
		<div class="content">
			<div class="content_title">
				<p><img src="images/sale-icon.jpg" id="sale-icon">Combo Tour - giảm giá mạnh</p>
			</div>
			@foreach ($sale_tour as $element=>$tour)
				{{-- expr --}}
			
			<div class="love">

				<img src="img/test/{{$tour->avatar}}" class="fade_images">

				<a href="{{ route('detail',$tour->id) }}"><div class="middle">
					<div class="text">Xem thêm</div>
				</div></a>

				<div class="content_bottom">
					<div class="sale_box">{{$tour->khuyen_mai}}%</div>
					<p class="text_bottom" style="padding-left: 35px;">{{$tour->name}}</p>
				</div>
			</div>
			@endforeach
			

			<div class="see_all">
				<a href="{{ route('khuyen-mai') }}"><p>Xem tất cả <span class="glyphicon glyphicon-chevron-right"></span></p></a>
			</div>
		</div>
	</div>
	<!-- End Các Tour đang sale -->


	<!-- Start tour trong nước -->
	<div id="block_3">
		<div class="content_2">
			<div class="content_title">
				<p class="glyphicon glyphicon-plane"><span class="tour_text">Tour trong nước</span></p>
			</div>
		</div>

		<div class="tour_content">
			<div class="row">
				@foreach ($six_tours as $element=>$tour)
					{{-- expr --}}
				
				<div class="col-sm-6 col-md-4" >
					<div class="thumbnail">
						<a href="{{ route('detail',$tour->id) }}"><img src="img/test/{{$tour->avatar}}" style="height: 200px;"></a>

						<div class="caption" style="height: 200px;">
							<h3>{{$tour->name}}</h3>
							<p>...</p>
							<p class="glyphicon glyphicon-time"><span class="tour_text_tiny">{{$tour->length}} ngày {{$tour->length-1}} đêm</span></p>

							<br>
							<p class="glyphicon glyphicon-calendar"><span class="tour_text_tiny">{{$tour->departure}}</span></p>

							<div class="price_tour">
								<p>{{number_format($tour->price)}}</p>
							</div>
						</div>

						
					</div>
				</div>
				@endforeach

				
			</div>

			
		</div>

		<div class="see_all_2">
			<a href="{{ route('trong-nuoc') }}"><p><span class="glyphicon glyphicon-backward" style="font-size: 15px;margin-right:10px;"></span>Xem tất cả<span class="glyphicon glyphicon-forward" style="font-size: 15px;margin-left:10px;"></span></p></a>
		</div>
	</div>
	<!-- End tour trong nước -->


	<!-- Start tour ngoài nước -->
	<div id="block_4">
		<div class="content_2">
			<div class="content_title">
				<p class="glyphicon glyphicon-plane"><span class="tour_text">Tour nước ngoài</span></p>
			</div>
		</div>

		<div class="tour_content">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<a href="#"><img src="images/Gold-Coast.jpg" alt="..."></a>

						<div class="caption">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="glyphicon glyphicon-time"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="glyphicon glyphicon-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<a href="#"><img src="images/Gold-Coast.jpg" alt="..."></a>

						<div class="caption">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="glyphicon glyphicon-time"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="glyphicon glyphicon-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<a href="#"><img src="images/Gold-Coast.jpg" alt="..."></a>

						<div class="caption">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="glyphicon glyphicon-time"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="glyphicon glyphicon-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<a href="#"><img src="images/Gold-Coast.jpg" alt="..."></a>

						<div class="caption">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="glyphicon glyphicon-time"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="glyphicon glyphicon-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<a href="#"><img src="images/Gold-Coast.jpg" alt="..."></a>

						<div class="caption">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="glyphicon glyphicon-time"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="glyphicon glyphicon-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<a href="#"><img src="images/Gold-Coast.jpg" alt="..."></a>

						<div class="caption">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="glyphicon glyphicon-time"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="glyphicon glyphicon-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>

		<div class="see_all_2">
			<a href="#"><p><span class="glyphicon glyphicon-backward" style="font-size: 15px;margin-right:10px;"></span>Xem tất cả<span class="glyphicon glyphicon-forward" style="font-size: 15px;margin-left:10px;"></span></p></a>
		</div>		
	</div>
	<!-- End tour ngoài nước -->


	<!-- Start kinh nghiệm du lịch -->
	<div id="block_5">
		<div class="content_3">
			<div class="content_title">
				<p class="glyphicon glyphicon-book"><span class="tour_text">Kinh nghiệm - cẩm nang du lịch</span></p>
			</div>
			<div class="below_content_title">
				<p>Tin tức - cẩm nang - kinh nghiệm - kí ức - chia sẻ về các chuyến đi</p>
			</div>
		</div>	

		<div class="exp_content">
			<div class="row">
				@foreach ($four_news as $element=>$news)
					{{-- expr --}}
					<div class="col-md-3 col-sm-6">
					<a href="#">
						<img src="img/test/{{$news->avatar}}" class="exp_photo">
					</a>
				</div>

				<div class="col-md-3 col-sm-6">
					<a href="#"><p class="exp_title">{{$news->title}}</p></a>
					<br>
					<p class="exp_below_title">{{$news->title}}</p>
				</div>
				@endforeach
				

				

			<div class="see_all_2">
				<a href="{{ route('cam-nang') }}"><p><span class="glyphicon glyphicon-backward" style="font-size: 15px;margin-right:10px;"></span>Xem tất cả<span class="glyphicon glyphicon-forward" style="font-size: 15px;margin-left:10px;"></span></p></a>
			</div>
		</div>
	</div>
	<!-- End kinh nghiệm du lịch -->

	@endsection
</body>
</html>