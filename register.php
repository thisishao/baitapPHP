<!-- tao giup a 2 trang:
register.php: gom co form va cac input sau:
 - email
 - username
 - pass
- avatar
+ cai nao chua nhap thi bao loi( dua tat ca loi vao mang ) dung foreach show ra duoi dang the p.
+ Ve phan email, kiemtra them 1 dk, gia tri nhap vao co pai email hay k?
+ avatar thi cho phep upload dang hinh anh va duoi 1mb -->

<!-- - kiem tra email da nhap chua, chua thi dua loi vao trong mang.
- neu nhap roi thi kiem tra dung dinh dang email chua, chua thi dua loi vao mang
tuong tu nhung cai khac.
Khi tat ca moi thu ok het: moi tien hanh dua email va pass vao SS -->


<?php session_start();
    
    $array_error = [];
    // var_dump($array_error);
    $demozz = 1;
    if (isset($_POST['sub'])) {
        
        // dang nhap email

        if (empty($_POST['email'])) {

            $array_error[] = "Vui lòng nhập Email";

            $demozz = 0;
        }else{

            $getEmail = $_POST['email'];
            if (filter_var($getEmail, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['email'] = $getEmail;
  
            }else{
                $array_error[] =  'Vui lòng nhập đúng định dạng Email';
                $demozz = 0;
            
                
            }

        }
        // print_r($array_error);
        // dang ky username

        if (empty($_POST['Username'])) {
            array_push($array_error, "Vui lòng nhập Username");
            $demozz = 0;
        }else{

            $_SESSION['Username'] = $_POST['Username'];
        }


        // dang ky password

        if (empty($_POST['pwd'])) {
            array_push($array_error, "Vui lòng nhập Password");
            $demozz = 0;
        }else{

            $_SESSION['pwd'] = $_POST['pwd'];
            
        }


        $size = 1048576;
        if (isset($_FILES['avt'])) {
            $arrayImg = $_FILES['avt']['name'];
            $check = array('jpg', 'png', 'jpeg','gif');
            $chek2 = explode('.', $arrayImg);
            $chek22 = strtolower(end($chek2));
            $demo2 = in_array($chek22, $check);


            if ($demo2 === TRUE) {
                if ($_FILES['avt']['size'] >= $size) {
                    array_push($array_error, "Vui lòng upload file dưới 1MB");
                    $demozz = 0;
                }elseif($_FILES['avt']['error'] > 0){
                    array_push($array_error, "File Upload Bị Lỗi");
                    $demozz = 0;
                }else{
                    move_uploaded_file($_FILES['avt']['tmp_name'],'./demo/'.$_FILES['avt']['name']);
                }   
            }else{
                array_push($array_error, "Vui lòng chọn hình ảnh để upload");
                $demozz = 0;
            }
        }
        if ($demozz == 1) {
            echo '<h3> Đăng ký thành công <3 </h3>';
            echo '<script type="text/javascript">
            window.location = "login.php"
            </script>';
            // return false;
        }

    }

    var_dump($array_error);
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


            <?php 
                $html = "";
                // var_dump($demo1);
                if (isset($demo1)) {
                    foreach ($demo1 as $key => $val) {

                        if (isset($demo1['error_EmailD'])) {
                            echo $demo1['error_EmailD'].'<br/>';

                        }
                        if (isset($demo1['error_Email'])) {
                            echo $demo1['error_Email'].'<br/>';

                        }
                        if (isset($demo1['error_Pwd'])) {
                            echo $demo1['error_Pwd'].'<br/>';
                            // break;
                        }

                        // echo $val;
                        break;
                    }
                }
                // 
            ?>

            <tr>
                <td>Email:</td>
                <td><input type="text" name="email"></td>
                <td><p><?php  ?></p></td>
            </tr>
            <tr>
                <td>Username:</td>
                <td><input type="text" name="Username"></td>
            </tr>
            <tr>
                <td>Pass:</td>
                <td><input type="password" name="pwd"></td>
            </tr>
            <tr>
                <td>Avatar:</td>
                <td><input type="file" name="avt"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" name="sub" value="Submit"></td>
            </tr>
            <?php echo $html ?>
        </table>
    </form>
</body>
</html>

