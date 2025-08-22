<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Faculty</title>
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

    // Query ดึงข้อมูลคณะที่ต้องการแก้ไข
    $sql = "SELECT * FROM faculty WHERE Fac_id = '$id'";
    $result = mysqli_query($connect, $sql);

    // ตัวแปรสำหรับแสดงข้อความ
    $success_message = '';
    $error_message = '';
    $updated_row = null; // ตัวแปรเพื่อเก็บข้อมูลที่ถูกอัปเดต

    // ตรวจสอบว่ามีข้อมูลหรือไม่
    if ($row = mysqli_fetch_assoc($result)) {
    ?>

        <div class="main">
            <h2 style="text-align: center;">แก้ไขข้อมูลคณะ</h2>

            <form method="post" action="">
                รหัสคณะ: <input type="text" value="<?php echo $row['Fac_id']; ?>" disabled> <br>
                <!-- ซ่อนค่า Fac_id เพื่อใช้ในการอัปเดต -->
                <input type="hidden" name="id" value="<?php echo $row['Fac_id']; ?>"> <br>
                ชื่อคณะ: <input type="text" name="name" value="<?php echo $row['Fac_name']; ?>"> <br><br>
                <input type="submit" name="submit" value="แก้ไขข้อมูล">
            </form>

            <?php
            // ตรวจสอบว่ามีการกดปุ่มแก้ไขหรือไม่
            if (isset($_POST['submit'])) {
                $new_name = $_POST['name'];
                $id = $_POST['id'];

                // อัปเดตข้อมูลในฐานข้อมูล
                $update_sql = "UPDATE faculty SET Fac_name = '$new_name' WHERE Fac_id = '$id'";
                $update_result = mysqli_query($connect, $update_sql);

                // ตรวจสอบผลการอัปเดต
                if ($update_result) {
                    $success_message = "แก้ไขข้อมูลเรียบร้อยแล้ว";
                    $updated_row = ['Fac_id' => $id, 'Fac_name' => $new_name]; // เก็บข้อมูลที่ถูกอัปเดต
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
                        <th>รหัสคณะ</th>
                        <th>ชื่อคณะ</th>
                    </tr>
                    <tr>
                        <td><?php echo $updated_row['Fac_id']; ?></td>
                        <td><?php echo $updated_row['Fac_name']; ?></td>
                    </tr>
                </table>
            <?php endif; ?>

            <?php if ($error_message): ?>
                <p class="error-message"><?php echo $error_message; ?></p>
            <?php endif; ?>

        </div>

    <?php
    } else {
        echo "<p>ไม่พบข้อมูลคณะวิชาที่ต้องการแก้ไข</p>";
    }

    // ปิดการเชื่อมต่อฐานข้อมูล
    mysqli_close($connect);
    ?>

</body>

</html>
