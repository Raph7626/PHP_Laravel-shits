<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bs/css/bootstrap.min.css" rel="stylesheet">
    <title>View_Users</title>
</head>
<body>
    <h2>Danh sach MEMBER</h2>
     <div class="container mg-5">
    <form  method="get" action="register.php">
        <button
            type="submit"
            class="btn btn-success mb-2" 
        >
            Thêm
        </button>
        
    </form>
    <form  method="post" action="login.php" class="form">
       
        <table border="1" class="table table-secondary">
            <tr>
                <td>Id</td>
                <td>Username</td>
                <td>Email</td>
                <td>Phone</td>
                <td>Sua</td>
                <td>Xoa</td>


            </tr>
            <?php 
                //require connect.php
                $conn = mysqli_connect('localhost', 'root', '', 'testdb') or die ('Loi ket noi');
                mysqli_set_charset($conn, "utf8");
                //doi member thanh table can thiet
                $sql = "Select * From member";
                $query = mysqli_query($conn,$sql);
                while($row=mysqli_fetch_array($query)){
            ?>
                <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['phone']; ?></td>
                <td> 
                <a href="edit_user.php?id=<?php echo $row['id']; ?>">Edit </a></td>
                <td>               
                <a href="delete_user.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Bạn có chắc muốn xóa?')">Delete</a></td>
                </tr>

            <?php }?>
        </table>
    </div>
    
    </form>
</body>
</html>