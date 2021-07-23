<?php session_start();
	// if (isset($_SESSION['Username'])) {
	// 	echo '<h3>Xin chào '.$_SESSION['Username'].' </h3>';
	// }
	if (isset($_POST['sub_log'])) {
		if ($_SESSION['Username'] == $_POST['user'] && $_SESSION['pwd'] == $_POST['pwd_log']) {
			echo 'Bạn đã đăng nhập thành công';
		}else{
			echo 'Vui lòng kiểm tra lại User và Password';
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<table>
			<tr>
				<td>User:</td>
				<td><input type="text" name="user"></td>
			</tr>
			<tr>
				<td>Password:</td>
				<td><input type="password" name="pwd_log"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="sub_log" value="Đăng nhập"></td>
			</tr>
		</table>
	</form>
</body>
</html>