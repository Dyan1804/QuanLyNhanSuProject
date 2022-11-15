<?php
if (isset($_POST['id'])) {
	$id = $_POST['id'];

	require_once ('../QuanLyNhanSu/dbhelp.php');
	$sql = 'delete from qlnv where id = '.$id;
	execute($sql);
}
?>
