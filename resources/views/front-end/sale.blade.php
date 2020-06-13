<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Du lịch nước ngoài | Tour nước ngoài</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	{{--  <link rel="stylesheet" href="css/bootstrap.min.css" />  --}}
	{{-- <link rel="stylesheet" href="css/blog_tour_trong_ngoai.css"> --}}
	<link rel="stylesheet" type="text/css" href="{{ asset('css/blog_tour_trong_ngoai.css') }}">
	<style>
		body{
			overflow-x: hidden;
		  }
		  html{
			  overflow-x: hidden;
		  }
	</style>
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
		<div class="container-fluid">
			<div class="row">
				<div class="col-10">
				@foreach ($sale_list as $record=>$tour)
				<div class="tour_list_tn row" style="margin-right: 0px; margin-left: 0px;">
						
					<div class="col-12 col-md-4 row" style="position: relative;margin-right: 0px; margin-left: 0px;">
						<a href="{{ route('detail',$tour->id) }}">
							<img src="img/test/{{$tour->avatar}}" class="col-12">
						</a>
						<span class="ribbon" class="col-3">
							<p style="color: white;font-size: 14px;padding-left: 10px">Tour bán chạy</p>
						</span>
					</div>
					<div class="col-12 col-md-8 row" style="margin-right: 0px; margin-left: 0px;">
						<div class="col-12 col-lg-7 col-md-6 detail">
							<span style="font-size: 20px;">
								<a href="{{ route('detail',$tour->id) }}">{{$tour->name}}</a>
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
		
							<span class="transport">Phương tiện :
							@if ($tour->vehicle=="Máy bay")
								<span class="fa fa-plane"></span>
							@elseif($tour->vehicle=="Ô tô")
								<span class="fa fa-car"></span>
							@else($tour->vehicle=="Tàu hỏa")
								<span class="fa fa-train"></span>
							@endif
							</span>
							<br>
		
		
						</div>
						<div class="col-12 col-lg-5 col-md-6 right-1">
							<div class="" style="padding-top: 15px;">
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
				@endforeach
				<div class="row">
					<div style="col-12">
						<div class="btn-group">
							<div class="col-md-4">{{$sale_list->links()}}</div></div>
						</div>
					</div>
				</div>
				
			</div>
				
			</div>
			
		</div>
		

		


		

		

	</div>

@endsection
</body>
</html>
