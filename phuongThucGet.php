<!DOCTYPE html>
<html lang="en">
<body>
    <form action = "<?PHP $_PHP_SELF ?>" method = "GET">
    Tên: <input type = "text" name = "Ten" />
    Tuổi: <input type = "text" name = "Tuoi"/>
    <input type="submit" name="btn_submit" value="Submit"/>
    </form>

    <?PHP 
    if(isset($_GET['btn_submit'])){
        $Ten = $_GET['Ten'];
        $Tuoi = $_GET['Tuoi'];
        echo $Ten. " ".$Tuoi;
    }
    ?>
</body>
</html>