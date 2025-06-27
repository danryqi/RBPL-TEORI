<main>
    <div class="main-content">
        <div class="cont-head">
            <div class="cont-title">Stok Bahan Baku</div>
            <div class="cont">
                <button type="button" data-bs-toggle="modal" data-bs-target="#modaltambah">
                    <p>Stok Baru</p>
                </button>
            </div>
        </div>
        <table class="info mx-auto">
            <tr class="info-row">
                <td>
                    <div class="total-produk">
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
                            foreach ($data['stok'] as $stok): ?>
                                <p> <?= $stok; ?></p>
                            <?php endforeach;
                        } else { ?>
                            <p>0</p>
                        <?php } ?>
                    </div>
                </td>
                <td>
                    <div class="perlu-stok"></div>
                </td>
                <td>
                    <div class="update-terakhir">
                        <h1>Update Terakhir</h1>
                        <?php if ($data['terbaru'] != null) {
                            foreach ($data['terbaru'] as $terbaru): ?>
                                <p><?= $terbaru ?></p>
                            <?php endforeach;
                        } else { ?>
                            <p>00/00/0000</p>
                        <?php } ?>
                    </div>
                </td>
            </tr>
        </table>
        <div class="content">
            <div class="modal fade" id="modaltambah" aria-labelledby="modaltambahlabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <form class="form-stok" action="<?= baseurl; ?>/admin/tambahstok" method="post">
                            <div class="modal-head">
                                <h1 class="tambahstok" id="modaltambahlabel">Stok Baru</h1>
                            </div>
                            <div class="modal-body">
                                <div class="name">
                                    <label for="nama">Nama Stok</label>
                                    <input class="form-control" type="text" id="nama" name="nama"
                                        placeholder="Nama stok">
                                </div>
                                <div class="Satuan">
                                    <label for="satuan">Satuan Stok</label>
                                    <input class="form-control" type="text" id="satuan" name="satuan"
                                        placeholder="gram / Kg / ml / Liter">
                                </div>
                                <div class="quantity">
                                    <label for="kuantitas">Kuantitas</label>
                                    <input class="form-control" type="number" id="kuantitas" name="kuantitas"
                                        placeholder="1" min="1">
                                </div>
                                <div class="minimum">
                                    <label for="minimum">Minimum Stok</label>
                                    <input class="form-control" type="number" id="minimum" name="minimum"
                                        placeholder="1" min="1">
                                </div>
                                <div class="editor">
                                    <p>Diubah Oleh :</p>
                                    <?php foreach ($data['user'] as $user): ?>
                                        <p><?= $user ?></p>
                                        <label for="editor"></label>
                                        <input class="hidden" type="number" id="editor" name="editor"
                                            value="<?= $user['id_admin'] ?>">
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="close" data-bs-dismiss="modal">Batal</button>
                                <button type="submit" class="save">Simpan</button>
                            </div>
                        </form>
                    </div>
                </div>

            </div>
            <?php if ($data['datastok'] != null) { ?>
                <table class="tabel-stok table-hover">
                    <tr class="tabel-head">
                        <th>No</th>
                        <th>Nama Stok</th>
                        <th>Satuan</th>
                        <th>Stok</th>
                        <th>Stok Min.</th>
                        <th>Status</th>
                        <th>Terakhir Diperbarui</th>
                        <th>Aksi</th>
                    </tr>
                    <?php foreach ($data['datastok'] as $datastok): ?>
                        <tr>
                            <td><?= $datastok['id_stok'] ?></td>
                            <td><?= $datastok['nama_stok'] ?></td>
                            <td><?= $datastok['satuan_stok'] ?></td>
                            <td><?= $datastok['jumlah_stok'] ?></td>
                            <td><?= $datastok['min_stok'] ?></td>
                            <td><?= $datastok['status_stok'] ?></td>
                            <td><?= $datastok['update_stok'] ?></td>
                            <td></td>
                        </tr>
                    <?php endforeach; ?>
                </table>
                <?php
            } else {
                ?>
                <p>Belum ada stok yang ditambahkan</p>
            <?php } ?>
        </div>
    </div>
</main>

</body>