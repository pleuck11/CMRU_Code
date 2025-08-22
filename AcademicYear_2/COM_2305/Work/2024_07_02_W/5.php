<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่_5 PHP</title>
</head>
<body>
    <h2>กรอกข้อมูล</h2>
    <form  method="post" action="">

        <label for="name">Username:</label>
        <input type="text" name="n"><br><br>

        <label for="password">Password:</label>
        <input type="text" name="p"><br><br>

        <input type="submit" value="ส่งข้อมูล">

    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $us = htmlspecialchars($_POST['n']);
    $pass = htmlspecialchars($_POST['p']);


    echo "<h2>ข้อมูลที่กรอก:</h2>";
    echo "ชื่อ: " . $us . "<br>";
    echo "อีเมล: " . $pass . "<br>";
        } else {
            echo "ไม่มีข้อมูลที่กรอก";
        }
?>

</body>
</html>
