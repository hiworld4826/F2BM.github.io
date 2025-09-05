<?php
// 🔗 ใส่ลิงก์ CSV จาก Google Sheet
$url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vT42IN_y7QZF1k1AypLgUJxK3kqHiFQbQT2BnWpYOKh2HQw45hJjUlRHO5qqHaBBP36o5kbQSSXhxp_/pubhtml";

// ดึงข้อมูลจาก Google Sheet
$data = array_map("str_getcsv", file($url));
?>
<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <title>ข้อมูลจาก Google Sheet</title>
</head>
<body>
    <h1>ข้อมูลจาก Google Sheet</h1>
    <a href="1home.php">⬅ กลับหน้าแรก</a>
    <hr>

    <table border="1" cellpadding="5">
        <?php foreach ($data as $row): ?>
            <tr>
                <?php foreach ($row as $cell): ?>
                    <td><?= htmlspecialchars($cell) ?></td>
                <?php endforeach; ?>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

