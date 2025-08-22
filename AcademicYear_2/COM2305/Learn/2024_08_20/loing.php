<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loing</title>

</head>

<body>


    <?php

    if (isset($_POST['submit'])) {
        $user = $_POST['uname'];
        $pass = $_POST['psw'];
        if ($user == "admin" && $pass == "4545") {
            session_start();
            $_SESSION["name"] = "พชรพล ฮะกาศ";
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;
          
            echo "  <a href='../2024_08_27/activity.php'> ลิ้งไปไฟล์ activity </a>";
            echo "  <a href='../2024_08_27/news.php'> ลิ้งไปไฟล์ news </a>";
         
        } else {
            echo '<script>alert("username และ password ผิดพลาดครับ!")</script>';
            header("Refresh:0; url='login.php'");
        }
    }

    ?>


</body>

</html>