<?php

class admin_model
{
    private $table = 'admin';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function user()
    {
        $this->db->query("SELECT * FROM $this->table");
        return $this->db->single();
    }
}