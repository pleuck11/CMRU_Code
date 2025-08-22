<!-- 5.สร้างฟอร์มรับตัวเลข 2 จำนวน จากนั้นเปรียบเทียบว่าตัวเลขตัวแรก มากกว่า หรือ น้อยกว่า จำนวนที่ 2 -->

<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>แบบฝึกหัดข้อที่ 5</title>
        <style>
            body {font-family: Arial, Helvetica, sans-serif;}
            form {border: 3px solid #f1f1f1; padding: 16px; width: 300px; margin: auto; margin-top: 50px;}

            input[type=number] {
                width: 100%;
                padding: 12px 20px;
                margin: 8px 0;
                display: inline-block;
                border: 1px solid #ccc;
                box-sizing: border-box;
            }

            button {
                background-color: #04AA6D;
                color: white;
                padding: 14px 20px;
                margin: 8px 0;
                border: none;
                cursor: pointer;
                width: 100%;
            }

            button:hover {
                opacity: 0.8;
            }
        </style>
    </head>
<body>

    <h2 style="text-align:center;">เปรียบเทียบตัวเลข</h2>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="num1"><b>ตัวเลขที่ 1</b></label>
        <input type="number" placeholder="ใส่ตัวเลขที่ 1" name="num1" required>

        <label for="num2"><b>ตัวเลขที่ 2</b></label>
        <input type="number" placeholder="ใส่ตัวเลขที่ 2" name="num2" required>
        
        <button type="submit">เปรียบเทียบ</button>
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if ($num1 > $num2) {
            echo "<p style='text-align:center;'>ตัวเลขที่ 1 มากกว่าตัวเลขที่ 2</p>";
            echo "<p style='text-align:center;'> ".$num1." มากกว่า ".$num2."</p>";
        } elseif ($num1 < $num2) {
            echo "<p style='text-align:center;'>ตัวเลขที่ 1 น้อยกว่าตัวเลขที่ 2</p>";
            echo "<p style='text-align:center;'> ".$num1." น้อยกว่า ".$num2."</p>";
        } else {
            echo "<p style='text-align:center;'>ตัวเลขที่ 1 เท่ากับตัวเลขที่ 2</p>";
            echo "<p style='text-align:center;'> ".$num1." เท่ากันกับ ".$num2."</p>";
        }
    }
    ?>

</body>
</html>
