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
							<th>Tiêu đề</th>
							<th>Tóm tắt</th>
							<th>Nội dung</th>
							<th>Ngày đăng</th>
							<th>Avatar</th>
							<th>Sửa</th>
							<th>Xóa</th>
						</tr>
					</thead>
					<tbody>
						@foreach($newss as $stt => $news)
						<tr>
							<td>{{$news->id}}</td>
							<td>{{$news->title}}</td>
							<td>{{$news->tom_tat}}</td>
							<td>
								<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#model-{{ $stt }}">
									Xem nội dung
								</button>

								<!-- Modal -->
								<div class="modal fade" id="model-{{ $stt }}" tabindex="" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
									<div class="modal-dialog" role="document">
										<div class="modal-content">
											<div class="modal-header">
												<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
												<button type="button" class="close" data-dismiss="modal" aria-label="Close">
													<span aria-hidden="true">&times;</span>
												</button>
											</div>
											<div class="modal-body">
												{!! $news->noi_dung !!}
											</div>
											<div class="modal-footer">
												<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
											</div>
										</div>
									</div>
								</div>
							</td>
							<!-- <td>{{$news->noi_dung}}</td> -->
							<td>{{$news->ngay_dang}}</td>
							<td>{{$news->avatar}}</td>
							<td><a href="{{route('update-news',$params = ['id'=> $news->id])}}"><button type="button" class="btn btn-primary">Sửa</button></a></td>
							<td><a href="{{route('delete-news',$params = ['id'=> $news->id])}}"><button type="button" class="btn btn-large btn-block btn-danger">Xóa</button></a></td>

						</tr>



						@endforeach
						<!-- Button trigger modal -->


					</tbody>
				</table>
			</div>
		</div>
	</div>
</body>
</html>