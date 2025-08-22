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

            setcookie("name", "พชรพล ฮะกาศ", time() + 60, "/");
            setcookie("user", $user, time() + 60, "/");
            setcookie("pass", $pass, time() + 60, "/");

            echo "ยินดีต้อนรับคุณ" . $_COOKIE['name'] . "<br>";
            echo "username = " . $_COOKIE['user'] . "และ password =" . $_COOKIE['pass'] . "<br>";

            echo "<a href='../1/no_2.php'> ลิ้งไปไฟล์ no_2 </a>";
        } else {
            echo '<script>alert("username และ password ผิดพลาดครับ!")</script>';
            header("Refresh:0; url='../1/index.php'");
        }
    }

    ?>


</body>

</html>