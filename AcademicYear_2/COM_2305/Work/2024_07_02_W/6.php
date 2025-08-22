<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่_6 PHP </title>
</head>
<body>
    <form method="post" accept="">

        ข้อเสนอแนะ <br>
        <textarea rows="5" cols="30" name="txt"></textarea>
        <br>

        <input type="submit" name="submit" value="ตกลง">

    </form>
    <hr>
    <?php
            if (isset($_POST['submit']))
            {
                $txt = $_POST['txt'];
                print "<textarea rows = 5 cols = 30> $txt </textarea>"; 
    
            }
    ?>
    
</body>
</html>

