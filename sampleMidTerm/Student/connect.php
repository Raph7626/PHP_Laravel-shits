<?php
    $conn = mysqli_connect('localhost', 'root', '', 'testdb');
    if (mysqli_connect_errno())
        {
            echo "Loi xay ra khi ket noi den DB";
        }
?>
