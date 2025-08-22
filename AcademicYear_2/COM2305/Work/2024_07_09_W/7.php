<!-- 7. สร้างฟอร์มรับตัวเลขและสัญลักษณ์คณิตศาสตร์ (+  -  *  / ) จากนั้นคำนวณตัวเลขตามสัญลักษณ์ที่เลือก ใช้คำสั่ง switch -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>แบบฝึกหัดข้อที่ 7</title>
</head>
<body>

<h2> คำนวณคณิตสาสตร์ </h2>
    <form method="post" action="">
        <input type="number" name="num1" placeholder="Number1" required>
        <select name="operator" required>
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="number" name="num2" placeholder="Number2" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>
    
</body>

<?php

if (isset($_POST['calculate'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];
    $result = 0;

    switch ($operator) {
        case '+':
            $result = $num1 + $num2;
            break;
        case '-':
            $result = $num1 - $num2;
            break;
        case '*':
            $result = $num1 * $num2;
            break;
        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                echo "Division by zero is not allowed.";
                exit();
            }
            break;
        default:
            echo "Invalid operator.";
            exit();
    }

    echo "<h2>$num1  $operator  $num2</h2>";
    echo "<h2>ผลลัพธ์: $result</h2>";
}

?>

</html>