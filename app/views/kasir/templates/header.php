<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="<?= baseurl; ?>/css/<?= $data['css'] ?>">
    <title><?= $data['judul']; ?></title>
</head>

<body>
    <div class="header">
        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="<?= baseurl; ?>">
                    <span class="logo">
                        <img src="<?= baseurl; ?>/img/Logo River.png" alt="" style="height: 58px;">
                    </span>
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <ul class="navbar-nav ms-auto align-items-center">
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="<?= baseurl; ?>/kasir/index">Kasir</a>
                        </li>
                        <li class="nav-item mx-4">
                            <a class="nav-link" href="<?= baseurl; ?>/kasir/laporan">Laporan Harian</a>
                        </li>
                        <li class="nav-item dropdown mx-4" id="login">
                            <button class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                <span class="icon-circle">
                                    <i class="bi bi-person-fill login-icon"></i>
                                </span>
                            </button>
                            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <li>
                                    <a class="dropdown-item disabled" href="#">
                                        Hallo, <span class="username-display"><?= $data['nama']; ?></span>!
                                    </a>
                                </li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?= baseurl; ?>/LoginAuth/logout">
                                        <i class="bi bi-box-arrow-right me-2"></i>
                                        Keluar
                                    </a>
                                </li>
                            </ul>

                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>