<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Append Student </title>
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
</head>
<body>
    <?php  
        include("mainmenu.php"); 
    ?>
    <div class="main">
        <h2 style="text-align: center;"> เพิ่มข้อมูลนักศึกษา </h2>

        <form method="post">
            รหัสนักศึกษา: <input type="text" name="student_id" maxlength="10"> <br>
            ชื่อนักศึกษา: <input type="text" name="student_name"> <br>
            นามสกุลนักศึกษา: <input type="text" name="student_surname"> <br>
            เบอร์โทร: <input type="text" name="student_tal" maxlength="10"> <br>
            รหัสคณะ: <input type="text" name="fac_id" maxlength="3"> <br><br>
            <input type="reset" name="reset" value="ยกเลิก"> 
            <input type="submit" name="submit" value="เพิ่มข้อมูล"> <br>
        </form>
        <hr>
        <?php
            if(isset($_POST['submit'])) {
                $student_id = $_POST['student_id'];
                $student_name = $_POST['student_name'];
                $student_surname = $_POST['student_surname'];
                $student_tal = $_POST['student_tal'];
                $fac_id = $_POST['fac_id'];

                include("connectDB.php");

                // ตรวจสอบความยาว
                if(strlen($student_id) > 10 || strlen($student_tal) > 10 || !is_numeric($fac_id)) {
                    echo "ไม่สามารถบันทึกข้อมูลได้";
                } else {
                    // ตรวจสอบข้อมูลซ้ำ
                    $sql2 = "SELECT * FROM student WHERE student_id = '$student_id'";
                    $result2 = mysqli_query($connect, $sql2);

                    if(mysqli_num_rows($result2) > 0) {
                        // ข้อมูลซ้ำ
                        echo "ข้อมูลนักศึกษาซ้ำ";
                    } else {
                        // เพิ่มข้อมูลเข้าตาราง
                        $sql = "INSERT INTO student (student_id, student_name, student_surname, student_tal, Fac_id) 
                                VALUES ('$student_id', '$student_name', '$student_surname', '$student_tal', '$fac_id')";
                        $result = mysqli_query($connect, $sql);

                        if($result) {
                            echo "บันทึกข้อมูลนักศึกษาสำเร็จ";
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
