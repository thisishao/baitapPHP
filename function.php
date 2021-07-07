<?php

$mang = array(
    321,
    312,
    3,
    4,
    5,
    45,
    56,
    5,
    7,
    6,
    787,
    67,
    8,
    7,
    2
      
);
$number = 67;

function getNumber($mang, $number)
{
    $count = count($mang);

    for ($i=0; $i < $count; $i++) { 
        if ($mang[$i] == $number) {
            echo "có số ".$number.' vi tri '.$i;
            // echo $number;
                return true;
        }
    }
}

getNumber($mang, $number);

// Bai 1


// $demo = array();
// for ($i=1; $i <= 100; $i++) { 
//     $demo[$i] = $i;
// }

// function chiahetcho3($demo)
// {
//     for ($i=1; $i  < count($demo); $i ++) { 
//         if ($demo[$i] % 3 == 0) {
//             echo $demo[$i]."-";
//         }
//     }
// }

// chiahetcho3($demo);

// Bai 2


?>