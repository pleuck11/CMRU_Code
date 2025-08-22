<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> แบบฝึกหัดข้อที่_9 PHP </title>
</head>
<body>
    <h1>ป้อนข้อมูล</h1>
    <form method="post" action="">
        <label for="id">รหัสนักศึกษา:</label>
        <input type="text" id="id" name="id" required><br><br>

        <label for="name">ชื่อ:</label>
        <input type="text" id="name" name="name" required><br><br>

        <input type="submit" value="Submit">
    </form>

    <form method="post" action="">
        <input type="hidden" name="clear" value="true"><br>
        <input type="submit" value="Clear Data">
    </form>

    <?php
        session_start();

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['clear']) && $_POST['clear'] == 'true') {
                unset($_SESSION['data']);
            } else {
                $id = htmlspecialchars($_POST['id']);
                $name = htmlspecialchars($_POST['name']);

                if (!isset($_SESSION['data'])) {
                    $_SESSION['data'] = [];
                }

                $_SESSION['data'][] = ['id' => $id, 'name' => $name];
            }
        }
    ?>

    <h1>Submitted Data</h1>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
        </tr>
        <?php
        if (isset($_SESSION['data'])) {
            foreach ($_SESSION['data'] as $row) {
                echo "<tr>";
                echo "<td>" . htmlspecialchars($row['id']) . "</td>";
                echo "<td>" . htmlspecialchars($row['name']) . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
    
</body>
</html>
