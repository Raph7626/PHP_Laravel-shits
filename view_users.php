<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<link rel="stylesheet" href="style.css">
</head>
<body>
    <form method="post" action="view_users.php" class="form">
        <h2> Danh sách thành viên</h2> 
        <table border="1">
        <tr>
        <td>ID</td>
        <td>Username</td>
        <td>Email</td>
        <td>Phone</td>
        </tr>
        <?PHP 
            $conn = mysqli_connect('localhost', 'root', '', 'testdb') or die ('Lỗi kết nối');
            mysqli_set_charset($conn,"utf8");
            $query = mysqli_query($conn,"SELECT * FROM `member`");
            while ($row=mysqli_fetch_array($query)){
        ?> 
                <tr>
                <td><?PHP echo $row['id'];?></td>
                <td><?PHP echo $row['username'];?></td>
                <td><?PHP echo $row['email'];?></td>
                <td><?PHP echo $row['phone'];?></td>
                <td><a href="edit_user.php?id=<?PHP echo $row['id']; ?>">Edit</a></td>
                <td><a href="delete_user.php?id=<?PHP echo $row['id']; ?>">Delete</a></td>
                </tr>


        <?PHP
        }
         ?>
         </table>
</form>
</body>

</html>