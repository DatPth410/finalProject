<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mạng bán tour du lịch uy tín nhất Việt Nam</title>
	<base href="{{asset('')}}">

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/index.css">
{{-- 	<link rel="stylesheet" type="text/css" href="css/myCss.css">
 --}}	<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
	{{-- <script src="https://code.jquery.com/jquery-1.12.4.js"></script> --}}
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	<link href="https://fonts.googleapis.com/css?family=Josefin+Sans|Poppins" rel="stylesheet">
	
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

	<script type="text/javascript">
		$(document).ready(function(){
			<?php
				if (isset($_GET['success'])) { ?>
					$("#success_notification").show().delay(3000).fadeOut();
				
			<?php }else { ?>
				$("#success_notification").hide();
			<?php } ?>
		})
	</script>
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

	@section('home')
	<!-- Start search -->
	{{-- TEST box chat --}}


	

	<div id="search">
		<div class="row" style="position: relative;">

			{{-- START success message --}}
			<div class="alert alert-success" id="success_notification" style="width: 235px;height: 55px;text-align: center;position: absolute;margin-top: 65px;margin-left: 840px;">
  				<div>Đặt tour thành công!</div>	
  			</div>
  			{{-- END success message --}}

			<div class="col-md-offset-2 col-md-10">
				<p style="color:#fff; font-size: 28px;font-weight:bold; margin-top: 200px;">ĐẶT TOUR DU LỊCH !</p>					
				<p style="color:#fff; font-size: 22px;">Hơn 300 Tour du lịch hấp dẫn ở Việt Nam và trên thế giới</p>

				<div class="row">
					<div class="col-md-12">
						
						{{-- startform --}}
						<form style="background-color: white; backface-visibility: 2%; padding: 30px;" action="{{route('save-find')}}" method="POST" role="form">
							@csrf
							<div class="row">
								<div class="col-md-6 ui-widget" >
									<label for="tags" style="color: #0c427a; font-size: 18px;">Nơi khởi hành: </label>
									<input style="height: 40px;font-size: 20px;" id="tags" name="name" class="form-control">
								</div>

								<div class="col-md-6 ui-widget" >
									<label for="tag" style="color: #0c427a; font-size: 20px;">Điểm đến: </label>
									<input style="height: 40px;font-size: 20px;" id="tag" name="arrived" class="form-control">
								</div>
							</div>
							<div class="row no-gutters" style="margin-top: 18px;">
								<div class="col-md-6">
									<label for="tag" style="color: #0c427a; font-size: 18px;">Ngày khởi hành: </label>
									<input style="height: 40px;font-size: 20px;" type="date" name="date" id="dateinput" class="form-control focus input-lg">
								</div>

								<div class="col-md-6" >
									<label for="tag" style="color: #0c427a; font-size: 18px;">Mức giá: </label>
									<select style="height: 40px;font-size: 20px;" name="price" class="form-control focus input-lg" style="margin-left: 15px;">
										<option value="0">Chọn mức giá của bạn</option>
										<option value="1">0đ-5.000.000đ</option>
										<option value="2">5.000.000đ-15.000.000đ</option>
										<option value="3">Lớn hơn 15.000.000đ</option>
									</select>
								</div>
								
							</div>
							<div class="row no-gutters">
								<div class="align-self-end">
									<button type="submit" class="btn btn-warning" style="width: 100px; height: 50px; margin-top: 20px; font-size: 22px">Tìm</button>
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
        <div class="container-fluid px-0">
		    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
		        <div class="carousel-inner bg-info" role="listbox">
		            <div class="carousel-item active">
		                <div class="d-flex align-items-center justify-content-center min-vh-100" style="background-image: url('img/21.jpg'); background-position: center center;background-size: cover;box-shadow: inset 0 0 0 50vw rgba(0,0,0,0.35);">
		                    <h1 style="margin-top: 230px; color: white;text-align: center;"></h1>
		                </div>
		            </div>
		            <div class="carousel-item">
		                <div class="d-flex align-items-center justify-content-center min-vh-100" style="background-image: url('img/10.jpeg'); background-position: center center;background-size: cover;box-shadow: inset 0 0 0 50vw rgba(0,0,0,0.35);">
		                    <h1 style="margin-top: 230px; color: white;text-align: center;"></h1>
		                </div>
		            </div>
		            <div class="carousel-item">
		                <div class="d-flex align-items-center justify-content-center min-vh-100" style="background-image: url('img/20.jpeg'); background-position: center center;background-size: cover;box-shadow: inset 0 0 0 50vw rgba(0,0,0,0.35);">
		                    <h1 style="margin-top: 230px; color: white;text-align: center;"></h1>
		                </div>
		            </div>
		        </div>
		        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
		            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		            <span class="sr-only">Previous</span>
		        </a>
		        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
		            <span class="carousel-control-next-icon" aria-hidden="true"></span>
		            <span class="sr-only">Next</span>
		        </a>
		    </div>
		</div>
    </div>
	<!-- End slider -->


	<!-- Start Các Tour đang sale -->
	<div id="block_2" class="box">
        <div class="container">
            <h2 class="heading">
            	<img src="images/sale-icon.jpg" id="sale-icon">Combo Tour - giảm giá mạnh
            </h2>
            <div class="row">
	            @foreach ($sale_tour as $element=>$tour)
					<div class="col-md-4 tour-sale">
	                    <figure class="text-center">
	                    	<a href="{{ route('detail',$tour->id) }}">
	                        	<img src="img/test/{{$tour->avatar}}" alt="{{$tour->name}}">
	                    	</a>
	                        <figcaption>
	                            <h5 style="color: red">- {{$tour->khuyen_mai}}%</h5>
	                            <a href="{{ route('detail',$tour->id) }}"><h3>{{$tour->name}}</h3></a>
	                        </figcaption>
	                    </figure>
	                </div>
				@endforeach
            </div>
            <div class="see_all">
				<a href="{{ route('khuyen-mai') }}"><p>Xem tất cả <svg class="bi bi-chevron-right" width="24" height="24" viewBox="0 0 20 20" fill="currentColor" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6.646 3.646a.5.5 0 01.708 0l6 6a.5.5 0 010 .708l-6 6a.5.5 0 01-.708-.708L12.293 10 6.646 4.354a.5.5 0 010-.708z" clip-rule="evenodd"/></svg></p></a>
			</div>
        </div>
    </div>
	<!-- End Các Tour đang sale -->
	

	{{-- Start các điểm đến yêu thích --}}
	<div id="block_2ruoi">
		<div class="content_2">
			<h2 class="heading">
	        	<p class="fa fa-heart"> Các điểm đến yêu thích
	        </h2>		
	        <h3 style="text-align: center; margin-top: -25px"><p>Lên núi xuống biển. Trọn vẹn Việt Nam</p></h3>
		</div>

		<div class="tour_content">
			
	            <div class="grid">
	                <div class="row">
	                    @php
							$date = date('Y-m-d', time());
							$i=1;
		        			$j=1;
		        			$num=0;
							$destination=DB::table('tbl_diemden')->limit(9)->get();
							$tour=DB::table('tour_trong_nuoc')->whereDate('departure','>',$date)->get();
						@endphp
						@foreach($destination as $key => $destination_value)
							@if($j==4 || $j==5)
							<div class="col-12 col-md-6">
			                    <figure class="effect-ravi"><a href="trong-nuoc/{{$destination_value->code}}">
			                        <img style="height: 300px;width: 100%;" src="img/{{$destination_value->img}}" alt="{{$destination_value->ten}}" /></a>
			                        <figcaption>
			                            <h2 ><span>{{$destination_value->ten}}</span></h2></figcaption>
			                            <p>
			                                <a href="trong-nuoc/{{$destination_value->code}}"><i class="fa fa-search"></i></a>
			                            </p>
			                        </figcaption>
			                    </figure>
			                </div>
							
							@elseif($j==6)
							
							<div class="col-12">
			                    <figure class="effect-ravi"><a href="trong-nuoc/{{$destination_value->code}}">
			                        <img style="height: 100px;width: 100%;" src="img/{{$destination_value->img}}" alt="{{$destination_value->ten}}" /></a>
			                        <figcaption>
			                            <h2 ><span>{{$destination_value->ten}}</span></h2></figcaption>
			                            <p>
			                                <a href="trong-nuoc/{{$destination_value->code}}"><i class="fa fa-search"></i></a>
			                            </p>
			                        </figcaption>
			                    </figure>
			                </div>

			                @else
			                <div class="col-12 col-md-4">
			                	<figure class="effect-ravi"><a href="trong-nuoc/{{$destination_value->code}}">
			                        <img style="height: 250px;width: 100%;" src="img/{{$destination_value->img}}" alt="{{$destination_value->ten}}" /></a>
			                        <figcaption>
			                            <h2 ><span>{{$destination_value->ten}}</span></h2></figcaption>
			                            <p>
			                                <a href="trong-nuoc/{{$destination_value->code}}"><i class="fa fa-search"></i></a>
			                            </p>
			                        </figcaption>
			                    </figure>
			                </div>
			                
							@endif
							<?php $j++; ?>
						@endforeach
	                </div>
	            </div>

        	
					
		</div>
	</div>
	{{-- End các điểm đến yêu thích --}}

	<!-- Start tour trong nước -->
	<div id="block_3">
		<div class="content_3">
			<h2 class="heading">
	        	<p class="fa fa-paper-plane"> Tour trong nước
	        </h2>		
		</div>
		<div class="container">
		   <section class="section-tours">
		      <div class="row">
		      	@foreach ($six_tours as $element=>$tour)
		         <div class="col-lg-4 col-md-4 mb-4">
		            <div class="my-flip-container">
		               <div class="my-flip-inner my-flip-right">
		                  <div class="my-flip-inner-wrapper">
		                     <div class="my-flip-side my-flip-front">
		                        <div class="my-flip-image my-flip-image--1">
		                           <a href="{{ route('detail',$tour->id) }}"><img src="img/test/{{$tour->avatar}}"></a>                  
		                        </div>
		                        <div class="my-flip-details">
		                           <h4 class="my-flip-heading">{{$tour->name}}</h4>
		                           <div class="my-flip-text">
		                             <p class="fa fa-clock-o card-text"><span class="tour_text_tiny"> {{$tour->length}} ngày {{$tour->length-1}} đêm</span></p>

									<br>
									<p class="fa fa-calendar card-text"><span class="tour_text_tiny"> {{$tour->departure}}</span></p>
		                           </div>
		                        </div>
		                     </div>
		                     <div class="my-flip-side my-flip-back my-flip-back-1">
		                        <div class="my-flip-back-inner">
		                           <div class="my-flip-price">
		                              <h3>ONLY</h3>
		                           </div>
		                           <div class="my-flip-back-text">
		                              <h3>{{number_format($tour->price)}}</h3>
		                           </div>
		                           <div class="my-flip-btn-box"><a href="{{ route('detail',$tour->id) }}" class="my-flip-btn"><h3 style="color: blue">ĐẶT NGAY</<h3></h3>></a></div>
		                        </div>
		                     </div>
		                  </div>
		               </div>
		            </div>
		         </div>
		        @endforeach
		      </div>
		   </section>
		</div>
		<div class="see_all_2">
			<a href="{{ route('trong-nuoc') }}"><p><span class="fa fa-chevron-left" style="font-size: 15px;margin-right:10px;"></span>Xem tất cả<span class="fa fa-chevron-right" style="font-size: 15px;margin-left:10px;"></span></p></a>
		</div>
	</div>
	<!-- End tour trong nước -->


	<!-- Start tour ngoài nước -->
	<div id="block_4">
		<div class="content_4">
			<h2 class="heading">
	        	<p class="fa fa-paper-plane"> Tour nước ngoài
	        </h2>		
		</div>
		<div class="container">
		   <section class="section-tours">
		      <div class="row">
		      	@foreach ($six_tours as $element=>$tour)
		         <div class="col-lg-4 col-md-4 mb-4">
		            <div class="my-flip-container">
		               <div class="my-flip-inner my-flip-right">
		                  <div class="my-flip-inner-wrapper">
		                     <div class="my-flip-side my-flip-front">
		                        <div class="my-flip-image my-flip-image--1">
		                           <a href="{{ route('detail',$tour->id) }}"><img src="img/test/{{$tour->avatar}}"></a>                  
		                        </div>
		                        <div class="my-flip-details">
		                           <h4 class="my-flip-heading">{{$tour->name}}</h4>
		                           <div class="my-flip-text">
		                             <p class="fa fa-clock-o card-text"><span class="tour_text_tiny">{{$tour->length}} ngày {{$tour->length-1}} đêm</span></p>

									<br>
									<p class="fa fa-calendar card-text"><span class="tour_text_tiny">{{$tour->departure}}</span></p>
		                           </div>
		                        </div>
		                     </div>
		                     <div class="my-flip-side my-flip-back my-flip-back-2">
		                        <div class="my-flip-back-inner">
		                           <div class="my-flip-price">
		                              <h3>ONLY</h3>
		                           </div>
		                           <div class="my-flip-back-text">
		                              <h3>{{number_format($tour->price)}}</h3>
		                           </div>
		                           <div class="my-flip-btn-box"><a href="{{ route('detail',$tour->id) }}" class="my-flip-btn"><h3 style="color: blue">ĐẶT NGAY</<h3></h3>></a></div>
		                        </div>
		                     </div>
		                  </div>
		               </div>
		            </div>
		         </div>
		        @endforeach
		      </div>
		   </section>
		</div>
		<div class="see_all_2">
			<a href="{{ route('trong-nuoc') }}"><p><span class="fa fa-chevron-left" style="font-size: 15px;margin-right:10px;"></span>Xem tất cả<span class="fa fa-chevron-right" style="font-size: 15px;margin-left:10px;"></span></p></a>
		</div>
	</div>
	<!-- End tour ngoài nước -->


	<!-- Start kinh nghiệm du lịch -->
	<div id="block_5">
		<div class="content_5">
			<h2 class="heading">
	        	<p class="fa fa-paper-plane"> Kinh nghiệm - Cẩm nang du lịch
	        </h2>		
		</div>

		<div class="exp_content">
			<div class="row">
				@foreach ($four_news as $element=>$news)
				{{-- expr --}}
				<div class="container py-3">
				    <div class="card">
				      <div class="row ">
				        <div class="col-md-4">
				            <a href="tin_tuc?id={{$news->id}}">
								<img style="height: 150px" src="img/test/{{$news->avatar}}" class="exp_photo">
							</a>
				          </div>
				          <div class="col-md-8 px-3">
				            <div class="card-block px-3">
				              <h4 style="margin-top: 15px;" class="card-title"><a href="tin_tuc?id={{$news->id}}"><p class="exp_title">{{$news->title}}</p></a></h4>
				              <p class="exp_below_title">{{$news->title}}</p>
				            </div>
				          </div>
				        </div>
				      </div>
				    </div>
  				</div>
				@endforeach
				<div class="see_all_2">
					<a href="{{ route('cam-nang') }}"><p><span class="fa fa-chevron-left" style="font-size: 15px;margin-right:10px;"></span>Xem tất cả<span class="fa fa-chevron-right" style="font-size: 15px;margin-left:10px;"></span></p></a>
				</div>
			</div>
		</div>
	</div>	
	<!-- End kinh nghiệm du lịch -->

	@endsection
</body>
</html>