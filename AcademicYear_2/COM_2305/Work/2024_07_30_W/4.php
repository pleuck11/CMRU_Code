<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่4 </title>
</head>
<body>

<h2>การคำนวณพื้นที่วงกลม หรือคำนวณหาความยาวเส้นรอบวง</h2>
    <form method="post" action="">
        <label for="radius">ค่ารัศมี :</label>
        <input type="text" id="radius" name="radius" required>
        <br><br>
        <input type="radio" id="area" name="calculation" value="area" required>
        <label for="area"> คำนวณพื้นที่วงกลม </label>
        <br>
        <input type="radio" id="circumference" name="calculation" value="circumference" required>
        <label for="circumference"> หาความยาวเส้นรอบวง </label>
        <br><br>
        <input type="submit" value="คำนวณ">
    </form>
    
</body>

<?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $radius = $_POST['radius'];
        $calculation = $_POST['calculation'];

        // ตัวโปรแกรม
        if (is_numeric($radius) && $radius > 0) {
            if ($calculation == "area") {
                $result = calculateArea($radius);
                echo "<h3>พื้นที่วงกลม: " . $result . "</h3>";
            } elseif ($calculation == "circumference") {
                $result = calculateCircumference($radius);
                echo "<h3>เส้นรอบวง: " . $result . "</h3>";
            } else {
                echo "<h3> โปรดเลือกวิธีการคำนวณ </h3>";
            }
        } else {
            echo "<h3> โปรดป้อนรัศมีที่ถูกต้อง </h3>";
        }
    }

    // ฟังก์ชั่นหาพื้นที่วงกลม
    function calculateArea($radius) {
        return 3.14 * $radius * $radius;
    }

    // ฟังก์ชั่นหาเส้นรอบวง
    function calculateCircumference($radius) {
        return 2 * 3.14 * $radius;
    }

?>
</html>