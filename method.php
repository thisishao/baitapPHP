<?php
		
		// 
		// mang thi dung var_dump
		// echo "<pre>"; //giup mang tu dong xuong dong
		// var_dump($_REQUEST);



	?>
	<!-- de lay value trong form thi co 3 cach: -->
	<!-- // muon lay value cua input trong php thi dua vao name  -->
	<!-- // muon lay data dang hien thi tren url thi dung GET -->
	<!-- - Get: 
		+ hien thi data len url
		+ lam lo thong tin nguoi dung, k bao mat

	- post: 
		+ k hien thi len url, ma chay ngam` ben duoi
		+ k hien nen bao hon

	- neu trong form k co method thi lay bang cach gi?
		+ dung request, va request se tra ve 1 mang, mang nay
		chua all value cua form -->

	<!-- - isset va empty
		+ isset: kiem tra 1 bien co ton tai k?
		+ empty: kiem tra 1 bien co gia tri k? -->


	<!-- kiem tra ng dung da click form chua?
	neu da click thi tat nhien bien da ton tai -->

	<?php 
		//bien toan cuc
		$error_toan = "";
		$error_ly = "";
		$mgs= "";
		if(isset($_POST['submit'])){
			// echo " ban da click form";
			if(empty($_POST['toan'])) {
				$error_toan = "vui long nhap diem toan";
			}

			if(empty($_POST['ly'])) {
				$error_ly = "vui long nhap diem ly";
			}

			if(!empty($_POST['toan']) && !empty($_POST['ly'])) {
				$mgs= "ban da nhap day du";
			}

		} else {
			// echo " ban chua click form";
		}
	?>
	<p><?php echo $mgs; ?></p>
	<form action="" method="post">

		Toán: <input type="text" name="toan" value="">
			<p><?php echo $error_toan; ?></p>
		ly: <input type="text" name="ly" value="">
			<p><?php echo $error_ly; ?></p>
		<button type="submit" name="submit">send</button> 
	</form>