<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Teacher</title>
</head>
<body>
    
    <?php
    include("mainmenu.php"); 
    include("connectDB.php"); 

    // ตรวจสอบว่ามีการลบข้อมูล
    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        $delete_sql = "DELETE FROM teacher WHERE teacher_id = '$delete_id'";
        mysqli_query($connect, $delete_sql);
    }

    // ตั้งค่าการแบ่งหน้า
    $limit = 10; // จำนวนข้อมูลต่อหน้า
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    // ค้นหาจำนวนรวมของอาจารย์
    $total_query = "SELECT COUNT(*) as total FROM teacher";
    $total_result = mysqli_query($connect, $total_query);
    $total_row = mysqli_fetch_assoc($total_result);
    $total = $total_row['total'];
    $total_pages = ceil($total / $limit);

    // ดึงข้อมูลอาจารย์ตามการแบ่งหน้า
    $sql = "SELECT * FROM teacher ORDER BY teacher_id LIMIT $limit OFFSET $offset";
    $result = mysqli_query($connect, $sql);
    ?>

    <div class="main">
        <h3>รายงานข้อมูลอาจารย์</h3>
        <table width=100% border="1">
            <tr>
                <th width="15%">รหัสอาจารย์</th>
                <th width="25%">ชื่อ</th>
                <th width="25%">นามสกุล</th>
                <th width="15%">เบอร์โทร</th>
                <th width="15%">ห้องพัก</th>
                <th width="10%">ดำเนินการ</th>
            </tr>

            <?php
                // วนลูปแสดงข้อมูลอาจารย์
                while ($row = mysqli_fetch_array($result)) {
            ?>
                <tr>
                    <td><?php echo $row['teacher_id']; ?></td>
                    <td><?php echo $row['teacher_name']; ?></td>
                    <td><?php echo $row['teacher_surname']; ?></td>
                    <td><?php echo $row['teacher_tel']; ?></td>
                    <td><?php echo $row['teacher_room']; ?></td>
                    <td>
                        <a href="?delete_id=<?php echo $row['teacher_id']; ?>" onclick="return confirm('คุณแน่ใจว่าต้องการลบข้อมูลนี้หรือไม่?');">ลบ</a>
                        | 
                        <a href="Edit_Teacher.php">แก้ไข</a>
                    </td>
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
