<?php
class DBConnection {
    private $host;
    private $user;
    private $pass;
    private $dbname;
    private $conn;

    public function __construct() {
        $this->host = DB_HOST;
        $this->user = DB_USER;
        $this->pass = DB_PASS;
        $this->dbname = DB_NAME;

        try {
            $dsn = "mysql:host={$this->host};dbname={$this->dbname};charset=utf8";
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
            ];

            $this->conn = new PDO($dsn, $this->user, $this->pass, $options);
        } catch (PDOException $e) {
            // Xử lý lỗi kết nối
            die("Kết nối CSDL thất bại: " . $e->getMessage());
        }
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
