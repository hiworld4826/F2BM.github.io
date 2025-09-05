<?php
// 🔗 ใส่ลิงก์ CSV จาก Google Sheet
$url = "https://docs.google.com/spreadsheets/d/e/2PACX-1vSiELH5ghdjMemitnxXUxFvXfn0ANyOJX7kxUlkDS15I_T9J44ngXC9r8_6UFdsWVkPBA5itY-sxauL/pub?output=csv";

// ดึงข้อมูลจาก Google Sheet
$data = array_map("str_getcsv", file($url));
?>
<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Check Lost Item</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header -->
 <header>
    <a href="1home.php">
    <div class="logo">
      <img src="cropped-BENJAMA_logo.png" alt="logo">
      <span>BENJAMA</span>
    </div></a>
    <div class="search-area">
      <input type="text" placeholder="SEARCH BAR">
      <a href="report.php"class="report-btn">report</a>
    </div>
  </header>
  <h1>ข้อมูลจาก Google Sheet</h1>
    <a href="home.php">⬅ กลับหน้าแรก</a>
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
</html>
