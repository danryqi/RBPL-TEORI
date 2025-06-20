<?php

class pembayaran_model
{

    private $table = 'pembayaran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function pemasukan_bulanan($tanggalmulai, $tanggalakhir, $kategori = null)
    {
        $sql = "SELECT SUM(total_pembayaran) as total_pemasukan
                FROM $this->table
                WHERE 1=1";

        $params = [];

        $sql .= " AND waktu_pembayaran BETWEEN :tanggalmulai AND :tanggalakhir";
        $params[':tanggalmulai'] = $tanggalmulai . ' 00:00:00';
        $params[':tanggalakhir'] = $tanggalakhir . ' 23:59:59';

        if (!is_null($kategori) && $kategori !== '') {
            $sql .= " AND kategori_menu = :kategori";
            $params[':kategori'] = $kategori;
        }

        $this->db->query($sql);

        foreach ($params as $key => $value) {
            $this->db->bind($key, $value);
        }

        return $this->db->single();
    }

    public function penjualan_bulanan($tanggalmulai, $tanggalakhir, $kategori = null)
    {
        $sql = "SELECT * FROM $this->table
                WHERE 1=1";

        $params = [];

        $sql .= " AND waktu_pembayaran BETWEEN :tanggalmulai AND :tanggalakhir";
        $params[':tanggalmulai'] = $tanggalmulai . ' 00:00:00';
        $params[':tanggalakhir'] = $tanggalakhir . ' 23:59:59';

        if (!is_null($kategori) && $kategori !== '') {
            $sql .= " AND kategori_menu = :kategori";
            $params[':kategori'] = $kategori;
        }

        $this->db->query($sql);

        foreach ($params as $key => $value) {
            $this->db->bind($key, $value);
        }

        return $this->db->resultSet();
    }
}

?>