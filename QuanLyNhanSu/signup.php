<?php
$fullname = $username = $emailAddress = $birthday = $password = $confirmpassword = $address = '';
$isPwdMapping = true;

if (!empty($_POST)) {
	if (isset($_POST['fullname'])) {
		$fullname = $_POST['fullname'];
	}
	if (isset($_POST['username'])) {
		$username = $_POST['username'];
	}
	if (isset($_POST['email'])) {
		$emailAddress = $_POST['email'];
	}
	if (isset($_POST['birthday'])) {
		$birthday = $_POST['birthday'];
	}
	if (isset($_POST['password'])) {
		$password = $_POST['password'];
	}
	if (isset($_POST['confirmation_password'])) {
		$confirmpassword = $_POST['confirmation_password'];
	}
	if (isset($_POST['address'])) {
		$address = $_POST['address'];
	}
	if (isset($_POST['avatar'])) {
		$avatar = $_POST['avatar'];
	}

	if ($password == $confirmpassword) {
		header('Location: welcome.php?ten='.$fullname);
		die();
	} else {
		$isPwdMapping = false;
	}
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Sign up Form</title>

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<h2 class="text-center">Registation Form</h2>
			</div>
			<div class="panel-body">
				<form method="post" action="../QuanLyNhanSu/welcome.php" enctype="multipart/form-data">
					<div class="form-group">
					  <label for="fullname">Name:</label>
					  <input required="true" type="text" class="form-control" id="fullname" name="fullname" value="<?=$fullname?>">
					</div>
					<div class="form-group">
					  <label for="usr">UserName:</label>
					  <input required="true" type="text" class="form-control" id="usr" name="username" value="<?=$username?>">
					</div>
					<div class="form-group">
					  <label for="email">Email:</label>
					  <input required="true" type="email" class="form-control" id="email" name="email" value="<?=$emailAddress?>">
					</div>
					<div class="form-group">
					  <label for="birthday">Birthday:</label>
					  <input type="date" class="form-control" id="birthday" name="birthday" value="<?=$birthday?>">
					</div>
					<div class="form-group">
					  <label for="pwd">Password:<?=$isPwdMapping?'':'<font color=red>Mật khẩu không khớp</font>'?></label>
					  <input required="true" type="password" class="form-control" id="pwd" name="password">
					</div>
					<div class="form-group">
					  <label for="confirmation_pwd">Confirm Password:</label>
					  <input required="true" type="password" class="form-control" id="confirmation_pwd" name="confirmation_password">
					</div>
					<div class="form-group">
					  <label for="address">Address:</label>
					  <input type="text" class="form-control" id="address" name="address" value="<?=$address?>">
					</div>
					<div class="form-group">
  						Student's Image:<br>
  					<input type="file" name="fileToUpload" id="fileToUpload">
					</div>
					<button class="btn btn-success">Register</button>
					<button class="btn btn-success" onclick="window.open('startpage.php', '_self')">Back</button>
				</form>
			</div>
		</div>
	</div>
</body>
</html>
