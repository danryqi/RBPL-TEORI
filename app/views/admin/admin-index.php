<main>
  <table class="main mx-auto">
    <tr class="info">
      <td>
        <div class="produk-container"></div>
      </td>
      <td>
        <div class="stok-rendah"></div>
      </td>
      <td>
        <div class="penjualan-harian"></div>
      </td>
      <td>
        <div class="pesanan-baru"></div>
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
        <div class="stok-produk"></div>
      </td>
      <td colspan="2">
        <div class="produk-terlaris"></div>
      </td>
    </tr>
    <tr>
      <td colspan="4">
        <div class="pembelian-terbaru">
          <h1>Pembelian Terbaru</h1>
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
              <?php if ($data['penjualan'] != null) { ?>
              <?php foreach( $data['penjualan'] as $penjualan ) : ?>
              <tr>
                <td><?= $penjualan['id_detail_pesanan']; ?></td>
                <td><?= $penjualan['waktu']; ?></td>
                <td><?= $penjualan['nama_menu']; ?></td>
                <td><?= $penjualan['subtotal']; ?></td>
              </tr>
              <?php endforeach; 
            }else {
              echo 'Belum ada Produk terjual';
            }?>
            </tbody>
          </table>
        </div>
      </td>
    </tr>
  </table>
</main>
</body>