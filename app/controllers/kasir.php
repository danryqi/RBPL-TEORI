<?php

class kasir extends Controller
{
    public function __construct()
    {
        // Cek apakah pengguna sudah login DAN perannya adalah 'admin'
        if (!isset($_SESSION['is_logged_in']) || $_SESSION['user_role'] !== 'kasir') {
            // Jika tidak, tendang kembali ke halaman login
            Flasher::setFlash('Akses Ditolak', 'Anda harus login sebagai Admin.', 'danger');
            header('Location: ' . baseurl . '/LoginAuth');
            exit;
        }
    }

    public function index()
    {
        $id_user_login = $_SESSION['user_id'] ?? null;
        if (!$id_user_login) {
            http_response_code(401); // Unauthorized
            echo "Akses ditolak. Silakan login kembali.";
            exit;
        }

        $kasirModel = $this->model('kasir_model');
        $nama = $kasirModel->getKasirNameByUserId($id_user_login);
        if ($nama === false) {
            http_response_code(404); // Not Found
            echo "Profil kasir tidak ditemukan untuk pengguna ini.";
            exit;
        }

        $data['judul'] = 'Dashboard Kasir';
        $data['css'] = 'kasir-index.css';
        $data['nama'] = $nama;
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
        $data['produkterlaris'] = $this->model('detail_model')->terlaris(1);
        $data['ratarata'] = $this->model('detail_model')->ratarata();
        $data['datapenjualan'] = $this->model('detail_model')->getAllPenjualan();
        $this->view('kasir/templates/header', $data);
        $this->view('kasir/kasir-laporan', $data);
        $this->view('kasir/templates/footer');
    }

    public function tambahPesanan()
    {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            http_response_code(405); // Method Not Allowed
            echo "Metode request tidak valid.";
            exit;
        }

        $id_user_login = $_SESSION['user_id'] ?? null;
        if (!$id_user_login) {
            http_response_code(401); // Unauthorized
            echo "Akses ditolak. Silakan login kembali.";
            exit;
        }

        $kasirModel = $this->model('kasir_model');
        $id_kasir = $kasirModel->getKasirIdByUserId($id_user_login);
        if ($id_kasir === false) {
            http_response_code(404); // Not Found
            echo "Profil kasir tidak ditemukan untuk pengguna ini.";
            exit;
        }

        if (empty($_POST['cart']) || empty($_POST['nama'])) {
            // Jika masuk ke sini, redirect akan terjadi
            Flasher::setFlash('Gagal', 'Data tidak lengkap.', 'danger');
            header('Location: ' . baseurl . '/kasir');
            exit;
        }

        $dataPesanan = [
            'cart' => json_decode($_POST['cart'], true),
            'nama_pelanggan' => $_POST['nama'],
            'nomor_meja' => $_POST['meja'],
            'metode_pembayaran' => $_POST['metode'],
            'id_kasir' => $id_kasir
        ];

        if ($this->model('pesanan_model')->prosesPesananLengkap($dataPesanan)) {
            http_response_code(200); // OK
            echo "Pesanan berhasil disimpan!"; // Ini akan ditangkap oleh .then() di JS
            exit;
        } else {
            $errorMessage = "Gagal menyimpan pesanan ke database.";
            if (isset($_SESSION['db_error'])) {
                $errorMessage .= " Detail: " . $_SESSION['db_error'];
                unset($_SESSION['db_error']); // Hapus setelah ditampilkan
            }
            echo "Gagal menyimpan pesanan ke database.";
            exit;
        }


        // if ($this->model('pesanan_model')->tambah($_POST) > 0) {
        //     if ($this->model('detail_model')->tambah($_POST) > 0) {
        //         if ($this->model('pembayaran_model')->tambah($_POST) > 0) {
        //             Flasher::setFlash('Berhasil', 'Ditambahkan', 'success');
        //             header('Location:' . baseurl . '/admin/stok');
        //             exit;
        //         }
        //     }
        // } else {
        //     Flasher::setFlash('Gagal', 'Ditambahkan', 'danger');
        //     header('Location:' . baseurl . '/admin/stok');
        //     exit;
        // }
    }
}