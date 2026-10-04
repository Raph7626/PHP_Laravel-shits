<!DOCTYPE html>
<html>
<body lang="en">
   <?PHP 
   
    $SinhVien = [
        'MaSV' => ['sv1' => '01', 'sv2'=>'02', 'sv3'=>'03', 'sv4'=>'04', 'sv5'=>'05', 'sv6'=>'06'],
        'HoTen' => ['sv1' => 'Nguyen Thanh Long', 'sv2'=> 'Hoang Ngoc Tu', 'sv3'=> 'Nguyen Hoang', 'sv4'=>'Nguyen Huy', 'sv5'=>'Tran Lap Duc', 'sv6'=>'Dang Duy Quang']
   ];

    $i = 1; 
    while ($i <= 6){ 
        echo "Ma sinh vien: " . $SinhVien['MaSV']['sv' . $i] . "<br>"; 
        echo "Ho ten sinh vien: " . $SinhVien['HoTen']['sv' . $i] . "<br/> <br/>";
        $i++;
    }

    ?>
</body>
</html>

!