<?php 
	
	$error_toan = "";
	$error_ly 	= "";
	$error_hoa 	= "";
	$dau = "";
	if (isset($_POST['form_sub'])) {
		if (empty($_POST['toan'])) {
			$error_toan = "Bạn chưa nhập điểm Toán";
		}
		if (empty($_POST['ly'])) {
			$error_ly = "Bạn chưa nhập điểm Lý";
		}
		if (empty($_POST['hoa'])) {
			$error_hoa = "Bạn chưa nhập điểm Hoá";
		}
		if (!empty($_POST['toan']) && !empty($_POST['ly']) && !empty($_POST['hoa'])) {
			
			$total = $_POST['toan'] + $_POST['ly'] + $_POST['hoa'];

			if ($_POST['toan'] <= 1 || $_POST['ly'] <= 1 || $_POST['hoa'] <= 1) {
				$dau = "Bạn đã bị điểm liệt";
			}else{

				if ($total >= 15)  {
					$dau = "Chúc mừng bạn đã đậu tốt nghiệp";
				}else{
					$dau = "Bạn đã bạn rớt tốt nghiệp";
				}

				
			}

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
	<form action="" method="POST">
		<p><?php echo $dau; ?></p>
		<table>
			<tr>
				<td>Toán: </td>
				<td><input type="text" name="toan"></input></td>
				<td><p><?php echo $error_toan; ?></p></td>
			</tr>
			<tr>
				<td>Lý</td>
				<td><input type="text" name="ly"></input></td>
				<td><p><?php echo $error_ly; ?></p></td>
			</tr>
			<tr>
				<td>Hoá</td>
				<td><input type="text" name="hoa"></input></td>
				<td><p><?php echo $error_hoa; ?></p></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="form_sub" value="Kết quả"></input></td>
			</tr>
		</table>
	</form>
</body>
</html>
