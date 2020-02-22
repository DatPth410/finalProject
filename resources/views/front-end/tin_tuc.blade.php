<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tin tức du lịch </title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

			<!-- Start Header -->
		<div id="header" class="fix">
			<div class="row">					
				<div class="col-md-offset-1 col-md-1 col-sm-offset-1 col-sm-1">
					<img src="images/lo-go.png" style="width: 80px;height: 80px;">
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="index.php"><p class="header_text">Trang chủ</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="sale.php"><p class="header_text_2">Combo - Khuyến mại</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="tour_trong_nuoc.php"><p class="header_text_2">Du lịch trong nước</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="tour_nuoc_ngoai.php"><p class="header_text_2">Du lịch nước ngoài</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="aboutus.php"><p class="header_text_2" style="margin-top: 15px;">Về chúng tôi</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<a href="cam_nang.php"><p class="header_text">Blog</p></a>
				</div>

				<div class="col-md-1 col-sm-1">
					<nav>
						<ul>
							<li>Tài khoản
								<ul>	
									<li><a href = "#">Đăng nhập</a></li>
									<li><a href = "#">Đăng kí</li>
								</ul>
							</li>
						</ul>
					</nav>
				</div>

				<div class="col-md-2 col-sm-2">
					<a href="#" class="header_hotline glyphicon glyphicon-earphone"><p style="float: right;margin-left: 22px; letter-spacing: 2px; font-size: 30px;">0928 0416</p></a>
					<p style="font-size: 15px;margin-top: -4px;color: #fff;text-align: center;">Hỗ trợ dịch vụ 24/24</p>
				</div>
			</div>
		</div>
			<!-- End Header -->	
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v6.0"></script>
	<div class="container margin-top">
		<div class="col-md-9 col-sm-12">
			<div style="padding-top: 20px;" class="head_contain">
				<span class="t_d" ><a href="#"> Cẩm nang du lịch ></a></span>
				<span class="t_d" ><a href="#"> DU LỊCH VIỆT NAM ></a></span>
				<span class="t_d" ><a href="#"> {{$news->title}} </a></span>

				<h3 style="font-weight: bold;font-size: 26px;">{{$news->title}}</h3>
				<br>
				<div class="time_date">
					<p style="font-size:13px; margin-bottom:8px; ">

						<span style="color: #666666;margin-right:10px;">{{$news->ngay_dang}}
						</span>
						<div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="" data-layout="button" data-action="like" data-size="small" data-share="true" style="padding-left: 15px;"></div>
						
					</p>
				</div>
				<br>
				<div class="entry_content">
					{!!html_entity_decode($news->noi_dung)!!}
						<div class="content_box"><span class="fa fa-plus-circle"></span>
						<strong>
						 Hướng dẫn cách đặt khách sạn này:<br></strong>
							- Gọi<strong> 1900 1870<br></strong>
							- Đặt online <strong><a href="#">TẠI ĐÂY</a>
						 </strong>
					</div>

					<div class="around" >
						<div class="promotion">
							<div class="col-sm-12 col-md-12 ">
								[ĐỘC QUYỀN] Trọn gói 2N1Đ + Xe đưa đón + Bữa ăn 
								<span>từ 1.499.000  VND / Khách</span>
							</div>
						</div>
						<div class="col-md-3 col-sm-3" style="position: relative;padding-top: 7px;">
							<span class="v_ribbon">
								<p style="color: white;font-size: 12px;padding-left: 10px">2N1Đ+Xe+Bữa ăn</p>
							</span>
							<a href="#">
								<img src="images/2n1d.jpg" style="height: 111px;
								width: 151px">
							</a>
						</div>
						<div class="col-md-9 col-sm-9">
							<div class="t_b">
								<h4 style="font-size: 16px;font-weight: bold"><a href="#"> Melia Hồ Tràm Beach Resort | 2N1Đ+Xe+Bữa ăn</a> </h4>
								<span style="font-size: 12px">Đường Bờ biển, Ấp Hồ Tràm, Xã Phước Thuận, Huyện Xuyên Mộc, Tỉnh Bà Rịa - Vũng Tàu</span>
								<div style="padding-top: 5px;padding-bottom: 5px;">	
									<span  class="score">9.4</span>
									<span class="cmt" style="color:#9fc43a;font-weight: bold; ">Tuyệt vời</span>
									<span style="font-size: 14px;">| 309 nhận xét</span>
								</div>
							</div>
							<div class="right">
								<span class="price_num">1.499.000 VNĐ</span>
								<div class="c_t">
									<a href="#"><button type="button" class="btn btn-warning">Chi tiết</button></a>
								</div>
							</div>
						</div>
					</div>
					<br>
						<div class="content_box" style="font-weight: bold;font-size: 16px;"><span class="fa fa-plus-circle"></span>
						<strong>
						  Xem thêm bài viết:<br><br></strong>
						  <a href="#">2N1Đ ở khách sạn Mercure Vũng Tàu + Xe đưa đón + Tặng voucher ăn uống + Cocktail chỉ 1.450.000 đồng/khách</a><br><br>
						  <a href="#">Ghim ngay top 5 quán cafe Vũng Tàu decor xinh xắn dịp Tết Âm Lịch</a><br><br>
						  <a href="#">2N1Đ ở khách sạn ibis Styles Vũng Tàu + xe đưa đón + ăn sáng chỉ 1.099.000 đồng/khách</a>
					</div>
					<strong style="font-size: 30px;">***</strong><br><br>
					<strong >Tham khảo: <a href="#">Cẩm nang du lịch DVP.com</a></strong>
					<br><br>
					<p style="border-bottom: 4px solid"></p>

				</div>
				<br>
				<br>


			</div>
				<div class="folder">
				<span class="icons"><i class="fa fa-folder"></i></span>
				<a href="#">DU LỊCH VIỆT NAM</a>
				<a href="#">Du lịch Vũng Tàu</a>
				<a href="#">Khuyến mại</a>
				<a href="#">Nổi bật</a>
				<a href="#">Nổi bật 2</a>
				<a href="#">Điểm đến</a>
			</div>
			<br>
			<br>
			<div class="tags">
				<span class="icons"><i class="fa fa-tags"></i></span>
				<a href="#">Du lịch Vũng Tàu</a>
				<a href="#">Du lịch Vũng Tàu</a>
				<a href="#">Du lịch Vũng Tàu</a>
				<a href="#">Du lịch Vũng Tàu</a>
				<a href="#">Du lịch Vũng Tàu</a>
				<a href="#">Du lịch Vũng Tàu</a>
				<a href="#">Du lịch Vũng Tàu</a>
				<a href="#">Du lịch Vũng Tàu</a>
				<a href="#">Du lịch Vũng Tàu</a>

			</div>
			<div class="binh_luan">
				
				<div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/" data-width="800" data-numposts="4"></div>
			</div>
		</div>
		<div class="col-md-3">
       	 <div style="margin-top: 40px;" class="tim_kiem">
       	 	<form action="" method="POST" class="form-inline" role="form">
       	 
       	 	<div class="form-group">
       	 		<label class="sr-only" for="">label</label>
       	 		<input type="text" class="form-control" id="" name="search" placeholder="TÌm kiếm tin tức...">
       	 	</div>
       	     <button type="submit" class="btn btn-danger" style="float: right"><a href="#"><img src="images/i-search-mini.png"></a></button>
       	 </form>
       	</div>

       	<div style="padding-top: 30px;" class="menu_news">
			 <div class="category" style="border-bottom: double;">
			 	<ul class="nav nav-tabs">
				  <li role="presentation" class="active"><a href="#">Xem nhiều nhất</a></li>
				  <li role="presentation"><a href="#">Mới nhất</a></li>
				  
				</ul>
			</div>
		    <div class="list_news">
		    	<div class="news">
		    			<div class="img2">
		    			  <a href="#">
		    			  	<img src="images/bia-sex-show-o-thai-lan.jpg" style="padding-top: 20px;" width="80px"; height="100px">
		    			  </a>
		    		    </div>
		    		    <div class="title">
			    			<a href="#">
			    				<h5 style="color: #222222;">Sex show Big Eyes ở Thái Lan có gì hay?</h5>
			    			</a>
			    			<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 12/02/2019 </span>
		    		    </div>
		    	</div>
		    	<div class="news">
		    			<div class="img2">
		    			  <a href="#">	    				
		    			  	<img src="images/191_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
		    			  </a>
		    		    </div>
		    		    <div class="title">
			    			<a href="#">
			    				<h5 style="color: #222222;">Bật mí 10 khách sạn uy tín ở Sầm Sơn, đẹp và mới nhất từ 2017 đến 2019</h5>
			    			</a>
			    			<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 09/02/2019 </span>
		    		    </div>
		    	</div>
		    	<div class="news">
		    			<div class="img2">
		    			  <a href="#">	    				
		    			  	<img src="images/191_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
		    			  </a>
		    		    </div>
		    		    <div class="title">
			    			<a href="#">
			    				<h5 style="color: #222222;">Bật mí cho bạn những khách sạn Đà Lạt đẹp gần trung tâm nhất</h5>
			    			</a>
			    			<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 09/04/2019 </span>
		    		    </div>
		    	</div>
		    	<div class="news">
		    			<div class="img2">
		    			  <a href="#">	    				
		    			  	<img src="images/4_anh-nen.jpg" style="padding-top: 20px;" width="80px"; height="100px">
		    			  </a>
		    		    </div>
		    		    <div class="title">
			    			<a href="#">
			    				<h5 style="color: #222222;">Kinh nghiệm du lịch đảo Jeju Hàn Quốc 2019</h5>
			    			</a>
			    			<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 31/01/2019 </span>
		    		    </div>
		    	</div>
		    	<div class="news">
		    			<div class="img2">
		    			  <a href="#">	    				
		    			  	<img src="images/171_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
		    			  </a>
		    		    </div>
		    		    <div class="title">
			    			<a href="#">
			    				<h5 style="color: #222222;">10 gợi ý đi du lịch Phú Yên nên mua gì về làm quà cho người thân tốt nhất</h5>
			    			</a>
			    			<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 06/03/2019 </span>
		    		    </div>
		    	</div>
		    	<div class="news">
		    			<div class="img2">
		    			  <a href="#">	    				
		    			  	<img src="images/nuoc-ngoai-thang-2.jpg" style="padding-top: 20px;" width="80px"; height="100px">
		    			  </a>
		    		    </div>
		    		    <div class="title">
			    			<a href="#">
			    				<h5 style="color: #222222;">Những điểm du lịch nước ngoài Hot nhất tháng 2 năm 2019</h5>
			    			</a>
			    			<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 03/02/2019 </span>
		    		    </div>
		    	</div>
		    	<div class="news">
		    			<div class="img2">
		    			  <a href="#">	    				
		    			  	<img src="images/1_phuong-hoang-co-tran-mua-dong.jpg" style="padding-top: 20px;" width="80px"; height="100px">
		    			  </a>
		    		    </div>
		    		    <div class="title">
			    			<a href="#">
			    				<h5 style="color: #222222;">Phượng Hoàng Cổ Trấn mùa đông có gì đặc biệt?</h5>
			    			</a>
			    			<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 28/11/2018 </span>
		    		    </div>
		    	</div>
		    	<div class="news">
		    			<div class="img2">
		    			  <a href="#">	    				
		    			  	<img src="images/26_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
		    			  </a>
		    		    </div>
		    		    <div class="title">
			    			<a href="#">
			    				<h5 style="color: #222222;">Đi du lịch Phú Quốc nên mặc gì để phù hợp nhất</h5>
			    			</a>
			    			<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 05/01/2019 </span>
		    		    </div>
		    	</div>
		    	<div class="news">
		    			<div class="img2">
		    			  <a href="#">	    				
		    			  	<img src="images/178_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
		    			  </a>
		    		    </div>
		    		    <div class="title">
			    			<a href="#">
			    				<h5 style="color: #222222;">7 khách sạn ở Cửa Lò có bể bơi tốt nhất đẹp nhất và mới nhất</h5>
			    			</a>
			    			<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 17/03/2019 </span>
		    		    </div>
		    	</div>
		    	<div class="news">
		    			<div class="img2">
		    			  <a href="#">	    				
		    			  	<img src="images/184_0.jpg" style="padding-top: 20px;" width="80px"; height="100px">
		    			  </a>
		    		    </div>
		    		    <div class="title">
			    			<a href="#">
			    				<h5 style="color: #222222;">9 khách sạn Cửa Lò gần biển đẹp, chất lượng tuyệt vời và giá tốt nhất 2019</h5>
			    			</a>
			    			<span style="color: #999999;font-size: 13px;" class="glyphicon glyphicon-calendar"> 25/03/2019 </span>
		    		    </div>
		    	</div>
		    	
		    </div>
			
       	</div>

       	<div class="handbook">
       		<div class="header_box">
       			<h3>Cẩm nang du lịch</h3>
       		</div>
       		<div class="notes">
       			<a href="#">Hướng dẫn tự xin Visa Hong Kong tự túc</a>
       			<a href="#">Du lịch Campuchia mùa nào đẹp nhất</a>
       			<a href="#">Cẩm nang du lịch Phú Yên</a>
       			<a href="#">Kinh nghiệm du lịch Bắc Kinh Trung Quốc</a>
       			<a href="#">Thông tin du lịch Côn Đảo</a>
       			<a href="#">Kinh nghiệm du lịch Hàn Quốc mùa hè</a>
       			<a href="#">Kinh nghiệm du lịch Châu Âu</a>
       			<a href="#">Cần biết khi đi du lịch Dubai</a>
       			<a href="#">Kinh nghiệm du lịch Hà Giang 3 ngày 2 đêm</a>
       			<a href="#">Đi du lịc Bhutan cần lưu ý gì?</a>
       			<a href="#">Nên đi Phú Quốc mùa nào?</a>
       			<a href="#">Kinh nghiệm tổ chức teambuilding</a>
       			<a href="#">Lưu ý khi làm Visa Mỹ</a>
       			<a href="#">Đi du lịch Myanmar cần lưu ý gì ?</a>
       			<a href="#">Cẩm nang di du lịch Úc</a>
       			<a href="#">Kinh nghiệm đi du lịch Đà Nẵng tự túc chi tiết</a>
       			<a href="#">Kinh nghiệm đi du lịch đảo Bình Ba</a>
       			<a href="#">Kinh nghiệm du lịch Nga tự túc mới nhất</a>
       			<a href="#">Kinh nghiệm du lịch Phượng Hoàng cổ trấn</a>
       			<a href="#">Du lịch Chiang Mai nên đi mùa nào?</a>
       			<a href="#">Đi du lịch Thái Lan mùa hè có gì hấp dẫn</a>
       			<a href="#">Hướng dẫn lịch trình du lịch Sapa 3 ngày 2 đêm chi tiết</a>
       			<a href="#">Kinh nghiệm du lịch Mông Cổ</a>
       			<a href="#">Lưu ý khi du lịch Nhật Bản lần đầu</a>
       			<a href="#">Kinh nghiêm du lịch Singapore Malaysia</a>
       			<a href="#">Kinh nghiệm du lịch Đà Lạt</a>
       			<a href="#">Cẩm nang du lịch Lý Sơn từ A đến Z</a>
       			<a href="#">Đi Mộc Châu nên ở khách sạn nào?</a>
       			<a href="#">Đi du lịch Đài Loan mùa nào đẹp nhất?</a>
       			<a href="#">Đi du lịch Trung Quốc cần chuẩ bị gì ?</a>
       		</div>
       	</div>
       	
       </div>
	</div>
	

			<!-- Start footer -->
		<div id="above_footer">
			<h1 style="text-align: center;color: #fff;padding-top: 20px;">Chọn DPV, chọn sự Uy Tín, nhanh gọn và đảm bảo</h1>
			<h3 style="text-align: center;color: #85afdb;">Travel Agency đem đến cho bạn những trải nghiệm tuyệt vời nhất!</h3>
		</div>

		<div id="footer">
			<div id="top_bottom" class="col-md-offset-2">
				<img src="images/lo-go.png" style="width: 90px;height: 90px;margin-top: 10px;">
			</div>

			<div id="middle_bottom" class="col-md-8 col-md-offset-2">
				<div class="row">
					<div class="col-md-3">
						<p style="font-size: 20px;text-align: center;">GÓC KHÁCH HÀNG</p>
						<a href="#" class="customer_service_text">Điều khoản thanh toán</a><br>
						<a href="#" class="customer_service_text">Cẩm nang du lịch</a><br>
						<a href="#" class="customer_service_text">Liên hệ</a><br>
						<a href="#" class="customer_service_text">Giới thiệu</a>
					</div>

					<div class="col-md-6">
						<p style="font-size: 20px;text-align: center;">THÔNG TIN LIÊN HỆ</p>
						<p>Địa chỉ:</p>
						<p>Điện thoại:</p>
						<p>Email:</p>
						<p>Giấy phép Lữ Hành Quốc Tế:</p>
						<p>Mã số doanh nghiệp:</p>
					</div>

					<div class="col-md-3">
						<p style="font-size: 20px;text-align: center;">FOLLOW US</p>
					</div>
				</div>
			</div>

			<div id="bottom_bottom" class="col-md-offset-2 col-md-8">
				<p style="text-align: center; font-size: 22px;margin-top: 20px;">Copyright - Empowered by DPV</p>
			</div>
		</div>
			<!-- End footer -->		
</body>
</html>