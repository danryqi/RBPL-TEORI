<?php

class pesanan_model
{
    private $table = 'pesanan';
    private $table2 = 'detail_pesanan';
    private $table3 = 'pembayaran';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function prosesPesananLengkap($data)
    {
        if (!$this->db) {
            // Ini jarang terjadi, tapi baik untuk dicek
            error_log("Koneksi database tidak tersedia di Transaksi_model.");
            return false;
        }

        try {
            $this->db->beginTransaction();

            $idPesanan = $this->tambahpesanan($data);
            if (!$idPesanan) {
                throw new \Exception("Gagal membuat entri pesanan utama.");
            }
            $this->tambahDetail($idPesanan, $data['cart']);
            $this->tambahPembayaran($idPesanan, $data);

            $this->db->commit();
            return true;
        } catch (\Exception $e) {
            $this->db->rollBack();
            error_log("PDO Error di prosesPesananLengkap: " . $e->getMessage());
            return false;
        }
    }

    private function tambahpesanan($data)
    {
        $totalHarga = 0;
        foreach ($data['cart'] as $item) {
            $totalHarga += $item['harga'] * $item['jumlah'];
        }

        $pajak = floor($totalHarga * 0.1);
        $totalPembayaran = $totalHarga + $pajak;

        $query = "INSERT INTO $this->table (waktu_pesanan, total_harga, status_pesanan) 
                  VALUES (NOW(), :total, :status_)";

        $this->db->query($query);
        $this->db->bind('total', $totalPembayaran);
        $this->db->bind('status_', "berhasil");

        $this->db->execute();

        if ($this->db->rowCount() == 0) {
            throw new \Exception("Gagal menyimpan data pesanan utama.");
        }

        return $this->db->lastInsertId();
    }

    private function tambahDetail($idPesanan, $cart)
    {
        $query = "INSERT INTO $this->table2 (waktu, id_pesanan, id_menu, nama_menu, jumlah_pesanan, subtotal)
                  VALUES (NOW(), :id_pesanan, :id_menu, :nama_menu, :jumlah, :subtotal)";

        $this->db->query($query);

        foreach ($cart as $item) {
            $subtotal = $item['harga'] * $item['jumlah'];

            $this->db->bind('id_pesanan', $idPesanan);
            $this->db->bind('id_menu', $item['id']);
            $this->db->bind('nama_menu', $item['nama']);
            $this->db->bind('jumlah', $item['jumlah']);
            $this->db->bind('subtotal', $subtotal);

            $this->db->execute();

            if ($this->db->rowCount() == 0) {
                throw new \Exception("Gagal menyimpan detail untuk menu: " . $item['nama']);
            }

        }

    }

    private function tambahPembayaran($idPesanan, $data)
    {
        $totalHarga = 0;
        foreach ($data['cart'] as $item) {
            $totalHarga += $item['harga'] * $item['jumlah'];
        }
        $pajak = floor($totalHarga * 0.1);
        $totalPembayaran = $totalHarga + $pajak;

        $query = "INSERT INTO $this->table3 (id_pesanan, id_kasir, metode_pembayaran, total_pembayaran, waktu_pembayaran) 
              VALUES (:id_pesanan, :id_kasir, :metode, :total, NOW())";

        $this->db->query($query);

        $this->db->bind('id_pesanan', $idPesanan);
        $this->db->bind('id_kasir', $data['id_kasir']);
        $this->db->bind('metode', $data['metode_pembayaran']);
        $this->db->bind('total', $totalPembayaran);

        $this->db->execute();

        if ($this->db->rowCount() == 0) {
            throw new \Exception("Gagal menyimpan data pembayaran.");
        }
    }
}

