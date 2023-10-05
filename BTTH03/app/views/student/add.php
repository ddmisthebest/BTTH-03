<?php
require_once('../../app/config/config.php');
require_once(APP_ROOT . '/app/libs/DBConnection.php');

// Xử lý thêm sinh viên ở đây (giống như mã trong câu trả lời trước)

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sinh viên</title>
    <!-- Include CSS và JS cần thiết -->
</head>
<body>
    <h1>Thêm sinh viên</h1>
    <form method="POST" action="add.php">
        <!-- Biểu mẫu nhập thông tin sinh viên -->
        <label for="tenSinhVien">Tên sinh viên:</label>
        <input type="text" id="tenSinhVien" name="tenSinhVien" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="ngaySinh">Ngày sinh:</label>
        <input type="date" id="ngaySinh" name="ngaySinh" required><br>

        <label for="idLop">ID Lớp:</label>
        <input type="text" id="idLop" name="idLop" required><br>

        <input type="submit" value="Thêm sinh viên">
    </form>
</body>
</html>
