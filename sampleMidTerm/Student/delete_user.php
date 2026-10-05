<?php
    include_once('connect.php');
    if(isset($_REQUEST['id']))
        {
            $id = $_GET['id'];
            $sql = "DELETE FROM sinhvien WHERE masv = '$id'";
            if($conn->query($sql)===TRUE)
                {
                    header('Location: view_users.php');
                }
            else {
                echo "Nay sinh loi khi xoa";
            }
            $conn->close();
        }
?>