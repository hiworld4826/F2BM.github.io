<?php
include "db.php";
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE username = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $user = $result->fetch_assoc();
        if (password_verify($password, $user['password'])) {
            $_SESSION['username'] = $username;
            header("Location: 1home.php");
            exit;
        } else {
            echo "<script>alert('❌ รหัสผ่านยังผิดจะจำวันสําคัญของเขาได้ไง');</script>";
        }
    } else {
        echo "<script>alert('❌ อะไรว ไม่เจอ ไปสมัครไป');</script>";
    }
}
?>
<!DOCTYPE html>
<html>
<head><title>Login</title></head>
<body>
    <section>
    <div class = edge>
    <h2>เข้าสู่ระบบ</h2>
    <form method="POST">
      <input type="text" name="username" placeholder="Username" required><br><br>
      <input type="password" name="password" placeholder="Password" required><br><br>
      <button type="submit">เข้าสู่ระบบ</button>
    </form>
    <p>ยังไม่มีบัญชี? <a href="register.php">สมัครฟรี</a></p>
    </div>
  </section>
</body>
</html>