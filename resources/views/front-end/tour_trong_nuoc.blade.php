<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Du lịch trong nước | Tour trong nước </title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

@extends('master.home')
@section('trong_nuoc')
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
							<img src="img/test/{{$tour->avatar}}" style="width: 280px;">
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

                            {{-- START check điểm đến --}}
                            <ul class="ul_li" style="padding-top: 10px;">
                            		@php
                            			{{$diem_den=(array)$tour;
        								$des=explode(" ", $diem_den['diem_den']);
        							}}
        							@endphp

        							@for($j=0;$j<count($destination_id_array);$j++)
        								@for($i=0;$i<count($des);$i++)
        									@if($des[$i]==$destination_id_array[$j])
                            					<li style="padding-right: 15px">{{$destination_name_array[$j]}}</li>
                            				@endif
                            			@endfor
        							@endfor
                            </ul>
                            {{-- END check điểm đến --}}

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

@endsection
</body>
</html>
