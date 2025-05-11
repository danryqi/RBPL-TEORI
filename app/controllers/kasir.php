<?php

class kasir extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard Kasir';
        $data['css'] = 'kasir-index.css';
        $this->view('kasir/templates/header', $data);
        $this->view('kasir/kasir-index');
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