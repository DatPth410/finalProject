<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DPV Travel Agency @yield('title')</title>
	<base href="{{asset('')}}">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>	

	<link rel="stylesheet" type="text/css" href="css/myCss.css">
</head>
<body>			
		<!-- Start Header -->
	@auth
                @include('master.headerUser')
            @else
                @include('master.header')
            @endauth

		<!-- End Header -->



		<!-- Start home -->
	@yield('home')
		<!-- End home -->


		<!-- Start sale -->
	@yield('sale')
		<!-- End sale -->


		<!-- Start trong_nuoc -->
	@yield('trong_nuoc')
		<!-- End trong_nuoc -->


		<!-- Start nguoc_ngoai -->
	@yield('nuoc_ngoai')
		<!-- End nguoc_ngoai -->


		<!-- Start ve_chung_toi -->
	@yield('ve_chung_toi')
		<!-- End ve_chung_toi -->


		<!-- Start cam_nang -->
	@yield('cam_nang')
		<!-- End cam_nang -->


		<!-- Start chi_tiet -->
	@yield('chi_tiet')
		<!-- End chi_tiet -->




		<!-- Start footer -->
	@include('master.footer')	
		<!-- End footer -->

</body>
</html>
