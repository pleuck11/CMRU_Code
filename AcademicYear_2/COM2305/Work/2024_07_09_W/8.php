<!-- 8. ให้เขียนโปรแกรมแสดงชื่อนักศึกษาจำนวน 5 ครั้งด้วยลูป for, while, do-while -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฝึกหัดข้อที่ 8</title>
</head>
<body>

<h2> ป้อนชื่อ นศ. </h2>

    <form method="post" action="">
        <input type="text" name="name" placeholder="กรอกชื่อ" required>

        <button type="submit" name="loop" value="for">for</button>
        <button type="submit" name="loop" value="while">while</button>
        <button type="submit" name="loop" value="do-while">do-while</button>
    </form>
    
</body>

<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

        $name = $_POST['name'];
        $loop = $_POST['loop'];
    
        if ($loop == "for") {
            echo "<h2> ใช้ลูป for:</h2>";
            for ($i = 0; $i < 5; $i++) {
                echo $name . "<br>";
            }
        } elseif ($loop == "while") {
            echo "<h2>ใช้ลูป while:</h2>";
            $i = 0;
            while ($i < 5) {
                echo $name . "<br>";
                $i++;
            }
        } elseif ($loop == "do-while") {
            echo "<h2>ใช้ลูป do-while:</h2>";
            $i = 0;
            do {
                echo $name . "<br>";
                $i++;
            } while ($i < 5);
        }
    }
?>


</html>