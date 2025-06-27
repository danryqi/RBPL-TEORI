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

    public function detail_produk($id)
    {
        $data['judul'] = 'Detail Produk';
        $data['css'] = 'admin-detailproduk.css';
        $data['product'] = $this->model('menu_model')->product($id);
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-detailproduk', $data);
        $this->view('admin/templates/footer');
    }

    public function edit_produk($id)
    {
        $data['judul'] = 'Detail Produk';
        $data['css'] = 'admin-editproduk.css';
        $data['product'] = $this->model('menu_model')->product($id);
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-editproduk', $data);
        $this->view('admin/templates/footer');
    }

    public function editmenu()
    {

    }

    public function tambahproduk()
    {
        $data['judul'] = 'Tambah Produk';
        $data['css'] = 'admin-tambahproduk.css';
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-tambahproduk', $data);
        $this->view('admin/templates/footer');
    }

    public function tambahmenu()
    {
        $nama = $_POST['nama'];
        $harga = $_POST['harga'];
        $desk = $_POST['desk'];
        $kategori = $_POST['kategori'];

        $target_dir = img_path . '/';
        $target_file = $target_dir . basename($_FILES['pic']['name']);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        $check = getimagesize($_FILES['pic']['tmp_name']);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "File bukan gambar";
            $uploadOk = 0;
        }

        if (file_exists($target_file)) {
            echo "File tersebut sudah ada";
            $uploadOk = 0;
        }

        if ($_FILES['pic']['size'] > 5242880) {
            echo "ukuran gambar terlalu besar";
            $uploadOk = 0;
        }

        if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {
            echo "Hanya upload file JPG, PNG, JPEG atau GIF";
            $uploadOk = 0;
        }

        if ($uploadOk == 0) {
            Flasher::setFlash('Tidak', 'tersimpan', 'warning');
        } else {
            if (move_uploaded_file($_FILES['pic']['tmp_name'], $target_file)) {
                Flasher::setFlash('Berhasil', 'Disimpan', 'success');
                $menu = $this->model('menu_model');
                $menu->tambah($nama, 'img/' . basename($_FILES['pic']['name']), $harga, $desk, $kategori);

                header('Location:' . baseurl . '/admin/produk');
                exit;

            } else {
                Flasher::setFlash('Gagal', 'disimpan', 'danger');
            }
        }
    }

    public function stok()
    {
        $data['judul'] = 'Stok Bahan Baku';
        $data['css'] = 'admin-stok.css';
        $data['user'] = $this->model('admin_model')->user();
        $data['produk'] = $this->model('menu_model')->jumlahmenu();
        $data['stok'] = $this->model('stok_model')->stokrendah();
        $data['terbaru'] = $this->model('stok_model')->pembaruanterbaru();
        $data['datastok'] = $this->model('stok_model')->allstok();
        $this->view('admin/templates/header', $data);
        $this->view('admin/admin-stok', $data);
        $this->view('admin/templates/footer');
    }

    public function tambahstok()
    {
        if ($this->model('stok_model')->tambah($_POST) > 0) {
            Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
            header('Location:' . baseurl . '/admin/stok');
            exit;
        } else {
            Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
            header('Location:' . baseurl . '/admin/stok');
            exit;
        }
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