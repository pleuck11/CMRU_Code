<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Append Teacher </title>
</head>

<body>
    <?php  
        include("mainmenu.php");  
    ?>
    <div class="main">

    <style>
        input[type=text], select {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
    </style>

        <h2 style="text-align: center;"> เพิ่มข้อมูลอาจารย์ </h2>

        <form method="post">
            รหัสอาจารย์: <input type="text" name="id" maxlength="3"> <br>
            ชื่อ: <input type="text" name="name"> <br>
            นามสกุล: <input type="text" name="surname"> <br>
            เบอร์โทร: <input type="text" name="tel" maxlength="10"> <br>
            ห้องพัก: <input type="text" name="room" maxlength="8"> <br><br>
            <input type="reset" name="reset" value="ยกเลิก"> 
            <input type="submit" name="submit" value="เพิ่มข้อมูล"> <br>
        </form>
        <hr>

        <?php
            if(isset($_POST['submit'])) {
                // รับค่าจากฟอร์ม
                $id = $_POST['id'];
                $name = $_POST['name'];
                $surname = $_POST['surname'];
                $tel = $_POST['tel'];
                $room = $_POST['room'];

                include("connectDB.php");

                // ตรวจสอบค่าที่รับมา
                if(strlen($id) > 3 || !is_numeric($id)) {
                    echo "ไม่สามารถบันทึกข้อมูลได้ (รหัสอาจารย์ต้องเป็นตัวเลขไม่เกิน 3 หลัก)";
                } elseif(strlen($tel) != 10 || !is_numeric($tel)) {
                    echo "ไม่สามารถบันทึกข้อมูลได้ (เบอร์โทรต้องเป็นตัวเลข 10 หลัก)";
                } else {
                    // ตรวจสอบข้อมูลซ้ำ
                    $sql2 = "SELECT * FROM teacher WHERE teacher_id = '$id'";
                    $result2 = mysqli_query($connect, $sql2);

                    if(mysqli_num_rows($result2) > 0) {
                        // ข้อมูลซ้ำ
                        echo "ข้อมูลซ้ำ (มีรหัสอาจารย์นี้อยู่แล้ว)";
                    } else {
                        // เพิ่มข้อมูลลงในตาราง teacher
                        $sql = "INSERT INTO teacher (teacher_id, teacher_name, teacher_surname, teacher_tel, teacher_room) 
                                VALUES ('$id', '$name', '$surname', '$tel', '$room')";
                        $result = mysqli_query($connect, $sql);

                        if($result) {
                            echo "บันทึกข้อมูลสำเร็จ";
                        } else {
                            echo "ไม่สามารถบันทึกข้อมูลได้";
                        }
                    }
                }
            } else {
                echo "รอการป้อนข้อมูล";
            }
        ?>

    </div>
</body>
</html>
