<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>สอบเก็บคะแนน</title>
</head>
<body>

<h1>บริการรับฝากส่งพัสดุ</h1>

    <form method="post" action="" >

    กรุณาป้อนชื่อผู้ส่ง <input type="text" name="name1"  >  <br><br>
    เบอร์โทรติดต่อของผู้ส่ง <input type="text" name="pho1"  >  <br><br>
    ชื่อผู้รับ <input type="text" name="name2"  >  <br><br>
    ที่อยู่ผู้รับ <input type="text" name="address"  >  <br><br>
    เบอร์โทรติดต่อของผู้รับ <input type="text" name="pho2"  >  <br><br><br><br>

    น้ำหนักของพัสดุ <select name="product">
                        <option value="1"> ไม่เกิน 100 กรัม (ค่าบริการ 18 บาท) </option>
                        <option value="2"> เกิน 100 กรัม (ค่าบริการ 22 บาท) </option>
                        <option value="3"> เกิน 250 กรัม แต่ไม่เกิน 500 กรัม (ค่าบริการ 28 บาท) </option>
                        <option value="4"> เกิน 500 กรัม แต่ไม่เกิน 1000 กรัม (ค่าบริการ 38 บาท) </option>
                        <option value="5"> เกิน 1000 กรัม แต่ไม่เกิน 2000 กรัม (ค่าบริการ 58 บาท) </option>
                        <option value="6"> **ถ้าน้ำหนักมากกว่า 2000 กรัมไม่สามารถลงทะเบียนได้ </option>
                    </select> <br><br>
    <!-- จำนวนที่ส่ง <input type="number" name="count"> ชิ้น<br><br> -->
    <input type="submit" name="submit" value="ลงทะเบียน"><br><br>

    </form>
    
</body>

<?php
    if (isset($_POST["submit"]))
    {
        $name1 = $_POST["name1"];
        $pho1 = $_POST["pho1"];
        $name2 = $_POST["name2"];
        $pho2 = $_POST["pho1"];
        $ads = $_POST["address"];

        $product = $_POST["product"];
        // $count = $_POST["count"];

        if ($product == "1")
        {
            $cost = 18 ;
            $order = "ไม่เกิน 100 กรัม";
        }

        elseif ($product == "2")
        {
            $cost = 22 ;
            $order = "เกิน 100 กรัม";
        }

        elseif ($product == "3")
        {
            $cost = 28 ;
            $order = "เกิน 250 กรัม แต่ไม่เกิน 500 กรัม";
        }

        elseif ($product == "4")
        {
            $cost = 38 ;
            $order = "เกิน 500 กรัม แต่ไม่เกิน 1000 กรัม";
        }
        elseif ($product == "5")
        {
            $cost = 58 ;
            $order = "เกิน 1000 กรัม แต่ไม่เกิน 2000 กรัม";
        }
        elseif ($product == "6")
        {
            $cost = 0 ;
            echo "**ถ้าน้ำหนักมากกว่า 2000 กรัมไม่สามารถลงทะเบียนได้";
        }
        

        echo "ชื่อผู้ส่ง : $name1 <br><br>" ;
        echo "เบอร์โทรติดต่อของผู้ส่ง : $pho1 <br><br>" ;
        echo "ชื่อผู้รับ : $name2 <br><br>" ;
        echo "เบอร์โทรติดต่อของผู้ส่ง : $pho2 <br><br>" ;
        echo "ที่อยู่ผู้รับ : $ads <br><br>" ;
        
        // echo "จำนวนที่ส่ง :" .$count ."<br><br>";
        echo "คิดเป็นเงิน :" .$cost . "บาท<br><br>"; 
        echo "ขอบพระคุณลูกค้าที่มาใช้บริการครับ <br>";

            
    }

?>

</html>