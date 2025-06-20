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
        $this->db->query("SELECT COUNT(*) $this->table");
        return $this->db->single();
    }

    public function allproduct()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->resultSet();
    }
}