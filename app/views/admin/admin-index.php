<main>
  <?php Flasher::login(); ?>
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
        <div class="tren-penjualan">
          <div class="header-chart">
            <h1>Tren Penjualan</h1>
            <div class="filter-buttons">
              <!-- <button class="filter-btn">Minggu</button> -->
              <button class="filter-btn active">Bulan</button>
              <!-- <button class="filter-btn">Tahun</button> -->
            </div>
          </div>
          <div class="chart-area">
            <canvas id="trenPenjualanChart"></canvas>
          </div>
        </div>
      </td>
      <td colspan="2">
        <div class="kategori-terjual">
          <h1>Kategori Produk terjual</h1>
          <div class="chart-wrapper">
            <div class="canvas-container">
              <canvas id="kategoriChart"></canvas>
            </div>
            <div id="chartLegend" class="chart-legend">
              <?php if (!empty($data['kategori_data_untuk_legend'])): ?>
                <?php
                $totalSemuaKategori = array_sum(array_column($data['kategori_data_untuk_legend'], 'total_terjual'));
                $totalSemuaKategori = ($totalSemuaKategori == 0) ? 1 : $totalSemuaKategori;
                $warna = ['#0F5B54', '#36A2EB', '#FFCE56', '#FF6384', '#4BC0C0'];
                $i = 0;
                ?>
                <ul>
                  <?php foreach ($data['kategori_data_untuk_legend'] as $item): ?>
                    <?php
                    $persen = round(($item['total_terjual'] / $totalSemuaKategori) * 100);
                    $warnaSaatIni = $warna[$i % count($warna)];
                    ?>
                    <li class="legend-item">
                      <span class="legend-color-box" style="background-color: <?= $warnaSaatIni; ?>"></span>
                      <?= htmlspecialchars($item['kategori_menu']); ?>: <?= $persen; ?>%
                    </li>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </ul>
              <?php endif; ?>
            </div>
          </div>
        </div>
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
              <?php foreach ($data['terlaris'] as $terlaris): ?>
                <div class="item-terlaris">
                  <span class="product-name"><?= htmlspecialchars($terlaris['nama_menu']); ?></span>
                  <div class="progress-bar-container">
                    <div class="progress-bar-fill" style="width: <?= $terlaris['lebar_persen']; ?>%;"></div>
                  </div>
                  <span class="product-count"><?= $terlaris['jumlah']; ?></span>
                </div>
              <?php endforeach;
            } else {
              ?>
              <p>Belum ada Produk yang terjual</p> <?php
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
              <p>Belum ada Produk terjual Hari ini</p> <?php
            } ?>
          </div>
        </div>
      </td>
    </tr>
  </table>
</main>
<script>
  document.addEventListener('DOMContentLoaded', function () {
    // Ambil data dari PHP
    const trenLabels = <?= $data['tren_labels_json'] ?? '[]'; ?>;
    const trenData = <?= $data['tren_data_json'] ?? '[]'; ?>;

    // Hanya gambar jika ada data
    if (trenLabels.length > 0) {
      const ctx = document.getElementById('trenPenjualanChart');

      const data = {
        labels: trenLabels,
        datasets: [{
          label: 'Penjualan',
          data: trenData,
          fill: true, // Membuat area di bawah garis terisi warna
          backgroundColor: 'rgba(15, 91, 84, 0.1)', // Warna area (sangat transparan)
          borderColor: '#0F5B54', // Warna garis utama
          tension: 0.4, // Membuat garis melengkung (0=lurus, 1=sangat melengkung)
          pointBackgroundColor: '#0F5B54', // Warna titik
          pointBorderColor: '#fff', // Border putih di sekitar titik
          pointHoverRadius: 7, // Ukuran titik saat di-hover
          pointRadius: 5 // Ukuran titik normal
        }]
      };

      const config = {
        type: 'line', // Tipe chart adalah 'line'
        data: data,
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: {
              beginAtZero: true // Sumbu Y dimulai dari 0
            }
          },
          plugins: {
            legend: {
              display: false // Sembunyikan legend karena hanya ada 1 dataset
            }
          }
        }
      };

      new Chart(ctx, config);
    }
  });
</script>
<script>
  document.addEventListener('DOMContentLoaded', function () {

    // --- SELURUH KODE LAMA ANDA SEKARANG ADA DI DALAM SINI ---

    // Ambil data dari PHP
    const kategoriLabels = <?= $data['kategori_labels_json'] ?? '[]'; ?>;
    const kategoriTotals = <?= $data['kategori_totals_json'] ?? '[]'; ?>;

    // Hanya gambar chart jika ada data
    if (kategoriLabels.length > 0) {
      const ctx = document.getElementById('kategoriChart');

      const data = {
        labels: kategoriLabels,
        datasets: [{
          data: kategoriTotals,
          backgroundColor: ['#0F5B54', '#36A2EB', '#FFCE56', '#FF6384', '#4BC0C0'],
          hoverOffset: 4,
          borderWidth: 0,
        }]
      };

      const config = {
        type: 'doughnut',
        data: data,
        options: {
          responsive: true,
          maintainAspectRatio: false,
          cutout: '70%',
          plugins: {
            legend: { display: false }
          }
        }
      };

      // Baris ini sekarang aman untuk dijalankan
      new Chart(ctx, config);
    }

  });
</script>

</body>