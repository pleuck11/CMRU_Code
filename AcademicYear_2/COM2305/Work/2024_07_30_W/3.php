<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่3 </title>
</head>
<body>

    <form method="post" action="">
        ป้อนปี ค.ศ. <input type="text" name="y">
        <input type="submit" name="bt" value="ตกลง">
    </form>
    <ht>
</body>

<?php

    if(isset($_POST['bt']))
    {
        function xd($y)
        {
            return  $y + 543;
        }


        $y = $_POST['y'];
        $year = xd($y);
        echo "ปี ค.ศ. $y เปลี่ยนเป็น พ.ศ. คือ $year";

    }

?>

</html>