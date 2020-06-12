<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Du lịch trong nước | Tour trong nước </title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
		<link rel="stylesheet" href="{{asset('css/blog_tour_trong_ngoai.css') }}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
@section('trong_nuoc')

<div id="body">
	<div id="main_content">
			

			<div class="content1">
				<div class="h1_title">
					<h1>Tour trong nước</h1>
				</div>
				<div style="text-align: center;" class="info">
					Các
					
						<strong>tour</strong>
						<strong>Du lịch trong nước</strong>
					
					liên tục được mở bán thường xuyên tại
					<strong>TRAVEL AGENCY</strong>
					với nhiều điểm đến mới hấp dẫn, đặc biệt với nhiều đợt khuyến mãi đang chờ quý khách :
					<br>
					<br>
					<strong style="color: #B22222;font-size: 18px;padding-top: 30px;">
						<span>Click vào địa điểm bạn muốn đi<br></span>
						<span>( Hoặc gọi ngay hotline: 0969550120 )</span>
					</strong>
					<br>
					<p>---------------------------------------------------------</p>
					<br>				
					<strong style="font-size: 22px;">
						<a href="trong-nuoc/da_nang">Đà Nẵng</a>
						|
						<a href="trong-nuoc/ha_noi">Hà Nội</a>
						|
						<a href="trong-nuoc/mien_tay">Miền Tây</a>
						|
						<a href="trong-nuoc/ha_long">Hạ Long</a>
						|
						<a href="trong-nuoc/nha_trang">Nha Trang</a>
						|
						<a href="trong-nuoc/phu_quoc">Phú Quốc</a>
						|
						<a href="trong-nuoc/sapa">SaPa</a>
						|
						<a href="trong-nuoc/da_lat">Đà Lạt</a>
						|
						<a href="trong-nuoc/quy_nhon">Quy Nhơn</a>
						|
						<a href="trong-nuoc/phu_yen">Phú Yên</a>
						|
						<a href="trong-nuoc/buon_ma_thuot">Buôn Mê Thuột</a>
						|
						<a href="trong-nuoc/vung_tau">Vũng Tàu</a>
						|
						<a href="trong-nuoc/ninh_binh">Ninh Bình</a>
						|
						<a href="trong-nuoc/phan_thiet">Phan Thiết</a>
						|
					</strong>
				</div>
			</div>
		</div>

		<!-- START hiển thị tour -->
		@foreach($tour as $stt=>$tour_value)

		{{-- @if($tour_value->so_cho > $tour_value->sochodadat) --}}
 
		@for($k=0;$k<count($tour_code_id);$k++)
			@if($tour_code_id[$k] == $tour_value->id)
		<div class="tour_list_tn row" style="margin-right: 0px; margin-left: 0px;">
				
					<div class="col-12 col-md-4 row" style="position: relative;margin-right: 0px; margin-left: 0px;">
						<a href="{{ route('detail',$tour_value->id) }}">
							<img src="img/test/{{$tour_value->avatar}}" class="col-12">
						</a>
						<span class="ribbon" class="col-3">
							<p style="color: white;font-size: 14px;padding-left: 10px">Tour bán chạy</p>
						</span>
					</div>
					<div class="col-12 col-md-8 row" style="margin-right: 0px; margin-left: 0px;">
						<div class="col-12 col-lg-7 col-md-6 detail">
							<span style="font-size: 20px;">
								<a href="{{ route('detail',$tour_value->id) }}">{{$tour_value->name}}</a>
							</span>
							<br>
							<div style="padding-top: 10px;padding-bottom: 5px;">	
							<span  class="score">9.4</span>
							<span class="cmt" style="color:#9fc43a;font-weight: bold; ">Tuyệt vời</span>
							<span style="font-size: 14px;">| 7 đánh giá</span>
						    </div>
							<span>Mã:
								<span style="margin-right: 15px;">{{$tour_value->code}}</span>

							</span>
                            <span class="glyphicon glyphicon-time" style="margin-right: 15px;font-size: 18px"> {{$tour_value->length}} ngày {{$tour_value->length-1}} đêm</span>
   
                            <span class="transport">Phương tiện :
                            @if ($tour_value->vehicle=="Máy bay")
    							<span class="fa fa-plane"></span>
							@elseif($tour_value->vehicle=="Ô tô")
    							<span class="fa fa-car"></span>
    						@else($tour_value->vehicle=="Tàu hỏa")
    							<span class="fa fa-train"></span>
							@endif
                            </span>
                            <br>

                            {{-- START check điểm đến --}}
                            <ul class="ul_li" style="padding-top: 10px;">
                            		@php
                            			{{$diem_den=(array)$tour_value;
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

                            <p>Số chỗ còn lại : <?php echo $tour_value->so_cho - $tour_value->sochodadat; ?></p>

						</div>
						<div class="col-12 col-lg-5 col-md-6 right-1">
							<div class="" style="padding-top: 15px;">
								<span class="time">Khởi hành:{{$tour_value->departure}}</span>
								<br>
								<span class="Price" style="font-size: 26px;color: #00c1de">{{$tour_value->price}}
									<span style="font-size: 15px;color: #00c1de">VNĐ</span>
								</span>
								<br>
								<span class="guest" style="color: rgba(129,129,128,.85);font-size: 13px;">*Áp dụng nhóm 2 khách</span>
						    </div>
							<div class="booking">4 khách đặt 24h qua</div>
						</div>
					</div>

				
		</div>
			@endif
		@endfor

		{{-- @endif --}}
		@endforeach
		<div style="padding-left: 320px;padding-top:50px;padding-bottom: 80px;" class="btn-group">
			{{-- <div class="col-md-4">{{$tours->links()}}</div></div> --}}
		</div>
		<!-- END hiển thị tour -->
</div>
@endsection
</body>
</html>