<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
		<input type="file" name="demo">
		<input type="submit" name="uploadclick" value="Upload">
	</form>

<?php
	if (isset($_POST['uploadclick'])) {
		$size = 1048576;
		if (isset($_FILES['demo'])) {
			$arrayImg = $_FILES['demo']['name'];
			// $check = "jpg, png, jpeg, PNG, JPG";
			$check = array('jpg', 'png', 'jpeg','gif');

			$chek2 = explode('.', $arrayImg);
			// print_r($chek2);
			$chek22 = strtolower(end($chek2));
			$demo2 = in_array($chek22, $check);

			echo $chek22;
			// var_dump($demo2);
			if ($demo2 === true) {
				if ($_FILES['demo']['size'] >= $size) {
					echo "Vui lòng upload file dưới 1MB </br>";
				}
				elseif ($_FILES['demo']['error'] > 0 ) {
					echo "File Upload Bị Lỗi";
				}
				else{
					move_uploaded_file($_FILES['demo']['tmp_name'], './demo/'.$_FILES['demo']['name']);
					echo "Uploaded thành công";
				}
			}
			else{
				echo "Vui lòng chọn hình ảnh để upload";
			}

		}
		else{
			echo 'Bạn chưa chọn file upload';
		}

	}

	

?>
</body>
</html>