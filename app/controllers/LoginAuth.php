<?php
class LoginAuth extends Controller
{
    public function index()
    {
        if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
            if ($_SESSION['user_role'] === 'admin') {
                header('Location: ' . baseurl . '/admin/dashboard');
            } else {
                header('Location: ' . baseurl . '/kasir/order');
            }
            exit;
        }

        $data['judul'] = 'Login';
        $data['css'] = 'login.css';
        $this->view('login/Login', $data);
    }

    public function loginProcess()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $usernameInput = $_POST['username'];
            $passwordInput = $_POST['password'];

            $userModel = $this->model('Auth_model');
            $loggedInUser = $userModel->checkLogin($usernameInput, $passwordInput);

            if ($loggedInUser) {
                $_SESSION['user_id'] = $loggedInUser['id'];
                $_SESSION['username'] = $loggedInUser['username'];
                $_SESSION['user_role'] = $loggedInUser['role'];
                $_SESSION['is_logged_in'] = true;

                if ($loggedInUser['role'] === 'admin') {
                    Flasher::setFlash('Selamat Datang,', 'Admin', 'success');
                    header('Location: ' . baseurl . '/admin/');
                    exit;
                } elseif ($loggedInUser['role'] === 'kasir') {
                    Flasher::setFlash('Selamat Datang,', 'Kasir', 'success');
                    header('Location: ' . baseurl . '/kasir/');
                    exit;
                } else {
                    Flasher::setFlash('Login Gagal', 'Peran tidak dikenali.', 'danger');
                    header('Location: ' . baseurl . '/loginAuth');
                    exit;
                }

            } else {
                Flasher::setFlash('Login Gagal', 'Username atau password salah.', 'danger');
                header('Location: ' . baseurl . '/loginAuth');
                exit;
            }
        }
    }

    public function logout()
    {
        session_start();
        session_unset();
        session_destroy();
        header('Location: ' . baseurl . '/loginAuth');
        exit;
    }
}