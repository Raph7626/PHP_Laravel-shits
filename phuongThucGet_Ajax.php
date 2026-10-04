<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" type="text/javascript"></script>
    <title>Ajax tap tanh</title>
</head>
<body>
    
    <form action = "<?PHP $_PHP_SELF ?>" method = "GET">
        Tên: <input type="text" id="Ten" name="Ten" />
        Tuổi: <input type="text" id="Tuoi" name="Tuoi"/>
        <input type="button" value="Click me" onclick="showMessage()"/>
    </form>
    
    <script>
        function showMessage(){
            alert('Sự kiện click xảy ra!!!');
            var ten = document.getElementById('Ten').value;
            var tuoi = document.getElementById('Tuoi').value;
            alert(ten);
            alert(tuoi);

            $.ajax({
                type: "POST",
                url: "xulyPhuongThucGET_Ajax.php",

                data: {functionname: 'testAjax', name: ten, age:tuoi},
                success: function(result,status, error){
                    alert(result);
                },
                error: function(req, status, error){
                    alert(req + " " + status + " " +error);
                } 
            });
        }
    </script>


</body>
</html>