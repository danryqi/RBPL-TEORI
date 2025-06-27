<div class="main">
  <div class="flasher">
    <?php Flasher::flash(); ?>
  </div>
  <div class="main-head">
    <h1>DAFTAR PRODUK</h1>
    <a class="nav-link" href="<?= baseurl; ?>/admin/tambahproduk">
      <p>Tambah Produk</p>
    </a>
  </div>
  <hr>
  <div class="main-content">
    <?php if ($data['allproduct'] != null) {
      foreach ($data['allproduct'] as $allproduct): ?>
        <div class="card-product"
          onclick="window.location.href='<?= baseurl; ?>/admin/detail_produk/<?= $allproduct['id_menu'] ?>'"
          style="background-image: url('<?= img; ?>/<?= $allproduct['pic_menu'] ?>'); cursor: pointer;">
          <div class="desk">
            <h1><?= $allproduct['nama_menu'] ?></h1>
            <h5><?= $allproduct['harga_menu'] ?></h5>
          </div>
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