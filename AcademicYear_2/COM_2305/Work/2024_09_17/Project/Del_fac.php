<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>

    <?php
    include("mainmenu.php");
    ?>
    <style>
        .main {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
            text-align: center;
        }
        .button {
            background-color: #4CAF50; /* สีเขียว */
            color: white; /* สีตัวอักษร */
            padding: 10px 20px; /* การจัดระยะห่าง */
            text-align: center; /* จัดกลาง */
            text-decoration: none; /* ไม่มีเส้นใต้ */
            display: inline-block; /* ปรับให้เป็นปุ่ม */
            margin-top: 20px; /* ระยะห่างจากข้อความ */
            border-radius: 5px; /* มุมโค้ง */
        }
        .button:hover {
            background-color: #45a049; /* เปลี่ยนสีเมื่อชี้ */
        }
    </style>
</head>
<body>
<div class="main">
    <h2>การลบข้อมูล</h2>

    <?php
    // ตรวจสอบว่ามีการส่ง ID มาหรือไม่
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        include("connectDB.php");

        // ใช้ mysqli_real_escape_string เพื่อป้องกัน SQL Injection
        $id = mysqli_real_escape_string($connect, $id);

        // สร้างคำสั่ง SQL สำหรับลบข้อมูล
        $sql = "DELETE FROM faculty WHERE Fac_id = '$id'";
        $result = mysqli_query($connect, $sql);

        // ตรวจสอบผลลัพธ์ของการลบข้อมูล
        if ($result) {
            echo "<p>ลบข้อมูลเรียบร้อยแล้ว</p>";
        } else {
            echo "<p>เกิดข้อผิดพลาดในการลบข้อมูล: " . mysqli_error($connect) . "</p>";
        }

        mysqli_close($connect);
    } else {
        echo "<p>ไม่พบ ID ของข้อมูลที่ต้องการลบ</p>";
    }
    ?>

    <a href="Search_fac.php" class="button">กลับไปที่ค้นหาข้อมูล</a>
</div>
</body>
</html>
