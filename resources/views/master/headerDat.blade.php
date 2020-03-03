

<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top"  style="margin: 0; padding: 0;z-index: 2;">
	<button class="navbar-toggler" data-toggle="collapse" data-target="#collapse_target">
		<span class="navbar-toggler-icon"></span>
	</button>
	<a href="trang-chu" class="navbar-brand"><img src="images/lo-go.png" width="80"></a>
	<div class="collapse navbar-collapse" id="collapse_target">
	<ul class="navbar-nav">
		<li class="nav-item" style="margin: 0;">
			<a class="nav-link" href="trang-chu">Trang chủ</a>
		</li>
		<li class="nav-item" style="margin: 0;">
			<a class="nav-link" href="khuyen-mai">Combo - Khuyến mại</a>
		</li>
		<li class="nav-item" style="margin: 0;">
			<a class="nav-link" href="{{route('trong-nuoc')}}">Du lịch trong nước</a>
		</li>
		<li class="nav-item" style="margin: 0;">
			<a class="nav-link" href="{{route('nuoc-ngoai')}}">Du lịch nước ngoài</a>
		</li>
		<li class="nav-item" style="margin: 0;">
			<a class="nav-link" href="ve-chung-toi">Về chúng tôi</a>
		</li>
		<li class="nav-item" style="margin: 0;">
			<a class="nav-link" href="cam-nang">Blog</a>
		</li>
		<li class="nav-item dropdown" style="margin: 0;">
			<a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target">
				Tài khoản
				<span class="caret"></span>
			</a>
			<div class="dropdown-menu" aria-labelledby="dropdown_target">
				@if (Route::has('login'))
							<div class="top-right links">

								<a class="dropdown-item" style="text-align: center;" href="{{ route('login') }}">Đăng nhập</a>
								<div class="dropdown-divider"></div>

								@if (Route::has('register'))
								<a class="dropdown-item" style="text-align: center;" href="{{ route('register') }}">Đăng kí</a>
								@endif
								
							</div>
							@endif
				
				
			</div>
			<span class="navbar-text fa fa-phone" style="color: #f79321;">0928 0416</span>
		</li>
	</ul>

	</div>

	
</nav>
