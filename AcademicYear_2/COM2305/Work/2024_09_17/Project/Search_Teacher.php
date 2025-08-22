<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Teacher</title>
    <style>
        body {
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start;
            height: 100vh;
        }

        .main {
            width: 100%;
            max-width: 600px;
            margin-top: 50px;
        }

        form {
            text-align: left; /* จัดฟอร์มชิดซ้าย */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
            font-size: 14px; /* ลดขนาดตัวหนังสือ */
        }

        .form-group {
            margin-bottom: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        label {
            width: 200px; /* ความกว้าง label เท่ากัน */
            white-space: nowrap; /* ทำให้ข้อความอยู่ในบรรทัดเดียว */
        }

        input[type="text"] {
            width: calc(100% - 220px); /* ปรับขนาด input ให้สอดคล้องกับ label */
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px; /* ลดขนาดตัวหนังสือ */
        }

        input[type="submit"] {
            display: block;
            margin: 20px auto;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 14px; /* ลดขนาดตัวหนังสือ */
        }

        table {
            width: 80%;
            border-collapse: collapse;
            margin: 20px auto;
        }

        table, th, td {
            border: 1px solid #000;
            text-align: center;
            padding: 10px;
        }

        a {
            text-decoration: none;
            color: white;
            padding: 5px 10px;
            border-radius: 5px;
        }

        .edit {
            background-color: #4CAF50;
        }

        .delete {
            background-color: #f44336;
        }
    </style>
</head>
<body>

    <?php
    include("mainmenu.php");
    include("connectDB.php");

    // ตรวจสอบว่ามีการค้นหาหรือไม่
    $search_keyword = '';
    $search_teacher_id = '';
    $has_searched = false; // สถานะบอกว่ามีการค้นหาหรือไม่

    if (isset($_POST['submit'])) {
        $search_keyword = $_POST['search_name'];
        $search_teacher_id = $_POST['search_teacher_id'];
        $has_searched = true; // เปลี่ยนสถานะเป็นค้นหาแล้ว
    }
    ?>

    <div class="main">
        <h2 style="text-align: center;">ค้นหาข้อมูลอาจารย์</h2>

        <!-- แบบฟอร์มค้นหา -->
        <form method="post">
            <div class="form-group">
                <label>ป้อนชื่อหรือนามสกุลอาจารย์:</label>
                <input type="text" name="search_name" value="<?php echo $search_keyword; ?>" placeholder="ค้นหาชื่อหรือนามสกุล">
            </div>
            <div class="form-group">
                <label>ป้อนรหัสอาจารย์:</label>
                <input type="text" name="search_teacher_id" value="<?php echo $search_teacher_id; ?>" placeholder="ค้นหารหัสอาจารย์">
            </div>
            <input type="submit" name="submit" value="ค้นหา">
        </form>

        <!-- ตรวจสอบว่ามีการค้นหาหรือไม่ ถ้ามีจึงแสดงตาราง -->
        <?php if ($has_searched): ?>
            <table>
                <tr>
                    <th>รหัสอาจารย์</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                    <th>โทรศัพท์</th>
                    <th>ห้องพักอาจารย์</th>
                    <th>แก้ไข</th>
                    <th>ลบ</th>
                </tr>

                <?php
                // Query สำหรับค้นหาอาจารย์
                $sql = "SELECT * FROM teacher WHERE (teacher_name LIKE '%$search_keyword%' OR teacher_surname LIKE '%$search_keyword%')";

                // เพิ่มเงื่อนไขการค้นหาจากรหัสอาจารย์ถ้ามีการป้อนรหัสอาจารย์
                if (!empty($search_teacher_id)) {
                    $sql .= " AND teacher_id = '$search_teacher_id'";
                }

                $result = mysqli_query($connect, $sql);

                // ตรวจสอบผลลัพธ์ว่ามีข้อมูลหรือไม่
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>" . $row['teacher_id'] . "</td>";
                        echo "<td>" . $row['teacher_name'] . "</td>";
                        echo "<td>" . $row['teacher_surname'] . "</td>";
                        echo "<td>" . $row['teacher_tel'] . "</td>";
                        echo "<td>" . $row['teacher_room'] . "</td>";
                        echo "<td><a href='Edit_Teacher.php?id=" . $row['teacher_id'] . "' class='edit'>แก้ไข</a></td>";
                        echo "<td><a href='Del_Teacher.php?id=" . $row['teacher_id'] . "' class='delete'>ลบ</a></td>";
                        echo "</tr>";
                    }
                } else {
                    echo "<tr><td colspan='7'>ไม่พบข้อมูลอาจารย์</td></tr>";
                }

                // ปิดการเชื่อมต่อฐานข้อมูล
                mysqli_close($connect);
                ?>
            </table>
        <?php endif; ?>
    </div>

</body>
</html>
