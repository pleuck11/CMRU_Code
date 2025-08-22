<?php

if ($_COOKIE['name']) {
   echo "ยินดีต้อนรับคุณ" . $_COOKIE['name'] . "<br>";
} else {
   echo "ไม่พบผู้ใช้งาน <br>";
   echo "<a href='././index.php'> ลิ้งไปไฟล์ Home </a>";
}

echo "<a href='././no_3.php'> ลิ้งไปไฟล์ no_3 </a>";
