<main>
  <table class="main mx-auto">
    <tr class="info">
      <td>
        <div class="produk-container">
          <h1>Total Produk</h1>
          <?php if ($data['produk'] != null) {
            foreach ($data['produk'] as $produk):
              ?>
              <p><?= $produk; ?></p>
            <?php endforeach;
          } else { ?>
            <p>0</p>
          <?php } ?>
        </div>
      </td>
      <td>
        <div class="stok-rendah">
          <h1>Stok Rendah</h1>
          <?php if ($data['stok'] != null) {
            foreach ($data['stok'] as $stok):
              ?>
              <p><?= $stok; ?></p>
            <?php endforeach;
          } else { ?>
            <p>0</p>
          <?php } ?>
        </div>
      </td>
      <td>
        <div class="penjualan-harian">
          <h1>Penjualan Hari Ini</h1>
          <?php if ($data['pemasukan'] != null) {
            foreach ($data['pemasukan'] as $pemasukan):
              ?>
              <p> Rp.<?= $pemasukan; ?></p>
            <?php endforeach;
          } else { ?>
            <p>Rp.0</p>
          <?php } ?>
        </div>
      </td>
      <td>
        <div class="pesanan-baru">
          <h1>Pesanan Baru</h1>
        </div>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <div class="tren-penjualan"></div>
      </td>
      <td colspan="2">
        <div class="kategori-terjual"></div>
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <div class="stok-produk">
          <div class="stok-head">
            <h1>Stok Produk</h1>
            <a class="nav-link" href="<?= baseurl; ?>/admin/stok">
              <p>Lihat Semua</p>
            </a>
          </div>
          <div class="content-stok">
            <?php if ($data['datastok'] != null) { ?>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Produk</th>
                    <th scope="col">Sisa Stok</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data['datastok'] as $datastok): ?>
                    <tr>
                      <td><?= $datastok['nama_stok']; ?></td>
                      <td><?= $datastok['jumlah_stok']; ?></td>
                      <td><?= $datastok['status_stok']; ?></td>
                    </tr>
                  <?php endforeach;
                  ?>
                </tbody>
              </table> <?php
            } else {
              ?>
              <p>Belum ada Stok yang ditambahkan</p> <?php
            } ?>
          </div>
        </div>
      </td>
      <td colspan="2">
        <div class="produk-terlaris">
          <h1>Produk Terlaris</h1>
          <div class="content-terlaris">
            <?php if ($data['terlaris'] != null) { ?>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">Produk</th>
                    <th scope="col">Sisa Stok</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data['terlaris'] as $terlaris): ?>
                    <tr>
                      <td><?= $terlaris['nama_stok']; ?></td>
                      <td><?= $terlaris['jumlah_stok']; ?></td>
                      <td><?= $terlaris['status_stok']; ?></td>
                    </tr>
                  <?php endforeach;
                  ?>
                </tbody>
              </table> <?php
            } else {
              ?>
              <p>Belum ada Produk yang ditambahkan</p> <?php
            } ?>
          </div>
        </div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <div class="pembelian-terbaru">
          <div class="head-pembelian">
            <h1>Pembelian Terbaru</h1>
            <a class="nav-link" href="<?= baseurl; ?>/admin/pembelian">
              <p>Lihat Semua</p>
            </a>
          </div>
          <div class="content-pembelian">
            <?php if ($data['penjualan'] != null) { ?>
              <table class="table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Produk</th>
                    <th scope="col">Total</th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($data['penjualan'] as $penjualan): ?>
                    <tr>
                      <td><?= $penjualan['id_detail_pesanan']; ?></td>
                      <td><?= $penjualan['waktu']; ?></td>
                      <td><?= $penjualan['nama_menu']; ?></td>
                      <td><?= $penjualan['subtotal']; ?></td>
                    </tr>
                  <?php endforeach; ?>
                  </tbody>
            </table>
            <?php
            } else {
              ?>
                  <p>Belum ada Produk terjual</p> <?php
            } ?>
          </div>
        </div>
      </td>
    </tr>
  </table>
</main>
</body>