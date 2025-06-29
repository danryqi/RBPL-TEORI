<?php

class stok_model
{
    private $table = 'stok_bahanbaku';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function stokrendah()
    {
        $this->db->query("SELECT COUNT(*) AS stokrendah FROM $this->table WHERE status_stok = 'stok rendah'");
        return $this->db->single();
    }

    public function allstok()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }

    public function pembaruanterbaru()
    {
        $this->db->query("SELECT MAX(update_stok) AS terbaru FROM $this->table");
        return $this->db->single();
    }

    public function tambah($data)
    {
        $query = "INSERT INTO stok_bahanbaku
                    VALUES
                    ('', :editor, :nama, :kuantitas, :minimum, :satuan, 'Diperbarui', CURDATE())";
        $this->db->query($query);
        $this->db->bind('editor', $data['editor']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kuantitas', $data['kuantitas']);
        $this->db->bind('minimum', $data['minimum']);
        $this->db->bind('satuan', $data['satuan']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function ambilstok($id)
    {
        $this->db->query("SELECT * FROM $this->table WHERE id_stok = :id");
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function edit($data)
    {
        $query = "UPDATE stok_bahanbaku SET nama_stok = :nama, jumlah_stok = :kuantitas, min_stok = :minimum, satuan_stok = :satuan WHERE id_stok = :id";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('kuantitas', $data['kuantitas']);
        $this->db->bind('minimum', $data['minimum']);
        $this->db->bind('satuan', $data['satuan']);
        $this->db->bind('id', $data['id']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapus($id)
    {
        $query = "DELETE FROM stok_bahanbaku WHERE id_stok = :id";
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();
        return $this->db->rowCount();
    }
}