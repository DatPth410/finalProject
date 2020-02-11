
@extends('master.home')
@section('content')
		<!-- Start search -->
		<div id="search">
			<div class="row">
				<div class="col-md-offset-2 col-md-10">
					<p style="color:#fff; margin-top: 120px;font-size: 34px;font-weight:bold;">ĐẶT TOUR DU LỊCH !</p>					
					<p style="color:#fff; font-size: 25px;">Hơn 300 Tour du lịch hấp dẫn ở Việt Nam và trên thế giới</p>

					<div class="row">
						<div class="col-md-7" style="margin-top: 20px;">
							<input type="text" class="form-control focus input-lg" placeholder="Text input" id="search_tour">

							<div class="row" style="margin-top: 20px;">
								<div class="col-md-5">
									<input type="date" name="date" id="dateinput" class="form-control focus input-lg">
								</div>

								<div class="col-md-5" style="margin-left: -6px; ">
									<select type="text" class="form-control focus input-lg">
										<option selected="">Điểm khởi hành</option>
										<option>2</option>
										<option>3</option>
									</select>
								</div>

								<div class="col-md-2" style="margin-left: -6px; ">
									<button type="button" class="btn btn-warning btn-lg">Tìm kiếm</button>
								</div>
							</div>
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
							<h1>Example headline.</h1>
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
				<p><img src="../../../public/images/sale-icon.jpg" id="sale-icon">Combo Tour - giảm giá mạnh</p>
			</div>
			
			<div class="love">
					<img src="../../../public/images/thung-nai-hoa-binh-1.jpg" class="fade_images">

				<a href="detail.php"><div class="middle">
					<div class="text">Xem thêm</div>
				</div></a>

				<div class="content_bottom">
					<p class="text_bottom">Thung Nai - Ninh Bình</p>
				</div>
			</div>

			<div class="love">
					<img src="../../../public/images/diem-du-lich-da-lat-ly-tuong-cho-gia-dinh.jpg" class="fade_images">

				<a href="#"><div class="middle">
					<div class="text">Xem thêm</div>
				</div></a>

				<div class="content_bottom">
					<p class="text_bottom">Đà Lạt</p>
				</div>
			</div>

			<div class="love">
					<img src="../../../public/images/Gold-Coast.jpg" class="fade_images">

				<a href="#"><div class="middle">
					<div class="text">Xem thêm</div>
				</div></a>

				<div class="content_bottom">
					<p class="text_bottom">Đà Nẵng</p>
				</div>
			</div>

			<div class="see_all">
				<a href="#"><p>Xem tất cả <span class="glyphicon glyphicon-chevron-right"></span></p></a>
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
				<div class="col-sm-6 col-md-4">
					<div class="thumbnail">
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
						<a href="#"><img src="../../../public/images/Gold-Coast.jpg" alt="..."></a>

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
				<div class="col-md-3 col-sm-6">
					<a href="#">
						<img src="../../../public/images/Gold-Coast.jpg" class="exp_photo">
					</a>
				</div>

				<div class="col-md-3 col-sm-6">
					<a href="#"><p class="exp_title">Khu du lịch ....</p></a>
					<br>
					<p class="exp_below_title">Chỗ này rất tuyệt vời</p>
				</div>

				<div class="col-md-3 col-sm-6">
					<a href="#">
						<img src="../../../public/images/Gold-Coast.jpg" class="exp_photo">
					</a>
				</div>

				<div class="col-md-3 col-sm-6">
					<a href="#"><p class="exp_title">Khu du lịch ....</p></a>
					<br>
					<p class="exp_below_title">Chỗ này rất tuyệt vời</p>
				</div>									
			</div>

			<div class="see_all_2">
				<a href="#"><p><span class="glyphicon glyphicon-backward" style="font-size: 15px;margin-right:10px;"></span>Xem tất cả<span class="glyphicon glyphicon-forward" style="font-size: 15px;margin-left:10px;"></span></p></a>
			</div>
		</div>
	</div>
		<!-- End kinh nghiệm du lịch -->

@endsection
