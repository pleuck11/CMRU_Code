<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Search </title>
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

        table,
        th,
        td {
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

        <h2 style="text-align: center;">ค้นหาข้อมูลคณะวิชา</h2>

        <form method="post">
            ป้อนชื่อคณะ: <input type="text" name="faculty_name"> <br><br>
            ป้อนรหัสคณะ: <input type="text" name="faculty_id"> <br><br>
            <input type="submit" name="submit" value="ค้นหา"> <br>
        </form>

        <?php
        if (isset($_POST['submit'])) {
            $faculty_name = $_POST['faculty_name'];
            $faculty_id = $_POST['faculty_id'];

            include("connectDB.php");

           
            if (!empty($faculty_id)) {
                
                $sql = "SELECT * FROM faculty WHERE Fac_id = '$faculty_id'";
            } else {
                
                $sql = "SELECT * FROM faculty WHERE Fac_name LIKE '%$faculty_name%'";
            }

            $result = mysqli_query($connect, $sql);
            $num_r = mysqli_num_rows($result);

            if ($num_r == 0) {
                echo "<p style='text-align:center;'> ไม่พบข้อมูล </p>";
            } else { ?>
                <table>
                    <tr>
                        <th>รหัสคณะ</th>
                        <th>ชื่อคณะ</th>
                        <th colspan="2">การจัดการ</th> 
                    </tr>

                    <?php
                    while ($row = mysqli_fetch_assoc($result)) { ?>
                        <tr>
                            <td width='25%'> <?php echo $row['Fac_id'] ?> </td>
                            <td width='25%'> <?php echo $row['Fac_name'] ?> </td>
                            <td width='12.5%'> <a href="Edit_fac.php?id=<?php echo $row['Fac_id']; ?>" class='edit'>แก้ไข</a></td>
                            <td width='12.5%'> <a href="Del_fac.php?id=<?php echo $row['Fac_id']; ?>" class='delete' onclick='return confirm("คุณแน่ใจหรือไม่ว่าต้องการลบ?")'>ลบ</a></td>
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
