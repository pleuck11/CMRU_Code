<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่2.1 </title>
</head>
<body>
    
</body>

<?php

    // สร้างฟังก์ชั่น + - * /
    function plus()
    {
        $n1 = 20;
        $n2 = 20;
        $sum = $n1 + $n2;
        print "ผลรวมตัวเลข $n1 + $n2 = $sum <br>";
    }

    function sub()
    {
        $n1 = 20;
        $n2 = 20;
        $sum = $n1 - $n2;
        print "ผลรวมตัวเลข $n1 - $n2 = $sum <br>";
    }

    function mul()
    {
        $n1 = 20;
        $n2 = 20;
        $sum = $n1 * $n2;
        print "ผลรวมตัวเลข $n1 * $n2 = $sum <br>";
    }

    function div()
    {
        $n1 = 20;
        $n2 = 20;
        $sum = $n1 / $n2;
        print "ผลรวมตัวเลข $n1 / $n2 = $sum <br>";
    }

    // เรียกใช้ฟังก์ชั่น
    plus();
    sub();
    mul();
    div();


?>

</html>