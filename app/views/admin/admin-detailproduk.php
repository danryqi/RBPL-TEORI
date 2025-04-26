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
              background-color: #ffffff; 
              color: #198754;
              width: 40px;
              height: 40px;
              border-radius: 50%;
              box-shadow: 0 2px 4px rgba(0,0,0,0.1); 
          }
          .product-image-square {
              width: 100%; 
              max-width: 250px; /* supaya tidak terlalu besar */
              aspect-ratio: 1 / 1; /* bikin persegi */
              object-fit: cover; /* crop gambar kalau perlu */
              border-radius: 10px;
          }
          .edit-icon {
              font-size: 20px;
              font-weight: bold;
              color: #065550;
              margin-left: 5px;
              cursor: pointer;
          }
          .option-badge {
              background-color: #d9d9d9;
              color: #676767;
              margin: 3px;
              padding: 5px 10px;
              border-radius: 10px;
              display: inline-block;
              font-size: 0.9rem;
          }
          .section-title {
              font-weight: bold;
              font-size: 20px;
              margin-bottom: 5px; /* kecilkan jaraknya ke bawah */
          }
        </style>
  </head>
  <body>
      <div class="header mb-0">
          <nav class="navbar navbar-expand-lg navbar-dark py-3 px-0 mx-0" style="background-color: #065550;">
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
      <div class="content mt-5">
        <div class="container">
          <div class="row gap-5 align-items-center">
            <div class="col-md-3 text-center">
              <img src="image/IMG-20250406-WA0015.jpg" alt="Nama Produk" class="product-image-square">
            </div>
      
            <div class="col-md-8">
              <span class="mb-1">
                <span style="font-size: 30px; font-weight: bold;">Nama Produk</span> 
                <i class="bi bi-pencil-square edit-icon"></i>
              </span>
              <p class="text-muted fst-italic mb-2">10 Terjual</p><br>
              <p class=" mb-4" style="color: #065550; font-size: 22px; font-weight: bold;">Rp. Harga</p>
            </div>
          </div>
      
          <hr style="margin-top: 30px;">
      
          <div style="margin-top: 30px;">
            <p class="section-title">Deskripsi Produk :</p>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
          
            <p class="section-title">Pilihan Penyajian :</p>
            <div class="mb-3">
              <span class="option-badge">Iced</span>
              <span class="option-badge">Hot</span>
            </div>
          
            <p class="section-title">Espresso :</p>
            <div class="mb-3">
              <span class="option-badge">Normal Shot</span>
              <span class="option-badge">+1 Shot</span>
              <span class="option-badge">+2 Shot</span>
              <span class="option-badge">+3 Shot</span>
            </div>
          
            <p class="section-title">Dairy :</p>
            <div class="mb-3">
              <span class="option-badge">Milk</span>
              <span class="option-badge">Soy Multigrain</span>
              <span class="option-badge">Oat Milk</span>
              <span class="option-badge">Almond Milk</span>
            </div>
          </div>          
        </div>
      </div>
      
      
      


      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
  </html>