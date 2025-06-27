<div class="container mt-4">
    <div class="d-flex justify-content-between align-items-center" style="margin-bottom: 42px;">
        <span class="mb-0" style="font-size: 32px; font-weight: bold;">Laporan Transaksi Harian</span>
    </div>

    <div class="d-flex flex-wrap gap-3 mb-4">
        <div class="col summary-box flex-fill">
            <h5>Total Transaksi</h5>
            <?php if ($data['total_transaksi'] != null) {
                foreach ($data['total_transaksi'] as $total_transaksi):
                    ?>
                    <h3> Rp.<?= $total_transaksi; ?></h3>
                <?php endforeach;
            } else { ?>
                <h3>Rp.0</h3>
            <?php } ?>
        </div>
        <div class="col summary-box flex-fill">
            <h5>Total Pendapatan</h5>
            <?php if ($data['pemasukan'] != null) {
                foreach ($data['pemasukan'] as $pemasukan):
                    ?>
                    <h3> Rp.<?= $pemasukan; ?></h3>
                <?php endforeach;
            } else { ?>
                <h3>Rp.0</h3>
            <?php } ?>
        </div>
        <div class="col summary-box flex-fill">
            <h5>Produk Terlaris</h5>
            <?php if ($data['produkterlaris'] != null) {
                foreach ($data['produkterlaris'] as $produkterlaris):
                    ?>
                    <h3><?= $produkterlaris; ?></h3>
                <?php endforeach;
            } else { ?>
                <h3>-</h3>
            <?php } ?>
        </div>
        <div class="col summary-box flex-fill">
            <h5>Rata-rata per Transaksi</h5>
            <?php if ($data['ratarata'] != null) {
                foreach ($data['ratarata'] as $ratarata):
                    ?>
                    <h3> Rp.<?= $ratarata; ?></h3>
                <?php endforeach;
            } else { ?>
                <h3>Rp.0</h3>
            <?php } ?>
        </div>
    </div>

    <div class="table-responsive">
        <?php if ($data['datapenjualan'] != null) { ?>
            <table class="table table-bordered table-hover no-vertical-border">
                <thead class="table-light">
                    <tr>
                        <th>No. Transaksi</th>
                        <th>Waktu</th>
                        <th>Item</th>
                        <th>Total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data['datapenjualan'] as $penjualan): ?>
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
            <p>Belum ada produk terjual</p> <?php
        } ?>
    </div>

    <div class="mb-4">
        <div class="mt-3 d-flex justify-content-end gap-3">
            <button class="btn btn-outline-secondary" style="width: 150px; font-weight: bold;">Export Excel</button>
            <button class="btn btn-success" style="width: 150px; font-weight: bold;">Cetak Laporan</button>
        </div>
    </div>
</div>
</body>