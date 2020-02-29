<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Du lịch nước ngoài | Tour nước ngoài</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
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

	@section('nuoc_ngoai')	

	<div id="body">
		<div id="main_content">
			

			

			<div class="content1">

				<div class="h1_title">
					<h1>Xin chào {{Auth::user()->name}} </h1>
				</div>
				<h2>Đây là trang quản lý tour của bạn</h2>
			</div>
		</div>
		@foreach ($bookings as $element=>$booking)
		@php
		$tour=DB::table('tour_trong_nuoc')
		->where('id','=',$booking->id_tour)
		->first();
		@endphp
		<div class="tour_list">
			<div class="left_tour_list">
				<img src="img/test/{{$tour->avatar}}">

			</div>
			<div class="mid_tour_list">
				<a href="#"><h3 class="h3_tour" style="color: #008fea;">{{$tour->name}}</h3>
				</a>
				<span class="glyphicon glyphicon-map-marker" style="margin-bottom: 10px;font-size: bold;"> {{$tour->lich_trinh}}</span>
				<br>
				<p class="glyphicon glyphicon-time"> Thời lượng: {{$tour->length}} ngày {{$tour->length-1}} đêm</p>
				<p style="color: #eb004f">{{$tour->vehicle}}</p>
				
				<span class="glyphicon glyphicon-calendar">{{$tour->departure}}</span>

				<h3>Thời gian đặt tour: {{$booking->time}}</h3>
				
			</div>
			<div class="right_tour_list">
				<small style="font-size: 14px;font-weight: normal;">
					@php
					if($booking->pay == 1)
						echo '<td><span class="label label-primary">Tiền mặt</span></td>';

					if($booking->pay == 2)
						echo '<td><span class="label label-primary">Chuyển khoản</span></td>'
					@endphp
				</small>
				
				@php
				if($booking->id_status == 0)
					echo '<td><span class="label label-default">Hủy</span></td>';

				if($booking->id_status == 1)
					echo '<td><span class="label label-danger">Chưa cọc</span></td>';

				if($booking->id_status == 2)
					echo '<td><span class="label label-warning">Đã cọc</span></td>';

				if($booking->id_status == 3)
					echo '<td><span class="label label-success">Đã thanh toán</span></td>';
				@endphp

				<script>
// Set the date we're counting down to
				var startLive{{$element}}= new Date( <?php echo strtotime($tour->departure)*1000; ?> );
		// Update the count down every 1 second
				var x = setInterval(function() {
		  // Get today's date and time
		  		var now = new Date().getTime();
		  // Find the distance between now and the count down date
		  		var distance = startLive{{$element}} - now;
		  // Time calculations for days, hours, minutes and seconds
		  		var days = Math.floor(distance / (1000 * 60 * 60 * 24));
		  		var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
		  		var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
		  		var seconds = Math.floor((distance % (1000 * 60)) / 1000);
		  // Output the result in an element with id="demo"
		  		document.getElementById("demo{{$element}}").innerHTML = days + "d " + hours + "h "
		  			+ minutes + "m " + seconds + "s ";

		  // If the count down is over, write some text 
		  		if (distance < 0) {
		  			clearInterval(x);
		  			document.getElementById("demo{{$element}}").innerHTML = "Đã đi";
		  		}
				}, 1000);
			</script>
		<p class="a-book-tour" id="demo{{$element}}"></p>
		<p id="val{{$element}}"></p>
		</div>
		</div>
		@endforeach





<div style="width: 250px;height: 40px;margin-bottom: 50px;margin-left: 450px" class="btn-group">
	<button type="button" class="btn btn-outline-primary">1</button>
	<button type="button" class="btn btn-outline-primary">2</button>
	<button type="button" class="btn btn-outline-primary">3</button>
	<button type="button" class="btn btn-outline-primary">4</button>
	<button type="button" class="btn btn-outline-primary">></button>
	<button type="button" class="btn btn-outline-primary">last</button>
</div>

</div>

@endsection
</body>
</html>
