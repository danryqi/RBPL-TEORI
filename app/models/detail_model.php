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

    public function ratarata()
    {
        $this->db->query("SELECT AVG(total) FROM (SELECT SUM(subtotal) AS total FROM $this->table GROUP BY DATE(waktu)) AS ratarata");
        return $this->db->single();
    }

    public function produkterlaris($limit = 5)
    {
        $this->db->query("SELECT 
        $this->table2.nama_menu, 
        SUM($this->table.jumlah_pesanan) as jumlah 
    FROM 
        $this->table 
    INNER JOIN 
        $this->table2 ON $this->table.id_menu = $this->table2.id_menu 
    GROUP BY 
        $this->table2.id_menu
    ORDER BY 
        jumlah DESC 
    LIMIT :limit");

        $this->db->bind('limit', $limit);

        $results = $this->db->resultSet();
        return $results;
    }

    public function terlaris($limit = 1)
    {
        $this->db->query("SELECT 
        $this->table2.nama_menu, 
        SUM($this->table.jumlah_pesanan) as jumlah 
    FROM 
        $this->table 
    INNER JOIN 
        $this->table2 ON $this->table.id_menu = $this->table2.id_menu 
    GROUP BY 
        $this->table2.id_menu
    ORDER BY 
        jumlah DESC 
    LIMIT :limit");

        $this->db->bind('limit', $limit);

        $results = $this->db->resultSet();
        return $results;
    }

    public function getPenjualanPerKategori()
    {
        $this->db->query(
            "SELECT 
                m.kategori_menu, 
                SUM(dp.jumlah_pesanan) as total_terjual
            FROM 
                $this->table AS dp
            INNER JOIN 
                $this->table2 AS m ON dp.id_menu = m.id_menu
            GROUP BY 
                m.kategori_menu
            ORDER BY 
                total_terjual DESC"
        );
        return $this->db->resultSet();
    }

    public function getTrenPenjualanBulanan()
    {
        $this->db->query(
            "SELECT 
                MONTH(waktu) AS bulan, 
                SUM(jumlah_pesanan) AS total 
            FROM 
                $this->table 
            WHERE 
                YEAR(waktu) = YEAR(CURDATE())
            GROUP BY 
                bulan
            ORDER BY 
                bulan ASC"
        );
        return $this->db->resultSet();
    }
}