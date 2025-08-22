<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่2.3 </title>
</head>
<body>
    
</body>

<?php

        // สร้างฟังก์ชั่น + - * /
        function plus($n1,$n2)
        {
            $sum = $n1 + $n2;
            // print "ผลรวมตัวเลข $n1 + $n2 = $sum <br>";
            return $sum;
        }
    
        function sub($n1,$n2)
        {
            $sum = $n1 - $n2;
            // print "ผลรวมตัวเลข $n1 - $n2 = $sum <br>";
            return $sum;
        }
    
        function mul($n1,$n2)
        {
            $sum = $n1 * $n2;
            // print "ผลรวมตัวเลข $n1 * $n2 = $sum <br>";
            return $sum;
        }
    
        function div($n1,$n2)
        {
            $sum = $n1 / $n2;
            // print "ผลรวมตัวเลข $n1 / $n2 = $sum <br>";
            return $sum;
        }

        // เรียกใช้
        $x1 = plus(20,20);
        print "ผลรวมของผลบวกคือ $x1 <br>";

        $x2 = sub(20,20);
        print "ผลรวมของผลลบคือ $x2 <br>";

        $x3 = mul(20,20);
        print "ผลรวมของผลคูณคือ $x3 <br>";

        $x4 = div(20,20);
        print "ผลรวมของผลหารคือ $x4 <br>";
        
?>

</html>