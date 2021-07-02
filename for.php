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

$n = 10;
$x = 5;
$tong = 0;
for ($i=1; $i <= $n ; $i++) { 
	$tong = $tong + $x * (2 * $i);
}
echo $tong;
// Bai 5
?>
