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
        if ($user == "admin" && $pass == "1212")
        {
            session_start();
            $_SESSION["name"] = "พชรพล ฮะกาศ";
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;

            


            echo "<a href=form_login0.php> ลิ้งไปไฟล์ 3 </a>";
        }
        else{
            echo '<script>alert("username และ password ผิดพลาดครับ!")</script>';
            header("Refresh:0; url='login.php'");
        }
    }

?>


</body>
</html>