<?php

class user extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $data['css'] = 'user.css';
        $this->view('user/templates/header' . $data);
        $this->view('user/user-index');
        $this->view('user/templates/footer');
    }

    public function menu()
    {
        $data['judul'] = 'Daftar Menu';
        $data['css'] = 'user-menu.css';
        $this->view('user/templates/header' . $data);
        $this->view('user/user-menu');
        $this->view('user/templates/footer');
    }
}