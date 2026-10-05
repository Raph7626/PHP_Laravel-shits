<?php 
header('Content-Type: text/html; charset=utf-8');
//ket noi db
 $conn = mysqli_connect('localhost', 'root', '', 'testdb') or die ('Loi ket noi');
 mysqli_set_charset($conn, "utf8");
//dung isset ktra form
    if(isset($_POST['dangky'])){
        $errors = array();
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        $email = trim($_POST['email']);
        $phone = trim($_POST['phone']);

        if(empty($username)) {
            array_push($errors,'Username is required');
        }
        if(empty($password)) {
            array_push($errors,'Password is required');
        }
        if(empty($email)) {
            array_push($errors,'Email is required');
        }
        if(empty($phone)) {
            array_push($errors,'Phone is required');
        }

        $sql = "Select * From member where username = '$username' or email = '$email'";

        $res = mysqli_query($conn,$sql);

        if (mysqli_num_rows($res) > 0)
            {
                echo '<script>alert("Bi trung ten hoac chua nhap ten!");window.location="register.php";</script>';
                die ();
            }
        else
            {
                $sqlInsert = "INSERT INTO `member` (`username`, `password`, `phone`, `email`) VALUES ('$username', '$password', '$phone', '$email');";

                if (mysqli_query($conn,$sqlInsert))
                    {
                        header('Location: view_users.php');
                    }
                else {echo '<script>alert("Co loi trong qua trinh xu li!");window.location="register.php";</script>';}
            } 

    }
    

?>