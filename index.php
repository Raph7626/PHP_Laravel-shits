<?PHP 
session_start();

if(!isset($_SESSION['username'])){
    header('Location: login.php');
}
?>

<html>
<head>
    <title> Trang Chủ </title>
    <meta charset="utf-8">
</head>
</body>
    Chúc mừng bạn có username là <?PHP echo $_SESSION['username']; ?> dã đăng nhập thành công!
</body>
</html>