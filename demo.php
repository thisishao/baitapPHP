<?php 

	// $sinhvien = "Huỳnh Quang Hào";
	// echo $sinhvien

	// define("Yamaha", "Exciter 155");
	// echo Yamaha;

	
	// $hao = false; 
	// echo $hao;

	// $thap_phan = 123; 
	// $so_am = -123; 
	// $bat_phan = 0123; 
	// $thap_luc_phan = 0x1A; 
	// echo $bat_phan
	

	// $name = array();

	// $name[0]= "Huỳnh Quang Hào";
	// $name[1]= "Trần Thị Bảo Nhi";
	// var_dump($name);
	// echo $name[1];

	// $Name = array(
	// 	'sinhvien_a' =>  'Huỳnh Quang Hào',
	// 	'sinhvien_b' =>  'Trần Thị Bảo Nhi'
	// );
	// echo $Name["sinhvien_b"];

	// $a = array();
	// $a[0][1] = 1222;
	// $a[0][2] = 12233;
	// var_dump($a)
	
	// $so_can_kiem_tra = 1995;
	// $so_du = $so_can_kiem_tra % 2;
	// if ($so_du == 0){
	//      echo 'Số '.$so_can_kiem_tra.' Là Số Chẵn';
	// }else{
	// 	echo 'Số '.$so_can_kiem_tra.' Là Số Lẻ';
	// }

	
	// $mau = 'màu xanh';
	  
	// 	if ($mau == 'màu xanh'){
	// 	    echo 'Đây là màu xanh';
	// 	}
	// 	else if ($mau == 'màu đỏ')
	// 	{
	// 	    echo "Đây là màu đỏ";
	// 	}
	// 	else if ($mau == 'màu vàng'){
	// 	    echo 'Đây là màu vàng';
	// 	}




?>


<?php
	$error = "";

	if (isset($_POST['click'])) {
		$number = $_POST['numb'];
		$so_du = (int)$number % 7;

		if (empty($_POST['numb'])) {
			$error= "Vui lòng nhập";
		}else{
			if ($so_du == 0 ) {
				echo $number. ' Chia hết cho 7';
			}else{
				echo $number. ' Không chia hết cho 7';
			}
		}

	}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>
		
	</title>
</head>
<body>
	<form method="POST">
		<table>
			<tr>
				<td>
					<input type="text" name="numb" value="" placeholder="Nhập số vào đâyy">
					<p><?php echo $error; ?></p>
				</td>
				<td><input type="submit" name="click" value="Kết quả"></td>
			</tr>
			<tr>
				<td><p class="numbb"></p></td>
			</tr>
		</table>
	</form>
</body>
</html>


