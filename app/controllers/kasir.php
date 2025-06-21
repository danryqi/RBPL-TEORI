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
        $data['css'] = 'kasir-laporan.css';
        $data['total_transaksi'] = $this->model('detail_model')->transaksiharian();
        $data['pemasukan'] = $this->model('detail_model')->penjualanharian();
        $data['produkterlaris'] = $this->model('detail_model')->produkterlaris();
        $data['ratarata'] = $this->model('detail_model')->ratarata();
        $data['datapenjualan'] = $this->model('detail_model')->getAllPenjualan();
        $this->view('kasir/templates/header', $data);
        $this->view('kasir/kasir-laporan', $data);
        $this->view('kasir/templates/footer');
    }
}