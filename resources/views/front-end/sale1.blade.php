<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Du lịch nước ngoài | Tour nước ngoài</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	{{-- <link rel="stylesheet" href="css/blog_tour_trong_ngoai.css"> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/blog_tour_trong_ngoai.css') }}">
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

@section('sale')	

	<div id="body">
		<div id="main_content">
			{{-- <div style="padding-top: 20px;" class="navigation">
				<span><a href="#">Trang chủ</a></span>
				<span class="glyphicon glyphicon-chevron-right"></span>
				<span><a href="#">Tour khuyến mãi</a></span>
			</div> --}}

			

			<div class="content1">

				<div style="text-align: center;">
					<h1>Tour Khuyến Mãi</h1>
				</div>
				<div style="text-align: center;" class="info">
					
					
					
					<br>
					<p>---------------------------------------------------------</p>
					<br>				
					<strong style="color: #B22222;font-size: 18px;padding-top: 30px;">
						<span>Chọn khuyến mãi phù hợp với bạn<br></span>
						<span>( Hoặc gọi ngay hotline: 0969550120 )</span>
					</strong>
				</div>
			</div>
		</div>
@foreach ($sale_list as $element=>$tour)
	<div class="tour_list">
			<div class="left_tour_list">
				<div class="sale_box">{{$tour->khuyen_mai}}%</div>
				<a href="{{ route('detail',$tour->id) }}"><img src="img/test/{{$tour->avatar}}"></a>

			</div>
			<div class="mid_tour_list">
				<a href="{{ route('detail',$tour->id) }}"><h3 class="h3_tour" style="color: #008fea;">{{$tour->name}}</h3>
				</a>
				<span class="glyphicon glyphicon-map-marker" style="margin-bottom: 10px;font-size: bold;"> Hành trình: {{$tour->lich_trinh}}</span>
				<br>
				<p class="glyphicon glyphicon-time"> Thời lượng: {{$tour->length}} ngày {{$tour->length-1}} đêm</p>
				<p style="color: #eb004f">{{$tour->vehicle}}</p>
				<p>Khởi hành:{{$tour->noi_khoi_hanh}}</p>
				<span class="glyphicon glyphicon-calendar"> {{$tour->departure}}</span>
			</div>
			<div class="right_tour_list">
				<small style="font-size: 14px;font-weight: normal;">Giá còn</small>
				<span style="font-size: 22px;font-weight: normal;">VNĐ</span>
				<p class="pricel" style="font-size: 22px;font-family: SF-UI-Text-Semibold; color: #f1d50e;text-decoration-line: line-through;">{{number_format($tour->price)}}</p>

				<p class="pricel" style="font-size: 22px;font-family: SF-UI-Text-Semibold; color: #f1d50e; ">{{number_format(intval(($tour->price)*(100-$tour->khuyen_mai)/100))}}</p>
				<p>/người</p>
				<a class="a-book-tour" href="{{ route('detail',$tour->id) }}">Đặt ngay</a>
			</div>
		</div>
@endforeach
		


		

		<div style="padding-left: 400px;padding-top:50px;padding-bottom: 80px;" class="btn-group">
			<div class="col-md-4">{{$sale_list->links()}}</div></div>
		</div>

	</div>

@endsection
</body>
</html>
