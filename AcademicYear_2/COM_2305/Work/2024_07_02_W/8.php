<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่_8 PHP</title>
</head>
<body>

    <form method="post" action=""> 
        
        Num_1 <input type="text" name="num1" placeholder="ป้อนตัวเลข" > <br><br>
        Num_2 <input type="text" name="num2" placeholder="ป้อนตัวเลข" >  <br><br>
        <input type="submit" name="submit1" value="บวก">
        <input type="submit" name="submit2" value="ลบ">


    </form>
    <hr>

    <?php
        if (isset($_POST['submit1']))
        {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];

            echo "ผลรวมของ $n1 + $n2 = ".($n1 + $n2)."<br>";

        }

        elseif (isset($_POST['submit2']))
        {
            $n1 = $_POST['num1'];
            $n2 = $_POST['num2'];

            echo "ผลรวมของ $n1 - $n2 = ".($n1 - $n2)."<br>";

        }

    ?>

    
    
</body>
</html>