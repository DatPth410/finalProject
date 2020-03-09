<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
		<link rel="stylesheet" href="css/bootstrap.min.css"/>
	{{-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"> --}}
	<script type="text/javascript" src="jquery-3.4.1.min.js"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
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
							<th>ID</th>
							<th>ID khách hàng</th>
	                        <th>Tên khách hàng</th>
	                        <th>ID tour</th>
	                        <th>SĐT</th>
	                        <th>Email</th>
	                        <th>Ngày đặt</th>
	                        <th>Số người lớn</th>
	                        <th>Số trẻ em</th>
	                        <th>Thanh toán</th>
	                        <th>Tình trạng</th>
	                        <th>Chức năng</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($bookings as $stt => $booking)
						<tr>
							<td>{{$booking->id}}</td>
							<td>{{$booking->id_user}}</td>
							<td>{{$booking->name}}</td>
							<td>{{$booking->id_tour}}</td>
							<td>{{$booking->phone}}</td>
							<td>{{$booking->email}}</td>
							<td>{{$booking->time}}</td>
							<td>{{$booking->adult_number}}</td>
							<td>{{$booking->child_number}}</td>
							@php
                                if($booking->pay == 1)
                                    echo '<td><span class="label label-primary">Tiền mặt</span></td>';

                                if($booking->pay == 2)
                                    echo '<td><span class="label label-primary">Chuyển khoản</span></td>'
                            @endphp
                            @php
                                if($booking->id_status == 0)
                                    echo '<td><span class="label label-default">Hủy</span></td>';

                                if($booking->id_status == 1)
                                    echo '<td><span class="label label-danger">Chưa cọc</span></td>';

                                if($booking->id_status == 3)
                                    echo '<td><span class="label label-warning">Đã cọc</span></td>';

                                if($booking->id_status == 2)
                                    echo '<td><span class="label label-success">Đã thanh toán</span></td>';
							@endphp
							<td><a href="{{route('update-booking',$params = ['id'=> $booking->id])}}"><button type="button" class="btn btn-primary">Sửa</button></a></td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>