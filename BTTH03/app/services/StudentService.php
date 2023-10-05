<?php
require_once APP_ROOT . '/app/models/Student.php';

class StudentService {
    private $db;

    public function __construct() {
        // Kết nối đến CSDL sử dụng PDO
        $dbHost = 'localhost'; // Thay thế bằng địa chỉ máy chủ CSDL của bạn
        $dbName = 'quanlysinhvien'; // Thay thế bằng tên cơ sở dữ liệu của bạn
        $dbUser = 'root'; // Thay thế bằng tên người dùng CSDL của bạn
        $dbPass = ''; // Thay thế bằng mật khẩu CSDL của bạn

        try {
            $this->db = new PDO("mysql:host=$dbHost;dbname=$dbName;charset=utf8", $dbUser, $dbPass);
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Kết nối đến CSDL thất bại: " . $e->getMessage());
        }
    }

    public function getAllStudents() {
        try {
            // Chuẩn bị câu lệnh truy vấn
            $sql = "SELECT * FROM sinhvien ORDER BY id DESC";

            // Thực hiện truy vấn và lấy dữ liệu
            $stmt = $this->db->query($sql);

            // Khởi tạo mảng $students
            $students = [];

            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                $student = new Student($row['id'], $row['tenSinhVien'], $row['email'], $row['ngaySinh'], $row['idLop']);
                $students[] = $student;
            }

            return $students;
        } catch (PDOException $e) {
            die("Lỗi truy vấn: " . $e->getMessage());
        }
    }
}
?>
