<!-- 3. ให้เขียนโปรแกรมสร้างอาร์เรย์จัดเก็บข้อความภาษาไทย (ศูนย์ ถึง เก้า) จากนั้นให้แสดงผลทางเบราว์เซอร์ -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฝึกหัดข้อที่3</title>
</head>
<body>
    
</body>

<?php

    $thaiNumbers = ["ศูนย์", "หนึ่ง", "สอง", "สาม", "สี่","ห้า", "หก", "เจ็ด", "แปด", "เก้า"];
    
    foreach ($thaiNumbers as $number) {
        echo $number . "<br>";
    }

    
?>
</html>