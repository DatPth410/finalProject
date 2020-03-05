<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Du lịch nước ngoài|Tour nước ngoài</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	{{--  <link rel="stylesheet" href="css/bootstrap.min.css" />  --}}
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
	<style>
		img {
			max-width: 100%;
			max-height: 100%;
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

@section('nuoc_ngoai')	
<div class="container-fluid" style="margin-top: 160px;">
	<div class="row">
		<div class="col-10">
			<div class="row">
				
			
		@if (count($list_tour)==0)
				
				
				<h3>Không có kết quả nào cho chuyến đi mà bạn đang tìm kiếm.</h3>

		@else
			
		<div class="col-sm-12 col-md-5 col-lg-5">
			<h3 style="color: #df1b7c;">Kết quả tìm kiếm chuyến đi:</h3>
		</div>
		<div class="col-sm-12 col-md-7 col-lg-7">
			<h3>
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
			</h3>
		</div>
		@endif
	</div>
</div>
	</div>
</div>
<div class="container-fluid">
	<div class="row">
		<div class="col-10">
		@foreach ($list_tour as $record=>$tour)
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

					

					<p>Số chỗ còn lại : <?php echo $tour->so_cho - $tour->sochodadat; ?></p>

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
	</div>
		
	</div>
</div>

@endsection
</body>
</html>