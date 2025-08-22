<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
</head>
<body>

    <div class="main">
        <h3>รายงานข้อมูล</h3>
        <table width=100% border="1">
            
        <tr>
                <th width="25%">รหัสคณะ</th>
                <th>ชื่อคณะ</th>

            </tr>
    
    <?php
    include("mainmenu.php");
    include("connectDB.php"); 

    // ตรวจสอบว่ามีการลบข้อมูล
    if (isset($_GET['delete_id'])) {
        $delete_id = $_GET['delete_id'];
        $delete_sql = "DELETE FROM faculty WHERE Fac_id = '$delete_id'";
        mysqli_query($connect, $delete_sql);
    }

    // ตั้งค่าการแบ่งหน้า
    $limit = 10; // จำนวนข้อมูลต่อหน้า
    $page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
    $offset = ($page - 1) * $limit;

    // ค้นหาจำนวนรวมของคณะ
    $total_query = "SELECT COUNT(*) as total FROM faculty";
    $total_result = mysqli_query($connect, $total_query);
    $total_row = mysqli_fetch_assoc($total_result);
    $total = $total_row['total'];
    $total_pages = ceil($total / $limit);

    // ดึงข้อมูลคณะ
    $sql = "SELECT * FROM faculty ORDER BY Fac_id LIMIT $limit OFFSET $offset";
    $result = mysqli_query($connect, $sql);
    ?>


            <?php
                while ($row = mysqli_fetch_array($result)) { ?>
                <tr>
                    <td width="25%"><?php echo $row['Fac_id']; ?></td>
                    <td><?php echo $row['Fac_name']; ?></td>

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
