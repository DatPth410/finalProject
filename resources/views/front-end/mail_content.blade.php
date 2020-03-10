<!DOCTYPE html>
<html>
<head>
	<title>Real Programmer</title>
	<style type="text/css">
		.float{
			float: left;
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
	<h1>{{$title}}</h1>
	<div id="header" style="width: 500px; min-height: 100px;">
		<div class="float">
			<img src="{{$message->embed('img/logo.png')}}" width="150px;">
		</div>
		<div class="float">
			<h3>DPV Travel Agency</h3>
			<p>Hà Nội</p>
			<p>Điện thoại: 098 765 4321</p>
			<p>datpham.ka@gmail.com</p>
		</div>
	</div>
	<div id="body" style="width: 500px; min-height: 100px;">
		<br/>
		<br/>
		<br/>
		<h2>Chi tiết đặt hàng</h2>
		<table class="table table-hover">

			<tr>
				<th style="text-align: right;">Tên tour:</th>
				<td style="text-align: left;">{{$tour}}</td>
			</tr><tr>
				<th style="text-align: right;">Khách hàng:</th>
				<td style="text-align: left;">{{$name}}</td>
			</tr><tr>
				<th style="text-align: right;">Thời gian:</th>
				<td style="text-align: left;">{{$departure}}</td>
			</tr><tr>
				<th style="text-align: right;">Phương tiện:</th>
				<td style="text-align: left;">{{$vehicle}}</td>
			</tr><tr>
				<th style="text-align: right;">Số người lớn:</th>
				<td style="text-align: left;">{{$adult}}</td>
			</tr><tr>
				<th style="text-align: right;">Số trẻ em:</th>
				<td style="text-align: left;">{{$child}}</td>
			</tr><tr>
				<th style="text-align: right;">Tổng giá:</th>
				<td style="text-align: left;">{{number_format($gia)}} VND</td>
			</tr>

		</table>

	</div>
	<div id="footer" style="width: 500px; min-height: 100px;">
		@if(isset($account))
			<p>Quý khách có thể truy cập tài khoản sau của quý khách để theo dõi các tour đã đặt và nhận được các thông báo về các khuyến mãi:<br>
			Tên đăng nhập : {{$account}} <br>
			Mật khẩu : {{$password}}
			</p>
		@endif

		

		<h2>Cảm ơn quý khách hàng đã tin tưởng sử dụng dịch vụ của chúng tôi!</h2>
	</div>
</body>
</html>