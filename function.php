<?php

// $mang = array(
//     321,
//     312,
//     3,
//     4,
//     5,
//     45,
//     56,
//     5,
//     7,
//     6,
//     787,
//     67,
//     8,
//     7,
//     2
      
// );
// $number = 67;

// function getNumber($mang, $number)
// {
//     $count = count($mang);

//     for ($i=0; $i < $count; $i++) { 
//         if ($mang[$i] == $number) {
//             echo "có số ".$number.' vi tri '.$i;
//             // echo $number;
//                 return true;
//         }
//     }
// }

// getNumber($mang, $number);

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

// Tìm giá trị lớn nhất của 3 số $a và $b và $c




?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title></title>
</head>
<body>
<form method="POST" action="">
    <table>
        <tr>
            <td>Số A</td>
            <td><input type="text" name="soA" value="" placeholder="Nhập số A"> </td>
        </tr>
        <tr>
            <td>Số B</td>
            <td><input type="text" name="soB" value="" placeholder="Nhập số B"> </td>
        </tr>
        <tr>
            <td>Số C</td>
            <td><input type="text" name="soC" value="" placeholder="Nhập số C"> </td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="sub" value="Kết quả"></td>
        </tr>
    </table>
</form>
</body>
</html>

<?php 
    
    // $getA = $_POST['soA'];
    // $getB = $_POST['soB'];
    // $getC = $_POST['soC'];


    // function timsolonnhat($getA, $getB, $getC)
    // {
    //     $max = $getA;
    //     if ($max < $getB) {
    //         $max = $getB;
    //     }
    //     if ($max < $getC) {
    //         $max = $getC;
    //     }
    //     echo 'Số lớn nhất là '.$max;
    // }

    // timsolonnhat($getA, $getB, $getC);


    // function chiahet($numb)
    // {
    //     for ($i=1; $i <= 1000 ; $i++) { 
    //         if ($i % 40 == 0) {
    //             echo $i." ";
    //         }
    //     }
    // }
    // chiahet($numb);

    // echo "</br>";
    // echo "</br>";
    // echo "Nam nói\"Cậu ấy đang ăn tối\" ";


    // $demo = array("Hoang"=>"31","Nam"=>"41","Minh"=>"39","Hoa"=>"40");

    // asort($demo);
    // echo "1. Sắp xếp tăng dần theo Value: </br>";
    // foreach ($demo as $x => $x_value) {
    //     echo "Tuổi của ".$x." là: ".$x_value;
    //     echo "</br>";
    // }

    // ksort($demo);
    // echo "2. Sắp xếp tăng dần theo Key: </br>";
    // foreach ($demo as $x => $x_value) {
    //     echo "Tuổi của ".$x." là: ".$x_value;
    //     echo "</br>";
    // }
    // arsort($demo);
    // echo "3. Sắp xếp giảm dần theo Value: </br>";
    // foreach ($demo as $x => $x_value) {
    //     echo "Tuổi của ".$x." là: ".$x_value;
    //     echo "</br>";
    // }

    // krsort($demo);
    // echo "2. Sắp xếp giảm dần theo Key: </br>";
    // foreach ($demo as $x => $x_value) {
    //     echo "Tuổi của ".$x." là: ".$x_value;
    //     echo "</br>";
    // }

    // function sapxep($demo)
    // {
    //     foreach ($demo as $x => $x_value) {
    //     echo "Tuổi của ".$x." là: ".$x_value;
    //     echo "</br>";
    //     }
    // }
    // krsort(sapxep($demo));


    $demo2 = array('A' => 'Blue', 'B' => 'Green', 'c' => 'Red');


    function chuhoa($demo2)
    {       
        
        foreach ($demo2 as $key => $val) {
            // echo $key." Giá trị ".strtolower($val)." </br>";
            
            // $val = strtoupper($val);

            $arrayHoa[$key] = strtolower($val);
            
            // print_r($arrayHoa);
        }   
        return $arrayHoa;
    }
    function chuthuong($demo2)
    {       
        
        foreach ($demo2 as $key => $val) {
            // echo $key." Giá trị ".strtolower($val)." </br>";
            
            // $val = strtoupper($val);

            $arrayHoa[$key] = strtoupper($val);
            
            // print_r($arrayHoa);

        }   
        return $arrayHoa;
    }
    print_r($demo2);

    echo "<br> chữ thường <br>";
    $chuthuong = chuhoa($demo2);  
    print_r($chuthuong);
    echo "<br> CHỮ HOA <br>";
    $chuhoa = chuthuong($demo2);  
    print_r($chuhoa);
    // print_r($arrayHoa);

    // chuthuong($demo2);

 
?>