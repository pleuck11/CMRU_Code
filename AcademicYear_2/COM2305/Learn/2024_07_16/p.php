<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<h1> แม่สูตรคูณ </h1>
    <form method="post" action="">
        <label for="number">ป้อนสูตรคูณแม่:</label>
        <input type="number"  name="m" required>
        <button type="submit">ผลลัพธ์</button>
    
</body>

<?php

    if (isset($_POST['submit']))

    {
        $m = $_POST['m'];
        for($i=1; $i <= 12; $i++)
        
        {
            $result = $m * $i;
            print("$m x $i = $result <br>");
        }
    }

?>

</html>