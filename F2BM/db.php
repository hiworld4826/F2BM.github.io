<?php
$host = "localhost"; // ปกติใช้ localhost
$user = "root";      // ค่าเริ่มต้นของ XAMPP/WAMP
$pass = "";          // ปกติว่าง
$db   = "login_system";

$conn = new mysqli(hostname: $host, username: $user, password: $pass, database: $db);

if ($conn->connect_error) {
    die("เชื่อมต่อฐานข้อมูลล้มเหลว: " . $conn->connect_error);
}
?>