<html>
<body>
    <form action = "<?PHP $_PHP_SELF ?>" method = "POST">
        Tên: <input type="text" name="Ten"/>
        Tuổi: <input type="text" name="Tuoi:"/>
        <input type="submit" name="btn_submit" value="Submit"/>
    </form>

    <?PHP 
        if(isset($_POST['btn_submit'])){
            $Ten = $_POST['Ten'];
            $Tuoi = $_POST['Tuoi'];
            echo $Ten. " ". $Tuoi;
        }
    ?>

</body>
</html>