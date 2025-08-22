<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete Student</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            font-family: Arial, sans-serif;
            background-color: #f0f0f0; /* เพิ่มพื้นหลังให้เรียบง่าย */
        }

        .main {
            text-align: center;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 10px 20px;
            border-radius: 5px;
            background-color: #4CAF50;
        }

        a:hover {
            background-color: #45a049; /* เพิ่มเอฟเฟกต์ hover */
        }
    </style>
</head>

<body>

    <?php
    include("mainmenu.php");
    ?>

    <div class="main">
        <h2>การลบข้อมูลนักศึกษา</h2>

        <?php
        // รับค่า student_id จาก URL
        $id = $_GET['id'];
        
        // เชื่อมต่อฐานข้อมูล
        include("connectDB.php");
        
        // ลบข้อมูลจากตาราง student
        $sql = "DELETE FROM student WHERE student_id = '$id'";
        $result = mysqli_query($connect, $sql);
        
        if ($result) {
            echo "<p>ลบข้อมูลเรียบร้อยแล้ว</p>";
        } else {
            echo "<p>เกิดข้อผิดพลาดในการลบข้อมูล</p>";
        }
        
        // ปิดการเชื่อมต่อฐานข้อมูล
        mysqli_close($connect);
        ?>

        <!-- ปุ่มสำหรับกลับไปหน้าค้นหานักศึกษา -->
        <a href="Search_Student.php">กลับไปหน้าค้นหา</a>
    </div>

</body>

</html>
