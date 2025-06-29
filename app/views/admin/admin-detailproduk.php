<div class="content mt-5">
  <div class="container">
    <div class="product gap-5">
      <div class="image col-3 text-center" alt="<?= $data['product']['nama_menu'] ?>"
        style="background-image: url('<?= img; ?>/<?= $data['product']['pic_menu'] ?>')"></div>
      <div class="header-produk">
        <div class="nama">
          <h1><?= $data['product']['nama_menu'] ?></h1>
          <a href="<?= baseurl ?>/admin/edit_produk/<?= $data['product']['id_menu'] ?>"
            class="text-dark text-decoration-none" aria-label="Edit Produk">
            <i class="bi bi-pencil-square edit-icon"></i>
          </a>
        </div>
        <p class=" harga">
          Rp.<?= $data['product']['harga_menu'] ?>
        </p>
      </div>
      <a href="<?= baseurl; ?>/admin/hapusproduk/<?= $data['product']['id_menu'] ?>" class="ms-auto"
        onclick="return confirm('Yakin ingin menghapus data produk?');">
        <button class="hapus">
          <p>Hapus</p>
        </button>
      </a>
    </div>
    <hr style="margin-top: 30px;">
    <div class="deskripsi" style="margin-top: 30px;">
      <h1 class="section-title">Deskripsi Produk :</h1>
      <p><?= $data['product']['desc_menu'] ?></p>
      <div class="penyajian">
        <h1>Pilihan Penyajian</h1>
        <label for="iced">Iced</label>
        <label for="hot">Hot</label>
      </div>
      <div class="Pilihan Espresso">
        <h1>Pilihan Penyajian</h1>
        <label for="normal">Normal Shot</label>
        <label for="double">Double Shot</label>
        <label for="triple">Triple Shot</label>
      </div>
      <div class="Pilihan Dairy">
        <h1>Pilihan Penyajian</h1>
        <label for="milk">Milk</label>
        <label for="oat">Oat Milk</label>
        <label for="almond">Almond Milk</label>
      </div>
    </div>
  </div>
</div>
</body>