<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>
</head>
<body>
	@include('admin.header.menu')
	<div class="body">
		@include('admin.header.header')
		<div class="content1" style="padding-left: 60px;">
			<div class="table-responsive">
				<table class="table table-hover">
					<thead>
						<tr>
							<th>ID</th>
							<th>Tên tour</th>
							<th>Mã tour</th>
							<th>Thời gian</th>
							<th>Phương tiện</th>
							<th>Ngày khởi hành</th>
							<th>Giá</th>
							<th>Khuyến mãi</th>
							<th>Lịch trình</th>
							<th>Số chỗ</th>
							<th>Lưu ý</th>
							<th>Nơi khởi hành</th>
							<th>Điểm đến</th>
							<th>Avatar</th>
							<th>Đã đặt</th>
							<th>Sửa</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($tours as $stt=>$tour)
						<tr>
							<td>{{$tour->id}}</td>
							<td>{{$tour->name}}</td>
							<td>{{$tour->code}}</td>
							<td>{{$tour->length}} ngày {{$tour->length-1}} đêm </td>
							<td>{{$tour->vehicle}}</td>
							<td>{{$tour->departure}}</td>
							<td>{{$tour->price}}<sup>đ</sup></td>
							<td>{{$tour->khuyen_mai}}%</td>
							<td>{{$tour->lich_trinh}}</td>
							<td>{{$tour->so_cho}}</td>
							<td>{{$tour->luu_y}}</td>
							<td>{{$tour->noi_khoi_hanh}}</td>
							<td>{{$tour->diem_den}}</td>
							<td><img src="img/test/{{$tour->avatar}}" style="width: 50px;"></td>
							<td>{{$tour->sochodadat}}</td>
							<td><a href="{{route('update-tour',$params = ['id'=> $tour->id])}}"><button type="button" class="btn btn-primary">Sửa</button></a></td>
							<td><a href="{{route('delete-tour',$params = ['id'=> $tour->id])}}"><button type="button" class="btn btn-large btn-block btn-danger">Xóa</button></a></td>
							
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>

</body>
</html>