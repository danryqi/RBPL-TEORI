<?php

class admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard Admin';
        $data['css'] = 'admin-css.css';
        $data['penjualan'] = $this->model('admin_model')->getAllPenjualan();
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-index', $data);
        $this->view('admin/templates/footer');
    }

    public function produk()
    {
        $data['judul'] = 'Daftar   Produk';
        $data['css'] = 'admin-produk.css';
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-produk');
        $this->view('admin/templates/footer');
    }

    public function detail_produk()
    {
        $data['judul'] = 'Detail Produk';
        $data['css'] = 'admin-detailproduk.css';
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-detailproduk');
        $this->view('admin/templates/footer');
    }

    public function stok()
    {
        $data['judul'] = 'Stok Bahan Baku';
        $data['css'] = 'admin-stok.css';
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-stok');
        $this->view('admin/templates/footer');
    }

    public function laporan()
    {
        $data['judul'] = 'Laporan Penjualan';
        $data['css'] = 'admin-laporan.css';
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-laporan');
        $this->view('admin/templates/footer');
    }
}