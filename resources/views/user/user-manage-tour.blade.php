<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<title>Du lịch nước ngoài | Tour nước ngoài</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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

<script type="text/javascript">
	$.ajaxSetup({
    	headers: {
        	'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    	}
	});

	var ratedIndex = -1;

	$(document).ready(function() { 
		// resetStarColors();

		// if (localStorage.getItem('ratedIndex') != null) {
		// 	setStars(parseInt(localStorage.getItem('ratedIndex')));
		// }

		$(".fa-star").on('click',function(){
			ratedIndex = parseInt($(this).data('index'));
			id_tour = parseInt($(this).attr('title'));
			//localStorage.setItem('ratedIndex',ratedIndex);

			//ajax pass data to controller through route
			var myJsonData = {rating: ratedIndex, id_tour: id_tour };
			$.post('user-manage-tour/rating',myJsonData,function(data){
				location.reload();
			})
			
		})

		// $(".fa-star").mouseover(function(){
		// 	resetStarColors();
		// 	var currentIndexvalue = parseInt($(this).data('index'));
		// 	setStars(currentIndexvalue);
		// })

		// $(".fa-star").mouseleave(function(){
		// 	resetStarColors();

		// 	if (ratedIndex != -1) {
		// 		setStars(ratedIndex);
		// 	}
		// })

		function resetStarColors(){
			$(".fa-star").css('color','black');
		}

		function setStars(max){
			for (var i = 0; i <= max; i++) {
				$('.fa-star:eq('+i+')').css('color','yellow');
			}
		}

	}); 
</script> 

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

		$id_tour=$tour->id;

		$user = auth()->user();

		$rating = DB::table('tbl_rating')->where('id_user','=',$user->id)
        ->where('id_tour','=',$id_tour)
        ->orderBy('time','desc')
        ->get()
        ->first();

        $currentTime = strtotime(date('Y-m-d H:i:s')) ;
        $tourTime = strtotime($tour->departure);

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
				
				{{-- START rating stars --}}
				<div id="rating-stars">
				@if($tourTime - $currentTime < 0)
					<span>Đánh giá:</span>
					@if(isset($rating))
						@for($i = 0; $i < $rating->rating; $i++)
							<i class="fa fa-star fa-2x symbol-{{$tour->id}}" data-index="{{$i}}" style="color: yellow;" title="{{$tour->id}}" ></i>
						@endfor
						@for($j = $rating->rating ;$j < 5; $j++)
							<i class="fa fa-star fa-2x" data-index="{{$j}}" style="color: grey" title="{{$tour->id}}"></i>
						@endfor
					@else
						<i class="fa fa-star fa-2x" data-index="0" title="{{$tour->id}}" ></i>
						<i class="fa fa-star fa-2x" data-index="1" title="{{$tour->id}}" ></i>
						<i class="fa fa-star fa-2x" data-index="2" title="{{$tour->id}}" ></i>
						<i class="fa fa-star fa-2x" data-index="3" title="{{$tour->id}}" ></i>
						<i class="fa fa-star fa-2x" data-index="4" title="{{$tour->id}}" ></i>
					@endif
				@endif
				</div>
				
				{{-- END rating stars --}}
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
			<p style="margin-top: 8px">Chỉ còn</p>
		<p class="a-book-tour" id="demo{{$element}}"></p>
		<p id="val{{$element}}"></p>
		</div>
		</div>
		@endforeach





<div style="width: 250px;height: 40px;margin-bottom: 50px;margin-left: 350px" class="btn-group">
	{{$bookings->links()}}
</div>

</div>

@endsection
</body>
</html>
