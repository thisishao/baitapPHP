<?php

	$error_toan = "";
	$error_ly 	= "";
	$error_hoa 	= "";
	$error_anh 	= "";
	$error_van	= "";
	$error_ls	= "";
	$dau = "";

	$check = 1;


	if (isset($_POST['form_sub'])) {
		if (empty($_POST['toan'])) {
			$error_toan = "Bạn chưa nhập điểm Toán";
			$check = 0;
		}
		if (empty($_POST['ly'])) {
			$error_ly = "Bạn chưa nhập điểm Lý";
			$check = 0;
		}
		if (empty($_POST['hoa'])) {
			$error_hoa = "Bạn chưa nhập điểm Hoá";
			$check = 0;
		}
		if (empty($_POST['anh'])) {
			$error_anh = "Bạn chưa nhập điểm Tiếng Anh";
			$check = 0;
		}
		if (empty($_POST['van'])) {
			$error_van = "Bạn chưa nhập điểm Văn";
			$check = 0;
		}
		if (empty($_POST['ls'])) {
			$error_ls = "Bạn chưa nhập điểm Lịch sử";
			$check = 0;
		}

		if ($check == 1) {

				$toann 	= $_POST['toan'] > 0 && $_POST['toan'] <= 10 ;
				$lyy 	= $_POST['ly'] > 0 && $_POST['ly'] <= 10 ;
				$hoaaa 	= $_POST['hoa'] > 0 && $_POST['hoa'] <= 10 ;
				$van 	= $_POST['van'] > 0 && $_POST['van'] <= 10 ;
				$anh 	= $_POST['anh'] > 0 && $_POST['anh'] <= 10 ;
				$ls 	= $_POST['ls'] > 0 && $_POST['ls'] <= 10 ;
				if (!$toann) {
					$error_toan = "Vui lòng nhập điểm từ 0 đến 10";
				}
				if (!$lyy) {
					$error_ly = "Vui lòng nhập điểm từ 0 đến 10";
				}
				if (!$hoaaa) {
					$error_hoa = "Vui lòng nhập điểm từ 0 đến 10";
				}
				if (!$van) {
					$error_van = "Vui lòng nhập điểm từ 0 đến 10";
				}
				if (!$anh) {
					$error_anh = "Vui lòng nhập điểm từ 0 đến 10";
				}
				if (!$ls) {
					$error_ls = "Vui lòng nhập điểm từ 0 đến 10";
				}

				if ($toann && $lyy && $hoaaa && $van && $anh && $ls) {
					
					if ($_POST['toan'] < 4 || $_POST['ly'] < 4 || $_POST['hoa'] < 4 || $_POST['van'] < 4 || $_POST['anh'] < 4 || $_POST['ls'] < 4 ) {
						$dau = "Bạn được học sinh yếu cần cố gắng hơn !!!";
					}else{
						$total = $_POST['toan'] + $_POST['ly'] + $_POST['hoa'] + $_POST['anh'] + $_POST['van'] + $_POST['ls'];
						$xeploai = $total / 6;
						echo $xeploai;
						if ($xeploai < 5) {
							$dau = "Bạn được học sinh yếu cần cố gắng hơn !!!";
						}elseif ($xeploai > 5 && $xeploai < 6.4) {
							$dau = "Bạn được học sinh trung bình cần cố gắng hơn !!!";
						}elseif ($xeploai >= 6.5 && $xeploai < 7.9) {
							$dau = "Chúc mừng bạn được học sinh Khá";
						}elseif ($xeploai > 7.9) {
							$dau = "Chúc mừng bạn được học sinh Giỏi";
						}
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
				<td>Tiếng Anh: </td>
				<td><input type="text" name="anh"></input></td>
				<td><p><?php echo $error_anh; ?></p></td>
			</tr>
			<tr>
				<td>Văn</td>
				<td><input type="text" name="van"></input></td>
				<td><p><?php echo $error_van; ?></p></td>
			</tr>
			<tr>
				<td>Lịch Sử</td>
				<td><input type="text" name="ls"></input></td>
				<td><p><?php echo $error_ls; ?></p></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="form_sub" value="Kết quả"></input></td>
			</tr>
		</table>
	</form>
</body>
</html>
