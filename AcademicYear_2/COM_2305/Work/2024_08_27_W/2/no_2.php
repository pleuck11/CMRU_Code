<?php

session_start();
if ($_SESSION['name']) {
   echo "ยินดีต้อนรับคุณ" . $_SESSION['name'] . "<br>";
} else {
   echo "ไม่พบผู้ใช้งาน <br>";
   echo "<a href='./././From_login.php'> ลิ้งไปไฟล์ Home </a>";
}

echo "<a href='././no_3.php'> ลิ้งไปไฟล์ no_3 </a>";
