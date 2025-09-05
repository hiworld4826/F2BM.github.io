<!DOCTYPE html>
<html lang="th">
<head>
  <meta charset="UTF-8">
  <title>Lost & Found</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <!-- Header -->
  <header>
    <a href="1home.php"text-decoration = "none">
    <div class="logo">
      <img src="cropped-BENJAMA_logo.png" alt="logo">
      <span>BENJAMA</span>
    </div></a>
    <div class="nav">
      <button onclick="logout()" class="login-btn">LOG OUT</button>
      <div class="menu-icon">&#9776;</div>
    </div>
  </header>

  <!-- Content -->
  <main>
    <section class="left-panel">
      <a href="report.php" class="card">
     <h3>REPORT LOST ITEM</h3>
     <p>
      กรณีที่สิ่งของหาย กรุณากรอกและส่งข้อมูลให้ครบถ้วน<br>
      เพื่อเจ้าหน้าที่ตามหาสิ่งของของท่านได้อย่างรวดเร็ว<br><br>
     <b>ข้อมูลสำคัญที่ควรระบุ :</b><br>
     วันที่<br>
     เวลา<br>
     สถานที่<br>
     ลักษณะ<br>
     </p>
     </a>

    
<!-- Card สำหรับ CHECK -->
<a href="check.php" class="card">
  <h3>CHECK LOST ITEM LIST</h3>
  <p>
    กรณีพบสิ่งของหาย กรุณากรอกและส่งข้อมูลให้ครบถ้วน<br>
    เพื่อเจ้าหน้าที่ตามหาสิ่งของของท่านได้อย่างรวดเร็ว<br><br>
    <b>ข้อมูลสำคัญที่ควรระบุ :</b><br>
    สถานที่<br>
    ลักษณะ<br>
    หากสามารถถ่ายรูปโปรดอัปโหลดเพื่อความสะดวก
  </p>
</a>
</section>
  <script>
    function logout() {
      alert("ออกจากระบบแล้ว");
      window.location.href = "login.php"; // เปลี่ยนเส้นทางเมื่อ logout
    }
  </script>
</body>
</html>