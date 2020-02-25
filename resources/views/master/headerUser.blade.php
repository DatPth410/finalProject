
<div id="header" class="fix">
	<div class="row">					
		<div class="col-md-offset-1 col-md-1 col-sm-offset-1 col-sm-1">
			<img src="images/lo-go.png" style="width: 80px;height: 80px;">
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="trang-chu"><p class="header_text">Trang chủ</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="khuyen-mai"><p class="header_text_2">Combo - Khuyến mại</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="{{route('trong-nuoc')}}"><p class="header_text_2">Du lịch trong nước</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="{{route('nuoc-ngoai')}}"><p class="header_text_2">Du lịch nước ngoài</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="ve-chung-toi"><p class="header_text_2" style="margin-top: 15px;">Về chúng tôi</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<a href="cam-nang"><p class="header_text">Blog</p></a>
		</div>

		<div class="col-md-1 col-sm-1">
			<nav>

				<ul>
					<li>Xin chào, {{ Auth::user()->name }}
						<ul>
							<li>
								<a href="{{ route('logout') }}"
								onclick="event.preventDefault();
								document.getElementById('logout-form').submit();">
								{{ __('Logout') }}
							</a>

							<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
								@csrf
							</form>

						</li>
						<li>	
							@php
							$userRoles = Auth::user()->roles->pluck('name');
       
							if ($userRoles->contains('admin')) {
								@endphp
								<a href="{{ route('admin') }}">
									{{ __('Quản lý') }}
								</a>
								@php
							}
							@endphp
							

						

					</li>


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

