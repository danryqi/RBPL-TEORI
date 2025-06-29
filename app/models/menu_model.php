<?php

class menu_model
{
    private $table = 'menu';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function jumlahmenu()
    {
        $this->db->query("SELECT COUNT(*) FROM $this->table");
        return $this->db->single();
    }

    public function allproduct()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function product($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id_menu = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambah($nama, $_path, $harga, $desk, $kategori)
    {
        $this->db->query("INSERT INTO $this->table VALUES ('', :nama, :kategori, :harga, :desk, :_path)");
        $this->db->bind('nama', $nama);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('harga', $harga);
        $this->db->bind('desk', $desk);
        $this->db->bind('_path', $_path);

        $this->db->execute();
    }

    public function editproduk($id, $nama, $_path, $harga, $desk, $kategori)
    {
        $this->db->query("UPDATE $this->table SET nama_menu = :nama, kategori_menu = :kategori, harga_menu = :harga, desc_menu = :desk, pic_menu = :_path WHERE id_menu = :id");
        $this->db->bind('id', $id);
        $this->db->bind('nama', $nama);
        $this->db->bind('kategori', $kategori);
        $this->db->bind('harga', $harga);
        $this->db->bind('desk', $desk);
        $this->db->bind('_path', $_path);

        $this->db->execute();
    }

    public function hapusmenu($id)
    {
        $query = "DELETE FROM menu WHERE id_menu = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
}