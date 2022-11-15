
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<title> Information Form</title>
	<link rel="stylesheet" href="../QuanLyNhanSu/style.css">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Exo:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css" integrity="sha384-jLKHWM3JRmfMU0A5x5AkjWkw/EYfGUAGagvnfryNV3F9VqM98XiIH7VBGVoxVSc7" crossorigin="anonymous">
	<link rel="stylesheet" href="../QuanLyNhanSu/path/to/font-awesome-4.7.0/css/font-awesome.min.css">
</head>
	
<body>	
	<div class="header">
	<div class="container">
	<div class="navbar">
		<div class="logo">
			<img src="../QuanLyNhanSu/images/dongtien1.PNG" width="300px">
		</div>
		<nav>
			<ul>
				<li><a href="../QuanLyNhanSu/startpage.php">Trang Chủ</a></li>
			</ul>
		</nav>
	</div>
</div>
</div>
	<div align="center">
	<h1>Sign Up Complete !</h1>
	</div>
	<div align="center">
	<a href="../QuanLyNhanSu/login.php"> -->Go To Log In<-- </a>
	</div>
		<div class="col-2">
		<div align="center">
		<p>Information.</p>
		<form method="post"></form>
	<?php 
	$fullname = $_POST['fullname'];
	$username = $_POST['username'];
	$password = $_POST['password'];
	$birthday = $_POST['birthday'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	

	echo 'Fullname:  '.$fullname.'<br>';
	echo 'Username:  '.$username.'<br>';
	echo 'Password:'.$password.'<br>';
	echo 'Birthday: '.$birthday.'<br>';
	echo 'Address: '.$address.'<br>';
	echo 'Email: '.$email.'<br>';

//upload picture
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    //echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    //echo "File is not an image.";
    $uploadOk = 0;
  }
}
			
// Check file size
if ($_FILES["fileToUpload"]["size"] > 90000000) {
  //echo "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
  //echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
	  $uploadOk == 1;
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
			
		$picturelink = 'http://localhost/website/QuanLyNhanSu/uploads/'.basename($_FILES["fileToUpload"]["name"]);
			echo '<img src="'.$picturelink.'" width="300px">';
		$avatar = $picturelink;
			
require_once('../QuanLyNhanSu/dbhelp.php');
			
$conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DBNAME);
$sql = "INSERT INTO loginv (fullname, username, email, birthday, password, address, avatar) value ('$fullname', '$username', '$email', '$birthday', '$password', '$address', '$avatar')";

if ($conn->query($sql) === TRUE) {
  echo "Bạn đã đăng kí thành công !!!";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
	</div>
</div>
	
<!------------------------------------------------------------------------------------>	
<div class="footer">
	<div class="container">
		<div class="row">
		<div class="footer-col-1">
			<h3>Công ty TNHH phát triển Mạng và Truyền Thông ĐÔNG TIẾN.</h3>
			<p>822 đường La Thành, phường Giảng Võ, quận Ba Đình, Hà Nội.</p>
			<div class="app-logo">
				<img src="/images/dongtien1.png">
			</div>
		</div>
		<div class="footer-col-1">
			<h3>Since 2006.<br>We hope to bringing you the best quality.</h3>
		</div>
		<div class="footer-col-4">
			<h3>Contact.</h3>
			<ul>
				<li>Phone: +84 2435135001. </li>
				<li>Email: dtc@dtc.net.vn.</li>
			</ul>
		</div>
		</div>
		<hr>
		<p class="copyright" align="center">Ⓒ CÔNG TY TNHH PHÁT TRIỂN MẠNG VÀ TRUYỀN THÔNG ĐÔNG TIẾN | All Rights Reserved.</p>
		</div>
		</div>
	<!------------------------------------------------------------>
	<script>
		var ProductImg = document.getElementById("productImg");
		var SmallImg = = document.getElementsByClassName("small-img");
		
		SmallImg[0].onclick = function()
		{
		ProductImg.src = SmallImg[0].src;
		}
		SmallImg[1].onclick = function()
		{
		ProductImg.src = SmallImg[1].src;
		}
		SmallImg[2].onclick = function()
		{
		ProductImg.src = SmallImg[2].src;
		}
		SmallImg[3].onclick = function()
		{
		ProductImg.src = SmallImg[3].src;
		}
	</script>
</body>
</html>



