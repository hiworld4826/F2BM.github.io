-- สร้างฐานข้อมูล
CREATE DATABASE IF NOT EXISTS login_system
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_general_ci;

USE login_system;

-- ตารางเก็บผู้ใช้
CREATE TABLE IF NOT EXISTS users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- เพิ่มผู้ใช้ตัวอย่าง (รหัสผ่าน: 1234)
INSERT INTO users (username, password)
VALUES ('admin', '$2y$10$EjJ04mKQZy8uXdrFImsd2uFLYt7IlmwoR5aDb0z7vw/tk2pJv2C2O');