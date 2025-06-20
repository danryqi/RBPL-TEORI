<?php

class admin extends Controller
{
    public function index()
    {
        $data['judul'] = 'Dashboard Admin';
        $data['css'] = 'admin-css.css';
        $data['produk'] = $this->model('menu_model')->jumlahmenu();
        $data['stok'] = $this->model('stok_model')->stokrendah();
        $data['pemasukan'] = $this->model('detail_model')->penjualanharian();
        $data['datastok'] = $this->model('stok_model')->allstok();
        $data['terlaris'] = $this->model('detail_model')->produkterlaris();
        $data['penjualan'] = $this->model('detail_model')->getAllPenjualan();
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-index', $data);
        $this->view('admin/templates/footer');
    }

    public function produk()
    {
        $data['judul'] = 'Daftar Produk';
        $data['css'] = 'admin-produk.css';
        $data['allproduct'] = $this->model('menu_model')->allproduct();
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-produk', $data);
        $this->view('admin/templates/footer');
    }

    public function detail_produk()
    {
        $data['judul'] = 'Detail Produk';
        $data['css'] = 'admin-detailproduk.css';
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-detailproduk', $data);
        $this->view('admin/templates/footer');
    }

    public function edit_produk()
    {

    }

    public function stok()
    {
        $data['judul'] = 'Stok Bahan Baku';
        $data['css'] = 'admin-stok.css';
        $data['produk'] = $this->model('menu_model')->jumlahmenu();
        $data['stok'] = $this->model('stok_model')->stokrendah();
        $data['terbaru'] = $this->model('stok_model')->pembaruanterbaru();
        $data['datastok'] = $this->model('stok_model')->allstok();
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-stok', $data);
        $this->view('admin/templates/footer');
    }

    public function laporan()
    {
        $data['judul'] = 'Laporan Penjualan';
        $data['css'] = 'admin-laporan.css';
        $defaulttanggalmulai = date('Y-m-1');
        $defaulttanggalakhir = date('Y-m-t');
        $tanggalmulai = $_GET['tanggalmulai'] ?? $defaulttanggalmulai;
        $tanggalakhir = $_GET['tanggalakhir'] ?? $defaulttanggalakhir;
        $kategori = $_GET['kategori'] ?? null;
        $data['pemasukan_bulanan'] = $this->model('pembayaran_model')->pemasukan_bulanan($tanggalmulai, $tanggalakhir, $kategori);
        $data['penjualan_bulanan'] = $this->model('pembayaran_model')->penjualan_bulanan($tanggalmulai, $tanggalakhir, $kategori);
        $data['penjualan'] = $this->model('detail_model')->getAllPenjualan();
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-laporan', $data);
        $this->view('admin/templates/footer');
    }

    public function pembelian()
    {
        $data['judul'] = 'Pembelian Terbaru';
        $data['css'] = 'admin-Pembelian.css';
        $data['penjualan'] = $this->model('detail_model')->getAllPenjualan();
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-pembelian', $data);
        $this->view('admin/templates/footer');
    }
}