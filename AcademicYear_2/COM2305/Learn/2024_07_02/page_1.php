<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> ภาษา PHP </title>
</head>
<body>
    <h3> ประวัติของข้าพเจ้า </h3>

    <?php
        echo ("พชรพล ฮะกาศ <br>"); 
        print ("ภาควิชาคอมพิวเตอร์");
        $num1 = 20;
        echo $num1 ;
        print ("$num1");

        printf("จำนนตัวเลข");
        $str = "พชรพล";
        printf("%s จำนวนตัวเลข %d",$str,$num1);
        $txt = sprintf("%s จำนวนตัวเลข %d",$str,$num1);
        echo $txt;

    ?>
    
</body>
</html>