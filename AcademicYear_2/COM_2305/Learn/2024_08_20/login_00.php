<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loing</title>
</head>
<body>


<?php

    if(isset($_POST['submit']))
    {
        $user = $_POST['uname'];
        $pass = $_POST['psw'];
        if ($user == "admin" && $pass == "12345")
        {
            // $name = "พชรพล ฮะกาศ";
            setcookie("na","พชรพล ฮะกาศ",time()+60);  //การสร้าง cookie
            setcookie("user",$user,time()+60);
            setcookie("pass",$pass,time()+60);

            // echo "ยินดีต้อนรับคุณ $name <br>";
            // echo "username = $user และ password = $pass <br>";

            echo "ยินดีต้อนรับคุณ".$_COOKIE['na']."<br>";   //การใช้ cookie
            echo "username = ".$_COOKIE['user'] ."และ password =" .$_COOKIE['pass'] ."<br>";

            echo "<a href=cookie3.php> ลิ้งไปไฟล์ 3 </a>";
        }
        else{
            echo '<script>alert("username และ password ผิดพลาดครับ!")</script>';
            header("Refresh:0; url='login.php'");
        }
    }

?>


</body>
</html>