<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="device-width, initial-scale=1.0">
	<title> Main Page | Welcome. </title>
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
<!----------------------------------------------------------------------------------------->
	<div class="account-page">
	<div class="container">
		<div class="row">
		<div class="col-2">
			<img src="/QuanLyNhanSu/images/ISO_9001-2015_w.png" width="100%">
			</div>
			
			
			<div class="col-2">
			<div class="form-container">
				<div class="form-btn">
				<span onClick="login()">Đăng nhập</span>
				<span onClick="register()">Đăng kí</span>
					<hr id="Indi">
				</div>
				
				<form id="LoginForm">
					<li>
					<a href="../QuanLyNhanSu/login.php">Login Form will appear.</a>
					</li>
				</form>
			</div>
			</div>
		</div>
		</div>
	</div>
	

	
<!------------------------------------------------------------------------------------>	
<div class="footer">
	<div class="container">
		<div class="row">
			<div class="app-logo">
				<img src="../QuanLyNhanSu/images/dongtien1.PNG">
				<div class="footer-col-1">
				<h3>Công ty TNHH phát triển Mạng và Truyền Thông ĐÔNG TIẾN.</h3>
				<p>822 đường La Thành, phường Giảng Võ, quận Ba Đình, Hà Nội.</p>
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
		var LoginForm = document.getElementById("LoginForm");
		var RegForm = document.getElementById("RegForm");
		var Indi = document.getElementById("Indi");
		function register(){
			RegForm.style.transform = "translateX(0px)";
			LoginForm.style.transform = "translateX(0px)";
			Indi.style.transform = "translateX(100px)";
			
		}
		function login(){
			RegForm.style.transform = "translateX(300px)";
			LoginForm.style.transform = "translateX(300px)";
			Indi.style.transform = "translateX(0px)";	
		}
		
	</script>
</body>
</html>
//danmeomeo da sua file lan 2 
