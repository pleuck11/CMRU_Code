<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repair</title>
</head>
<body>

    <h2>รายการแจ้งซ่อมอุปกรณ์</h2>
    
    <form method="post">
        รายละเอียดการแจ้งซ่อม:
        <textarea name="detail" rows="5" cols="30"></textarea> <br><br>
        
        ชื่อผู้แจ้งซ่อม: 
        <input type="text" name="name"> <br><br>

        อีเมล์: 
        <input type="email" name="email"> <br><br>

        <input type="submit" name="bt_confirm" value="แจ้งซ่อมอุปกรณ์">
    </form>

    <?php

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $detail = $_POST['detail'];
        $name = $_POST['name'];
        $email = $_POST['email'];

        echo "<h3>ข้อมูลที่คุณแจ้ง:</h3>";
        echo "รายละเอียดการแจ้งซ่อม: " . htmlspecialchars($detail) . "<br>";
        echo "ชื่อผู้แจ้งซ่อม: " . htmlspecialchars($name) . "<br>";
        echo "อีเมล์: " . htmlspecialchars($email) . "<br>";
    }
    ?>

</body>
</html>
