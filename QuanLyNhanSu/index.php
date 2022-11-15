<?php
require_once ('../QuanLyNhanSu/dbhelp.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Person Management</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="panel panel-primary">
			<div class="panel-heading" align="center">
				<label>Quản lý thông tin nhân viên</label>
				<form method="get">
					<input type="text" name="s" class="form-control" style="margin-top: 15px; margin-bottom: 15px;" placeholder="Tìm kiếm theo tên">
				</form>
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<thead>
						<tr>
							<th>STT</th>
							<th>Họ & Tên</th>
							<th>Mã nhân viên</th>
							<th>Chức vụ</th>
							<th>Gmail</th>
							<th>Ngày Sinh</th>
							<th>Số Điện Thoại</th>
							<th>Avatar</th>
							<th width="60px"></th>
							<th width="60px"></th>
						</tr>
					</thead>
					<tbody>
<?php
						
if (isset($_GET['s']) && $_GET['s'] != '') {
	$sql = 'select * from qlnv where fullname like "%'.$_GET['s'].'%"';
} else {
	$sql = 'select * from qlnv';
}					

$personList = executeResult($sql);

$index = 1;
foreach ($personList as $std) {
	echo '<tr>
			<td>'.($index++).'</td>
			<td>'.$std['fullname'].'</td>
			<td>'.$std['code'].'</td>
			<td>'.$std['class'].'</td>
			<td>'.$std['gmail'].'</td>
			<td>'.$std['birthday'].'</td>
			<td>'.$std['sdt'].'</td>
			<td><button class="btn btn-warning" onclick=\'window.open("input.php?id='.$std['id'].'","_self")\'>Edit</button></td>
			<td><button class="btn btn-danger" onclick="deleteStudent('.$std['id'].')">Delete</button></td>
		</tr>';
}
?>
					</tbody>
				</table>
				<button class="btn btn-success" onclick="window.open('add.php', '_self')">Add</button>
				<button class="btn btn-success" onclick="window.open('index.php', '_self')">Back</button>
			</div>
		</div>
	</div>

	<script type="text/javascript">
		function deletePerson(id) {
			option = confirm('Bạn có muốn xoá nhân viên này không')
			if(!option) {
				return;
			}

			console.log(id)
			$.post('delete_person.php', {
				'id': id
			}, function(data) {
				option =confirm('Xóa nhân viên thành công.')
				local.reload()
			})
		}
	</script>
</body>
</html>

