<?php
class Database {
    private $host = "localhost";
    private $db_name = "webcafemanagement"; // Đảm bảo DB này tồn tại
    private $username = "root";
    private $password = "";
    public $conn;

    public function getConnection() {
        if ($this->conn === null) {
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->db_name);

            if ($this->conn->connect_error) {
                die("Kết nối thất bại: " . $this->conn->connect_error);
            }

            $this->conn->set_charset("utf8mb4");
        }
        return $this->conn; // Trả về đối tượng mysqli
    }
}
?>