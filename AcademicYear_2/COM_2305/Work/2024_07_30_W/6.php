<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฝึกหัดข้อที่6</title>
</head>
<body>
    
    <h2>ฟอร์มแจ้งซ่อมอุปกรณ์</h2><br><br>

    <form method="post" enctype="multipart/form-data">
        ชื่อผู้แจ้ง: <input type="text" name="name" required> <br><br>
        รายการที่แจ้ง: <input type="text" name="eq" required> <br><br>
        อาการหรือปัญหา:<br>
        <textarea name="datail" rows="5" cols="50" required></textarea><br><br>
        รูปภาพ (ถ้ามี): <input type="file" name="imageFile"><br><br>
        <input type="submit" name="bt" value="แจ้งซ่อม">
    </form>

    <?php
    if (isset($_POST['bt'])) {
        $name = $_POST['name'];
        $eq = $_POST['eq'];
        $datail = $_POST['datail'];

        $sToken = "mNWOUY6ZLSY7HMEU4Z3XTqvWXGDnGumC36UdiceeezE";
        $sMessage = "แจ้งซ่อมอุปกรณ์\n";
        $sMessage .= "ชื่อผู้แจ้งซ่อม: " . $name . "\n";
        $sMessage .= "ชื่ออุปกรณ์: " . $eq . "\n";
        $sMessage .= "รายละเอียด: " . $datail . "\n";

        $mgs = array(
            'message' => $sMessage
        );

        // เช็คการอัปโหลดไฟล์
        if (isset($_FILES['imageFile']) && $_FILES['imageFile']['error'] == 0) {
            $imageFile = new CURLFile($_FILES['imageFile']['tmp_name'], $_FILES['imageFile']['type'], $_FILES['imageFile']['name']);
            $mgs['imageFile'] = $imageFile;
        }

        $sticker_package_id = '446'; // แพ็คเกจสติกเกอร์
        $sticker_id = '1989'; // ID ของสติกเกอร์

        $mgs['stickerPackageId'] = $sticker_package_id;
        $mgs['stickerId'] = $sticker_id;

        // คำสั่งสำหรับให้ PHP เชื่อมต่อกับ LINE Notify
        $chOne = curl_init();
        curl_setopt($chOne, CURLOPT_URL, "https://notify-api.line.me/api/notify");
        curl_setopt($chOne, CURLOPT_SSL_VERIFYHOST, 0);
        curl_setopt($chOne, CURLOPT_SSL_VERIFYPEER, 0);
        curl_setopt($chOne, CURLOPT_POST, 1);
        curl_setopt($chOne, CURLOPT_POSTFIELDS, $mgs);
        $headers = array(
            'Content-Type: multipart/form-data',
            'Authorization: Bearer ' . $sToken
        );
        curl_setopt($chOne, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($chOne, CURLOPT_RETURNTRANSFER, 1);
        $result = curl_exec($chOne);

        // แสดงผลลัพธ์หรือข้อผิดพลาด
        if (curl_error($chOne)) {
            echo 'มีข้อผิดพลาด: ' . curl_error($chOne);
        } else {
            $result_ = json_decode($result, true);
            echo "status: " . $result_['status'];
            echo "<br>message: " . $result_['message'];
        }
        curl_close($chOne);
    }
    ?>
</body>
</html>
