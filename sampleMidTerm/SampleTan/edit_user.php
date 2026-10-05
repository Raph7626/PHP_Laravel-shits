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
    $query = mysqli_query($conn, "Select * From member where id = '$id'");
    $row = mysqli_fetch_assoc($query);
    ?>
    <h2 class="text-danger fw-bold mt-2">Edit Form Member</h2>
    <div class="mb-3 mt-3 mx-3 my-3 border border-2 border-dark p-3">
        <form method="post" class="form">

                <div class="my-2 ">
                    <p>ID:</p>
                    <input type="text" name="id" value="<?php echo $row['id']; ?>" readonly /><br />
                </div>
                <div class="my-2 ">
                    <p>Username:</p>
                    <input type="text" name="username" value="<?php echo $row['username']; ?>" required /><br />
                </div>

                <div class="my-2 ">
                    <p>Password:</p>
                    <input type="text" name="password" value="<?php echo $row['password']; ?>" required /><br />
                </div>

                <div class="my-2 ">
                    <p>Email:</p>
                    <input type="email" name="email" value="<?php echo $row['email']; ?>" required /><br />
                </div>

                <div class="my-2 ">
                    <p>Phone:</p>
                    <input type="text" name="phone" value="<?php echo $row['phone']; ?>" required /><br />
                </div>
                <input class="btn btn-success" type="submit" name="update_user" value="Update"/>
                <?php
                if (isset($_POST['update_user'])) {
                    $id = trim($_POST['id']);
                    $username = trim($_POST['username']);
                    $password = trim($_POST['password']);
                    $email = trim($_POST['email']);
                    $phone = trim($_POST['phone']);

                    $conn = mysqli_connect('localhost', 'root', '', 'testdb') or die('Loi ket noi');

                    if ($conn->connect_error) {
                        die("Connection failed!: " . $conn->connect_error);
                    }
                    $sql = "Update member set username = '$username', password = '$password', phone = '$phone', email = '$email' where id = '$id'";
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