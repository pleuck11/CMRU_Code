<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่2.2 </title>
</head>
<body>
    
</body>

<?php

        // สร้างฟังก์ชั่น + - * /
        function plus($n1,$n2)
        {
            $sum = $n1 + $n2;
            print "ผลรวมตัวเลข $n1 + $n2 = $sum <br>";
        }
    
        function sub($n1,$n2)
        {
            $sum = $n1 - $n2;
            print "ผลรวมตัวเลข $n1 - $n2 = $sum <br>";
        }
    
        function mul($n1,$n2)
        {
            $sum = $n1 * $n2;
            print "ผลรวมตัวเลข $n1 * $n2 = $sum <br>";
        }
    
        function div($n1,$n2)
        {
            $sum = $n1 / $n2;
            print "ผลรวมตัวเลข $n1 / $n2 = $sum <br>";
        }

        // เรียกใช้
        echo plus(20,20);
        echo sub(20,20);
        echo mul(20,20);
        echo div(20,20);

?>


</html>