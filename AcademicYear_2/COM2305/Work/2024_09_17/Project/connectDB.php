<?php
    $srvname="127.0.0.1";
    $username="root";
    $password="";
    $dbname = "myprojectl";
    $connect = mysqli_connect($srvname,$username,$password,$dbname) or die ("เชื่อมต่อฐานข้อมูลไม่ได้");


    // if($connect)
    // {
    //     echo"เชื่อมต่อฐานข้อมูลได้";
    // }
    // else
    // {
    //     mysqli_connect_error();
    // }

    mysqli_set_charset($connect,"UTF8");

    // ปิด
    // mysqli_close($connect)
    
?>