<!-- 10. เขียนโปรแกรมเป็นอาร์เรย์เก็บวันใน 1 สัปดาห์ จากนั้นให้ใช้ foreach แสดงข้อมูลในอาร์เรย์ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฝึกหัดข้อที่ 10</title>
</head>
<body>

<pre>
<?php

    $days = array
    (
        "Mon" => "วันจันทร์",
        "Tue" => "วันอังคาร",
        "Wed" => "วันพุธ",
        "Thu" => "วันพฤหัสบดี",
        "Fri" => "วันศุกร์",
        "Sat" => "วันเสาร์",
        "Sun" => "วันอาทิตย์"
    );
    
    foreach ($days as $k => $v)
    {
        echo "\$days [$k] = $v <br>";
    }
?>
</pre>

</body>
</html>

