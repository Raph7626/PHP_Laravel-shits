<?PHP 
    session_start();

    $conn=mysqli_connect('localhost','root','','testdb') or die('Lỗi kết nối!!');
    mysqli_set_charset($conn, "utf8");

    if (isset($_POST["btn_submit"])){
        $username = $_POST["username"];
        $password = $_POST["password"];

        $username = strip_tags($username);
        $username = addslashes($username);
        $password = strip_tags($password);
        $password = addslashes($password);
        if ($username == "" || $password ==""){
            echo "username or password is not empty!";
        }else{
            $sql = "SELECT * FROM `member` WHERE username = '$username' AND password = '$password' ";
            $query = mysqli_query($conn,$sql);
            $num_rows = mysqli_num_rows($query);
            if  ($num_rows==0){
                echo "username or password is not true!";
            }else{
                $_SESSION['username'] = $username;

                header('Location: index.php');
            }
        }
    }
?>