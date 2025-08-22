<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่4 </title>
</head>
<body>
    
</body>

<?php

$firstName = "Pocharapon";
$lastName = "Hakad";

// ตัวพิมพ์ใหญ่ทั้งหมด
    echo "Strtoupper: " . strtoupper($firstName . " " . $lastName) . "<br><br>";

// ตัวพิมพ์เล็กทั้งหมด
    echo "Strtolower: " . strtolower($firstName . " " . $lastName) . "<br><br>";

// ตัวแรกของคำเป็นตัวพิมพ์ใหญ่
    echo "Ucfirst: " . ucfirst(strtolower($firstName)) . " " . ucfirst(strtolower($lastName)) . "<br><br>";

// ตัวแรกของทุกคำเป็นตัวพิมพ์ใหญ่
    echo "Ucwords: " . ucwords(strtolower($firstName . " " . $lastName)) . "<br><br>";

// นับจำนวนตัวอักษร
    echo "จำนวนอักษรในประโยค: " . strlen($firstName) . "<br>";
    echo "จำนวนอักษรในประโยค: " . strlen($lastName) . "<br><br>";

// แยกชื่อและนามสกุลออกจากกัน
    echo "First Name: " . $firstName . "<br>";
    echo "Last Name: " . $lastName . "<br><br>";

// แสดงวันที่ปัจจุบัน
    echo "วันที่ปัจจุบัน: " . date("Y-m-d") . "<br>";

?>


</html>