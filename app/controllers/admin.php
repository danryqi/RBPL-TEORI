<?php

class admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Home';
        $this->view('templates/heder' . $data);
        $this->view('admin/admin-index');
        $this->view('templates/footer');
    }
}