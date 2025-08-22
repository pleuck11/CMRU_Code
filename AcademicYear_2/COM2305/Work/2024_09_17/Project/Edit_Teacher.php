<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Teacher</title>
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
            text-align: center;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table, th, td {
            border: 1px solid #000;
            text-align: center;
            padding: 10px;
        }

        .success-message {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: green;
        }

        .error-message {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            color: red;
        }
    </style>
</head>

<body>

    <?php
    include("mainmenu.php");
    include("connectDB.php");

    // รับค่า id จาก URL
    $id = $_GET['id'];

    // Query ดึงข้อมูลอาจารย์ที่ต้องการแก้ไข
    $sql = "SELECT * FROM teacher WHERE teacher_id = '$id'";
    $result = mysqli_query($connect, $sql);

    // ตัวแปรสำหรับแสดงข้อความ
    $success_message = '';
    $error_message = '';
    $updated_row = null; // ตัวแปรเพื่อเก็บข้อมูลที่ถูกอัปเดต

    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if ($row = mysqli_fetch_assoc($result)) {
    ?>

        <div class="main">
            <h2 style="text-align: center;">แก้ไขข้อมูลอาจารย์</h2>

            <form method="post" action="">
                รหัสอาจารย์: <input type="text" value="<?php echo $row['teacher_id']; ?>" disabled> <br>
                <!-- ซ่อนค่า teacher_id เพื่อใช้ในการอัปเดต -->
                <input type="hidden" name="id" value="<?php echo $row['teacher_id']; ?>"> <br>
                ชื่ออาจารย์: <input type="text" name="name" value="<?php echo $row['teacher_name']; ?>"> <br><br>
                นามสกุลอาจารย์: <input type="text" name="surname" value="<?php echo $row['teacher_surname']; ?>"> <br><br>
                เบอร์โทร: <input type="text" name="tel" value="<?php echo $row['teacher_tel']; ?>"> <br><br>
                ห้องพัก: <input type="text" name="room" value="<?php echo $row['teacher_room']; ?>"> <br><br>
                <input type="submit" name="submit" value="แก้ไขข้อมูล">
            </form>

            <?php
            // ตรวจสอบว่ามีการกดปุ่มแก้ไขหรือไม่
            if (isset($_POST['submit'])) {
                $new_name = $_POST['name'];
                $new_surname = $_POST['surname'];
                $new_tel = $_POST['tel'];
                $new_room = $_POST['room'];
                $id = $_POST['id'];

                // อัปเดตข้อมูลในฐานข้อมูล
                $update_sql = "UPDATE teacher 
                               SET teacher_name = '$new_name', 
                                   teacher_surname = '$new_surname', 
                                   teacher_tel = '$new_tel', 
                                   teacher_room = '$new_room' 
                               WHERE teacher_id = '$id'";
                $update_result = mysqli_query($connect, $update_sql);

                // ตรวจสอบผลการอัปเดต
                if ($update_result) {
                    $success_message = "แก้ไขข้อมูลเรียบร้อยแล้ว";
                    $updated_row = [
                        'teacher_id' => $id,
                        'teacher_name' => $new_name,
                        'teacher_surname' => $new_surname,
                        'teacher_tel' => $new_tel,
                        'teacher_room' => $new_room
                    ]; // เก็บข้อมูลที่ถูกอัปเดต
                } else {
                    $error_message = "เกิดข้อผิดพลาดในการแก้ไขข้อมูล";
                }
            }
            ?>

            <?php if ($success_message): ?>
                <p class="success-message"><?php echo $success_message; ?></p>
                <!-- แสดงข้อมูลที่ถูกอัปเดตในตาราง -->
                <table>
                    <tr>
                        <th>รหัสอาจารย์</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>โทรศัพท์</th>
                        <th>ห้องพัก</th>
                    </tr>
                    <tr>
                        <td><?php echo $updated_row['teacher_id']; ?></td>
                        <td><?php echo $updated_row['teacher_name']; ?></td>
                        <td><?php echo $updated_row['teacher_surname']; ?></td>
                        <td><?php echo $updated_row['teacher_tel']; ?></td>
                        <td><?php echo $updated_row['teacher_room']; ?></td>
                    </tr>
                </table>
            <?php endif; ?>

            <?php if ($error_message): ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php endif; ?>

        </div>

    <?php
    } else {
        echo "<p>ไม่พบข้อมูลอาจารย์ที่ต้องการแก้ไข</p>";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($connect);
    ?>

</body>

</html>
