<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>DPV Travel Agency @yield('title')</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<!-- <link rel="stylesheet" href="css/blog_tour_trong_ngoai.css"> -->
	{{-- <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
	<link href="{{ asset('css/blog_tour_trong_ngoai.css') }}" rel="stylesheet">
	<link rel="stylesheet" href="css/blog_tour_trong_ngoai.css"> --}}

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




		<!-- Start footer -->
	@include('master.footer')	
		<!-- End footer -->

</body>
</html>
