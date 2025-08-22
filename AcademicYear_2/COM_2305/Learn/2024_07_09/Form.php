<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <form method="post" action="" >

        Num1 <input type="text" name="num1"  >  <br><br>
    
        Num2 <input type="text" name="num2" >  <br><br>

        <input type="reset" name="su" value="reset">
        <input type="submit" name="submit" value="เปรียบเทียบ">

    </form>
    
</body>

<?php

    if(isset($_POST["submit"]))
    {
        $n1 = $_POST["num1"];
        $n2 = $_POST["num2"];
        if ($n1 < $n2)
        {
            echo "num1 = $n1 <br>";
            echo "num2 = $n2 <br>";
            echo "\$n1 น้อยกว่า \$n2";
        }
        else
        {
            echo "num1 = $n1 <br>";
            echo "num2 = $n2 <br>";
            echo "\$n1 มากกว่า \$n2";
        }

    }

?>

</html>