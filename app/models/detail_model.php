<?php

class detail_model
{
    private $table = 'detail_pesanan';
    private $table2 = 'menu';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function transaksiharian()
    {
        $this->db->query("SELECT COUNT(*) FROM $this->table WHERE DATE(waktu) = CURDATE()");
        return $this->db->single();
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

    public function ratarata() {
        $this->db->query("SELECT AVG(total) FROM (SELECT SUM(subtotal) AS total FROM $this->table GROUP BY DATE(waktu)) AS ratarata");
        return $this->db->single();
    }

    public function produkterlaris()
    {
        $this->db->query("SELECT $this->table2. nama_menu, SUM(jumlah_pesanan) as jumlah FROM $this->table INNER JOIN $this->table2 ON $this->table. id_menu = $this->table2. id_menu GROUP BY $this->table2. id_menu, $this->table. nama_menu ORDER BY jumlah DESC LIMIT 1");
        return $this->db->single();
    }
}