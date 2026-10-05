<!DOCTYPE html>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">
    <title>Thêm sinh viên</title>
</head>

<body>

    <div class="mb-3 mt-3 mx-3 my-3 p-3">
        <form method="post" action="register.php" class="form">
            <h2 class="text-danger fw-bold">Thêm sinh viên</h2>
            <div class="mb-3 mt-3 mx-3 my-3 border border-2 border-dark p-3">
                <div class="my-2 ">
                    <p>Họ tên:</p>
                    <input type="text" name="hoten" value="" required/><br />
                </div>

                <div class="my-2 ">
                    <p>Lớp:</p>
                    <input type="text" name="lop" value="" required/><br />
                </div>

                <div class="my-2 ">
                    <p>Khoa:</p>
                    <input type="text" name="khoa" value="" required/><br />
                </div>

                <div class="my-2 ">
                    <p>Email:</p>
                    <input type="email" name="email" value="" required/><br />
                </div>


                <input class="btn btn-success" type="submit" name="dangky" value="Đăng Ký" />
            </div>

            <?php require 'registerprocess.php'; ?>

        </form>
    </div>

</body>

</html>