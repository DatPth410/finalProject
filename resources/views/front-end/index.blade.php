<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mạng bán tour du lịch uy tín nhất Việt Nam</title>
	<base href="{{asset('')}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	{{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> --}}
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
		<div class="row"  style="margin-top: -100px;" >
			<div class="col-md-offset-2 col-md-10">
				<p style="color:#fff; margin-top: 120px;font-size: 28px;font-weight:bold;">ĐẶT TOUR DU LỊCH !</p>					
				<p style="color:#fff; font-size: 22px;">Hơn 300 Tour du lịch hấp dẫn ở Việt Nam và trên thế giới</p>

				<div class="row">
					<div class="col-md-12">
						
						{{-- startform --}}
						<form action="{{route('save-find')}}" method="POST" role="form">
							@csrf
							<div class="row">
								<div class="col-md-6 ui-widget" >
									<label for="tags" style="color: white; font-size: 18px;">Nơi khởi hành: </label>
									<input id="tags" name="name" class="form-control">
								</div>

								<div class="col-md-6 ui-widget" >
									<label for="tag" style="color: white; font-size: 18px;">Điểm đến: </label>
									<input id="tag" name="arrived" class="form-control">
								</div>
							</div>
							<div class="row no-gutters" style="margin-top: 10px;">
								<div class="col-md-5">
									<input type="date" name="date" id="dateinput" class="form-control focus input-lg">
								</div>

								<div class="col-md-5" >
									<select name="price" class="form-control focus input-lg" style="margin-left: 15px;">
										<option value="0">Chọn mức giá của bạn</option>
										<option value="1">0đ-5.000.000đ</option>
										<option value="2">5.000.000đ-15.000.000đ</option>
										<option value="3">Lớn hơn 15.000.000đ</option>
									</select>
								</div>

								<div class="col-md-2">
									<button type="submit" class="btn btn-warning" style="float: right;">Tìm</button>
								</div>
							</div>
						</form>

					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- End search -->

	<!-- Start slider -->

	<div id="block_1">
		 <div id="carouselExampleIndicators" class="carousel slide background-carousel" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block  img-item" src="img/1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>My Caption Title (1st Image)</h5>
                    <p>The whole caption will only show up if the screen is at least medium size.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block  img-item" src="img/10.jpeg" alt="Second slide">
            </div>
            <div class="carousel-item">
                <img class="d-block  img-item" src="img/5.jpg" alt="Third slide">
            </div>
        </div>
        {{-- <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a> --}}
    </div>


	</div>
	<!-- End slider -->


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
				<a href="{{ route('khuyen-mai') }}"><p>Xem tất cả <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg></p></a>
			</div>
		</div>
	</div>
	<!-- End Các Tour đang sale -->


	<!-- Start tour trong nước -->
	<div id="block_3">
		<div class="content_2">
			<div class="content_title">
				<p class="fa fa-paper-plane"><span class="tour_text">Tour trong nước</span></p>
			</div>
		</div>

		<div class="tour_content">
			<div class="row">
				@foreach ($six_tours as $element=>$tour)
					{{-- expr --}}
				
				<div class="col-sm-6 col-md-4" >
					<div class="card" style="width: 18rem;">
						<a href="{{ route('detail',$tour->id) }}"><img src="img/test/{{$tour->avatar}}" style="height: 200px;"></a>

						<div class="card-body">
							<h3>{{$tour->name}}</h3>
							<p>...</p>
							<p class="fa fa-clock-o"><span class="tour_text_tiny">{{$tour->length}} ngày {{$tour->length-1}} đêm</span></p>

							<br>
							<p class="fa fa-calendar"><span class="tour_text_tiny">{{$tour->departure}}</span></p>

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
			<a href="#"><p><span class="fa fa-chevron-left" style="font-size: 15px;margin-right:10px;"></span>Xem tất cả<span class="fa fa-chevron-right" style="font-size: 15px;margin-left:10px;"></span></p></a>
		</div>
	</div>
	<!-- End tour trong nước -->


	<!-- Start tour ngoài nước -->
	<div id="block_4">
		<div class="content_2">
			<div class="content_title">
				<p class="fa fa-paper-plane"><span class="tour_text">Tour nước ngoài</span></p>
			</div>
		</div>

		<div class="tour_content">
			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
						<a href="#"><img src="images/Gold-Coast.jpg" class="card-img-top" alt="..."></a>

						<div class="card-body">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="fa fa-clock-o"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="fa fa-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
						<a href="#"><img src="images/Gold-Coast.jpg" class="card-img-top" alt="..."></a>

						<div class="card-body">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="fa fa-clock-o"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="fa fa-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
						<a href="#"><img src="images/Gold-Coast.jpg" class="card-img-top" alt="..."></a>

						<div class="card-body">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="fa fa-clock-o"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="fa fa-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
						<a href="#"><img src="images/Gold-Coast.jpg" class="card-img-top" alt="..."></a>

						<div class="card-body">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="fa fa-clock-o"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="fa fa-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
						<a href="#"><img src="images/Gold-Coast.jpg" class="card-img-top" alt="..."></a>

						<div class="card-body">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="fa fa-clock-o"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="fa fa-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>

				<div class="col-sm-6 col-md-4">
					<div class="card" style="width: 18rem;">
						<a href="#"><img src="images/Gold-Coast.jpg" class="card-img-top" alt="..."></a>

						<div class="card-body">
							<h3>Hà Nội - Hạ Long - Cao Bằng</h3>
							<p>...</p>
							<p class="fa fa-clock-o"><span class="tour_text_tiny">4 ngày 3 đêm</span></p>

							<br>
							<p class="fa fa-calendar"><span class="tour_text_tiny">28-08-2020</span></p>

							<div class="price_tour">
								<p>12.000.000</p>
							</div>
						</div>

						
					</div>
				</div>
			</div>
		</div>

		<div class="see_all_2">
			<a href="#"><p><span class="fa fa-chevron-left" style="font-size: 15px;margin-right:10px;"></span>Xem tất cả<span class="fa fa-chevron-right" style="font-size: 15px;margin-left:10px;"></span></p></a>
		</div>		
	</div>
	<!-- End tour ngoài nước -->


	<!-- Start kinh nghiệm du lịch -->
	<div id="block_5">
		<div class="content_3">
			<div class="content_title">
				<p class="fa fa-book"><span class="tour_text">Kinh nghiệm - cẩm nang du lịch</span></p>
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
				<a href="{{ route('cam-nang') }}"><p><span class="fa fa-chevron-left" style="font-size: 15px;margin-right:10px;"></span>Xem tất cả<span class="fa fa-chevron-right" style="font-size: 15px;margin-left:10px;"></span></p></a>
			</div>
		</div>
	</div>
	<!-- End kinh nghiệm du lịch -->

	@endsection
</body>
</html>