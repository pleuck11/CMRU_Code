<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Student</title>
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
            text-align: left; /* เปลี่ยนการจัดเรียงเป็นซ้าย */
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 10px;
            background-color: #f9f9f9;
        }

        .form-row {
            display: flex;
            align-items: center; /* จัดแนวในแนวตั้ง */
            margin-bottom: 20px; /* เว้นระยะห่างระหว่างแถว */
        }

        label {
            width: 150px; /* ความกว้างของ label */
            margin-right: 10px; /* ระยะห่างระหว่าง label กับ input */
        }

        input[type="text"] {
            flex: 1; /* ทำให้ช่องกรอกข้อมูลเต็มพื้นที่ที่เหลือ */
            padding: 5px;
        }

        /* ปรับให้ปุ่มอยู่กลาง */
        .button-container {
            text-align: center; /* จัดปุ่มให้อยู่กลาง */
            margin-top: 20px; /* เว้นระยะห่างด้านบน */
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        table,
        th,
        td {
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

    // รับค่า student_id จาก URL
    $id = $_GET['id'];

    // Query ดึงข้อมูลนักศึกษาที่ต้องการแก้ไข
    $sql = "SELECT * FROM student WHERE student_id = '$id'";
    $result = mysqli_query($connect, $sql);

    // ตัวแปรสำหรับแสดงข้อความ
    $success_message = '';
    $error_message = '';
    $updated_row = null; // ตัวแปรเพื่อเก็บข้อมูลที่ถูกอัปเดต

    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if ($row = mysqli_fetch_assoc($result)) {
    ?>

        <div class="main">
            <h2 style="text-align: center;">แก้ไขข้อมูลนักศึกษา</h2>

            <form method="post" action="">
                <div class="form-row">
                    <label>รหัสนักศึกษา:</label>
                    <input type="text" value="<?php echo $row['student_id']; ?>" disabled>
                    <input type="hidden" name="id" value="<?php echo $row['student_id']; ?>">
                </div>
                <div class="form-row">
                    <label>ชื่อนักศึกษา:</label>
                    <input type="text" name="name" value="<?php echo $row['student_name']; ?>">
                </div>
                <div class="form-row">
                    <label>นามสกุลนักศึกษา:</label>
                    <input type="text" name="surname" value="<?php echo $row['student_surname']; ?>">
                </div>
                <div class="form-row">
                    <label>โทรศัพท์นักศึกษา:</label>
                    <input type="text" name="tal" value="<?php echo $row['student_tal']; ?>">
                </div>
                <div class="form-row">
                    <label>รหัสคณะ:</label>
                    <input type="text" name="fac_id" value="<?php echo $row['Fac_id']; ?>">
                </div>

                <div class="button-container">
                    <input type="submit" name="submit" value="แก้ไขข้อมูล">
                </div>
            </form>

            <?php
            // ตรวจสอบว่ามีการกดปุ่มแก้ไขหรือไม่
            if (isset($_POST['submit'])) {
                $new_name = $_POST['name'];
                $new_surname = $_POST['surname'];
                $new_tal = $_POST['tal'];
                $fac_id = $_POST['fac_id'];
                $id = $_POST['id'];

                // อัปเดตข้อมูลในฐานข้อมูล
                $update_sql = "UPDATE student SET student_name = '$new_name', student_surname = '$new_surname', student_tal = '$new_tal', Fac_id = '$fac_id' WHERE student_id = '$id'";
                $update_result = mysqli_query($connect, $update_sql);

                // ตรวจสอบผลการอัปเดต
                if ($update_result) {
                    $success_message = "แก้ไขข้อมูลเรียบร้อยแล้ว";
                    $updated_row = [
                        'student_id' => $id,
                        'student_name' => $new_name,
                        'student_surname' => $new_surname,
                        'student_tal' => $new_tal,
                        'Fac_id' => $fac_id
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
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อ</th>
                        <th>นามสกุล</th>
                        <th>โทรศัพท์</th>
                        <th>รหัสคณะ</th>
                    </tr>
                    <tr>
                        <td><?php echo $updated_row['student_id']; ?></td>
                        <td><?php echo $updated_row['student_name']; ?></td>
                        <td><?php echo $updated_row['student_surname']; ?></td>
                        <td><?php echo $updated_row['student_tal']; ?></td>
                        <td><?php echo $updated_row['Fac_id']; ?></td>
                    </tr>
                </table>
            <?php endif; ?>

            <?php if ($error_message): ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php endif; ?>

        </div>

    <?php
    } else {
        echo "<p>ไม่พบข้อมูลนักศึกษาที่ต้องการแก้ไข</p>";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($connect);
    ?>

</body>

</html>
