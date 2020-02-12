<!DOCTYPE html>
<html>
<head>
	<title>Validate</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
	<div>
		@if(count($errors)>0)
			{{dd($errors)}}
		@endif
	</div>
	<form method="POST" role="form" style="width: 40%; margin: 0 auto;">
		@csrf
		<legend>Đăng nhập</legend>
		<div class="form-group">
			<label for="">Thêm tài khoản</label>
			<input name="id" type="text" class="form-control" id="" placeholder="Tài khoản">
			@if($errors->has('id'))
				<div class="alert alert-danger" role="alert">
					<strong>{{$errors}}</strong>
				</div>
			@endif
		</div>

		<div class="form-group">
			<label for="">Mật khẩu</label>
			<input name="pw" type="text" class="form-control" id="" placeholder="Mật khẩu">
			@if($errors->has('pw'))
				<div class="alert alert-danger" role="alert">
					<strong>{{$errors}}</strong>
				</div>
			@endif
		</div>
		<button type="submit" class="btn btn-primary">Submit</button>
	</form>
</body>
</html>