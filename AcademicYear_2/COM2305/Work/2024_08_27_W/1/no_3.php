<?php
setcookie("name", "", time() - 60, "/");
setcookie("user", "", time() - 60, "/");
setcookie("pass", "", time() - 60, "/");

header("Refresh:0; url=../1/no_2.php");
