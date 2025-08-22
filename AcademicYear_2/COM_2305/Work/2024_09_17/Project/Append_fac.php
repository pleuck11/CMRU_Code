<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Append </title>
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

        <h2 style="text-align: center;"> เพิ่มข้อมูลคณะวิชา </h2>

        <form method="post">
            รหัสคณะ <input type="text" name="id"> <br>
            ชื่อคณะ <input type="text" name="name"> <br><br>
            <input type="reset" name="reset" value="ยกเลิก"> 
            <input type="submit" name="submit" value="เพิ่มข้อมูล"> <br>
        </form>
        <hr>
        <?php
            if(isset($_POST['submit'])) {
                $id = $_POST['id'];
                $name = $_POST['name'];

                include("connectDB.php");

                if(strlen($id) > 3 || !is_numeric($id)) {
                    echo "ไม่สามารถบันทึกข้อมูลได้";
                } else {
                    // ดูข้อมูลซ้ำ
                    $sql2 = "SELECT * FROM faculty WHERE Fac_id = '$id'";
                    $result2 = mysqli_query($connect, $sql2);

                    if(mysqli_num_rows($result2) > 0) {
                        // เช็คข้อมูลซ้ำ
                        echo "ข้อมูลซ้ำ";
                    } else {
                        // หลักจากเช็คว่าไม่ซ้ำและเพิ่มข้อมูลเข้าตาราง
                        $sql = "INSERT INTO faculty (Fac_id, Fac_name) VALUES ('$id', '$name')";
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