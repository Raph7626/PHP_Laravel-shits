<?php 
header('Content-Type: text/html; charset=utf-8');

$conn = mysqli_connect('localhost','root','','testdb') or die ("LOI KET NOI");
mysqli_set_charset($conn,"utf8");

if (isset($_POST['dangky'])){
    $username = trim($_POST['username']);
    $password = trim($_POST['password']);
    $email = trim($_POST['email']);
    $phone = trim($_POST['phone']);

        if (empty($username)){
            array_push($errorss, "Username is required");
        }
        if (empty($email)){
            array_push($error, "Email is required");
        }
        if (empty($phone)){
            array_push($error, "Password is required");
        }
        if (empty($password)){
            array_push($error, "Two password do not match");
        }

        $sql = "SELECT * FROM member WHERE username = '$username' OR email = '$email'";

        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result)>0){
            echo '<script language="javascript">alert("Bi trung ten hoac chua nhap ten"); window.location="register.php";</script>';

            die ();
        }
        else{
            $sqli = "INSERT INTO member (username, password, email, phone) VALUES ('$username', '$password', '$email', '$phone')";
            
            if (mysqli_query($conn,$sqli)){
                    echo "Ten dang nhap: ". $_POST['username'] . "<br/>";
                    echo "Mat Khau: ". $_POST['password'] . "<br/>";
                    echo "Email dang nhap: ". $_POST['email'] . "<br/>";
                    echo "So dien thoai: ". $_POST['phone'] . "<br/>";
                    echo '<script language="javascript"> alert("Dang ky thanh cong!"); window.location="register.php";</script>';
            }
            else{
                 echo '<script language="javascript"> alert("Co loi trong qua trinh xu ly"); window.location="register.php";</script>';
            }
        
            }
        }


?>