<main>
    <div class="main">
        <div class="main-head">
            <div class="cont-title">Penjualan Terbaru</div>
        </div>
        <div class="content">
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
                        <?php endforeach;
            } else {
                ?>
                        <p>Belum ada Produk terjual</p> <?php
            } ?>
                </tbody>
            </table>
        </div>
    </div>
</main>
</body>