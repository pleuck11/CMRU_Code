<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ค้นหาข้อมูลนักศึกษา</title>
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
    ?>

    <div class="main">
        <h2 style="text-align: center;">ค้นหาข้อมูลนักศึกษา</h2>

        <form method="post">
            ป้อนชื่อนักศึกษา: <input type="text" name="student_name"> <br><br>
            ป้อนรหัสนักศึกษา: <input type="text" name="student_id"> <br><br>
            <input type="submit" name="submit" value="ค้นหา"> <br>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $student_name = $_POST['student_name'];
            $student_id = $_POST['student_id'];

            // ตรวจสอบว่าผู้ใช้ป้อนรหัสนักศึกษาหรือไม่
            if (!empty($student_id)) {
                // ถ้าป้อนรหัสนักศึกษา ให้ค้นหาตามรหัสนักศึกษา
                $sql = "SELECT * FROM student WHERE student_id = '$student_id'";
            } else {
                // ถ้าไม่ป้อนรหัสนักศึกษา ให้ค้นหาตามชื่อนักศึกษา
                $sql = "SELECT * FROM student WHERE student_name LIKE '%$student_name%'";
            }

            $result = mysqli_query($connect, $sql);
            $num_r = mysqli_num_rows($result);

            if ($num_r == 0) {
                echo "<p style='text-align:center;'>ไม่พบข้อมูล</p>";
            } else { ?>
                <table>
                    <tr>
                        <th>รหัสนักศึกษา</th>
                        <th>ชื่อนักศึกษา</th>
                        <th>นามสกุล</th>
                        <th>เบอร์โทรศัพท์</th>
                        <th>รหัสคณะ</th>
                        <th colspan="2">การจัดการ</th>
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td><?php echo $row['student_id']; ?></td>
                            <td><?php echo $row['student_name']; ?></td>
                            <td><?php echo $row['student_surname']; ?></td>
                            <td><?php echo $row['student_tal']; ?></td>
                            <td><?php echo $row['Fac_id']; ?></td>
                            <td><a href="Edit_student.php?id=<?php echo $row['student_id']; ?>" class="edit">แก้ไข</a></td>
                            <td><a href="Del_student.php?id=<?php echo $row['student_id']; ?>" class="delete" onclick='return confirm("คุณแน่ใจหรือไม่ว่าต้องการลบ?")'>ลบ</a></td>
                        </tr>
                    <?php
                    }
                    ?>
                </table>
            <?php
            }
        }
        ?>
    </div>

</body>

</html>
