<?php
// for ($i = 0; $i <= 100; $i++){
//     if ($i % 2 == 0){
//         echo $i."-";
//     }
// }
//Bai1

// $array = [
// 1,23,32,5,43,321,312,352,2,13,153,21,401,1,
// ];
// $demo = 1;
// $vitri = null;

// $count = count($array);
// for ($i=0; $i < $count; $i++) { 
// 	// echo $array[$i]."-";
// 	if ($demo == $array[$i]) {
// 		$demo = $array[$i];
// 		$vitri = $i;
// 	}else{
// 		if ($demo < $array[$i]) {
// 			$demo = $array[$i];
// 			$vitri = $i;
// 		}
// 	}

// }

// echo $demo.' vị trí '.$vitri;
// echo "<pre>";
// var_dump($array)

//Bai 2
// $name = "Nguyễn Văn Cường";
 
// for ($i = 0; $i < strlen($name); $i++){
//     echo "$name[$i] <br/>";
// }

//Bai 3

// $n = 10;
// $tong = 0;
// for ($i=1; $i <= $n ; $i++) { 
// 	$tong = $tong + 1/$i;
// }

// echo $tong;

// Bai 4

// $n = 10;
// $x = 5;
// $tong = 0;
// for ($i=1; $i <= $n ; $i++) { 
// 	$tong = $tong + $x * (2 * $i);
// }
// echo $tong;
// Bai 5


// $x = 1;
// while ($x <= 1000) {
// 	echo $x." ";
// 	$x++;
// }

// for ($i = 1; $i < 100; $i += 2) { 
// 	echo $i." ";
// }
// Bai 6

$array = array(
	array(
		'name' 	=> 'Hao 1',
		'email'	=> 'Hao1@gmail.com',
		'age'	=>	'1'
	),
	array(
		'name' 	=> 'Hao 2',
		'email'	=> 'Hao2@gmail.com',
		'age'	=>	'2'
	),
	array(
		'name' 	=> 'Hao 3',
		'email'	=> 'Hao3@gmail.com',
		'age'	=>	'3'
	),
	array(
		'name' 	=> 'Hao 4',
		'email'	=> 'Hao4@gmail.com',
		'age'	=>	'4'
	),
	array(
		'name' 	=> 'Hao 5',
		'email'	=> 'Hao5@gmail.com',
		'age'	=>	'5'
	),
	array(
		'name' 	=> 'Hao 6',
		'email'	=> 'Hao6@gmail.com',
		'age'	=>	'6'
	)
);
$count = count($array);


?>
<table border="1">
	<?php
		for($i=0; $i < $count; $i++){
	?>		
			<tr>
				<td><?php echo $array[$i]['name']; ?></td>
				<td><?php echo $array[$i]['email']; ?></td>
				<td><?php echo $array[$i]['age']; ?></td>
			</tr>
	<?php
		}
	?>
</table>