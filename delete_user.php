<?php 
$conn = mysqli_connect('localhost','root','','testdb') or die("Loi ket noi!");
mysqli_set_charset($conn,"utf8");

include_once('connect.php');
if(isset($_REQUEST['id']) and $_REQUEST['id']!=""){
    $id=$_GET['id'];
    $sql = "DELETE FROM member WHERE id='$id' ";

    if ($conn->query($sql) === TRUE){
        echo "Delete success";
    }else{
        echo "Error updating reord; " . $conn->error;
    }
    $conn->close();

}

?>