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

        if ($user == "admin" && $pass == "0909") {

            session_start();
            $_SESSION["name"] = "พชรพล ฮะกาศ";
            $_SESSION["user"] = $user;
            $_SESSION["pass"] = $pass;

            echo "ยินดีต้อนรับคุณ" . $_SESSION['name'] . "<br>";
            echo "username = " . $_SESSION['user'] . "และ password =" . $_SESSION['pass'] . "<br>";

            echo "<a href='.././2/no_2.php'> ลิ้งไปไฟล์ no_2 </a>";
        } else {
            echo '<script>alert("username และ password ผิดพลาดครับ!")</script>';
            header("Refresh:0; url='.././2/From_login.php'");
        }
    }

    ?>


</body>

</html>