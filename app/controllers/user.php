<?php

class user extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/header' . $data);
        $this->view('user/user-index');
        $this->view('templates/footer');
    }
}