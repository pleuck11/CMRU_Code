<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="" >

    กรุณาป้อนชื่อลูกค้า <input type="text" name="name"  >  <br><br>
    เลือกรายการอาหาร <select name="product">
                        <option value="1"> ข้าวไข่เจียว (25 บาท) </option>
                        <option value="2"> ข้าวไข่ข้น (30 บาท) </option>
                        <option value="3"> ข้าวมันไก่ (40 บาท) </option>
                        <option value="4"> บะหมี่ (35 บาท) </option>
                    </select> <br><br>
    จำนวนที่สั่ง <input type="number" name="count"> <br><br>
    <input type="submit" name="submit" value="กดสั่งอาหาร"><br><br>

    </form>
    
</body>

<?php
    if (isset($_POST["submit"]))
    {
        $name = $_POST["name"];
        $product = $_POST["product"];
        $count = $_POST["count"];

        switch($product)
        {
            case "1":
                $cost = 25 * $count;
                $order = "ข้าวไข่เจียว";
                break;

            case "2":
                $cost = 30 * $count;
                $order = "ข้าวไข่ข้น";
                break;

            case "3":
                $cost = 40 * $count;
                $order = "ข้าวมันไก่";
                break;

            case "4":
                $cost = 35 * $count;
                $order = "บะหมี่";
                break;
        }


        echo "ลูกค้าชื่อ : $name <br><br>" ; 
        echo "จำนวนที่สั่ง :" .$count ."<br><br>";
        echo "คิดเป็นเงิน :" .$cost ." บาท<br><br>"; 
        echo "ขอบพระคุณลูกค้าที่มาใช้บริการครับ <br>";

            
    }

?>

</html>