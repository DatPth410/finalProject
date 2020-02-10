<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>

	<!-- <script type="text/javascript" src="js/admin.js"></script> -->
</head>
<body>
	@include('admin.header.menu')
	<div class="body">
		@include('admin.header.header')
		<div class="content" style="padding-left: 60px;">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>Id</th>
							<th>Tiêu đề</th>
							<th>Tóm tắt</th>
							<th>Nội dung</th>
							<th>Ngày đăng</th>
							<th>Avatar</th>
						</tr>
					</thead>
					<tbody>
						@foreach($newss as $stt => $news)
						<tr>
							<td>{{$news->id}}</td>
							<td>{{$news->title}}</td>
							<td>{{$news->tom_tat}}</td>
							<td>{{$news->noi_dung}}</td>
							<td>{{$news->ngay_dang}}</td>
							<td>{{$news->avatar}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>