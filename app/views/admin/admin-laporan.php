<main>
    <div class="main-cont">
        <div class="cont-head">
            <div class="cont-title">Laporan Penjualan</div>
            <div class="cont">
                <button>
                    Cetak Laporan
                </button>
            </div>
        </div>
        <div class="sorting">
            <form method="GET" action="<?php baseurl; ?>/admin/laporan">
                <div class="form-sorting">
                    <!-- Bagian Tanggal Mulai -->
                    <div class="tanggal-mulai">
                        <h1>Tanggal Mulai</h1>
                        <label for="tanggalmulai">
                            <!--
                              Nilai 'value' diisi dari data filter yang dikirim Controller,
                              bukan dari loop. Gunakan '??' untuk nilai default jika data tidak ada.
                            -->
                            <input type="date" id="tanggalmulai" name="tanggalmulai"
                                value="<?= $data['filter']['tanggal_mulai'] ?? '' ?>">
                        </label>
                    </div>

                    <!-- Bagian Tanggal Akhir -->
                    <div class="tanggal-akhir">
                        <h1>Tanggal Akhir</h1>
                        <label for="tanggalakhir">
                            <input type="date" id="tanggalakhir" name="tanggalakhir"
                                value="<?= $data['filter']['tanggal_akhir'] ?? '' ?>">
                        </label>
                    </div>

                    <!-- Bagian Pilihan Kategori -->
                    <div class="pilihan-kategori">
                        <h1>Kategori Produk</h1>
                        <label for="kategori">
                            <select name="kategori" id="kategori">
                                <option value="">Semua Kategori</option>
                                <!-- Anda bisa mengisi pilihan kategori di sini dengan loop terpisah jika perlu -->
                                <?php foreach ($data['daftar_kategori'] ?? [] as $kategori): ?>
                                    <option value="<?= $kategori['id_kategori'] ?>"><?= $kategori['nama_kategori'] ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                        </label>
                    </div>

                    <!-- 
                      PERBAIKAN: Tombol untuk mengirim form filter
                      Letakkan di dalam div 'submit' Anda.
                    -->
                    <div class="submit">
                        <button type="submit">Terapkan</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="transaction-rate">
            <div class="current-month">
                <h1>Total Penjualan</h1>
                <div class="penjualan">
                </div>
            </div>
            <div class="monthly-transaction">
                <h1>Total Transaksi</h1>
            </div>
            <div class="product-selling">
                <h1>Produk Terjual</h1>
            </div>
            <div class="ave-transaction">
                <h1>Rata-rata per Transaksi</h1>
            </div>
        </div>
        <div class="penjualan-produk">
            <h1>Penjualan Per Produk</h1>
            <div class="penjualan-content">
                <?php if ($data['penjualan_bulanan'] != null) { ?>
                    <table class="table table-hover">
                        <tr>
                            <th>No</th>
                            <th>Nama Produk</th>
                            <th>Kategori</th>
                            <th>Qty Terjual</th>
                            <th>Harga</th>
                            <th>Total Penjualan</th>
                        </tr>
                        <?php foreach ($data['penjualan_bulanan'] as $penjualan): ?>
                            <tr>
                                <td></td>
                            </tr>
                        <?php endforeach; ?>
                    </table>
                <?php } else {
                    ?>
                    <p>Belum ada Produk Terjual</p> <?php
                } ?>
            </div>
        </div>
        <div class="daily-sell">
            <h1>Penjualan Harian</h1>
            <div class="sell-content">
                <?php if ($data['penjualan'] != null) { ?>
                    <table class="table table-hover">
                        <tr>
                            <th>Tanggal</th>
                            <th>Total Transaksi</th>
                            <th>Produk Terjual</th>
                            <th>Total Penjualan</th>
                        </tr>
                    </table>
                <?php } ?>
            </div>
        </div>
    </div>
</main>

</body>