<?php
class FunnyLine {
    private $db;

    public function __construct() {
        $this->db = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        if ($this->db->connect_error) {
            die("Connection failed: " . $this->db->connect_error);
        }
    }

    public function getAllLines() {
        $query = "SELECT * FROM funny_lines";
        $result = $this->db->query($query);
        $lines = array();
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $lines[] = $row;
            }
        }
        return $lines;
    }

    public function addLine($line) {
        $query = "INSERT INTO funny_lines (line) VALUES ('$line')";
        $result = $this->db->query($query);
        return $result;
    }

    public function deleteLine($id) {
        $query = "DELETE FROM funny_lines WHERE id = $id";
        $result = $this->db->query($query);
        return $result;
    }
}
?>
