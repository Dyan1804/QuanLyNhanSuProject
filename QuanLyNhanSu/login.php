<?php
$tennguoidung = $matkhau = '';
// xu ly lay du lieu qua method : POST
if (!empty($_GET)) {
	if (isset($_GET['username'])) {
		$tennguoidung = $_GET['username'];
	}
	if (isset($_GET['password'])) {
		$matkhau = $_GET['password'];
	}
	
	if($tennguoidung='' && $matkhau=''){
		header('Location:index.php?username='.$tennguoidung.' & password='.$matkhau.'');
	}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Login Here</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Welcome.</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="../QuanLyNhanSu/index.php">
					<div class="form-group">
					  <input type="text" class="form-control" id="username" required="true" name="username" placeholder="Nhập tên người dùng." value="<?=$tennguoidung?>"></div>
					<div class="form-group">
					  <input for="pwd" required="true" type="password" class="form-control" id="pwd" name="password" placeholder="Nhập mật khẩu.">
					</div>
					<button class="btn btn-success">Login</button>
					<button class="btn btn-success" onclick="window.open('startpage.php', '_self')">Back</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>