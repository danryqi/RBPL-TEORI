<?php

class detail_model
{
    private $table = 'detail_pesanan';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPenjualan()
    {
        $this->db->query("SELECT * FROM $this->table WHERE DATE(waktu) = CURDATE() ORDER BY DATE(waktu) DESC");
        return $this->db->resultSet();
    }

    public function penjualanharian()
    {
        $this->db->query("SELECT SUM(subtotal) AS total FROM $this->table WHERE DATE(waktu) = CURDATE()");
        return $this->db->single();
    }

    public function produkterlaris()
    {

    }
}