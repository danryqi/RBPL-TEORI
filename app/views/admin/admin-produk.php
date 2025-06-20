<div class="main">
  <div class="main-head">
    <h1>DAFTAR PRODUK</h1>
    <a class="nav-link" href="<?= baseurl; ?>/admin/edit_produk">
      <p>Tambah Produk</p>
    </a>
  </div>
  <hr>
  <div class="main-content">
    <?php if ($data['allproduct'] != null) {
      foreach ($data['allproduct'] as $allproduct): ?>
        <div class="card-product">
          <div class="img-holder">
            <img src="<?= $allproduct['pic_menu'] ?>" alt="">
          </div>
          <h1><?= $allproduct['nama_menu'] ?></h1>
          <h5><?= $allproduct['harga_menu'] ?></h5>
        </div>
      <?php endforeach; ?>
    <?php } else {
      ?>
      <div class="blank">
        <p>Belum Ada Produk yang ditambahkan</p>
      </div><?php
    } ?>
  </div>
</div>
</body>