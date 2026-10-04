<!DOCTYPE html>
<html lang="en">
    <body>
        <h1>Hoc lap trinh PHP</h1>
        <?PHP
            echo "<hr>";
        ?>
            <p> Tai lieu hoc PHP </p>
            <p> Tai lieu hoc CSS</p>
        <?PHP
            echo "<h1> Tai lieu hoc PHP</h1>";
            echo "<h3> Tai lieu hoc MYSQL</h3>";
            echo "<h4> Tai lieu hoc JS</h4>";
        ?>
        <hr>
        <?PHP
            $text = "Tu co ban" . " den nang cao";
            echo $text;
        ?>
        <br>
        <?PHP
            $text = "O ha noi";
            echo "Toi la" . "Nguyen Van A," . " Sinh nam " . 1990 . " lam viec " . $text;
        ?>
        <br>
        <?PHP
            $name = "Nguyen Van Tam";
            $year = 1990;
            echo "<p>Ho va ten: $name</p>";
            echo "<p> Gioi tinh cua $name la nam</p>";
            $new_year = $year + 7;
            echo "<p> Nam sinh cua $name la $year</p>";
            echo var_dump($year);
            echo var_dump($new_year);
            $len = strlen($name);
            echo "<p>Độ dài của chuỗi $name là $len</p>";

            $a = str_word_count("HTML");
            $b = str_word_count("HTML CSS");
            echo "<p>Số từ của chuỗi HTML là $a</p>";
            echo "<p>Số từ của chuỗi HTML CSS là $b</p>";
            $c = str_word_count($name);
            echo "<p>Số từ của $name là $c</p>";

            print_r(str_word_count($name, 1));
            echo "<br>";
            print_r(str_word_count($name, 1, "eua"));

        ?>
        <?PHP 
            $number = 60;
            if($number > 50){
                echo "<p> Tai lieu hoc HTML</p>";
                echo "<p> Tai lieu hoc CSS</p>";
            }
            else{
                echo "<p>Tai lieu hoc javascript </p>";
            }
        ?>
        <?PHP 
            $day = getdate()["wday"];
            if($day == 0){
                echo "<p>Hom nay la chu nhat</p>";
            }
            else if($day == 1){
                echo "<p>Hom nay la thu hai</p>";
            }
            else if($day == 2){
                echo "<p>Hom nay la thu ba</p>";
            }
            else if($day == 3){
                echo "<p>Hom nay la thu tu</p>";
            }
            else if($day == 4){
                echo "<p>Hom nay la thu nam</p>";
            }
            else if($day == 5){
                echo "<p>Hom nay la thu sau</p>";
            }
            else{
                echo "<p>Hom nay la thu bay</p>";
            }
        ?>
        <br>
        <?PHP 
            $money = 10000;
            switch($money){
                case 2000:
                    echo "<p>Tra da</p>";
                    break;
                case 8000;
                    echo "<p>Sting dau</p>";
                    break;
                case 10000:
                    echo "<p>Ca phe da</p>";
                    break;
                case 12000:
                    echo "<p>Ca phe sua</p>";
                    break;
            }
        ?>
        <?PHP 
            $season = "ha";
            switch($season){
                case "xuan":
                    echo "<p>Mua Xuan </p>";
                    break;
                case "ha":
                    echo "<p>Mua Ha </p>";
                    break;
                case "thu":
                    echo "<p>Mua Thu </p>";
                    break;
                case "dong":
                    echo "<p>Mua Dong </p>";
                    break;
            }
        ?>
        <?PHP 
            for($i = 1; $i <= 5; $i++) {
                echo "<p>Lap trinh web $i </p>";
            }
        ?>
        <?PHP 
            for($i = 1 ; $i <= 10; $i++) {
                echo"Number: " . ($i+1) . "<br>";
            }
        ?>
        <style>
            .square{
                height:20px;
                width:20px;
                float:left;
                border:1px solid gray;
                margin-left:5px;
                margin-bottom:5px;
            }
        </style>


        <?PHP 
        for($i = 0; $i < 5; $i++) {
            for($j = 0; $j < 10; $j++) {
                echo "<div class='square'></div>";
            }
            echo "<div style='clear:both'></div>";
        }
        ?>
        <?PHP 
            $mobile = array("HTC", "Samsung", "Nokia", "Apple", "LG");
            for($i = 0; $i <count($mobile); $i++) {
                echo $mobile[$i] . "<br>";
        }
        ?>
        <?PHP 
            $data = array("HTML", "CSS", "JavaScript", "Mysql", "PHP");
            foreach($data as $value) {
                echo $value . "<hr>";
        }
        ?>
        <?PHP 
            $i = 1;
            echo "<hr>";
            while($i < 10){
                //echo "<p>" . $i . "</p>";
                echo "-" . $i . "-";
                $i++;
            }
        ?>
        <?PHP
            echo "<hr>";
            $i = 8;
            do{
                //echo "<p>" . $i . "</p>";
                echo "-" . $i . "-" ;
                $i--;
            }while($i > 0);
        ?>
        <?PHP
            echo "<hr>";
            $mobile = array("HTC", "Samsung", "Nokia", "Apple", "LG");
            $i = 0;
            while($i < count($mobile)) {
                echo $mobile[$i] . "<br>";
                $i++;
            }
        ?>

        <?PHP 
            $salaries =  ['A' => 1000, 'B' => 2000, 'C' => 3000, 'D' => 4000];
            echo "<br /> Salaries['B'] = " . $salaries['B'];

        ?>
        <?PHP 
            function GioiThieuBanThan(){
                    $name = "Hoàng Ngọc Tú";
                    $year = 1993;
                    echo"<p>Tôi tên là $name, sinh năm $year </p>";
            }
            GioiThieuBanThan();
        ?>
        <?PHP
            function GioiThieuBanThanCoBien($name, $year){
                echo"<p>Tôi tên là $name, sinh năm $year </p>";
            }
            GioiThieuBanThanCoBien("Trinh Giáo Kim", 1993);
            GioiThieuBanThanCoBien("La Thành", 1989);
            GioiThieuBanThanCoBien("Tần Thúc Bảo", 1985);
        ?>
        <?PHP 
            function number($a, $b){
                return pow($a+$b, 2);
            }
            $a = 5;
            $b - 2;
            $result = number($a, $b);
            echo "<p>Tổng bình phương của $a và $b là $result</p>";
        ?>


    <bh>

    <?PHP 
        function TinhN($so){
            $ketQua = 1;
            for($i=1; $i<=$so; $i++){
                $ketQua = $ketQua * $i;
            }
            return $ketQua;
        }
            $m = 5;
            echo "Giai thua cua $m la: " . TinhN($m);
        
    ?>
    </body>

</html>