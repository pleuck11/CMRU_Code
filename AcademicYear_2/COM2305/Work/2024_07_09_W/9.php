<!-- 9.สร้างฟอร์มรับแม่สูตรคูณ จากนั้นให้แสดงแม่สูตรคูณ
        9.1 ด้วยลูป for 
        9.2 ลูป while
        9.3 ลูก do-while -->

        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฝึกหัดข้อที่ 9</title>
</head>
<body>

    <h1> แม่สูตรคูณ </h1>
    <form method="post" action="">
        <label for="number">ป้อนสูตรคูณแม่:</label>
        <input type="number"  name="number" required>
        <button type="submit">ผลลัพธ์</button>
    </form>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $number = intval($_POST['number']);

        echo "<h1>แม่สูตรคูณ: {$number}</h1>";

        echo "<h2> ใช้ลูป for </h2>";
        for ($i = 1; $i <= 12; $i++) {
            echo "$number x $i = " . ($number * $i) . "<br>";
        }

        echo "<h2> ใช้ลูป while </h2>";
        $i = 1;
        while ($i <= 12) {
            echo "$number x $i = " . ($number * $i) . "<br>";
            $i++;
        }

        echo "<h2> ใช้ลูป do-while </h2>";
        $i = 1;
        do {
            echo "$number x $i = " . ($number * $i) . "<br>";
            $i++;
        } while ($i <= 12);
    }
?>

</body>
</html>
