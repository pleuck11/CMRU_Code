<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Student</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .main {
            margin: 20px;
        }
        .pagination a {
            margin: 0 5px;
            text-decoration: none;
        }
    </style>
</head>
<body>
    
    <?php
    include("mainmenu.php");
    include("connectDB.php"); 

    // ตรวจสอบว่ามีการลบข้อมูล
    if (isset($_GET['delete_id'])) {
        $delete_id = mysqli_real_escape_string($connect, $_GET['delete_id']);
        $delete_sql = "DELETE FROM student WHERE student_id = '$delete_id'";
        mysqli_query($connect, $delete_sql);
    }

    // ตั้งค่าการแบ่งหน้า
    $limit = 10; // จำนวนข้อมูลต่อหน้า
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    // ค้นหา
    $total_query = "SELECT COUNT(*) as total FROM student";
    $total_result = mysqli_query($connect, $total_query);
    $total_row = mysqli_fetch_assoc($total_result);
    $total = $total_row['total'];
    $total_pages = ceil($total / $limit);

    // ดึงข้อมูลนักศึกษาตามการแบ่งหน้า
    $sql = "SELECT * FROM student ORDER BY student_id LIMIT $limit OFFSET $offset";
    $result = mysqli_query($connect, $sql);
    ?>

    <div class="main">
        <h3>รายงานข้อมูลนักศึกษา</h3>
        <table width=100% border="1">
            <tr>
                <th width="10%">รหัสนักศึกษา</th>
                <th width="20%">ชื่อ</th>
                <th width="20%">นามสกุล</th>
                <th width="20%">เบอร์โทร</th>
                <th width="10%">รหัสคณะ</th>
            </tr>

            <?php
                // วนลูปแสดงข้อมูลนักศึกษา
                while($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['student_id']); ?></td>
                    <td><?php echo htmlspecialchars($row['student_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['student_surname']); ?></td>
                    <td><?php echo htmlspecialchars($row['student_tal']); ?></td>
                    <td><?php echo htmlspecialchars($row['Fac_id']); ?></td>
                </tr>
            <?php
                }
                mysqli_close($connect);
            ?>
        </table>

<!-- แบ่งหน้า -->
        <div class="pagination">
            <?php if ($page > 1): ?>
                <a href="?page=<?php echo $page - 1; ?>">ก่อนหน้า</a>
            <?php endif; ?>

            <?php for ($i = 1; $i <= $total_pages; $i++): ?>
                <a href="?page=<?php echo $i; ?>" <?php if ($i == $page) echo 'style="font-weight:bold;"'; ?>>
                    <?php echo $i; ?>
                </a>
            <?php endfor; ?>

            <?php if ($page < $total_pages): ?>
                <a href="?page=<?php echo $page + 1; ?>">ถัดไป</a>
            <?php endif; ?>
        </div>

    </div>

</body>
</html>
