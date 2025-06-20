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

    public function pembaruanterbaru() {
        $this->db->query("SELECT MAX(update_stok) AS terbaru FROM $this->table");
        return $this->db->single();
    }
}