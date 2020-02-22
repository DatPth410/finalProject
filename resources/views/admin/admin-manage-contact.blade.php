<!DOCTYPE html>
<html>
<head>
	<title>	</title>
	<base href="{{asset('')}}">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/admin.css">
	<!-- 	<link rel="stylesheet" href="css/bootstrap.min.css"/> -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
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
							<th>Id</th>
							<th>Tên</th>
							<th>Số điện thoại</th>
							<th>Thắc mắc, câu hỏi</th>
							
						</tr>
					</thead>
					<tbody>
						@foreach($contacts as $stt => $contact)
						<tr>
							<td>{{$contact->id}}</td>
							<td>{{$contact->name}}</td>
							<td>{{$contact->phone}}</td>
							<td>{{$contact->question}}</td>
						</tr>
						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>