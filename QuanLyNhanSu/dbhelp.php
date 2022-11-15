<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Person Management.</title>
</head>

<body>
	<?php
require_once ('../QuanLyNhanSu/config.php');

function execute($sql) {

	$conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DBNAME);

	mysqli_query($conn, $sql);

	mysqli_close($conn);
}

function executeResult($sql) {

	$conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DBNAME);

	$resultset = mysqli_query($conn, $sql);
	$list      = [];
	while ($row = mysqli_fetch_array($resultset, 1)) {
		$list[] = $row;
	}
	mysqli_close($conn);

	return $list;
}
	?>
</body>
</html>
