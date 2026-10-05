<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">
    <title>EDIT DATA</title>
</head>

<body>
    <?php
    // $conn = mysqli_connect('localhost', 'root', '', 'testdb') or die ('Loi ket noi');
    // mysqli_set_charset($conn, "utf8");
    include_once('connect.php');
    $id = $_GET['id'];
    $query = mysqli_query($conn, "Select * From sinhvien where masv = '$id'");
    $row = mysqli_fetch_assoc($query);
    ?>
    <h2 class="text-danger fw-bold mt-2">Edit Form sinh vien</h2>
    <div class="mb-3 mt-3 mx-3 my-3 border border-2 border-dark p-3">
        <form method="post" class="form">

                <div class="my-2 ">
                    <p>Masv:</p>
                    <input type="text" name="masv" value="<?php echo $row['masv']; ?>" readonly /><br />
                </div>
                <div class="my-2 ">
                    <p>Họ tên:</p>
                    <input type="text" name="hoten" value="<?php echo $row['hoten']; ?>" required /><br />
                </div>

                <div class="my-2 ">
                    <p>Lớp:</p>
                    <input type="text" name="lop" value="<?php echo $row['lop']; ?>" required /><br />
                </div>

                <div class="my-2 ">
                    <p>Khoa:</p>
                    <input type="text" name="khoa" value="<?php echo $row['khoa']; ?>" required /><br />
                </div>

                <div class="my-2 ">
                    <p>Email:</p>
                    <input type="email" name="email" value="<?php echo $row['email']; ?>" required /><br />
                </div>

                <input class="btn btn-success" type="submit" name="update_user" value="Update"/>
                <?php
                if (isset($_POST['update_user'])) {
                    $masv = trim($_POST['masv']);
                    $hoten = trim($_POST['hoten']);
                    $lop = trim($_POST['lop']);
                    $khoa = trim($_POST['khoa']);
                    $email = trim($_POST['email']);
    
                    $conn = mysqli_connect('localhost', 'root', '', 'testdb') or die('Loi ket noi');

                    if ($conn->connect_error) {
                        die("Connection failed!: " . $conn->connect_error);
                    }
                    $sql = "Update sinhvien set hoten = '$hoten', lop = '$lop', khoa = '$khoa', email = '$email' where masv = '$masv'";
                    if ($conn->query($sql) === TRUE) {
                        header('Location: view_users.php');
                    } else {
                        echo "Loi phat sinh khi update";
                    }
                    $conn->close();
                }
                ?>
        </form>
    </div>
</body>

</html>