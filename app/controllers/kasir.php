<?php

class kasir extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard Kasir';
        $data['css'] = 'kasir-index.css';
        $data['product'] = $this->model('menu_model')->allproduct();
        $this->view('kasir/templates/header', $data);
        $this->view('kasir/kasir-index', $data);
        $this->view('kasir/templates/footer');
    }

    public function laporan()
    {
        $data['judul'] = 'Transaksi Harian';
        $data['css'] = 'kasir.css';
        $this->view('kasir/templates/header', $data);
        $this->view('kasir/kasir-laporan');
        $this->view('kasir/templates/footer');
    }
}