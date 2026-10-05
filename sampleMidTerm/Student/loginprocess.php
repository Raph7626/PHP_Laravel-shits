<?php 
header('Content-Type: text/html; charset=utf-8');
session_start();
//ket noi db
 $conn = mysqli_connect('localhost', 'root', '', 'testdb') or die ('Loi ket noi');
 mysqli_set_charset($conn, "utf8");
//dung isset ktra form
    if(isset($_POST['dangnhap'])){
        
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);

        if($username == "" || $password == "") {
            echo "Username or password is not empty";
        }
        else {
             $sql = "Select * From member where username = '$username' and password = '$password'";
             $query = mysqli_query($conn,$sql);
             $num_rows = mysqli_num_rows($query);
             if($num_rows ==0)
                {
                    echo "Username or password is not true";
                }
            else{
                $_SESSION['username'] = $username;
                header('Location: index.php');
            }
        }

        

    }
    

?>