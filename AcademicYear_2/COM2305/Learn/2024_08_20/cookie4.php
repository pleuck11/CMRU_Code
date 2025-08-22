<?php

    echo "ยินดีต้อนรับคุณ".$_COOKIE['na']."<br>";
    echo "username = ".$_COOKIE['user'] ."และ password =" .$_COOKIE['pass'] ."<br>";
    
    setcookie("user"," ",0);
    header("Refresh:0; url='cookie3.php'");


?>