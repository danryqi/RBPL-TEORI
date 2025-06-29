<?php

class Auth_model
{
    private $table = 'user';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function checkLogin($username, $password)
    {
        $this->db->query("SELECT * FROM $this->table WHERE username = :username");
        $this->db->bind('username', $username);

        $user = $this->db->single();

        if ($user) {
            if ($user && $password === $user['password']) {
                return $user;
            }
        }
        return false;
    }
}