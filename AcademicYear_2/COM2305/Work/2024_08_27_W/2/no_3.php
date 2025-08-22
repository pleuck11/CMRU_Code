<?php
session_start();
session_destroy();

header("Refresh:0; url=../2/no_2.php");
