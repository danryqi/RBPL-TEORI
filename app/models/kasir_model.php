<?php

class kasir_model
{

    private $table = 'kasir';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getKasirIdByUserId($id_user)
    {
        $this->db->query("SELECT id_kasir FROM " . $this->table . " WHERE id = :id_user");
        $this->db->bind('id_user', $id_user);

        $result = $this->db->single();

        if ($result) {
            return $result['id_kasir'];
        } else {
            return false;
        }
    }

    public function getKasirNameByUserId($id_user)
    {
        $this->db->query("SELECT nama_kasir FROM " . $this->table . " WHERE id = :id_user");
        $this->db->bind('id_user', $id_user);

        $result = $this->db->single();

        if ($result) {
            return $result['nama_kasir'];
        } else {
            return false;
        }
    }
}