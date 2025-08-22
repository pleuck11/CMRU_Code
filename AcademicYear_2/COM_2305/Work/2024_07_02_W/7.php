<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่_7 PHP</title>
</head>
<body>

    <form method="post" action=""> 
        
        Num_1 <input type="text" name="num1" placeholder="ป้อนตัวเลข" > <br><br>
        Num_2 <input type="text" name="num2" placeholder="ป้อนตัวเลข" >  <br><br>
        Num_3 <input type="text" name="num3" placeholder="ป้อนตัวเลข" >  <br><br>
        <input type="submit" name="submit" value="ผลลัพธ์">


    </form>
    <hr>

    <?php
        if (isset($_POST['submit']))
        {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];
            $n3 = $_POST['num3'];

            if (is_numeric($n1) && is_numeric($n2) && is_numeric($n3)) {
                $total = $n1 + $n2 + $n3;
                $average = $total / 3;

                echo "ผลรวม: " . number_format($total,) . "<br>";
                echo "ค่าเฉลี่ย: " . number_format($average, 2) . "<br>";
            }
        }
    ?>
</body>
</html>