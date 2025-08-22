<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่3 </title>
</head>
<body>

    <form method="post">

        ผู้เล่นเลือก
        <select name="pp">
            <option value = 1 > ค้อน </option>
            <option value = 2 > กระดาษ </option>
            <option value = 3 > กรรไกร </option>
        </select>

        <input type="submit" name="btsubmit" value="คลิก">

    </form>

</body>

<?php

    if(!empty($_POST["btsubmit"]))
    {
        $p = $_POST['pp'];
        $com = rand(1,3);
        $arr = array(1 =>"ค้อน",2 =>"กระดาษ",3 =>"กรรไกร");

        echo "<br>";
        echo "ผู้เล่นเลือก: $arr[$p] <br>";
        echo "คอมพิวเตอร์เลือก: $arr[$com] <br><br>";

        if($p == $com)
        {
            echo "ผู้เล่นกับคอมพิวเตอร์เสมอกัน <br><br>";
        }

        elseif($p == 1 && $com == 3)
        {
            echo "ผู้เล่นชนะ <br><br>";
        }

        elseif($p == 2 && $com == 1)
        {
            echo "ผู้เล่นชนะ <br><br>";
        }

        elseif($p == 3 && $com == 2)
        {
            echo "ผู้เล่นชนะ <br><br>";
        }

        else{
            echo "คอมพิวเตอร์ชนะ <br><br>";
        }

    }

?>

</html>