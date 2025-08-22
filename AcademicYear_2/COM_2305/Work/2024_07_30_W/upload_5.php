<?php

    if(isset($_POST['bt']))
    {
        // วิธีการนำมา
        $img = $_FILES['pict']['name'];
        $tmp = $_FILES['pict']['tmp_name'];
        echo"ชื่อไฟล์ $img <br>";
        echo"ตำแหน่งที่เก็บ $tmp <br>";

        // เก็บไว้
        $mving = "image/".$img;
        echo"$tmp";

        // การย้าย
        move_uploaded_file($tmp,$mving);

        echo '<img sre= "image/">';

    }

?>
