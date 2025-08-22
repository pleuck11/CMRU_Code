<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่5 </title>
</head>
<body>
    
</body>

<?php

    $year = date("Y") + 543;
    $today = date("j");
    $day = date("w");
    $month = date("n");


    $arr1 = array('อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์');
    $arr2 = array('มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน', 'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม');
    $thaiDay = $arr1[$day];
    $thaiMonth = $arr2[$month - 1];

// รวม
    $dd = "วัน $thaiDay ที่ $today $thaiMonth พ.ศ. $year";

    echo $dd;

?>

</html>