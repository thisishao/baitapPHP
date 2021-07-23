<!-- tao giup a 2 trang:
register.php: gom co form va cac input sau:
 - email
 - username
 - pass
- avatar
+ cai nao chua nhap thi bao loi( dua tat ca loi vao mang ) dung foreach show ra duoi dang the p.
+ Ve phan email, kiemtra them 1 dk, gia tri nhap vao co pai email hay k?
+ avatar thi cho phep upload dang hinh anh va duoi 1mb -->


<?php session_start();
    
    $errorM = array();
    $demozz = 1;
    if (isset($_POST['sub'])) {
        
        // dang nhap email

        if (isset($_POST['email']) ? $_POST['email']: '') {
            $getEmail = $_POST['email'];
            if (filter_var($getEmail, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['email'] = $getEmail;
  
            }else{
                $demo1 = array('error_EmailD' => 'Vui lòng nhập đúng định dạng Email');
                $demozz = 0;
            }
        }else{
            $errorEmail = array('error_Email' => 'Vui lòng nhập Email');
            if (isset($errorM)) {
                $demo1 = array_merge($errorM, $errorEmail);
            }
            $demozz = 0;
            unset($_SESSION['email']);
            // var_dump($demo1);
        }

        // dang ky username

        if (isset($_POST['Username']) ? $_POST['Username']: '') {
            $_SESSION['Username'] = $_POST['Username'];

        }else{
            $errorUser = array('error_Username' => 'Vui lòng nhập Username');
            if (isset($demo1)) {
                $demo1 = array_merge($demo1, $errorUser);
            }else{
                $demo1 = $errorUser;
            }
            unset($_SESSION['Username']);
            $demozz = 0;
        }


        // dang ky password

        if (isset($_POST['pwd']) ? $_POST['pwd']: '') {
            $_SESSION['pwd'] = $_POST['pwd'];
        }else{
            $errorPwd = array('error_Pwd' => 'Vui lòng nhập Password');
            if (isset($demo1)) {
                $demo1 = array_merge($demo1, $errorPwd);
            }else{
                $demo1 = $errorPwd;
            }
            unset($_SESSION['pwd']);
            $demozz = 0;
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
                    $errorImgsize = array('errorImgsize' => 'Vui lòng upload file dưới 1MB');
                    if (isset($demo1)) {
                        $demo1 = array_merge($demo1, $errorImgsize);
                    }else{
                        $demo1 = $errorImgsize;
                    }
                    $demozz = 0;
                }elseif($_FILES['avt']['error'] > 0){
                    $errorImgr = array('errorImgr' => 'File Upload Bị Lỗi');
                    if (isset($demo1)) {
                        $demo1 = array_merge($demo1, $errorImgr);
                    }else{
                        $demo1 = $errorImgr;
                    }
                    $demozz = 0;
                }else{
                    move_uploaded_file($_FILES['avt']['tmp_name'],'./demo/'.$_FILES['avt']['name']);
                }   
            }else{
                $errorImg = array('errorImg' => 'Vui lòng chọn hình ảnh để upload');
                if (isset($demo1)) {
                    $demo1 = array_merge($demo1, $errorImg);
                }else{
                    $demo1 = $errorImg;
                }
                $demozz = 0;
            }
        }
        if ($demozz == 1) {
            echo '<h3> Đăng ký thành công <3 </h3>';
            echo '<script type="text/javascript">
            window.location = "login.php"
            </script>';
            return false;
        }
        // return false;

        // var_dump($demo1);

        // echo $_SESSION['email'];
        // echo $_SESSION['name'];
        // echo $_SESSION['pwd'];
    }

    
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

                        echo $demo1['error_Username'];
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

