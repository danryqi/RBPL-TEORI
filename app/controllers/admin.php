<?php

class admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard';
        $data['css'] = 'admin-css.css';
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-index');
        $this->view('admin/templates/footer');
    }

    public function produk()
    {
        $data['judul'] = 'Produk';
        $data['css'] = 'admin-produk.css';
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-produk');
        $this->view('admin/templates/footer');
    }
}