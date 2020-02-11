<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>MẠNG BÁN TOUR DU LỊCH SỐ 1 VIỆT NAM</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- <link rel="stylesheet" href="css/blog_tour_trong_ngoai.css"> -->
	<!-- link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/blog_tour_trong_ngoai.css') }}" rel="stylesheet"> -->
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css">
</head>
<body>
		<!-- Start Header -->
	@include('master.header')
		<!-- End Header -->


		<!-- Start Content -->
	@yield('content')
		<!-- End Content -->


		<!-- Start footer -->
	@include('master.footer')	
		<!-- End footer -->

</body>
</html>
