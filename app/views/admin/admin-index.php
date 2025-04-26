<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
    <style>
        .navbar .dropdown-toggle::after {
          display: none;
        }
        .icon-circle {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: #ffffff; /* Warna lingkaran */
            color: #198754; /* Warna icon */
            width: 40px;
            height: 40px;
            border-radius: 50%;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1); /* Opsional: bayangan halus */
        }
      </style>
      
</head>
<body>
    <div class="header mb-0">
        <nav class="navbar navbar-expand-lg bg-success navbar-dark py-3">
            <div class="container">
              <a class="navbar-brand" href="index.html">
                <span class="fw-bold fs-3 text-color1">
                  <img src="image/Logo River.png" alt="" style="height: 35px;">
                </span>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
          
              <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <ul class="navbar-nav mb-2 mb-lg-0 fs-6 fw-bolder ms-auto align-items-center">
                  <li class="nav-item mx-3">
                    <a class="nav-link nav-aktif" href="index.html">Beranda</a>
                  </li>
                  <li class="nav-item mx-4">
                    <a class="nav-link" href="dataupdate.html">Stok</a>
                  </li>
                  <li class="nav-item mx-4">
                    <a class="nav-link" href="produk.html">Produk</a>
                  </li>
                  <li class="nav-item mx-4">
                    <a class="nav-link" href="laporan.php">Laporan</a>
                  </li>
                  <li class="nav-item dropdown mx-4" id="login">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                      role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      <span class="icon-circle">
                        <i class="bi bi-person-fill login-icon"></i>
                      </span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                      <li><a class="dropdown-item" href="kontakpenting.html">Kontak Penting</a></li>
                      <li><a class="dropdown-item" href="#">Hubungi Kami</a></li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </nav>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
