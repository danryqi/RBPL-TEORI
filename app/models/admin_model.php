<?php 

class admin_model {
    private $table = 'detail_pesanan';
    private $db;

    public function __construct() {
        $this->db = new Database;
    }

    public function getAllPenjualan() {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }
}