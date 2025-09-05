<?php
include "db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
    $check = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $check->bind_param("s", $username);
    $check->execute();
    $result = $check->get_result();
    if ($result->num_rows > 0) {
        echo "<script>alert('❌ ชื่อซํ้าโว้ย'); window.location='register.php';</script>";
    } else {
        $sql = "INSERT INTO users (username, password) VALUES (?, ?)";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ss", $username, $password);

        if ($stmt->execute()) {
            echo "<script>alert('✅ Good boys! ไปเข่้าระบบด้วย'); window.location='login.php';</script>";
        } else {
            echo "❌ อะไรว: " . $conn->error;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Register</title></head>
<body>
    <link rel="stylesheet" href="style.css">
    <h2>สมัครสมาชิก</h2>
    <form method="POST">
    <input type="text" name="username" placeholder="Username" required><br><br>
    <input type="password" name="password" placeholder="Password" required><br><br>
    <button type="submit">สมัคร</button>
  </form>
  <p>มีบัญชีแล้ว? <a href="login.php">เข้าสู่ระบบ</a></p>
</body>
</html>
