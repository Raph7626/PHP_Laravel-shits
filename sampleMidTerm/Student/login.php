<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <div class="mb-3 mt-3 mx-3 my-3 border border-2 border-dark p-3">
        <form  method="post" action="login.php" class="form">
            <h2>LOGIN: MEMBER</h2>
            <div class="mb-3">
            <p>USERNAME:</p>
            <input type="text" name="username" value="" required size="50" />
        </div>
        <div class="mb-3">
            <p>PASSWORD:</p>
            <input type="text" name="password" value="" required size="50" />
        </div>
        <input class="btn btn-primary" type="submit" name="dangnhap" value="Đăng Nhập" />
    <?php require 'loginprocess.php'; ?>
    
    </form>
    </div>
</body>
</html>