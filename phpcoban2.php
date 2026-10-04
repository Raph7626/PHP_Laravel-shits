<!DOCTYPE html>
<html lang="en">    
<body>
    <h1>Hoc lap trinh PHP</h1>
    <?PHP 
        echo "Cau lenh select:"."<br>";
        $connection = mysqli_connect('localhost','root','', 'testdb') or die ("Loi ket noi");
        mysqli_set_charset($connection, 'utf8');
        $querySelect = "SELECT * FROM member";
        $results = mysqli_query($connection, $querySelect);
        if (mysqli_num_rows($results) > 0){
            $members = mysqli_fetch_all($results, MYSQLI_ASSOC);
            foreach ($members as $member){
                echo "username: {$member['username']}" . "<br/>";
                echo "password : {$member['password']}" . "<br/>";
                echo "phone: {$member['phone']}" . "<br/>";
            }
        }
        mysqli_close($connection);
    ?>
    
    <?PHP 
    
        echo "Cau lenh insert:"."<br>";
        $connection = mysqli_connect('localhost','root','', 'testdb') or die ("Loi ket noi");
        mysqli_set_charset($connection, 'utf8');
        $queryInsert = "INSERT INTO member (id, username, password, phone, email) VALUES ('11', 'annv', '12345', '087252525', 'annv@example.com')"; 
        $isInsertTable = mysqli_query($connection, $queryInsert);
        if ($isInsertTable){
            echo "Insert du lieu thanh cong";
        }
        else{
            echo "Insert du lieu that bai";
        }
        mysqli_close($connection);
        
    ?>

    <?PHP
    /*
        echo "Cau lenh UPDATE:"."<br>";
        $connection = mysqli_connect('localhost','root','', 'testdb') or die ("Loi ket noi");
        mysqli_set_charset($connection, 'utf8');
        $sqlUpdate = "UPDATE member SET phone = '0981567898' WHERE id = '11'";
        $isUpdateTable = mysqli_query($connection, $sqlUpdate);
        if ($isUpdateTable){
            echo "Update du lieu thanh cong";
        }
        else{
            echo "Update du lieu that bai";
        }
        mysqli_close($connection);
        */
    ?>

    <?PHP 
    /*
        echo "Cau lenh DELETE:"."<br>";
        $connection = mysqli_connect('localhost','root','', 'testdb') or die ("Loi ket noi");
        mysqli_set_charset($connection, 'utf8');
        $sqlDelete = "DELETE FROM member where id = '11'";
        $isDeleteTable = mysqli_query($connection, $sqlDelete);
        if ($isDeleteTable){
            echo "Delete du lieu thanh cong";
        }
        else{
            echo "Delete du lieu that bai";
        }
        mysqli_close($connection);*/
    ?>  

    <?PHP 
        echo "<br />" . "Cau lenh Select PDO: " . "<br />";
        const DB_DSN = 'mysql:host=localhost;dbname=testdb';
        const DB_USERNAME = 'root';
        const DB_PASSWORD = ''; try{
            $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $sqlSelect = "Select * from member WHERE id = ?";
            $querySelect = $connection->prepare($sqlSelect);
            $querySelect->bindParam(1, $id);

            $id = "9";

            $isSelect = $querySelect->execute();
            $members = $querySelect->fetchAll(PDO::FETCH_ASSOC);
            foreach($members as $member){
                echo "username : {$member['username']}" . "<br/>";
            }
            echo "Truy van du lieu PDO thanh cong" . "<br/>";

        }
        catch (PDOException $e){
            echo "Connection failed: " . $e->getMessage();
        }   
        $connection = null;  
    ?>

    <?PHP 
    /*
        echo "<br />" . "Cau lenh insert PDO: " . "<br />";
        try{
            $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $sqlInsert = "INSERT INTO member(username, password, phone, email) VALUES(?, ?, ?, ?)";
            $queryInsert = $connection->prepare($sqlInsert);
            $queryInsert->bindParam(1, $username);
            $queryInsert->bindParam(2, $password);
            $queryInsert->bindParam(3, $phone);
            $queryInsert->bindParam(4, $email);
            
            $username = "annv PDO";
            $password = "12345";
            $phone = '0989576230';
            $email = 'annv_PDO@gmail.com';

            $isInsert = $queryInsert->execute();
            echo 'Them du lieu PDO thanh cong';        
            }
            catch(PDOException $e){
                echo "Connection failed : " . $e->getMessage();
            }
            $connection = null
            */
            
    ?>

    <?PHP 
    
        echo "<br/>" . "Cau lenh UPDATE PDO: " . "<br />";
        try{
            $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $sqlUpdate = "UPDATE member SET username = ? WHERE id = ?";
            $queryUpdate = $connection->prepare($sqlUpdate);
            $queryUpdate->bindParam(1, $username);
            $queryUpdate->bindParam(2, $id);

            $username = "ann_PDO_1";
            $id = "9";

            $isUpdate = $queryUpdate->execute();
            echo "Sua du lieu PDO thanh cong";
        }
        catch(PDOException $e){
                echo "Connection failed : " . $e->getMessage();
        }
        $connection = null;
        
    ?> 

    <?PHP 
        echo "<br />" . "Cau lenh DELETE PDO: " . "<br />";
        try{
            $connection = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            $sqlDelete = "DELETE from member WHERE id = ?";
            $queryDelete = $connection->prepare($sqlDelete);
            $queryDelete->bindParam(1, $id);

            $id = "13";

            $isDelete = $queryDelete->execute();
            echo "Xoa du lieu PDO thanh cong";
        }
        catch(PDOException $e){
                echo "Connection failed : " . $e->getMessage(); 
        }
        $connection = null;
    ?>


</body>
</html>