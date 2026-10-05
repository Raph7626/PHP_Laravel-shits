<!DOCTYPE html>
<html>
<head>
    <title>Editing Data</title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
    <?PHP
    include_once('connect.php');
    $id=$_GET['id'];
    $query = mysqli_query($conn,"SELECT * FROM `member` WHERE id='$id'");
    $row=mysqli_fetch_assoc($query);
    ?>
    <form method="POST" class="form">  
    <h2> Editing Member: </h2>
    <label> Username: <input type="text" value="<?PHP echo $row['username']; ?>" name=username></label><br/>
    <label> Email: <input type="text" value="<?PHP echo $row['email']; ?>" name=email></label><br/>
    <label> Phone: <input type="text" value="<?PHP echo $row['phone']; ?>" name=phone></label><br/>
    <input type="submit" value="Update" name="update_user">

    <?PHP
        if (isset($_POST['update_user'])){
            $id=$_GET['id'];
            $username=$_POST['username'];
            $email=$_POST['email'];
            $phone=$_POST['phone'];

            $conn = new mysqli("localhost", "root", "", "testdb");
            //$conn = mysqli_connect('localhost','root','', 'testdb');

            if($conn->connect_error){
                die("Connection failed: " . $conn->connect_error);
            }
            $sql = "UPDATE `member` SET username='$username', email ='$email', phone='$phone' WHERE id = '$id' ";
            if ($conn->query($sql) == TRUE) {
                header("Location: view_users.php");
                exit();
            }else{
                echo "Error updating record: " . $conn->error; 
            }
            $conn->close();

        }
    ?>

    </form>
</body>
</html>