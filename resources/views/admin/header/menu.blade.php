<div class="menu">
	<ul class="side-menu">
		<li><a href="{{route('admin')}}"><span class="fa fa-code"></span>Trang Admin</a></li>
		<li><a href="{{route('manage-tour')}}"><span class="fa fa-cog"></span>Quản lý tour</a></li>
		<li><a href="{{route('add-tour')}}"><span class="fa fa-cog"></span>Thêm tour</a></li>
		<li><a href="{{route('manage-news')}}"><span class="fa fa-font"></span>Quản lý tin tức</a></li>
		<li><a href="{{route('add-news')}}"><span class="fa fa-font"></span>Thêm tin tức</a></li>
		<li><a href="#"><span class="fa fa-caret-square-o-right"></span>Quản lý đặt tour</a></li>
		<li><a href="{{ route('manage-contact') }}"><span class="fa fa-check-square"></span>Quản lý liên hệ</a></li>
		<li><a href="{{route('trang-chu')}}"><span class="fa fa-code"></span>Về trang chủ</a></li>
		<li><a href="{{ route('logout') }}"
			onclick="event.preventDefault();
			document.getElementById('logout-form').submit();">
			
		
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
			@csrf
		</form>
		<span class="fa fa-code"></span>Logout
	</a></li>



	</ul>
</div>