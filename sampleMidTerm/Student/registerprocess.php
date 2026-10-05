<?php 
header('Content-Type: text/html; charset=utf-8');
//ket noi db
 $conn = mysqli_connect('localhost', 'root', '', 'testdb') or die ('Loi ket noi');
 mysqli_set_charset($conn, "utf8");
//dung isset ktra form
    if(isset($_POST['dangky'])){
        $errors = array();
        $hoten = trim($_POST['hoten']);
        $lop = trim($_POST['lop']);
        $khoa = trim($_POST['khoa']);
        $email = trim($_POST['email']);

        if(empty($hoten)) {
            array_push($errors,'Full name is required');
        }
        if(empty($lop)) {
            array_push($errors,'Class is required');
        }
        if(empty($khoa)) {
            array_push($errors,'Department is required');
        }
        if(empty($email)) {
            array_push($errors,'Email is required');
        }

        $sql = "Select * From sinhvien where hoten = '$hoten' or email = '$email'";

        $res = mysqli_query($conn,$sql);

        if (mysqli_num_rows($res) > 0)
            {
                echo '<script>alert("Bi trung ten hoac chua nhap ten!");window.location="register.php";</script>';
                die ();
            }
        else
            {
                $sqlInsert = "INSERT INTO `sinhvien` (`hoten`, `lop`, `khoa`, `email`) VALUES ('$hoten', '$lop', '$khoa', '$email')";

                if (mysqli_query($conn,$sqlInsert))
                    {
                        header('Location: view_users.php');
                    }
                else {echo '<script>alert("Co loi trong qua trinh xu li!");window.location="register.php";</script>';}
            } 

    }
    

?>