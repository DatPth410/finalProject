<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Du lịch nước ngoài|Tour nước ngoài</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
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

@section('nuoc_ngoai')	
<div id="body">
		<div id="main_content">
			<h3>Kết quả tìm kiếm cho chuyến đi:</h3>
			<h2>
				@php
					
					if ($name!="%") echo "Khởi hành từ ".$name."<br/>";
					if ($arrived!="%") echo "Đi tới ".$arrived."<br/>";
					if ($price!="0"){
						if ($price==1) {
							# code...
							echo "Với mức giá từ 0 VNĐ đến 5.000.000 VNĐ";
						}elseif ($price==2) {
							# code...
							echo "Với mức giá từ 5.000.000 VNĐ đến 15.000.000 VNĐ";
						}else{
							echo "Với mức giá từ 15.000.000 VNĐ trở lên";
						}
					}
					
				@endphp
			</h2>
			@if (count($list_tour)==0)
				{{-- expr --}}
				@php
					echo "Không có kết quả nào cho chuyến đi mà bạn đang tìm kiếm."
				@endphp

			@endif
	@foreach($list_tour as $stt=>$tour)
		<div class="tour_list">
			<div class="left_tour_list">
				<a href="img/test/{{$tour->avatar}}"><img src="img/test/{{$tour->avatar}}"></a>

			</div>
			<div class="mid_tour_list">
				<a href="#"><h3 class="h3_tour" style="color: #008fea;">{{$tour->name}}</h3>
				</a>
				<span class="glyphicon glyphicon-map-marker" style="margin-bottom: 10px;font-size: bold;"> Hành trình</span>
				<br>
				<p class="glyphicon glyphicon-time"> Thời lượng: {{$tour->length}} ngày {{$tour->length-1}} đêm</p>
				@if ($tour->vehicle=="Máy bay")
    							<span class="fa fa-plane"></span>
							@elseif($tour->vehicle=="Ô tô")
    							<span class="fa fa-car"></span>
    						@else($tour->vehicle=="Tàu hỏa")
    							<span class="fa fa-train"></span>
							@endif
				<p>Khởi hành:{{$tour->noi_khoi_hanh}}</p>
				<span class="glyphicon glyphicon-calendar">{{$tour->departure}}</span>
			</div>
			<div class="right_tour_list">
				<small style="font-size: 14px;font-weight: normal;">Giá:</small>
				<span style="font-size: 22px;font-weight: normal;">VNĐ</span>
				<p class="pricel" style="font-size: 22px;font-family: SF-UI-Text-Semibold; color: #f1d50e;">
				{{$tour->price}}</p>
				<p>/người</p>
				<a class="a-book-tour" href="#l">Đặt ngay</a>
			</div>
		</div>
	@endforeach

			<br/>
	<a class="a-book-tour" href="{{ route('trang-chu') }}">Về trang chủ</a>
		</div>
	</div>


@endsection
</body>
</html>